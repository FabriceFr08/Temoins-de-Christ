@extends('layouts.app')

@section('title', 'S\'inscrire')
@section('content')


    <!-- Formulaire pour s'enregistrer sur le réseau des témoins de Christ -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Notre Réseau</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">S'inscrire</h1>
            </div>
            <div class="bg-light rounded p-4 pb-0">
                <div class="row g-5 align-items-center">
                    <div class="col wow fadeInLeft" data-wow-delay="0.1s">
                        <h3 class="display-6 mb-2">Veuillez remplir et soumettre le formulaire</h3>
                        <p class="mb-4">Les champs avec * sont obligatoires<a class="text-primary fw-bold" href=""></a>.</p>
                        <form id="form" method="POST" action="{{route('reseau.store')}}">
                            @csrf
{{--                            <ul id="progressbar">--}}
{{--                                <li class="active" id="info"><strong>Informations personnelles</strong></li>--}}
{{--                                <li id=""><strong>Informations sur le service à proposer</strong></li>--}}
{{--                            </ul>--}}
{{--                            <div class="progress">--}}
{{--                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                            </div> <br/><br/>--}}

                            <div class="step">
                                <div class="row g-3">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required>
                                            <div id="nomError" class="invalid-feedback" style="display: none;"></div>

                                            <label for="nom">Nom * </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom" required>
                                            <div id="prenomError" class="invalid-feedback" style="display: none;"></div>
                                            <label for="prenom">Prénom *</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                            <div id="emailError" class="invalid-feedback" style="display: none;"></div>

                                            <label for="email">Email * </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" style="background: #FFFFFF" class="form-control" name="promotion_tdc" id="promotion" placeholder="Project">
                                            <label for="project">Promotion TDC</label>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <select type="text" class="form-select " name="pays_id" id="pays" required>
                                                <option></option>
                                                @foreach($pays as $pays)
                                                    <option value="{{$pays->id}}"> {{$pays->nom}}</option>
                                                @endforeach
                                            </select>
                                            <div id="paysError" class="invalid-feedback" style="display: none;"></div>

                                            <label for="pays">Pays * </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <select type="text" class="form-select" name="ville_id" id="ville" required>
                                                <option value=""></option> <!-- Option vide par défaut -->
                                                @foreach($villes as $ville)
                                                    <option value="{{$ville->id}}" data-pays="{{$ville->pays_id}}" style="display: none;">{{$ville->nom}}</option>
                                                @endforeach
                                            </select>


                                            <div id="villeError" class="invalid-feedback" style="display: none;"></div>

                                            <label for="project">Ville * </label>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" name="telephone" id="phone" required>
                                            <div id="phoneError" class="invalid-feedback" style="display: none;"></div>

                                        </div>

                                    </div>

                                </div>
                            </div><br/>

                            <div class="step">
                                <div class="row g-3">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <select type="text" class="form-select" name="secteur_id" id="secteur" placeholder="Secteur" required>
                                                <option></option>
                                                @foreach($secteurs as $secteur)
                                                    <option value="{{$secteur->id}}">{{$secteur->nom}}</option>
                                                @endforeach
                                            </select>
                                            <div id="secteurError" class="invalid-feedback"></div>

                                            <label for="project">Secteur d'activité * </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nomService" id="service" placeholder="Nom du service">
                                            <div id="serviceError" class="invalid-feedback"></div>

                                            <label for="email">Nom du service *</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="url" class="form-control" name="siteWeb" id="site" placeholder="Site web">
                                            <label for="site">Site web</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="url" class="form-control" name="tiktok" id="tiktok" placeholder="Page Tiktok">
                                            <label for="project">Page Tiktok</label>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="url" class="form-control" name="facebook" id="facebook" placeholder="Page Facebook">
                                            <label for="facebook">Page Facebook</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="url" class="form-control" name="instagram" id="instagram" placeholder="Page Instagram">
                                            <label for="instagram">Instagram</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="commentaire" placeholder="Description du service fourni" id="message" style="height: 160px"></textarea>
                                            <div id="messageError" class="invalid-feedback"></div>
                                            <label for="message">Description du service fourni *</label>
                                        </div>
                                    </div>

                                </div><br/>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
                                <button type="button" class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
                            </div>



                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection
