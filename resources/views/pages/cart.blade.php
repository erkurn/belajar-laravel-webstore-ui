<x-store-layout>
    <div class="container mx-auto max-w-[85rem] w-full px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid gap-10 md:grid-cols-10">
            <div class="md:col-span-7">
                <h1 class="mb-5 text-2xl font-light">Shopping Bag</h1>
                <div class="grid gap-5">
                    @for ($i = 0; $i <= 4; $i++)
                        <div class="flex items-center gap-5 pb-5 border-b border-gray-200">
                            <div class="relative w-40 h-40 overflow-hidden rounded-xl">
                                <img class="object-coversize-full"
                                    src="https://images.unsplash.com/photo-1546087513-2a2bc7fb6fa9?q=80&w=2487&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt="Product Name">
                            </div>
                            <div class="flex items-center">
                                <div class="py-5">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                                        Product Name
                                    </h3>
                                    <h2 class="text-sm text-gray-800">Ebook, Software Engineer, Web Developer</h2>
                                    <div class="flex items-center gap-2 my-5">

                                        <div x-data="{ quantity: 1 }" class="flex gap-2 items-centerm y-5">
                                            <div
                                                class="inline-block px-3 py-2 bg-white border border-gray-200 rounded-lg dark:bg-neutral-900 dark:border-neutral-700">
                                                <div class="flex items-center gap-x-1.5">
                                                    <button
                                                        class="inline-flex items-center justify-center text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-md cursor-pointer size-6 gap-x-2 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                                        @click="if(quantity > 0) quantity--">
                                                        <svg class="shrink-0 size-3.5"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                        </svg>
                                                    </button>
                                                    <!-- Input jumlah -->
                                                    <input
                                                        class="p-0 w-6 bg-transparent border-0 text-gray-800 text-center focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none dark:text-white"
                                                        style="-moz-appearance: textfield;" type="number"
                                                        x-model.number="quantity" @input="if(quantity < 0) quantity = 0"
                                                        min="0">


                                                    <!-- Tombol tambah -->
                                                    <button type="button"
                                                        class="inline-flex items-center justify-center text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-md cursor-pointer size-6 gap-x-2 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                                        @click="quantity++">
                                                        <svg class="shrink-0 size-3.5"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14"></path>
                                                            <path d="M12 5v14"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <p class="px-3 py-2 mt-1 text-xl font-semibold text-black dark:text-black">
                                            Rp.123.456
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="md:col-span-3">
                <h1 class="mb-5 text-2xl font-light">Order Summary</h1>
                <div class="grid gap-5">
                    <!-- List Group -->
                    <ul class="flex flex-col mt-3">
                        <li
                            class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border border-gray-200 gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                            <div class="flex items-center justify-between w-full">
                                <span>Sub Total</span>
                                <span>Rp123,456</span>
                            </div>
                        </li>
                        <li
                            class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border border-gray-200 gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                            <div class="flex items-center justify-between w-full">
                                <span>Shipping</span>
                                <span>—</span>
                            </div>
                        </li>
                        <li
                            class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border border-gray-200 gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                            <div class="flex items-center justify-between w-full">
                                <span>Total</span>
                                <span>Rp123,456</span>
                            </div>
                        </li>
                    </ul>
                    <!-- End List Group -->
                    <button type="button" onclick="window.location.href='/checkout'"
                        class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg cursor-pointer gap-x-2 hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Checkout Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-store-layout>
