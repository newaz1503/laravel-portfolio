<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link {{ Request::is('admin/hero') ? 'active' : '' }}" href="{{ route('admin.hero') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Hero Section
                </a>
                <a class="nav-link {{ Request::is('admin/about') ? 'active' : '' }}" href="{{ route('admin.about') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    About
                </a>

                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed {{ Request::is('admin/service*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="{{ Request::is('admin/service*') ? 'true' : 'false'}}" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                         Service
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/service') || Request::is('admin/service/create') ? 'show' : '' }}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/service') ? 'active' : '' }}" href="{{ route('admin.service.index') }}">Service list</a>
                        <a class="nav-link {{ Request::is('admin/service/create') ? 'active' : '' }}" href="{{ route('admin.service.create') }}">Service Create</a>
                    </nav>
                </div>
                <a class="nav-link collapsed {{ Request::is('admin/skill*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="{{ Request::is('admin/skill*') ? 'true' : 'false' }}" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                         Skill
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/skill') || Request::is('admin/skill/create') ? 'show' : '' }}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/skill') ? 'active' : '' }}" href="{{ route('admin.skill.index') }}">Skill list</a>
                        <a class="nav-link  {{ Request::is('admin/skill/create') ? 'active' : '' }}" href="{{ route('admin.skill.create') }}">Skill Create</a>
                    </nav>
                </div>
                 <a class="nav-link collapsed {{ Request::is('admin/category*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="{{ Request::is('admin/category') || Request::is('admin/category/create') ? 'true' : 'false' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                         Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/category') ? 'show' : '' }}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/category') ? 'active' : '' }}" href="{{ route('admin.category.index') }}">category list</a>
                        <a class="nav-link {{ Request::is('admin/category/create') ? 'active' : '' }}" href="{{ route('admin.category.create') }}">category Create</a>
                    </nav>
                </div>
                <a class="nav-link collapsed {{ Request::is('admin/portfolio*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="{{ Request::is('admin/portfolio') || Request::is('admin/portfolio/create') ? 'true' : 'false' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                         Portfolio
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/portfolio') ? 'show' : '' }}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/portfolio') ? 'active' : '' }}" href="{{ route('admin.portfolio.index') }}">Portfolio list</a>
                        <a class="nav-link {{ Request::is('admin/portfolio/create') ? 'active' : '' }}" href="{{ route('admin.portfolio.create') }}">Portfolio Create</a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">System</div>
                <a class="nav-link {{ Request::is('admin/global') ? 'active' : '' }}" href="{{ route('admin.global') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                    Global Setting
                </a>
                <a class="nav-link text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                   <div class="sb-nav-link-icon "><i class="fas fa-sign-out-alt text-danger"></i></div>
                   Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </div>

    </nav>
</div>
