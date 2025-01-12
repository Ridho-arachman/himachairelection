@extends('layouts.app')

@section('title', 'Not Found')

@section('content')
    <div class="text-center">
        <h1 class="text-9xl font-bold text-blue-500">404</h1>
        <p class="text-xl text-gray-600 mt-4">Oops! The page you are looking for does not exist.</p>
        @auth
            <a href="/vote"
                class="mt-6 inline-block px-6 py-3 bg-blue-500 text-white rounded-lg text-lg hover:bg-blue-600 transition">
                Go Back to Home
            </a>
        @endauth
        @guest
            <a href="/"
                class="mt-6 inline-block px-6 py-3 bg-blue-500 text-white rounded-lg text-lg hover:bg-blue-600 transition">
                Go Back to Home
            </a>
        @endguest
    </div>
@endsection
