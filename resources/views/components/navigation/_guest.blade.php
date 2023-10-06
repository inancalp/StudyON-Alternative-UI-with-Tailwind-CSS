@if (Route::has('login'))
    <div class="flex items-center space-x-4">
        <a href="{{ route('login') }}" class="flex flex-row border border-black bg-gray-50 hover:bg-gray-100
        font-bold text-sm px-4 py-2.5 cursor-pointer">
            Log in
        </a>
    @if (Route::has('register'))
        <a href="{{ route('register') }}" class="flex flex-row border border-black bg-gray-50 hover:bg-gray-100
        font-bold text-sm px-4 py-2.5 cursor-pointer"> 
            Register
        </a>
    @endif
    </div>
@endif
