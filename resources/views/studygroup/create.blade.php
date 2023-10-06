<x-app-layout>
    <x-form.card class="py-10">
        <!-- Validation Errors -->
        <h1 class="text-4xl font-semibold pt-6 pb-4">Create Study Group</h1>
        
        {{-- errors --}}
        <x-form.validation-errors :errors="$errors" />

        <x-form.field method="POST" action="/studygroups/store" class="space-y-10">
            <input name="admin_id" type="hidden" value="{{ auth()->user()->id }}">
            
            <!-- Name -->
            <x-form.input name="name" autofocus="autofocus" class="-mt-4"/>

            {{-- Description --}}
            <x-form.textarea name="description" rows="3"/>

            {{-- Rules --}}
            <x-form.textarea name="rules" rows="5"/>

            <!-- Password -->
            <div class="space-y-6">
                <x-form.password/>
                <x-form.confirm-password/>
            </div>

            <div class="flex justify-end pt-4">
                <x-primary-button>
                    Submit
                </x-primary-button>
            </div>
        </x-form.field>
    </x-form.card>
</x-app-layout>