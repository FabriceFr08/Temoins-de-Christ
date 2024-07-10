@vite('resources/css/counter.css')
@extends('layouts.app')

@section('title', 'Formations')

@section('content')


    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{asset('img/formations/formation.jpg')}}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3" style="max-width: 900px;">
                    <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s" style="letter-spacing: 3px;">Temoins de Christ | ACTES 1:8</h4>
                    <h1 class="display-1  text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">Formation TDC</h1>
                    {{--                <p class="fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,--}}
                    {{--                </p>--}}
                    <div class="pt-2">
                        <a class="btn btn-secondary rounded-pill text-white py-3 px-5" target="_blank" href="https://shorturl.at/xIeWD">S'inscrire</a>

                    </div>
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
                        <img src="img/formations/formation_promo_9.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">Formation TDC</h4>
                    <h6 class="display-6 mb-4">Contenu de la formation</h6>
                    <p>
                        <font size="4"> <!-- Vous pouvez ajuster le chiffre pour augmenter ou diminuer la taille -->
                            Nous vous invitons à suivre cette formation et vous serez nourris de plusieurs nutriments de
                            la parole, lesquels vous transformeront radicalement en un Témoin oint et zélé pour Christ,
                            marchant pleinement dans le couloir de sa destinée glorieuse.
                            Parce qu’avec nous : vous découvrirez aussi votre appel, votre don, votre vision ainsi que vos
                            différentes missions sur terre. Vous deviendrez de fait donc un leader inspiré pour votre
                            assemblée, mais aussi pour tout le Corps du Christ, parce que vous comprendrez mieux la
                            parole, et vous la mettrez constamment en pratique.
                            Venez donc acquérir la connaissance avec nous, venez boire l’eau pure de la parole. C’est
                            gratuit, mais cela vaut de l’or divin !! Votre destinée divine vous y attend!!
                        </font>
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
    <div class="container-fluid testimonial pb-3">
        <div class="container pb-3">
            <div class="pb-3">
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">Formation TDC</h4>
                    <h6 class="display-6 mb-4">Pourquoi se faire former ?</h6>
                    <p>
                        <font size="4">
                            Dieu nous appelle à impacter dans Son Royaume. Et cela passe par la formation. Pourquoi ?
                            Pour saisir le cœur du projet de notre Seigneur Jésus Christ qui est d'agrandir Son Royaume et
                            de bâtir Son Église. Pourquoi ? Pour dépeupler le royaume de satan et amener le plus grand
                            nombre à la connaissance de la vérité.
                            Pourquoi se faire former ?parce qu'il y’a beaucoup de convertis, pas assez de rachetés formés
                            et très peu de leaders inspirés qui se lèvent pour accomplir le cœur de la mission de notre
                            Seigneur Jésus Christ. Or, nous lisons bien dans nos Bibles que le Seigneur Jésus revient bientôt
                            et nous le voyons également par les signes des temps de la fin.
                            Pouvons-nous, pendant juste un instant, prêter une oreille attentive au cri du cœur du
                            Créateur de tous ces hommes qui s'en vont jour après jour et en grand nombre à la perdition ?
                            Devons-nous rester indifférents à la mission du Seigneur Jésus qui est automatiquement
                            devenue la nôtre dès l'instant où nous avons rejoint Son Corps ?
                        </font>
                    </p>
                </div>

                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class=" rounded video-container">
                        <video width="400" height="380" controls>
                            <source src="video/presentation_yaya.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Training Start -->
    <!-- Content Start -->
    <div class="container-fluid content py-4">
        <div class="container py-4">
            <div class="pb-4">
                <div class="row g-4 align-items-end">
                    <div class="col-xl-8">
                        <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">CONTENU</h4>
                        <h4 class="display-6 mb-0 wow fadeInUp" data-wow-delay="0.3s">Ressources de la formation</h4>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 mb-5">
                    <div class="content-item bg-white rounded wow fadeInUp">
                        <div class="content-img rounded-top">
                            <img src="img/formations/contenu/9 MOIS DE FORMATION TDC - PROMOTION 09.jpeg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="content-item bg-white rounded wow fadeInUp">
                        <div class="content-img rounded-top">
                            <img src="img/formations/contenu/15 MOIS DE FORMATION TDC - PROMOTION 09.jpeg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="content-item bg-white rounded wow fadeInUp">
                        <div class="content-img rounded-top">
                            <img src="img/formations/formation_promo_9.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 mb-4">
                    <div class="pdf-item bg-white rounded p-4 wow fadeInUp">
                        <iframe src="img/formations/contenu/FORMATION TEMOINS DE CHRIST - PRESENTATION DETAILLEE (1).pdf#zoom=70" class="img-fluid rounded-top w-100" style="height: 500px;" alt="Image"></iframe>
                        <div class="mt-3">
                            <a href="img/formations/contenu/FORMATION TEMOINS DE CHRIST - PRESENTATION DETAILLEE (1).pdf" class="btn btn-success rounded-pill text-white py-2 px-4" download>Télécharger</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="pdf-item bg-white rounded p-4 wow fadeInUp">
                        <iframe src="img/formations/contenu/FORMATION TEMOINS DE CHRIST - PRESENTATION POWERPOINT.pdf#zoom=20" class="img-fluid rounded-top w-100" style="height: 500px;" alt="Image"></iframe>
                        <div class="mt-3">
                            <a href="img/formations/contenu/FORMATION TEMOINS DE CHRIST - PRESENTATION POWERPOINT.pdf" class="btn btn-success rounded-pill text-white py-2 px-4" download>Télécharger</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->



    <!-- Training End -->


    @vite('resources/js/counter.js')
@endsection


