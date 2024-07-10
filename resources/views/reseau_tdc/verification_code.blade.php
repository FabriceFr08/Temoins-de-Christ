@extends('layouts.app')

@section('title', 'Mise à jour des informations')
@section('content')
    <!-- Formulaire pour s'enregistrer sur le réseau des témoins de Christ -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Réseau ard-818</h4>
                <h6 class="display-6 mb-0 wow fadeInUp" data-wow-delay="0.3s">Demande de modification des informations</h6>
            </div>

            <div class="bg-light rounded p-4 pb-0">
                <div class="row g-5 align-items-center">
                    <div class="col wow fadeInLeft" data-wow-delay="0.1s">
                        <h6 class="display-6 mb-2">Veuillez entrer le code reçu par email</h6>
                        <form action="{{ route('verifyCode', $prestataire) }}" method="POST">
                            @csrf
                            <!-- Step 1 content goes here -->
                            <input type="hidden" name="prestataire" value="{{ $prestataire[0]}}">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" id="code" placeholder="Code" required>
                                        <label for="email">Code *</label>
                                        @error('code')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <br/>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success rounded-pill text-white py-3 px-5 m-2">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

@vite('resources/js/reseau.js')


