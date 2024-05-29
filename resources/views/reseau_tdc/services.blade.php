@extends('layouts.app')

@section('title', 'S\'inscrire')
@section('content')

    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Notre réseau</h4>
                <h1 class="display-4 mb-0 wow fadeInUp" data-wow-delay="0.3s">Les différents prestataires de service</h1>
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
                                    <option value="">Sélectionner</option>
                                    @foreach($villes as $ville)
                                        <option value="{{$ville->id}}" data-pays="{{$ville->pays_id}}" {{ request()->ville_id == $ville->id ? 'selected' : '' }}>{{$ville->nom}}</option>
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
                            <div class="col-md-4 mb-4 service-item" data-secteur="{{ $service->secteur->id }}" data-pays="{{ $service->prestataire->pays_id }}" data-ville="{{ $service->prestataire->ville_id }}">
                                <a href="{{route('reseau.services.show', $service->id)}}" class="text-decoration-none">
                                    <div class="testimonial-item border text-center rounded">
                                        <div class="rounded-circle position-absolute" style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">
                                            <img src="{{asset('user.jpg')}}" class="img-fluid w-100 rounded" alt="Image">
                                        </div>
                                        <div class="position-relative" style="margin-top: 140px;">
                                            <h5 class="mb-0">{{ $service->prestataire->nom }} {{ $service->prestataire->prenom }}</h5>
                                            <p>{{ $service->secteur->nom }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
