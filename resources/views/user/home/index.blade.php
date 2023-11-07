@extends('layouts.main')

@section('content')
    <section>
        <div class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
                <div class="text-center">
                    <a href="/"
                        class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700"
                        role="alert">
                        <span class="text-xs bg-primary-600 rounded-full text-white px-4 py-1.5 mr-3">New</span> <span
                            class="text-sm font-medium">All booking available!</span>
                        <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <h1
                        class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                        "Effortless Car Rental Service with a Personal Driver"
                    </h1>
                    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Here
                        Experience the utmost convenience of renting a vehicle with a dedicated chauffeur who will be at
                        your service for the entire duration of your trip.</p>
                </div>

                <div class="relative p-4 w-full h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                        <!-- Modal header -->
                        <div
                            class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                            <ol
                                class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4">
                                <li class="flex items-center text-blue-600 dark:text-blue-500">
                                    <span
                                        class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                                        1
                                    </span>
                                    Fill <span class="hidden sm:inline-flex sm:ml-2">Form</span>
                                    <svg class="w-3 h-3 ml-2 sm:ml-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 12 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                                    </svg>
                                </li>
                                <li class="flex items-center">
                                    <span
                                        class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                        2
                                    </span>
                                    Select <span class="hidden sm:inline-flex sm:ml-2">Cars</span>
                                    <svg class="w-3 h-3 ml-2 sm:ml-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 12 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                                    </svg>
                                </li>
                                <li class="flex items-center">
                                    <span
                                        class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                        3
                                    </span>
                                    Payment
                                </li>
                            </ol>

                        </div>
                        <!-- Modal body -->
                        <form action="{{ route('user.car.index') }}" method="POST">
                            @csrf
                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                <div class="flex items-center justify-center">
                                    <div>
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            "Effortless Car Rental Service with a Personal Driver"</h5>
                                        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest
                                            Experience the utmost convenience of renting a vehicle with a dedicated
                                            chauffeur who will be at
                                            your service for the entire duration of your trip.</p>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <label for="pick"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pick</label>
                                        <select id="pick" name="pick"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            required>
                                            <option value="Bangkok">Bangkok</option>
                                            <option value="Bangkok">Nonthaburi</option>
                                            <option value="Bangkok">Loey</option>
                                        </select>
                                    </div>
                                    <div class="my-4"></div>
                                    <div>
                                        <label for="drop"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Drop</label>
                                        <select id="drop" name="drop"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            required>
                                            <option value="Bangkok">Bangkok</option>
                                            <option value="Bangkok">Nonthaburi</option>
                                            <option value="Bangkok">Loey</option>
                                        </select>
                                    </div>
                                    <div class="my-4"></div>
                                    <div>
                                        <label for="datetimes"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                                        <div class="relative mb-6">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path fill="currentColor"
                                                        d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z" />
                                                </svg>
                                            </div>
                                            <input type="text" id="datetimes" name="datetimes"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        </div>

                                        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
                                        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                                        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                                        <link rel="stylesheet" type="text/css"
                                            href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

                                        <script>
                                            $(function() {
                                                $('input[name="datetimes"]').daterangepicker({
                                                    timePicker: false,
                                                    minDate: moment().startOf('day').add(1, 'day'),
                                                    maxDate: moment().startOf('month').add(1, 'month'),
                                                    startDate: moment(),
                                                    endDate: moment().startOf('dat').add(1, 'day'),
                                                    locale: {
                                                        format: 'MM-DD-YYYY'
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                    <div>

                                        @if (Route::has('login'))
                                            @Auth
                                                <button type="submit"
                                                    class="text-white inline-flex items-center justify-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                    Booking
                                                </button>
                                            @else
                                                <div class="p-4 mb-4 text-sm text-center text-red-800 rounded-lg bg-red-50 dark:bg-gray-700 dark:text-red-400"
                                                    role="alert">
                                                    You must be signed in to access the booking feature.
                                                </div>
                                            @endAuth
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
