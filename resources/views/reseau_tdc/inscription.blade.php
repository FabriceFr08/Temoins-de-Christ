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
                        <form id="form" method="POST" enctype="multipart/form-data" action="{{route('reseau.store')}}">
                            @csrf
                            <ul id="progressbar">
                                <li class="active" id="info"><strong>Informations personnelles</strong></li>
                                <li id="service-info"><strong>Informations sur le service à proposer</strong></li>
                                <li id="service-info"><strong>Récapitulatif</strong></li>

                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 33%"></div>
                            </div> <br/><br/>

                            <div class="step">
                                <!-- Step 1 content goes here -->
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
                                            <select class="form-select" name="promotion" id="promotion" required>
                                                <option value=""></option>
                                                <option value="Témoins de Christ">Témoins de Christ</option>
                                                <option value="Victoire avec Christ">Victoire avec Christ</option>
                                            </select>
                                            <div id="promotionError" class="invalid-feedback" style="display: none;"></div>
                                            <label for="promotion">TDC ou Victoire avec Christ * </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <select type="text" class="form-select" name="pays_id" id="pays" required>
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
                                                <option></option>
                                                @foreach($villes as $ville)
                                                    <option value="{{$ville->id}}" data-pays="{{$ville->pays_id}}" style="display: none;">{{$ville->nom}}</option>
                                                @endforeach
                                            </select>
                                            <div id="villeError" class="invalid-feedback" style="display: none;"></div>
                                            <label for="ville">Ville * </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="tel" class="form-control custom-phone-input" name="telephone" id="phone" required>
                                            <div id="phoneError" class="invalid-feedback" style="display: none;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div><br/>

                            <div class="step">
                                <!-- Step 2 content goes here -->
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
                                            <label for="secteur">Secteur d'activité * </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nomService" id="service" placeholder="Nom du service">
                                            <div id="serviceError" class="invalid-feedback"></div>
                                            <label for="service">Nom du service *</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="url" class="form-control" name="siteWeb" id="site" placeholder="Site web">
                                            <div id="siteError" class="invalid-feedback"></div>
                                            <label for="site">Site web</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="tiktok" id="tiktok" placeholder="Page Tiktok">
                                            <label for="tiktok">Page Tiktok</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Page Facebook">
                                            <label for="facebook">Page Facebook</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Page Instagram">
                                            <label for="instagram">Instagram</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" name="photo" id="photo" placeholder="Visuel/Carte de visite/Photo">
                                            <div id="photoError" class="invalid-feedback" style="display: none;"></div>
                                            <label for="site">Visuel/Carte de visite/Photo</label>
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

                            <div class="step">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <h3>Récapitulatif des informations</h3>
                                        <ul class="list-group">
                                            <li class="list-group-item"><strong>Nom:</strong> <span id="recapNom"></span></li>
                                            <li class="list-group-item"><strong>Prénom:</strong> <span id="recapPrenom"></span></li>
                                            <li class="list-group-item"><strong>Email:</strong> <span id="recapEmail"></span></li>
                                            <li class="list-group-item"><strong>Promotion:</strong> <span id="recapPromotion"></span></li>
                                            <li class="list-group-item"><strong>Pays:</strong> <span id="recapPays"></span></li>
                                            <li class="list-group-item"><strong>Ville:</strong> <span id="recapVille"></span></li>
                                            <li class="list-group-item"><strong>Téléphone:</strong> <span id="recapPhone"></span></li>
                                            <li class="list-group-item"><strong>Secteur d'activité:</strong> <span id="recapSecteur"></span></li>
                                            <li class="list-group-item"><strong>Nom du service:</strong> <span id="recapService"></span></li>
                                            <li class="list-group-item"><strong>Site web:</strong> <span id="recapSite"></span></li>
                                            <li class="list-group-item"><strong>Page Tiktok:</strong> <span id="recapTiktok"></span></li>
                                            <li class="list-group-item"><strong>Page Facebook:</strong> <span id="recapFacebook"></span></li>
                                            <li class="list-group-item"><strong>Instagram:</strong> <span id="recapInstagram"></span></li>
                                            <li class="list-group-item"><strong>Description du service fourni:</strong> <span id="recapMessage"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
                                <button type="button" class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
                                <button type="submit" class="btn btn-primary rounded-pill text-white py-3 px-5 m-2" id="submitBtn" style="display: none;">Soumettre</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
