<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="#" class="navbar-brand p-0">
            <h3 class="text-primary m-0"><img src="{{asset('LOGO_TEMOINS_DE_CHRIST_fond_transparent-300x300.png')}}" alt="Temoins de Christ">Temoins de Christ</h3>

        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{route('index')}}" class="nav-item nav-link active">Accueil</a>
                <a href="about.html" class="nav-item nav-link">Actualités</a>
                <a href="{{route('bibliotheque')}}" class="nav-item nav-link">Bibliothèque HFC</a>
                <a href="{{route('formation')}}" class="nav-item nav-link">Formations</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Activités</a>
                    <div class="dropdown-menu m-0">
                        <a href="classes.html" class="dropdown-item">Evangélisation</a>
                        <a href="training.html" class="dropdown-item">Samedi de Réveil</a>
                        <a href="testimonial.html" class="dropdown-item">Témoignages</a>
                    </div>
                </div>
                <a href="blog.html" class="nav-item nav-link">Réseau des TDC</a>

{{--                <a href="contact.html" class="nav-item nav-link">Articles</a>--}}
            </div>
            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Faire un don</a>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->
