@extends('layouts.app')

@section('title', 'Galerie')

@section('content')

    <!-- Video Gallery Start -->
    <div class="container-fluid gallery py-5">
        <div class="container py-5">
            <div class="pb-5">
                <h4 class="text-secondary sub-title fw-bold wow fadeInUp" data-wow-delay="0.1s">Notre galerie</h4>
                <h5 class="display-2 mb-0 wow fadeInUp" data-wow-delay="0.3s">Méditez quelques pensez de nos méditations</h5>
            </div>
            <div class="tab-class wow fadeInUp" data-wow-delay="0.1s">

                <div class="tab-content">
                    <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="video h-100">
                                    <img src="{{asset('img/galerie/photo_2023-08-02_23-50-24-300x300.jpg')}}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="{{asset('img/galerie/photo_2023-08-02_23-50-24-300x300.jpg')}}" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2 wow fadeInUp" data-wow-delay="0.9s">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GalleryTab-2" class="tab-pane fade show p-0">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GalleryTab-3" class="tab-pane fade show p-0">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GalleryTab-4" class="tab-pane fade show p-0">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="GalleryTab-5" class="tab-pane fade show p-0">
                        <div class="row g-2">
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-1.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-2.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/class-3.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                                <div>
                                    <img src="{{asset('img/galerie/photo_2023-08-02_23-50-24-300x300.jpg')}}" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
{{--                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">--}}
{{--                                        <span></span>--}}
{{--                                    </button>--}}
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                                <div class="video h-100">
                                    <img src="img/about-2.png" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                    <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
