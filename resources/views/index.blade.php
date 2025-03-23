@extends('layouts.app')

@section('content')
    
    
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">  
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


    <div>
        <h3>
            Keep up with recent music news!
        </h3>
        <iframe src="https://www.instagram.com/loudwire/" style="border:0px #ffffff none;" name="instagramIFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="600px" width="800px" allowfullscreen>
            </iframe>
            <div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;">
            </div>
            <div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;"><a href="https://www.embedista.com/">Iframe Generator</a></div><script type="text/javascript" src="https://www.embedista.com/j/if.js"></script> </div><style>.boxes2{height:212px;width:316px;} #new img{max-width:none!important;background:none!important}#iframe{max-height:none!important;max-width:none!important;background:none!important}</style></div>
    </div>

    <div>
        <h3>Ready to share your latest experience?</h3>
        <button type="button">Add a blog</button>
    </div>

    

    


    
@endsection