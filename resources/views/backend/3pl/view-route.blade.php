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
        <link rel="stylesheet" href="{{ asset('backend/css/toastr.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/animate.css') }}" />

      <!-- Vendors CSS -->
      <link rel="stylesheet" href="{{ asset('backend/css/perfect-scrollbar.css') }}" />
      <link rel="stylesheet" href="{{ asset('backend/css/typeahead.css') }}" /> 
        <link rel="stylesheet" href="{{ asset('backend/css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/sweetalert2.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" />

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
                                                                        <a href="{{ url('admin/routes') }}" class="text-secondary fw-semibold"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> 3PL Routes </a> 
                                                                        <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> View Route </span> 
                                                                </h5>
                                                        </div>
                                                </div>
            <div class="row">
                  <div class="col-lg-6">
<div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-2">
          <h5 class="m-0 me-2 text-primary">
            {{ $route->FromBranchName }}
            <span class="h3 text-muted"><i class="menu-icon tf-icons bx bx-directions" cursorshover="true"></i></span>
             {{ $route->ToBranchName }}
        </h5>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>From Branch Name</small>
                <h6 class="mb-0">{{ $route->FromBranchName }}&nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>Express Name</small>
                <h6 class="mb-0">{{ $route->ExpressNameMm }}&nbsp;({{ $route->ExpressNameEn }})</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
            <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>Station Name</small>
                <h6 class="mb-0">{{ $route->StationNameMm }}&nbsp;({{ $route->StationNameEn }})</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
            <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>Station Region Code</small>
                <h6 class="mb-0">{{ $route->StationRegionCode }}&nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li><li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>Service Type</small>
                <h6 class="mb-0"><span class="badge rounded-pill bg-primary }}">{{ $route->ServiceType }}</span>&nbsp;</h6>
              </div>
            </div>
          </li>
            <li class="list-unstyled">
             <hr class="m-0">
            </li><li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>SLA</small>
                <h6 class="mb-0">{{ $route->SLA }} Hours&nbsp;</h6>
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
                  <div class="col-lg-6">
<div class="card">
  <h5 class="card-header">Related Expresses</h5>
  <div class="card-body">
      <!-- Timeline Style -->
 
        <span class="text-light fw-medium">{{ $route->FromBranchName }} <i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> {{ $route->ToBranchName }} အထွက်လမ်းကြောင်းယျာဉ်များ</span>
        <div class="demo-inline-spacing mt-2  scroll-card">
          <ul class="list-group list-group-timeline">
            @foreach($related_routes as $key => $related_route)
            <li class="list-group-item list-group-timeline-secondary py-1">
              <div class="card shadow-none bg-transparent border border-secondary mb-0">
      <div class="card-body py-1">
                  <div class="row">
                        <div class="col-md-1">
                        <h4 class="mb-2 mt-2"><code class="text-secondary ">{{ ++$key }}</code></h4>
                        </div>
                        <div class="col-md-6">
                          <span class="fw-semibold ">{{ $related_route->ExpressNameMm }}</span>
                                      <br>[{{ $related_route->ExpressNameEn }}]
                        </div>
                        <div class="col-md-3 mb-2 mt-2">
                          @if($related_route->Default==1)
                          <button type="button" class="btn btn-primary badge rounded-pill btn-set-default disabled default-route default-route-{{ $related_route->Id }}" value="{{ $related_route->Id }}">Default</button>
                          @else
                          <button type="button" class="btn btn-danger badge rounded-pill btn-set-default default-route default-route-{{ $related_route->Id }}" value="{{ $related_route->Id }}">Set as Default</button>
                          @endif
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

          
          
<div class="bs-toast toast toast-placement-ex toast-top-right fade bg-secondary" id="successToast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
            <div class="toast-header">
                <i class="bx bx-bell me-2"></i>
                <div class="me-auto fw-medium">Success</div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close" cursorshover="true"></button>
            </div>
            <div class="toast-body">
                <span id="success-message">...</span>
            </div>
        </div>

        <div class="bs-toast toast toast-placement-ex toast-top-right fade  bg-danger" id="errorToast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
            <div class="toast-header">
                <i class="bx bx-bell me-2"></i>
                <div class="me-auto fw-medium">Error</div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close" cursorshover="true"></button>
            </div>
            <div class="toast-body">
                <span id="error-message"></span>
            </div>
        </div>
<!-- Footer -->
<input type="hidden" id="url" value="{{ url('') }}">
<input type="hidden" id="token" value="{{ csrf_token() }}">
<input type="hidden" id="from-branch" value="{{ $route->FromBranchName }}">
<input type="hidden" id="to-branch" value="{{ $route->ToBranchName }}">


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
    <script src="{{ asset('backend/js/bloodhound.js') }}"></script>
    <script src="{{ asset('backend/js/sweetalert2.js') }}"></script>
    <script src="{{ asset('backend/js/extended-ui-sweetalert2.js') }}"></script>
    <script src="{{ asset('backend/js/ui-toasts.js') }}"></script>
  
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
                        url: url+'/admin/3pl-services/route/change',
                        type: 'POST',
                        data: {
                                'Id'                                            :id,
                                'active': active,
                                '_token'                                :token
                        },
                        success: function(data){
                            if(data.success == 1){
                              $("#success-message").text(data.message);
                               $("#successToast").toast("show");
                             }else{
                              $("#error-message").text(data.message);
                              $("#errorToast").toast("show");
                            }
                        }
                });
            }); 

            $('body').delegate(".btn-set-default","click",function () {
                id = $(this).val();
                from_branch = $("#from-branch").val();
                to_branch = $("#to-branch").val();

                $.ajax({
                        url: url+'/admin/3pl-services/route/set-default',
                        type: 'POST',
                        data: {
                                'Id'                                            :id,
                                'from_branch' : from_branch,
                                'to_branch':to_branch,
                                '_token'                                :token
                        },
                        success: function(data){
                            if(data.success == 1){
                              $("#success-message").text(data.message);
                               $("#successToast").toast("show");

                              
                               $(".default-route").removeClass('btn-primary btn-danger disabled');
                               $(".default-route").addClass('btn-danger');
                               $(".default-route").text('Set as Default');


                               $(".default-route-"+id).text('Default');
                               $(".default-route-"+id).removeClass('btn-danger');
                               $(".default-route-"+id).addClass('btn-primary disabled');

                             }else{
                              $("#error-message").text(data.message);
                              $("#errorToast").toast("show");
                            }
                        }
                });
            }); 

            
        });
  </script>
</body>
</html>
<!-- beautify ignore:end -->

