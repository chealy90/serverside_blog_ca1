@extends('layouts.app')

@section('content')
    
    
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
    
    <div class="hero-section" style="background-image: url('{{ asset('images/singing.jpg') }}');">
        <div class="hero-overlay"></div> <!-- Semi-transparent overlay -->
        <div class="hero-content">
            <h1 class="hero-title">Welcome to Louder Inc.</h1>
            <p class="hero-text">
                Discover, share, and engage with amazing content. Whether you're here to read, write, or connect over music, you've come to the right place.  
                <a href="{{ route('about') }}" class="hero-link">Learn more about us →</a>
            </p>
        </div>
    </div>
    
    
    



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
        

    <div class="cta-section">
        @guest
            <h2 class="cta-title">Join Our Community</h2>
            <p class="cta-text">Sign up today to share your thoughts with the world.</p>
            <div class="cta-buttons">
                <a href="{{ route('login') }}" class="button">Log In</a>
                <a href="{{ route('register') }}" class="button button-secondary">Register</a>
            </div>
        @else
            <h2 class="cta-title">Start Sharing Your Ideas</h2>
            <p class="cta-text">Create a new post and let your voice be heard.</p>
            <div class="cta-buttons">
                <a href="{{ route('createPost') }}" class="button">Create a Post</a>
            </div>
        @endguest
    </div>
    

    

    


    
@endsection