<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Tambah Berita") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <form
                    class="max-w-sm mx-auto"
                    action="{{ route('admin.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    @csrf
                    <div class="mb-5">
                        <label
                            for="judul"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >Judul Berita</label
                        >
                        <input
                            type="text"
                            name="judul"
                            id="judul"
                            value="{{ old('judul') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5"
                            
                        />
                    </div>

                    <div class="mb-5">
                        <label
                            for="judul"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >Tanggal Berita</label
                        >
                        <input
                            type="date"
                            name="date"
                            id="date"
                            value="{{ old('date') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-emerald-500 focus:border-emerald-500 block w-full p-2.5"
                            
                        />
                    </div>

                    <div class="mb-5">
                        <label
                            for="desc"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            >Deskripsi</label
                        >
                        <textarea
                            name="desc"
                            id="desc"
                            value="{{ old('desc') }}"
                            rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-emerald-500 focus:border-emerald-500"
                            
                        ></textarea>
                    </div>

                    <div class="mb-5">
                        <label
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="thumbnail"
                            >Upload file</label
                        >
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            aria-describedby="user_avatar_help"
                            name="thumbnail"
                            id="thumbnail"
                            type="file"
                            value="{{ old('thumbnail') }}"
                            
                        />
                        <div
                            class="mt-1 text-sm text-gray-500 dark:text-gray-300"
                            id="thumbnail"
                        >
                            Thumbnail
                        </div>
                    </div>

                    <button
                        type="submit"
                        class="text-white bg-emerald-700 hover:bg-emerald-800 focus:ring-4 focus:outline-none focus:ring-emerald-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                    >
                        Tambah
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
