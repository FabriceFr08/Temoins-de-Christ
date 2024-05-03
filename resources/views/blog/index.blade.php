@extends('layouts.app')

@section('title', 'Articles')
@section('content')

    <!-- Blogs Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Blog & News</h4>
                <h1 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Our Latest News & Articles</h1>
            </div>
            <!-- Blog Start -->
            <div class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-5">
                    <!-- Blog list Start -->
                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item">
                                    <div class="position-relative">
                                        <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="">
                                        <div class="blog-date">
                                            <h5 class="text-white fw-bold mb-0">01</h5>
                                            <h6 class="text-light mb-0">January</h6>
                                        </div>
                                    </div>
                                    <div class="bg-primary rounded-bottom p-5">
                                        <div class="d-flex mb-3">
                                            <span class="text-light text-uppercase">Admin</span>
                                            <span class="text-light px-2">|</span>
                                            <span class="text-light text-uppercase">Web Design</span>
                                        </div>
                                        <a class="h3 m-0 text-white" href="">Kasd dolor lorem sit justo rebum stet justo elitr dolor amet sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item">
                                    <div class="position-relative">
                                        <img class="img-fluid w-100 rounded-top" src="img/blog-2.jpg" alt="">
                                        <div class="blog-date">
                                            <h5 class="text-white fw-bold mb-0">01</h5>
                                            <h6 class="text-light mb-0">January</h6>
                                        </div>
                                    </div>
                                    <div class="bg-primary rounded-bottom p-5">
                                        <div class="d-flex mb-3">
                                            <span class="text-light text-uppercase">Admin</span>
                                            <span class="text-light px-2">|</span>
                                            <span class="text-light text-uppercase">Web Design</span>
                                        </div>
                                        <a class="h3 m-0 text-white" href="">Kasd dolor lorem sit justo rebum stet justo elitr dolor amet sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                                <div class="blog-item">
                                    <div class="position-relative">
                                        <img class="img-fluid w-100 rounded-top" src="img/blog-1.jpg" alt="">
                                        <div class="blog-date">
                                            <h5 class="text-white fw-bold mb-0">01</h5>
                                            <h6 class="text-light mb-0">January</h6>
                                        </div>
                                    </div>
                                    <div class="bg-primary rounded-bottom p-5">
                                        <div class="d-flex mb-3">
                                            <span class="text-light text-uppercase">Admin</span>
                                            <span class="text-light px-2">|</span>
                                            <span class="text-light text-uppercase">Web Design</span>
                                        </div>
                                        <a class="h3 m-0 text-white" href="">Kasd dolor lorem sit justo rebum stet justo elitr dolor amet sit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination pagination-lg m-0">
                                        <li class="page-item disabled">
                                            <a class="page-link rounded-0" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link rounded-0" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Blog list End -->

                    <!-- Sidebar Start -->
                    <div class="col-lg-4">
                        <!-- Search Form Start -->
                        <div class="mb-5">
                            <div class="input-group">
                                <input type="text" class="form-control p-3" placeholder="Rechercher">
                                <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                            </div>
                        </div>
                        <!-- Search Form End -->

                        <!-- Category Start -->
                        <div class="mb-5">
                            <h2 class="mb-4">Categories</h2>
                            <div class="d-flex flex-column justify-content-start">
                                @foreach($categories as $categorie)
                                    <a class="h5 bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>{{$categorie->nomCategorie}}</a>
                                @endforeach
                            </div>
                        </div>
                        <!-- Category End -->

                        <!-- Recent Post Start -->
                        <div class="mb-5">
                            <h2 class="mb-4">Articles récents</h2>
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                                </a>
                            </div>
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                                </a>
                            </div>
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                                </a>
                            </div>
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                                </a>
                            </div>
                            <div class="d-flex rounded overflow-hidden mb-3">
                                <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                                <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Lorem ipsum dolor sit amet adipis elit
                                </a>
                            </div>
                        </div>
                        <!-- Recent Post End -->

                        <!-- Image Start -->
                        <div class="mb-5">
                            <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                        </div>
                        <!-- Image End -->

                    </div>
                    <!-- Sidebar End -->
                </div>
            </div>
            <!-- Blog End -->

        </div>
    </div>
    <!-- Blogs End -->

@endsection
