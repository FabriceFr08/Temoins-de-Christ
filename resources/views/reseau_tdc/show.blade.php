@extends('layouts.app')

@section('title', 'S\'inscrire')
@section('content')

    <!-- Page Content -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 75px;">

        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Service</h4>
                {{--                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">S'inscrire</h1>--}}
            </div>
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Profil et informations sur le service</h3>

                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="card mb-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
{{--                                        <a href="#"><img alt="" src="{{asset('user.jpg')}}"></a>--}}
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">{{$service->prestataire->nom}} {{$service->prestataire->prenom}}</h3><br/>
                                                <h6 class="text-muted"> Secteur d'activité : {{$service->secteur->nom}}</h6>
                                                <small class="text-muted">NOm du service : {{$service->nomService}}</small>
{{--                                                <div class="small doj text-muted">Date of Join : 1st Jan 2013</div>--}}
{{--                                                <div class="staff-msg"><a class="btn btn-custom" href="chat.html">Send Message</a></div>--}}
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Contact:</div>
                                                    <div class="text"><a href="">{{$service->prestataire->telephone}}</a></div>
                                                </li>
                                                <li>
                                                    <div class="title">Email:</div>
                                                    <div class="text"><a href="">{{$service->prestataire->email}}</a></div>
                                                </li>
                                                <li>
                                                    <div class="title">Site web:</div>
                                                    <div class="text">{{$service->siteWeb}}</div>
                                                </li>

                                                <li>
                                                    <div class="title">Tiktok:</div>
                                                    <div class="text">{{$service->tiktok}}</div>
                                                </li>

                                                <li>
                                                    <div class="title">Facebook:</div>
                                                    <div class="text">{{$service->facebook}}</div>
                                                </li>

                                                <li>
                                                    <div class="title">Instagram:</div>
                                                    <div class="text">{{$service->instagram}}</div>
                                                </li>

                                                <li>
                                                    <div class="title">Détails du service:</div>
                                                    <div class="text">{{$service->commentaire}}</div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- /Page Content -->

@endsection

