<header
    class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10"
>
    <nav class="bg-transparent fixed w-full z-20 top-0 start-0">
        <div
            class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4"
        >
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="img/logo.png" class="h-8" />
                <span
                    class="self-center text-2xl font-bold whitespace-nowrap text-emerald-700"
                    >SDN<span
                        class="self-center text-2xl font-bold whitespace-nowrap text-emerald-500"
                        >Sukasari03</span
                    ></span
                >
            </a>
            <div
                class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse"
            >
                @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-700 hover:text-emerald-700 focus:outline-none transition ease-in-out duration-150"
                        >
                            <div
                                class="relative w-5 h-5 overflow-hidden rounded-full"
                            >
                                <svg
                                    class="absolute w-7 h-7 -left-1"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('dashboard')">
                            {{ __("Dashboard") }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __("Profile") }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();"
                            >
                                {{ __("Log Out") }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                @else
                <a href="{{ route('login') }}">
                    <button
                        type="button"
                        class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 text-center"
                    >
                        Log In
                    </button>
                </a>
                @endauth
                <button
                    data-collapse-toggle="navbar-sticky"
                    type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 17 14"
                    >
                        <path
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15"
                        />
                    </svg>
                </button>
            </div>
            <div
                class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                id="navbar-sticky"
            >
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0"
                >
                    <li>
                        <a
                            class="{{ request()->is('/') ? 'text-emerald-700' : 'text-gray-700 hover:text-emerald-700' }} block py-2 px-3 transition-colors duration-300 transform md:mx-4 md:my-0"
                            href="/"
                            >Home</a
                        >
                    </li>
                    <li>
                        <button
                            id="dropdownNavbarLink"
                            data-dropdown-toggle="dropdownNavbar"
                            class="{{ request()->is('about') ? 'text-emerald-700' : 'text-gray-700 hover:text-emerald-700' }} flex items-center justify-center py-2 px-3 transition-colors duration-300 transform md:mx-4 md:my-0"
                        >
                            Profile
                            <svg
                                class="w-2.5 h-2.5 ms-2.5"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 10 6"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m1 1 4 4 4-4"
                                />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div
                            id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44"
                        >
                            <ul
                                class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton"
                            >
                                <li>
                                    <a
                                        href="/about"
                                        class="block px-4 py-2 hover:bg-gray-100"
                                        >Tentang Sekolah</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="/struktur-organisasi"
                                        class="block px-4 py-2 hover:bg-gray-100"
                                        >Struktur Organisasi</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="/tenaga-pengajar"
                                        class="block px-4 py-2 hover:bg-gray-100"
                                        >Tenaga Pengajar</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a
                            class="{{ request()->is('information') ? 'text-emerald-700' : 'text-gray-700 hover:text-emerald-700' }} block py-2 px-3 transition-colors duration-300 transform md:mx-4 md:my-0"
                            href="/information"
                            >Informasi</a
                        >
                    </li>
                    <li>
                        <a
                            class="{{ request()->is('contact') ? 'text-emerald-700' : 'text-gray-700 hover:text-emerald-700' }} block py-2 px-3 transition-colors duration-300 transform md:mx-4 md:my-0"
                            href="/contact"
                            >Contact</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
