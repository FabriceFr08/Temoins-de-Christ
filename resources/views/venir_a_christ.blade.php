@extends('layouts.app')

@section('title', 'Venir à Christ')
@section('content')


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

        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="border bg-secondary rounded">
                        <img src="img/reseau.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">Notre Réseau</h4>
                    {{--                    <h1 class="display-3 mb-4"><strong class="text-primary">JustDance</strong>, We have been teaching dance since 2001</h1>--}}
                    <p>
                        Bienvenue sur notre plateforme de mise en relation de services. Ici, vous pouvez vous inscrire et proposer vos compétences et services aux autres membres de notre communauté. Que vous soyez un professionnel à la recherche de nouveaux clients ou un particulier offrant des services divers, notre réseau vous permet de vous connecter facilement et efficacement. Inscrivez-vous dès aujourd'hui pour commencer à proposer vos services et découvrez les nombreuses opportunités offertes par notre communauté.
                    </p>
                    {{--                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore illum nemo deserunt reiciendis perferendis incidunt ullam expedita dolor, voluptas repellat necessitatibus dolore repellendus dolorum, voluptate dolorem. Debitis quis ipsa ullam neque corrupti maxime ad magni, tempore, aperiam rerum, perspiciatis fuga.--}}
                    {{--                    </p>--}}
                                        <a class="btn btn-secondary rounded-pill text-white py-3 px-5" href="{{route('reseau.inscription')}}">S'inscrire</a>
{{--                    <a class="btn btn-secondary rounded-pill text-white py-3 px-5" href="{{route('reseau.services')}}">Voir service</a>--}}

                </div>
            </div>
        </div>
    </div>


@endsection
