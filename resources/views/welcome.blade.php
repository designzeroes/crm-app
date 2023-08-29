<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{asset('assets')}}/"
  data-template="vertical-menu-template-free"
>
  <head>
   @include('includes.controlpanel.head')
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar ">
      <div class="layout-container">
        <!-- Menu -->
      

           <!-- Menu -->

         <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            @if (Route::has('login'))
<div class="header-controls sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
    @auth
    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
    @else
    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
    @endif
    @endauth
</div>
@endif
               <!-- Navbar -->

             <!-- Content wrapper -->
          <div class="content-wrapper">
               <!-- Content -->     
   <h2>Jobs</h2>
   <table>
    <tr>
        <th>position</th>
        <th>experience</th>
    </tr>
    <tbody>
        <tr>

        </tr>
    </tbody>
   </table>
               <!-- Content --> 
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
   
              </footer>
              <!-- / Footer -->
  
              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
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
  