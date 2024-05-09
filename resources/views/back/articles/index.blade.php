@extends('layouts.app2')

@section('title', 'Liste des Articles')

@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Liste des Articles</h3>
            </div>
        </div>
        <div class="content-body">
            <section id="articles-list">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Liste des articles</h2>
                                @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                                @endif
                                @if (count($errors)> 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="heading-elements">
                                    <a href="{{ route('articles.create') }}" class="btn btn-primary">
                                        <i class="la la-plus font-small-2"></i> Ajouter un article
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered articles-list datatable">
                                        <thead>
                                            <tr>
                                                <th>Titre</th>
                                                <th>Catégorie</th>
                                                <th>Date de publication</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($articles as $article)
                                            <tr>
                                                <td>{{ $article->titre }}</td>
                                                <td>{{ $article->categorie->nomCategorie }}</td>
                                                <td>{{ $article->datePublication }}</td>
                                                <td>
                                                    <a href="{{ route('articles.show', $article->id) }}"><i class="ft-eye text-info"></i></a>
                                                    <a href="{{ route('articles.edit', $article->id) }}"><i class="ft-edit text-success ml-1"></i></a>
                                                    <a href="#" class="delete-btn" data-toggle="modal" data-target="#deleteConfirmationModal{{ $article->id }}"><i class="ft-trash-2 ml-1 text-warning"></i></a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteConfirmationModal{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel{{ $article->id }}" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteConfirmationModalLabel{{ $article->id }}">Confirmation de suppression</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Êtes-vous sûr de vouloir supprimer l'article <strong>{{ $article->titre }}</strong>?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                                    <form id="delete-form-{{ $article->id }}" action="{{ route('articles.destroy', $article->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
