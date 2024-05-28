
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href=""><i></i><span data-i18n="eCommerce">HFC</span></a>
                    </li>
                    <li><a class="menu-item" href=""><i></i><span data-i18n="Crypto">Formations</span></a>
                    </li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Sales">Actualités</span></a>
                    </li>
                    <li class=""><a class="menu-item" href=""><i></i><span data-i18n="Sales">Galerie</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="Templates">Blog</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#"><i></i><span data-i18n="Vertical">Categories</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('categories/create') ? 'active' : '' }}">
                                <a class="menu-item" href="{{ route('categories.create') }}">
                                    <i></i><span data-i18n="Classic Menu">Ajouter une catégorie</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('categories') ? 'active' : '' }}">
                                <a class="menu-item" href="{{ route('categories.index') }}">
                                    <i></i><span>lister les catégories</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="#"><i></i><span data-i18n="Horizontal">Articles</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('articles/create') ? 'active' : '' }}"><a class="menu-item" href="{{ route('articles.create') }}"><i></i><span data-i18n="Classic">Ajouter un article</span></a>
                            </li>
                            <li class="{{ Request::is('articles') ? 'active' : '' }}"><a class="menu-item" href="{{ route('articles.index') }}"><i></i><span data-i18n="Full Width">Lister les articles</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="Templates">Réseau</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#"><i></i><span data-i18n="Vertical">Villes</span></a>
                        <ul class="menu-content">
                            <li class="{{ Request::is('villes/create') ? 'active' : '' }}">
                                <a class="menu-item" href="{{ route('villes.create') }}">
                                    <i></i><span data-i18n="Classic Menu">Ajouter une ville</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('villes') ? 'active' : '' }}">
                                <a class="menu-item" href="{{ route('villes.index') }}">
                                    <i></i><span>lister les villes</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</div>
