@extends('layouts.app')


@section('content')

<div class="blogContainer">
    <div class="blog">
        <div class="blog-heading">
            <h2>{{$post->title  }}</h2>

            <div class="blogInfo">
                <p></p>
                <p>Published: {{ $post->created_at }}</p>
            </div>
        </div>

        

        <div class="blogContent">
            <p>{{ $post->description }}</p>
            <img src={{ e($post->image_path) }} alt="post image"/>
        </div>
    </div>

</div>

@endsection