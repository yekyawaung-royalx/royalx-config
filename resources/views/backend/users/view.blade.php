<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
      <meta charset="utf-8" />
      <title>Royalx Core | View User</title>
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
        <link rel="stylesheet" href="{{ asset('backend/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/toastr.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/animate.css') }}" />

    <link rel="stylesheet" href="{{ asset('backend/css/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" />
    <!-- Page CSS -->

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
                                                        <div class="col-md-4">
                                                                <h5 class="py-2 mb-2">
                                                                        <a href="{{ url('admin/dashboard') }}" class="text-secondary fw-semibold">Dashboard </a> 
                                                                        <a href="{{ url('admin/users') }}" class="text-secondary fw-semibold"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> Users </a> 
                                                                        <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> View User </span> 
                                                                </h5>
                                                        </div>
                                                </div>
            <div class="row">
                  <div class="col-lg-5">
<div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-2">
          <h5 class="m-0 me-2">
             {{ $user->EmployeeName }}
        </h5>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>EmployeeID</small>
                <h6 class="mb-0">{{ $user->EmployeeId }}&nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>Position</small>
                <h6 class="mb-0">{{ $user->Position }}&nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
            <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>AssignBranch</small>
                <h6 class="mb-0">{{ $user->AssignBranch }}&nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
            <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>AssignDepartment</small>
                <h6 class="mb-0">{{ $user->AssignDepartment }}&nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
            <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>CurrentBranch</small>
                <h6 class="mb-0">{{ $user->CurrentBranchName }}&nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>PhoneNo</small>
                <h6 class="mb-0">{{ $user->PhoneNo }}&nbsp;</h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>Active</small>
                <h6 class="mb-0">
                @if($user->Active == 1)
                    <span class="badge rounded-pill bg-success">Joined</span>
                    @else
                    <span class="badge rounded-pill bg-danger">Resigned</span>
                    @endif
                </h6>
              </div>
            </div>
          </li>
          <li class="list-unstyled">
             <hr class="m-0">
            </li>
          <li class="d-flex my-3 pb-1">
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>Remark</small>
                <h6 class="mb-0">{{ $user->Remark }}&nbsp;</h6>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
                  </div>
                  <div class="col-lg-7">
<div class="card">
  <h5 class="card-header w-100">Allowed Branches <a href="{{ url('admin/users/'.$user->Id.'/edit') }}" class="btn btn-secondary btn-sm pull-right">Edit User</a></h5>
  <div class="card-body">
      <!-- Timeline Style -->

      <!--/ Timeline Style -->
    <div class="row" id="allowed-branches">
        @foreach($allowed_branches as $branch)
       
        <div class="col-md-6">
            <div class="custom-option custom-option-basic border-secondary mb-2">
                 <span class="custom-option-header p-2">
                    
                  <span class="h6 mb-0 text-secondary">
                    @if($branch->Active == 1)
                    <span class="badge badge-center rounded-pill bg-success"><i class="bx bx-check"></i></span>
                    @else
                    <span class="badge badge-center rounded-pill bg-danger"><i class="bx bx-x"></i></span>
                    @endif
                    {{ $branch->BranchName }}
                </span>
                    <strong class="option-text"> <span class="badge bg-label-secondary">{{ $branch->RegionCode }}</span></strong>
                </span>
              </div>
            </div>
            @endforeach
    </div>
  </div>

</div>
                  </div>
            </div>
            



          </div>
          <!-- / Content -->



<!-- Footer -->
<input type="hidden" id="url" value="{{ url('') }}">
<input type="hidden" id="token" value="{{ csrf_token() }}">
<input type="hidden" id="user-id" value="{{ $user->Id }}">
<input type="hidden" id="user-name" value="{{ $user->EmployeeName }}">
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
    <script src="{{ asset('backend/js/select2.js') }}"></script>
    <script src="{{ asset('backend/js/tagify.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('backend/js/typeahead.js') }}"></script>
    <script src="{{ asset('backend/js/bloodhound.js') }}"></script>
    <script src="{{ asset('backend/js/sweetalert2.js') }}"></script>
    <script src="{{ asset('backend/js/extended-ui-sweetalert2.js') }}"></script>
 <script src="{{ asset('backend/js/ui-toasts.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('backend/js/main.js') }}"></script>

  <script src="{{ asset('backend/js/forms-selects.js') }}"></script>
  <!-- Page JS -->
<script type="text/javascript">
        $(document).ready(function(){
                var url              = $("#url").val();
                var json_routes   = $("#json-routes").val();


        });
  </script>
</body>
</html>
<!-- beautify ignore:end -->

