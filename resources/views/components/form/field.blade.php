@props(['action', 'method', 'enctype' => 'application/x-www-form-urlencoded'])
<form enctype="{{ $enctype }}" method="{{ $method }}" action="{{ $action }}" {{$attributes->merge(['class' => 'flex flex-col'])}}>
    @csrf
    {{ $slot }}
</form>