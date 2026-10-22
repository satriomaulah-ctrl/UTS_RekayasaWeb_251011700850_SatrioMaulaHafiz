<nav class="navbar navbar-expand-lg bg-warning shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">🧸 Toko Mainan Ceria</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'fw-bold' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/produk') }}" class="nav-link {{ request()->is('produk*') ? 'fw-bold' : '' }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/profile') }}" class="nav-link {{ request()->is('profile') ? 'fw-bold' : '' }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/about') }}" class="nav-link {{ request()->is('about') ? 'fw-bold' : '' }}">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
