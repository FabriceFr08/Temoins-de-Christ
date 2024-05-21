@extends('layouts.app')

@section('title', 'Réseau des TDC')
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
                    <h4 class="text-secondary sub-title fw-bold">about The Dance School</h4>
                    <h1 class="display-3 mb-4"><strong class="text-primary">JustDance</strong>, We have been teaching dance since 2001</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint commodi alias, eius incidunt similique exercitationem magni quod recusandae maiores ducimus non porro neque odio explicabo, doloribus deleniti rem sequi adipisci sed ab qui dolorem. Optio sint eius illum consequuntur. Odit.
                    </p>
                    <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore illum nemo deserunt reiciendis perferendis incidunt ullam expedita dolor, voluptas repellat necessitatibus dolore repellendus dolorum, voluptate dolorem. Debitis quis ipsa ullam neque corrupti maxime ad magni, tempore, aperiam rerum, perspiciatis fuga.
                    </p>
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{route('inscription')}}">S'inscrire</a>
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{route('inscription')}}">Voir service</a>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
