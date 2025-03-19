<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Log;

class BlogPostController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resourc.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {   
        $post = Post::find($id);
        return view('blog.blogPage', compact('post'));
        
    }

    public function displayOne($id){
        
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|mimes:jpg,png,jpeg|max:2048',
    ]);

    // Define the directory using public_path()
    $directory = public_path('images');

    // Ensure the directory exists
    if (!file_exists($directory)) {
        mkdir($directory, 0755, true); // Create directory with proper permissions
    }

    // Check if the directory is writable
    if (!is_writable($directory)) {
        Log::error("Directory is not writable: " . $directory);
        return redirect()->back()->with('error', 'The images directory is not writable.');
    }

    // Generate a unique file name
    $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();

    // Move the uploaded file to the directory
    try {
        $request->image->move($directory, $newImageName);
    } catch (\Exception $e) {
        Log::error("File upload failed: " . $e->getMessage());
        return redirect()->back()->with('error', 'File upload failed.');
    }

    echo "here";
    // Save the post to the database
    Post::create([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
        'image_path' => $newImageName,
        'user_id' => auth()->user()->id,
    ]);

    return redirect()->back()->with('success', 'Post created successfully!');
}
    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('blog.show')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        return view('blog.edit')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
                'user_id' => auth()->user()->id
            ]);

        return redirect('/blog')
            ->with('message', 'Your post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id);
        $post->delete();

        return redirect('/profile')
            ->with('message', 'Your post has been deleted!');
    }
}

