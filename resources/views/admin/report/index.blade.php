@extends('layouts.main-admin')

@section('content')
    <section>
        <div class="overp-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="p-4">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table id="form-booking" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <caption
                            class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Reports
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite
                                products designed to help you work and play, stay organized, get answers, keep in touch,
                                grow your business, and more.</p>
                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex item-center">
                                        @sortablelink('id', 'Id')<svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex item-center">
                                        @sortablelink('form_id', 'Form Id')<svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <div class="flex item-center">
                                        @sortablelink('created_at', 'Date')<svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Car
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $report)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $report->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $report->form_id }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $report->created_at }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $report->form->car->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $report->form->car->price }} ฿
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $report->form->user->getName() }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button data-modal-target="static-modal-{{ $report }}"
                                            data-modal-toggle="static-modal-{{ $report }}" type="button"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</button>
                                    </td>
                                </tr>
                                <!-- Main modal -->
                                <div id="static-modal-{{ $report }}" data-modal-backdrop="static-{{ $report }}"
                                    tabindex="-1" aria-hidden="true"
                                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative w-full max-w-2xl max-h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                <h3 class="text-xl font-semibold pl-2 text-gray-900 dark:text-white">
                                                    Receipt
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-hide="static-modal-{{ $report }}">
                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="p-6 space-y-6">
                                                <!-- Card -->
                                                <div
                                                    class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl dark:bg-gray-800">
                                                    <!-- Grid -->
                                                    <div class="flex justify-between">
                                                        <div>
                                                            <svg class="w-10 h-10" width="26" height="26"
                                                                viewBox="0 0 26 26" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M1 26V13C1 6.37258 6.37258 1 13 1C19.6274 1 25 6.37258 25 13C25 19.6274 19.6274 25 13 25H12"
                                                                    class="stroke-blue-600 dark:stroke-white"
                                                                    stroke="currentColor" stroke-width="2" />
                                                                <path
                                                                    d="M5 26V13.16C5 8.65336 8.58172 5 13 5C17.4183 5 21 8.65336 21 13.16C21 17.6666 17.4183 21.32 13 21.32H12"
                                                                    class="stroke-blue-600 dark:stroke-white"
                                                                    stroke="currentColor" stroke-width="2" />
                                                                <circle cx="13" cy="13.0214" r="5"
                                                                    fill="currentColor"
                                                                    class="fill-blue-600 dark:fill-white" />
                                                            </svg>

                                                            <h1
                                                                class="mt-2 text-lg md:text-xl font-semibold text-blue-600 dark:text-white">
                                                                Flowbite</h1>
                                                        </div>
                                                        <!-- Col -->

                                                        <div class="text-right">
                                                            <h2
                                                                class="text-2xl md:text-3xl font-semibold text-gray-800 dark:text-gray-200">
                                                                Receipt #</h2>
                                                            <span class="mt-1 block text-gray-500">Id:
                                                                {{ $report->id }}</span>
                                                        </div>
                                                        <!-- Col -->
                                                    </div>
                                                    <!-- End Grid -->

                                                    <!-- Grid -->
                                                    <div class="mt-8 grid sm:grid-cols-2 gap-3">
                                                        <div>
                                                            <h3
                                                                class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                                                Bill to:</h3>
                                                            <h3
                                                                class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                                                                {{ $report->form->user->getName() }}</h3>
                                                        </div>
                                                        <!-- Col -->

                                                        <div class="sm:text-right space-y-2">
                                                            <!-- Grid -->
                                                            <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                                                                <dl class="grid sm:grid-cols-5 gap-x-3">
                                                                    <dt
                                                                        class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">
                                                                        Due date:</dt>
                                                                    <dd class="col-span-2 text-gray-500">
                                                                        {{ $report->created_at }}</dd>
                                                                </dl>
                                                            </div>
                                                            <!-- End Grid -->
                                                        </div>
                                                        <!-- Col -->
                                                    </div>
                                                    <!-- End Grid -->

                                                    <!-- Table -->
                                                    <div class="mt-6">
                                                        <div
                                                            class="border border-gray-200 p-4 rounded-lg space-y-4 dark:border-gray-700">
                                                            <div class="hidden sm:grid sm:grid-cols-5">
                                                                <div
                                                                    class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase">
                                                                    Item</div>
                                                                <div
                                                                    class="text-left text-xs font-medium text-gray-500 uppercase">
                                                                    Qty</div>
                                                                <div
                                                                    class="text-left text-xs font-medium text-gray-200 uppercase dark:text-gray-800">
                                                                    Rate</div>
                                                                <div
                                                                    class="text-right text-xs font-medium text-gray-500 uppercase">
                                                                    Amount</div>
                                                            </div>

                                                            <div
                                                                class="hidden sm:block border-b border-gray-200 dark:border-gray-700">
                                                            </div>

                                                            <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                                                <div class="col-span-full sm:col-span-2">
                                                                    <h5
                                                                        class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                                                        Item</h5>
                                                                    <p
                                                                        class="font-medium text-gray-800 dark:text-gray-200">
                                                                        Deposit</p>
                                                                </div>
                                                                <div>
                                                                    <h5
                                                                        class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                                                        Qty</h5>
                                                                    <p class="text-gray-800 dark:text-gray-200">1</p>
                                                                </div>
                                                                <div>
                                                                    <h5
                                                                        class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                                                        Rate</h5>
                                                                    <p class="text-gray-200 dark:text-gray-800">5</p>
                                                                </div>
                                                                <div>
                                                                    <h5
                                                                        class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                                                        Amount</h5>
                                                                    <p
                                                                        class="sm:text-right text-gray-800 dark:text-gray-200">
                                                                        $500</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="sm:hidden border-b border-gray-200 dark:border-gray-700">
                                                            </div>

                                                            <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                                                                <div class="col-span-full sm:col-span-2">
                                                                    <h5
                                                                        class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                                                        Item</h5>
                                                                    <p
                                                                        class="font-medium text-gray-800 dark:text-gray-200">
                                                                        {{ $report->form->car->name }}</p>
                                                                </div>
                                                                <div>
                                                                    <h5
                                                                        class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                                                        Qty</h5>
                                                                    <p class="text-gray-800 dark:text-gray-200">
                                                                        {{ $report->form->date_difference }}</p>
                                                                </div>
                                                                <div>
                                                                    <h5
                                                                        class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                                                        Rate</h5>
                                                                    <p class="text-gray-200 dark:text-gray-800">
                                                                        24</p>
                                                                </div>
                                                                <div>
                                                                    <h5
                                                                        class="sm:hidden text-xs font-medium text-gray-500 uppercase">
                                                                        Amount</h5>
                                                                    <p
                                                                        class="sm:text-right text-gray-800 dark:text-gray-200">
                                                                        ฿{{ $report->form->car->price }}</p>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="sm:hidden border-b border-gray-200 dark:border-gray-700">
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
                                                                    <dt
                                                                        class="col-span-3 font-semibold text-gray-800 dark:text-gray-200">
                                                                        Total:</dt>
                                                                    <dd class="col-span-2 text-gray-500">
                                                                        ฿{{ $report->form->car->price * $report->form->date_difference }}
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
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing
                        <span class="font-semibold text-gray-900 dark:text-white">{{ $reports->firstItem() }}</span> to
                        <span class="font-semibold text-gray-900 dark:text-white">{{ $reports->lastItem() }}</span> of
                        <span class="font-semibold text-gray-900 dark:text-white">{{ $reports->total() }}</span> results
                    </span>
                    <ul class="inline-flex -space-x-px text-sm h-8">
                        <li>
                            <a href="{{ $reports->previousPageUrl() }}"
                                class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="{{ $reports->nextPageUrl() }}"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection
