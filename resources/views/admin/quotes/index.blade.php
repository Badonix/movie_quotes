<x-layout>
  <x-setting name='quotes'>
    <section class='flex flex-col gap-5 px-5 py-3'>
        @foreach($quotes as $quote)
          <x-quote-row :quote="$quote"/>
        @endforeach
    </section>
  </x-setting>
</x-layout>