@props(['form_name'])
<div class='w-full relative'>
    <label class='w-full block mb-1 font-bold text-xs text-gray-700' for='{{$form_name}}'>{{__('labels.'.$form_name)}}</label>
    <input {{$attributes}} class="w-full mb-2 border border-gray-200 rounded p-2" type='text'/>
    {{$slot}}
</div>
