@props(['name'])
<section class='max-w-5xl mx-auto px-6 py-8'>
    <h1 class='text-lg font-bold mb-8 pb-2 border-b text-white'>{{$name}}</h1>
    <div class='flex'>
        <aside class='w-48 flex-shrink-0'>
            <h4 class='mb-5 text-white border-b w-1/2'>Navigate</h4>
            <ul class='text-white text-sm flex flex-col gap-2'>
                <li>
                    <a href='/admin/movies' class="{{request()->is('admin/movies') ? 'text-blue-300' : ''}}">Movies</a>
                </li>
                <li>
                    <a href='/admin/quotes' class="{{request()->is('admin/quotes') ? 'text-blue-300' : ''}}">Quotes</a>
                </li>
                <li>
                    <a href='/admin/quotes/create' class="{{request()->is('admin/quotes/create') ? 'text-blue-300' : ''}}">New Quote</a>
                </li>
                <li>
                    <a href='/admin/movies/create' class="{{request()->is('admin/movies/create') ? 'text-blue-300' : ''}}">New Movie</a>
                </li>
            </ul>
        </aside>
        <main class='flex-1'>
            {{$slot}}
        </main>
    </div>
</section>