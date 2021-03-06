<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    //ik krijg de upload functie niet werkend helaas
    {{--CKEDITOR.replace( 'CKEStandard', {--}}
    {{--    filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",--}}
    {{--    filebrowserUploadMethod: 'form'--}}
    {{--});--}}
</script>

@extends('admin.Artikelen.layout')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikel bewerken') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <br>
                        <div class="pull-left">
                            <h2>Artikel bewerken</h2>
                        </div>

                        <div class="pull-right">
                            <br>
                            <a class="btn btn-primary" href="{{ route('Artikelen.index') }}"> Terug</a>
                        </div>
                        <br>
                    </div>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Het lijkt erop dat er iets niet goed is met je invoer.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('Artikelen.update',$artikel->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Titel:</strong>
                                <input type="text" name="title" value="{{ $artikel->title }}" class="form-control" placeholder="titel">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Omschrijving:</strong>
                                <input type="text" name="description" value="{{ $artikel->description }}" class="form-control" placeholder="omschrijving">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Beschrijving:</strong>
                                <textarea class="ckeditor form-control" name="body" id="CKEStandard" placeholder="beschrijving">{{ $artikel->body }}</textarea>
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
