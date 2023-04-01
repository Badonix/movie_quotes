@props(['name'])
<div class='w-full'>
    <label class='w-full block mb-1 font-bold text-xs text-gray-700' for='{{$name}}'>{{ucwords($name)}}</label>
    <input {{$attributes}} class='w-full mb-2 border border-gray-200 rounded p-2' name='{{$name}}' type='text'/>
</div>
