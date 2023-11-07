@extends('layouts.main')

@section('content')
    <section>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-sm justify-center lg:mb-16 mb-8">
                    <h2 class="mb-4 text-3xl lg:text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">My
                        Booking</h2>
                    <p class="font-light text-gray-500 sm:text-xl dark:text-gray-400">"This is your car booking confirmation,
                        ready for your upcoming trip!"</p>
                    @foreach ($forms as $form)
                        <div class="flex flex-col justify-between py-4 leading-normal">
                            <div
                                class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                <div class="flex justify-between items-center mb-5 text-gray-500">
                                    @if ($form->status == 'PENDING')
                                        <span
                                            class="bg-yellow-100 text-yellow-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-800">
                                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                                </path>
                                            </svg>
                                            {{ $form->status }}
                                    @endif
                                    @if ($form->status == 'PARTIALLY')
                                        <span
                                            class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                                </path>
                                            </svg>
                                            {{ $form->status }}
                                    @endif
                                    @if ($form->status == 'ON TRIP')
                                        <span
                                            class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-800">
                                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                                </path>
                                            </svg>
                                            {{ $form->status }}
                                    @endif
                                    @if ($form->status == 'END TRIP')
                                        <span
                                            class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-200 dark:text-gray-800">
                                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                                </path>
                                            </svg>
                                            {{ $form->status }}
                                    @endif
                                    @if ($form->status == 'CANCEL')
                                        <span
                                            class="bg-red-100 text-red-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-800">
                                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                                </path>
                                            </svg>
                                            {{ $form->status }}
                                    @endif
                                    </span>
                                    <span class="text-sm">{{ $form->created_at }}</span>
                                </div>
                                <div class="flex justify-start">
                                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                        src="{{ asset('storage/' . $form->car->image_path) }}" alt="">
                                    <div class="px-4">
                                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $form->car->name }}</h2>
                                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
                                            Date: {{ $form->check_in }} to {{ $form->check_out }} <br>
                                            Pick & Drop: {{ $form->pick }}, {{ $form->drop }} <br>
                                        </p>
                                        @if ($form->status == 'END TRIP')
                                            <a href="{{ route('user.report.show', ['form' => $form]) }}"
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Receipt</a>
                                        @endif
                                    </div>
                                    @if ($form->payment->isNotEmpty())
                                        @php
                                            $uniqueFormIds = $form->payment->pluck('form_id')->unique();
                                        @endphp
                                        @foreach ($uniqueFormIds as $formId)
                                            @php
                                                $payments = $form->payment->where('form_id', $formId);
                                            @endphp
                                            @if (
                                                $form->status != 'PENDING' &&
                                                    $form->status != 'ON TRIP' &&
                                                    $form->status != 'END TRIP' &&
                                                    $form->status != 'CANCEL' &&
                                                    $payments->count() === 1)
                                                <div class="w-fit flex flex-col justify-center items-start">
                                                    <!-- Modal toggle -->
                                                    <button data-modal-target="static-modal-{{ $form }}"
                                                        data-modal-toggle="static-modal-{{ $form }}"
                                                        class="block text-white w-full mb-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                        type="button">
                                                        Pay
                                                    </button>

                                                    <!-- Main modal -->
                                                    <div id="static-modal-{{ $form }}"
                                                        data-modal-backdrop="static-{{ $form }}" tabindex="-1"
                                                        aria-hidden="true"
                                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                        <div class="relative w-full max-w-2xl max-h-full">
                                                            <!-- Modal content -->
                                                            <div
                                                                class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                <!-- Modal header -->
                                                                <div
                                                                    class="flex items-start justify-between px-8 py-4 border-b rounded-t dark:border-gray-600">
                                                                    <h3
                                                                        class="text-xl font-semibold text-gray-900 dark:text-white">
                                                                        Payment
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                        data-modal-hide="static-modal-{{ $form }}">
                                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 14 14">
                                                                            <path stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                        </svg>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                </div>
                                                                <!-- Modal body -->
                                                                <form
                                                                    action="{{ route('user.payment.create', ['form' => $form]) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="hidden">
                                                                        <select id="price" name="price"
                                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                            required>
                                                                            <option value="{{ $form->car->price - 500 }}">
                                                                            </option>
                                                                        </select>
                                                                        <select id="type" name="type"
                                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                            required>
                                                                            <option value="SECOND"></option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                                                        <div class="col-span-2 px-8 py-4">
                                                                            <div class="border-b pb-2">
                                                                                <label
                                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pick
                                                                                    &
                                                                                    Drop:
                                                                                    {{ $form->pick }} to
                                                                                    {{ $form->drop }}</label>
                                                                                <label
                                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date:
                                                                                    {{ $form->check_in }} to
                                                                                    {{ $form->check_out }}</label>
                                                                                <label
                                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price:
                                                                                    {{ $form->car->price - 500 }}
                                                                                    Baht.</label>
                                                                            </div>
                                                                            <div>
                                                                                <div
                                                                                    class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                                                                                    <div class="pt-2">
                                                                                        <label for="first_name"
                                                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fisrt
                                                                                            name</label>
                                                                                        <input type="text"
                                                                                            name="first_name"
                                                                                            id="first_name"
                                                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                                            value="{{ $form->user->first_name }}"
                                                                                            required="">
                                                                                    </div>
                                                                                    <div class="pt-2">
                                                                                        <label for="last_name"
                                                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                                                                            name</label>
                                                                                        <input type="text"
                                                                                            name="last_name"
                                                                                            id="last_name"
                                                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                                            value="{{ $form->user->last_name }}"
                                                                                            required="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="my-4"></div>
                                                                            <div>
                                                                                <div
                                                                                    class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                                                                                    <div>
                                                                                        <label for="date"
                                                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date
                                                                                            (Disable)
                                                                                        </label>
                                                                                        <div class="relative mb-6">
                                                                                            <div
                                                                                                class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                                                                                <svg class="w-6 h-6 text-gray-800 dark:text-white"
                                                                                                    aria-hidden="true"
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    fill="none"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        fill="currentColor"
                                                                                                        d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z" />
                                                                                                </svg>
                                                                                            </div>
                                                                                            <input type="text"
                                                                                                id="date"
                                                                                                name="date"
                                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                                                                disabled>
                                                                                        </div>
                                                                                        <div class="hidden relative mb-6">
                                                                                            <div
                                                                                                class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                                                                                <svg class="w-6 h-6 text-gray-800 dark:text-white"
                                                                                                    aria-hidden="true"
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    fill="none"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <path
                                                                                                        fill="currentColor"
                                                                                                        d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z" />
                                                                                                </svg>
                                                                                            </div>
                                                                                            <input type="text"
                                                                                                id="date"
                                                                                                name="date"
                                                                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                        </div>

                                                                                        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
                                                                                        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
                                                                                        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
                                                                                        <link rel="stylesheet"
                                                                                            type="text/css"
                                                                                            href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

                                                                                        <script>
                                                                                            $(function() {
                                                                                                $('input[name="date"]').daterangepicker({
                                                                                                    timePicker: true,
                                                                                                    singleDatePicker: true,
                                                                                                    minDate: moment(),
                                                                                                    maxDate: moment(),
                                                                                                    startDate: moment(),
                                                                                                    endDate: moment(),
                                                                                                    locale: {
                                                                                                        format: 'MM-DD-YYYY hh:mm A'
                                                                                                    }
                                                                                                });
                                                                                            });
                                                                                        </script>
                                                                                    </div>
                                                                                    <div>
                                                                                        <label for="amount"
                                                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Amount
                                                                                            (Disable)</label>
                                                                                        <input type="number"
                                                                                            name="amount" id="amount"
                                                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                                            value={{ $form->car->price - 500 }}
                                                                                            required="" disabled>
                                                                                        <input type="number"
                                                                                            name="amount" id="amount"
                                                                                            class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                                            value="{{ $form->car->price - 500 }}"
                                                                                            required="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="my-4"></div>
                                                                            <div>
                                                                                <label
                                                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                                                    for="image_path">Upload
                                                                                    image</label>
                                                                                <input
                                                                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                                                    name="image_path" id="image_path"
                                                                                    type="file" required="">
                                                                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300"
                                                                                    id="image_path">SVG, PNG
                                                                                    or JPG
                                                                                    (MAX. 800x400px)
                                                                                    .</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Modal footer -->
                                                                    <div
                                                                        class="flex items-center px-8 py-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                        <button data-modal-hide="static-modal"
                                                                            type="submit"
                                                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                            Pay</button>
                                                                        <button data-modal-hide="static-modal"
                                                                            type="button"
                                                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button data-modal-target="popup-modal-{{ $form->id }}"
                                                        data-modal-toggle="popup-modal-{{ $form->id }}"
                                                        class="block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
                                                        type="button">
                                                        Cancel
                                                    </button>

                                                    <div id="popup-modal-{{ $form->id }}" tabindex="-1"
                                                        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                                        <div class="relative w-full max-w-md max-h-full">
                                                            <div
                                                                class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                <button type="button"
                                                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                    data-modal-hide="popup-modal-{{ $form->id }}">
                                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 14 14">
                                                                        <path stroke="currentColor" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                    </svg>
                                                                    <span class="sr-only">Close modal</span>
                                                                </button>
                                                                <div class="p-6 text-center">
                                                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 20 20">
                                                                        <path stroke="currentColor" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                                    </svg>
                                                                    <h3
                                                                        class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                        Are you sure you want to cancel this car?</h3>
                                                                    <form
                                                                        action="{{ route('form.cancelForm', ['form' => $form]) }}"
                                                                        method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <button
                                                                            data-modal-hide="popup-modal-{{ $form->id }}"
                                                                            type="submit"
                                                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                            Yes, I'm sure
                                                                        </button>
                                                                        <button
                                                                            data-modal-hide="popup-modal-{{ $form->id }}"
                                                                            type="button"
                                                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                                                            No, cancel</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @else
                                        <div class="w-fit flex flex-col justify-center items-start">
                                            <!-- Modal toggle -->
                                            <div data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                                class="text-white font-medium text-sm px-5 py-2.5 text-center block max-w-sm p-6 bg-white dark:bg-gray-800 dark:text-gray-800"
                                                type="button">
                                                Cancel
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
@endsection
