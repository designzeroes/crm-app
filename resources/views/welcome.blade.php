<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.controlpanel.head')
<style>
    .bg{
        background-color:lightcyan;
    }
    .dot-pattern-bg {
    background-image: radial-gradient(circle, #000 5%, transparent 5%),
                      radial-gradient(circle, #000 5%, transparent 5%);
    background-size: 30px 30px;
    background-position: 0 0, 9px 9px;
}
.right{
    float:right;
}
.bg-img{

    background-image: url('{{ asset('images/bg1.jpg') }}');
}
</style>
</head>
<body class="bg">

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        <!-- Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <!-- Logo on the left -->
        <div class="app-brand justify-content-left">
            <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                    <!-- Your SVG logo code here -->
                    <svg
                                    width="25"
                                    viewBox="0 0 25 42"
                                    version="1.1"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                    <defs>
                                    <path
                                        d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                        id="path-1"
                                    ></path>
                                    <path
                                        d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                        id="path-3"
                                    ></path>
                                    <path
                                        d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                        id="path-4"
                                    ></path>
                                    <path
                                        d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                        id="path-5"
                                    ></path>
                                    </defs>
                                    <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                        <g id="Icon" transform="translate(27.000000, 15.000000)">
                                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                                            <mask id="mask-2" fill="white">
                                            <use xlink:href="#path-1"></use>
                                            </mask>
                                            <use fill="#696cff" xlink:href="#path-1"></use>
                                            <g id="Path-3" mask="url(#mask-2)">
                                            <use fill="#696cff" xlink:href="#path-3"></use>
                                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                            </g>
                                            <g id="Path-4" mask="url(#mask-2)">
                                            <use fill="#696cff" xlink:href="#path-4"></use>
                                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                            </g>
                                        </g>
                                        <g
                                            id="Triangle"
                                            transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                                        >
                                            <use fill="#696cff" xlink:href="#path-5"></use>
                                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                        </g>
                                        </g>
                                    </g>
                                    </g>
                                </svg>
                               
                </span>
                <span class="app-brand-text demo text-body fw-bolder">Sneat</span>
            </a>
            <a class="nav-link" href="#">How It Works</a>
            <a href="{{ route('frontjoblist') }}" class="btn ">Brows Jobs</a>
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
</nav><nav class="navbar navbar-expand-lg bg-secondary " style="padding-top: 0; padding-bottom: 0; ">
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
  <section class="jumbotron  text-white bg-img">
    <div class="container">
      <h1 class="display-4 text-white">Find the Perfect Resource</h1>
      <p class="lead">Get your work done by expert from market.</p>
      <p class="lead">World's best crm </p>
      <p class="lead">Any job you can possibly think of</p>
      <p class="lead">Save up to 90% & get quotes for free</p>
      <p class="lead">Pay only when you're 100% happy</p>
              <!-- Navigation elements on the right -->
              <div class="app-brand justify-content-end">
                @if (Route::has('login'))
                    <div class="header-controls sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary">Dashboard</a>
                        @else
                            <a href="{{ route('user-login') }}" class="btn btn-secondary">User Login</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('user-register') }}" class="btn btn-info ml-2">User Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
    </div>
  </section>
<section>

<div class"d-flex">
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
  <footer class="bg-white text-dark  py-3">
    <p>&copy; 2023 crm dz All rights reserved.</p>
  </footer>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Core JS -->
    @include('includes.controlpanel.scripts') 

</body>
</html>
