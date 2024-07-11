@extends('layouts.app')
@section('title', 'Erreur')

@section('content')

    <!-- 404 Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5 text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-secondary"></i>
                    <h1 class="display-1">500</h1>
                    <h1 class="mb-4">Erreur</h1>
                    <h2 class="mb-1">Désolé, un erreur s'est produite</h2><br/>
                    <a class="btn btn-secondary text-white rounded-pill py-3 px-5" href="{{route('index')}}">Retour à l'accueil</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->

@endsection
