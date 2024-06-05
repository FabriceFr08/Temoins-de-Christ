@extends('layouts.app')

@section('title', $article->titre)

@section('content')
 <style>
    /* Styles for article page */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f8f8;
    }

    .article-container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .article-image {
        width: 100%;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .article-title {
        font-size: 24px;
        color: #333;
    }

    .article-author {
        font-style: italic;
        color: #666;
    }

    .article-content {
        color: #444;
        line-height: 1.6;
    }

    .article-content p {
        margin-bottom: 20px;
    }

    .article-date {
        margin-top: 20px;
        font-size: 14px;
        color: #999;
    }

</style>
{{-- <div class="article-container" >
    <img class="article-image" src="{{ asset('storage/' . $article->image) }}" alt="Image de l'article">
    <h1 class="article-title">{{ $article->titre }}</h1>
    <p class="article-author">Auteur de l'article</p>
    <div class="article-content">
        {!! $article->contenu !!}
    </div>
    <p class="article-date">Date de publication : {{ $article->datePublication }}</p>
</div> --}}
<div class="article-container">
    <img class="article-image" src="{{ asset('storage/' . $article->image) }}" alt="Image de l'article">
    <h1 class="article-title">{{ $article->titre }}</h1>
    <p class="article-author">Auteur de l'article</p>
    <div class="article-content">
        {!! $article->contenu !!}
    </div>
    <p class="article-date">Date de publication : {{ $article->datePublication }}</p>

    <div class="card mt-4">
        <div class="card-header">
            Commentaires
        </div>
        <div class="card-body">
            @foreach($article->commentaires as $commentaire)
                <div class="mb-3">
                    <strong>{{ $commentaire->commentateur->nom }}</strong> :
                    <p>{{ $commentaire->commentaire }}</p>
                </div>
            @endforeach
        </div>
    </div>

    @include('front.partials.comment_form', ['article' => $article])

</div>

@endsection
