@props(['name', 'type' => 'text', 'data' => ''])

<div class="flex flex-col space-y-1">
    <label {{ $attributes->merge([ 'class' => 'text-lg font-semibold']) }} for="{{ $name }}"> {{ ucwords($name) }}</label>
    <input 
        type="{{ $type }}" 
        id="{{ $name }}" 
        name="{{ $name }}" 
        value="{{ old($name) ? old($name) : $data }}" 
        required 
        {{$attributes}}    
    />
</div>

