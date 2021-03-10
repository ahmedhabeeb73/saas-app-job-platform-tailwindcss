<x-app-layout>
    @section('title','Subscriptions')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Subscriptions') }}
        </h2>
    </x-slot>

    <div class="container mx-auto max-w-3xl  m-8 ">
        {{--navabr--}}
        @include('account.nav')

        <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">

            <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
                <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">Account Info</h2>
                <p class="text-xs text-gray-500">Update your basic profile information such as Email Address, Name.</p>
            </div>
            <div class="md:w-2/3 w-full p-5">
   ahmed
            </div>
        </div>
    </div>

</x-app-layout>