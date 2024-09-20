
<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Tables - Basic Tables | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-aspnet-core-admin-template/">
    
    

    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('backend/css/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/core.css') }}"  />
    <link rel="stylesheet" href="{{ asset('backend/css/theme-default.css') }}"  />
    <link rel="stylesheet" href="{{ asset('backend/css/demo.css') }}" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" /> 
    <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" />
    

    <!-- Page CSS -->
    

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
    
</head>

<body>

  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
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
            
            
<h4 class="py-1 mb-2">
  <div class="row">
    <div class="col-md-6">
      <span class="text-muted fw-light">Dashboard /</span> Product Categories
    </div>
    <div class="col-md-6">
      <div class="btn-group pull-right" role="group" aria-label="First group">
                <button type="button" class="btn btn-danger pagination-btn" id="prev-btn"><i class="tf-icons bx bx-left-arrow"></i></button>
                <button type="button" class="btn btn-outline-danger current-page">0</button>
                <button type="button" class="btn btn-danger pagination-btn" id="next-btn"><i class="tf-icons bx bx-right-arrow"></i></button>
                <button type="button" class="btn btn-outline-danger">Records: <span id="to-records" class="mx-1">0</span> of <span id="total-records" class="mx-1">0</span></button>
              </div>
    </div>
  </div>
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th class="text-muted">ID</th>
          <th class="text-muted">Name</th>
          <th class="text-muted">Price</th>
          <th class="text-muted">Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0" id="fetched-data">
        
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->



          </div>
          <!-- / Content -->

          
  <input type="hidden" id="url" value="{{ url('') }}">        
<input type="hidden" id="json" value="{{ $json }}">
<!-- Footer -->

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
  <script src="../../assets/js/main.js"></script>
  

  <!-- Page JS -->
  
  <script type="text/javascript">
    $(document).ready(function(){
      var url        = $("#url").val();
      var json        = $("#json").val();
      var load_json   = url+'/'+json;

      var fetched_data = function(){
                $.ajax({
                url: load_json,
                type: 'GET',
                data: {},
                success: function(data){
                    if(data.total > 0){
                        $.each( data.data, function( key, value ) {
                            $("#fetched-data").append(
                                '<tr>'
                                   +'<tr>'
                                   +'<td>'+value.id+'</td>'
                                    +'<td class="text-danger"><i class="tf-icons bx bx-purchase-tag fa-lg me-1"></i><span class="fw-bolder">'+value.name+'</span></td>'
                                    +'<td><span class="badge bg-label-primary">'+value.price+'</span></td>'
                                    +'<td>'
                                      +'<button type="button" class="btn btn-icon btn-primary btn-sm me-1" cursorshover="true">'
                                          +'<span class="tf-icons bx bx-pencil" cursorshover="true"></span>'
                                        +'</button>'
                                      +'<button type="button" class="btn btn-icon btn-danger btn-sm" cursorshover="true">'
                                          +'<span class="tf-icons bx bx-trash" cursorshover="true"></span>'
                                        +'</button>'
                                    +'</td>'
                                  +'</tr> '
                                +'</tr>'
                            );
                        });
                        $(".data-loading").hide();

                        $("#to-records").text(data.to);
                        $("#total-records").text(data.total);
                        $(".current-page").text(data.current_page);
                                    
                        if(data.prev_page_url === null){
                            $("#prev-btn").attr('disabled',true);
                        }else{
                            $("#prev-btn").attr('disabled',false);
                        }
                        if(data.next_page_url === null){
                            $("#next-btn").attr('disabled',true);
                        }else{
                            $("#next-btn").attr('disabled',false);
                        }
                        $("#prev-btn").val(data.prev_page_url);
                        $("#next-btn").val(data.next_page_url);
                    }else{
                        $(".show-alert").show();
                        $(".pagination").hide();
                        $(".data-loading").hide();
                    }
                }
            });
            };

            fetched_data();

      $('.pagination-btn').click(function(){
                //clicked url json data
                $(".data-loading").show();
                $("#fetched-data").empty();
                var clicked_url = $(this).val();
                        
                $(this).siblings().removeClass('active')
                $(this).addClass('active');
                $.ajax({
                    url: clicked_url,
                    type: 'GET',
                    data: {},
                    success: function(data){
                        $.each( data.data, function( key, value ) {
                            $("#fetched-data").append(
                                '<tr>'
                                   +'<tr>'
                                   +'<td>'+value.id+'</td>'
                                    +'<td class="text-danger"><i class="tf-icons bx bx-map-pin fa-lg me-1"></i><span class="fw-bolder">'+value.name+'</span></td>'
                                    +'<td><span class="badge bg-label-primary">'+value.price+'</span></td>'
                                    +'<td>'
                                      +'<button type="button" class="btn btn-icon btn-primary btn-sm me-1" cursorshover="true">'
                                          +'<span class="tf-icons bx bx-pencil" cursorshover="true"></span>'
                                        +'</button>'
                                      +'<button type="button" class="btn btn-icon btn-danger btn-sm" cursorshover="true">'
                                          +'<span class="tf-icons bx bx-trash" cursorshover="true"></span>'
                                        +'</button>'
                                    +'</td>'
                                  +'</tr> '
                                +'</tr>'
                            );
                        });
                        $(".data-loading").hide();
                                

                        $("#to-records").text(data.to);
                        $(".current-page").text(data.current_page);
                        if(data.prev_page_url === null){
                            $("#prev-btn").attr('disabled',true);
                        }else{
                            $("#prev-btn").attr('disabled',false);
                        }
                        if(data.next_page_url === null){
                            $("#next-btn").attr('disabled',true);
                        }else{
                            $("#next-btn").attr('disabled',false);
                        }
                        $("#prev-btn").val(data.prev_page_url);
                        $("#next-btn").val(data.next_page_url);
                    }
                });
            });


    });
  </script>
  
</body>

</html>

<!-- beautify ignore:end -->

