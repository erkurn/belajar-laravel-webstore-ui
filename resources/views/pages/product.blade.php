<x-store-layout>
    <div class="container mx-auto max-w-[85rem] w-full px-4 sm:px-6 lg:px-8 py-10">
        <x-breadcumbs />
        <div class="grid grid-cols-1 gap-10 my-5 md:grid-cols-10">
            <div class="md:col-span-7">
                <x-vertical-carousel />
            </div>
            <div class="md:col-span-3">
                <div class="flex flex-col gap-2">
                    <div>
                        <h1 class="text-3xl font-semibold">Product Name</h1>
                        <h2 class="text-sm text-gray-800">Short Description From Product Name</h2>
                    </div>
                    <span class="text-xl font-bold">Rp123.123</span>
                </div>
                <div class="grid gap-2 my-5">
                    <x-rating />
                    <div class="flex items-center gap-2 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-warehouse">
                            <path
                                d="M22 8.35V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8.35A2 2 0 0 1 3.26 6.5l8-3.2a2 2 0 0 1 1.48 0l8 3.2A2 2 0 0 1 22 8.35Z" />
                            <path d="M6 18h12" />
                            <path d="M6 14h12" />
                            <rect width="12" height="12" x="6" y="10" />
                        </svg>
                        Stock Available
                    </div>
                </div>
                <div>
                    <div>
                        <h3 class="font-semibold">Color</h3>
                        <div class="grid gap-2 my-2 sm:grid-cols-2">
                            <label for="hs-radio-in-form"
                                class="flex w-full p-3 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                <input type="radio" name="hs-radio-in-form"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="hs-radio-in-form">
                                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Blue</span>
                            </label>

                            <label for="hs-radio-checked-in-form"
                                class="flex w-full p-3 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                <input type="radio" name="hs-radio-in-form"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="hs-radio-checked-in-form" checked="">
                                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Green</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <h3 class="font-semibold">Size</h3>
                        <div class="grid gap-2 my-2 sm:grid-cols-2">
                            <label for="hs-radio-in-form"
                                class="flex w-full p-3 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                <input type="radio" name="hs-radio-in-form"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="hs-radio-in-form">
                                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">12</span>
                            </label>

                            <label for="hs-radio-checked-in-form"
                                class="flex w-full p-3 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                                <input type="radio" name="hs-radio-in-form"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                    id="hs-radio-checked-in-form" checked="">
                                <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">13</span>
                            </label>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 my-5">
                        <!-- Input Number -->
                        <div class="inline-block px-3 py-2 bg-white border border-gray-200 rounded-lg dark:bg-neutral-900 dark:border-neutral-700"
                            data-hs-input-number="">
                            <div class="flex items-center gap-x-1.5">
                                <button type="button"
                                    class="inline-flex items-center justify-center text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-md size-6 gap-x-2 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                    tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                </button>
                                <input
                                    class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none dark:text-white"
                                    style="-moz-appearance: textfield;" type="number"
                                    aria-roledescription="Number field" value="0" data-hs-input-number-input="">
                                <button type="button"
                                    class="inline-flex items-center justify-center text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-md size-6 gap-x-2 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                    tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- End Input Number -->
                        <button type="button"
                            class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Add To Cart
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m5 11 4-7"></path>
                                <path d="m19 11-4-7"></path>
                                <path d="M2 11h20"></path>
                                <path d="m3.5 11 1.6 7.4a2 2 0 0 0 2 1.6h9.8c.9 0 1.8-.7 2-1.6l1.7-7.4"></path>
                                <path d="m9 11 1 9"></path>
                                <path d="M4.5 15.5h15"></path>
                                <path d="m15 11-1 9"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="md:col-span-10">
                <div class="hs-accordion-group">
                    <div class="hs-accordion active" id="hs-basic-with-arrow-heading-one">
                        <button
                            class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 focus:outline-hidden focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                            aria-expanded="true" aria-controls="hs-basic-with-arrow-collapse-one">
                            <svg class="block hs-accordion-active:hidden size-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                            <svg class="hidden hs-accordion-active:block size-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6"></path>
                            </svg>
                            Description
                        </button>
                        <div id="hs-basic-with-arrow-collapse-one"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                            role="region" aria-labelledby="hs-basic-with-arrow-heading-one">
                            <p class="text-gray-800 dark:text-neutral-200">
                                <em>This is the third item's accordion body.</em> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing
                                and hiding via CSS transitions.
                            </p>
                        </div>
                    </div>

                    <div class="hs-accordion" id="hs-basic-with-arrow-heading-two">
                        <button
                            class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 focus:outline-hidden focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                            aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-two">
                            <svg class="block hs-accordion-active:hidden size-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                            <svg class="hidden hs-accordion-active:block size-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6"></path>
                            </svg>
                            Shipping & Return
                        </button>
                        <div id="hs-basic-with-arrow-collapse-two"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            role="region" aria-labelledby="hs-basic-with-arrow-heading-two">
                            <p class="text-gray-800 dark:text-neutral-200">
                                <em>This is the third item's accordion body.</em> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing
                                and hiding via CSS transitions.
                            </p>
                        </div>
                    </div>

                    <div class="hs-accordion" id="hs-basic-with-arrow-heading-three">
                        <button
                            class="inline-flex items-center w-full py-3 font-semibold text-gray-800 rounded-lg hs-accordion-toggle hs-accordion-active:text-blue-600 gap-x-3 text-start hover:text-gray-500 focus:outline-hidden focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                            aria-expanded="false" aria-controls="hs-basic-with-arrow-collapse-three">
                            <svg class="block hs-accordion-active:hidden size-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                            <svg class="hidden hs-accordion-active:block size-4" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6"></path>
                            </svg>
                            FAQ
                        </button>
                        <div id="hs-basic-with-arrow-collapse-three"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            role="region" aria-labelledby="hs-basic-with-arrow-heading-three">
                            <p class="text-gray-800 dark:text-neutral-200">
                                <em>This is the third item's accordion body.</em> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing
                                and hiding via CSS transitions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:col-span-10">
                <h2>You may also like</h2>
                <x-product-sections />
            </div>

        </div>
    </div>

</x-store-layout>
