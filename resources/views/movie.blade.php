<x-layout>
    <x-langs/>
    <div class='flex flex-col items-center'>
        <div class='container w-5/12 flex flex-col gap-5'>
            <h1 class='text-white text-2xl my-6'>{{$quotes[0]->movie->name}}</h1>
            @foreach($quotes as $quote)
            <x-quote :quote="$quote"/>   
            @endforeach
        </div>
    </div>
</x-layout>