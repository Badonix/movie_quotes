<x-layout>
  <x-setting name='new_movie'>
    <form action="{{route('movie.store')}}" method="POST" class='bg-white flex flex-col gap-5 rounded-xl px-5 py-3'>
        @csrf
        <div>
        <x-input :value="old('name.ka')" name="name[ka]" form_name="movie_ka">
          @error('name.ka')
          <p class='text-red-400 text-xs absolute -bottom-3'>{{$message}}</p>
          @enderror
        </x-input>
        </div>
        <div>
          <x-input :value="old('name.en')" name='name[en]' form_name='movie_en'>
            @error('name.en')
            <p class='text-red-400 text-xs absolute -bottom-3'>{{$message}}</p>
            @enderror
          </x-input>
        </div>
        <button class='border p-1 mt-3 hover:bg-slate-100' type='submit'>{{__('setting.add')}}</button>
    </form>
  </x-setting>
</x-layout>