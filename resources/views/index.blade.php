@extends('layouts.app')

@section('content')
    
    
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">  
    <div id="recentBlogPostsSection">
        <h2>Recent Blogposts</h2>
        <div id="recentBlogPostsContainer" class="flex justify-around">
            @foreach ($posts as $post)
            <a href="{{ route('blogs/display', ['id' => $post->id]) }}">
                    <div class="blogCard card h-100 shadow" style="width: 400px;">
                    <div class="card-body">
                        <div class="blogCardHeader bg-red-700 text-white p-3">
                            <h3 class="card-title">{{ $post->title }}</h3>
                            <p class="card-subtitle mb-2 text-white-50">{{ $post->created_at->format('M d, Y') }}</p>
                        </div>
                        <div class="blogCardContent p-3">
                            <p class="card-text">{{ Str::limit($post->description, 120, '...') }}</p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
    </div>


    <div>
        <h3>
            Keep up with recent music news!
        </h3>
        <div style="width:600px;height:600px;display:block;background-color:white">
             Instagram Stuff   
        </div>
    </div>

    <div>
        <h3>Ready to share your latest experience?</h3>
        <button type="button">Add a blog</button>
    </div>

    

    


    
@endsection