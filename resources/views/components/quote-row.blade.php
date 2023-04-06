<div class='bg-white rounded-xl px-5 py-3 flex items-center justify-between gap-5'>
    <p>{{$quote->id}}</p>
    <div class='flex text-sm items-center gap-2'>
        <a href='#' class='text-center'>"{{ $quote->getTranslation('body', app()->getLocale()) }}"</a>
        <p>
        |
        </p>
        <a href='#'>{{$quote->movie->name}}</a>
    </div>
    <div class='flex items-center gap-3'>
        <a href='#'>{{__('setting.edit')}}</a>
        <a href='#'>{{__('setting.delete')}}</a>
    </div>
</div>