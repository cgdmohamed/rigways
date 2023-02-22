@extends('layout')

@section('content')


<div class="px-4 sm:px-6 lg:px-8">
  <dl class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-2">
    <div class="overflow-hidden bg-white shadow sm:rounded-lg p-3">
  <form action="/projects" method="POST">
    @csrf
    <div class="space-y-8 divide-y divide-gray-200">

      <div class="pt-2">
        <div>
          <h3 class="text-lg font-medium leading-6 text-gray-900">Project Information</h3>
          <p class="mt-1 text-sm text-gray-500">Use a permanent address where you can receive mail.</p>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

          <div class="sm:col-span-6">
            <label for="name" class="block text-sm font-medium text-gray-700">Project Name</label>
            <div class="mt-1">
              <input type="text" name="name" id="name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('name') border-2 border-rose-600 @enderror">
            </div>
          </div>

          <div class="sm:col-span-6">
            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
            <select id="location" name="location" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              <option value="" disabled selected>Select</option>
              <option value="Kuwait">Kuwait</option>
              <option value="Bahrain">Bahrain</option>
              <option value="Saudi Arabia">Saudi Arabia</option>
              <option value="United Arab Emirates" >United Arab Emirates </option>
              <option value="Oman">Oman</option>
            </select>
          </div>


          <div class="sm:col-span-6">
            <label for="manager" class="block text-sm font-medium text-gray-700">Project Manager</label>
            <div class="mt-1">
              <select id="manager" name="manager" multiple class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('manager') border-2 border-rose-600 @enderror">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
              </select>
            </div>
          </div>

        </div>
      </div>

      <div class="pt-5">
        <div class="flex justify-end">
          <a href="{{ route('projects') }}" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Back</a>
          <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
        </div>
      </div>
  </form>
</dl>
</div>
</div>
@endsection