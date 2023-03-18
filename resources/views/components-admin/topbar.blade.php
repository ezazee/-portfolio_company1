<header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="/admin" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ URL::asset('assets_panel/images/logo_head.png') }}" alt="MKD" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ URL::asset('assets_panel/images/logo-color.png') }}" alt="MKD" height="17">
                                </span>
                            </a>

                            <a href="/admin" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ URL::asset('assets_panel/images/logo_head.png') }}" alt="MKD" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ URL::asset('assets_panel/images/logo-color.png') }}" alt="MKD" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ URL::asset('assets_panel/images/logo_head.png') }}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ Auth::user()->name }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item text-danger" href="/logout"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>