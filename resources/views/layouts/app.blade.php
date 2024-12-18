<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ClimateWare')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">ClimateWare</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('articles') }}">Articles</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('statistics') }}">Statistics</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('map') }}">Map</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start border-top mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">About ClimateWare</h5>
                    <p>
                        ClimateWare is a platform to raise awareness about global warming. Learn, explore, and take action to protect our planet.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Quick Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="{{ route('articles') }}" class="text-dark">Articles</a></li>
                        <li><a href="{{ route('statistics') }}" class="text-dark">Statistics</a></li>
                        <li><a href="{{ route('gallery') }}" class="text-dark">Gallery</a></li>
                        <li><a href="{{ route('map') }}" class="text-dark">Map</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact</h5>
                    <ul class="list-unstyled mb-0">
                        <li>Email: <a href="mailto:info@climateware.com" class="text-dark">info@climateware.com</a></li>
                        <li>Phone: 0812345678910</li>
                        <li>Location: Earth 🌍</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3 bg-light border-top">
            © 2024 ClimateWare. All Rights Reserved.
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
