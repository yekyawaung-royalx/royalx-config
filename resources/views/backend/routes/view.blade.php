<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
      <meta charset="utf-8" />
      <title>Royalx Core | View Route</title>
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
    	<script src="{{ asset('backend/js/template-customizer.js') }}"></script>
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
                                                        <div class="col-md-4">
                                                                <h5 class="py-2 mb-2">
                                                                        <a href="{{ url('admin/dashboard') }}" class="text-secondary fw-semibold">Dashboard </a> 
                                                                        <a href="{{ url('admin/routes') }}" class="text-secondary fw-semibold"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> Routes </a> 
                                                                        <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> View Route </span> 
                                                                </h5>
                                                        </div>
                                                </div>
            <div class="row">
                  <div class="col-lg-5">
<div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-2">
          <h5 class="m-0 me-2">
            {{ $route->FromBranchLabel }} ({{ $route->OperationRegion }})
            <span class="h3 text-muted"><i class="menu-icon tf-icons bx bx-directions" cursorshover="true"></i></span>
             {{ $route->ToBranchLabel }} ({{ $route->RelatedRegion }})
        </h5>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>From Branch Name</small>
                <h6 class="mb-0">{{ $route->BranchNameEn }} ({{ $route->BranchNameMm }})&nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>Branch Type</small>
                <h6 class="mb-0">{{ $route->Type }}&nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
            <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>RegionCode</small>
                <h6 class="mb-0">{{ $route->RegionCode }}&nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
            <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>Region Postal Code</small>
                <h6 class="mb-0">{{ $route->RegionPostalCode }}&nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>Route Status</small>
                <h6 class="mb-0">
                    @if($route->Active == 1)
                    <span class="badge rounded-pill bg-success">Opened</span>
                    @else
                    <span class="badge rounded-pill bg-danger">Closed</span>
                    @endif
                &nbsp;</h6>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
                  </div>
                  <div class="col-lg-7">
<div class="card">
  <h5 class="card-header">Related Routes</h5>
  <div class="card-body">
      <!-- Timeline Style -->
 
        <span class="text-light fw-medium">{{ $route->FromBranchLabel }} အထွက်လမ်းကြောင်းများ</span>
        <div class="demo-inline-spacing mt-2  scroll-card">
          <ul class="list-group list-group-timeline">
            @foreach($related_routes as $key => $related_route)
            <li class="list-group-item list-group-timeline-secondary py-1">
              <div class="card shadow-none bg-transparent border border-secondary mb-0">
      <div class="card-body py-1">
                  <div class="row">
                        <div class="col-md-2">
                        <h4 class="mb-2 mt-2"><code class="text-secondary ">{{ ++$key }}</code></h4>
                        </div>
                        <div class="col-md-6">
              <div class="row">
                    <div class="col-md-5">
                                    <span class="fw-semibold ">{{ $related_route->FromBranchLabel }}</span>
                              <br>[{{ $related_route->OperationRegion }}]
                    </div>
                    <div class="col-md-2 mb-2 mt-2 text-left">
<span class="h3 text-muted"><i class="menu-icon tf-icons bx bx-directions" cursorshover="true"></i></span>
                    </div>
<div class="col-md-5">
                          <span class="fw-semibold">{{ $related_route->ToBranchLabel }}</span>
                        <br>[{{ $related_route->RelatedRegion }}]
                    </div>
                  </div>

                        </div>
                        <div class="col-md-2 mb-2 mt-2">
<span class="badge rounded-pill {{ $related_route->DeliveryType=='same-day'? 'bg-info':'bg-primary' }}">{{ $related_route->DeliveryType  }}</span>
                        </div>
                <div class="col-md-2 mb-2 mt-2">
                                                <label class="switch switch-success">
                                                        <input type="checkbox" class="switch-input edit-active" value="{{ $related_route->Id }}" {{ $related_route->Active ==1? 'checked':'' }} />
                                                        <span class="switch-toggle-slider">
                                                               <span class="switch-on">
                                                                        <i class="bx bx-check"></i>
                                                                </span>
                                                                <span class="switch-off">
                                                                        <i class="bx bx-x"></i>
                                                                </span>
                                                        </span>
                                                </label>
                </div>
                  </div>
                        

                </div>
              </div>

                  </li>
            @endforeach
          </ul>
        </div>
   
      <!--/ Timeline Style -->
    
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

