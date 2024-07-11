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
                        <div class="row" style="font-size: larger;">
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
                                                        <div class="title">Organisation:</div>
                                                        <div class="text">{{$service->prestataire->promotion}}</div>
                                                    </li>
                                                    @if($service->siteWeb != null)
                                                    <li>
                                                        <div class="title">Site web:</div>
                                                        <div class="text">{{$service->siteWeb}}</div>
                                                    </li>
                                                    @endif
                                                    @if($service->tiktok != null)
                                                        <li>
                                                            <div class="title">Page Tiktok:</div>
                                                            <div class="text">{{$service->tiktok}}</div>
                                                        </li>
                                                    @endif
                                                    @if($service->instagram != null)
                                                        <li>
                                                            <div class="title">Page Instagram:</div>
                                                            <div class="text">{{$service->instagram}}</div>
                                                        </li>
                                                    @endif
                                                    @if($service->facebook != null)
                                                        <li>
                                                            <div class="title">Page Facebook:</div>
                                                            <div class="text">{{$service->facebook}}</div>
                                                        </li>
                                                    @endif

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="pro-edit"><a  class="edit-icon" href="{{route('verificationCode')}}"><i class="bi bi-pencil"></i></a></div>--}}
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



    </div>


@endsection

