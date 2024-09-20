<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
      <title>Royalx Core | Dashboard</title>
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="{{ asset('backend/images/favicon.png') }}" />
      <!-- Icons -->
      <link rel="stylesheet" href="{{ asset('backend/css/boxicons.css') }}" />
      <link rel="stylesheet" href="{{ asset('backend/css/fontawesome.css') }}" />
      <link rel="stylesheet" href="{{ asset('backend/css/flag-icons.css') }}" />
      <!-- Core CSS -->
      <link rel="stylesheet" href="{{ asset('backend/css/core.css') }}"  />
      <link rel="stylesheet" href="{{ asset('backend/css/theme-default.css') }}"  />
      <link rel="stylesheet" href="{{ asset('backend/css/demo.css') }}" />
      <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" />
      <!-- Vendors CSS -->
      <link rel="stylesheet" href="{{ asset('backend/css/perfect-scrollbar.css') }}" />
      <link rel="stylesheet" href="{{ asset('backend/css/typeahead.css') }}" />
      <!-- Page CSS -->
      <link rel="stylesheet" href="{{ asset('backend/css/card-analytics.css') }}" />
      <!-- Helpers -->
      <script src="{{ asset('backend/js/helpers.js') }}"></script>
<script src="{{ asset('backend/js/config.js') }}"></script>

</head>
<body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar  ">
         <div class="layout-container">
            <!-- Menu -->
            @include('layouts.aside')
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
               <!-- Navbar -->
               @include('layouts.navbar')
               <!-- / Navbar -->
               <!-- Content wrapper -->
               <div class="content-wrapper">
                  <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
                     <div class="row">
                        <div class="col-sm-6 col-lg-3 mb-4">
                           <div class="card card-border-shadow-primary h-100">
                              <div class="card-body">
                                 <div class="d-flex align-items-center mb-2 pb-1">
                                    <div class="avatar me-2">
                                       <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-sitemap"></i></span>
                                    </div>
                                    <h4 class="ms-1 text-secondary mb-0">{{ total_branches()['active'] +total_branches()['inactive'] }}</h4>
                                 </div>
                                 <p class="mb-1 fw-bolder">Total Branches</p>
                                 <p class="mb-0">
                                    <span class="fw-medium text-muted me-1">{{ total_branches()['inactive'] }} Branches</span>
                                    <small class="text-danger">(Closed)</small>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4">
                           <div class="card card-border-shadow-primary h-100">
                              <div class="card-body">
                                 <div class="d-flex align-items-center mb-2 pb-1">
                                    <div class="avatar me-2">
                                       <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-map-pin"></i></span>
                                    </div>
                                    <h4 class="ms-1 text-secondary mb-0">{{ total_townships()['active'] +total_townships()['inactive'] }}</h4>
                                 </div>
                                 <p class="mb-1 fw-bolder">Total Townships</p>
                                 <p class="mb-0">
                                    <span class="fw-medium text-muted me-1">{{ total_townships()['inactive'] }} Townships</span>
                                    <small class="text-danger">(Closed)</small>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4">
                           <div class="card card-border-shadow-danger h-100">
                              <div class="card-body">
                                 <div class="d-flex align-items-center mb-2 pb-1">
                                    <div class="avatar me-2">
                                       <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-directions"></i></span>
                                    </div>
                                    <h4 class="ms-1 text-secondary mb-0">{{ total_routes()['active'] +total_routes()['inactive'] }}</h4>
                                 </div>
                                 <p class="mb-1 fw-bolder">Dispatch Routes</p>
                                 <p class="mb-0">
                                    <span class="fw-medium text-muted me-1">{{ total_routes()['inactive'] }} Routes</span>
                                    <small class="text-danger">(Closed)</small>
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-4">
                           <div class="card card-border-shadow-info h-100">
                              <div class="card-body">
                                 <div class="d-flex align-items-center mb-2 pb-1">
                                    <div class="avatar me-2">
                                       <span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-user-circle"></i></span>
                                    </div>
                                    <h4 class="ms-1 text-secondary mb-0">{{ total_employees()['active'] +total_employees()['inactive'] }}</h4>
                                 </div>
                                 <p class="mb-1 fw-bolder">Employees</p>
                                 <p class="mb-0">
                                    <span class="fw-medium text-muted me-1">{{ total_employees()['inactive'] }} Employees</span>
                                    <small class="text-danger">(Resigned)</small>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- / Content -->
                  <!-- Footer -->
                  <input type="hidden" id="url" value="{{ url('') }}">
                  @include('layouts.footer')
                  <!-- / Footer -->
                  <div class="content-backdrop fade"></div>
               </div>
               <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
         </div>
         <!-- Overlay -->
         <div class="layout-overlay layout-menu-toggle"></div>
         <!-- Drag Target Area To SlideIn Menu On Small Screens -->
         <div class="drag-target"></div>
      </div>
      <!-- / Layout wrapper -->  
      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="{{ asset('backend/js/jquery.js') }}"></script>
      <script src="{{ asset('backend/js/popper.js') }}"></script>
      <script src="{{ asset('backend/js/bootstrap.js') }}"></script>
      <script src="{{ asset('backend/js/perfect-scrollbar.js') }}"></script>
      <script src="{{ asset('backend/js/hammer.js') }}"></script>
      <script src="{{ asset('backend/js/i18n.js') }}"></script>
      <script src="{{ asset('backend/js/typeahead.js') }}"></script>
      <script src="{{ asset('backend/js/menu.js') }}"></script>
      <!-- endbuild -->
      <!-- Vendors JS -->
      <!-- Main JS -->
      <script src="{{ asset('backend/js/main.js') }}"></script>
      <!-- Page JS -->
   </body>
</html>
<!-- beautify ignore:end -->