@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<!-- Blogs Start -->
<div class="container-fluid blog pb-5"  >
    <div class="container pb-5">
        <div class="pb-5">
            <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Blog</h4>
            <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Nos Articles</h1>
        </div>
        <div class="blog-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
            @foreach($articles as $article)
                <div class="row mb-4">
                    <div class="col">
                        <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s" >
                            <div class="blog-img rounded-top">
                                <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="bg-light rounded-bottom p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-success"></i> {{ $article->datePublication }}</a>
                                    <a href="#" class="text-muted"><span class="fa fa-comments text-success"></span> 3 Comments</a>
                                </div>
                                <a href="{{ route('article.show', $article->id) }}" class="h4 mb-3 d-block">{{ $article->titre }}</a>
                                <p class="mb-3" style="height: 100px; overflow: hidden;">{{ Str::limit(strip_tags($article->contenu), 200) }}</p>
                                <a class="btn btn-success rounded-pill text-white py-2 px-4" href="{{ route('article.show', $article->id) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blogs End --> 


@endsection
