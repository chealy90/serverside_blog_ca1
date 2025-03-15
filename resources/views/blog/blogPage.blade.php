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
            {{ $post->description }}
            <img src={{$post->image_url }}>
        </div>
    </div>

</div>

@endsection