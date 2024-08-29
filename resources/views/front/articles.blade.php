@extends('layouts.app')

@section('title', 'Se déployer')

@section('content')
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{asset('img/c3.jpg')}}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3" style="max-width: 900px;">
                    <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s" style="letter-spacing: 3px;">Temoins de Christ | ACTES 1:8</h4>
                    <h4 class="display-4  text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">Se déployer</h4>
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

    <!-- Présentation de VAC -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="">
                        <img src="img/don_operation.jpg" class="img-fluid w-100 " alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">SE DEPLOYER</h4>
{{--                    <h6 class="display-6 mb-4">SE DÉPLOYER AVEC NOTRE DON D’OPÉRATION, DANS NOTRE APPEL, NOTRE MISSION AVEC NOTRE VISION DIVINE POUR ACCOMPLIR LES BONNES OEUVRES QUE DIEU A PRÉPARÉES POUR NOUS</h6>--}}
                    <p>
                        <font size="4"> <!-- Vous pouvez ajuster le chiffre pour augmenter ou diminuer la taille -->
                            Dans la proclamation de la bonne nouvelle, le service, l’exhortation, l’enseignement, le donner, le leadership et la compassion.

                            Romains 12:6:8 Français Courant :

                            «  Nous avons des dons différents à utiliser selon ce que Dieu a accordé gratuitement à chacun : L'un de nous a-t-il le don de transmettre des messages reçus de la part de Dieu ? Qu'il le fasse selon la foi.
                            7 Un autre a-t-il le don de servir ? Qu'il serve. Quelqu'un a-t-il le don d'enseigner ? Qu'il enseigne.
                            8 Quelqu'un a-t-il le don d'encourager les autres ? Qu'il les encourage. Que celui qui donne ses biens le fasse avec une entière générosité. Que celui qui dirige le fasse avec soin. Que celui qui aide les malheureux le fasse avec joie ».

                            Chaque être humain a un don d’opération. Celui devient efficace et développé quand nous venons à Christ, et que nous recevons le baptême du Saint-Esprit, qui nous confère alors l’onction du Saint-Esprit pour le ministère.

                            Mais ce don fondateur est déjà en nous depuis notre naissance, même si la majorité d’être humains, y compris les rachetés les ignorent.

                            Si toi aussi tu veux enfin découvrir ton don d’opération pour couler avec en tant que Témoins de Christ qui porte beaucoup de fruits : viens vite t’inscrire à notre formation , et tu comprendras enfin le but de ton existence et pourquoi tu es si précieux dans le corps du Christ.<br/>

                            <strong>Frère Elior Favor Kossia</strong>
                        </font>
                    </p>

{{--                    <a class="btn btn-success rounded-pill text-white py-3 px-5" href="https://chat.whatsapp.com/GTHzBqg6rLSHeZeVBzyb2n">Rejoindre le groupe</a>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- Fin section -->

    <!-- Blogs Start -->
    <div class="container-fluid blog pb-5">
        <div class="container pb-5">

            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp mt-4" data-wow-delay="0.1s">Articles</h4>
                <h6 class="mb-0 wow fadeInUp" data-wow-delay="0.3s"><big><big>Nos articles ci-dessous sont en fait les expériences de ceux qui ont déjà complété leur formation ou sont en train de l’achever, en agissant comme Témoins de Christ là où le Seigneur les a positionné, ce qui leur vaut plusieurs témoignages. Alléluia !</big></big></h6>
                </h6>
            </div>
            <div class="blog-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                @foreach($articles as $article)
                    <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-img rounded-top">
                            <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="bg-light rounded-bottom p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-success"></i> {{ $article->datePublication }}</a>
{{--                                <a href="#" class="text-muted"><span class="fa fa-comments text-success"></span> 3 Comments</a>--}}
                                <!-- Vous pouvez afficher d'autres détails de l'article ici -->
                            </div>
                            <a href="{{ route('article.show', $article->id) }}" class="h4 mb-3 d-block">{{ $article->titre }}</a>
                            <p class="mb-3">{{ Str::limit(strip_tags($article->contenu), 200) }}</p>
                            <!-- Ajoutez d'autres détails de l'article et un lien pour lire la suite -->
                            <a class="btn btn-success rounded-pill text-white py-2 px-4" href="{{ route('article.show', $article->id) }}">Lire plus</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blogs End -->

@endsection
