<x-layout>
  <x-setting name='quotes'>
    <section class='flex flex-col gap-5 px-5 py-3'>
      <div class='px-5 py-3 h-full bg-slate-200 rounded-md flex justify-between items-center'>
        <p>{{__('setting.id')}}</p>
        <p>{{__('setting.quote')}} | {{__('setting.movie')}}</p>
        <div>{{__("setting.actions")}}</div>
      </div>
        @foreach($quotes as $quote)
          <x-quote-row :quote="$quote"/>
        @endforeach
    </section>
  </x-setting>
</x-layout>