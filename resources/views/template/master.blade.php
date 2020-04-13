<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Blog')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body class="bg-gray-900">

<div class="w-full bg-gray-900">
    <div class="w-9/12 mx-auto py-6">
        <div class="flex justify-between">
            <ul class="text-gray-400 inline-flex">
                <li class="mr-12 hover:text-gray-500 transition duration-100 ease-in-out"><a href="">Home</a></li>
                <li class="mr-12 hover:text-gray-500 transition duration-100 ease-in-out"><a href="">Article</a></li>

                @guest()
                    <li class="mr-12 hover:text-gray-500 transition duration-100 ease-in-out">
                        <a href="{{ route('register')  }}"><b>Register Here !</b></a>
                    </li>
                @endguest
            </ul>
            <div class="text-gray-400 flex">
                @auth
                    <form action="{{ route('logout')  }}" method="POST">
                        @csrf
                        <button type="submit" class="mr-10 hover:text-gray-500 transition duration-100 ease-in-out">
                                Logout</button>
                    </form>
                @endauth

                <a href="#" class="hover:text-gray-500 transition duration-100 ease-in-out">
                    <span><i class="fas fa-search text-sm"></i></span></a>
            </div>
        </div>
    </div>
</div>
<hr class="border-gray-500">

@yield('content')

<div class="w-full bg-gray-900 mt-10 text-center">
    <div class="w-9/12 mx-auto py-6">
        <h4 class="text-gray-400">&copy; Rz-Dev Comm 2020</h4>
    </div>
</div>


</body>
</html>
