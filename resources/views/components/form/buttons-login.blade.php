<div class="flex items-center justify-end">
    @if (Route::has('password.request'))
        <a class="underline text-sm hover:text-gray-900" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
    @endif

    <x-primary-button class="ml-3">
        {{ __('Log in') }}
    </x-primary-button>
</div>