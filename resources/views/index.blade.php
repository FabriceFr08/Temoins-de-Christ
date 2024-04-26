@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="border bg-secondary rounded">
                        <img src="img/about-2.png" class="img-fluid w-100 rounded" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h4 class="text-secondary sub-title fw-bold">Temoins de Christ</h4>
                    <h1 class="display-3 mb-4"><strong class="text-primary">Temoins de Christ</strong>, Un centre de Transformation</h1>
                    <p>Faire des disciples capables d'aider les autres, de gagner les âmes à Christ, et de marcher dans son Autorité et la puissance du Saint Esprit.
                    </p>
                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore illum nemo deserunt reiciendis perferendis incidunt ullam expedita dolor, voluptas repellat necessitatibus dolore repellendus dolorum, voluptate dolorem. Debitis quis ipsa ullam neque corrupti maxime ad magni, tempore, aperiam rerum, perspiciatis fuga.
                    </p>
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Blogs Start -->
    <div class="container-fluid blog pb-5">
        <div class="container pb-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Blog</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Nos Articles</h1>
            </div>
            <div class="blog-carousel owl-carousel pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-img rounded-top">
                        <img src="img/class-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="bg-light rounded-bottom p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August 2021</a>
                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                        </div>
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
                <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-img rounded-top">
                        <img src="img/class-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="bg-light rounded-bottom p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August 2021</a>
                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                        </div>
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
                <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-img rounded-top">
                        <img src="img/class-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="bg-light rounded-bottom p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August 2021</a>
                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                        </div>
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
                <div class="blog-item bg-white rounded wow fadeInUp" data-wow-delay="0.7s">
                    <div class="blog-img rounded-top">
                        <img src="img/class-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="bg-light rounded-bottom p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <a href="#" class="text-muted"><i class="fa fa-calendar-alt text-primary"></i> 28 August 2021</a>
                            <a href="#" class="text-muted"><span class="fa fa-comments text-primary"></span> 3 Comments</a>
                        </div>
                        <a href="#" class="h4 mb-3 d-block">Classical Dance class</a>
                        <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni vero excepturi blanditiis quidem</p>
                        <a class="btn btn-primary rounded-pill text-white py-2 px-4" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blogs End -->

@endsection
