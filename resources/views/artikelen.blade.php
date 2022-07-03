
<?php
    //require_once '../app/Http/Controllers/ArtikelenController.php';

    $artikelen = new \App\Http\Controllers\ArtikelenController();
    $artikelen = $artikelen->public();
?>
<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikelen over imkers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="background-color: rgba(235, 189, 52, 0.5);">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200" style="background-color: rgba(235, 189, 52, 0.5); background-image: url('img/imkerbanner.jpg'); height: 20vh; ">
                    <div class="mt-8 text-2xl text-white">
                        <h1 style="text-align: center; font-size: 50px"><b>Artikelen</b></h1>
                    </div>
                </div>

            <div>
                    @foreach ($artikelen as $artikel)
                    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('openArtikel',$artikel->id) }}">{{$artikel->title}}</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-sm text-gray-500">
                                    <ul>
                                        <li>het geven van cursussen over het houden van bijen (zie de pagina ‘<a href="https://www.imkervereniging-oegstgeest.nl/basiscursus-bijenhouden/">basiscursus</a>‘)</li><br>
                                        <li>het organiseren van lezingen op informatieavonden voor de beginnende imkers</li><br>
                                        <li>wij stellen beginnende imkers in de gelegenheid om informatie te krijgen van ervaren imkers tijdens informatieavonden en ochtenden, zoals ‘de imkerhoek’</li><br>
                                        <li>wij versturen&nbsp; interessante artikelen over het houden van bijen (zie de pagina <a href="https://www.imkervereniging-oegstgeest.nl/informatie/">artikelen</a>)</li><br>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>>
