{{-- x-app-layout flex-col included --}}
<x-app-layout>
    <div class="flex flex-col items-center  w-4/5 pt-10 pb-12 bg-gray-50 border-2 border-black">

        {{-- profile pic --}}
        <img src="{{ asset('storage/'.$user->profile->image) }}" alt="profile-pic" class="w-48 border-2 border-black rounded-full overflow-hidden z-10">
        
        {{-- information --}}
        <div id="information" class="text-xl w-4/5 border-2 border-black -mt-24 pt-28 pb-12 px-12 space-y-8 bg-blue-100"
            style="background-image:
                        linear-gradient(rgba(219, 234, 254, 0.98), rgba(219, 234, 254, 0.98)),
                        url(/images/logo2.svg);
                        background-position: 52% 0;
                        background-attachment: fixed;">

            {{-- EDIT if auth() --}}
            @if (auth()->user()->id == $user->id)
                <div class="flex flex-col space-y-1">
                    <button class="border border-black py-1 px-2 font-bold bg-gray-50 text-red-800 hover:bg-gray-100 text-sm w-fit" 
                        onclick="dropdown_toggle('dropdown-edit-profile')">
                        Edit Profile
                    </button>
                    <div
                        id="dropdown-edit-profile"
                        {{--  --}}
                        class="w-full {{$errors->any() ? 'block' : 'hidden'}}">
                            <x-form.card class="my-0 rounded-none px-10" width="w-full">
                                {{-- Course Name --}}
                                <h1 class="text-2xl font-semibold pt-6">Edit Profile</h1>

                                {{-- errors --}}
                                <x-form.validation-errors :errors="$errors" />

                                {{-- form field --}}
                                <x-form.field enctype="multipart/form-data" method="POST" 
                                            action="{{ route('profile.store', ['user' => auth()->user()]) }}"
                                            class="space-y-6">

                                    <x-form.input name="username" :data="auth()->user()->username"/>
                                    <x-form.input name="email" :data="auth()->user()->email"/>
                                    <x-form.textarea name="description" rows='3' :data="auth()->user()->profile->description"/>
                                    
                                    <div class="space-y-1">
                                        <label class="text-lg font-semibold" for="image"> Profile Picture </label>
                                        <div class="bg-white border border-gray-500 p-1">
                                            <input type="file" name="image">
                                        </div>
                                    </div>


                                    <div class="flex justify-end w-full">
                                        <x-primary-button class="mb-5">
                                            SUBMIT
                                        </x-primary-button>
                                    </div>

                                </x-form.field>
                            </x-form.card>
                    </div> 
                </div> 
                         
            @endif

            {{-- username --}}
            <p class="bg-gray-50 w-fit border border-black pb-2 pt-1 px-2">
                <span class="text-sm font-bold border border-black px-1">Username:</span> {{ $user->username }}
            </p>
            {{-- name --}}
            <p class="bg-gray-50 w-fit border border-black pb-2 pt-1 px-2">
                <span class="text-sm font-bold border border-black px-1">Name:</span> {{ $user->name }}
            </p>
            {{-- email --}}
            <p class="bg-gray-50 w-fit border border-black pb-2 pt-1 px-2">
                <span class="text-sm font-bold border border-black px-1">E-mail:</span> {{ $user->email }}
            </p>
            {{-- description --}}
            <div id="decription" class="max-w-2xl text-lg bg-gray-50 pb-2 pt-1 px-2 border border-black">
                <span class="text-sm font-bold border border-black px-1">Description:</span>
                <p>
                    {{ $user->profile->description }}
                </p>
            </div>
            {{-- studygroups --}}
            <div id="study-groups" class="w-fit text-xl bg-gray-50 pb-2 pt-1 px-2 border border-black">
                <span class="text-sm font-bold border border-black px-1">Study Groups:</span>
                <ul class="list-disc list-inside ">
                    <li>
                        <a class="hover:underline" href="#">Web Engineering</a>
                    </li>
                    <li>
                        <a class="hover:underline" href="#">Network Fundamentals</a>
                    </li>
                    <li>
                        <a class="hover:underline" href="#">Practice Enterprise</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function dropdown_toggle(id){
        _dropdown = document.getElementById(id);
        _dropdown.classList.toggle('hidden');
        if(id == 'dropdown-edit-profile' ){
            _dropdown.scrollIntoView({behavior: "smooth", block: "center"});
        }
    }
</script>