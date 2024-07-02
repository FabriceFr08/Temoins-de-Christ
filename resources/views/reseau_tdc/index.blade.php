@vite('resources/css/reseau.css')
@extends('layouts.app')
@section('title', 'Réseau ARD-818')
@section('content')


    <!-- About Start -->
    <div class="container-fluid py-1">
        <div class="container py-5">
            <div class="row g-5 align-items-center">

                <div class="container" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">Réseau ard-818</h4>

                    <ol class="ol" style="--length: 4" role="list">
                        <li style="--i: 1">
                            <h3>Qu'est-ce que le réseau ARD-818 ?</h3>
                            <p>Le Réseau ARD-818, ou Réseau Alliance de Richesse Deutéronome 8:18, est votre portail vers l'abondance. Il s'agit d'une communauté dynamique de partage et de croissance, bien plus qu'un simple réseau de mise en relation.</p>

                        </li>
                        <li style="--i: 2">
                            <h3>Communauté de Partage et de Croissance</h3>
                            <p>Bienvenue dans le Réseau Alliance de Richesse Deutéronome 8:18. Ici, chaque membre a l'opportunité de briller, d'offrir ses compétences et services, et de découvrir des occasions uniques pour prospérer.</p>
                        </li>
                        <li style="--i: 3">
                            <h3>Opportunités pour les Professionnels et Particuliers</h3>
                            <p>Que vous soyez un professionnel à la recherche de nouveaux clients ou un particulier désireux de proposer des services divers, notre réseau est conçu pour vous connecter facilement et efficacement avec des personnes partageant les mêmes idées et besoins.</p>
                        </li>
                        <li style="--i: 4">
                            <h3>Pourquoi Rejoindre le Réseau ARD-818 ?</h3>
                            <p>Pourquoi attendre ? Rejoignez-nous dès aujourd'hui et plongez dans un monde où les opportunités abondent. Inscrivez-vous et commencez à proposer vos services.</p>
{{--                            <a href="{{ route('reseau.inscription') }}" style="color: green; text-decoration: none;" class="">Inscrivez-vous maintenant</a>--}}
                        </li>

                    </ol>
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-success rounded-pill text-white py-3 px-5"  href="{{route('reseau.inscription')}}">S'inscrire</a>
                        <a class="btn btn-success rounded-pill text-white py-3 px-5"  href="{{route('reseau.services')}}">Services</a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
