@extends('layouts.app2')

@section('title', 'Ajouter une Catégorie')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Add Category Form -->
            <section id="add-category">
                <div class="icon-tabs">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Ajouter une Catégorie</h4>
                                </div>
                                @if(session('success'))
                                    <br>
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form action="{{ route('categories.store') }}" method="POST" class="add-category-form">
                                            @csrf
                                            <!-- Informations de la catégorie -->
                                            <h6>
                                                <i class="step-icon la la-list"></i>
                                                Informations de la catégorie
                                            </h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="nom">Nom <span class="text-danger">*</span></label>
                                                            <input class="form-control" id="nomCategorie" name="nomCategorie" type="text" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                            <!-- Bouton de soumission -->
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
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
