@extends('admin.Artikelen.layout')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikelen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @section('content')
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Artikelen beheren</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success" href="{{ route('admin.Artikelen.create') }}">Nieuwe artikel aanmaken</a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Titel</th>
                            <th>Beschrijving</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($artikelen as $artikel)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $artikel->name }}</td>
                                <td>{{ $artikel->detail }}</td>
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
                    {!! $artikel->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
