<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="{{ url('/') }}" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        <div class="flex items-center">
            @if (Route::has('login'))
                @Auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <span class="text-gray-900 dark:text-white mr-4">{{ Auth::user()->getName() }}</span>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                            class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Log out</a>
                    </form>
                @else
                    <a href="tel:66624922656" class="mr-6 text-sm  text-gray-500 dark:text-white hover:underline">(66)
                        624-922-656</a>
                    <a href="{{ route('login') }}"
                        class="mr-6 text-sm  text-blue-600 dark:text-blue-500 hover:underline">Sign in</a>
                    <a href="{{ route('register') }}" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Get
                        Started</a>
                @endAuth
            @endif
        </div>
    </div>
</nav>
<nav class="bg-gray-50 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
                @if (Route::has('login'))
                    @Auth
                        <!-- Home -->
                        <li>
                            <a href="{{ url('/') }}" class="text-gray-900 dark:text-white hover:underline"
                                aria-current="page">Home</a>
                        </li>
                        <!-- My Booking -->
                        <li>
                            <a href="{{ route('user.form.index') }}" class="text-gray-900 dark:text-white hover:underline"
                                aria-current="page">My Booking</a>
                        </li>
                        <!-- Profile -->
                        <li>
                            <a href="{{ route('profile.edit') }}" class="text-gray-900 dark:text-white hover:underline"
                                aria-current="page">Profile</a>
                        </li>
                    @endAuth
                @endif
            </ul>
        </div>
    </div>
</nav>
