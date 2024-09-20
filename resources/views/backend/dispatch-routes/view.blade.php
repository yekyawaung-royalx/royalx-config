<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dispatch Rules</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

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
    <script src="{{ asset('backend/js/config.js') }}"></script>
    <style type="text/css">
    	.bottom-block{
    		border-bottom: 2px solid #ff3e1d;
    	}
    	.unset{
    		text-transform: unset !important;
    	}
    	#view-json{
    		pointer-events:none;
    	}
    	.scroll{
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
		      		<div class="content-wrapper">
			        	<!-- Content -->
			          	<div class="container-xxl flex-grow-1 container-p-y">
							<h4 class="py-1 mb-2">
				  				<span class="text-muted fw-light">Dispatch Rules /</span> View Rule
				  				<small class="fw-light text-danger">{{ $route_item->FromTownshipName }}  ⇒ {{ $route_item->ToTownshipName }}</small>
							</h4>


  <!-- Timeline Basic-->
  <div id="routes">
  @foreach($routes as $route)
  
	  <div class="row" id="{{ route_ordered($route->FromBranchName,$route_item->FromBranchName,$route_item->RegionType) }}">
	  <div class="col-xl-6 mb-4 mb-2">
	    <div class="card">
	      <h5 class="card-header">{{ $route->FromBranchName }}  <span class="badge rounded-pill bg-primary pull-right">Route {{ route_ordered($route->FromBranchName,$route_item->FromBranchName,$route_item->RegionType) }}</span></h5>
	      <div class="card-body">
	        <ul class="timeline">
	        	@foreach(DB::table('DispatchRoutes')->where('FromBranchName',$route->FromBranchName)->where('DispatchRuleId',$id)->get() as $branch)
	          <li class="timeline-item timeline-item-transparent">
	            <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
	            <div class="timeline-event">
	              <div class="d-flex justify-content-between flex-wrap mb-2">
	                <div>
	                  <span>{{ $branch->FromBranchName }}</span>
	                  <span class="fw-bolder mx-2">⇒</span>
	                  <span>{{ $branch->ToBranchName }}</span>
	                </div>
	              </div>
	              
	            </div>
	          </li>
	          @endforeach
	          <li class="timeline-end-indicator">
	            <i class="bx bx-check-circle"></i>
	          </li>
	        </ul>
	      </div>
	    </div>
	  </div>
	  </div>
	 
  @endforeach
  </div>
  <!-- /Timeline Basic -->
						


							
		          		</div>
		          		<!-- / Content -->
	          
		          		<input type="hidden" id="url" value="{{ url('') }}">
						<input type="hidden" id="json-routes" value="{{ url('json/dispatch-routes') }}">
						<input type="hidden" id="token" value="{{ csrf_token() }}">

						<!-- Footer -->
						<footer class="content-footer footer bg-footer-theme">
						  	<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
							    <div class="mb-2 mb-md-0">
							      © <script> document.write(new Date().getFullYear()) </script>
							      , made with ❤️ by <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">ThemeSelection</a>
							    </div>
						  	</div>
						</footer>
						<!-- / Footer -->
	          			<div class="content-backdrop fade"></div>
	        		</div>
	      	</div>
	      	<!-- / Layout page -->
    	</div>

	    <!-- Overlay -->
	    <div class="layout-overlay layout-menu-toggle"></div>
	    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
	    <div class="drag-target"></div>
    
  	</div>
  	<!-- / Layout wrapper -->

<!-- Modal -->
          <div class="modal modal-top fade" id="generateModal" tabindex="-1">
            <div class="modal-dialog">
              <form class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTopTitle">Generate Route Details</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-icon border-danger">
              <label class="form-check-label custom-option-content" for="to-branch-name">
                <span class="custom-option-body">
                  <i class="bx bx-map text-danger"></i>
                  <span class="custom-option-title"> <span id="to-branch-label">XXX</span> </span>
                  <small>တိုက်ရိုက်ပို့</small>
                </span>
                <input class="form-check-input" type="checkbox" value="" id="to-branch-name" checked />
              </label>
            </div>
          </div>
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-icon border-danger">
              <label class="form-check-label custom-option-content" for="ygn-sorting">
                <span class="custom-option-body">
                  <i class="bx bx-map text-danger"></i>
                  <span class="custom-option-title"> YGN-SORTING </span>
                  <small>တဆင့်ခံပို့</small>
                </span>
                <input class="form-check-input" type="checkbox" value="11" id="ygn-sorting" />
              </label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-check custom-option custom-option-icon border-danger">
              <label class="form-check-label custom-option-content" for="mdy-sorting">
                <span class="custom-option-body">
                  <i class="bx bx-map text-danger"></i>
                  <span class="custom-option-title"> MDY-SORTING </span>
                  <small>တဆင့်ခံပို့</small>
                </span>
                <input class="form-check-input" type="checkbox" value="14" id="mdy-sorting" />
              </label>
            </div>
          </div>
        </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary btn-generate">Save</button>
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

  	<!-- Main JS -->
  	<script src="{{ asset('backend/js/main.js') }}"></script>
  

  	<!-- Page JS -->
  	<script src="{{ asset('backend/js/forms-selects.js') }}"></script>
	<script src="{{ asset('backend/js/forms-tagify.js') }}"></script>
	<script src="{{ asset('backend/js/forms-typeahead.js') }}"></script> 
	<script type="text/javascript">
		$(document).ready(function(){
	      	var url        		= $("#url").val();
	      	var json_routes 	= $("#json-routes").val();

	      	var routes   	= json_routes;
	      	var token      	= $("#token").val();

	      	let rules = [];

	      	var fetched_data = function(){
                $.ajax({
	                url: routes,
	                type: 'GET',
	                data: {},
	                success: function(data){
	                    if(data.total > 0){
	                    	$.each(data.data, function( key, item ) {
		                    	$("#fetched-data").append('<tr>'
		                        +'<td class="text-primary"><span class="fw-bolder">'+item.DispatchRuleID+'</span></td>'
		                        +'<td>'+item.DispatchRuleName+'</td>'
		                        +'<td>'+item.DispatchRuleID+'</td>'
		                        +'<td>'+item.FromTownshipName+'</td>'
		                        +'<td>'+item.ToTownshipName+'</td>'
		                        +'<td>'
		                        	+'<button type="button" class="btn btn-icon btn-success btn-sm me-1 load-id" data-bs-toggle="modal" data-bs-target="#generateModal" cursorshover="true" '+(item.GeneratedRoutes == 1? 'disabled':'')+'  value='+item.DispatchRuleID+'>'
		                                +'<span class="tf-icons bx bx-sitemap" cursorshover="true"></span>'
		                            +'</button>'
		                            +'<a href="" class="btn btn-icon btn-primary btn-sm me-1" cursorshover="true">'
		                                +'<span class="tf-icons bx bx-pencil" cursorshover="true"></span>'
		                            +'</a>'
		                            +'<button type="button" class="btn btn-icon btn-danger btn-sm" cursorshover="true">'
		                                +'<span class="tf-icons bx bx-trash" cursorshover="true"></span>'
		                            +'</button>'
		                        +'</td>'
		                    +'</tr>');
		                	});
	                	}
	                }
	            });
            };

            $('body').delegate(".load-id","click",function () {
            	var id = $(this).val();

            	$.ajax({
	                url: url+'/admin/dispatch-routes/'+id,
	                type: 'GET',
	                data: {},
	                success: function(data){
	                	$("#to-branch-label").text(data.ToBranchName);
	                	$("#to-branch-name").val(data.ToBranchName);
	                	$("#item").val(id);
	                }
	            });
            });

            $('body').delegate(".btn-generate","click",function () {
            	var id = $("#item").val();

            	if($('#to-branch-name').is(":checked")){
				  	to_branch = $('#to-branch-name').val();
				}else{
					to_branch = 0;
				}

            	if($('#ygn-sorting').is(":checked")){
				  	ygn_sorting = 1;
				}else{
					ygn_sorting = 0;
				}

				if($('#mdy-sorting').is(":checked")){
				  	mdy_sorting = 1;
				}else{
					mdy_sorting = 0;
				}

            	$.ajax({
	                url: url+'/admin/dispatch-routes/generate',
	                type: 'POST',
	                data: {
	                	'RuldId':id,
	                	'ToBranch':to_branch,
	                	'YgnSorting':ygn_sorting,
	                	'MdySorting':mdy_sorting,
	                	'_token':token
	                },
	                success: function(data){


	                }
	            });
            });

            fetched_data();

            $("#routes .row").sort(function(a, b) {
  return parseInt(a.id) - parseInt(b.id);
}).each(function() {
  var elem = $(this);
  elem.remove();
  $(elem).appendTo("#routes");
});
            
        });
		


	</script>


</body>
</html>
<!-- beautify ignore:end -->

