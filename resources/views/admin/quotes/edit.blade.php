<x-layout>
  <x-setting name='edit_quote'>
    <form method="POST" action="/admin/edit/quote/{{$quote->id}}" enctype="multipart/form-data" class='bg-white flex flex-col gap-5 rounded-xl px-5 py-3'>
        @csrf
        @method('PATCH')
        <x-input form_name='quote_en' name='body[en]' value="{{$quote->getTranslations('body')['en']}}"/>
        <x-input form_name='quote_ka' name='body[ka]' value="{{$quote->getTranslations('body')['ka']}}"/>
        
        <div class='flex gap-2'>
            <x-input form_name="image" name='image_url' type='file'/>
            <img src='{{asset("/storage/".$quote->image_url)}}' class='w-1/6 object-cover'/>
        </div>
        <div class='flex flex-col gap-1'>
            <label for='movie'>{{__('labels.movie')}}</label>
            <select name='movie_id' class='p-1' id='movie'>
                <option value='1'>Movie</option>
                <option value='2'>Movie</option>
                <option value='3'>Movie</option>
                <option value='4'>Movie</option>
            </select>
        </div>
        <button class='border p-1 mt-3 hover:bg-slate-100' type='submit'>{{__('setting.edit')}}</button>
    </form>
  </x-setting>
</x-layout>