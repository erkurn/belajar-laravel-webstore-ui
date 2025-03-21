<x-store-layout>
    <div class="container mx-auto max-w-[85rem] w-full px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid gap-5 md:gap-20 md:grid-cols-2">
            <div class="p-10">
                <h2 class="mb-5 text-xl font-light">Contact Detail</h2>
                <div class="grid grid-cols-2 gap-5">
                    <div class="col-span-2">
                        <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Name</label>
                        <input type="email" id="input-label"
                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="you@site.com">
                    </div>
                    <div class="col-span-1">
                        <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Email</label>
                        <input type="email" id="input-label"
                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="you@site.com">
                    </div>
                    <div class="col-span-1">
                        <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Phone</label>
                        <input type="email" id="input-label"
                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="you@site.com">
                    </div>
                </div>
                <h2 class="my-5 text-xl font-light">Shipping Address</h2>
                <div class="grid grid-cols-2 gap-5">
                    <div class="col-span-2">
                        <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Name</label>
                        <input type="email" id="input-label"
                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="you@site.com">
                    </div>
                    <div class="col-span-1">
                        <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Email</label>
                        <input type="email" id="input-label"
                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="you@site.com">
                    </div>
                    <div class="col-span-1">
                        <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Phone</label>
                        <input type="email" id="input-label"
                            class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="you@site.com">
                    </div>
                </div>
                <h2 class="my-5 text-xl font-light">Shipping Method</h2>
                <div class="grid grid-cols-1 gap-5">
                    <div class="grid space-y-2">
                        <label for="hs-vertical-radio-in-form"
                            class="flex w-full p-3 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                            <input type="radio" name="hs-vertical-radio-in-form"
                                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                id="hs-vertical-radio-in-form">
                            <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Default radio</span>
                        </label>

                        <label for="hs-vertical-radio-checked-in-form"
                            class="flex w-full p-3 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                            <input type="radio" name="hs-vertical-radio-in-form"
                                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                id="hs-vertical-radio-checked-in-form" checked="">
                            <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Checked radio</span>
                        </label>
                    </div>
                </div>
                <h2 class="my-5 text-xl font-light">Payment Method</h2>
                <div class="grid grid-cols-1 gap-5">
                    <div class="grid space-y-2">
                        <label for="hs-vertical-radio-in-form"
                            class="flex w-full p-3 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                            <input type="radio" name="hs-vertical-radio-in-form"
                                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                id="hs-vertical-radio-in-form">
                            <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Default radio</span>
                        </label>

                        <label for="hs-vertical-radio-checked-in-form"
                            class="flex w-full p-3 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                            <input type="radio" name="hs-vertical-radio-in-form"
                                class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                id="hs-vertical-radio-checked-in-form" checked="">
                            <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">Checked radio</span>
                        </label>
                    </div>
                </div>
            </div>
            <div
                class="p-10 before:hidden md:before:block before:absolute before:inset-y-0 before:start-1/2 before:-z-1 before:w-full before:bg-gray-50 dark:before:bg-neutral-800">
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
                    <button type="button"
                        class="inline-flex items-center justify-center w-full px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Place an Order
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-store-layout>
