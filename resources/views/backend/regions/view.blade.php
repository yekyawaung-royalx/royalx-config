<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
      <meta charset="utf-8" />
      <title>Royalx Core | View Region</title>
      <link rel="icon" type="image/x-icon" href="{{ asset('backend/images/favicon.png') }}" />

      <link rel="stylesheet" href="{{ asset('backend/css/boxicons.css') }}" />
      <link rel="stylesheet" href="{{ asset('backend/css/fontawesome.css') }}" />
      <link rel="stylesheet" href="{{ asset('backend/css/flag-icons.css') }}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/core.css') }}"  />
        <link rel="stylesheet" href="{{ asset('backend/css/theme-default.css') }}"  />
        <link rel="stylesheet" href="{{ asset('backend/css/demo.css') }}" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/perfect-scrollbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/typeahead.css') }}" /> 

        <!-- Page CSS -->
        <!-- Helpers -->
        <script src="{{ asset('backend/js/helpers.js') }}"></script>
        <script src="{{ asset('backend/js/config.js') }}"></script>
        <style type="text/css">
          .app-logistics-fleet-wrapper .app-logistics-fleet-sidebar{
                overflow: scroll !important;
          }
          .scroll-card{
                max-height: 600px;
                overflow: scroll;
          }
        </style>
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
        
      <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
<div class="row">
                            <div class="col-md-6">
                                <h5 class="py-2 mb-2">
                                    <a href="{{ url('admin/dashboard') }}" class="text-secondary fw-semibold">Dashboard </a> 
                                   <a href="{{ url('admin/regions') }}" class="text-secondary fw-semibold"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> Regions</a> 
                                   <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> View Region </span> 
                                </h5>
                            </div>
                            <div class="col-md-8">
                               
                            </div>
                        </div>
            <div class="row">
                  <div class="col-lg-6">
                  	<div class="card h-100">
      <div class="card-body">
      	@if(!$region)
	<div class="alert alert-warning d-flex" role="alert">
          <span class="badge badge-center rounded-pill bg-warning border-label-warning p-3 me-2"><i class="bx bx-bell fs-6"></i></span>
          <div class="d-flex flex-column ps-1">
            <h6 class="alert-heading d-flex align-items-center mb-1">We are sorry!</h6>
            <span>The content you are looking for is not exist.</span>
          </div>
        </div>
        @else
        <ul class="p-0 m-0">
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Region En Name</small>
                <h6 class="mb-0">{{ $region->EnName }} &nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Region Mm Name</small>
                <h6 class="mb-0">{{ $region->MmName }} &nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Postal Code</small>
                <h6 class="mb-0"><span class="badge bg-secondary">{{ $region->PostalCode }}</span> &nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">RegionCode</small>
                <h6 class="mb-0"><span class="badge bg-secondary">{{ $region->RegionCode }}</span>&nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Type</small>
                <h6 class="mb-0">{{ $region->Type }}&nbsp;</h6>
              </div>
            </div>
          </li>
        </ul>
        @endif
      </div>
    </div>


                  </div>

            </div>
            



          </div>
          <!-- / Content -->

          
          

<!-- Footer -->
<input type="hidden" id="url" value="{{ url('') }}">
<input type="hidden" id="token" value="{{ csrf_token() }}">
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
  <script src="{{ asset('backend/js/apexcharts.js') }}"></script>

  <!-- Main JS -->
<script src="{{ asset('backend/js/main.js') }}"></script>
  <!-- Page JS -->
<script type="text/javascript">
        $(document).ready(function(){
                var url              = $("#url").val();
                var json_routes   = $("#json-routes").val();

                var routes        = json_routes;
                var token            = $("#token").val();
                    

            $('body').delegate(".edit-active","change",function () {
                id = $(this).val();

                if ($(this).is(":checked") ) {
                    active = 1;
                }else{
                    active = 0;
                }

                $.ajax({
                        url: url+'/admin/routes/change',
                        type: 'POST',
                        data: {
                                'Id'                                            :id,
                                'active': active,
                                '_token'                                :token
                        },
                        success: function(data){
                            console.log(data);
                        }
                });
            }); 
        });
  </script>
</body>
</html>
<!-- beautify ignore:end -->

