@extends('layouts.app2')

@section('title', 'Liste des Catégories')

@section('content')
<script src="{{asset('backend/vendors/js/tables/datatable/datatables.min.js')}}"></script>

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Liste des Catégories</h3>
            </div>
        </div>
        <div class="content-body">
            <section id="categories-list">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title">Liste des catégories</h2>
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
                                    <a href="{{ route('categories.create') }}" class="btn btn-primary">
                                        <i class="la la-plus font-small-2"></i> Ajouter une catégorie
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered categories-list datatable">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($categories as $categorie)
                                            <tr>
                                                <td>{{ $categorie->nomCategorie }}</td>
                                                <td>
                                                    <a href="{{ route('categories.show', $categorie->id) }}"><i class="ft-eye text-info"></i></a>
                                                    <a href="{{ route('categories.edit', $categorie->id) }}"><i class="ft-edit text-success ml-1"></i></a>
                                                    <a href="#" class="delete-btn" data-toggle="modal" data-target="#deleteConfirmationModal{{ $categorie->id }}"><i class="ft-trash-2 ml-1 text-warning"></i></a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteConfirmationModal{{ $categorie->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel{{ $categorie->id }}" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteConfirmationModalLabel{{ $categorie->id }}">Confirmation de suppression</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Êtes-vous sûr de vouloir supprimer la catégorie <strong>{{ $categorie->nomCategorie }}</strong>?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                                    <form id="delete-form-{{ $categorie->id }}" action="{{ route('categories.destroy', $categorie->id) }}" method="POST">
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
