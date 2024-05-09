@extends('layouts.app2')

@section('title', 'Modifier une Catégorie')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Edit Category Form -->
            <section id="edit-category">
                <div class="icon-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modifier une Catégorie</h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form action="{{ route('categories.update', $categorieArticle) }}" method="POST" class="edit-category-form">

                                            @csrf
                                            @method('PUT')
                                            <!-- Informations de la catégorie -->
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="nom">Nom <span class="text-danger">*</span></label>
                                                            <input class="form-control" id="nomCategorie" name="nomCategorie" type="text" value="{{ $categorieArticle->nomCategorie }}" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!-- Bouton de soumission -->
                                            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                        </form>
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
