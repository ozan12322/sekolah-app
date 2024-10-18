<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Dashboard") }}
        </h2>
    </x-slot>

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
                                    Judul Informasi
                                </th>
                                <th
                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                >
                                    Isi Informasi
                                </th>
                                <th
                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                                >
                                    Tgl Upload
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
                                    {{ $data->judul }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-2 text-gray-700"
                                >
                                    {{ $data->desc }}
                                </td>
                                <td
                                    class="whitespace-nowrap px-4 py-2 text-gray-700"
                                >
                                    {{ $data->created_at }}
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
                                                        
                                                        <img src="{{ $data->thumbnail }}" class="w-32 h-32 mx-auto">

                                                        <p
                                                            class="mt-2 text-gray-500 dark:text-gray-400"
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
                                    <a
                                        href="#"
                                        class="inline-block rounded bg-red-600 px-4 py-2 text-xs font-medium text-white hover:bg-red-700"
                                    >
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
