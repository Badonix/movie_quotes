<x-layout>
  <x-setting name='edit_movie'>
    <form method="POST" action="/admin/edit/movie/{{$movie->id}}" enctype="multipart/form-data" class='bg-white flex flex-col gap-5 rounded-xl px-5 py-3'>
        @csrf
        @method('PATCH')
        <x-input form_name='movie_en' name='name[en]' value="{{$movie->getTranslations('name')['en']}}"/>
        <x-input form_name='movie_ka' name='name[ka]' value="{{$movie->getTranslations('name')['ka']}}"/>
        <button class='border p-1 mt-3 hover:bg-slate-100' type='submit'>{{__('setting.edit')}}</button>
    </form>
  </x-setting>
</x-layout>