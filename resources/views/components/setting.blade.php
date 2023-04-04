@props(['name'])
<section class='h-screen max-w-5xl mx-auto px-6 py-8'>
    <h1 class='text-lg font-bold mb-8 pb-2 border-b text-white'>{{__('setting.' . $name)}}</h1>
    <div class='flex'>
        <aside class='w-48 flex-shrink-0'>
            <h4 class='mb-5 text-white border-b w-1/2'>{{__("setting.navigate")}}</h4>
            <ul class='text-white text-sm flex flex-col gap-2'>
                <li>
                    <a href="{{ route('admin.movies.index') }}" class="{{ request()->url() == route('admin.movies.index') ? 'text-blue-300' : '' }}">{{__('setting.movies')}}</a>
                </li>
                <li>
                    <a href="{{ route('admin.quotes.index') }}" class="{{ request()->url() == route('admin.quotes.index') ? 'text-blue-300' : '' }}">{{__('setting.quotes')}}</a>
                </li>
                <li>
                    <a href="{{ route('admin.quotes.create') }}" class="{{ request()->url() == route('admin.quotes.create') ? 'text-blue-300' : '' }}">{{__('setting.new_quote')}}</a>
                </li>
                <li>
                    <a href="{{ route('admin.movies.create') }}" class="{{ request()->url() == route('admin.movies.create') ? 'text-blue-300' : '' }}">{{__('setting.new_movie')}}</a>
                </li>
            </ul>
        </aside>
        <main class='flex-1'>
            {{$slot}}
        </main>
    </div>
</section>