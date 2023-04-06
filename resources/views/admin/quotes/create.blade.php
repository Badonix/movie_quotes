<x-layout>
  <x-setting name='new_quote'>
    <form method="POST" action="/admin/quotes/create" enctype="multipart/form-data" class='bg-white flex flex-col gap-5 rounded-xl px-5 py-3'>
        @csrf
        <x-input name='quote_en'/>
        <x-input name='quote_ka'/>
        <x-input name='image' type='file'/>
        <div class='flex flex-col gap-1'>
            <label for='movie'>{{__('labels.movie')}}</label>
            <select name='movie' class='p-1' id='movie'>
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