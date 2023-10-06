<x-app-layout>
    <x-form.card>
        
        <x-form.validation-errors class="mb-4" :errors="$errors" />

        <x-form.field action="/register" method="POST" class="space-y-10">
            <x-form.input name="name" autofocus/>
            <x-form.input name="username"/>
            <x-form.input name="email" type="email"/>
            <div class="space-y-2">
                <x-form.password/>
                <x-form.confirm-password/>
            </div>
            <div class="w-full flex justify-end">
                <x-form.buttons-register class="pb-10"/>
            </div>
        </x-form.field>

    </x-form.card>
</x-app-layout>
