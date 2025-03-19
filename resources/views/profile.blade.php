@extends('layouts.app');

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

                <!-- User Bio -->
                <p class="text-gray-600 text-center">
                    {{ $user->bio ?? 'No bio available.' }}
                </p>

                <!-- User Stats -->
                <div class="flex space-x-6 mt-4">
                    <div class="text-center">
                        <span class="text-lg font-bold text-gray-800">125</span>
                        <span class="text-gray-600">Posts</span>
                    </div>
                    <div class="text-center">
                        <span class="text-lg font-bold text-gray-800">1.2K</span>
                        <span class="text-gray-600">Followers</span>
                    </div>
                    <div class="text-center">
                        <span class="text-lg font-bold text-gray-800">350</span>
                        <span class="text-gray-600">Following</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Actions -->
        <div class="border-t border-gray-200 p-6">
            <div class="flex justify-center space-x-4">
                <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Edit Profile
                </button>
                <button class="bg-gray-300 text-gray-800 px-6 py-2 rounded-lg hover:bg-gray-400 transition duration-300">
                    Message
                </button>
            </div>
        </div>
    </div>

    <!-- Additional Sections -->
    <div class="mt-8 max-w-3xl mx-auto">
        <!-- Recent Activity -->
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Recent Activity</h3>
            <ul class="space-y-3">
                <li class="text-gray-600">Posted a new photo</li>
                <li class="text-gray-600">Liked a post</li>
                <li class="text-gray-600">Commented on a post</li>
            </ul>
        </div>

        <!-- Settings -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Settings</h3>
            <form>
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
                    <form action="{{ route('deletePost', $post->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">
                            Delete Post
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection