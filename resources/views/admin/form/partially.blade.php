@extends('layouts.main-admin')

@section('content')
    <section>
        <div class=" overp-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div
                class="text-sm font-medium text-center text-gray-500 border-b px-4 border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px">
                    <li class="mr-2">
                        <a href="{{ route('admin.form.index') }}"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">All
                            Forms</a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('admin.form.pending') }}"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Pending</a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('admin.form.partially') }}"
                            class="inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500"
                            aria-current="page">Partially</a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('admin.form.ontrip') }}"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">On
                            Trip</a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('admin.form.endtrip') }}"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">End
                            Trip</a>
                    </li>
                    <li class="mr-2">
                        <a href="{{ route('admin.form.cancel') }}"
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Cancel</a>
                    </li>
                </ul>
            </div>

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
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
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
                                    <td class="px-6 py-4 text-right">
                                        <button data-modal-target="static-modal-{{ $form }}"
                                            data-modal-toggle="static-modal-{{ $form }}" type="button"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Check</button>
                                    </td>
                                </tr>
                                <div>
                                    <!-- Main modal -->
                                    <div id="static-modal-{{ $form }}"
                                        data-modal-backdrop="static-{{ $form }}" tabindex="-1" aria-hidden="true"
                                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative w-full max-w-6xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div
                                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Payment Check
                                                    </h3>
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                        data-modal-hide="static-modal-{{ $form }}">
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
                                                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
                                                        @if ($form->payment->isNotEmpty())
                                                            @foreach ($form->payment as $payment)
                                                                <figure
                                                                    class="flex flex-col items-center justify-center bg-white dark:bg-gray-700">
                                                                    <div
                                                                        class="grid grid-cols-1 gap-4 lg:grid-cols-2 lg:gap-8">
                                                                        <img class="rounded py-2"
                                                                            src="{{ asset('storage/' . $payment->image_path) }}"
                                                                            alt="Payment Image" />
                                                                        <div
                                                                            class="flex justify-between mb-4 rounded-t sm:mb-5">
                                                                            <div
                                                                                class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                                                <h3 class="font-semibold ">
                                                                                    Renter: {{ $form->user->getName() }}
                                                                                </h3>
                                                                                <dl>
                                                                                    <dt
                                                                                        class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                                                                        Payer</dt>
                                                                                    <dd
                                                                                        class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                                                                        {{ $payment->getName() }}
                                                                                    </dd>
                                                                                    <dt
                                                                                        class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                                                                        Details</dt>
                                                                                    <dd
                                                                                        class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                                                                        Date:
                                                                                        {{ $payment->date }}
                                                                                        <br>
                                                                                        Amount: {{ $payment->amount }}
                                                                                        Baht.
                                                                                    </dd>
                                                                                    <dt
                                                                                        class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                                                                        Category</dt>
                                                                                    <dd
                                                                                        class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                                                                        {{ $payment->type }}</dd>
                                                                                </dl>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </figure>
                                                            @endforeach
                                                        @else
                                                            <p>No payment available for this form.</p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div
                                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <form action="{{ route('admin.form.update', ['form' => $form]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @method('PUT')
                                                        @csrf
                                                        <button data-modal-hide="static-modal-{{ $form }}"
                                                            type="submit"
                                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                            Accept</button>
                                                    </form>
                                                    <form action="{{ route('form.cancelForm', ['form' => $form]) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @method('PUT')
                                                        @csrf
                                                        <button data-modal-hide="static-modal-{{ $form }}"
                                                            type="submit"
                                                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                            Cancel</button>
                                                    </form>
                                                </div>
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
