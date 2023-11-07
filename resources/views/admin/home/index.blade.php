@extends('layouts.main-admin')

@section('content')
    <section class="p-4 h-auto pt-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
            <a href="{{ route('admin.payment.index') }}">
                <div
                    class="flex items-center justify-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 h-32 md:h-64">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Payments Table
                    </h5>
                </div>
            </a>
            <a href="{{ route('admin.report.index') }}">
                <div
                    class="flex items-center justify-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 h-32 md:h-64">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Reports Table
                    </h5>
                </div>
            </a>
            <a href="{{ route('car.index') }}">
                <div
                    class="flex items-center justify-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 h-32 md:h-64">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Cars Table
                    </h5>
                </div>
            </a>
            <a href="{{ route('driver.index') }}">
                <div
                    class="flex items-center justify-center bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 h-32 md:h-64">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Drivers Table
                    </h5>
                </div>
            </a>
        </div>
        <div class="border-2 overflow-auto rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4">
            <div class="p-4">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <caption
                            class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                            Forms
                            <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Browse a list of Flowbite
                                products designed to help you work and play, stay organized, get answers, keep in touch,
                                grow your business, and more.</p>
                        </caption>
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Car Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Pick & Drop
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Date
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Phone Number
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($forms as $form)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $form->id }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $form->car->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $form->pick }}
                                        {{ $form->drop }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $form->check_in }}
                                        {{ $form->check_out }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $form->user->getName() }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $form->user->phone_number }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $form->status }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing
                        <span class="font-semibold text-gray-900 dark:text-white">{{ $forms->firstItem() }}</span> to
                        <span class="font-semibold text-gray-900 dark:text-white">{{ $forms->lastItem() }}</span> of
                        <span class="font-semibold text-gray-900 dark:text-white">{{ $forms->total() }}</span> results
                    </span>
                    <ul class="inline-flex -space-x-px text-sm h-8">
                        <li>
                            <a href="{{ $forms->previousPageUrl() }}"
                                class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="{{ $forms->nextPageUrl() }}"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
@endsection
