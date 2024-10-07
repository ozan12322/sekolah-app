<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Website Sekolah</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
    </head>
    <body>
        <section>
            <div
                class="container flex items-center justify-center min-h-screen px-6 mx-auto"
            >
                <form class="w-full max-w-md">
                    <h1
                        class="mt-3 text-3xl font-bold text-center text-emerald-700 capitalize sm:text-3xl"
                    >
                        Login
                    </h1>

                    <div class="relative flex items-center mt-8">
                        <input
                            type="email"
                            class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                            placeholder="Email"
                        />
                    </div>

                    <div class="relative flex items-center mt-4">
                        <input
                            type="password"
                            class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40"
                            placeholder="Password"
                        />
                    </div>

                    <div class="mt-6">
                        <button
                            class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-emerald-500 rounded-lg hover:bg-emerald-400 focus:outline-none focus:ring focus:ring-emerald-300 focus:ring-opacity-50"
                        >
                            Sign in
                        </button>

                        <div class="mt-6 text-center">
                            <a
                                href="/register"
                                class="text-sm text-blue-500 hover:underline dark:text-blue-400"
                            >
                                Belum punya akun? Daftar disini
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>
