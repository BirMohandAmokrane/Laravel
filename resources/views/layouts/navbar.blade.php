
<nav >
    <ul>
        <li><a href="{{ route('website.accueil') }}" class="{{ request()->routeIs('website.accueil') ? 'active' : '' }}">Accueil</a></li>
        <li><a href="{{ route('website.presentation') }}" class="{{ request()->routeIs('website.presentation') ? 'active' : '' }}">Presentation</a></li>
        <li><a href="{{ route('website.produits') }}" class="{{ request()->routeIs('website.produits') ? 'active' : '' }}">Produits</a></li>
        <li><a href="{{ route('website.contact') }}" class="{{ request()->routeIs('website.contact') ? 'active' : '' }}">Contact</a></li>
    </ul>
</nav>
