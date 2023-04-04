<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Quotes</title>
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
    @auth
        <div class='absolute top-3 w-full flex justify-end px-7 py-1'>
            <div>
                @if(request()->route()->named('movie') || request()->route()->named('landing'))
                <a href='{{route("admin.quotes.create")}}' class='text-white border px-4 py-1 hover:text-black hover:bg-white transition'>Dashboard</a>
                @else
                <a href='{{route("landing")}}' class='text-white border px-4 py-1 hover:text-black hover:bg-white transition'>Home</a>
                @endif
                <a href='{{route("logout")}}' class='text-white border px-4 py-1 hover:text-black hover:bg-white transition'>Logout</a>
            </div>
        </div>
    @endauth
    @guest
        <div class='absolute top-3 w-full flex justify-end px-7 py-1'>
            @if(request()->route()->named('login'))
                <a href='{{route("landing")}}' class='text-white border px-4 py-1 hover:text-black hover:bg-white transition'>Home</a>
            @else
                <a href='{{route("login")}}' class='text-white border px-4 py-1 hover:text-black hover:bg-white transition'>Login</a>
            @endif
        </div>
    @endguest
   {{$slot}}
</body>
</html>
