@extends('layouts.app2')

@section('title', 'Détails de la catégorie')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Category Details -->
            <section id="category-details">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Détails de la catégorie <strong>{{ $categorieArticle->nomCategorie }}</strong></h3>
                                <div class="heading-elements">
                                    <a href="{{ route('categories.edit', $categorieArticle->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i> Modifier
                                    </a>
                                    <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary btn-sm">
                                        <i class="fas fa-arrow-left"></i> Retour à la liste des catégories
                                    </a>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="row">
                                        <fieldset class="col-md-12">
                                            <div class="category-detail">
                                                <h4 class="mb-3">Détails de la catégorie:</h4>
                                                <ul>
                                                    <li><strong>Nom:</strong> {{ $categorieArticle->nomCategorie }}</li>
                                                </ul>
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
