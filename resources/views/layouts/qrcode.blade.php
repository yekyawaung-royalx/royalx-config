<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>QR</title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->

    <!-- End Google Tag Manager -->


    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('backend/css/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('backend/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('backend/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/sweetalert2.css') }}" />

    <!-- Vendor -->
<link rel="stylesheet" href="{{ asset('backend/css/formValidation.min.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
<link rel="stylesheet" href="{{ asset('backend/css/page-auth.css') }}">
    <!-- Helpers -->
    <script src="{{ asset('backend/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('backend/js/config.js') }}"></script>
</head>

<body>


  
  <!-- Content -->

<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
      <!-- Register -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center">
            <a href="index.html" class="app-brand-link gap-2">
              <span class="app-brand-logo demo">



</span>
              <span class="fw-bolder">Please can QR code with phone</span>
            </a>
          </div>
          <!-- /Logo -->

          <p class="text-center">
           <img id="qr-code" src="">
          </p>

          <div class="divider my-4">
            <div class="divider-text">or</div>
          </div>

          <div class="d-flex justify-content-center">
            <div class="mb-3">
              <button type="button" class="btn btn-primary d-grid w-100" type="submit">Verify</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
</div>

<!-- / Content -->

  
<input type="hidden" id="url" value="{{ url('') }}">

<input type="" id="token" value="{{  $data['_token'] }}">
<input type="" id="email" value="{{  $data['email'] }}">
<input type="" id="password" value="{{  $data['password'] }}">
  

  

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
  <script src="{{ asset('backend/js/FormValidation.min.js') }}"></script>
<script src="{{ asset('backend/js/Bootstrap5.min.js') }}"></script>
<script src="{{ asset('backend/js/AutoFocus.min.js') }}"></script>
    <script src="{{ asset('backend/js/sweetalert2.js') }}"></script>
    <script src="{{ asset('backend/js/extended-ui-sweetalert2.js') }}"></script>

  <!-- Main JS -->
  <script src="{{ asset('backend/js/main.js') }}"></script>

  <!-- Page JS -->
  <script src="{{ asset('backend/js/pages-auth.js') }}"></script>
   <script type="text/javascript">
     $(document).ready(function(){
        var url              = $("#url").val();
        var email    = $("#email").val();
        var password    = $("#password").val();
        var token    = $("#token").val();
        var id = '';

        var verify_user = function(){
                $.ajax({
                    url: url+'/admin/verify-user',
                    type: 'POST',
                    data: {
                        'email':email,
                         '_token':token
                    },
                    success: function(data){
                        id=data;
                        raw = '?email='+email+'&password='+password+'&_token='+token;
                        var generate_qr = url+'/admin/verify-qr?id='+data+'&_token='+token;
                        var alternate_qr = url+'/admin/verify-qr?id='+data+',_token='+token;

                        $("#qr-code").attr("src","https://qrcode.tec-it.com/API/QRCode?&size=small&data="+alternate_qr);
                        console.log(alternate_qr);
                    }
                });
            }

        var sent_data = function(){
                $.ajax({
                    url: url+'/login',
                    type: 'POST',
                    data: {
                        'email':email,
                        'password':password,
                        '_token':token
                    },
                    success: function(data){
                             $(location).prop('href', url+'/admin/dashboard');
                       console.log(data.message);
                    }
                });
            }

            var verified = function(){
                $.ajax({
                    url: url+'/admin/verified-user',
                    type: 'POST',
                    data: {
                        'id':id,
                        '_token':token
                    },
                    success: function(data){
                        if(data==1){
                                        $.ajax({
                                url: url+'/admin/delete-qr',
                                type: 'POST',
                                data: {
                                    'id':id,
                                    '_token':token
                                },
                                success: function(data){
                                    
                                    Swal.fire({
                                        title:"Verified!",
                                        text:"Your acc is verified.",
                                        icon:"success",
                                        customClass:{confirmButton:"btn btn-info"},
                                        buttonsStyling:!1
                                    });

                                    var interval = setInterval(function() {
                                        sent_data();
                                }, 3000);
                                    
                            }
                            });
                        }else{
                            //$(location).prop('href', url+'/login');
                        }
                    }
                });
            }


           var interval = setInterval(function() {
               // method to be executed;
            verified();
             }, 5000);

            

            verify_user();
     });
 </script>
</body>

</html>

<!-- beautify ignore:end -->

