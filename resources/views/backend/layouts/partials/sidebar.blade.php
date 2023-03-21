<!-- sidebar @s -->
<style>
    a:hover {
    text-decoration: none !important;
}
</style>
<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="/" class="logo-link nk-sidebar-logo">
                {{-- <img class="logo-light logo-img" src="{{ asset('assets/images/logo.png') }}" srcset="{{ asset('assets/images/logo2x.png') }} 2x" alt="logo"> --}}
                <img class="logo-dark logo-img" src="{{ asset('../img/home page/logo.png') }}" srcset="{{ asset('../img/home page/logo.png') }} 2x"
                    alt="logo-dark">
                {{-- <img class="logo-small logo-img logo-img-small" src="{{ asset('assets/images/logo-small.png') }}"
                    srcset="{{ asset('assets/images/logo-small2x.png') }} 2x" alt="logo-small"> --}}
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em
                    class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    {{-- <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboard</h6>
                    </li><!-- .nk-menu-item --> --}}
                    <li class="nk-menu-item">
                        <a href="{{route('admin.index')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-home"></em></span>
                            <span class="nk-menu-text">Home</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('admin.about.slider')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-plus-fill"></em></em></span>
                            <span class="nk-menu-text">Banner</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('admin.curriculm')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-calendar-booking-fill"></em></em></span>
                            <span class="nk-menu-text">Curriculum</span>
                        </a>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="javascript:void(0)" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-info-fill"></em></span>
                            <span class="nk-menu-text">About us</span>
                        </a>
                        <ul class="nk-menu-sub">
                           
                            <li class="nk-menu-item">
                                <a href="{{route('admin.about.static')}}" class="nk-menu-link"><span class="nk-menu-text">Static Data</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('admin.employees.index')}}" class="nk-menu-link"><span class="nk-menu-text">Employees</span></a>
                            </li>
                         
                            <li class="nk-menu-item">
                                <a href="{{route('admin.events.index')}}" class="nk-menu-link"><span class="nk-menu-text">Events</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                   
                    <li class="nk-menu-item">
                        <a href="{{route('admin.ethos')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                            <span class="nk-menu-text">Ethos</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('admin.almayeeyah')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-grid-sq"></em></span>
                            <span class="nk-menu-text">Almayeeyah</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('admin.partnership')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Partnership</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('admin.contact')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-contact-fill"></em></span>
                            <span class="nk-menu-text">Contact</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('admin.fee-structure')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-money"></em></span>
                            <span class="nk-menu-text">Fee Structure</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('admin.research')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-building"></em></span>
                            <span class="nk-menu-text">Research and development</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('admin.school-club')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-book-read"></em></span>
                            <span class="nk-menu-text">School Club</span>
                        </a>
                    </li>
                   
                    <li class="nk-menu-item has-sub">
                        <a href="javascript:void(0)" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-aperture"></em></span>
                            <span class="nk-menu-text">Our Classes</span>
                        </a>
                        <ul class="nk-menu-sub">
                           
                            <li class="nk-menu-item">
                                <a href="{{route('admin.class.static')}}" class="nk-menu-link"><span class="nk-menu-text">Static Data</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('admin.classes.index')}}" class="nk-menu-link"><span class="nk-menu-text">Classes</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                   
                    <li class="nk-menu-item has-sub">
                        <a href="javascript:void(0)" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-aperture"></em></span>
                            <span class="nk-menu-text">Weekend</span>
                        </a>
                        <ul class="nk-menu-sub">
                           
                            <li class="nk-menu-item">
                                <a href="{{route('admin.weekend')}}" class="nk-menu-link"><span class="nk-menu-text">Static Data</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('admin.image-gallery')}}" class="nk-menu-link"><span class="nk-menu-text">Image Gallery</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('admin.testimotional')}}" class="nk-menu-link"><span class="nk-menu-text">Testimotional</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{route('admin.week-pop')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bag"></em></span>
                            <span class="nk-menu-text">Week POP</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{route('admin.footer')}}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bag"></em></span>
                            <span class="nk-menu-text">Footer</span>
                        </a>
                    </li>
                    
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->