@props(['auth'])

<div class="flex items-center space-x-4">
    <a href="#">
        <img src="/images/notification-bell.svg" class="w-10" alt="">
    </a>
    <div
    class="flex flex-row border border-black bg-gray-50 hover:bg-gray-200
    font-bold text-sm px-4 py-1.5 cursor-pointer"
    data-dropdown-toggle="dropdown">
        <button id="dropdownDefault" type="button">
            {{ $auth->username }}
        </button>
        <svg class="ml-2 w-5 mt-0.5"
                aria-hidden="true" fill="none"
                stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
</div>
</div>
<!-- Dropdown menu -->
<div id="dropdown"
    class="hidden z-10 w-44 border border-black bg-gray-50 divide-y divide-gray-100 shadow"
    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(327px, 70px);">
        <ul class="py-1 text-sm" aria-labelledby="dropdownDefault">
            <li>
                <a href="/profile/{{ auth()->user()->slug }}" class="block py-2 px-4 hover:bg-gray-200">Profile</a>
            </li>
            {{-- Log-Out --}}
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </li>
        </ul>
</div>
