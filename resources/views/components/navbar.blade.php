<header class="z-20">
    <nav
        x-data="{ isOpen: false }"
        class="fixed w-full z-20 top-0 start-0 bg-white shadow-lg dark:bg-gray-800"
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
                        class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
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
                class="fixed inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center"
            >
                <div class="flex flex-col md:flex-row md:mx-6">
                    <a
                        class="{{ request()->is('/') ? 'text-emerald-500' : 'text-emerald-700 hover:text-emerald-500' }} my-2 transition-colors duration-300 transform dark:text-emerald-200 md:mx-4 md:my-0"
                        href="/"
                        >Home</a
                    >
                    <a
                        class="{{ request()->is('about') ? 'text-emerald-500' : 'text-emerald-700 hover:text-emerald-500' }} my-2 transition-colors duration-300 transform dark:text-emerald-200 md:mx-4 md:my-0"
                        href="/about"
                        >About</a
                    >
                    <a
                        class="{{ request()->is('information') ? 'text-emerald-500' : 'text-emerald-700 hover:text-emerald-500' }} my-2 transition-colors duration-300 transform dark:text-emerald-200 md:mx-4 md:my-0"
                        href="/information"
                        >Information</a
                    >
                    <a
                        class="{{ request()->is('contact') ? 'text-emerald-500' : 'text-emerald-700 hover:text-emerald-500' }} my-2 transition-colors duration-300 transform dark:text-emerald-200 md:mx-4 md:my-0"
                        href="/contact"
                        >Contact</a
                    >
                </div>

                <div class="flex justify-center md:block">
                    <a href="/login">
                        <button
                            type="button"
                            class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-emerald-600 dark:hover:bg-emerald-700 dark:focus:ring-emerald-800"
                        >
                            Login
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
