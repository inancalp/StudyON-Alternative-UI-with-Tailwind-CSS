@props(['name', 'rows', 'data' => ''])

<div class="flex flex-col space-y-1">
    <label class="text-lg font-semibold" for="{{ $name }}">{{ ucwords($name) }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" cols="30" rows="{{ $rows }}">{{old('name') ? old('name') : $data}}</textarea>
</div>