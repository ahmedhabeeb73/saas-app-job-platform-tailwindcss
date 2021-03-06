<x-app-layout>
    @section('title','Settings')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="container mx-auto max-w-3xl  m-8 ">



        <form action="{{ route('profile.save') }}" method="POST" enctype="multipart/form-data">
         @csrf

            <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">

                <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
                    <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Profile Info</h2>
                    <p class="text-xs text-gray-500">Update your basic profile information such as Email Address, Name.</p>
                </div>
                <div class="md:w-2/3 w-full p-5">
                    <x-auth-validation-errors class="mx-auto text-center mt-8" :errors="$errors" />
                    <div class="p-8 ">
                        <label for="name" class="text-sm text-gray-600">Name</label>
                        <input class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500" type="text" value="{{auth()->user()->name}}" name="name">
                    </div>
                    <hr class="border-gray-200">
                    <div class="p-8">
                        <label for="email" class="text-sm text-gray-600">Email Address</label>
                        <input class="mt-2 border-2 border-gray-200 px-3 py-2 block w-full rounded-lg text-base text-gray-900 focus:outline-none focus:border-indigo-500" type="email" name="email" value="{{auth()->user()->email}}">

                    </div>
                    <x-button class="ml-3 mb-4 indigo-500 text-white text-sm font-medium px-6 py-2 rounded float-right uppercase cursor-pointer">
                        {{ __('Save') }}
                    </x-button>
                    <hr class="border-gray-200">
                    </div>
                </div>

        </form>
    </div>




</x-app-layout>
