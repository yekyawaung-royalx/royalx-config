<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
	<div class="app-brand demo ">
    	<a href="{{ url('') }}" class="app-brand-link">
	      	<span class="app-brand-logo demo me-1">
	        	<img src="{{ asset('backend/images/logo.webp') }}" height="36"> 
	      	</span>
    	</a>
	    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
	      	<i class="bx bx-chevron-left bx-sm align-middle"></i>
	    </a>
  	</div>
  	<div class="menu-inner-shadow"></div>
  	<ul class="menu-inner py-1">
	    <li class="menu-item ">
	      	<a href="{{ url('admin/dashboard') }}" class="menu-link {{ request()->is('admin/posts/public') ? 'active' : '' }}">
	        	<i class="menu-icon tf-icons bx bx-home-circle"></i>
	        	<div data-i18n="Dashboard">Dashboard</div>
	      	</a>
	      	
	    </li>
	    <li class="menu-item">
	      	<a href="javascript:void(0);" class="menu-link menu-toggle">
	        	<i class="menu-icon tf-icons bx bx-directions"></i>
	        	<div data-i18n="Dispatch Routes">Dispatch Routes</div>
	      	</a>
      		<ul class="menu-sub">
	        	<li class="menu-item">
	          		<a href="{{ url('admin/dispatch-routes/create') }}" class="menu-link">
	            		<div data-i18n="Create Routes">Create Routes</div>
	          		</a>
	        	</li>
	        	<li class="menu-item">
		          	<a href="{{ url('admin/dispatch-routes') }}" class="menu-link">
		            	<div data-i18n="Dispatch Routes">Dispatch Routes</div>
		          	</a>
	        	</li>
	      	</ul>
    	</li>
        <li class="menu-item ">
            <a href="{{ url('admin/api') }}" class="menu-link {{ request()->is('admin/api') ? 'active' : '' }}">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="API">API</div>
            </a>
            
        </li>

	    <!-- Apps & Pages -->
	    <li class="menu-header small text-uppercase">
	      	<span class="menu-header-text">Settings</span>
	    </li>
        <li class="menu-item {{ request()->is('admin/routes') ? 'active' : '' }} {{ request()->is('admin/routes/*') ? 'active' : '' }}">
            <a href="{{ url('admin/routes') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-transfer'></i>
                <div data-i18n="Routes">Routes</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/innovix-hr') ? 'active' : '' }} {{ request()->is('admin/innovix-hr/*') ? 'active' : '' }}">
            <a href="{{ url('admin/innovix-hr') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-group'></i>
                <div data-i18n="InnovixHR Data">InnovixHR Data</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin/employees') ? 'active' : '' }} {{ request()->is('admin/employees/*') ? 'active' : '' }}">
            <a href="{{ url('admin/employees') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-group'></i>
                <div data-i18n="Employees">Employees</div>
            </a>
        </li>
	    <li class="menu-item {{ request()->is('admin/users') ? 'active' : '' }} {{ request()->is('admin/users/*') ? 'active' : '' }}">
	      	<a href="{{ url('admin/users') }}" class="menu-link">
	        	<i class='menu-icon tf-icons bx bx-group'></i>
	        	<div data-i18n="System Users">System Users</div>
	      	</a>
	    </li>
	    <li class="menu-item {{ request()->is('admin/package-categories') ? 'active' : '' }}">
	      	<a href="{{ url('admin/package-categories') }}" class="menu-link">
	        	<i class='menu-icon tf-icons bx bx-package'></i>
	        	<div data-i18n="Package Categories">Package Categories</div>
	      	</a>
	    </li>
	    <li class="menu-item {{ request()->is('admin/branches') ? 'active' : '' }}">
	      	<a href="{{ url('admin/branches') }}" class="menu-link">
	        	<i class='menu-icon tf-icons bx bx-building-house'></i>
	        	<div data-i18n="Branches">Branches</div>
	      	</a>
	    </li>
        <li class="menu-item {{ request()->is('admin/quaters') ? 'active' : '' }}">
            <a href="{{ url('admin/quaters') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-sitemap'></i>
                <div data-i18n="Quaters">Quaters</div>
            </a>
        </li>
	    <li class="menu-item {{ request()->is('admin/townships') ? 'active' : '' }}{{ request()->is('admin/townships/*') ? 'active' : '' }}">
	      	<a href="{{ url('admin/townships') }}" class="menu-link">
	        	<i class='menu-icon tf-icons bx bx-map-pin'></i>
	        	<div data-i18n="Townships">Townships</div>
	      	</a>
	    </li>
	    <li class="menu-item {{ request()->is('admin/regions') ? 'active' : '' }}">
	      	<a href="{{ url('admin/regions') }}" class="menu-link">
	        	<i class='menu-icon tf-icons bx bx-map-alt'></i>
	        	<div data-i18n="Regions">Regions</div>
	      	</a>
	    </li>
          <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Debug Tools</span>
        </li>
         <li class="menu-item">
            <a href="{{ url('telescope') }}" class="menu-link  btn btn-label-secondary mb-1" target="_blank">
                <i class='menu-icon tf-icons bx bx-analyse'></i>
                <div data-i18n="Telescope">Telescope</div>
            </a>
        </li>
         <li class="menu-item">
            <a href="{{ url('telescope') }}" class="menu-link  btn btn-label-secondary mb-1" target="_blank">
                <i class='menu-icon tf-icons bx bx-brush'></i>
                <div data-i18n="Clear Cache">Clear Cache</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ url('log-viewer') }}" class="menu-link  btn btn-label-secondary  mb-1" target="_blank">
                <i class='menu-icon tf-icons bx bx-search-alt'></i>
                <div data-i18n="View Logs">View Logs</div>
            </a>
        </li>
  	</ul>
</aside>