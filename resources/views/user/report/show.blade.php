@extends('layouts.main')

@section('content')
    <section>
        <!-- Invoice -->
        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
            <div class="sm:w-11/12 lg:w-3/4 mx-auto">
                <!-- Card -->
                <div class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl dark:bg-gray-800">
                    <!-- Grid -->
                    <div class="flex justify-between">
                        <div>
                            <svg class="w-10 h-10" width="26" height="26" viewBox="0 0 26 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1 26V13C1 6.37258 6.37258 1 13 1C19.6274 1 25 6.37258 25 13C25 19.6274 19.6274 25 13 25H12"
                                    class="stroke-blue-600 dark:stroke-white" stroke="currentColor" stroke-width="2" />
                                <path
                                    d="M5 26V13.16C5 8.65336 8.58172 5 13 5C17.4183 5 21 8.65336 21 13.16C21 17.6666 17.4183 21.32 13 21.32H12"
                                    class="stroke-blue-600 dark:stroke-white" stroke="currentColor" stroke-width="2" />
                                <circle cx="13" cy="13.0214" r="5" fill="currentColor"
                                    class="fill-blue-600 dark:fill-white" />
                            </svg>

                            <h1 class="mt-2 text-lg md:text-xl font-semibold text-blue-600 dark:text-white">
                                Flowbite</h1>
                        </div>
                        <!-- Col -->

                        <div class="text-right">
                            <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 dark:text-gray-200">
                                Receipt #</h2>
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- End Grid -->

                    <!-- Grid -->
                    <div class="mt-8 grid sm:grid-cols-2 gap-3">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                Bill to: {{ $form->user->getName() }}</h3>
                        </div>
                        <!-- Col -->

                        <div class="sm:text-right space-y-2">
                            <!-- Grid -->
                            <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                                <dl class="grid sm:grid-cols-5 gap-x-3">
                                    <dt class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">
                                        Due date:</dt>
                                    <dd class="col-span-2 text-gray-500">
                                        {{ $form->created_at }}</dd>
                                </dl>
                            </div>
                            <!-- End Grid -->
                        </div>
                        <!-- Col -->
                    </div>
                    <!-- End Grid -->

                    <!-- Table -->
                    <div class="mt-6">
                        <div class="border border-gray-200 p-4 rounded-lg space-y-4 dark:border-gray-700">
                            <div class="hidden sm:grid sm:grid-cols-5">
                                <div class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase">
                                    Item</div>
                                <div class="text-left text-xs font-medium text-gray-500 uppercase">
                                    Qty</div>
                                <div class="text-left text-xs font-medium text-white uppercase dark:text-gray-800">
                                    Rate</div>
                                <div class="text-right text-xs font-medium text-gray-500 uppercase">
                                    Amount</div>
                            </div>

                            <div class="hidden sm:block border-b border-gray-200 dark:border-gray-700">
                            </div>

                            <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                <div class="col-span-full sm:col-span-2">
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                        Item</h5>
                                    <p class="font-medium text-gray-800 dark:text-gray-200">
                                        Deposit</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                        Qty</h5>
                                    <p class="text-gray-800 dark:text-gray-200">1</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                        Rate</h5>
                                    <p class="text-white dark:text-gray-800">5</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                        Amount</h5>
                                    <p class="sm:text-right text-gray-800 dark:text-gray-200">
                                        ฿500.00</p>
                                </div>
                            </div>

                            <div class="sm:hidden border-b border-gray-200 dark:border-gray-700">
                            </div>

                            <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                <div class="col-span-full sm:col-span-2">
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                        Item</h5>
                                    <p class="font-medium text-gray-800 dark:text-gray-200">
                                        {{ $form->car->name }}</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                        Qty</h5>
                                    <p class="text-gray-800 dark:text-gray-200">
                                        {{ $form->date_difference }}</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                        Rate</h5>
                                    <p class="text-white dark:text-gray-800">
                                        24</p>
                                </div>
                                <div>
                                    <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                        Amount</h5>
                                    <p class="sm:text-right text-gray-800 dark:text-gray-200">
                                        ฿{{ $form->car->price * $form->date_difference }}.00</p>
                                </div>
                            </div>

                            <div class="sm:hidden border-b border-gray-200 dark:border-gray-700">
                            </div>
                        </div>
                    </div>
                    <!-- End Table -->

                    <!-- Flex -->
                    <div class="mt-8 flex sm:justify-end">
                        <div class="w-full max-w-2xl sm:text-right space-y-2">
                            <!-- Grid -->
                            <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                                <dl class="grid sm:grid-cols-5 gap-x-3">
                                    <dt class="col-span-3 font-semibold text-black dark:text-gray-200">
                                        Total:</dt>
                                    <dd class="col-span-2 text-black">
                                        ฿{{ $form->car->price }}.00
                                    </dd>
                                </dl>
                            </div>
                            <!-- End Grid -->
                        </div>
                    </div>
                    <!-- End Flex -->

                    <div class="mt-8 sm:mt-12">
                        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                            Thank you!</h4>
                        <p class="text-gray-500">If you have any questions concerning this
                            invoice, use the following contact information:</p>
                    </div>

                    <p class="mt-5 text-sm text-gray-500">© 2022 Flowbite.</p>
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Invoice -->
    </section>
@endsection
