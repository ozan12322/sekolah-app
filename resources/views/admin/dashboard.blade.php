<x-admin>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <a href="{{ route('admin.tambah') }}">
                    <x-primary-button>Tambah Berita</x-primary-button>
                </a>

                <div class="pt-5">
                    <table
                        class="min-w-full divide-y-2 divide-gray-500 bg-gray-200 text-sm"
                    >
                        <thead class="ltr:text-left rtl:text-right">
                            <tr>
                                <th
                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                >
                                    No.
                                </th>
                                <th
                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                >
                                    Judul Informasi
                                </th>
                                <th
                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                >
                                    Tanggal Upload
                                </th>
                                <th
                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                >
                                    Isi Informasi
                                </th>
                                <th class="px-4 py-2"></th>
                                <th class="px-4 py-2"></th>
                                <th class="px-4 py-2"></th>
                            </tr>
                        </thead>

                        @foreach ($berita as $data)
                        <tbody class="divide-y divide-gray-200">
                            <tr class="text-center">
                                <td
                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                >
                                    {{ $data->id }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                >
                                    {{ $data->judul }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                >
                                    {{ $data->date }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-2 text-gray-700"
                                >
                                    <p
                                        class="truncate text-justify text-balance"
                                    >
                                        {{ $data->desc }}
                                    </p>
                                </td>

                                <td class="whitespace-nowrap px-4 py-2">
                                    <div
                                        x-data="{ isOpen: false }"
                                        class="relative flex justify-center"
                                    >
                                        <button
                                            @click="isOpen = true"
                                            class="px-4 py-2 text-xs font-medium mx-auto tracking-wide text-white transition-colors duration-300 transform bg-indigo-600 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-80"
                                        >
                                            Lihat
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
                                                class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0"
                                            >
                                                <span
                                                    class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                    aria-hidden="true"
                                                    >&#8203;</span
                                                >

                                                <div
                                                    class="relative inline-block p-4 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl sm:max-w-sm rounded-xl dark:bg-gray-900 sm:my-8 sm:w-full sm:p-6"
                                                >
                                                    <div
                                                        class="flex items-center justify-center mx-auto"
                                                    >
                                                        <h1
                                                            class="font-semibold text-xl"
                                                        >
                                                            {{ $data->judul }}
                                                        </h1>
                                                    </div>

                                                    <div
                                                        class="mt-5 text-center items-center"
                                                    >
                                                        @empty($data->thumbnail)
                                                        <img
                                                            src="{{
                                                                url(
                                                                    'img/berita/'
                                                                )
                                                            }}"
                                                            class="w-32 mx-auto"
                                                        />
                                                        @else
                                                        <img
                                                            src="{{
                                                                url(
                                                                    'img/berita'
                                                                )
                                                            }}/{{ $data->thumbnail }}"
                                                            class="w-32 mx-auto"
                                                        />
                                                        @endempty
                                                        <p
                                                            class="mt-2 text-gray-500 dark:text-gray-400 text-balance text-justify"
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
                                </td>
                                <td class="whitespace-nowrap px-4 py-2">
                                    <a
                                        href="{{ route('admin.edit', $data->id) }}"
                                        class="inline-block rounded bg-green-600 px-4 py-2 text-xs font-medium text-white hover:bg-green-700"
                                    >
                                        Edit
                                    </a>
                                </td>
                                <td class="whitespace-nowrap px-4 py-2">
                                    <button
                                        data-modal-target="popup-modal"
                                        data-modal-toggle="popup-modal"
                                        class="px-4 py-2 text-xs font-medium mx-auto tracking-wide text-white transition-colors duration-300 transform bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-80"
                                        type="button"
                                    >
                                        Hapus
                                    </button>

                                    <div
                                        id="popup-modal"
                                        tabindex="-1"
                                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
                                    >
                                        <div
                                            class="relative p-4 w-full max-w-md max-h-full"
                                        >
                                            <div
                                                class="relative bg-white rounded-lg shadow dark:bg-gray-700"
                                            >
                                                <button
                                                    type="button"
                                                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="popup-modal"
                                                >
                                                    <svg
                                                        class="w-3 h-3"
                                                        aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none"
                                                        viewBox="0 0 14 14"
                                                    >
                                                        <path
                                                            stroke="currentColor"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
                                                        />
                                                    </svg>
                                                    <span class="sr-only"
                                                        >Close modal</span
                                                    >
                                                </button>
                                                <div
                                                    class="p-4 md:p-5 text-center"
                                                >
                                                    <svg
                                                        class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                        aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none"
                                                        viewBox="0 0 20 20"
                                                    >
                                                        <path
                                                            stroke="currentColor"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"
                                                        />
                                                    </svg>
                                                    <h3
                                                        class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400"
                                                    >
                                                        Are you sure you want to
                                                        delete this data?
                                                    </h3>
                                                    <form
                                                        action="{{ route('admin.destroy', $data->id) }}"
                                                        method="POST"
                                                        class="pb-2"
                                                    >
                                                        @csrf @method('DELETE')
                                                        <button
                                                            data-modal-hide="popup-modal"
                                                            type="submit"
                                                            class="mx-auto text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center"
                                                        >
                                                            Yes, I'm sure
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin>
