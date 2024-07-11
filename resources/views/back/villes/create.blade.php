@extends('layouts.app2')

@section('title', 'Créer un nouvel article')

@section('content')
    <!-- BEGIN: Content -->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Créer une nouvelle ville</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('blog') }}">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="#">Articles</a></li>
                                <li class="breadcrumb-item active">Créer un nouvel article</li>
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
                                        <form class="form" action="{{ route('villes.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="titre">Nom de la ville</label>
                                                <input type="text" id="titre" class="form-control" name="nom" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="pays">Pays</label>
                                                <select id="categorie" class="form-control" name="pays_id" required>
                                                    <option value="">Sélectionnez un pays</option>
                                                    @foreach($pays as $pays)
                                                        <option value="{{ $pays->id }}">{{ $pays->nom }}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                <a href="{{ route('villes.index') }}" class="btn btn-secondary">Annuler</a>
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
