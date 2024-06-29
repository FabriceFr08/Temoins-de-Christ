@extends('layouts.app')

@section('title', 'Faire un don')

@section('content')
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="{{asset('img/don/don.jpg')}}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content p-3" style="max-width: 900px;">
                    <h4 class="text-secondary text-uppercase sub-title fw-bold mb-4 wow fadeInUp" data-wow-delay="0.1s" style="letter-spacing: 3px;">Temoins de Christ | ACTES 1:8</h4>
                    <h1 class="display-1  text-white mb-4 wow fadeInUp" data-wow-delay="0.3s">Faire un don</h1>
                    {{--                <p class="fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,--}}
                    {{--                </p>--}}
                    <div class="pt-2">
                        {{--                    <a class="btn btn-success rounded-pill text-white py-3 px-5 m-2 wow fadeInLeft" data-wow-delay="0.1s" href="#">Join Now</a>--}}
                        {{--                    <a href="{{asset('TRAITE_DEVANGELISATION_TEMOINS_DE_CHRIST_DECEMBRE_2022.pdf')}}" target="_blank" class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s" href="#">Rejoins Nous</a>--}}
                        {{--                        <a href="{{route('venir-a-christ')}}" class="btn btn-secondary rounded-pill text-white py-3 px-5 m-2 wow fadeInRight" data-wow-delay="0.3s">Oui je le veux</a>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Don -->
    <div class="container py-5">
        <div class="pb-5 text-center">
            <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">FAIRE UN DON</h4>
            <h6 class="display-6 mb-0 wow fadeInUp" data-wow-delay="0.3s">Pour les dîmes, offrandes, prémices & partenariat avec Frère Elior ou son ministère</h6>
        </div>
        <div class="row text-center">
            <!-- PayPal -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="img/don/cam.jpg" alt="PayPal" class="img-fluid mb-3" style="width: 100px; height: 100px;">
                        <h5 class="card-title">Cameroun</h5>
                        <button type="button" class="btn btn-outline-secondary btn-donation" data-method="PayPal" data-bs-toggle="modal" data-bs-target="#camerounModal">
                            Vous êtes au Cameroun
                        </button>
                    </div>
                </div>
            </div>
            <!-- Carte Bancaire -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="img/don/rdc.jpg" alt="Carte Bancaire" class="img-fluid mb-3" style="width: 100px; height: 100px;">
                        <h5 class="card-title">RDC</h5>
                        <button type="button" class="btn btn-outline-secondary btn-donation" data-method="Carte Bancaire" data-bs-toggle="modal" data-bs-target="#rdcModal">
                            Vous êtes en RDC
                        </button>
                    </div>
                </div>
            </div>
            <!-- Western Union -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="img/don/senegal.jpg" alt="Western Union" class="img-fluid mb-3" style="width: 100px; height: 100px;">
                        <h5 class="card-title">Sénégal</h5>
                        <button type="button" class="btn btn-outline-secondary btn-donation" data-method="Western Union" data-bs-toggle="modal" data-bs-target="#senegalModal">
                            Vous êtes au Sénégal
                        </button>
                    </div>
                </div>
            </div>
            <!-- Autre Méthode -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="img/don/monde.jpg" alt="Autre Méthode" class="img-fluid mb-3" style="width: 100px; height: 100px;">
                        <h5 class="card-title">Partout</h5>
                        <button type="button" class="btn btn-outline-secondary btn-donation" data-method="Autre Méthode" data-bs-toggle="modal" data-bs-target="#otherModal">
                            Partout dans le monde
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="camerounModal" tabindex="-1" role="dialog" aria-labelledby="donationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="donationModalLabel">Cameroun</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>Orange Money : 690515097</div><br/>
                    <div>MTN Mobile Money : 681037893</div><br/>
                    <div>Nom : SONKOUE Foundje Jonathan Junior</div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="rdcModal" tabindex="-1" role="dialog" aria-labelledby="donationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="donationModalLabel">RDC</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>Orange Money : +243 812224755</div><br/>
                    <div>M-Pesa : +243 891237049</div><br/>
                    <div>Nom : Mathieu GBOMA</div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="senegalModal" tabindex="-1" role="dialog" aria-labelledby="donationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="donationModalLabel">Sénégal</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>Orange Money : 785332300</div><br/>
                    <div>Nom : Lauriane Evodie Niankini</div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="otherModal" tabindex="-1" role="dialog" aria-labelledby="donationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="donationModalLabel">Canada, USA, partout dans le monde</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>Paypal : eliorkossia2@gmail.com || <a href="https://paypal.me./eliorkossia2"></a></div><br/>
                    <div>Interac Canada : eliorkossia@gmail.com</div><br/>
                    <div>Western Union / MoneyGram / Ria Transfer</div><br/>
                    <div>Prénom : Kossia</div>
                    <div>Nom : GBOMA</div>
                    <div>Ville et Pays : Ermont, France</div>
                    <div>Tel : +33 7 67 74 49 33</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('#donationModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Bouton qui a déclenché le modal
                var method = button.data('method') // Extraire l'info depuis les attributs data-*

                var modal = $(this)
                modal.find('.modal-title').text('Faire un don via ' + method)
                modal.find('.modal-body').html('<p>Instructions spécifiques pour faire un don via ' + method + '.</p>')
            })
        });
    </script>
@endpush
