@extends('layout')

@section('content')
    <div class="px-4 py-6">
        <div>
            <h3 class="text-lg font-medium leading-6 text-gray-900">Upload a certificate to Rig</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">This information will be displayed publicly so
                be careful what you share.</p>
        </div>

        <form method="POST" action="/certs" class="space-y-8 divide-y divide-gray-200" enctype="multipart/form-data">
            @csrf

            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="serial_no" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Serial
                    Numbr</label>
                <div class="mt-1 sm:col-span-2 sm:mt-0">
                    <input type="text" name="serial_no" id="serial_no"
                        class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                </div>
            </div>

            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="issued_date" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Issued
                    Date</label>
                <div class="mt-1 sm:col-span-2 sm:mt-0">
                    <input id="datepicker" name="issue_date"
                        class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm"
                        type="text" placeholder="Select a date">
                </div>
            </div>

            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="expiry_date" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Issued
                    Date</label>
                <div class="mt-1 sm:col-span-2 sm:mt-0">
                    <input id="datepicker" name="expiry_date"
                        class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm"
                        type="text" placeholder="Select a date">
                </div>
            </div>

            <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="certificate_file" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Upload Certificate</label>
                <div class="mt-1 sm:col-span-2 sm:mt-0">
                    <input type="file" name="certificate_file" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm">
                </div>
            </div>


            <div class="pt-5">
                <div class="flex justify-end">
                    <a href="{{ route('rigs') }}"
                        class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancel</a>
                    <button type="submit"
                        class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                </div>
            </div>

        </form>
    </div>
@endsection
