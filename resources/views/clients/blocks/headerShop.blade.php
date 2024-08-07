 <!-- ltn__header-top-area start -->
 <div class="ltn__header-top-area d-none">
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
                 <div class="top-bar-right text-right text-end">
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
 <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black ltn__logo-right-menu-option plr--9---">
     <div class="container">
         <div class="row">
             <div class="col">
                 <div class="site-logo-wrap">
                     <div class="site-logo">
                         <a href="index.html"><img src="{{asset('assets/clients/img/logo-2.png')}}" alt="Logo"></a>
                     </div>
                 </div>
             </div>
             <div class="col header-menu-column menu-color-white">
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
                                           
                                           {{-- <li><a href="{{route('clients.shop.doUong')}}">Đồ uống</a></li>
                                           <li><a href="{{route('clients.shop.banhKem')}}">Bánh Kem</a></li>
                                           <li><a href="{{route('clients.shop.doAnNhanh')}}">Đồ ăn Nhanh</a></li>
                                           <li><a href="{{route('clients.shop.doChien')}}">Đồ Chiên</a></li> --}}
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
                         <form id="#" method="get"  action="#">
                             <input type="text" name="search" value="" placeholder="Search here..."/>
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
                                    <li><a class="ms-1" href="{{route('clients.profile')}}">My Account</a></li>
                                    <li>
                                        <form action="{{route('logout')}}" method="POST">
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
                 
             </div>
         </div>
     </div>
 </div>
 <!-- ltn__header-middle-area end -->