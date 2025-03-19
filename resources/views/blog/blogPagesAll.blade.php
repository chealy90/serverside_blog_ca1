@extends('layouts.app')

@section('content')
<div class="blog-card-container">

  @auth
  <button onClick=""><a href="/create">Create Blog</a></button>
  @endauth


    @foreach($posts as $post)
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
            {{substr($post->description, 0, 249) . "..."}}
        @else
            {{ $post->description }}
        @endif
      </p>
  
      <!-- Metadata (Author and Date) -->
      <div class="blog-card-meta">
        <span class="blog-card-author">By John Doe</span>
        <span class="blog-card-date">{{ $post->created_at }}</span>
      </div>
  
      <!-- Read More Button -->
      <a href={{ "/blogs/" . $post->id }} class="blog-card-button">Read More</a>
    </div>
  </div>
  @endforeach

@endsection