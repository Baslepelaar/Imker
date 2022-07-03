<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikel bekijken') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="pull-right">
                <button type="button" style="background-color:teal;" class="px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white hover:text-gray-900 transition">
                    <a href="{{ route('Artikelen.index') }}">Terug</a>
                </button>
            </div>
            <br>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="background-color: rgba(235, 189, 52, 0.5);">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200" style="background-color: rgba(235, 189, 52, 0.5); background-image: url('img/imkerbanner.jpg'); height: 20vh; ">
                    <div class="mt-8 text-2xl text-white">
                        <h1 style="text-align: center; font-size: 50px"><b>{{$artikel->title}}</b></h1>
                    </div>
                    <div class="mt-6">
                        <div class="mt-2 text-sm text-gray-500">
                            <h2 style="text-align: center; font-size: 23px"><b>{{$artikel->description}}</b></h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1">
                        <div class="mt-5 ml-3 mr-3 mb-5 text-sm text-black-500">
                            {!!$artikel->body!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
