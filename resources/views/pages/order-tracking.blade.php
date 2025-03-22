<x-store-layout>
    <div class="container mx-auto max-w-[85rem] w-full px-4 sm:px-6 lg:px-8 py-10">
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
            <div class="mx-auto sm:w-11/12 lg:w-3/4">

                <div class="mb-5">
                    <h1 class="text-2xl font-bold">Order Tracking</h1>
                    <h2>#123123</h2>
                </div>

                <div class="mb-5 space-y-3">
                    <dl class="flex flex-col gap-1 sm:flex-row">
                        <dt class="min-w-40">
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">Full Name</span>
                        </dt>
                        <dd>
                            Rezza Kurniawan
                        </dd>
                    </dl>
                    <dl class="flex flex-col gap-1 sm:flex-row">
                        <dt class="min-w-40">
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">Email</span>
                        </dt>
                        <dd>
                            rezza@belajarlaravel.id
                        </dd>
                    </dl>
                    <dl class="flex flex-col gap-1 sm:flex-row">
                        <dt class="min-w-40">
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">Phone Number</span>
                        </dt>
                        <dd>
                            6212312321
                        </dd>
                    </dl>
                    <dl class="flex flex-col gap-1 sm:flex-row">
                        <dt class="min-w-40">
                            <span class="block text-sm text-gray-500 dark:text-neutral-500">Address</span>
                        </dt>
                        <dd>
                            Address
                        </dd>
                    </dl>
                </div>

                <div class="mb-5">
                    <h1 class="text-xl font-bold">Order Summary</h1>
                    <ul class="flex flex-col mt-3">
                        <li
                            class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border border-gray-200 gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                            <div class="flex flex-col w-full">
                                @for ($i = 0; $i <= 5; $i++)
                                    <x-single-product-list />
                                @endfor
                            </div>
                        </li>
                        <li
                            class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border border-gray-200 gap-x-2 bg-gray-50 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                            <div class="flex items-center justify-between w-full">
                                <span>Total Transfer</span>
                                <span>Rp.123.123</span>
                            </div>
                        </li>
                    </ul>
                </div>


                <h1 class="mb-5 text-xl font-bold">Order Activities</h1>
                <!-- Item -->
                <div class="relative flex group gap-x-5">
                    <!-- Icon -->
                    <div
                        class="relative group-last:after:hidden after:absolute after:top-8 after:bottom-2 after:start-3 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                        <div class="relative z-10 flex items-center justify-center size-6">
                            <svg class="text-gray-600 shrink-0 size-6 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-circle-check-big">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335" />
                                <path d="m9 11 3 3L22 4" />
                            </svg>
                        </div>
                    </div>
                    <!-- End Icon -->

                    <!-- Right Content -->
                    <div class="pb-8 grow group-last:pb-0">
                        <h3 class="mb-1 text-xs text-gray-600 dark:text-neutral-400">
                            08:11, 1/2/2024
                        </h3>

                        <p class="text-sm font-semibold text-gray-800 dark:text-neutral-200">
                            Sales Order
                        </p>

                        <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum facilis unde aliquid facere
                            voluptates eaque non, explicabo ut. Eius at libero nisi excepturi perferendis dolores omnis
                            assumenda delectus voluptas voluptate!
                        </p>
                    </div>
                    <!-- End Right Content -->
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="relative flex group gap-x-5">
                    <!-- Icon -->
                    <div
                        class="relative group-last:after:hidden after:absolute after:top-8 after:bottom-2 after:start-3 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                        <div class="relative z-10 flex items-center justify-center size-6">
                            <svg class="text-gray-600 shrink-0 size-6 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-circle-check-big">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335" />
                                <path d="m9 11 3 3L22 4" />
                            </svg>
                        </div>
                    </div>
                    <!-- End Icon -->

                    <!-- Right Content -->
                    <div class="pb-8 grow group-last:pb-0">
                        <h3 class="mb-1 text-xs text-gray-600 dark:text-neutral-400">
                            08:11, 1/2/2024
                        </h3>

                        <p class="text-sm font-semibold text-gray-800 dark:text-neutral-200">
                            Sales Order
                        </p>

                        <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum facilis unde aliquid facere
                            voluptates eaque non, explicabo ut. Eius at libero nisi excepturi perferendis dolores omnis
                            assumenda delectus voluptas voluptate!
                        </p>
                    </div>
                    <!-- End Right Content -->
                </div>
                <!-- End Item -->

                <!-- Item -->
                <div class="relative flex group gap-x-5">
                    <!-- Icon -->
                    <div
                        class="relative group-last:after:hidden after:absolute after:top-8 after:bottom-2 after:start-3 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                        <div class="relative z-10 flex items-center justify-center size-6">
                            <svg class="text-gray-600 shrink-0 size-6 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-circle-check-big">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335" />
                                <path d="m9 11 3 3L22 4" />
                            </svg>
                        </div>
                    </div>
                    <!-- End Icon -->

                    <!-- Right Content -->
                    <div class="pb-8 grow group-last:pb-0">
                        <h3 class="mb-1 text-xs text-gray-600 dark:text-neutral-400">
                            08:11, 1/2/2024
                        </h3>

                        <p class="text-sm font-semibold text-gray-800 dark:text-neutral-200">
                            Sales Order
                        </p>

                        <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum facilis unde aliquid facere
                            voluptates eaque non, explicabo ut. Eius at libero nisi excepturi perferendis dolores omnis
                            assumenda delectus voluptas voluptate!
                        </p>
                    </div>
                    <!-- End Right Content -->
                </div>
                <!-- End Item -->

            </div>
        </div>
    </div>
</x-store-layout>
