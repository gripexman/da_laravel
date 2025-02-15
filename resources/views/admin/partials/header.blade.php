 <header class="mb-5">
            <div class="header-top">
                <div class="container">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('backend/assets-two/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                    </div>
                    <div class="header-top-right">

                        <div class="dropdown">
                            <a href="#" class="user-dropdown d-flex dropend" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="avatar avatar-md2" >
                                    <img src="{{ asset('backend/assets-two/images/faces/1.jpg') }}" alt="Avatar">
                                </div>
                                <div class="text">
                                    <h6 class="user-dropdown-name"></h6>
                                    <p class="user-dropdown-status text-sm text-muted">Member</p>
                                    {{ auth()->guard('admin')->user()->name }}
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="dropdownMenuButton1">
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="{{ route('adminLogout') }}">Logout</a></li>
                            </ul>
                        </div>

                        <!-- Burger button responsive -->
                        <a href="#" class="burger-btn d-block d-xl-none">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="main-navbar">
                <div class="container">
                    <ul>
                            
                        <li
                            class="menu-item  ">
                            <a href="{{ route('dashboard') }}" class='menu-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
       
                        <li
                            class="menu-item">
                            <a href="{{ route('products.index') }}" class='menu-link'>
                                <i class="bi bi-life-preserver"></i>
                                <span>Sản Phẩm</span>
                            </a>
                        </li>

                        <li
                        class="menu-item">
                        <a href="{{ route('categories.index') }}" class='menu-link'>
                            <i class="bi bi-life-preserver"></i>
                            <span>Loại SP</span>
                        </a>
                        </li>

                        
                        {{-- <li
                        class="menu-item">
                        <a href="{{ route('users.index') }}" class='menu-link'>
                            <i class="bi bi-life-preserver"></i>
                            <span>Khách Hàng</span>
                        </a>
                        </li> --}}


                        <li
                        class="menu-item">
                        <a href="{{ route('employee.index') }}" class='menu-link'>
                            <i class="bi bi-life-preserver"></i>
                            <span>Nhân Viên</span>
                        </a>
                        </li>

                        <li
                        class="menu-item">
                        <a href="{{ route('invoiceinput.index') }}" class='menu-link'>
                            <i class="bi bi-life-preserver"></i>
                            <span>Hóa Đơn Nhập</span>
                        </a>
                        </li>
                         
                    </ul>
                </div>
            </nav>

        </header>