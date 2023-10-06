<div {{ $attributes->merge([ 'class' => "flex items-center pt-6"]) }}>
    <a class="underline text-sm hover:text-gray-900" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-primary-button class="ml-4">
        Register
    </x-primary-button>
</div>