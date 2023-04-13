<x-layout>
  <x-setting name='edit_quote'>
    <form method="POST" action="{{ route('quote.update', ['quote' => $quote]) }}" enctype="multipart/form-data" class='bg-white flex flex-col gap-5 rounded-xl px-5 py-3'>
        @csrf
        @method('PATCH')
        <div>
          <x-input form_name='quote_en' name='body[en]' value="{{$quote->getTranslations('body')['en']}}"/>
          @error('body.en')
          <p class='text-red-400 text-sm'>{{$message}}</p>
          @enderror
        </div>

        <div>
          <x-input form_name='quote_ka' name='body[ka]' value="{{$quote->getTranslations('body')['ka']}}"/>
          @error('body.ka')
          <p class='text-red-400 text-sm'>{{$message}}</p>
          @enderror
        </div>
        
        <div class='flex gap-2'>
            <x-input form_name="image" name='image_url' type='file'/>
            <img src='{{asset("/storage/".$quote->image_url)}}' class='w-1/6 object-cover'/>
        </div>
        <div class='flex flex-col gap-1'>
            <label for='movie'>{{__('labels.movie')}}</label>
            <select name='movie_id' class='p-1' id='movie'>
              @foreach($movies as $movie)
                <option {{$movie->id == $quote->movie_id ? "selected" : ""}} value='{{$movie->id}}'>{{$movie->name}}</option>
              @endforeach
            </select>
        </div>
        <button class='border p-1 mt-3 hover:bg-slate-100' type='submit'>{{__('setting.edit')}}</button>
    </form>
  </x-setting>
</x-layout>