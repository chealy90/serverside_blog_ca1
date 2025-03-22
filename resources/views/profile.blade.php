@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <!-- Profile Card -->
    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        <!-- Profile Header -->
        <div class="bg-blue-600 p-6">
            <h1 class="text-3xl font-bold text-white">User Profile</h1>
        </div>

        <!-- Profile Content -->
        <div class="p-6">
            <div class="flex flex-col items-center space-y-4">
                <!-- Profile Picture -->
                <img 
                    src="{{ asset('images/profile-picture.jpg') }}" 
                    alt="Profile Picture" 
                    class="w-32 h-32 rounded-full border-4 border-white shadow-lg"
                >

                <!-- User Name -->
                <h2 class="text-2xl font-semibold text-gray-800">{{ $user->name }}</h2>

                

                <!-- User Stats -->
                <div class="flex space-x-6 mt-4">
                    <div class="text-center">
                        <span class="text-lg font-bold text-gray-800">{{ \App\Models\Post::where('user_id', auth()->id())->count() }}</span>
                        <span class="text-gray-600">Posts</span>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

    <!-- Additional Sections -->
    <div class="mt-8 max-w-3xl mx-auto">
        <!-- Settings -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Settings</h3>
            <form >
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="{{ $user->email }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    >
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    >
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"/>

                </div>

                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="{{ $user->name }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    >
                </div>

                <div class="mb-4">
                    <img 
                        src="{{ asset('images/profile-picture.jpg') }}" 
                        alt="Profile Picture" 
                        class="w-32 h-32 rounded-full border-4 border-white shadow-lg"/>
                    <label for="profile_picture" class="block text-gray-700">Profile Picture</label>
                    <input 
                        type="file" 
                        id="profile_picture" 
                        name="profile_picture" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600"
                    />
                </div>

                <button 
                    type="submit" 
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300"
                >
                    Save Changes
                </button>
            </form>
        </div>


        <div class="bg-white rounded-lg shadow-lg p-6">
            @foreach ($posts as $post)
            <div>
                <p>POST: {{ $post->title }}</p>
            
                <!-- Delete Post Form -->
                <form action="{{ route('deletePost', ['id' => $post->id]) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">
                        Delete Post
                    </button>
                </form>
            
                <!-- Edit Post Form -->
                <form action="{{ route('editPost', ['id' => $post->id]) }}" method="GET" class="inline">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">
                        Edit Post
                    </button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection