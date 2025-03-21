<!-- Slider -->
<div data-hs-carousel='{
    "loadingClasses": "opacity-0"
  }' class="relative">
    <div class="flex flex-col gap-2 hs-carousel md:flex-row">
        <div class="relative overflow-hidden bg-white rounded-lg md:order-2 grow min-h-96">
            <div
                class="absolute top-0 bottom-0 flex transition-transform duration-700 opacity-0 hs-carousel-body start-0 flex-nowrap">
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full p-6 bg-gray-100 dark:bg-neutral-900">
                        <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">First
                            slide</span>
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full p-6 bg-gray-200 dark:bg-neutral-800">
                        <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">Second
                            slide</span>
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full p-6 bg-gray-300 dark:bg-neutral-700">
                        <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">Third
                            slide</span>
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full p-6 bg-gray-100 dark:bg-neutral-900">
                        <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">Fourth
                            slide</span>
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full p-6 bg-gray-200 dark:bg-neutral-800">
                        <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">Fifth
                            slide</span>
                    </div>
                </div>
                <div class="hs-carousel-slide">
                    <div class="flex justify-center h-full p-6 bg-gray-300 dark:bg-neutral-700">
                        <span class="self-center text-4xl text-gray-800 transition duration-700 dark:text-white">Sixth
                            slide</span>
                    </div>
                </div>
            </div>

            <button type="button"
                class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                <span class="text-2xl" aria-hidden="true">
                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6"></path>
                    </svg>
                </span>
                <span class="sr-only">Previous</span>
            </button>
            <button type="button"
                class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-11.5 h-full text-gray-800 hover:bg-gray-800/10 focus:outline-hidden focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
                <span class="sr-only">Next</span>
                <span class="text-2xl" aria-hidden="true">
                    <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </span>
            </button>
        </div>

        <div class="flex-none md:order-1">
            <div
                class="flex flex-row gap-2 overflow-x-auto hs-carousel-pagination max-h-96 md:flex-col md:overflow-x-hidden md:overflow-y-auto">
                <div
                    class="overflow-hidden border border-gray-200 rounded-md cursor-pointer hs-carousel-pagination-item shrink-0 size-20 md:size-32 hs-carousel-active:border-blue-400 dark:border-neutral-700">
                    <div
                        class="flex items-center justify-center p-2 text-center bg-gray-100 size-full dark:bg-neutral-900">
                        <span class="text-xs text-gray-800 transition duration-700 dark:text-white">First slide</span>
                    </div>
                </div>
                <div
                    class="overflow-hidden border border-gray-200 rounded-md cursor-pointer hs-carousel-pagination-item shrink-0 size-20 md:size-32 hs-carousel-active:border-blue-400 dark:border-neutral-700">
                    <div
                        class="flex items-center justify-center p-2 text-center bg-gray-200 size-full dark:bg-neutral-800">
                        <span class="text-xs text-gray-800 transition duration-700 dark:text-white">Second slide</span>
                    </div>
                </div>
                <div
                    class="overflow-hidden border border-gray-200 rounded-md cursor-pointer hs-carousel-pagination-item shrink-0 size-20 md:size-32 hs-carousel-active:border-blue-400 dark:border-neutral-700">
                    <div
                        class="flex items-center justify-center p-2 text-center bg-gray-300 size-full dark:bg-neutral-700">
                        <span class="text-xs text-gray-800 transition duration-700 dark:text-white">Third slide</span>
                    </div>
                </div>
                <div
                    class="overflow-hidden border border-gray-200 rounded-md cursor-pointer hs-carousel-pagination-item shrink-0 size-20 md:size-32 hs-carousel-active:border-blue-400 dark:border-neutral-700">
                    <div
                        class="flex items-center justify-center p-2 text-center bg-gray-100 size-full dark:bg-neutral-900">
                        <span class="text-xs text-gray-800 transition duration-700 dark:text-white">Fourth slide</span>
                    </div>
                </div>
                <div
                    class="overflow-hidden border border-gray-200 rounded-md cursor-pointer hs-carousel-pagination-item shrink-0 size-20 md:size-32 hs-carousel-active:border-blue-400 dark:border-neutral-700">
                    <div
                        class="flex items-center justify-center p-2 text-center bg-gray-200 size-full dark:bg-neutral-800">
                        <span class="text-xs text-gray-800 transition duration-700 dark:text-white">Fifth slide</span>
                    </div>
                </div>
                <div
                    class="overflow-hidden border border-gray-200 rounded-md cursor-pointer hs-carousel-pagination-item shrink-0 size-20 md:size-32 hs-carousel-active:border-blue-400 dark:border-neutral-700">
                    <div
                        class="flex items-center justify-center p-2 text-center bg-gray-300 size-full dark:bg-neutral-700">
                        <span class="text-xs text-gray-800 transition duration-700 dark:text-white">Sixth slide</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider -->
