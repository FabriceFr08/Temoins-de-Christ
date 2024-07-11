@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

@include('.partials.carousel')


<!-- Training Start -->
<div class="container-fluid training py-5">
    <div class="container py-5">
        <div class="pb-5">
            <div class="row g-4 align-items-end">
                <div class="col-xl-8">
                    <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">BUT - VISION - MISSION
                    </h4>
                    <h4 class="display-6 mb-0 wow fadeInUp" data-wow-delay="0.3s">TEMOINS DE CHRIST - ACTES 1:8‎</h4>
                </div>

            </div>
        </div>
        <div class="training-carousel owl-carousel pt-5 wow fadeInUp">
            <div class="training-item bg-white rounded wow fadeInUp" >
                <div class="training-img rounded-top">
                    <img src="img/but_vision_mission/but1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                </div>
                <div class="rounded-bottom border border-top-0 p-4">
                    <a href="#" class="h5 mb-3 d-block">Notre but</a>
                    <p class="mb-3">{{Str::limit('Emmener des multitudes :

 A connaître Dieu et Sa parole en profondeur
, à Le servir partout au monde avec puissance et autorité
- A L\'aimer de tout leur coeur;
- A mener une vie de louange et d’adoration en tout temps.', 92)}}</p>
                    <a class="btn btn-success rounded-pill text-white py-2 px-4" href="{{route('but-vision-mission')}}#but">En savoir plus</a>
                </div>
            </div>
            <div class="training-item bg-white rounded wow fadeInUp">
                <div class="training-img rounded-top">
                    <img src="img/but_vision_mission/vision1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                </div>
                <div class="rounded-bottom border border-top-0 p-4">
                    <a href="#" class="h5 mb-3 d-block">Notre vision</a>
                    <p class="mb-3">{{Str::limit('Gagner des âmes mais aussi prendre des rachetés remplis de soif, afin de les transformer  en Témoins de Christ selon Actes 1:8.

Lesquels auront pour particularités:

- ⁠D’être ancrés dans la connaissance et la profondeur de la parole de vérité en plus de marcher par l’esprit
- De s’être transformés en vraies épouses passionnées de Christ par la communion du Saint-Esprit
- D’avoir découvert puis de s’être appropriés les réalités ainsi que les acquis de la Rédemption⁠
- D’avoir découvert leur appel et de ne vivre que pour le remplir en s’y adonnant avec loyauté et fidélité;
- D’avoir découvert leur don d’opération et de couler avec chaque jour de leur existence pour que Christ soit vu au travers d’eux;
- D’avoir découvert le but de leur existence et maintenir le cap dessus;
- D’avoir découvert la vision divine avec laquelle ils doivent courir ici-bas;
- D’avoir découvert leur lieu d’affectation;
- D’avoir découvert les différentes missions  et bonnes oeuvres que le Seigneur a préparées pour eux;
- ⁠De devenir la solution aux problèmes de leurs communautés, assemblées, quartiers, villages ou villes, en étant des Leaders qui prennent des initiatives inspirées.
- De marcher désormais dans la consécration jusqu’à ce que le Saint-Esprit les mette à part;
- D’être activement au service du Maitre jusqu’à Son retour', 80)}}</p>
                    <a class="btn btn-success rounded-pill text-white py-2 px-4" href="{{route('but-vision-mission')}}#vision">En savoir plus</a>
                </div>
            </div>
            <div class="training-item bg-white rounded">
                <div class="training-img rounded-top">
                    <img src="img/but_vision_mission/mission1.jpg" class="img-fluid rounded-top w-100" alt="Image">
{{--                    <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">03</h1>--}}
                </div>
                <div class="rounded-bottom border border-top-0 p-4">
                    <a href="#" class="h4 mb-3 d-block">Notre mission</a>
                    <p class="mb-3">{{Str::limit('
Les aider à obtenir toute forme de délivrance dont ils ont besoin pour servir Dieu librement, au travers de la connaissance, l\'intelligence et la sagesse.
- Emmener les « Témoins de Christ » à être ancrés dans la Parole et la démonstration de puissance, au travers d’une formation gratuite en ligne (pour l\'heure) et en présentiel (futur proche) pour une durée de 9 mois ou 15 mois (12 mois ou 18 mois).
- Leur apprendre à régner dans leur couloir de destinée au travers de la connaissance qui affranchit
- Veiller à ce qu’ils portent beaucoup de fruits pour le Maitre.
- Leur apprendre et les équiper à prêcher l’évangile du Royaume dans les différents canaux et les différents lieux où le Seigneur les mettra à part
- Leur apprendre à faire des disciples qui vont eux-aussi engendrer d’autres disciples.
- Leur apprendre à se déployer au quotidien avec leur don d\'operations pour rendre Christ manifeste dans leur Jérusalem, dans toute la Judée, dans la Samarie et jusqu’aux extrémités de la terre', 92)}}</p>
                    <a class="btn btn-success rounded-pill text-white py-2 px-4" href="{{route('but-vision-mission')}}#mission">En savoir plus</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Training End -->


@endsection
