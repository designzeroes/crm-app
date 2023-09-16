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
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">


         <!-- Layout container -->
        <div class="layout-page">


             <!-- Content wrapper -->
          <div class="content-wrapper">
               <!-- Content -->     
                   @yield('content')
               <!-- Content --> 

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
  