@extends('layouts.app')


@section('content')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <div id="recentBlogPostsSection" class="container m-auto min-h-96 w-full">
        <h2 class="p-100 ">Recent Blogposts</h2>
        <div id="recentBlogPostsContainer" class="flex justify-around w-9/10 h-1/1">
            @foreach ($posts as $post)
            <div class="blogCard block container max-w-sm h-80">
                <div class="blogCardHeader w-full bg-red-700 h-20">
                    <h3>{{$post->title}}</h3>
                    <p>10/02/2025</p>
                </div>
                <div class="blogCardContent p-1">
                    <p>{{$post->description}}
                    </p>
                </div>
            
            
            
            </div>  
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