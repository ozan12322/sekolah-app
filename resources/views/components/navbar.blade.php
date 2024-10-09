<header class="z-20">
    <nav
        x-data="{ isOpen: false }"
        class="fixed w-full z-20 top-0 start-0 bg-white shadow-lg"
    >
        <div
            class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center"
        >
            <div
                class="flex font-bold text-xl text-emerald-700 items-center justify-between"
            >
                <a href="#">
                    SDN<span class="font-bold text-xl text-emerald-500"
                        >Sukasari03</span
                    >
                </a>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button
                        x-cloak
                        @click="isOpen = !isOpen"
                        type="button"
                        class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600"
                        aria-label="toggle menu"
                    >
                        <svg
                            x-show="!isOpen"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 8h16M4 16h16"
                            />
                        </svg>

                        <svg
                            x-show="isOpen"
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-6 h-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div
                x-cloak
                :class="[isOpen ? 'translate-x-0 opacity-100' : 'opacity-0 -translate-x-full']"
                class="fixed inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center"
            >
                <div class="flex flex-col md:flex-row md:mx-6">
                    <a
                        class="{{ request()->is('/') ? 'text-emerald-500' : 'text-emerald-700 hover:text-emerald-500' }} my-2 transition-colors duration-300 transform md:mx-4 md:my-0"
                        href="/"
                        >Home</a
                    >
                    <a
                        class="{{ request()->is('about') ? 'text-emerald-500' : 'text-emerald-700 hover:text-emerald-500' }} my-2 transition-colors duration-300 transform md:mx-4 md:my-0"
                        href="/about"
                        >About</a
                    >
                    <a
                        class="{{ request()->is('information') ? 'text-emerald-500' : 'text-emerald-700 hover:text-emerald-500' }} my-2 transition-colors duration-300 transform md:mx-4 md:my-0"
                        href="/information"
                        >Information</a
                    >
                    <a
                        class="{{ request()->is('contact') ? 'text-emerald-500' : 'text-emerald-700 hover:text-emerald-500' }} my-2 transition-colors duration-300 transform md:mx-4 md:my-0"
                        href="/contact"
                        >Contact</a
                    >
                </div>

                <div class="flex justify-center md:block">
                    @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-emerald-700 bg-white hover:text-emerald-500 focus:outline-none transition ease-in-out duration-150"
                            >
                                <div
                                    class="relative w-5 h-5 overflow-hidden bg-gray-100 rounded-full"
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
                            Log in
                        </button>
                    </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</header>
