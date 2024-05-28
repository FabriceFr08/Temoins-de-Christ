@extends('layouts.app2')

@section('title', 'Liste des Articles')

@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">Liste des villes</h3>
                </div>
            </div>
            <div class="content-body">
                <section id="articles-list">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">Liste des villes</h2>
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
                                        <a href="{{ route('villes.create') }}" class="btn btn-primary">
                                            <i class="la la-plus font-small-2"></i> Ajouter une ville
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered articles-list datatable">
                                            <thead>
                                            <tr>
                                                <th>Nom ville</th>
                                                <th>Pays</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($villes as $ville)
                                                <tr>
                                                    <td>{{ $ville->nom }}</td>
                                                    <td>{{ $ville->pays->nom}}</td>
                                                    <td>
                                                        <a href="{{ route('villes.show', $ville->id) }}"><i class="ft-eye text-info"></i></a>
                                                        <a href="{{ route('villes.edit', $ville->id) }}"><i class="ft-edit text-success ml-1"></i></a>
                                                        <a href="#" class="delete-btn" data-toggle="modal" data-target="#deleteConfirmationModal{{ $ville->id }}"><i class="ft-trash-2 ml-1 text-warning"></i></a>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="deleteConfirmationModal{{ $ville->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel{{ $ville->id }}" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="deleteConfirmationModalLabel{{ $ville->id }}">Confirmation de suppression</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Êtes-vous sûr de vouloir supprimer l'article <strong>{{ $ville->nom }}</strong>?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                                        <form id="delete-form-{{ $ville->id }}" action="{{ route('articles.destroy', $ville->id) }}" method="POST">
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
