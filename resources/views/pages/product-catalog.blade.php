<x-store-layout>
    <div class="container mx-auto max-w-[85rem] w-full px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-10">
            <div class="grid grid-cols-1 gap-5 pr-6 border-r border-gray-200 md:col-span-3">
                <div>
                    <span class="block mb-2 text-lg font-semibold text-gray-800 dark:text-neutral-200">
                        Collections
                    </span>
                    <div class="space-y-4">
                        @for ($i = 0; $i <= 5; $i++)
                            <div class="flex items-center justify-between">
                                <div class="flex">
                                    <input type="checkbox"
                                        class="shrink-0 mt-0.5 border-gray-200 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                                        id="hs-default-checkbox-{{ $i }}">
                                    <label for="hs-default-checkbox-{{ $i }}"
                                        class="text-sm font-light ms-3 dark:text-neutral-400">Collection
                                        Name #{{ $i }}</label>
                                </div>
                                <span class="text-xs text-gray-800 font-loght">({{ rand(1, 99) }})</span>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-span-1 md:col-span-7">
                <div class="flex items-center justify-between gap-5 md:justify-end">
                    <div class="font-light text-gray-800">100 Items</div>
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-light text-gray-800 dark:text-neutral-200">
                            Sort By :
                        </span>
                        <select
                            class="px-3 py-2 text-sm border-gray-200 rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option selected="">Open this select menu</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
                <div class="grid gap-5 my-5 md:grid-cols-3">
                    @for ($i = 0; $i <= 10; $i++)
                        <x-single-product-card />
                    @endfor

                </div>
            </div>
        </div>
    </div>
</x-store-layout>
