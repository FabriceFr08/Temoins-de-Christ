@extends('layouts.app')

@section('title', 'Réseau des TDC')
@section('content')


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="border bg-secondary rounded">
                        <img src="img/reseau.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">Réseau ard-818</h4>
{{--                    <h1 class="display-3 mb-4"><strong class="text-primary">JustDance</strong>, We have been teaching dance since 2001</h1>--}}
                    <p>
                        C'est quoi le réseau ARD-818 ? RESEAU ALLIANCE DE RICHESSE DEUTÉRONOME 8:18. Découvrez le Réseau ARD-818 : Votre Portail Vers l'Abondance

                        Bienvenue dans le Réseau Alliance de Richesse Deutéronome 8:18, plus qu'un simple réseau de mise en relation – c'est une communauté dynamique de partage et de croissance. Ici, chaque membre a l'opportunité de briller, d'offrir ses compétences et services, et de découvrir des occasions uniques pour prospérer.

                        Vous êtes un professionnel à la recherche de nouveaux clients ? Un particulier désireux de proposer des services divers ? Notre réseau est conçu pour vous connecter facilement et efficacement avec des personnes partageant les mêmes idées et besoins.

                        Pourquoi attendre ? Rejoignez-nous dès aujourd'hui et plongez dans un monde où les opportunités abondent. Inscrivez-vous et commencez à proposer vos services. Ensemble, créons un réseau de succès et de prospérité partagée !
                    </p>
{{--                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore illum nemo deserunt reiciendis perferendis incidunt ullam expedita dolor, voluptas repellat necessitatibus dolore repellendus dolorum, voluptate dolorem. Debitis quis ipsa ullam neque corrupti maxime ad magni, tempore, aperiam rerum, perspiciatis fuga.--}}
{{--                    </p>--}}
{{--                    <a class="btn btn-secondary rounded-pill text-white py-3 px-5" href="{{route('reseau.inscription')}}">S'inscrire</a>--}}
                    <a class="btn btn-secondary rounded-pill text-white py-3 px-5" href="{{route('reseau.services')}}">Voir service</a>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
