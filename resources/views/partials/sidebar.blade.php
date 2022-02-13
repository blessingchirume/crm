<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                @can('view dashboard') <li>
                    <a href="index.html" class="mm-active">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                @endcan
                <li class="app-sidebar__heading">Modules</li>
                @can('view user management')
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-settings"></i>
                        User Master Data
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        @can('view users')
                        <li>
                            <a href="/user/">
                                <i class="metismenu-icon"></i>
                                User Records
                            </a>
                        </li>
                        @endcan
                        @can('create user')
                        <li>
                            <a href="/user/create">
                                <i class="metismenu-icon">
                                </i>Create User
                            </a>
                        </li>
                        @endcan
                        @can('view roles')
                        <li>
                            <a href="/role/">
                                <i class="metismenu-icon">
                                </i>User Roles
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
                @endcan
                @can('view client master data')
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-id"></i>
                        Client Master Data
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="/client/">
                                <i class="metismenu-icon"></i>
                                Client Records
                            </a>
                        </li>
                        <li>
                            <a href="/client/create">
                                <i class="metismenu-icon">
                                </i>Create new client
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
                @can('view project master data')
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-car"></i>
                        Project Master Data
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="/project/view">
                                <i class="metismenu-icon">
                                </i>Project records
                            </a>
                        </li>

                        <li>
                            <a href="/project/create">
                                <i class="metismenu-icon">
                                </i>Register Project
                            </a>
                        </li>

                    </ul>
                </li>
                @endcan
                <li>
                    <a href="tables-regular.html" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>
</div>