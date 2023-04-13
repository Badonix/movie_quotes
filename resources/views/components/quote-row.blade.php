<div class='bg-white rounded-xl px-5 py-3 flex items-center justify-between gap-5'>
    <p>{{$quote->id}}</p>
    <div class='flex text-sm items-center gap-2'>
        <p class='text-center'>"{{ $quote->getTranslation('body', app()->getLocale()) }}"</p>
        <p>
        |
        </p>
        <a href='{{route("movie", $quote->movie->id)}}'>{{$quote->movie->name}}</a>
    </div>
    <div class='flex items-center gap-3'>
        <a href='{{route("quote.edit", ["quote"=>$quote])}}'>{{__('setting.edit')}}</a>
        <form action='{{route("quote.destroy", ["quote"=>$quote])}}' method="POST">
            @csrf
            @method("DELETE")
            <button type='submit'>{{__('setting.delete')}}</button>
        </form>
    </div>
</div>