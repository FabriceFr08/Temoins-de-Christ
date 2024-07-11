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

    <!-- Blogs Start -->
    <div class="container-fluid blog pb-5">
        <div class="container pb-5">

            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp mt-4" data-wow-delay="0.1s">Blog</h4>
                <h1 class="display-6 mb-0 wow fadeInUp" data-wow-delay="0.3s">Nos Articles</h1>
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
