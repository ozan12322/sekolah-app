<x-layout>
    <section class="pt-16 pb-28">
        <div class="container px-6 py-10 mx-auto">
            <h1
                class="text-2xl font-semibold text-emerald-700 capitalize lg:text-3xl text-center pb-2"
            >
                Berita
            </h1>
            <hr class="w-64 h-1 mx-auto bg-emerald-200 border-0 rounded" />

            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                @foreach ($berita as $data)
                <div class="lg:flex">
                    <article class="flex bg-white transition shadow-xl">
                        <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
                            <time
                                class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900"
                            >
                                <span>{{ $data->date }}</span>
                                <span class="w-px flex-1 bg-gray-900/10"></span>
                                {{--
                                <span>{{ $data->date->format('F j') }}</span>
                                --}}
                            </time>
                        </div>

                        <div class="hidden sm:block sm:basis-56">
                            <img
                                alt=""
                                src="{{
                                    url('img/berita')
                                }}/{{ $data->thumbnail }}"
                                class="aspect-square h-full w-full object-cover"
                            />
                        </div>

                        <div class="flex flex-1 flex-col justify-between">
                            <div
                                class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6"
                            >
                                <h3 class="font-bold uppercase text-gray-900">
                                    {{ $data->judul }}
                                </h3>

                                <p
                                    class="mt-2 line-clamp-3 text-sm/relaxed text-gray-700"
                                >
                                    {{ $data->desc }}
                                </p>
                            </div>

                            <div
                                x-data="{ isOpen: false}"
                                class="sm:flex sm:items-end sm:justify-end"
                            >
                                <button
                                    @click="isOpen = true"
                                    class="block bg-emerald-300 px-5 py-3 text-center text-xs font-bold uppercase text-gray-900 transition hover:bg-emerald-400"
                                >
                                    Buka Berita
                                </button>

                                <div
                                    x-show="isOpen"
                                    x-transition:enter="transition duration-300 ease-out"
                                    x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                                    x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
                                    x-transition:leave="transition duration-150 ease-in"
                                    x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
                                    x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                                    class="fixed inset-0 z-10 overflow-y-auto"
                                    aria-labelledby="modal-title"
                                    role="dialog"
                                    aria-modal="true"
                                >
                                    <div
                                        class="flex items-end justify-center min-h-screen max-w-full px-4 pt-4 pb-20 text-center sm:block sm:p-0"
                                    >
                                        <span
                                            class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                            aria-hidden="true"
                                            >&#8203;</span
                                        >

                                        <div
                                            class="relative inline-block p-4 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl sm:max-w-screen-lg rounded-xl dark:bg-gray-900 sm:my-8 sm:w-full sm:p-6"
                                        >
                                            <div
                                                class="flex items-center justify-center mx-auto"
                                            >
                                                @empty($data->thumbnail)
                                                <img
                                                    src="{{
                                                        url('img/berita/')
                                                    }}"
                                                    class="w-80 rounded-lg"
                                                />
                                                @else
                                                <img
                                                    src="{{
                                                        url('img/berita')
                                                    }}/{{ $data->thumbnail }}"
                                                    class="w-80 rounded-lg"
                                                />
                                                @endempty
                                            </div>

                                            <div class="mt-5 text-center">
                                                <h3
                                                    class="text-lg font-medium text-gray-800 dark:text-white"
                                                    id="modal-title"
                                                >
                                                    {{ $data->judul }}
                                                </h3>

                                                <p
                                                    class="mt-2 text-gray-500 dark:text-gray-400 text-justify"
                                                >
                                                    {{ $data->desc }}
                                                </p>
                                            </div>

                                            <div
                                                class="mt-4 sm:flex sm:items-center sm:justify-between sm:mt-6 sm:-mx-2"
                                            >
                                                <button
                                                    @click="isOpen = false"
                                                    class="px-4 sm:mx-2 w-full py-2.5 text-sm font-medium dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40"
                                                >
                                                    Tutup
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            {{ $beritas->links() }}
        </div>
    </section>
</x-layout>
