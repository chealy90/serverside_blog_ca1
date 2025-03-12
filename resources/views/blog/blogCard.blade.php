@extends('layouts.app')


@section('content')
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<div class="blogCard block container max-w-sm h-80">
    <div class="blogCardHeader w-full bg-red-700 h-20">
        <h3>{$post->title}</h3>
        <p>10/02/2025</p>
    </div>
    <div class="blogCardContent p-1">
        <p>{$post->description}
        </p>
    </div>



</div>  

@endsection