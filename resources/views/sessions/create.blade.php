<x-layout>


<main class='h-screen w-full flex flex-col justify-center items-center px-10'>
    <div class='bg-neutral-400 rounded-xl p-12 w-full max-w-lg md:w-2/3 lg:w-1/2'>
        <h1 class='text-center font-bold text-2xl text-gray-700'>Log in</h1>
        <form method='POST' action='/login' class='mt-5 flex flex-col'>
            @csrf 
            <x-input name='username'/>
            <x-input name='password' type='password'/>
            <button class='py-2 px-4 border border-gray-600 bg-slate-50 text-gray-700 font-semibold rounded-sm mt-6 hover:bg-slate-100' type='submit'>Log in</button>
        </form>
    </div>    
</main>

</x-layout>