@vite('resources/css/reseau.css')
@extends('layouts.app')
@section('title', 'Réseau ARD-818')

@section('og-meta')
    <!-- Open Graph Meta Tags spécifiques pour /reseau -->
    <meta property="og:title" content="Réseau ARD818" />
    <meta property="og:description" content="Découvrez notre réseau et connectez-vous." />
    <meta property="og:image" content="https://temoinsdechrist.com/img/reseau_meta.jpg" />
    <meta property="og:url" content="https://temoinsdechrist.com/reseau" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card Meta Tags spécifiques pour /reseau (optionnel) -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Réseau ARD818" />
    <meta name="twitter:description" content="Découvrez notre réseau et connectez-vous." />
    <meta name="twitter:image" content="https://temoinsdechrist.com/img/reseau_meta.jpg" />
    <meta name="twitter:url" content="https://temoinsdechrist.com/reseau" />
@endsection

@section('content')

    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{asset('img/reseau/ard818.jpg')}}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3" style="max-width: 900px;">
                    <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s" style="letter-spacing: 3px;">Temoins de Christ | ACTES 1:8</h4>
                    <h1 class="display-1  text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">Réseau ARD-818</h1>
                    {{--                <p class="fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,--}}
                    {{--                </p>--}}
                    <div class="pt-2">
                        <audio src="{{asset('audio/pouvoir_de_prospere_reseau.mp3')}}" controls autoplay>
                        </audio>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <!-- About Start -->
    <div class="container-fluid py-1">
        <div class="container py-5">
            <div class="row g-5 align-items-center">

                <div class="container" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">Réseau ard-818</h4>

                    <ol class="ol" style="--length: 4" role="list">
                        <li style="--i: 0">
                            <h3>Deutéronome 8:17-18 SEMEUR</h3>
                            <p style="font-size: 20px">Prends donc garde de ne pas te dire : « C'est par mes propres forces et ma puissance que j'ai acquis toutes ces richesses. » 18 Souviens-toi au contraire que c'est l'Eternel ton Dieu qui te donne la force de parvenir à la prospérité et qu'il le fait aujourd'hui pour tenir envers toi les engagements qu'il a pris par serment en concluant alliance avec tes ancêtres.</p>

                        </li>
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
                    </div><br/>
                    <p class="text-center">
                        <a href="{{ route('verificationCode') }}" class="text-decoration-none text-success fs-5">Déjà membre mais je souhaite modifier mes informations</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
