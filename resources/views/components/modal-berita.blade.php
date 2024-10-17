<div
    id="default-modal"
    tabindex="-1"
    aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full shadow-lg"
>
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div
                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600"
            >
                Judul Berita
                <button
                    type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="default-modal"
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
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <img
                    class="object-cover w-full h-56 rounded-lg lg:w-64 mx-auto"
                    src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                    alt=""
                />
                <p class="text-base leading-relaxed text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Officiis voluptatum, repellat cum sapiente deserunt quaerat
                    neque iusto fugiat alias dicta delectus? Dolorem in minus
                    nemo voluptatum. Non, deleniti dolorum voluptas praesentium
                    possimus ex tempora iste officia iure ipsam nulla rerum
                    illum magnam ipsa fugiat mollitia vitae, reprehenderit
                    accusamus? Sint odit consectetur, pariatur adipisci eaque id
                    maxime eum exercitationem accusamus quam. Reiciendis quas
                    explicabo magni eos repudiandae quis autem sit, quasi fugit
                    magnam est deleniti dicta. Similique saepe corrupti nulla
                    omnis sint blanditiis distinctio aut deleniti minima ea
                    repellat quia vel, odit ipsam placeat inventore libero eos
                    quidem. Culpa, cumque itaque.
                </p>
            </div>
            <!-- Modal footer -->
            <div
                class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b"
            >
                <button
                    data-modal-hide="default-modal"
                    type="button"
                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-emerald-700 focus:z-10 focus:ring-4 focus:ring-gray-100"
                >
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>
