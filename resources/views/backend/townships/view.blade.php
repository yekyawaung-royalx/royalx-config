<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

         <title>Royalx Core | Townships</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('backend/images/favicon.png') }}" />

        <link rel="stylesheet" href="{{ asset('backend/css/boxicons.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/fontawesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/flag-icons.css') }}" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/core.css') }}"/>
        <link rel="stylesheet" href="{{ asset('backend/css/theme-default.css') }}"/>
        <link rel="stylesheet" href="{{ asset('backend/css/demo.css') }}" />
    
        <!-- Vendors CSS -->
        <link rel="stylesheet" href="{{ asset('backend/css/perfect-scrollbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/typeahead.css') }}" /> 
        <link rel="stylesheet" href="{{ asset('backend/css/select2.css') }}" />

        <link rel="stylesheet" href="{{ asset('backend/css/tagify.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/bootstrap-select.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/typeahead.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/sweetalert2.css') }}" />
        <link rel="stylesheet" href="{{ asset('backend/css/custom.css') }}" />
        <!-- Page CSS -->
    
        <script src="{{ asset('backend/js/helpers.js') }}"></script>
        <script src="{{ asset('backend/js/config.js') }}"></script>
    <style type="text/css">
    	.app-logistics-fleet-wrapper .app-logistics-fleet-sidebar{
    		overflow: scroll !important;
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


                    @if(!$township)
<div class="card">
                         <div class="card-body">
        <div class="alert alert-warning d-flex" role="alert">
          <span class="badge badge-center rounded-pill bg-warning border-label-warning p-3 me-2"><i class="bx bx-bell fs-6"></i></span>
          <div class="d-flex flex-column ps-1">
            <h6 class="alert-heading d-flex align-items-center mb-1">We are sorry!</h6>
            <span>The content you are looking for is not exist.</span>
          </div>
        </div>
                        </div>
                    </div>
                     @else
                    <div class="row">
                <div class="col-lg-5">
                        <div class="card h-100">
                          <div class="card-header d-flex align-items-center justify-content-between pb-0">
                            <div class="card-title mb-0">
                              <h6 class="mb-0">{{ $township->TownshipNameMm }} ({{ $township->TownshipNameEn }})</h6>
                             </div>
                          </div>
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                              <div class="d-flex flex-column align-items-center gap-1">
                                <h2 class="mb-2"><code class="text-secondary">{{ $township->PostalCode }}</code></h2>
                                <span>PostalCode</span>
                              </div>
                              <div id="orderStatisticsChart" style="min-height: 137.55px;"><div id="apexchartsq8wr1c3" class="apexcharts-canvas apexchartsq8wr1c3 apexcharts-theme-light" style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg2120" width="130" height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2122" class="apexcharts-inner apexcharts-graphical" transform="translate(-7, 0)"><defs id="SvgjsDefs2121"><clipPath id="gridRectMaskq8wr1c3"><rect id="SvgjsRect2124" width="150" height="173" x="-4.5" y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskq8wr1c3"></clipPath><clipPath id="nonForecastMaskq8wr1c3"></clipPath><clipPath id="gridRectMarkerMaskq8wr1c3"><rect id="SvgjsRect2125" width="145" height="172" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG2126" class="apexcharts-pie"><g id="SvgjsG2127" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle2128" r="44.835365853658544" cx="70.5" cy="70.5" fill="transparent"></circle><g id="SvgjsG2129" class="apexcharts-slices"><g id="SvgjsG2130" class="apexcharts-series apexcharts-pie-series" seriesName="Electronic" rel="1" data:realIndex="0"><path id="SvgjsPath2131" d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" fill="rgba(105,108,255,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="153" data:startAngle="0" data:strokeWidth="5" data:value="85" data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z" stroke="#ffffff"></path></g><g id="SvgjsG2132" class="apexcharts-series apexcharts-pie-series" seriesName="Sports" rel="2" data:realIndex="1"><path id="SvgjsPath2133" d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" fill="rgba(133,146,163,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="27" data:startAngle="153" data:strokeWidth="5" data:value="15" data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z" stroke="#ffffff"></path></g><g id="SvgjsG2134" class="apexcharts-series apexcharts-pie-series" seriesName="Decor" rel="3" data:realIndex="2"><path id="SvgjsPath2135" d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" fill="rgba(3,195,236,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="90" data:startAngle="180" data:strokeWidth="5" data:value="50" data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z" stroke="#ffffff"></path></g><g id="SvgjsG2136" class="apexcharts-series apexcharts-pie-series" seriesName="Fashion" rel="4" data:realIndex="3"><path id="SvgjsPath2137" d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" fill="rgba(113,221,55,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="90" data:startAngle="270" data:strokeWidth="5" data:value="50" data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z" stroke="#ffffff"></path></g></g></g><g id="SvgjsG2138" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText2139" font-family="Helvetica, Arial, sans-serif" x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto" font-size="0.8125rem" font-weight="400" fill="#697a8d" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Quaters</text><text id="SvgjsText2140" font-family="Public Sans" x="70.5" y="71.5" text-anchor="middle" dominant-baseline="auto" font-size="1.5rem" font-weight="400" fill="#566a7f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: &quot;Public Sans&quot;;">38</text></g></g><line id="SvgjsLine2141" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2142" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG2123" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(133, 146, 163);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(3, 195, 236);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 4;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(113, 221, 55);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div>
                      </div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 336px; height: 139px;"></div></div><div class="contract-trigger"></div></div></div>
                            <ul class="p-0 m-0">
                                <li class="d-flex my-3 pb-1">
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                  <div class="me-2">
                                    <small class="text-muted d-block mb-1">Township Name En</small>
                                    <h6 class="mb-0">{{ $township->RegionEn }}&nbsp;</h6>
                                  </div>
                                </div>
                              </li>
                              <li class="list-unstyled">
             <hr class="m-0">
            </li>
                                <li class="d-flex my-3 pb-1">
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                  <div class="me-2">
                                    <small class="text-muted d-block mb-1">Township Name Mm</small>
                                    <h6 class="mb-0">{{ $township->RegionMm }}&nbsp;</h6>
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
                                    <h6 class="mb-0">{{ $township->RegionCode }}&nbsp;</h6>
                                  </div>
                                </div>
                              </li>
                              <li class="list-unstyled">
             <hr class="m-0">
            </li>
                              <li class="d-flex my-4 pb-1">
                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                  <div class="me-2">
                                    <small class="text-muted d-block mb-1">HandleBranch</small>
                                    <h6 class="mb-0">{{ $township->HandleBranch }}&nbsp;</h6>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card">
                      <h5 class="card-header">Quaters</h5>
                      <div class="card-body">
                          <!-- Timeline Style -->
                     
                            <span class="text-light fw-medium">{{ $township->TownshipNameMm }} အတွင်းရှိ ရပ်ကွက်များ</span>
                            <div class="demo-inline-spacing mt-3">
                              <ul class="list-group list-group-timeline">
                                @foreach($quaters as $key => $quater)
                                <li class="list-group-item list-group-timeline-secondary">

                                <div class="card shadow-none bg-transparent border border-secondary mb-0">
                          <div class="card-body py-1">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h4 class="mb-2 mt-2"><code class="text-secondary fw-semibold">{{ $quater->PostalCode }}</code></h4>
                                        </div>
                                        <div class="col-md-9">
                                            {{ $quater->QuaterNameMm }}
                                        <br>{{ $quater->QuaterNameEn }}
                                        </div>
                                    </div>
                                    <div>
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
                    @endif
            
            



          </div>
          <!-- / Content -->

          
          

<!-- Footer -->
<input type="hidde" id="url" value="{{ url('') }}">
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
    <!-- Main JS -->
    <script src="{{ asset('backend/js/main.js') }}"></script>
  

    <!-- Page JS -->
    <script src="{{ asset('backend/js/forms-selects.js') }}"></script>
</body>

</html>

<!-- beautify ignore:end -->

