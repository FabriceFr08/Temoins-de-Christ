@extends('layouts.app')

@section('title', 'Comment servir DIEU')

@section('content')

    <style>
        ul.stylish-list {
            list-style-type: none; /* Supprime les puces par défaut */
            padding: 0;
        }
        ul.stylish-list li {
            padding: 10px 0;
            margin: 5px 0;
            font-size: 1.2em;
            display: flex;
            align-items: center;
            color: #333; /* Couleur du texte */
        }
        ul.stylish-list li svg {
            width: 1.5em;
            height: 1.5em;
            margin-right: 10px;
            fill: orange; /* Couleur de l'icône SVG */
        }
    </style>

    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{asset('img/formations/nos_formation_carousel.png')}}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3" style="max-width: 900px;">
                    <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s" style="letter-spacing: 3px;">Temoins de Christ | ACTES 1:8</h4>
                    <h4 class="display-2  text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">Formation/Comment servir DIEU</h4>

                </div>
            </div>
        </div>
    </div>

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="border bg-secondary rounded">
                        <img src="/img/formations/formation_promo_9.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">Premiers pas avec Christ</h4>
                    <h6 class="display-6 mb-4">Contenu de la formation</h6>
                    <p>
                        <font size="4"> <!-- Vous pouvez ajuster le chiffre pour augmenter ou diminuer la taille -->
                            <ul class="stylish-list">
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15l-5-5 1.41-1.41L11 14.17l7.59-7.59L20 8l-9 9z"/></svg>
                                    Version Live
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15l-5-5 1.41-1.41L11 14.17l7.59-7.59L20 8l-9 9z"/></svg>
                                    Six modules
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 15l-5-5 1.41-1.41L11 14.17l7.59-7.59L20 8l-9 9z"/></svg>
                                    Deux heures de cours par semaine
                                </li>
                            </ul>
                        </font>
                    </p>


                    <a class="btn btn-success rounded-pill text-white py-3 px-5" target="_blank" href="https://shorturl.at/xIeWD">M'inscrire</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection


