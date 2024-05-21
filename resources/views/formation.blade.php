@extends('layouts.app')

@section('title', 'Formations')

@section('content')

    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 75px;">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">FORMATIONS</h5>
                <h1 class="display-5 mb-0">Nos différentes offres</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary rounded">
                        <div class="bg-primary text-center pt-5 pb-4">
                            <h3 class="text-white">Premiers Pas</h3>

                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">6 modules</p>
                            <p class="border-bottom border-light mb-2 pb-2">Niveau introductif</p>
                            <p class="border-bottom border-light mb-2 pb-2">Plante l'univers de la formation</p>
                            <p class="mb-2 pb-2">Examen prévu à la fin de chque module</p>
                        </div>
                        <a href="" class="btn btn-success py-2 px-4 position-absolute top-100 start-50 translate-middle">S'inscrire</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative border border-secondary rounded">
                        <div class="bg-secondary text-center pt-5 pb-4">
                            <h4 class="text-white">Comment Servir le Seigneur</h4>

                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">10 modules</p>
                            <p class="border-bottom border-light mb-2 pb-2">Pouvoir servir le Seigneur</p>
                            <p class="border-bottom border-light mb-2 pb-2">Impacter sa communauté</p>
                            <p class="mb-2 pb-2">Examen prévu à la fin de chque module</p>
                        </div>
                        <a href="" class="btn btn-secondary py-2 px-4 position-absolute top-100 start-50 translate-middle">S'inscrire</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="position-relative border border-primary rounded">
                        <div class="bg-primary text-center pt-5 pb-4">
                            <h4 class="text-white">Devenir un Témoin de Christ</h4>

                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">11 modules</p>
                            <p class="border-bottom border-light mb-2 pb-2">Accomplir la mission de DIEU</p>
                            <p class="border-bottom border-light mb-2 pb-2">Témoigner de Christ</p>
                            <p class="mb-2 pb-2">Examen prévu à la fin de chque module</p>
                        </div>
                        <a href="" class="btn btn-success py-2 px-4 position-absolute top-100 start-50 translate-middle">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="border bg-secondary rounded">
                        <img src="img/formations/formation_12_mois.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">A propos de la formation</h4>
                    <h3 class="display-3 mb-4">A propos de la formation</h3>
                    <p>Si tu (ou ton ami) as répondu oui à une seule de ces questions : alors cette formation est pour toi (et lui) !

                        Il s’agit d’une formation en ligne en deux versions : 6 mois pour les plus téméraires, et 12 mois pour les plus occupés.

                        Il faudra cependant payer le prix de la discipline et de la persévérance, pour laisser le Saint Esprit vous conduire et vous enseigner sur plusieurs thèmes, tout au long de ce cursus.

                        La formation est totalement gratuite et se déroulera en ligne, en version autonome sur notre outil de formation.

                        Tu auras aussi un accompagnateur attitré, qui sera avec toi durant toute la formation, pour t’aider à persévérer jusqu’au bout, en répondant à toutes tes questions.
                    </p>

{{--                    <a class="btn btn-success rounded-pill text-white py-3 px-5" href="#">Learn More</a>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection
