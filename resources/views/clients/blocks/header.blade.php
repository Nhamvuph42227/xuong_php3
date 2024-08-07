<div class="ltn__header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="ltn__top-bar-menu">
                    <ul>
                        <li><a href="locations.html"><i class="icon-placeholder"></i> 15/A, Nest Tower, NYC</a></li>
                        <li><a href="mailto:info@webmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> info@webmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="top-bar-right  text-end">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            <li>
                                <!-- ltn__language-menu -->
                                <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                    <ul>
                                        <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                            <ul>
                                                <li><a href="#">Arabic</a></li>
                                                <li><a href="#">Bengali</a></li>
                                                <li><a href="#">Chinese</a></li>
                                                <li><a href="#">English</a></li>
                                                <li><a href="#">French</a></li>
                                                <li><a href="#">Hindi</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <!-- ltn__social-media -->
                                <div class="ltn__social-media">
                                    <ul>
                                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        
                                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ltn__header-top-area end -->

<!-- ltn__header-middle-area start -->
<div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white ltn__logo-right-menu-option sticky-active-into-mobile--- plr--9---">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="site-logo-wrap">
                    <div class="site-logo">
                        <a href="index.html"><img src="{{asset('assets/clients/img/logo.png')}}" alt="Logo"></a>
                    </div>
                </div>
            </div>
            <div class="col header-menu-column menu-color-white---">
                <div class="header-menu d-none d-xl-block">
                    <nav>
                        <div class="ltn__main-menu">
                            <ul>
                                <li class="menu-icon"><a href="{{route('trang_chu')}}">Home</a>
                                  
                                </li>
                                <li class="menu-icon"><a href="#">Giới Thiệu</a>
                                    <ul>
                                        <li><a href="shop.html">Giới thiệu</a></li>
                                        <li><a href="shop-grid.html">Địa chỉ</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="menu-icon"><a href="{{route('clients.shop')}}">Shop</a>
                                    <ul>
                                        <li><a href="{{route('clients.shop')}}">Sản Phẩm</a></li>

                                        @foreach ($danhmucs as $item)
                                            <li><a href="{{route('clients.product',$item->id)}}">{{$item->ten_danh_muc}}</a></li>
                                        @endforeach 
                                    </ul>
                                </li>
                                <li class="menu-icon"><a href="#">Tin Tức</a>
                                   
                                </li>
                                <li class="menu-icon"><a href="#">Pages</a>
                                </li>
                                <li><a href="contact.html">Liên Hệ</a></li>
                                <li class="special-link"><a href="contact.html">GET A QUOTE</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="ltn__header-options ltn__header-options-2">
                <!-- header-search-1 -->
                <div class="header-search-wrap">
                    <div class="header-search-1">
                        <div class="search-icon">
                            <i class="icon-search for-search-show"></i>
                            <i class="icon-cancel  for-search-close"></i>
                        </div>
                    </div>
                    <div class="header-search-1-form">
                        <form id="#" method="GET"  action="{{route('trang_chu')}}">
                            <input type="text" name="keyword" value="" placeholder="Search here..."/>
                            <button type="submit">
                                <span><i class="icon-search"></i></span>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- user-menu -->
                <div class="ltn__drop-menu user-menu">
                    <ul>
                        <li>
                            <a href="#"><i class="icon-user"></i></a>
                            <ul>
                                @if (Auth::check())
                                    <li><a href="{{route('clients.profile')}}" class="ms-1" >My Account</a></li>
                                    <li>
                                        <form action="{{route('logout')}}" method="POST" >
                                            @csrf
                                            <button type="submit" class="btn-logout" style="background: none; border: none;">Logout</button>
                                        </form>
                                    </li>
                                @else
                                    <li><a href="{{route('login')}}">Sign in</a></li>
                                    <li><a href="{{route('register')}}">Register</a></li>
                                @endif
                                
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- mini-cart -->
                <div class="mini-cart-icon">
                    <a href="{{ route('clients.cart.list') }}">
                        <i class="icon-shopping-cart"></i>
                        <sup>{{session('cart') ? count(session('cart')) : '0'}}</sup>
                    </a>
                </div>
                <!-- mini-cart -->
                <!-- Mobile Menu Button -->
                <div class="mobile-menu-toggle d-xl-none">
                    <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                        <svg viewBox="0 0 800 600">
                            <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                            <path d="M300,320 L540,320" id="middle"></path>
                            <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ltn__header-middle-area end -->