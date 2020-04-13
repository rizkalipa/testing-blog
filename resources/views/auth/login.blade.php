@extends('template.master')

@section('title', 'Login')

@section('content')

<div class="w-9/12 mx-auto mt-10">
    <div class="lg:w-6/12 sm:w-6/12 sm:w-full mx-auto bg-gray-800 rounded p-10 h-full">
        <h2 class="text-white font-bold text-3xl">Enter your credential</h2>
        <form action="{{ route('login')  }}" method="POST" class="mt-10">
            @csrf
            <div class="flex flex-col">
                <input type="text" class="my-2 py-2 text-white bg-transparent border-l-2 pl-3 focus:outline-none focus:border-blue-600 transition duration-300 ease-in-out"
                       placeholder="Email ..." name="email">
                <input type="password" class="my-2 py-2 text-white bg-transparent border-l-2 pl-3 focus:outline-none focus:border-blue-600 transition duration-300 ease-in-out"
                       placeholder="Password ..." name="password">
            </div>
            <div class="mt-8">
                <button type="submit" class="text-white bg-green-500 rounded-full py-2 px-6 hover:bg-green-600 focus:outline-none transition duration-300 ease-in-out">
                    <span><i class="fas fa-user mr-2"></i></span>Login</button>
                <a href="#" class="text-white py-2 px-4">Forgot Password</a>
            </div>
        </form>
    </div>
</div>

@endsection
