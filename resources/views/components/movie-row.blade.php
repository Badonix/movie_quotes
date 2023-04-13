@props(['movie'])
<div class='bg-white rounded-xl px-5 py-3 flex items-center justify-between'>
    <p>{{$movie->id}}</p>
    <a href='{{ route("movie", $movie->id) }}'>{{ $movie->name }}</a>
    <div class='flex items-center gap-3'>
        <a href='{{route("movie.edit", ["movie"=>$movie])}}'>{{__('setting.edit')}}</a>
        <form action="{{route('movie.destroy', ['movie'=>$movie])}}" method="POST">
        @method("DELETE")
        @csrf

        <button type='submit'>{{__('setting.delete')}}</button>
        </form>
    </div>
</div>