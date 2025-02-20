@extends('layouts.app')


@section('content')
<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<div class="blogCard block container max-w-sm h-80">
    <div class="blogCardHeader w-full bg-red-700 h-20">
        <h3 >Title 3</h3>
        <p>10/02/2025</p>
    </div>
    <div class="blogCardContent p-1">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
</div>  

@endsection