@extends('backend.layouts.app')

@section('PageTitle', "Liste des pannes")

@section('content')
    <!-- Votre contenu de la page ici -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Liste des pannes</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nom de la marque</th>
                            <th>Mail</th>
                            <th>Catégorie</th>
                            <th>Panne</th>
                            <th>Problème</th>
                            <th>Nom</th>
                            <th>Sujet</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rendezvous as $panne)
                        <tr>
                            <td>{{ $panne->marque }}</td>
                            <td>{{ $panne->mail }}</td>
                            <td>{{ $panne->catégorie }}</td>
                            <td>{{ $panne->panne }}</td>
                            <td>{{ $panne->problème }}</td>
                            <td>{{ $panne->nom }}</td>
                            <td>{{ $panne->sujet }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
