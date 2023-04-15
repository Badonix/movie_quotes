<x-layout>
  <x-setting name='new_quote'>
    <form method="POST" action="{{route('quote.store')}}" enctype="multipart/form-data" class='bg-white flex flex-col gap-5 rounded-xl px-5 py-3'>
        @csrf
        <div>
          <x-input :value="old('body.en')" name='body[en]' form_name='quote_en'>
            @error("body.en")
            <p class='text-red-400 text-xs absolute -bottom-3'>{{$message}}</p>
            @enderror
          </x-input>
        </div>
        <div>
          <x-input :value="old('body.ka')" name='body[ka]' form_name='quote_ka'>
            @error("body.ka")
            <p class='text-red-400 text-xs absolute -bottom-3'>{{$message}}</p>
            @enderror
          </x-input>
        </div>
        <div>
          <x-input form_name='image' name='image_url' type='file'>
            @error('image_url')
            <p class='text-red-400 text-xs absolute -bottom-3'>{{$message}}</p>
            @enderror
          </x-input>
        </div>
        <div class='flex flex-col gap-1'>
            <label for='movie_id'>{{__('labels.movie')}}</label>
            <select name='movie_id' class='p-1' id='movie_id'>
              @foreach($movies as $movie)  
                <option value='{{$movie->id}}'>{{$movie->name}}</option>
              @endforeach
            </select>
            @error('movie_required')
              <p class='text-red-400 text-xs'>{{$message}}</p>
            @enderror
        </div>
        <button class='border p-1 mt-3 hover:bg-slate-100' type='submit'>{{__('setting.add')}}</button>
    </form>
  </x-setting>
</x-layout>