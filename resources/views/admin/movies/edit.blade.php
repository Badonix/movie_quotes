<x-layout>
  <x-setting name='edit_movie'>
    <form method="POST" action="{{route('movie.update', ['movie'=>$movie])}}" enctype="multipart/form-data" class='bg-white flex flex-col gap-5 rounded-xl px-5 py-3'>
        @csrf
        @method('PATCH')
        <div>
          <x-input form_name='movie_en' name='name[en]' value="{{$movie->getTranslations('name')['en']}}">
            @error('name.en')
            <p class='text-red-400 text-xs absolute -bottom-3'>{{$message}}</p>
            @enderror
          </x-input>
        </div>
        <div>
          <x-input form_name='movie_ka' name='name[ka]' value="{{$movie->getTranslations('name')['ka']}}">
            @error('name.ka')
            <p class='text-red-400 text-xs absolute -bottom-3'>{{$message}}</p>
            @enderror
          </x-input>
        </div>
        <button class='border p-1 mt-3 hover:bg-slate-100' type='submit'>{{__('setting.edit')}}</button>
    </form>
  </x-setting>
</x-layout>