<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

        <div id="logo">
            <a href="index.html"><img src="{{ asset('assets_front/assets/img/KBS-Logo-1.png') }}"
                    style="max-width: 165px" alt=""></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul >
                <li><a class="nav-link scrollto text-warning {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                <li><a class="nav-link scrollto text-warning" href="#lokasi">Map</a></li>
                <li><a class="nav-link scrollto text-warning {{ Request::is('treasure') ? 'active' : '' }}" href="/treasure">Treasure</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>