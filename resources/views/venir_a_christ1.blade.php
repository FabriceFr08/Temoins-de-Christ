@extends('layouts.app')

@section('title', 'Venir à Christ')
@section('content')


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
{{--                                            <div class="border bg-secondary rounded">--}}
{{--                                                <img src="img/LOGO_Transparent.png" class="img-fluid w-100 rounded" alt="Image">--}}
{{--                                            </div>--}}
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">DONNER SA VIA À CHRIST</h4>
                    <h6 class="display-6 mb-4"><strong class="text-success">Pour avoir la victoire dans tous les domaines</strong></h6>
                    <h4>
                        Vous voulez donner votre vie à Christ et marcher avec Lui ? Découvrez comment en rejoignant notre groupe. Cliquez ici pour lire notre traité d'évangélisation et commencez votre voyage spirituel dès aujourd'hui.
                        <br/>
                    </h4>
                    <a href="TRAITE_DEVANGELISATION_TEMOINS_DE_CHRIST_DECEMBRE_2022.pdf" target="_blank" class="btn btn-success rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Venir à Christ</a>

                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Besoin de délivrance</h4>
{{--                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">S'inscrire</h1>--}}
            </div>
            <p class="h4">
                Besoin de délivrance dans un domaine ? Veuillez cliquer ici
                <br/>

            </p><br/>
            <a href="{{route('venir-a-christ')}}" class="btn btn-success rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">J'ai besoin de délivrance</a>

        </div>

    </div>


@endsection
