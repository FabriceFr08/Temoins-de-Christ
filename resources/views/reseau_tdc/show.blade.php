@extends('layouts.app')

@section('title', 'S\'inscrire')
@section('content')

    <div class="container-fluid blog py-5">
        <div class="container py-5">

            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Réseau ard-818</h4>
                <h1 class="display-4 mb-0 wow fadeInUp" data-wow-delay="0.3s">Profil du prestataire</h1>
            </div>
            <div class="pt-5">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-view">
                                    <div class="profile-img-wrap">
                                        <div class="profile-img">
                                            @if($service->prestataire->photo !== null)
                                                <img src="{{ asset('storage/' . $service->prestataire->photo) }}" alt="Image">
                                            @else
                                            <a href="#"><img src="../../img/c2.jpg" alt="Image">
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="profile-basic">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="profile-info-left">
                                                    <h3 class="user-name m-t-0 mb-0">{{$service->prestataire->nom}} {{$service->prestataire->prenom}}</h3>
                                                    <h6 class="text-muted">{{$service->secteur->nom}}</h6>
                                                    <small class="text-muted">{{$service->nomService}}</small>
{{--                                                    <div class="staff-id">Employee ID : FT-0001</div>--}}
                                                    <div class="small doj text-muted">Date d'entrée : {{ $service->created_at->format('M d, Y') }}</div>
                                                    <div class="staff-msg"><a class="btn btn-success" href="https://wa.me/{{$service->prestataire->telephone}}" target="_blank"><i class="fab fa-whatsapp"></i> Contacter</a></div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="personal-info">
                                                    <li>
                                                        <div class="title">Téléphone:</div>
                                                        <div class="text"><a href="">{{$service->prestataire->telephone}}</a></div>
                                                    </li>
{{--                                                    <li>--}}
{{--                                                        <div class="title">Email:</div>--}}
{{--                                                        <div class="text"><a href="">{{$service->prestataire->email}}</a></div>--}}
{{--                                                    </li>--}}
                                                    <li>
                                                        <div class="title">Pays:</div>
                                                        <div class="text">{{$service->prestataire->ville->pays->nom}}</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Ville:</div>
                                                        <div class="text">{{$service->prestataire->ville->nom}}</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Promotion:</div>
                                                        <div class="text">{{$service->prestataire->promotion}}</div>
                                                    </li>
{{--                                                    <li>--}}
{{--                                                        <div class="title">Informations sur le service:</div>--}}
{{--                                                        <div class="text">{{$service->commentaire}}</div>--}}
{{--                                                    </li>--}}

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="pro-edit"><a data-bs-target="#profile_info" data-bs-toggle="modal" class="edit-icon" href="#"><i class="bi bi-pencil"></i></a></div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br/><br/>

            <div class="title h4">Informations sur le service:</div>
            <div class="text" style="font-size: larger;">
                {{$service->commentaire}}
            </div>

        </div>


        <div class="modal fade" id="profile_info" tabindex="-1" role="dialog" aria-labelledby="profile_infoLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="profile_infoLabel">Mettre à jour vos informations</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="email_form">
                            <div class="form-group">
                                <label for="email" class="col-form-label">Email :</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary" onclick="submitEmail()">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

