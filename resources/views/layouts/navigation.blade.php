<nav class="border-gray-200 bg-white dark:bg-gray-900">
    <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
        <a href="{{ url('home') }}" class="flex items-center">
            {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" /> --}}
            <span
                class="self-center whitespace-nowrap text-2xl font-semibold dark:text-white">{{ config('app.name') }}</span>
        </a>
        <div class="flex items-center md:order-2">
            <button type="button"
                class="mr-3 flex rounded-full bg-gray-800 text-sm focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 md:mr-0"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 my-4 hidden list-none divide-y divide-gray-100 rounded-lg bg-white text-base shadow dark:divide-gray-600 dark:bg-gray-700"
                id="user-dropdown">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                    <span
                        class="block truncate text-sm text-gray-500 dark:text-gray-400">{{ Auth::user()->email }}</span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">

                    <li>
                        <a href="{{ route('profile.edit') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                    </li>

                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>

                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>

                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-target="logout-modal" data-modal-toggle="logout-modal">
                            Sign out
                        </a>
                    </li>

                </ul>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button"
                class="ml-1 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                aria-controls="mobile-menu-2" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <div class="hidden w-full items-center justify-between md:order-1 md:flex md:w-auto" id="mobile-menu-2">
            <ul
                class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">

                <li>
                    <a href="{{ url('home') }}"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded md:p-0 md:dark:text-blue-500
                        @php if (url()->current() === url('home')): @endphp
                            bg-blue-700 text-white md:bg-transparent md:text-blue-700
                        @php endif; @endphp">
                        Home
                    </a>
                </li>

                <li>
                    <a href="{{ url('about') }}"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded md:p-0 md:dark:text-blue-500
                        @php if (url()->current() === url('about')): @endphp
                            bg-blue-700 text-white md:bg-transparent md:text-blue-700
                        @php endif; @endphp">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{ url('contact') }}"
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded md:p-0 md:dark:text-blue-500
                        @php if (url()->current() === url('contact')): @endphp
                            bg-blue-700 text-white md:bg-transparent md:text-blue-700
                        @php endif; @endphp">
                        Contact
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
