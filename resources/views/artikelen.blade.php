@extends('admin.Artikelen.layout')
<?php
    //require_once '../app/Http/Controllers/ArtikelenController.php';

    $artikelen = new \App\Http\Controllers\ArtikelenController();
    $artikelen = $artikelen->index();
?>
<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Homepage') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="background-color: rgba(235, 189, 52, 0.5);">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200" style="background-color: rgba(235, 189, 52, 0.5); background-image: url('img/imkerbanner.jpg'); height: 30vh; ">
                    <div class="mt-8 text-2xl text-white">
                        <h1 style="text-align: center; font-size: 50px"><b>Welkom bij Imkers!</b></h1>
                    </div>

                    <div class="mt-8 text-2xl text-white">
                        <b>het houden van bijen!</b>
                    </div>

                    <div class="mt-6 text-white">
                        De imkervereniging Oegstgeest en omstreken strekt zich uit over de regio Oegstgeest, Leiden, Lisse, Kaag en Braassem.
                        De imkervereniging stelt zich ten doel de kennis over het houden van bijen en de relatie van bijen met hun (planten) omgeving te verbreden bij zowel de imkers, als bij het grotere publiek.
                    </div>
                </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Titel</th>
                            <th>Omschrijving</th>
                            <th>Beschrijving</th>
                            <th width="280px">Actie</th>
                        </tr>

                    @foreach ($artikelen as $artikel)
                        <tr>
                            <td>{{ $artikel->id }}</td>
                            <td>{{ $artikel->title }}</td>
                            <td>{{ $artikel->description }}</td>
                            <td>{!! $artikel->body !!}</td> <!-- geeft weer alsof het html code is !-->
                            <td>
                                <form action="{{ route('Artikelen.destroy',$artikel->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('Artikelen.show',$artikel->id) }}">Bekijken</a>
                                    <a class="btn btn-primary" href="{{ route('Artikelen.edit',$artikel->id) }}">Bewerken</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Verwijderen</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>>
