<x-layout>


<main class='h-screen w-full flex flex-col justify-center items-center px-10'>
    <div class='bg-neutral-400 rounded-xl p-12 w-full max-w-lg md:w-2/3 lg:w-1/2'>
        <h1 class='text-center font-bold text-2xl text-gray-700'>{{__('auth.login')}}</h1>
        <form method='POST' action='{{route("login.store")}}' class='mt-5 flex flex-col gap-3'>
            @csrf 
            <div>
                <x-input form_name='username' name='username'/>
                @error("username")
                <p class='text-sm text-red-600'>{{$message}}</p>
                @enderror
            </div>
            <div>
                <x-input form_name='password' name='password' type='password'/>
                @error("password")
                <p class='text-sm text-red-600'>{{$message}}</p>
                @enderror
            </div>
                @error('wrong')
                <p class='text-red-600'>{{$message}}</p>
            @enderror
            <button class='py-2 px-4 border border-gray-600 bg-slate-50 text-gray-700 font-semibold rounded-sm mt-6 hover:bg-slate-100' type='submit'>{{__("auth.login")}}</button>
        </form>
    </div>    
</main>

</x-layout>