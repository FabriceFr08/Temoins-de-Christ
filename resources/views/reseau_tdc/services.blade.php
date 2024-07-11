@vite('resources/js/search.js')
@extends('layouts.app')

@section('title', 'Services')
@section('content')
    <style>

        .avatar {
            display: block;
            position: relative;
            width: 150px; /* Largeur du cadre */
            height: 150px; /* Hauteur du cadre */
            overflow: hidden;
            border-radius: 50%; /* Pour des images circulaires */
            margin: 0 auto; /* Pour centrer horizontalement dans son conteneur parent */
            padding: 10px; /* Ajuster le padding pour réduire la taille de l'image à l'intérieur */
            box-sizing: border-box; /* Inclure le padding dans la taille totale du conteneur */
        }

        .avatar img {
            width: calc(100% - 20px); /* Ajuster la taille de l'image en fonction du padding */
            height: calc(100% - 20px); /* Ajuster la taille de l'image en fonction du padding */
            object-fit: cover; /* Pour couvrir tout le conteneur sans déformer */
            object-position: center; /* Pour centrer l'image */
            border-radius: 50%; /* Pour garder l'image circulaire */
        }


    </style>
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            @if(session('success'))
                <div class="alert alert-secondary fade show" role="alert">
                    {{ session('success') }}
                </div>
            @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">ARD-818</h4>
                <h1 class="display-4 mb-0 wow fadeInUp" data-wow-delay="0.3s">Les différents services</h1>
            </div>
            <div class="pt-5">

                <!-- Recherche -->
                <form method="GET" action="{{ route('services.filter') }}">
                    <div class="row filter-row">
                        <div class="col-12 col-sm-6 col-md-3 mb-3">
                            <div class="form-floating">
                                <select class="form-select" name="secteur_id" id="secteur" >
                                    <option value="">Sélectionner</option>
                                    @foreach($secteurs as $secteur)
                                        <option value="{{$secteur->id}}" {{ request()->secteur_id == $secteur->id ? 'selected' : '' }}>{{$secteur->nom}}</option>
                                    @endforeach
                                </select>
                                <label for="secteur">Secteur d'activité</label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mb-3">
                            <div class="form-floating">
                                <select class="form-select" name="pays_id" id="pays" >
                                    <option value="">Sélectionner</option>
                                    @foreach($pays as $pay)
                                        <option value="{{$pay->id}}" {{ request()->pays_id == $pay->id ? 'selected' : '' }}>{{$pay->nom}}</option>
                                    @endforeach
                                </select>
                                <label for="pays">Pays</label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mb-3">
                            <div class="form-floating">
                                <select class="form-select" name="ville_id" id="ville" >
                                    <option value=""></option>
                                    @foreach($villes as $ville)
                                        <option value="{{$ville->id}}" data-pays="{{$ville->pays_id}}" style="display: none;" {{ request()->ville_id == $ville->id ? 'selected' : '' }}>{{$ville->nom}}</option>
                                    @endforeach
                                </select>
                                <label for="ville">Ville</label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 mb-3 d-flex align-items-center">
                            <button type="submit" class="btn btn-secondary text-white py-3 px-6 w-100">Rechercher</button>
                        </div>
                    </div>
                </form>
                <!-- Recherche -->


                <div class="pt-5">
                    <div class="row" id="serviceContainer">
                        @foreach($services as $service)
                            <div class="col-md-4 mb-4 service-item" >
                                <a href="{{route('reseau.services.show', $service->hashedId)}}" class="text-decoration-none">
                                    <div class="testimonial-item border text-center rounded">
                                        <div class="profile-widget">

                                                <a href="{{route('reseau.services.show', $service->hashedId)}}" class="avatar">
                                                    @if($service->prestataire->photo !== null)
                                                    <img src="{{ asset('storage/' . $service->prestataire->photo) }}" alt="Image">
                                                    @else
                                                        <img src="../../img/c2.jpg" alt="Image">
                                                    @endif
                                                </a>

                                            <h5 class="mb-0">{{ $service->prestataire->nom }} {{ $service->prestataire->prenom }}</h5>
                                            <p>{{ $service->secteur->nom }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
{{--                <div class="pagination">--}}
{{--                    {{ $services->links() }}--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

@endsection
