
<nav class="w-full pt-2">
    <div class="flex justify-between items-center space-x-28 bg-blue-200 h-20 mx-3 p-6 border-2 border-black">
        <div class="grow-[1] flex items-center space-x-4 -mx-2">
            <x-navigation._logo/>
            {{-- Dropdown Menus
                max height & overflow:auto overscroll-contain --}}
            @auth
                <div class="flex justify-center space-x-2">
                    {{-- Study Groups Flowbite--}}
                    <div>
                        <div
                            class="flex flex-row border border-black bg-gray-50 hover:bg-gray-100
                            font-bold text-sm px-4 py-1.5 cursor-pointer"
                            data-dropdown-toggle="dropdown-studyGroups">
                                <button id="dropdownDefault"  type="button">
                                    Study Groups
                                </button>
                                <svg class="ml-2 w-5"
                                        aria-hidden="true" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                        </div>
                        <!-- studyGroups dropdown-menu -->
                        <div id="dropdown-studyGroups"
                            class="hidden z-10 w-45 border border-black bg-gray-50 divide-y divide-gray-100 shadow"
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(327px, 70px);">
                                <ul class="py-1 text-sm" aria-labelledby="dropdownDefault">

                                    @foreach (auth()->user()->studygroups as $studygroup)
                                    <li>
                                        <a href="/studygroups/{{ $studygroup->slug }}" class="block py-2 px-4 hover:bg-gray-200">{{ $studygroup->name }}</a>
                                    </li>
                                    @endforeach

                                    @if (auth()->user()->studygroups->first())
                                        <hr class="border-t border-black mt-1">
                                    @endif

                                    <ul class="py-1 text-sm -mt-1 -mb-1">
                                        <li>
                                            <a href="/studygroups/create" class="block text-xs italic py-2 px-4 hover:bg-gray-200 hover:underline"><span class="font-bold">Create</span> a Study Group</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block text-xs italic py-2 px-4 hover:bg-gray-200 hover:underline"><span class="font-bold">Join</span> a Study Group</a>
                                        </li>
                                    </ul>
                                </ul>
                        </div>
                    </div>
                    {{-- RepeatON Flowbite--}}
                    <div>
                        {{-- ADD:: disabled && text-gray if user does not have any data for repeatON table
                            ++ same idea for the difficulty lists. --}}
                        <button
                            id="dropdownDefault"  type="button" data-dropdown-toggle="dropdown-repeatON"
                            class="flex border border-black bg-gray-50 hover:bg-gray-200
                                font-bold text-sm px-4 py-1.5 cursor-pointer">
                                RepeatON
                                <svg class="ml-2 w-5"
                                    aria-hidden="true" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                        </button>
                        <!-- repeatON dropdown menu -->
                        <div id="dropdown-repeatON"
                            class="hidden z-10 w-36 border border-black bg-gray-50 divide-y divide-gray-100 shadow"
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(327px, 70px);">
                                <ul class="py-1 text-sm" aria-labelledby="dropdownDefault">
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-200">Easy</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-200">Medium</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-200">Hard</a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            @endauth
        </div>

        {{-- Search Bar Flowbite --}}
        @auth
            <div class="grow-[2] max-w-xs">
                <form>
                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg
                                aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <input
                            type="search" id="default-search" required
                            class="block p-4 pl-10 w-full text-sm font-bold">
                        <button type="submit"
                            class="absolute right-2.5 bottom-2.5
                            border border-black bg-gray-50 hover:bg-gray-200
                            font-bold text-sm px-4 py-1.5 cursor-pointer">
                                    Search
                        </button>
                    </div>
                </form>
            </div>
        @endauth

        {{-- Log in || Register --}}
        @auth
            <x-navigation._auth :auth="auth()->user()"/>
        @else
            <x-navigation._guest/>
        @endauth
    </div>
</nav>
