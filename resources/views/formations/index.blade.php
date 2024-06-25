
@extends('layouts.app')
<style>
    /* Styles personnalisés */
    .container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
    }
    .step {
        display: none;
    }
    .step.active {
        display: block;
    }
</style>
@section('title', 'Formations')

@section('content')

    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 75px;">

        <div class="container py-5">
{{--            <div class="pb-5">--}}
{{--                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Bilan Spirituel</h4>--}}
{{--                --}}{{--                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">S'inscrire</h1>--}}
{{--            </div>--}}
{{--            <p class="h4">--}}
{{--                Besoin de délivrance dans un domaine ? Veuillez cliquer ici--}}
{{--            </p>--}}
{{--            <a href="{{route('venir-a-christ')}}"  class="btn btn-success rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">J'ai besoin de délivrance</a>--}}

        </div>
        <div class="container">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Nos formations</h4>
                {{--                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">S'inscrire</h1>--}}
            </div>
            <div class="row g-5">
{{--                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">--}}
{{--                    <div class="position-relative border border-secondary rounded">--}}
{{--                        <div class="bg-secondary text-center pt-5 pb-4">--}}
{{--                            <h4 class="text-white">Comment Servir le Seigneur</h4>--}}

{{--                        </div>--}}
{{--                        <div class="text-center py-5">--}}
{{--                            <p class="border-bottom border-light mb-2 pb-2">10 modules</p>--}}
{{--                            <p class="border-bottom border-light mb-2 pb-2">Pouvoir servir le Seigneur</p>--}}
{{--                            <p class="border-bottom border-light mb-2 pb-2">Impacter sa communauté</p>--}}
{{--                            <p class="mb-2 pb-2">Examen prévu à la fin de chque module</p>--}}
{{--                        </div>--}}
{{--                        <a href="" class="btn btn-secondary py-2 px-4 position-absolute top-100 start-50 translate-middle">S'inscrire</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-success rounded">
                        <div class="bg-secondary text-center pt-5 pb-4">
                            <h3 class="text-white">Premiers Pas</h3>

                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">6 modules</p>
                            <p class="border-bottom border-light mb-2 pb-2">Niveau introductif</p>
                            <p class="border-bottom border-light mb-2 pb-2">Plante l'univers de la formation</p>
                            <p class="mb-2 pb-2">Examen prévu à la fin de chaque module</p>
                        </div>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#inscriptionModal" class="btn btn-success py-2 px-4 position-absolute top-100 start-50 translate-middle">S'inscrire</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative border border-success rounded">
                        <div class="bg-secondary text-center pt-5 pb-4">
                            <h4 class="text-white">Comment Servir le Seigneur</h4>

                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">10 modules</p>
                            <p class="border-bottom border-light mb-2 pb-2">Pouvoir servir le Seigneur</p>
                            <p class="border-bottom border-light mb-2 pb-2">Impacter sa communauté</p>
                            <p class="mb-2 pb-2">Examen prévu à la fin de chque module</p>
                        </div>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#inscriptionModal" class="btn btn-success py-2 px-4 position-absolute top-100 start-50 translate-middle">S'inscrire</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="position-relative border border-success rounded">
                        <div class="bg-secondary text-center pt-5 pb-4">
                            <h4 class="text-white">Devenir un Témoin de Christ</h4>

                        </div>
                        <div class="text-center py-5">
                            <p class="border-bottom border-light mb-2 pb-2">16  modules</p>
                            <p class="border-bottom border-light mb-2 pb-2">Accomplir la mission de DIEU</p>
                            <p class="border-bottom border-light mb-2 pb-2">Témoigner de Christ</p>
                            <p class="mb-2 pb-2">Examen prévu à la fin de chque module</p>
                        </div>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#inscriptionModal" class="btn btn-success py-2 px-4 position-absolute top-100 start-50 translate-middle">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

    <div class="modal fade" id="inscriptionModal" tabindex="-1" aria-labelledby="inscriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inscriptionModalLabel">S'inscrire pour la formation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="customForm" method="POST" enctype="multipart/form-data" action="{{ route('formations.store') }}">
                        @csrf
                        <!-- Étape 1 -->
                        <div class="step active">
                            <h3>Étape 1 : Informations personnelles</h3>
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom *</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                                <div class="invalid-feedback">Veuillez entrer votre nom.</div>
                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prénom *</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required>
                                <div class="invalid-feedback">Veuillez entrer votre prénom.</div>
                            </div>
                            <div class="mb-3">
                                <label for="photo" class="form-label">Télécharger une photo récente du visage *</label>
                                <input type="file" class="form-control" id="photo" name="photo" required>
                                <div class="invalid-feedback">Veuillez télécharger une photo récente de votre visage.</div>
                            </div>
                            <div class="mb-3">
                                <label for="birthday" class="form-label">Date de naissance *</label>
                                <input type="date" class="form-control" id="birthday" name="birthday" required>
                                <div class="invalid-feedback">Veuillez entrer votre date de naissance.</div>
                            </div>
                            <button type="button" class="btn btn-success" onclick="nextStep()">Suivant</button>
                        </div>

                        <!-- Étape 2 -->
                        <div class="step">
                            <h3>Étape 2 : Coordonnées</h3>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Téléphone WhatsApp *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                                <div class="invalid-feedback">Veuillez entrer votre numéro de téléphone WhatsApp.</div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">Veuillez entrer votre email opérationnel.</div>
                            </div>
                            <div class="mb-3">
                                <label for="ville" class="form-label">Ville et quartier *</label>
                                <input type="text" class="form-control" id="ville" name="ville" required>
                                <div class="invalid-feedback">Veuillez entrer votre ville et quartier.</div>
                            </div>
                            <div class="mb-3">
                                <label for="pays" class="form-label">Pays de résidence *</label>
                                <input type="text" class="form-control" id="pays" name="pays" required>
                                <div class="invalid-feedback">Veuillez entrer votre pays de résidence.</div>
                            </div>
                            <button type="button" class="btn btn-success" onclick="prevStep()">Précédent</button>
                            <button type="button" class="btn btn-success" onclick="nextStep()">Suivant</button>
                        </div>

                        <!-- Étape 3 -->
                        <div class="step">
                            <h3>Étape 3 : Informations supplémentaires</h3>
                            <div class="mb-3">
                                <label class="form-label">Aviez-vous déjà été inscrit à cette formation auparavant ? *</label><br>
                                <select class="form-select" id="formation" name="formation" required>
                                    <option value=""></option>
                                    <option value="marié">Oui</option>
                                    <option value="concubinage">Non</option>
                                </select>
                                <div class="invalid-feedback">Veuillez répondre à cette question.</div>
                            </div>
                            <div class="mb-3">
                                <label for="conjugale" class="form-label">Quelle est votre situation conjugale actuelle ? *</label>
                                <select class="form-select" id="conjugale" name="conjugale" required>
                                    <option value=""></option>
                                    <option value="célibataire">Célibataire</option>
                                    <option value="marié">Marié(e)</option>
                                    <option value="concubinage">En concubinage</option>
                                </select>
                                <div class="invalid-feedback">Veuillez sélectionner votre situation conjugale actuelle.</div>
                            </div>
                            <div class="mb-3">
                                <label for="source" class="form-label">Comment avez-vous entendu parler de cette formation ? *</label>
                                <select class="form-select" id="source" name="source" required>
                                    <option value=""></option>
                                    <option value="frere_elior">Au travers du Frère Elior</option>
                                    <option value="bouche_oreille">Au travers du bouche à oreille</option>
                                    <option value="ami">Une amie/Un ami me l'a recommandé</option>
                                    <option value="groupe_partage">Au travers de mon groupe de partage biblique</option>
                                    <option value="reseaux_sociaux">Au travers des réseaux sociaux</option>
                                    <option value="autres">Autres</option>
                                </select>
                                <div class="invalid-feedback">Veuillez indiquer comment vous avez entendu parler de cette formation.</div>
                            </div>
                            <div class="mb-3">
                                <label for="assemblee" class="form-label">Avez-vous une Assemblée/Communauté Chrétienne actuellement ? *</label>
                                <select class="form-select" id="assemblee" name="assemblee" required>
                                    <option value=""></option>
                                    <option value="oui">Oui</option>
                                    <option value="non">Non</option>
                                </select>
                                <div class="invalid-feedback">Veuillez répondre à cette question.</div>
                            </div>
                            <div class="mb-3">
                                <label for="leader" class="form-label">Quel est le nom de votre Pasteur, Prêtre ou Leader ? *</label>
                                <input type="text" class="form-control" id="leader" name="leader" required>
                                <div class="invalid-feedback">Veuillez entrer le nom de votre Pasteur, Prêtre ou Leader.</div>
                            </div>
                            <button type="button" class="btn btn-success" onclick="prevStep()">Précédent</button>
                            <button type="button" class="btn btn-success" onclick="nextStep()">Suivant</button>
                        </div>

                        <!-- Étape 4 -->
                        <div class="step">
                            <h3>Étape 4 : Engagements et témoignage</h3>
                            <div class="mb-3">
                                <label for="conversion" class="form-label">Depuis combien de temps est-ce que vous avez donné votre vie à Christ ? *</label>
                                <select class="form-select" id="conversion" name="conversion" required>
                                    <option value=""></option>
                                    <option value="pas_encore">Pas encore</option>
                                    <option value="0_18_mois">0 à 1 an et demi (18 mois)</option>
                                    <option value="18_36_mois">1 an et demi à 36 mois (3 ans)</option>
                                    <option value="36_mois_plus">3 ans et plus</option>
                                </select>
                                <div class="invalid-feedback">Veuillez indiquer depuis combien de temps vous avez donné votre vie à Christ.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Avez-vous déjà expérimenté le ? *</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="bapteme_eaux" name="bapteme[]" value="bapteme_eaux">
                                    <label class="form-check-label" for="bapteme_eaux">Baptême des eaux par immersion</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="bapteme_saint_esprit" name="bapteme[]" value="bapteme_saint_esprit">
                                    <label class="form-check-label" for="bapteme_saint_esprit">Baptême du Saint Esprit</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="aucun" name="bapteme[]" value="aucun">
                                    <label class="form-check-label" for="aucun">Aucun des deux</label>
                                </div>
                                <div class="invalid-feedback">Veuillez cocher au moins une option.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Êtes-vous une personne ? *</label><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="pas_eglise" name="va_eglise[]" value="pas_eglise">
                                    <label class="form-check-label" for="pas_eglise">Qui n'a pas d'église</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="va_eglise_occasionnellement" name="va_eglise[]" value="va_eglise_occasionnellement">
                                    <label class="form-check-label" for="va_eglise_occasionnellement">Qui va à l'église de temps à autres</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="nouvelle_naissance" name="va_eglise[]" value="nouvelle_naissance">
                                    <label class="form-check-label" for="nouvelle_naissance">Qui a déjà expérimenté la nouvelle naissance</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="decouvert_appel" name="va_eglise[]" value="decouvert_appel">
                                    <label class="form-check-label" for="decouvert_appel">Qui a déjà découvert son appel</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="serviteur_dieu" name="va_eglise[]" value="serviteur_dieu">
                                    <label class="form-check-label" for="serviteur_dieu">Qui est déjà un serviteur de DIEU</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="autre" name="va_eglise[]" value="autre">
                                    <label class="form-check-label" for="autre">Autre</label>
                                </div>
                                <div class="invalid-feedback">Veuillez cocher au moins une option.</div>
                            </div>
                            <div class="mb-3">
                                <label for="temoignage" class="form-label">Racontez-nous brièvement un témoignage de ce que DIEU a déjà fait dans votre vie ou ce que vous avez déjà fait pour DIEU *</label>
                                <textarea class="form-control" id="temoignage" name="temoignage" rows="3" required></textarea>
                                <div class="invalid-feedback">Veuillez entrer votre témoignage.</div>
                            </div>
                            <div class="mb-3">
                                <label for="duree" class="form-label">La formation comprend 3 niveaux lesquels se feront en 6 ou 12 mois, quelle durée vous convient le mieux ? *</label>
                                <select class="form-select" id="duree" name="duree" required>
                                    <option value=""></option>
                                    <option>9 mois et plus (intense et accéléré avec deux pauses de 2 semaines chaque 2 mois)</option>
                                    <option>15 mois et plus (avec 4 pauses de 2 semaines tous les 3 mois)</option>
                                </select>
                                <div class="invalid-feedback">Veuillez sélectionner la durée qui vous convient le mieux.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Cette formation exige une période de stage rigoureuse de 30 heures sur le terrain pour la version de 9 mois et 60 heures sur le terrain pour la version de 15 mois. Vous aurez aussi à nous présenter un rapport de stage détaillé et signé par l'institution où vous feriez votre stage. Êtes-vous d'accord avec cela ? *</label><br>
                                <select class="form-select" id="stage" name="stage" required>
                                    <option value=""></option>
                                    <option>Oui</option>
                                    <option>Non</option>
                                </select>
                                <div class="invalid-feedback">Veuillez répondre à cette question.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Après cette formation, je m'engage à retourner servir efficacement DIEU dans mon assemblée ou dans ma communauté Chrétienne *</label><br>

                                <select class="form-select" id="engagement" name="engagement" required>
                                    <option value=""></option>
                                    <option>Oui et de tout mon coeur</option>
                                    <option>Je me forme juste pour moi</option>
                                </select>
                                <div class="invalid-feedback">Veuillez répondre à cette question.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Chaque étudiant doit se préparer à acheter 2 livres obligatoires (1 sur la rédemption et l'autre sur l'onction). Tous les autres cependant (31) seront gratuits *</label><br>

                                <select class="form-select" id="livres" name="livres" required>
                                    <option value=""></option>
                                    <option>Je suis parfaitement à l'aise avec ça</option>
                                    <option>Je ne suis pas à l'aise avec ça</option>
                                </select>
                                <div class="invalid-feedback">Veuillez répondre à cette question</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Après votre inscription, rejoignez tout de suite le groupe WhatsApp de la formation TDC, pour plus d'informations, en cliquant sur le lien que vous verrez affiché après avoir soumis votre inscription *</label><br>

                                <select class="form-select" id="whatsapp" name="whatsapp" required>
                                    <option value=""></option>
                                    <option>Tout de suite</option>
                                    <option>Maintenant même</option>
                                </select>
                                <div class="invalid-feedback">Veuillez répondre à cette question.</div>
                            </div>
                            <button type="button" class="btn btn-success" onclick="prevStep()">Précédent</button>
                            <button type="submit" class="btn btn-success">Soumettre</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll('.step');

        function nextStep() {
            // Validation de l'étape actuelle
            if (!validateStep(currentStep)) {
                return; // Arrête la fonction si l'étape actuelle n'est pas valide
            }

            // Passage à l'étape suivante si ce n'est pas la dernière étape
            if (currentStep < steps.length - 1) {
                steps[currentStep].classList.remove('active');
                currentStep++;
                steps[currentStep].classList.add('active');
            }
        }

        // Validation des champs de l'étape courante
        function validateStep(stepIndex) {
            const inputs = steps[stepIndex].querySelectorAll('input[required], select[required], textarea[required]');
            let isValid = true;

            inputs.forEach(function(input) {
                if (!input.checkValidity()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                    input.nextElementSibling.textContent = input.validationMessage;
                } else {
                    input.classList.remove('is-invalid');
                    input.nextElementSibling.textContent = '';
                }
            });

            return isValid;
        }


        function prevStep() {
            if (currentStep > 0) {
                steps[currentStep].classList.remove('active');
                currentStep--;
                steps[currentStep].classList.add('active');
            }
        }

        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="border bg-secondary rounded">
                        <img src="img/formations/formation_12_mois.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">A propos de la formation</h4>
                    <h3 class="display-3 mb-4">A propos de la formation</h3>
                    <p>Si tu (ou ton ami) as répondu oui à une seule de ces questions : alors cette formation est pour toi (et lui) !

                        Il s’agit d’une formation en ligne en deux versions : 6 mois pour les plus téméraires, et 12 mois pour les plus occupés.

                        Il faudra cependant payer le prix de la discipline et de la persévérance, pour laisser le Saint Esprit vous conduire et vous enseigner sur plusieurs thèmes, tout au long de ce cursus.

                        La formation est totalement gratuite et se déroulera en ligne, en version autonome sur notre outil de formation.

                        Tu auras aussi un accompagnateur attitré, qui sera avec toi durant toute la formation, pour t’aider à persévérer jusqu’au bout, en répondant à toutes tes questions.
                    </p>

{{--                    <a class="btn btn-success rounded-pill text-white py-3 px-5" href="#">Learn More</a>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection



@vite('resources/js/formation.js')
