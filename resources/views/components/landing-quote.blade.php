@if($quote)
    <div class='flex flex-col min-h-screen justify-center py-20 items-center gap-3'>
        <img src="{{asset('/storage/' . $quote->image_url)}}" class='max-h-96 max-w-5xl object-cover'/>
        <p class='text-white md:text-3xl lg:text-4xl mt-5 max-w-5xl text-center break-all'>"{{ $quote->getTranslation('body', app()->getLocale()) }}"</p>
        <a href="{{ route('movie', ['id' => $quote->movie->id]) }}" class='text-white mt-6 underline cursor-pointer text-2xl'>{{$quote->movie->name}}</a>
    </div>
@else
    <div class='flex flex-col h-screen justify-center items-center gap-3'>
        <p class='text-white md:text-3xl lg:text-4xl mt-5 max-w-5xl text-center break-all'>{{__('landing.no_quote')}}</p>
    </div>
@endif
