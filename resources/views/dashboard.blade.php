<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">


                    <div class="mt-8 text-2xl">
                        Welcome to Galernawindsoftware!
                    </div>

                    <div class="mt-6 text-gray-500">
                        Galernawindsoftware Admin Panel will provide you convinient way to manipulate all the things for
                        super user.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>