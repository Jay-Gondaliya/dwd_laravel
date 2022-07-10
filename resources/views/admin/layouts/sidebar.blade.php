<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="super-admin-dashboard.html">
            <img src="{{ asset('assets/images/brand/logo.png') }}" class="header-brand-img desktop-lgo" alt="Azea logo">
            <img src="{{ asset('assets/images/brand/logo1.png') }}" class="header-brand-img dark-logo" alt="Azea logo">
            <img src="{{ asset('assets/images/brand/favicon.png') }}" class="header-brand-img mobile-logo" alt="Azea logo">
            <img src="{{ asset('assets/images/brand/favicon1.png') }}" class="header-brand-img darkmobile-logo" alt="Azea logo">
        </a>
    </div>
    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category">Main</li>
        <li class="slide">
            <a class="side-menu__item"  href="{{route('dashboard')}}">
            <i class="fa fa-tachometer mx-3" aria-hidden="true"></i>
            <span class="side-menu__label">Dashboard</span></a>
        </li>
        @if(Session::has('type') && Session::get('type') == 'national')
            <li class="slide">
                <a class="side-menu__item @if(Route::is('admin.state_coordinatorlist')) {{ 'active' }} @endif" href="{{route('admin.state_coordinatorlist')}}">
                <i class="fa fa-list mx-3" aria-hidden="true"></i>
                <span class="side-menu__label">State</span></a>
            </li>
        @endif
        @if(Session::has('type') && ((Session::get('type') == 'national') || (Session::get('type') == 'state')))
            <li class="slide">
                <a class="side-menu__item @if(Route::is('admin.lga_coordinatorlist')) {{ 'active' }} @endif" href="{{route('admin.lga_coordinatorlist')}}">
                <i class="fa fa-list mx-3" aria-hidden="true"></i>
                <span class="side-menu__label">Local Government Area</span></a>
            </li>
        @endif
        @if(Session::has('type') && ((Session::get('type') == 'national') || (Session::get('type') == 'state')) || (Session::get('type') == 'lga'))
            <li class="slide">
                <a class="side-menu__item @if(Route::is('admin.ward_coordinatorlist')) {{ 'active' }} @endif" href="{{route('admin.ward_coordinatorlist')}}">
                    <i class="fa fa-list mx-3" aria-hidden="true"></i>
                <span class="side-menu__label">Wards</span></a>
            </li>
        @endif
        @if(Session::has('type') && ((Session::get('type') == 'national') || (Session::get('type') == 'state')) || (Session::get('type') == 'ward'))
            <li class="slide">
                <a class="side-menu__item @if(Route::is('admin.cell_coordinatorlist')) {{ 'active' }} @endif" href="{{route('admin.cell_coordinatorlist')}}">
                    <i class="fa fa-list mx-3" aria-hidden="true"></i>
                <span class="side-menu__label">Cells</span></a>
            </li>
        @endif
        <li class="slide">
            <a class="side-menu__item @if(Route::is('voters-analysis')) {{ 'active' }} @endif" href="{{route('voters-analysis')}}">
                <i class="fa fa-list mx-3" aria-hidden="true"></i>
            <span class="side-menu__label">Voters</span></a>
        </li>
    </ul>
</aside>