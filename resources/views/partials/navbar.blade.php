<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
    <div class="container">
        <!-- Logo and Brand -->
        <a class="navbar-brand d-flex align-items-center text-dark fw-bold" href="/">
            <img src="images/whatsapp-image-2024-09-19-at-05.15.36-1928cb62-1.png" alt="PT. MARTEL KARYA SUMATRA" class="me-2" style="height: 40px;">
        </a>

        <!-- Toggler Button -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-semibold" href="#" id="dropdownMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Layanan 
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenu">
                        <li><a class="dropdown-item text-dark" href="{{ route('pengaspalan') }}">Pengaspalan Jalan</a></li>
                        <li><a class="dropdown-item text-dark" href="{{ route('alatberat') }}">Sewa Alat Berat</a></li>
                        <li><a class="dropdown-item text-dark" href="{{ route('sewatruck') }}">Sewa Truck</a></li>
                        <li><a class="dropdown-item text-dark" href="{{ route('material') }}">Material Pengaspalan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="#header14-1j">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="#contacts3-5">Kontak</a>
                </li>
                <li class="nav-item">
                    <a href="https://wa.me/6281264978260" class="btn btn-success btn-sm ms-3">Chat WhatsApp</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
