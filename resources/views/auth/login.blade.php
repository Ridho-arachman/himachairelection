@extends('layouts.app')
@section('title', 'login')

@section('content')
    <div class="w-full max-w-md  bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-800">
        <h2 class="text-2xl mb-6 text-center font-bold dark:text-white">Login</h2>

        @include('partials.success')

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 dark:text-white">Email</label>
                <input type="email" name="email" id="email"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required value="{{ old('email') }}">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2 dark:text-white">Password</label>
                <input type="password" name="password" id="password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    required>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Login
                </button>
                <a href="{{ route('register') }}" class="text-sm text-blue-500 hover:text-blue-700">
                    Register
                </a>
            </div>
        </form>
    </div>
@endsection
