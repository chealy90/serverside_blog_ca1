<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class UserController extends Controller
{
    //
    public function showProfile(){
        $user = auth()->user();
        $posts = Post::where('user_id', auth()->id())->get();
        return view('profile', compact('user', 'posts'));
    }

    public function getAllPosts($id){
        return Post::find();
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        //password validation
        if ($request->password != $request->password_confirmation){
            return redirect()->back()->with('error', 'Passwords do not match');
        }

        if (strlen($request->password) < 8 && $request->password != ""){
            return redirect()->back()->with('error', 'Password must be at least 8 characters');
        }

        


        //profile picture (if uploaded)
        //$newImageName = null;
        // Generate a unique file name
        if ($request->hasFile('profile_picture')) {
            $newImageName = uniqid() . '-' . $request->name . '.' . $request->profile_picture->extension();
            //dd($newImageName);

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

            try {
                if ($request->hasFile('image')){
                    $request->image->move($directory, $newImageName);
                }
            } catch (\Exception $e) {
                Log::error("File upload failed: " . $e->getMessage());
                return redirect()->back()->with('error', 'File upload failed.');
            }

        }
     
        
        

        User::where('id', $id)
        ->update([
            'email' => $request->input('email'),    
            'password' => $request->input('password') == "" ? User::where('id', $id)->value('password') : Hash::make($request->input('password')),
            'id' => auth()->user()->id,
            'profile_picture' => $request->hasFile('profile_picture') 
                ? $newImageName
                : User::where('id', $id)->value('profile_picture'), // Keep existing image
            'name' => $request->input('name')
        ]);

        

        return redirect('/profile')
            ->with('message', 'Your post has been updated!');
    }
}
