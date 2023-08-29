<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.controlpanel.head')
<style>
    .dot-pattern-bg {
    background-image: radial-gradient(circle, #000 5%, transparent 5%),
                      radial-gradient(circle, #000 5%, transparent 5%);
    background-size: 30px 30px;
    background-position: 0 0, 15px 15px;
}

</style>
</head>
<body class="dot-pattern-bg">

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->
        <!-- Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
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
            <!-- Navbar -->

            <!-- Content wrapper -->
            <div class="container-xxl">
                <div class="authentication-wrapper authentication-basic container-p-y">
                    <div class="content-wrapper mt-5">
                        <!-- Content -->
                        <div class="card">
                            <div class="card-body">
                                <h3>Jobs</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Position</th>
                                            <th>Experience</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Laravel Developer</td>
                                            <td>3 years</td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Content -->
                        <!-- Footer -->
                        <footer class="content-footer footer bg-footer-theme"></footer>
                        <!-- / Footer -->
                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    @include('includes.controlpanel.scripts')
</body>
</html>
