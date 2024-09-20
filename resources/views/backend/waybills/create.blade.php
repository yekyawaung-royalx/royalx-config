
<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Selects and tags - Forms | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-aspnet-core-admin-template/">
    
    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5DDHKGP');</script>
    <!-- End Google Tag Manager -->
    
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
    <link rel="stylesheet" href="{{ asset('backend/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('backend/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('backend/css/demo.css') }}" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/typeahead.css') }}" /> 
    <link rel="stylesheet" href="{{ asset('backend/css/select2.css') }}" />

<link rel="stylesheet" href="{{ asset('backend/css/tagify.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/css/bootstrap-select.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/css/typeahead.css') }}" />
<link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" />
    <!-- Page CSS -->
    

<script src="{{ asset('backend/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('backend/js/config.js') }}"></script>
    
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
            
            
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Waybills /</span> Create Waybill
</h4>

<div class="row block-section-1">
  <div class="col-6">
    <div class="card mb-4">
        <h5 class="card-header">ပေးပို့သူ၏ အချက်အလက်</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                  <div class="mb-2">
                    <label for="defaultFormControlInput" class="form-label">ပေးပို့သူ ဖုန်းနံပါတ်</label>
                    <input id="TypeaheadBasic" class="form-control typeahead" type="text" autocomplete="off" placeholder="09XXXXXXX" />
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-2">
                    <label for="defaultFormControlInput" class="form-label">ပေးပို့သူ အမည်</label>
                    <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Aung Aung" aria-describedby="defaultFormControlHelp">
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                  <div class="mb-2">
                    <label for="from-city" class="form-label">ပေးပို့သူ မြို့</label>
                    <select id="from-city" class="select2 form-select form-select-lg" data-allow-clear="true">
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-2">
                  <label for="from-city" class="form-label">ပြည်နယ်/တိုင်း (မှတ်ပုံတင်ဖြည့်ရန်)</label>
                  <select id="receiver_state" class="select2 form-select form-select-lg">
                    
                  </select>
                </div>
                </div>
            </div>



            
            
            <div class="mb-2">
              <div class="row">
                <div class="col-3">
                  <label for="from-city" class="form-label">ကုဒ်</label>
                  <select id="statecode" class="select2 form-select form-select-lg">
                    <option value="AK">10</option>
                    <option value="HI">Hawaii</option>
                  </select>
                </div>
                <div class="col-3">
                  <label for="from-city" class="form-label">မြို့နယ်</label>
                  <select id="township" class="select2 form-select form-select-lg">
                    <option value="AK">10</option>
                    <option value="HI">Hawaii</option>
                  </select>
                </div>
                <div class="col-3">
                  <label for="from-city" class="form-label">အမျိုးအစား</label>
                  <select id="type" class="select2 form-select form-select-lg">
                    <option value="AK">10</option>
                    <option value="HI">Hawaii</option>
                  </select>
                </div>
                <div class="col-3">
                  <label for="from-city" class="form-label">နံပါတ်</label>
                  <input type="text" class="form-control" id="defaultFormControlInput" placeholder="192641" aria-describedby="defaultFormControlHelp">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <label for="exampleFormControlTextarea1" class="form-label">ပေးပို့သူ လိပ်စာအပြည့်အစုံ</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
        </div>
      </div>
  </div>
  <div class="col-6">
    <div class="card mb-4">
        <h5 class="card-header">လက်ခံမည့်သူ၏ အချက်အလက်</h5>
        <div class="card-body">
            <!-- Basic -->
            <div class="mb-2">
              <label for="defaultFormControlInput" class="form-label">လက်ခံမည့်သူ အမည်</label>
              <input type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp">
            </div>
            <div class="mb-2">
              <label for="defaultFormControlInput" class="form-label">လက်ခံမည့်သူ ဖုန်းနံပါတ်</label>
              
            </div>
            <div class="mb-2">
              <label for="to-city" class="form-label">လက်ခံမည့်သူ မြို့</label>
              <select id="to-city" class="select2 form-select form-select-lg" data-allow-clear="true">
                <option value="AK">Alaska</option>
                <option value="HI">Hawaii</option>
              </select>
            </div>
            <div class="mb-2">
              <label for="exampleFormControlTextarea1" class="form-label">လက်ခံမည့်သူ လိပ်စာအပြည့်အစုံ</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
      </div>
  </div>
</div>

