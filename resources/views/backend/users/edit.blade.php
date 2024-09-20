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
                                                                        <span class="text-muted fw-light"><i class="tf-icon bx bx-chevrons-right" cursorshover="true"></i> Edit User </span> 
                                                                </h5>
                                                        </div>
                                                </div>
            <div class="row">
                  <div class="col-lg-5">
<div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-2 w-100">
          <h5 class="m-0 me-2">
             {{ $user->EmployeeName }}
             <button class="btn btn-secondary btn-sm pull-right" data-bs-toggle="modal" data-bs-target="#ResetPassword" cursorshover="true">Reset Password</button>
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
            <div class="w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small>CurrentBranch</small>
                <div class="row">
                    <div class="col-9">
                        <select id="current-branch" class="select2 form-select form-select-lg" data-allow-clear="true">
                            @foreach($allowed_branches as $current)
                            @if($current->Active == 1)
                            <option value="{{ $current->BranchId }}" {{ $current->BranchName==$user->CurrentBranchName? 'selected':'' }}>{{ $current->BranchName }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-3">
                       <button type="button" class="btn btn-secondary mb-2 btn-change pull-right w-100">Set</button>
                    </div>
                </div>
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
        <button type="button" class="btn btn-secondary mb-2">Save</button>
      </div>
    </div>
                  </div>
                  <div class="col-lg-7">
<div class="card">
  <h5 class="card-header">Access Branches <a href="{{ url('admin/users/'.$user->Id) }}" class="btn btn-secondary btn-sm pull-right">View User</a></h5>
  <div class="card-body">
      <!-- Timeline Style -->
 
        <div class="row">
        <div class="col-6 mb-3">
                                                            <label for="region" class="form-label">Region <span class="fw-bolder text-danger" >*</span></label>
                                                            <select id="region" class="select2 form-select form-select-lg" data-allow-clear="true">
                                                                @foreach($regions as $region)
                                                           <option value="{{ $region->RegionCode }}">{{ $region->PostalCode }}. {{ $region->EnName }}</option>
                                                           @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-6 mb-3">
                                                            <label for="branch" class="form-label">Allowed Branch <span class="fw-bolder text-danger" >*</span></label>
                                                            <select id="branch" class="select2 form-select form-select-lg" data-allow-clear="true">
                                                            </select>
                                                        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
         <button type="button" class="btn btn-secondary btn-sm mb-2 btn-add"><span class="tf-icons bx bx-plus" cursorshover="true"></span> Add Branch</button>
         </div>
     </div>
   <hr class="my-2">
      <!--/ Timeline Style -->
      <p class="mt-2 mb-0">Allowed Branches</p>
    <div class="row" id="allowed-branches">
        @foreach($allowed_branches as $branch)
       
        <div class="col-md-6">
            <div class="form-check custom-option custom-option-basic border-secondary mb-2">
              <label class="form-check-label custom-option-content form-check-secondary mb-0" for="customCheckTemp-{{ $branch->BranchName }}">
                <input class="form-check-input check-item" type="checkbox" value="{{ $branch->BranchId }}"  id="customCheckTemp-{{ $branch->BranchName }}" {{ $branch->Active==1? 'checked':'' }} />
                <span class="custom-option-header">
                  <span class="h6 mb-0">{{ $branch->BranchName }}</span>
                    <small class="badge bg-label-secondary">{{ $branch->RegionCode }}</small>
                </span>
              </label>
              </div>
            </div>
            @endforeach
    </div>
    <div class="row">
        <div class="col-md-12">
         <button type="button" class="btn btn-secondary mt-2 btn-save">Save</button>
         </div>
     </div>
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
                                <span id="success-message"></span>
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

  
<!-- Add Modal -->
    <div class="modal modal-top fade" id="ResetPassword" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTopTitle">Reset Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="NewPassword" class="form-label">New Password <span class="text-danger">*</span></label>
                            <input type="password" id="NewPassword" class="form-control border-danger" placeholder="******">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary btn-create disabled">Save</button>
                </div>
            </form>
        </div>
    </div>

  

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

                var routes        = json_routes;
                var token            = $("#token").val();
                 var checked_items = [];
                 var unchecked_items = [];
                    
             var fetched_related_branches = function(){
                    region_code     = $("#region").val();
                    label = $("#new-from-region :selected").val();
                    $("#related-region").text(label);

                    $.ajax({
                            url: url+'/json/fetched-branches',
                            type: 'POST',
                            data: {
                                    'region_code' : region_code,
                                    '_token'          :token
                            },
                            success: function(data){
                                 $('#branch').empty(); 
                            
                                $.each(data, function (i, item) {
                                    $('#branch').append('<option value="'+item['Id']+'">'+item['BranchNameEn']+' ('+item['BranchNameMm']+')</option>' );
                                
                                    
                                });
                            }
                    });
                }

                $('#region').on("change",function search(e) {
                fetched_related_branches();
            });



             $('body').delegate(".btn-save","click",function () {
                checked_items=[];
                unchecked_items=[];

                user_id                   = $("#user-id").val();
                user_name                  = $("#user-name").val();

                active = 1;

                $(".check-item").each(function(){
                        if($(this).is(':checked')){
                            checked_items.push($(this).val());
                        }else{
                            unchecked_items.push($(this).val());
                        }
                        
                    });


      


                //console.log('checked_items'+checked_items);
                 //console.log('unchecked_items'+unchecked_items);

                $.ajax({
                        url: url+'/admin/allowed-branches',
                        type: 'POST',
                        data: {
                            'UserId':user_id,
                            'UserName':user_name,
                                'CheckedItems':checked_items,
                                'UnCheckedItems':unchecked_items,
                                'Active'                                        :active,
                                '_token'                                :token
                        },
                        success: function(data){
                        if(data.success == 1){
                            $('#AddNewPackage').modal('hide');
                            $("#fetched-data").empty();

                            $("#success-message").text(data.message);
                            $("#successToast").toast("show");

                            fetched_data(); 
                        }else{
                            $("#error-message").text(data.message);
                            $("#errorToast").toast("show");
                        }

                        }
                });
            });

              $('body').delegate(".btn-add","click",function () {
                var branch = $("#branch").val();
                 var label = $("#branch :selected").text();
                 var region = $("#region :selected").val();

              $('#allowed-branches').append('<div class="col-md-6"><div class="form-check custom-option custom-option-basic border-success mb-2">'
              +'<label class="form-check-label custom-option-content form-check-secondary mb-0" for="customCheckTempname">'
                +'<input class="form-check-input check-item" type="checkbox" value="'+branch+'"  id="customCheckTempname" checked/>'
                +'<span class="custom-option-header">'
                  +'<span class="h6 mb-0">'+label+'</span>'
                +'<small class="badge bg-label-secondary">'+region+'</small>'
                +'</span>'
              +'</label>'
              +'</div>'
            +'</div>');

               $('#current-branch').append('<option value="'+branch+'">'+label+' </option>' );

            });

              $('body').delegate(".btn-change","click",function () {
                var branch_id = $("#current-branch :selected").val();
                var branch_name = $("#current-branch :selected").text();
              var user_id                   = $("#user-id").val();
                    $.ajax({
                        url: url+'/admin/set-default-branch',
                        type: 'POST',
                        data: {
                            'UserId':user_id,
                            'CurrentBranchId':branch_id,
                            'CurrentBranchName':branch_name,
                                '_token'                                :token
                        },
                        success: function(data){
                        if(data.success == 1){
                            $('#AddNewPackage').modal('hide');
                            $("#fetched-data").empty();

                            $("#success-message").text(data.message);
                            $("#successToast").toast("show");

                            fetched_data(); 
                        }else{
                            $("#error-message").text(data.message);
                            $("#errorToast").toast("show");
                        }

                        }
                });
              
                });

             fetched_related_branches();

        });
  </script>
</body>
</html>
<!-- beautify ignore:end -->

