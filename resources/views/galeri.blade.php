<x-layout>
    <section class="pt-16 pb-28">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-bold text-center text-emerald-700 pb-2">
                Galeri
            </h1>
            <hr class="w-64 h-1 mx-auto bg-emerald-200 border-0 rounded" />
            <div
                class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3"
            >
                <div
                    class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group"
                    style="background-image: url('img/kegiatan/pramuka.jpg')"
                >
                    <div
                        class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100"
                    >
                        <h2
                            class="mt-4 text-xl font-semibold text-white capitalize"
                        >
                            Kegiatan Pramuka
                        </h2>
                        <p
                            class="mt-2 text-lg tracking-wider text-emerald-400 uppercase"
                        >
                            Keg
                        </p>
                    </div>
                </div>

                <div
                    class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group"
                    style="
                        background-image: url('img/kegiatan/pembagian-rapor.jpg');
                    "
                >
                    <div
                        class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100"
                    >
                        <h2
                            class="mt-4 text-xl font-semibold text-white capitalize"
                        >
                            Pembagian Rapot
                        </h2>
                        <p
                            class="mt-2 text-lg tracking-wider text-emerald-400 uppercase"
                        >
                            Keg
                        </p>
                    </div>
                </div>

                <div
                    class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group"
                    style="background-image: url('img/kegiatan/kultum.jpg')"
                >
                    <div
                        class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100"
                    >
                        <h2
                            class="mt-4 text-xl font-semibold text-white capitalize"
                        >
                            Kultum
                        </h2>
                        <p
                            class="mt-2 text-lg tracking-wider text-emerald-400 uppercase"
                        >
                            Keg
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
