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
    <x-langs/>
    @auth
    <div class='absolute top-3 w-full flex justify-end px-7 py-1'>
            <a href='{{route("logout")}}' class='text-white border px-4 py-1 hover:text-black hover:bg-white transition'>{{__("navbar.logout")}}</a>
        </div>
    </div>
    @endauth
    
   {{$slot}}
</body>
</html>
