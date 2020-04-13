@extends('template.master')

@section('title', 'Login')

@section('content')

    <div class="w-9/12 mx-auto mt-10">

        {{ dump($errors) }}

        <div class="w-6/12 mx-auto bg-gray-800 rounded p-10 h-full">
            <h2 class="text-white font-bold text-3xl">Create new account</h2>
            <form action="{{ route('register')  }}" method="POST" class="mt-10">
                @csrf
                <div class="flex flex-col">
                    <input type="text" class="my-3 py-1 text-white bg-transparent border-l-2 pl-3 focus:outline-none focus:border-blue-600 transition duration-300 ease-in-out"
                           placeholder="Enter your name" name="name">

                    <input type="text" class="my-3 py-1 text-white bg-transparent border-l-2 pl-3 focus:outline-none focus:border-blue-600 transition duration-300 ease-in-out"
                           placeholder="Enter your email address" name="email">

                    <input type="password" class="my-3 py-1 text-white bg-transparent border-l-2 pl-3 focus:outline-none focus:border-blue-600 transition duration-300 ease-in-out"
                           placeholder="Enter password" name="password">

                    <input type="password" class="my-3 py-1 text-white bg-transparent border-l-2 pl-3 focus:outline-none focus:border-blue-600 transition duration-300 ease-in-out"
                           placeholder="Confirm password" name="password_confirmation">
                </div>
                <div class="mt-8">
                    <button type="submit" class="text-white bg-green-500 rounded-full py-2 px-6 hover:bg-green-600 focus:outline-none transition duration-300 ease-in-out">
                        <span><i class="fas fa-edit mr-2"></i></span>Register</button>
                    <a href="{{ route('login') }}" class="text-white py-2 px-4">Already have account ?</a>
                </div>
            </form>
        </div>
    </div>

@endsection
