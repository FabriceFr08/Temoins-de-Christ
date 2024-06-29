@extends('layouts.app')

@section('title', 'Nos formations')

@section('content')

    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{asset('img/formations/nos_formation_carousel.png')}}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3" style="max-width: 900px;">
                    <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s" style="letter-spacing: 3px;">Temoins de Christ | ACTES 1:8</h4>
                    <h1 class="display-1  text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">Nos formations</h1>
                    {{--                <p class="fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,--}}
                    {{--                </p>--}}
                    <div class="pt-2">
                        {{--                    <a class="btn btn-success rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft" data-wow-delay="0.1s" href="#">Join Now</a>--}}
                        {{--                    <a href="{{asset('TRAITE_DEVANGELISATION_TEMOINS_DE_CHRIST_DECEMBRE_2022.pdf')}}" target="_blank" class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s" href="#">Rejoins Nous</a>--}}
{{--                        <a href="{{route('venir-a-christ')}}" class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s">Oui je le veux</a>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .training-carousel.owl-carousel {
            display: block; /* Empêche le défilement */
        }

        .owl-nav {
            display: none; /* Masque les flèches de navigation */
        }

        .training-item {
            width: 100%; /* Assure que les éléments remplissent la largeur */
        }

        .training-img {
            position: relative; /* Positionnement relatif pour le texte superposé */
        }

        .fs-1 {
            font-size: 2.5rem; /* Taille de police pour les numéros */
        }
    </style>

    <!-- Training Start -->
    <div class="container-fluid training py-5">
        <div class="container py-5">
            <div class="pb-5">
                <div class="row g-4 align-items-end">
                    <div class="col-xl-8">
                        <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Nos formations</h4>
                        <h1 class="display-4 mb-0 wow fadeInUp" data-wow-delay="0.3s">Les niveaux de la formation</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <a href="{{route('nos-formations.premier_pas')}}">
                        <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
                            <div class="training-img rounded-top">
                                <img src="/img/service-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                <h1 class="fs-1 fw-bold bg-secondary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">01</h1>
                            </div>
                            <div class="rounded-bottom border border-top-0 p-4">
                                <a href="{{route('nos-formations.premier_pas')}}" class="h3 mb-3 d-block">Premiers Pas avec Christ</a>
{{--                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>--}}
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <a href="{{route('nos-formations.comment-servir-dieu')}}">
                        <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.3s">
                            <div class="training-img rounded-top">
                                <img src="/img/service-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                <h1 class="fs-1 fw-bold bg-secondary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">02</h1>
                            </div>
                            <div class="rounded-bottom border border-top-0 p-4">
                                <a href="{{route('nos-formations.comment-servir-dieu')}}" class="h3 mb-3 d-block">Comment servir le Seigneur</a>
{{--                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>--}}
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <a href="{{route('nos-formations.devenir_tdc')}}">
                        <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.5s">
                            <div class="training-img rounded-top">
                                <img src="/img/service-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                <h1 class="fs-1 fw-bold bg-secondary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">03</h1>
                            </div>
                            <div class="rounded-bottom border border-top-0 p-4">
                                <a href="{{route('nos-formations.devenir_tdc')}}" class="h3 mb-3 d-block">Devenir un Témoin de Christ</a>
{{--                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>--}}
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Training End -->

    <script>
        $(document).ready(function(){
            $('.training-carousel').owlCarousel({
                items: 1,
                loop: false,
                nav: false,
                dots: false,
                margin: 20,
                autoHeight: true
            });
        });
    </script>

@endsection


