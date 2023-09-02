<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <link rel="stylesheet" href="{{ asset('css/your-styles.css') }}"> <!-- Link to your custom CSS file -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg">
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                <div class="container">
                    <!-- Logo on the left -->
                    <div class="app-brand justify-content-left">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <!-- Your SVG logo code here -->
                            </span>
                            <span class="app-brand-text demo text-body fw-bolder">Sneat</span>
                        </a>
                        <a class="nav-link" href="#">How It Works</a>
                        <a href="{{ route('jobs') }}" class="btn">Browse Jobs</a>
                    </div>
                    
                    <!-- Navigation elements on the right -->
                    <div class="app-brand justify-content-end">
                        @if (Route::has('login'))
                            <div class="header-controls sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-secondary">Log in</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-info ml-2">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </nav>
            
            <!-- Second Navbar -->
            <nav class="navbar navbar-expand-lg bg-secondary" style="padding-top: 0; padding-bottom: 0;">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto" style="font-size: 14px;">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Browse Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Post a Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">How It Works</a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <!-- Hero Section -->
            <section class="jumbotron text-white bg-img">
                <div class="container">
                    <h1 class="display-4 text-white">Find the Perfect Resource</h1>
                    <p class="lead">Get your work done by experts from the market.</p>
                    <ul class="lead">
                        <li>World's best CRM</li>
                        <li>Any job you can possibly think of</li>
                        <li>Save up to 90% & get quotes for free</li>
                        <li>Pay only when you're 100% happy</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Browse Projects</a>
                    <a href="#" class="btn btn-outline-primary btn-transparent">Earn Money</a>
                </div>
            </section>
            
            <!-- Users Section -->
            <section>
                <div class="d-flex">
                    Users
                    <a href="https://www.microsoft.com" target="_blank">
                        <img src="{{ asset('images/brand1.webp') }}" alt="Microsoft Logo" class="app-brand">
                    </a>
                    <a href="https://www.microsoft.com" target="_blank">
                        <img src="{{ asset('images/brand1.webp') }}" alt="Microsoft Logo" class="app-brand">
                    </a>
                    <a href="https://www.microsoft.com" target="_blank">
                        <img src="{{ asset('images/brand1.webp') }}" alt="Microsoft Logo" class="app-brand">
                    </a>
                </div>
            </section>
            
            <hr>
            
            <!-- Categories Section -->
            <section class="container mt-5">
                <h2 class="text-center mb-4">Popular Categories</h2>
                <div class="row">
                    <!-- Repeat this block for each category -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="category-image.jpg" class="card-img-top" alt="Category Image">
                            <div class="card-body">
                                <h5 class="card-title">Category 1</h5>
                                <p class="card-text">Brief description of the category.</p>
                                <a href="#" class="btn btn-primary">View Projects</a>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd category block -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="category-image.jpg" class="card-img-top" alt="Category Image">
                            <div class="card-body">
                                <h5 class="card-title">Category 2</h5>
                                <p class="card-text">Brief description of the category.</p>
                                <a href="#" class="btn btn-primary">View Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Footer -->
            <footer class="bg-white text-dark py-3">
                <p>&copy; 2023 crm dz All rights reserved.</p>
            </footer>
        </div>
    </div>
    
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
