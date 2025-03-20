@extends('layouts.app')


@section('content')
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<div class="blogCard card h-100 shadow">
    <img src={{ asset('images/' . $post->image_path) }} class="card-img-top" alt="Blog Image">
    <div class="card-body">
        <div class="blogCardHeader bg-red-700 text-white p-3">
            <h3 class="card-title">{{$post->title}}</h3>
            <p class="card-subtitle mb-2 text-white-50">{{ $post->created_at }}</p>
        </div>
        <div class="blogCardContent p-3">
            <p class="card-text">{{$post->description}}</p>
        </div>
    </div>
</div>

@endsection