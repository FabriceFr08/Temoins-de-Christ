@extends('layouts.app')

@section('title', 'Victoire avec Christ')
@section('content')

    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{asset('img/don/don.jpg')}}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3" style="max-width: 900px;">
                    <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s" style="letter-spacing: 3px;">Temoins de Christ | ACTES 1:8</h4>
                    <h4 class="display-4  text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">Faire un don</h4>
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


    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                                            <div class="border bg-secondary rounded">
                                                <img src="img/LOGO_Transparent.png" class="img-fluid w-100 rounded" alt="Image">
                                            </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">VICTOIRE AVEC CHRIST</h4>
                    <h6 class="display-6 mb-4"><strong class="text-success">Pour avoir la victoire dans tous les domaines</strong></h6>
                    <h4>
                        Bienvenue sur notre plateforme Victoire avec Christ. Nous sommes ravis de vous accueillir parmi nous. Pour bénéficier pleinement de toutes nos ressources et rester connecté avec la communauté, nous vous invitons à rejoindre notre groupe WhatsApp. Si vous n'êtes pas encore membre, veuillez cliquer sur le lien ci-dessous pour nous rejoindre. Cela vous permettra de recevoir des mises à jour régulières, de participer aux discussions et de partager des moments de prière et de soutien avec d'autres membres.<br/>
                    </h4>
                    <a href="https://chat.whatsapp.com/GTHzBqg6rLSHeZeVBzyb2n" class="btn btn-success rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Rejoindre le groupe</a>

                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Bilan Spirituel</h4>
{{--                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">S'inscrire</h1>--}}
            </div>
            <p class="h4">
                Faire un bilan spirituel afin de découvrir les principaux combats spirituels à achever dans votre vie<br/>

            </p><br/>
            <a href="https://shorturl.at/hmMW9" target="_blank" class="btn btn-success rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Faire mon bilan</a>

        </div>

    </div>


@endsection
