@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

@include('.partials.carousel')


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="border bg-secondary rounded">
                        <img src="img/cible.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">Temoins de Christ</h4>
                    <h1 class="display-3 mb-4"><strong class="text-success">Temoins de Christ</strong>, Un centre de Transformation</h1>
                    <p>Faire des disciples capables d'aider les autres, de gagner les âmes à Christ, et de marcher dans son Autorité et la puissance du Saint Esprit.
                    </p>
                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore illum nemo deserunt reiciendis perferendis incidunt ullam expedita dolor, voluptas repellat necessitatibus dolore repellendus dolorum, voluptate dolorem. Debitis quis ipsa ullam neque corrupti maxime ad magni, tempore, aperiam rerum, perspiciatis fuga.
                    </p>
                    <a class="btn btn-success rounded-pill text-white py-3 px-5" href="#">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Blogs Start -->
    {{-- <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Blog</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Nos Articles</h1>
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
                                <a href="#" class="text-muted"><span class="fa fa-comments text-success"></span> 3 Comments</a>
                                <!-- Vous pouvez afficher d'autres détails de l'article ici -->
                            </div>
                            <a href="{{ route('article.show', $article->id) }}" class="h4 mb-3 d-block">{{ $article->titre }}</a>
                            <p class="mb-3">{{ Str::limit(strip_tags($article->contenu), 200) }}</p>
                            <!-- Ajoutez d'autres détails de l'article et un lien pour lire la suite -->
                            <a class="btn btn-success rounded-pill text-white py-2 px-4" href="{{ route('article.show', $article->id) }}">Read More</a>
                        </div>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
    </div> --}}
    <!-- Blogs End -->

@endsection
