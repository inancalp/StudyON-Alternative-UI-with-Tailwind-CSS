<x-app-layout>
    <x-form.card class="py-4">

        <h1 class="text-3xl font-bold py-4 mt-2">
            {{ $studygroup->name }}
        </h1>

        <x-form.validation-errors class="my-4" :errors="$errors" />
        
        <div class="space-y-4 my-6">
            <h2>
                <p class="text-lg underline font-semibold"> Description: </p>
                {{ $studygroup->description }}
            </h2>
            
            <h2>
                <p class="text-lg underline font-semibold"> Rules </p>
                {{ $studygroup->rules }}
            </h2>
        </div>
        
        

        <x-form.field method="POST" action="/studygroups/{{$studygroup->slug}}/join" class="space-y-1 pb-8">
            <x-form.password/>
            <div class="flex justify-end pt-4">
                <x-primary-button>
                    Join
                </x-primary-button>
            </div>
        </x-form.field>

    </x-form.card>
</x-app-layout> 