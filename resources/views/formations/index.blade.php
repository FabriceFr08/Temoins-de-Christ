@vite('resources/css/counter.css')
@extends('layouts.app')

@section('title', 'Formations')

@section('content')


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

                    <a class="btn btn-success rounded-pill text-white py-3 px-5" href="{{route('nos-formations')}}">Voir formations</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Dance Class Start -->
    <div class="container-fluid class bg-light py-5">
        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Prochaine rentrée</h4>
                <h1 class="display-5 mb-0 wow fadeInUp" data-wow-delay="0.3s">Le 15 Juillet 2024</h1>
            </div>

            <div class="text-center">
                <h2 class="text-secondary">Les inscriptions sont ouvertes</h2>
            </div>
            <div class="timer-container">
                <div class="time-unit">
                    <div class="label">Jours</div>
                    <div id="days" class="value">10</div>
                </div>
                <div class="time-unit">
                    <div class="label">Heures</div>
                    <div id="hours" class="value">00</div>
                </div>
                <div class="time-unit">
                    <div class="label">Minutes</div>
                    <div id="minutes" class="value">00</div>
                </div>
                <div class="time-unit">
                    <div class="label">Secondes</div>
                    <div id="seconds" class="value">00</div>
                </div>
            </div>
            <div class="action-section">
                <a class="btn btn-success rounded-pill text-white py-3 px-5" target="_blank" href="https://shorturl.at/xIeWD">Je m'inscris</a>

            </div>

        </div>
    </div>
    <!-- Dance Class End -->

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial pb-5">
        <div class="container pb-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">OUR CLIENTS RIVIEWS</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">What Our Clients Say</h1>
            </div>
            <video width="1280" height="720" controls>
                <source src="video/presentation_yaya.mp4" type="video/mp4">
            </video>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">

            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@vite('resources/js/counter.js')
@endsection


