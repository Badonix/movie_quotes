<div class='fixed left-5 top-1/2 flex flex-col justify-center gap-2 items-center'>
    <a href="{{route('setlocale', ['locale' => 'en'])}}" class='cursor-pointer rounded-full border-2 {{App::getLocale() == "en" ? "bg-white": "text-white"}} w-10 h-10 flex justify-center items-center'>
        en
    </a>
    <a href="{{route('setlocale', ['locale' => 'ka'])}}" class='cursor-pointer rounded-full border-2 {{App::getLocale() == "ka" ? "bg-white" : "text-white"}} w-10 h-10 flex justify-center items-center'>
        ka
    </a>
</div>

