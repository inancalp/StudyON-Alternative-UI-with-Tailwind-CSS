<x-app-layout>
    <x-form.card>

        <!-- Session Status -->
        {{-- don't know if necessary ? --}}
        <x-auth-session-status class="mb-4" :status="session('status')" />
        {{-- // --}}
        <x-form.validation-errors class="mb-4" :errors="$errors" />

        <x-form.field action="{{ route('login') }}" method="POST" class="space-y-10">

            <x-form.input name="email" type="email" autofocus/>
            <x-form.password/>
            <div class="w-full flex flex-col items-end space-y-4 pb-10">
                <x-form.login-rememberMe/>
                <x-form.buttons-login/>
            </div>

        </x-form.field>
    </x-form.card>
</x-app-layout>