<div class="row block-section-1 ">
  <div class="col-6">
    <div class="card mb-4">
        <h5 class="card-header">ပေးပို့မည့်ပစ္စည်း အချက်အလက်</h5>
        <div class="card-body">
            <!-- Basic -->
            <div class="mb-2">
              <label for="defaultFormControlInput" class="form-label">ပစ္စည်း အမျိုးအစား</label>
              <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Aung Aung" aria-describedby="defaultFormControlHelp">
            </div>
            <div class="mb-2">
              <label for="defaultFormControlInput" class="form-label">သတ်မှတ်ထားသော ပစ္စည်းတန်ဖိုး</label>
              <div class="input-group">
                <span class="input-group-text">ကျပ်</span>
                <input type="number" class="form-control" placeholder="Amount" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
              </div>
            </div>
            <div class="mb-2">
              <div class="row block-section-1 ">
                <div class="col-6">
                    <label for="defaultFormControlInput" class="form-label">ပစ္စည်း အလေးချိန်</label>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="1" aria-label="Recipient's username with two button addons">
                      <button class="btn btn-outline-primary" type="button" cursorshover="true">-</button>
                      <button class="btn btn-outline-primary" type="button" cursorshover="true">+</button>
                    </div>
                  </div>
                <div class="col-6">
                  <div class="mb-2">
                    <label for="defaultFormControlInput" class="form-label">ပစ္စည်းပို့ ငွေကောက်</label>
                    <div class="input-group">
                      <span class="input-group-text">ကျပ်</span>
                      <input type="number" class="form-control" placeholder="0" aria-label="Amount ">
                      <span class="input-group-text">.00</span>
                    </div>
                  </div>
                </div>

                </div>
              </div>  
            <div class="mb-2">
              <div class="row block-section-1 ">
                <div class="col-6">
                <div class="mb-2">
                  <label for="defaultFormControlInput" class="form-label">ဝန်ဆောင်မှု ကျသင့်ငွေ</label>
                  <div class="input-group">
                    <span class="input-group-text">ကျပ်</span>
                    <input type="number" class="form-control" placeholder="0" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                  </div>
                </div>
                </div>
                <div class="col-6">
    <div class="mb-2">
              <label for="defaultFormControlInput" class="form-label">ပစ္စည်းပို့ကျသင့်ငွေ ကျသင့်ငွေ</label>
              <div class="input-group">
          <span class="input-group-text">ကျပ်</span>
          <input type="number" class="form-control" placeholder="0" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-text">.00</span>
        </div>
            </div>
                </div>
              </div>
            </div>
            
        </div>
      </div>
  </div>
  <div class="col-6">
    <div class="card mb-4">
        <h5 class="card-header">ပေးပို့မည့်ပစ္စည်း ဓာတ်ပုံများ</h5>
        <div class="card-body">
            <!-- Basic -->
            <div class="row block-section-1 ">
              <div class="col-">
                <div class="avatar avatar-xl">
                  <img src="https://demos.themeselection.com/sneat-bootstrap-html-django-admin-template/assets/img/avatars/1.png" alt="Avatar" cursorshover="true">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <label for="exampleFormControlTextarea1" class="form-label">ဓာတ်ပုံတင်ရန်</label>
              <div class="input-group">
          <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" cursorshover="true">
          <button class="btn btn-outline-primary" type="button" id="inputGroupFileAddon04">တင်မည်</button>
        </div>
            </div>
        </div>
      </div>
  </div>
</div>

<div class="row ">
  <div class="col-12">
  <div class="card mb-4">
          <div class="card-body justify-content-center">
            <button type="button" class="btn btn-primary" cursorshover="true">
                            <span class="tf-icons bx bx-chevrons-left me-1"></span> ရှေ့သို့
                          </button>

            <button type="button" class="btn btn-primary" cursorshover="true">
                             နောက်သို့ <span class="tf-icons bx bx-chevrons-right me-1"></span>
                          </button>
          </div>
  </div>
