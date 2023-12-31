


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route('dashboard') }}">
                    <h2 class="brand-text">ERP THREAD</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item {{ \Request::is('/') ? 'active' : ''  }}"><a class="d-flex align-items-center" href="{{ url('/') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                
            </li>

            <li class=" nav-item {{ Request::routeIs('employees.index','employees.create') ? 'has-sub open' : '' }} "><a class="d-flex align-items-center" href=""><i data-feather="shopping-bag"></i><span class="menu-title text-truncate" data-i18n="Invoice">Employee</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center {{ Request::routeIs('employees.index') ? 'active' : '' }} " href="{{ route('employees.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop">List</span></a>
                    </li>
                    <li><a class="d-flex align-items-center {{ Request::routeIs('employees.create') ? 'active' : '' }} " href="{{ route('employees.create') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Details">Add</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{ Request::routeIs('departments.index','departments.create') ? 'has-sub open' : '' }} "><a class="d-flex align-items-center" href=""><i data-feather="shopping-bag"></i><span class="menu-title text-truncate" data-i18n="Invoice">Department</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center {{ Request::routeIs('departments.index') ? 'active' : '' }} " href="{{ route('departments.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop">List</span></a>
                    </li>
                    <li><a class="d-flex align-items-center {{ Request::routeIs('departments.create') ? 'active' : '' }} " href="{{ route('departments.create') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Details">Add</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{ Request::routeIs('products.index','products.create') ? 'has-sub open' : '' }} "><a class="d-flex align-items-center" href=""><i data-feather="shopping-bag"></i><span class="menu-title text-truncate" data-i18n="Invoice">Product</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center {{ Request::routeIs('products.index') ? 'active' : '' }} " href="{{ route('products.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop">List</span></a>
                    </li>
                    <li><a class="d-flex align-items-center {{ Request::routeIs('products.create') ? 'active' : '' }} " href="{{ route('products.create') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Details">Add</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item {{ Request::routeIs('productions.index','productions.create') ? 'has-sub open' : '' }} "><a class="d-flex align-items-center" href=""><i data-feather="shopping-bag"></i><span class="menu-title text-truncate" data-i18n="Invoice">Production</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center {{ Request::routeIs('productions.index') ? 'active' : '' }} " href="{{ route('productions.index') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop">List</span></a>
                    </li>
                    <li><a class="d-flex align-items-center {{ Request::routeIs('productions.create') ? 'active' : '' }} " href="{{ route('productions.create') }}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Details">Add</span></a>
                    </li>
                </ul>
            </li>

           
        
        </ul>
    </div>
</div>
<!-- END: Main Menu-->