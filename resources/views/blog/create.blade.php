@extends('layouts.app')

@section('content')
<div class="edit-container text-gray-800">
    <h1 class="header">Create Post</h1>

    @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form" action="/create" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text" name="title" placeholder="Title">

        <textarea name="description" placeholder="Description..."></textarea> 

        <input type="file" name="image">

        <button type="submit" class="button">Create Post</button>
    </form>
</div>
@endsection
