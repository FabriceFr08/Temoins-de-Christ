<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="#" class="navbar-brand p-0">
            <h3 class="text-success m-0"><img src="{{ asset('LOGO_TEMOINS_DE_CHRIST_fond_transparent-300x300.png') }}" alt="img">Temoins de Christ</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('index') }}" class="nav-item nav-link {{ request()->routeIs('index') ? 'active' : '' }}">Accueil</a>
                <a href="{{ route('venir-a-christ') }}" class="nav-item nav-link {{ request()->routeIs('venir-a-christ') ? 'active' : '' }}">Venir à Christ</a>
                <a href="{{ route('formations.index') }}" class="nav-item nav-link {{ request()->routeIs('formations.index') ? 'active' : '' }}">Se former</a>
                <a href="{{ route('se-deployer') }}" class="nav-item nav-link {{ request()->routeIs('se-deployer') ? 'active' : '' }}">Se déployer</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('but-vision-mission') ? 'active' : '' }}" data-bs-toggle="dropdown">A propos</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('but-vision-mission') }}#but" class="dropdown-item">Notre But</a>
                        <a href="{{ route('but-vision-mission') }}#vision" class="dropdown-item">Notre Vision</a>
                        <a href="{{ route('but-vision-mission') }}#mission" class="dropdown-item">Notre Mission</a>
                    </div>
                </div>
                <a href="{{ route('reseau') }}" class="nav-item nav-link {{ request()->routeIs('reseau') ? 'active' : '' }}">ARD-818</a>
                <a href="{{ route('victoire_pour_christ') }}" class="nav-item nav-link {{ request()->routeIs('victoire_pour_christ') ? 'active' : '' }}">Victoire avec Christ</a>
            </div>
            <a href="{{ route('don') }}" class="btn btn-success rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0 {{ request()->routeIs('don') ? 'active' : '' }}">Faire un don</a>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->
