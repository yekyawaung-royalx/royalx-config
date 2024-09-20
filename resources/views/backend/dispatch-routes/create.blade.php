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
				  				<span class="text-muted fw-light">Dispatch Routes /</span> Create Routes
							</h4>

							<div class="row block-section-1">
							  	<div class="col-12">
							    	<div class="card mb-4">
								        <div class="card-body">
								            <div class="row">
								                <div class="col-4">
								                  	<div class="mb-2">
									                    <label for="from-regions" class="form-label">From Regions</label>
									                    <select id="from-regions" class="select2 form-select form-select-lg" data-allow-clear="true">
									                      
									                    </select>
								                  	</div>
								                </div>
								                <div class="col-4">
								                  	<div class="mb-2">
								                  	<label for="from-townships" class="form-label w-100">From Township <span class="badge rounded-pill bg-primary pull-right" id="from-township-total">0</span></label>
									                  	<select id="from-townships" class="select2 form-select form-select-lg" data-allow-clear="true">
									                      
									                    </select>
									                </div>
								                </div>
								                <div class="col-4">
								                  <div class="mb-2">
								                  		<label for="delivery-type" class="form-label">Delivery Type</label>
									                  	<select id="delivery-type" class="select2 form-select form-select-lg" data-allow-clear="true">
									                      	<option value="1">NextDay</option>
									                      	<option value="2">SameDay</option>
									                    </select>
								                	</div>
								                </div>
								            </div>
								            <div class="mb-2">
								            	<div class="row">
									            	<div class="col-2">
														<div class="form-check form-check-primary mt-3">
											              	<input name="type" class="form-check-input" type="radio" value="1" id="outbound" checked="" cursorshover="true">
											              	<label class="form-check-label" for="outbound"> Outbound </label>
											            </div>
									            	</div>
									            	<div class="col-2">
														<div class="form-check form-check-primary mt-3">
											              	<input name="type" class="form-check-input" type="radio" value="2" id="rejected" cursorshover="true">
											              	<label class="form-check-label" for="rejected"> Rejected </label>
											            </div>
									            	</div>
									            	<div class="col-2">
														<div class="form-check form-check-primary mt-3">
											              	<input name="type" class="form-check-input" type="radio" value="3" id="transferred" cursorshover="true">
											              	<label class="form-check-label" for="transferred"> Transferred </label>
											            </div>
									            	</div>
									            </div>
								            </div>
								            <div class="mb-2">
								              	<button type="button" class="btn btn-primary btn-generate" cursorshover="true">
								                	<span class="tf-icons bx bx-sitemap me-1"></span> Generate Routes
								              	</button>
								              	<button type="button" class="btn btn-info" cursorshover="true" onclick="CopyToClipboard()">
								                	<span class="tf-icons bx bx-copy-alt me-1"></span> Copy JSON
								              	</button>

								            </div>
								        </div>
							      	</div>
							  	</div>
							</div>

							<div class="accordion mb-3" id="accordionExample">
							      <div class="card accordion-item active">
							        <h2 class="accordion-header" id="headingOne">
							          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
							            JSON View
							          </button>
							        </h2>

							        <div id="accordionOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
							          <div class="accordion-body scroll">
							            <pre id="view-json" contenteditable="true">
							            	
							            </pre>
							          </div>
							        </div>
							      </div>
							      <div class="card accordion-item">
							        <h2 class="accordion-header" id="headingTwo">
							          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
							            Table View
							          </button>
							        </h2>
							        <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							          <div class="accordion-body scroll">
							            <div class="row block-section-1">
							  	<div class="col-12">
							    	<div class="card mb-4">
								        <div class="card-body">
								   			<div class="table-responsive text-nowrap">
											    <table class="table">
											      	<thead>
												        <tr>
												          	<th class="text-muted unset">Rule</th>
												          	<th class="text-muted unset">WaybillType</th>
												          	<th class="text-muted unset">DeliveryType</th>
												          	<th class="text-muted unset">FromTownshipName >> ToTownshipName</th>
												          	<th class="text-muted unset">Actions</th>
												        </tr>
											      	</thead>
											      	<tbody class="table-border-bottom-0" id="fetched-data">
											        
											      	</tbody>
											    </table>
											</div>
								        </div>
							      	</div>
							  	</div>
							</div>
							          </div>
							        </div>
							      </div>
							</div>

							
		          		</div>
		          		<!-- / Content -->
	          
		          		<input type="hidden" id="url" value="{{ url('') }}">
						<input type="hidden" id="json-townships" value="{{ url('json/townships/all') }}">
						<input type="hidden" id="json-regions" value="{{ url('json/regions/all') }}">
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
	      	var json_regions 	= $("#json-regions").val();
	      	var json_townships 	= $("#json-townships").val();

	      	var regions   		= json_regions;
	      	var townships   	= json_townships;
	      	var token      		= $("#token").val();

	      	let rules = [];

	      	var fetched_regions = function(){
                $.ajax({
	                url: regions,
	                type: 'GET',
	                data: {},
	                success: function(data){
	                    $.each(data, function (i, item) {
			                $('#from-regions').append('<option value="'+item['PostalCode']+'">'+item['MmName']+'('+item['PostalCode']+')</option>' );
			            });

			            fetched_townships();
	                }
	            });
            };

	      	var fetched_townships = function(){
	      		region = $('#from-regions').val();

                $.ajax({
		            type: 'post',
		            url: url+'/json/fetched-townships',
		            dataType:'json',
		            data: {
		                'region' :region,
		                '_token':token
		            },
		            success: function(data) {
		                $('#from-townships').empty(); 
		                $.each(data, function (i, item) {
			             	$('#from-townships').append('<option value="'+item['PostalCode']+'">'+item['MmName']+'('+item['PostalCode']+')</option>' );
			          	});

			          	$("#from-township-total").text($('#from-townships option').length);
		            },
		        }); 
            };

            $('#from-regions').on("change",function search(e) {

		        var region = $(this).val();

		        $.ajaxSetup({
		            headers: {
		                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            }
		        });
		                   
		        $.ajax({
		            type: 'post',
		            url: url+'/json/fetched-townships',
		            dataType:'json',
		            data: {
		                'region' :region,
		                '_token':token
		            },
		            success: function(data) {
		                $('#from-townships').empty(); 
		                $.each(data, function (i, item) {
			             	$('#from-townships').append('<option value="'+item['PostalCode']+'">'+item['MmName']+'('+item['PostalCode']+')</option>' );
			          	});
			          	$("#from-township-total").text($('#from-townships option').length);
		            },
		        });       
		    });

		    $('body').delegate(".btn-generate","click",function () {
		        
		        from_township   = $('#from-townships :selected').val();
		        delivery_type   = $("#delivery-type").val();
		        waybill_type 	= $('input[name="type"]:checked').val();

		        from_region_name   		= $('#from-regions :selected').text();
		        from_township_name   	= $('#from-townships :selected').text();
		        delivery_type_name   	= $("#delivery-type  :selected").text();
		        waybill_type_name 		= (waybill_type == 1? 'Outbound':(waybill_type == 2? 'Rejected':'Transferred'));

		        $.ajaxSetup({
		            headers: {
		                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            }
		        });
		               
		        $.ajax({
		            type: 'post',
		            url: url+'/admin/dispatch-routes',
		            dataType:'json',
		            data: {
		                'FromTownship' 	:from_township,
		                'DeliveryType' 	:delivery_type,
		                'WaybillType' 	:waybill_type,
		                '_token'		:token
		            },
		            success: function(data) { 
		            	$("#fetched-data").empty();

		            	$.each(data,function(i,item){
		            		rules.push({
                            	Rule: item.rule,
                            	DeliveryType: delivery_type_name,
                            	WaybillType: waybill_type_name,
                            	FromTownshipName: from_region_name+' '+from_township_name,
                            	ToTownshipName: item.ToRegionName+' '+item.ToTownshipName,
                            	ToTownshipEnName: item.ToTownshipEnName,
                            	ToTownshipPostalCode: item.ToTownshipPostalCode
                            });

		            		$("#fetched-data").append('<tr class="">'
			                    +'<td class="text-primary"><span class="fw-bolder">'+item.rule+'</span></td>'
			                    +'<td class="text-primary"><span class="text-primary">'+delivery_type_name+'</span></td>'
			                    +'<td class="text-primary"><span class="text-danger">'+waybill_type_name+'</span></td>'
			                    +'<td>'+from_township_name+' >> '+item.ToTownshipName+'</td>'
			                    +'<td>'
			                        +'<button type="button" class="btn btn-icon btn-success btn-sm me-1" cursorshover="true">'
			                            +'<span class="tf-icons bx bx-save" cursorshover="true"></span>'
			                        +'</button>'
			                        +'<button type="button" class="btn btn-icon btn-danger btn-sm" cursorshover="true">'
			                            +'<span class="tf-icons bx bx-trash" cursorshover="true"></span>'
			                        +'</button>'
			                    +'</td>'
			                    +'</tr>'       
			                );

		            	});
		            	
		            	json = JSON.stringify(rules, null, 2);
                        $("#view-json").html(json);
                        rules = [];
		            },
		        });
		    });

            fetched_regions();
            
        });
		function CopyToClipboard() {

    		var copyBoxElement = document.getElementById('view-json');
		    //copyBoxElement.contenteditable = false;
		    copyBoxElement.focus();
		    document.execCommand('selectAll');
		    document.execCommand("copy");
		    copyBoxElement.contenteditable = false;
		}

	</script>


</body>
</html>
<!-- beautify ignore:end -->

