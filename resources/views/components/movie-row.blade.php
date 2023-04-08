@props(['movie'])
<div class='bg-white rounded-xl px-5 py-3 flex items-center justify-between'>
    <p>{{$movie->id}}</p>
    <a href='#'>{{$movie->name}}</a>
    <div class='flex items-center gap-3'>
        <a href='#'>{{__('setting.edit')}}</a>
        <a href='#'>{{__('setting.delete')}}</a>
    </div>
</div>