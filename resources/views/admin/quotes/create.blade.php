<x-layout>
  <x-setting name='new_quote'>
    <form method="POST" action="/admin/quotes/create" enctype="multipart/form-data" class='bg-white flex flex-col gap-5 rounded-xl px-5 py-3'>
        @csrf
        <x-input name='body[en]' form_name='quote_en'/>
        <x-input name='body[ka]' form_name='quote_ka'/>
        <x-input form_name='image' name='image_url' type='file'/>
        <div class='flex flex-col gap-1'>
            <label for='movie_id'>{{__('labels.movie')}}</label>
            <select name='movie_id' class='p-1' id='movie_id'>
                <option value='1'>Movie</option>
                <option value='2'>Movie</option>
                <option value='3'>Movie</option>
                <option value='4'>Movie</option>
            </select>
        </div>
        <button class='border p-1 mt-3 hover:bg-slate-100' type='submit'>{{__('setting.add')}}</button>
    </form>
  </x-setting>
</x-layout>