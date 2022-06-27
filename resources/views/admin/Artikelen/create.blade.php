@extends('admin.Artikelen.layout')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikel Aanmaken') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Nieuwe artikel aanmaken</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('Artikelen.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Er is serieus iets mis gegaan!<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('Artikelen.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Titel:</strong>
                                    <input type="text" name="title" class="form-control" placeholder="Titel">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Omschrijving:</strong>
                                    <input type="text" name="description" class="form-control" placeholder="omschrijving">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Beschrijving:</strong>
                                    <textarea class="form-control" style="height:150px" name="body" placeholder="beschrijving"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Opslaan</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>
