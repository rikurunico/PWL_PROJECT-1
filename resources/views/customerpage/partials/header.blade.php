<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="{{asset('frontend/asset/images/logowebb.png')}}" alt="diza logo" width="160" height="50" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('homePageCustomer') }}" class="{{ ($title == 'Dz Fashion - Homepage' )? 'active' : '' }}">Home</a></li>
                            <li class="scroll-to-section"><a href="{{url('/customer/produk/ld')}}" class="{{ ($title == 'Dz Fashion - Produk' )? 'active' : '' }}">Produk</a></li>
                            <li class="scroll-to-section"><a href="{{url('/customer/supplier')}}" class="{{ ($title == 'Dz Fashion - Supplier' )? 'active' : '' }}">Supplier</a></li>
                            <li class="scroll-to-section"><a href="{{url('/customer/about')}}" class="{{ ($title == 'Dz Fashion - About' )? 'active' : ''}}">About</a></li> 
                            <li class="scroll-to-section"><a href="{{url('/customer/profil')}}" class="{{ ($title == 'Dz Fashion - Profil Customer' )? 'active' : ''}}">Hello, {{ Auth::user() -> username }}</a></li> 
                            <a href="{{ route('cart.index') }}" >
                            <button class="btn btn-light text-black position-relative">
                                <i class="fas fa-shopping-cart fa-sm" ></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    {{ $all_cart->count() }}
                                </span>
                            </button>
                            </a>
                            <li class="scroll-to-section"><a href="{{ route('logout') }}" class="{{ ($title == 'Dz Fashion - Logout' )? 'active' : ''}}">Logout</a></li> 
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>