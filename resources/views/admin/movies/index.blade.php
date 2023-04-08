<x-layout>
  <x-setting name='movies'>
    <section class='flex flex-col gap-5  px-5 py-3'>
    @foreach($movies as $movie)
      <x-movie-row :movie="$movie"/>
    @endforeach
    </section>
  </x-setting>
</x-layout>