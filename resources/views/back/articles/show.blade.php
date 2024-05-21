@extends('layouts.app2')

@section('title', 'Détails de l\'article')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Article Details -->
            <section id="article-details">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header"> <br> <br>
                                <h3 class="card-title">Détails de l'article <strong>{{ $article->titre }}</strong></h3>
                                <div class="heading-elements">
                                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i> Modifier
                                    </a>
                                    <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary btn-sm">
                                        <i class="fas fa-arrow-left"></i> Retour à la liste des articles
                                    </a>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="row">
                                        <fieldset class="col-md-6">
                                            <div class="article-detail">
                                                <h4 class="mb-3">Informations générales:</h4>
                                                <div class="info-item"><strong>Titre:</strong> {{ $article->titre }}</div>
                                                <div class="info-item"><strong>Catégorie:</strong> {{ $article->categorie->nomCategorie }}</div>
                                                <div class="info-item"><strong>Date de publication:</strong> {{ $article->datePublication }}</div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="col-md-6">
                                            <div class="article-detail">
                                                <h4 class="mb-3">Contenu:</h4>
                                                <div class="content-item">{!! $article->contenu !!}</div>
                                                @if($article->image)
                                                    <div class="image-item">
                                                        <img src="{{ asset('/storage/images/articles/' . $article->image) }}" alt="Image de l'article">
                                                    </div>
                                                @endif

                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
