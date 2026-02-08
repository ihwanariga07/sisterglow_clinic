<!DOCTYPE html>
<html lang="en">

<body>
<div class="page-body-wrapper">
<!-- Page Sidebar Start -->
<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper">
            <a href="{{ url('/') }}">
                <img class="img-fluid for-light" src="{{ asset('assets/images/logo/logosister.png') }}" alt="">
                <img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logosister.png') }}" alt="">
            </a>
            <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"></i></div>
        </div>
        
        <div class="logo-icon-wrapper">
            <a href="{{ url('/') }}">
                <img class="img-fluid" src="{{ asset('assets/images/logo/logosister.png') }}" alt="">
            </a>
        </div>
        
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="{{ url('/') }}">
                            <img class="img-fluid" src="{{ asset('assets/images/logo/logosister.png') }}" alt="">
                        </a>
                        <div class="mobile-back text-end">
                            <span>Back</span>
                            <i class="fa-solid fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>
                    
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                        </div>
                    </li>
                    
                    <!-- Dashboard Menu -->
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <label class="badge badge-light-primary">13</label>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-home') }}"></use>
                            </svg>
                            <span class="lan-3">Dashboard</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <!-- <li><a class="lan-4" href="{{ url('admin') }}">Admin</a></li>
                            <li><a class="lan-5" href="{{ url('dashboard/layanan') }}">Layanan</a></li> -->
                            <li><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                            <li><a href="{{ route('layanan.index') }}">Layanan</a></li>
                            <li><a href="{{ route('customer.index') }}">Customer</a></li>
                            <li><a href="{{ route('booking.index') }}">Booking</a></li>
                            <li><a href="{{ route('booking_detail.index') }}">Booking Detail</a></li>
                            <!-- Tambahkan menu dashboard lainnya di sini -->
                        </ul>
                    </li>

                    <!-- Widgets Menu -->
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                            </svg>
                            <span class="lan-6">Widgets</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('Admin/widgets/general') }}">General</a></li>
                            <li><a href="{{ url('widgets/chart') }}">Chart</a></li>
                        </ul>
                    </li>


                    <!-- E-commerce Menu -->
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ecommerce') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ecommerce') }}"></use>
                            </svg>
                            <span>Ecommerce</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a class="submenu-title" href="#">
                                    Products
                                    <span class="sub-arrow">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ url('ecommerce/products/add') }}">Add Product</a></li>
                                    <li><a href="{{ url('ecommerce/products/grid') }}">Products Grid</a></li>
                                    <li><a href="{{ url('ecommerce/products/list') }}">Products List</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('ecommerce/categories') }}">Category</a></li>
                            <li><a href="{{ url('ecommerce/orders') }}">Orders</a></li>
                        </ul>
                    </li>

                    <!-- Users Menu -->
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-user') }}"></use>
                            </svg>
                            <span>Users</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('users/profile') }}">User Profile</a></li>
                            <li><a href="{{ url('users/list') }}">User List</a></li>
                            <li>
                                <label class="badge badge-light-success">New</label>
                                <a href="{{ url('users/roles') }}">Roles & Permission</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Components Menu
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Components</h6>
                        </div>
                    </li>

                    UI Kits Menu
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-ui-kits') }}"></use>
                            </svg>
                            <span>UI Kits</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('ui-kits/typography') }}">Typography</a></li>
                            <li><a href="{{ url('ui-kits/avatars') }}">Avatars</a></li>
                            <li>
                                <label class="badge badge-light-success">New</label>
                                <a href="{{ url('ui-kits/divider') }}">Divider</a>
                            </li>
                        </ul>
                    </li> -->

                    <!-- Bonus UI Menu -->
                    <!-- <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bonus-kit') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-bonus-kit') }}"></use>
                            </svg>
                            <span>Bonus UI</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('bonus-ui/scrollable') }}">Scrollable</a></li>
                            <li>
                                <label class="badge badge-light-success">New</label>
                                <a href="{{ url('bonus-ui/tree-view') }}">Tree view</a>
                            </li>
                        </ul>
                    </li> -->

                    <!-- Icons Menu -->
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-icons') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-icons') }}"></use>
                            </svg>
                            <span>Icons</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('icons/flag') }}">Flag icon</a></li>
                            <li><a href="{{ url('icons/fontawesome') }}">Fontawesome Icon</a></li>
                        </ul>
                    </li>

                    <!-- Forms Menu -->
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-form') }}"></use>
                            </svg>
                            <span>Forms</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a class="submenu-title" href="#">
                                    Form Controls
                                    <span class="sub-arrow">
                                        <i class="fa-solid fa-angle-right"></i>
                                    </span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ url('forms/validation') }}">Form Validation</a></li>
                                    <li><a href="{{ url('forms/controls') }}">Form Controls</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Tables Menu -->
                    <li class="sidebar-list">
                        <i class="fa-solid fa-thumbtack"></i>
                        <a class="sidebar-link sidebar-title" href="#">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"></use>
                            </svg>
                            <svg class="fill-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#fill-table') }}"></use>
                            </svg>
                            <span>Tables</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('tables/bootstrap') }}">Bootstrap Tables</a></li>
                            <li><a href="{{ url('tables/datatables') }}">Data Tables</a></li>
                        </ul>
                    </li>


                    <!-- Maps Menu -->
              <li class="sidebar-list">
            <i class="fa-solid fa-thumbtack"></i>
            <a class="sidebar-link sidebar-title" href="#">
                <svg class="stroke-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-maps') }}"></use>
                </svg>
                <svg class="fill-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#fill-maps') }}"></use>
                </svg>
                <span>Maps</span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="https://www.google.com/maps?q=Pango+Raya,+Banda+Aceh" target="_blank">
                        Map
                    </a>
                </li>
            </ul>
        </li>

                    <!-- Tambahkan menu lainnya dengan pola yang sama -->
                    
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends -->

  </body>
</html>