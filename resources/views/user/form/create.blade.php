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
                                <li class="flex items-center">
                                    <span
                                        class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                                        1
                                    </span>
                                    Fill <span class="hidden sm:inline-flex sm:ml-2">Form</span>
                                    <svg class="w-3 h-3 ml-2 sm:ml-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 12 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4" />
                                    </svg>
                                </li>
                                <li class="flex items-center text-blue-600 dark:text-blue-500">
                                    <span
                                        class="flex items-center justify-center w-5 h-5 mr-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
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
                        <div class="bg-white dark:bg-gray-900">
                            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
                                <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                                        Our cars</h2>
                                    <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">Explore the whole
                                        "The car models available for chauffeur-driven car rental service."
                                    </p>
                                </div>
                                @if ($cars->isEmpty())
                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                        role="alert">
                                        Sorry, our car is out of stock please select another date.
                                    </div>
                                    <a href="{{ route('user.home.index') }}">
                                        <button
                                            class="text-white inline-flex items-center justify-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            Seclect Another Date
                                        </button>
                                    </a>
                                @endif

                                <div class="flex justify-center">
                                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16">
                                        @foreach ($cars as $car)
                                            <form
                                                action="{{ route('user.form.create', ['car' => $car, 'request' => $request]) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div
                                                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                                                    <div class="hidden">
                                                        <select id="pick" name="pick"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            required>
                                                            <option value="{{ $request->pick }}"></option>
                                                        </select>
                                                        <select id="drop" name="drop"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            required>
                                                            <option value="{{ $request->drop }}"></option>
                                                        </select>
                                                        <select id="datetimes" name="datetimes"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                            required>
                                                            <option value="{{ $request->datetimes }}"></option>
                                                        </select>
                                                    </div>

                                                    <img class="rounded-t-lg max-h-48 w-max"
                                                        src="{{ asset('storage/' . $car->image_path) }}" alt="" />
                                                    <div class="p-5">
                                                        <h5
                                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                                            {{ $car->name }}
                                                        </h5>
                                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                                            Price: {{ $car->price }} Baht. <br>
                                                            Seat: {{ $car->seat }}
                                                        </p>
                                                        @if (Route::has('login'))
                                                            @Auth
                                                                <button type="submit"
                                                                    class="text-white inline-flex items-center justify-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                                    Booking
                                                                </button>
                                                            @else
                                                                <div>Please login</div>
                                                            @endAuth
                                                        @endif
                                                    </div>
                                                </div>
                                            </form>
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
