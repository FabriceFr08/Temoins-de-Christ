@extends('layouts.app2')

@section('title', 'Modifier un article')

@section('content')
    <!-- BEGIN: Content -->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Modifier un article</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('se-deployer') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="#">Articles</a></li>
                                <li class="breadcrumb-item active">Modifier un article</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="summernote-create">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="titre">Titre de l'article</label>
                                                <input type="text" id="titre" class="form-control" name="titre" value="{{ $article->titre }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="categorie">Catégorie de l'article</label>
                                                <select id="categorie" class="form-control" name="categorie_article_id" required>
                                                    <option value="">Sélectionnez une catégorie</option>
                                                    @foreach($categories as $categorie)
                                                        <option value="{{ $categorie->id }}" {{ $article->categorie_article_id == $categorie->id ? 'selected' : '' }}>{{ $categorie->nomCategorie }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Image de l'article</label>
                                                <input type="file" id="image" class="form-control-file" name="image">
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h4 class="card-title">Contenu de l'article</h4>
                                                            <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                                            <div class="heading-elements">
                                                                <ul class="list-inline mb-0">
                                                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="card-content collapse show">
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <button id="edit" class="btn btn-primary" type="button"><i class="la la-pencil"></i> Edit</button>
                                                                    <button id="save" class="btn btn-success" type="button"><i class="la la-save"></i> Save</button>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="summernote-edit">
                                                                        <textarea id="contenu" class="summernote" name="contenu" rows="10">{{ $article->contenu }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="datePublication">Date de publication</label>
                                                <input type="date" id="datePublication" class="form-control" name="datePublication" value="{{ $article->datePublication }}" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                <a href="{{ route('articles.index') }}" class="btn btn-secondary">Annuler</a>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content -->
@endsection