</div>
</div>

            
<div class="row">

 

  <!-- Bootstrap Select -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Bootstrap Select</h5>
      <div class="card-body">
        <div class="row">
          <!-- Basic -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerBasic" class="form-label">Basic</label>
            <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
              <option>Rocky</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Group -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerGroups" class="form-label">Groups</label>
            <select id="selectpickerGroups" class="selectpicker w-100" data-style="btn-default">
              <optgroup label="Movies">
                <option>Rocky</option>
                <option>Pulp Fiction</option>
                <option>The Godfather</option>
              </optgroup>
              <optgroup label="Series">
                <option>Breaking Bad</option>
                <option>Black Mirror</option>
                <option>Money Heist</option>
              </optgroup>
            </select>
          </div>
          <!-- Multiple -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerMultiple" class="form-label">Multiple</label>
            <select id="selectpickerMultiple" class="selectpicker w-100" data-style="btn-default" multiple data-icon-base="bx" data-tick-icon="bx-check text-primary">
              <option>Rocky</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Live Search -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerLiveSearch" class="form-label">Live Search</label>
            <select id="selectpickerLiveSearch" class="selectpicker w-100" data-style="btn-default" data-live-search="true">
              <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
              <option data-tokens="mustard">Burger, Shake and a Smile</option>
              <option data-tokens="frosting">Sugar, Spice and all things nice</option>
            </select>
          </div>
          <!-- Icons -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerIcons" class="form-label">Icons</label>
            <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
              <option data-icon="bx bxl-instagram">Instagram</option>
              <option data-icon="bx bxl-pinterest-alt">Pinterest</option>
              <option data-icon="bx bxl-twitch">Twitch</option>
            </select>
          </div>
          <!-- Subtext -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerSubtext" class="form-label">Subtext</label>
            <select id="selectpickerSubtext" class="selectpicker w-100" data-style="btn-default" data-show-subtext="true">
              <option data-subtext="Framework">React</option>
              <option data-subtext="Styles">Sass</option>
              <option data-subtext="Markup">HTML</option>
            </select>
          </div>
          <!-- Selection Limit -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerSelection" class="form-label">Selection Limit</label>
            <select id="selectpickerSelection" class="selectpicker w-100" data-style="btn-default" multiple data-max-options="2">
              <option>Rocky</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Select / Deselect All -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerSelectDeselect" class="form-label">Select / Deselect All</label>
            <select id="selectpickerSelectDeselect" class="selectpicker w-100" data-style="btn-default" multiple data-actions-box="true">
              <option>Rocky</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Divider -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerDivider" class="form-label">Divider</label>
            <select id="selectpickerDivider" class="selectpicker w-100" data-style="btn-default">
              <option>Rocky</option>
              <option data-divider="true">divider</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Header -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerHeader" class="form-label">Header</label>
            <select id="selectpickerHeader" class="selectpicker w-100" data-style="btn-default" data-header="Select a Movie">
              <option>Rocky</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Disabled -->
          <div class="col-md-6 mb-4 mb-md-0">
            <label for="selectpickerDisabled" class="form-label">Disabled</label>
            <select id="selectpickerDisabled" class="selectpicker w-100" data-style="btn-default" disabled>
              <option>Rocky</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Disabled Options -->
          <div class="col-md-6">
            <label for="selectpickerDisabledOptions" class="form-label">Disabled Options</label>
            <select id="selectpickerDisabledOptions" class="selectpicker w-100" data-style="btn-default">
              <option>Rocky</option>
              <option disabled>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Bootstrap Select -->


</div>

          </div>
          <!-- / Content -->

          
          

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © <script>
      document.write(new Date().getFullYear())

      </script>
      , made with ❤️ by <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">ThemeSelection</a>
    </div>
    <div class="d-none d-lg-inline-block">
      
      <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
      <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
      
      <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/net-core-introduction.html" target="_blank" class="footer-link me-4">Documentation</a>
      
      
      <a href="https://themeselection.com/support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
      
    </div>
  </div>
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
    
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    
  </div>
  <!-- / Layout wrapper -->

<input type="" id="url" url="{{ url('') }}">
  

  

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

  <!-- Main JS -->
  <script src="{{ asset('backend/js/main.js') }}"></script>
  

  <!-- Page JS -->
  <script src="{{ asset('backend/js/forms-selects.js') }}"></script>
<script src="{{ asset('backend/js/forms-tagify.js') }}"></script>
<script src="{{ asset('backend/js/forms-typeahead.js') }}"></script>

<script>
  var url = '';
    $.getJSON(url+'/backend/js/NRC_Data.json', function(state) {
            //sorting array
            function getSorting(prop) {
                return function(a, b) {
                    if (a[prop] > b[prop]) {
                        return 1;
                    } else if (a[prop] < b[prop]) {
                        return -1;
                    }
                    return 0;
                }
            }
            console.log(state.nrcStates);

        for(var i = 0; i < state.nrcStates.length; i++) {
          $("#receiver_state").append('<option value="AK">'+state.nrcStates[i].name.en+' ('+state.nrcStates[i].name.mm+')</option>');
        };

        $('#receiver_state').on("change",function search(e) {
            alert('y');
        });

          //state.sort(getSorting("states_and_regions"));
    });
    

    //console.log(state);
//            
</script>
  
</body>

</html>

<!-- beautify ignore:end -->

