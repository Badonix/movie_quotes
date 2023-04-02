<div class='flex flex-col h-screen justify-center items-center gap-3'>
    <img src="{{$quote->image_url}}" class='w-5/12 max-w-5xl'/>
    <p class='text-white md:text-3xl lg:text-4xl mt-5 max-w-5xl text-center'>"{{$quote->body}}"</p>
    <a href="{{ route('movie', ['id' => $quote->movie->id]) }}" class='text-white mt-6 underline cursor-pointer'>{{$quote->movie->name}}</a>
</div>
