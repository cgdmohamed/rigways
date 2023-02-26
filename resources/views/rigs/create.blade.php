@extends('dashboard')

@section('content')
    <div class="px-4 py-6 sm:px-6 lg:px-8 sm:columns-1 md:columns-1 lg:columns-1 ">

        <div class="mt-5 md:col-span-2 md:mt-0">

            <form action="/rigs" method="POST">
                @csrf
                <div class="sm:overflow-hidden sm:rounded-md">
                    <div class="px-4 pt-5 sm:px-6 bg-white">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Add new rig information</h3>
                        <p class="mt-1 text-sm text-gray-500">Please fill the information carfuly.</p>
                    </div>
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <div>
                            <label for="rig_name" class="block text-sm font-medium text-gray-700">Rig Name</label>
                            <div class="mt-1">
                                <input type="text" name="rig_name" id="rig_name"
                                    class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                    placeholder="Something like RG354">
                            </div>
                        </div>

                        <div>
                            <label for="rig_type" class="block text-sm font-medium text-gray-700">Type</label>
                            <select id="rig_type" name="rig_type"
                                class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                <option value="drill ship">Drill Ship Rig</option>
                                <option value="land rig">Land Rig</option>
                                <option value="submersible rig">Submersible Rig</option>
                                <option value="jack-up rig">Jack-up Rig</option>
                                <option value="platform rig">Platform Rig</option>
                                <option value="semi-submersible rig">Semi-submersible</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-base font-medium text-gray-900">Current status</label>
                            <fieldset class="mt-4">
                                <legend class="sr-only">Rig status</legend>
                                <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                    <div class="flex items-center">
                                        <input id="relocate" name="rig_status" type="radio" value="relocate" checked
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="relocate"
                                            class="ml-3 block text-sm font-medium text-gray-700">Relocate</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="migration" name="rig_status" type="radio" value="migration"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="migration"
                                            class="ml-3 block text-sm font-medium text-gray-700">Migration</label>
                                    </div>

                                    <div class="flex items-center">
                                        <input id="deployed" name="rig_status" type="radio" value="deployed"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="deployed"
                                            class="ml-3 block text-sm font-medium text-gray-700">Deployed</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>


                    </div>
                    
                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <a href="{{ route('rigs') }}"
                            class="mr-2 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Back
                        </a>
                        <button type="submit"
                            class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Create</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
