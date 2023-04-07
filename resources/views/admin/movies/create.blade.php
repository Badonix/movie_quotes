<x-layout>
  <x-setting name='new_movie'>
    <form class='bg-white flex flex-col gap-5 rounded-xl px-5 py-3'>
        <x-input form_name='movie_ka'/>
        <x-input form_name='movie_en'/>
        <button class='border p-1 mt-3 hover:bg-slate-100' type='submit'>{{__('setting.add')}}</button>
    </form>
  </x-setting>
</x-layout>