    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-light" id="logo-brand" href="">ShippingRecht</a>
            <button class="navbar-toggler bg-light" id="hamburger" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light p-3" href="{{route('index')}}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light p-3" href="{{ route('kuliah') }}">Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light p-3" href="{{ route('artikel') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light p-3" href="">Acara</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link text-light p-3" href="{{ route('forum') }}">Forum & Diskusi</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link text-light p-3" href="">Sponsor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light pt-3 ps-3" href="{{ route('gabung.index') }}">Gabung</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
