@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

{{--@include('.partials.carousel')--}}


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="border bg-secondary rounded">
                        <img src="img/cible.jpg" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">Temoins de Christ</h4>
                    <h1 class="display-3 mb-4"><strong class="text-success">Temoins de Christ</strong>, Un centre de Transformation</h1>
                    <h4>Faire des disciples capables d'aider les autres, de gagner les âmes à Christ, et de marcher dans son Autorité et la puissance du Saint Esprit.
                    </h4>
{{--                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore illum nemo deserunt reiciendis perferendis incidunt ullam expedita dolor, voluptas repellat necessitatibus dolore repellendus dolorum, voluptate dolorem. Debitis quis ipsa ullam neque corrupti maxime ad magni, tempore, aperiam rerum, perspiciatis fuga.--}}
{{--                    </p>--}}
{{--                    <a class="btn btn-success rounded-pill text-white py-3 px-5" href="#">En savoir plus</a>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

<!-- Training Start -->
<div class="container-fluid training py-5">
    <div class="container py-5">
        <div class="pb-5">
            <div class="row g-4 align-items-end">
                <div class="col-xl-8">
                    <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Nos activités</h4>
                    <h4 class="display-4 mb-0 wow fadeInUp" data-wow-delay="0.3s">Nos différentes activités</h4>
                </div>

            </div>
        </div>
        <div class="training-carousel owl-carousel pt-5 wow fadeInUp">
            <div class="training-item bg-white rounded wow fadeInUp" >
                <div class="training-img rounded-top">
                    <img src="img/Samedi_de_reveil.jpg" class="img-fluid rounded-top w-100" alt="Image">
                </div>
                <div class="rounded-bottom border border-top-0 p-4">
                    <a href="#" class="h5 mb-3 d-block">Samedi de réveil</a>
{{--                    <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>--}}
                    <a class="btn btn-success rounded-pill text-white py-2 px-4" href="https://docs.google.com/forms/d/e/1FAIpQLSes7lro5XUR3xxn3CBtxNns1M9wyCbX2oc2hL3379cC-F9uYA/viewform">En savoir plus</a>
                </div>
            </div>
            <div class="training-item bg-white rounded wow fadeInUp">
                <div class="training-img rounded-top">
                    <img src="img/jte.jpg" class="img-fluid rounded-top w-100" alt="Image">
                </div>
                <div class="rounded-bottom border border-top-0 p-4">
                    <a href="#" class="h5 mb-3 d-block">Jeudi des Témoins embrasés</a>
{{--                    <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>--}}
                    <a class="btn btn-success rounded-pill text-white py-2 px-4" href="#">En savoir plus</a>
                </div>
            </div>
            <div class="training-item bg-white rounded">
                <div class="training-img rounded-top">
                    <img src="img/ev.jpg" class="img-fluid rounded-top w-100" alt="Image">
{{--                    <h1 class="fs-1 fw-bold bg-primary text-white d-inline-block rounded p-2 position-absolute" style="top: 0; left: 0;">03</h1>--}}
                </div>
                <div class="rounded-bottom border border-top-0 p-4">
                    <a href="#" class="h4 mb-3 d-block">Evangélisation</a>
{{--                    <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>--}}
                    <a class="btn btn-success rounded-pill text-white py-2 px-4" href="#">En savoir plus</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Training End -->


{{--<!-- Testimonial Start -->--}}
{{--<div class="container-fluid testimonial pb-5">--}}
{{--    <div class="container pb-5">--}}
{{--        <div class="pb-5">--}}
{{--            <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">TEMOIGNAGES</h4>--}}
{{--            <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Témoignages des nos lauréats</h1>--}}
{{--        </div>--}}
{{--        <div class="owl-carousel testimonial-carousel pt-5 wow fadeInUp" data-wow-delay="0.2s">--}}
{{--            <div class="testimonial-item border text-center rounded">--}}
{{--                <div class="rounded-circle position-absolute" style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">--}}
{{--                    <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" alt="img">--}}
{{--                </div>--}}
{{--                <div class="position-relative" style="margin-top: 140px;">--}}
{{--                    <h5 class="mb-0">Person Name</h5>--}}
{{--                    <p>Profession</p>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="testimonial-content p-4">--}}
{{--                    <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="testimonial-item border text-center rounded">--}}
{{--                <div class="rounded-circle position-absolute" style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">--}}
{{--                    <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" alt="img">--}}
{{--                </div>--}}
{{--                <div class="position-relative" style="margin-top: 140px;">--}}
{{--                    <h5 class="mb-0">Person Name</h5>--}}
{{--                    <p>Profession</p>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="testimonial-content p-4">--}}
{{--                    <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="testimonial-item border text-center rounded">--}}
{{--                <div class="rounded-circle position-absolute" style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">--}}
{{--                    <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" alt="img">--}}
{{--                </div>--}}
{{--                <div class="position-relative" style="margin-top: 140px;">--}}
{{--                    <h5 class="mb-0">Person Name</h5>--}}
{{--                    <p>Profession</p>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="testimonial-content p-4">--}}
{{--                    <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="testimonial-item border text-center rounded">--}}
{{--                <div class="rounded-circle position-absolute" style="width: 100px; height: 100px; top: 25px; left: 50%; transform: translateX(-50%);">--}}
{{--                    <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg" alt="img">--}}
{{--                </div>--}}
{{--                <div class="position-relative" style="margin-top: 140px;">--}}
{{--                    <h5 class="mb-0">Person Name</h5>--}}
{{--                    <p>Profession</p>--}}
{{--                    <div class="d-flex justify-content-center">--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star text-secondary"></i>--}}
{{--                        <i class="fas fa-star"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="testimonial-content p-4">--}}
{{--                    <p class="fs-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitati eiusmod tempor incididunt.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Testimonial End -->--}}

@endsection
