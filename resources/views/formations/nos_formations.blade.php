@extends('layouts.app')

@section('title', 'Nos formations')

@section('content')

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
                        <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Training Platform</h1>
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
                                <a href="#" class="h4 mb-3 d-block">Premiers Pas avec Christ</a>
                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <a href="lien_vers_la_page_2">
                        <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.3s">
                            <div class="training-img rounded-top">
                                <img src="/img/service-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                <h1 class="fs-1 fw-bold bg-secondary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">02</h1>
                            </div>
                            <div class="rounded-bottom border border-top-0 p-4">
                                <a href="#" class="h4 mb-3 d-block">Comment servir le Seigneur</a>
                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <a href="lien_vers_la_page_3">
                        <div class="training-item bg-white rounded wow fadeInUp" data-wow-delay="0.5s">
                            <div class="training-img rounded-top">
                                <img src="/img/service-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                                <h1 class="fs-1 fw-bold bg-secondary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">03</h1>
                            </div>
                            <div class="rounded-bottom border border-top-0 p-4">
                                <a href="#" class="h4 mb-3 d-block">Devenir un Témoin de Christ</a>
                                <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
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


