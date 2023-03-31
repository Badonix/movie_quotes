<x-layout>
  <x-setting name='New Quote'>
    <form class='bg-white flex flex-col gap-5 rounded-xl px-5 py-3'>
        <x-input name='quote'/>
        <x-input name='image' type='file'/>
        <div class='flex flex-col gap-1'>
            <label for='movie'>Movie</label>
            <select class='p-1' id='movie'>
                <option value='movie'>Movie</option>
                <option value='movie'>Movie</option>
                <option value='movie'>Movie</option>
                <option value='movie'>Movie</option>
            </select>
        </div>
        <button class='border p-1 mt-3 hover:bg-slate-100' type='submit'>Add</button>
    </form>
  </x-setting>
</x-layout>