@extends('layouts.app')

@section('content')
<div class="edit-container text-gray-800">
    <h1 class="header">Update Post</h1>

    @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form" action="/commitEdit/{{ $post->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ $post->title }}" placeholder="Title">

        <textarea name="description" placeholder="Description...">{{ $post->description }}</textarea> 

        <input type="file" name="image" value={{ $post->image }}>

        <button type="submit" class="button">Submit Post</button>
    </form>
</div>
@endsection
