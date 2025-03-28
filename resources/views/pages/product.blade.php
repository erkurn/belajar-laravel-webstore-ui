<x-store-layout>
    <div class="container mx-auto max-w-[85rem] w-full px-4 sm:px-6 lg:px-8 py-10">
        <x-breadcumbs />
        <div class="grid grid-cols-1 gap-10 my-5 md:grid-cols-10">
            <div class="grid grid-cols-1 gap-2 md:col-span-7">
                <div class="w-full">
                    <img src="https://images.unsplash.com/photo-1569385210246-0873a782fd59?q=80&w=1760&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Cover" class="object-cover w-full rounded-md aspect-3/2 md:col-span-3">
                    <div class="grid grid-cols-1 gap-2 my-2 md:grid-cols-3 md:col-span-7">
                        <img src="https://images.unsplash.com/photo-1569097941209-aca563eb07d8?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="image-1" class="object-cover rounded-md aspect-square" />
                        <img src="https://images.unsplash.com/photo-1569097941209-aca563eb07d8?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="image-1" class="object-cover rounded-md aspect-square" />
                        <img src="https://images.unsplash.com/photo-1569097941209-aca563eb07d8?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="image-1" class="object-cover rounded-md aspect-square" />
                        <img src="https://images.unsplash.com/photo-1569097941209-aca563eb07d8?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="image-1" class="object-cover rounded-md aspect-square" />
                    </div>
                </div>
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
                        Ready Stock
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
                <div>
                    <h3 class="font-semibold">Description</h3>
                    <div class="my-2 prose text-gray-800 dark:text-neutral-200">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, aut consequuntur? Sapiente
                            repellat odit eos, ipsam laudantium obcaecati animi provident voluptatum voluptate
                            perferendis cum accusantium ullam quod veritatis. Harum, maxime.</p>
                        <p>Unde error dolores vel dicta hic accusamus nam reprehenderit veritatis itaque, necessitatibus
                            eligendi dolorum. Eaque fuga porro aliquam, soluta fugiat sapiente assumenda aspernatur
                            veniam, animi deleniti quidem dolorum quas iure.</p>
                        <p>Magnam et saepe, maxime ex beatae laudantium possimus provident aut ea necessitatibus
                            pariatur tempore quis alias, accusantium dolorum illo! Consequatur vero rem id deserunt
                            illum aut ex magni animi quis.</p>
                        <p>Aspernatur quaerat facere dolores quos enim doloremque optio ullam, iste illo facilis!
                            Nostrum aperiam itaque, sint cum minima quod voluptate inventore ex culpa ipsam soluta
                            explicabo, labore quasi atque deserunt.</p>
                    </div>
                </div>
            </div>
            <div class="md:col-span-10">
                <x-product-sections title="You may also like" />
            </div>

        </div>
    </div>

</x-store-layout>
