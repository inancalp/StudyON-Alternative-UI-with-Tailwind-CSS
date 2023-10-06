{{-- x-app-layout flex-col included --}}
<x-app-layout>
    <div class="flex flex-col items-center w-10/12 py-12 bg-gray-50 border-2 border-black">
        <div id="content"
            class="text-xl w-10/12 border-2 border-black py-8 px-12 space-y-4"
            style="background-image:
                    linear-gradient(rgba(219, 234, 254, 0.98), rgba(219, 234, 254, 0.98)),
                    url(/images/logo2.svg);
                    background-position: 52% 0;
                    background-attachment: fixed;">

            {{-- studygroup name --}}
            
            <div class="flex flex-col items-center mb-8">
                <h1 class="bg-gray-50 text-center border border-black py-3 px-5 underline underline-offset-4 text-2xl font-bold w-full">
                    {{ $studygroup->name }}
                </h1>
            </div>
            
            <div class="w-full px-2">
                {{-- Admin && Description && Rules--}}
                <div class="flex flex-col items-end space-y-1">

                    {{-- admin --}}
                    @if (auth()->user()->id == $studygroup->admin_id)
                        <div class="flex w-full items-start">
                            <button class="flex text-sm font-bold border border-black p-1 bg-indigo-500 text-white hover:bg-indigo-600" onclick="dropdown_toggle('dropdown-add-course')">
                                ADMIN ONLY: Add-Course
                                <svg class="ml-2 w-5" 
                                    aria-hidden="true" fill="none" 
                                    stroke="currentColor" viewBox="0 0 24 24" 
                                    xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                        </div>
                        
                            {{-- admin dropdown --}}
                        <div
                            id="dropdown-add-course"
                            class="{{$errors->any() ? 'block' : 'hidden'}} w-full">
                            <x-form.card class="my-0 rounded-none px-10">
                                {{-- Course Name --}}
                                <h1 class="text-2xl font-semibold pt-6">Add Course</h1>

                                {{-- errors --}}
                                <x-form.validation-errors :errors="$errors" />

                                {{-- form field --}}
                                <x-form.field method="POST" action="{{ route('studygroup.course.store', ['studygroup' => $studygroup]) }}" class="space-y-5">

                                    <x-form.input name="name"/>
                                    <div class="flex justify-end w-full">
                                        <x-primary-button class="mb-5">
                                            SUBMIT
                                        </x-primary-button>
                                    </div>

                                </x-form.field>
                            </x-form.card>
                        </div>
                    @endif

                    {{-- description --}}
                    <button class="flex text-sm font-bold border border-black p-1 bg-gray-50 hover:bg-gray-100" onclick="dropdown_toggle('dropdown-desc')">
                        Description
                        <svg class="ml-2 w-5" 
                            aria-hidden="true" fill="none" 
                            stroke="currentColor" viewBox="0 0 24 24" 
                            xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div
                        id="dropdown-desc"
                        class="hidden relative border border-black bg-gray-50 bg-cover">
                        <img class="opacity-5" src="/images/logo1.svg" alt="logo-1">
                        <div class="absolute top-1/2 left-2/4 -translate-x-1/2 -translate-y-1/2 w-full h-full overflow-auto overscroll-contain p-5 px-10 text-sm font-semibold leading-loose tracking-wide">
                            <p class="font-bold underline font text-lg center my-2">studyGroup</p>
                            <p>
                                {{ $studygroup->description }}
                            </p>
                    </div>
                </div>

                {{-- rules --}}
                <button class="flex text-sm font-bold border border-black p-1 bg-gray-50 hover:bg-gray-100" onclick="dropdown_toggle('dropdown-rules')">
                    Rules
                    <svg class="ml-2 w-5" 
                        aria-hidden="true" fill="none" 
                        stroke="currentColor" viewBox="0 0 24 24" 
                        xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div
                    id="dropdown-rules"
                    class="hidden relative border border-black bg-gray-50 bg-cover">
                    <img class="opacity-5" src="/images/logo1.svg" alt="logo-1">
                    <div class="absolute top-1/2 left-2/4 -translate-x-1/2 -translate-y-1/2 w-full h-full overflow-auto overscroll-contain p-5 px-10 text-sm font-semibold leading-loose tracking-wide">
                        <p class="font-bold underline font text-lg center my-2">Rules</p>
                        <p>
                            {{ $studygroup->rules }}
                        </p>
                    </div>
                </div>
            </div>

            {{-- Courses --}}
            <div class="flex flex-col w-fit text-lg pb-2 pt-1 space-y-2">
                @foreach ($studygroup->courses as $course)
                    <button class="flex space-x-1 items-center hover:bg-gray-100 bg-gray-50 px-2 py-0.5 border border-black" onclick="dropdown_toggle('dropdown-{{ $course->slug }}')"> 
                        <p class="text-sm font-bold px-1 border border-black">Course</p>
                        <div class="flex justify-between w-full">
                            <p>{{ $course->name }}</p>
                            <svg class="ml-2 w-5 " 
                                aria-hidden="true" fill="none" 
                                stroke="currentColor" viewBox="0 0 24 24" 
                                xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </button>
                    <div id="dropdown-{{ $course->slug }}" class="hidden flex flex-col text-sm font-bold ml-16 bg-gray-50 px-2 py-0.5 border border-black">
                        <ul class="list-disc list-inside space-y-0.5 p-0.5 ">
                            <p class="underline text-indigo-900">{{ $course->name }}</p>
                            <li class="hover:bg-gray-100 hover:ring-1 hover:ring-black px-0.5 w-fit"><a href="/quizon">QuizON</a></li>
                            <li class="hover:bg-gray-100 hover:ring-1 hover:ring-black px-0.5 w-fit"><a href="#">Add Question to QuizON</a></li>
                            <li class="hover:bg-gray-100 hover:ring-1 hover:ring-black px-0.5 w-fit"><a href="#">Question Bank</a></li>
                        </ul>
                    </div>
                @endforeach
            </div> 


            {{-- StudyCHAT --}}
            <div class="flex flex-col items-end space-y-1">
                <button onclick="dropdown_toggle('dropdown-chat')" class="flex font-bold border border-black p-1 px-2 bg-gray-50 hover:bg-gray-100">
                    <p>StudyCHAT</p>
                    <svg class="ml-2 w-5" 
                        aria-hidden="true" fill="none" 
                        stroke="currentColor" viewBox="0 0 24 24" 
                        xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div
                    id="dropdown-chat"
                    class="hidden relative min-h-fit border border-black bg-white">
                    <img class="opacity-5" src="/images/logo1.svg" alt="logo-1">
                    <img class="opacity-5" src="/images/logo1.svg" alt="logo-1">
                    <div class="absolute top-1/2 left-2/4 -translate-x-1/2 -translate-y-1/2 w-full h-full overflow-hidden p-5 px-10 text-sm font-semibold leading-loose tracking-wide">
                        <div id="form-chat" class="flex flex-col h-full justify-end">
                            {{-- messages --}}
                            <div id="messages" class="w-full h-full px-1 overflow-auto overscroll-contain -mt-5">
                                <div class="w-full flex justify-end">
                                    <div id="message-2" class="m-2 px-2 border border-black rounded-2xl w-1/2 bg-blue-50 text-md">
                                        <p>Hi!</p>
                                    </div>
                                </div>
                                <div class="w-full flex justify-start">
                                    <div id="message-1" class="m-2 px-2 border border-black rounded-2xl w-1/2 bg-indigo-300 text-md">
                                        <p>Hello World!</p>
                                    </div>
                                </div>
                                <div class="w-full flex justify-end">
                                    <div id="message-3" class="m-2 px-2 border border-black rounded-2xl w-1/2 bg-blue-50 text-md">
                                        <p>Here is an example long message with no longer than 255 characters so that I can see how it will fit into the container :check:</p>
                                    </div>
                                </div>
                                <div class="w-full flex justify-end">
                                    <div id="message-2" class="m-2 px-2 border border-black rounded-2xl w-1/2 bg-blue-50 text-md">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nostrum cupiditate odio numquam quas, minima, animi reprehenderit impedit quidem hic corporis eveniet explicabo soluta eos debitis quaerat. Adipisci, incidunt rem.</p>
                                    </div>
                                </div>
                                <div class="w-full flex justify-start">
                                    <div id="message-1" class="m-2 px-2 border border-black rounded-2xl w-1/2 bg-indigo-300 text-md">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum pariatur porro excepturi dignissimos eos nemo quaerat ipsam voluptate obcaecati itaque illo exercitationem laborum maiores dolor, perspiciatis nam quisquam adipisci velit?
                                        Excepturi nihil quis minus voluptate illum praesentium. Cumque in nobis perferendis, iusto ab quo, quia quaerat animi magnam sequi quidem nemo similique, sit eaque. Ab aliquid eaque deserunt hic culpa.
                                        Temporibus expedita omnis dignissimos laudantium rem aperiam illo voluptatibus, corporis, ea veniam illum, animi est eius molestiae harum quasi rerum magni voluptates sapiente accusamus? Distinctio quibusdam aut temporibus exercitationem inventore.
                                        Fuga, aliquam? Veniam, dicta perspiciatis dolores nisi ipsam ducimus est. Nisi soluta, debitis id distinctio amet quos voluptatum? Ipsum beatae pariatur nesciunt incidunt sapiente eveniet modi similique dolor iure porro?</p>
                                    </div>
                                </div>
                                <div class="w-full flex justify-end">
                                    <div id="message-3" class="m-2 px-2 border border-black rounded-2xl w-1/2 bg-blue-50 text-md">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta alias possimus voluptates atque debitis reprehenderit corporis deleniti delectus voluptatibus error excepturi totam eius, amet ullam voluptas quae nulla iste. Quo?Nihil totam excepturi nulla praesentium laudantium quisquam iste non explicabo sint, velit, maxime vitae voluptates ab vero facere provident ipsa. Eligendi, iste. Eum error minus doloribus tempore ipsam impedit architecto!</p>
                                    </div>
                                </div>
                                <div class="w-full flex justify-start">
                                    <div id="message-1" class="m-2 px-2 border border-black rounded-2xl w-1/2 bg-indigo-300 text-md">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum pariatur porro excepturi dignissimos eos nemo quaerat ipsam voluptate obcaecati itaque illo exercitationem laborum maiores dolor, perspiciatis nam quisquam adipisci velit?
                                        Excepturi nihil quis minus voluptate illum praesentium. Cumque in nobis perferendis, iusto ab quo, quia quaerat animi magnam sequi quidem nemo similique, sit eaque. Ab aliquid eaque deserunt hic culpa.
                                        Temporibus expedita omnis dignissimos laudantium rem aperiam illo voluptatibus, corporis, ea veniam illum, animi est eius molestiae harum quasi rerum magni voluptates sapiente accusamus? Distinctio quibusdam aut temporibus exercitationem inventore.
                                        Fuga, aliquam? Veniam, dicta perspiciatis dolores nisi ipsam ducimus est. Nisi soluta, debitis id distinctio amet quos voluptatum? Ipsum beatae pariatur nesciunt incidunt sapiente eveniet modi similique dolor iure porro?</p>
                                    </div>
                                </div>
                                <div class="w-full flex justify-end">
                                    <div id="message-3" class="m-2 px-2 border border-black rounded-2xl w-1/2 bg-blue-50 text-md">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta alias possimus voluptates atque debitis reprehenderit corporis deleniti delectus voluptatibus error excepturi totam eius, amet ullam voluptas quae nulla iste. Quo?Nihil totam excepturi nulla praesentium laudantium quisquam iste non explicabo sint, velit, maxime vitae voluptates ab vero facere provident ipsa. Eligendi, iste. Eum error minus doloribus tempore ipsam impedit architecto!</p>
                                    </div>
                                </div>
                                <div class="w-full flex justify-start">
                                    <div id="message-1" class="m-2 px-2 border border-black rounded-2xl w-1/2 bg-indigo-300 text-md">
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum pariatur porro excepturi dignissimos eos nemo quaerat ipsam voluptate obcaecati itaque illo exercitationem laborum maiores dolor, perspiciatis nam quisquam adipisci velit?
                                        Excepturi nihil quis minus voluptate illum praesentium. Cumque in nobis perferendis, iusto ab quo, quia quaerat animi magnam sequi quidem nemo similique, sit eaque. Ab aliquid eaque deserunt hic culpa.
                                        Temporibus expedita omnis dignissimos laudantium rem aperiam illo voluptatibus, corporis, ea veniam illum, animi est eius molestiae harum quasi rerum magni voluptates sapiente accusamus? Distinctio quibusdam aut temporibus exercitationem inventore.
                                        Fuga, aliquam? Veniam, dicta perspiciatis dolores nisi ipsam ducimus est. Nisi soluta, debitis id distinctio amet quos voluptatum? Ipsum beatae pariatur nesciunt incidunt sapiente eveniet modi similique dolor iure porro?</p>
                                    </div>
                                </div>
                                <div class="w-full flex justify-end">
                                    <div id="message-3" class="m-2 px-2 border border-black rounded-2xl w-1/2 bg-blue-50 text-md">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta alias possimus voluptates atque debitis reprehenderit corporis deleniti delectus voluptatibus error excepturi totam eius, amet ullam voluptas quae nulla iste. Quo?Nihil totam excepturi nulla praesentium laudantium quisquam iste non explicabo sint, velit, maxime vitae voluptates ab vero facere provident ipsa. Eligendi, iste. Eum error minus doloribus tempore ipsam impedit architecto!</p>
                                    </div>
                                </div>
                            </div>
                            {{-- send-message --}}
                            <div class="border-t border-x border-black rounded-t-xl p-2 -mb-5 bg-gray-300">
                                <form action="#" method="POST" class="flex justify-between items-center w-full space-x-2">
                                    <input name="message" type="text" placeholder="Share your thoughts..."
                                        class="w-3/4 rounded-xl">
                                    <input name="submit-message" type="submit" value="SEND" 
                                        class="px-1 py-1.5 cursor-pointer w-1/4 border border-black rounded-full bg-blue-400
                                            hover:bg-blue-500 hover:ring-1 hover:ring-indigo-500">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            

            {{-- LIL' DIV --}}
            <br>
            <div class="border border-black"></div>
            <br>

            {{-- Score Table --}}
            <div class="border-2 border-black text-sm overflow-auto overscroll-contain h-80 bg-white">
                <table class="w-full">
                    <thead class="bg-gray-300 sticky top-0 ">
                        <tr class="text-md">
                            <th scope="col" class="text-gray-900 px-6 py-4 text-left pr-10">
                                #
                            </th>
                            <th scope="col" class="text-gray-900 px-6 py-4 text-left">
                                Student
                            </th>
                            <th scope="col" class="text-gray-900 px-6 py-4 text-left">
                                Average Score
                            </th>
                            <th scope="col" class="text-gray-900 px-6 py-4 text-left">
                                Highest Score
                            </th>
                            <th scope="col" class="text-gray-900  py-4 text-left">
                                Lowest Score
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studygroup->students as $student)
                            <tr class="{{ $loop->iteration % 2 == 1 ? 'bg-gray-100' : 'bg-white'}}">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                    {{$loop->iteration}}
                                </td>
                                <td class="text-sm text-gray-900 px-6 py-4">
                                    <a href="#" class="flex items-center space-x-2 font-bold hover:underline">
                                        <img class="rounded-full border border-black" style="width:30px;" src="/images/logo2.png" alt="pravatar">
                                        <div class="flex flex-col -mt-1">
                                            <p> {{ $student->username }} </p>
                                            <p class="text-xs font-extralight"> {{ $student->name }} </p>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-sm text-gray-900 px-6 py-4">
                                    Not Available
                                </td>
                                <td class="text-sm text-gray-900 px-6 py-4">
                                    Not Available
                                </td>
                                <td class="text-sm text-gray-900 py-4">
                                    Not Available
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function dropdown_toggle(id){
        _dropdown = document.getElementById(id);
        _dropdown.classList.toggle('hidden');
        if(id == 'dropdown-chat' ){
            _dropdown.scrollIntoView({behavior: "smooth", block: "center"});
        }
    }
</script>