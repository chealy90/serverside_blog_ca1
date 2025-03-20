@extends('layouts.app')

@section('content')
<div class="blog-card-container">

    <!-- Create Blog Button -->
    @auth
    <div class="create-blog-container">
        <a href="/create" class="create-blog-button">+ Create Blog</a>
    </div>
    @endauth

    <!-- Blog Cards -->
    @foreach($posts as $post)
    <div class="blog-card">
        
        <!-- Thumbnail Image -->
        <div class="blog-card-thumbnail">
            <img src="{{ asset('images/' . $post->image_path) }}" alt="Blog Post Thumbnail">
        </div>
    
        <!-- Blog Content -->
        <div class="blog-card-content">
            <!-- Title -->
            <h2 class="blog-card-title">{{ $post->title }}</h2>
        
            <!-- Short Description -->
            <p class="blog-card-description">
                @if(strlen($post->description) > 250)
                    {{ substr($post->description, 0, 249) . "..." }}
                @else
                    {{ $post->description }}
                @endif
            </p>
        
            <!-- Metadata (Author and Date) -->
            <div class="blog-card-meta">
                <span class="blog-card-author">By John Doe</span>
                <span class="blog-card-date">{{ $post->created_at->format('M d, Y') }}</span>
            </div>
        
            <!-- Read More Button -->
            <a href="{{ url('/blogs/' . $post->id) }}" class="blog-card-button">Read More</a>
        </div>
    </div>
    @endforeach

</div>
@endsection
