        <!-- Header -->
        <header class="header1">
            <!-- Header desktop -->
            <div class="container-menu-header">
                <div class="topbar">
                    <div class="topbar-social">
                        <a href="#" class="topbar-social-item fa fa-facebook"></a>
                        <a href="#" class="topbar-social-item fa fa-instagram"></a>
                        <!-- <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                        <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a> -->
                        <a href="#" class="topbar-social-item fa fa-twitter"></a>
                    </div>

                    <span class="topbar-child1">
                        <!-- Free shipping for standard order over $100 -->
                    </span>

                    <div class="topbar-child2">
                        <span class="topbar-email">
                            enquiries@arcstores.com
                        </span>

                        <div class="topbar-language rs1-select2">
                            <select class="countrySelector select-css" name="">
                                <option value='nigeria'>NGN</option>
                                <option value='south africa'>ZAR</option>
                                <option value='usa'>USD</option>
                                <option value='eur'>EUR</option>
                                <option value='jpy'>JPY</option>
                                <option value='cedi'>CEDI</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="wrap_header">
                    <!-- Logo -->
                    <a href="{{ url('/') }}" class="logo">
                        <img src="images/ARC Logo PNG.png" alt="IMG-LOGO" height='100' width='50'>
                    </a>

                    <!-- Menu -->
                    <div class="wrap_menu">
                        <nav class="menu">
                            <ul class="main_menu">
                                <li>
                                    <a href="{{ url('/') }}" style='color:#e65540'>Home</a>
                                </li>

                                <li>
                                    <a href="{{ url('/products') }}">Brands</a>
                                    <ul class="sub_menu">
                                        <li><a href="{{ url('/products') }}?brand=kingsley-heath">Kingsley Heath</a></li>
                                        <li><a href="{{ url('/products') }}?brand=vans">Vans</a></li>
                                        <li><a href="{{ url('/products') }}?brand=wrangler">Wrangler</a></li>
                                        <li><a href="{{ url('/products') }}?brand=hush-puppies">Hush Puppies</a></li>
                                        <li><a href="{{ url('/products') }}?brand=duesouth">Duesouth</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ url('/products') }}">Shop</a>
                                </li>

                                <li class="">
                                    <a href="{{ url('/products') }}?pro=onsale">Sale</a>
                                </li>

                                <li>
                                    <a href="{{ url('/products') }}?pro=newarrivals">New Arrivals</a>
                                </li>

                                <!-- <li>
                                    <a href="blog.html">Blog</a>
                                </li> -->

                                <li>
                                    <a href="{{ url('/products') }}">Catalogue</a>
                                    <ul class="sub_menu">
                                        <li><a href="{{ url('/products') }}?coll=men">Men</a></li>
                                        <li><a href="{{ url('/products') }}?coll=women">Women</a></li>
                                        <li><a href="{{ url('/products') }}?coll=girls">Girls</a></li>
                                        <li><a href="{{ url('/products') }}?coll=boys">Boys</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="{{ url('/contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- Header Icon -->
                    <div class="header-icons">
                        <div href="#" class="header-wrapicon1 dis-block">
                            <img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                            <!-- Header user noti -->
                            <div class="header-cart header-dropdown">

                                <em>Status: </em> <span>Not Logged In</span> <br>


                                <div class="header-cart-buttons">
                                    <div class="header-cart-wrapbtn">
                                        <button type="button" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4" data-toggle="modal" data-target="#exampleModalCenter">
                                            Sign Up
                                        </button>
                                    </div>
                                    <div class="header-cart-wrapbtn">
                                        <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                            Sign Up
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <span class="linedivide1"></span>

                        <div class="header-wrapicon2">
                            <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                            <span class="header-icons-noti cartCount">0</span>

                            <!-- Header cart noti -->
                            <div class="header-cart header-dropdown">
                                <ul class="header-cart-wrapitem">

                                </ul>

                                <div class="header-cart-total">
                                    <!-- Total: $75.00 -->
                                </div>

                                <div class="header-cart-buttons">
                                    <div class="header-cart-wrapbtn">
                                        <!-- Button -->
                                        <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4 headerCartBtn">
                                            View Bag
                                        </a>
                                    </div>

                                    <div class="header-cart-wrapbtn">
                                        <!-- Button -->
                                        <a href="checkout.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4 headerCheckOutBtn">
                                            Check Out
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Mobile -->
            <div class="wrap_header_mobile">
                <!-- Logo moblie -->
                <a href="index.php" class="logo-mobile">
                    <img src="images/ARC Logo PNG.png" alt="IMG-LOGO">
                </a>

                <!-- Button show menu -->
                <div class="btn-show-menu">
                    <!-- Header Icon mobile -->
                    <div class="header-icons-mobile">
                        <div href="#" class="header-wrapicon1 dis-block">
                            <img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                            <!-- Header user noti -->
                            <div class="header-cart header-dropdown">

                                <em>Status: </em> <span>Not Logged In</span> <br>

                                <div class="header-cart-buttons">
                                    <div class="header-cart-wrapbtn">
                                        <button type="button" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4" data-toggle="modal" data-target="#exampleModalCenter">
                                            Sign Up
                                        </button>
                                    </div>
                                    <div class="header-cart-wrapbtn">
                                        <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                            Sign Up
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <span class="linedivide2"></span>

                        <div class="header-wrapicon2">
                            <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                            <span class="header-icons-noti cartCount">0</span>

                            <!-- Header cart noti -->
                            <div class="header-cart header-dropdown">
                                <ul class="header-cart-wrapitem">

                                </ul>

                                <div class="header-cart-total">
                                    <!-- Total: $75.00 -->
                                </div>

                                <div class="header-cart-buttons">
                                    <div class="header-cart-wrapbtn">
                                        <!-- Button -->
                                        <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                            View Bag
                                        </a>
                                    </div>

                                    <div class="header-cart-wrapbtn">
                                        <!-- Button -->
                                        <a href="checkout.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                            Check Out
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Menu Mobile -->
            <div class="wrap-side-menu" >
                <nav class="side-menu">
                    <ul class="main-menu">
                        <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                            <span class="topbar-child1">
                                <!-- Free shipping for standard order over $100 -->
                            </span>
                        </li>

                        <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                            <div class="topbar-child2-mobile">
                                <span class="topbar-email">
                                    enquiries@arcstores.com
                                </span>

                                <div class="topbar-language rs1-select2">
                                    <select class="countrySelector2 select-css" name="time">
                                    <option value='nigeria'>NGN</option>
                                    <option value='south africa'>ZAR</option>
                                    <option value='usa'>USD</option>
                                    <option value='eur'>EUR</option>
                                    <option value='jpy'>JPY</option>
                                    <option value='cedi'>CEDI</option>
                                    </select>
                                </div>
                            </div>
                        </li>

                        <li class="item-topbar-mobile p-l-10">
                            <div class="topbar-social-mobile">
                                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                                <!-- <a href="#" class="topbar-social-item fa fa-pinterest-p"></a> -->
                                <!-- <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a> -->
                                <a href="#" class="topbar-social-item fa fa-twitter"></a>
                            </div>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="index.php" style='color:#e65540'>Home</a>
                            <!-- <ul class="sub-menu">
                                <li><a href="index.html">Homepage V1</a></li>
                                <li><a href="home-02.html">Homepage V2</a></li>
                                <li><a href="home-03.html">Homepage V3</a></li>
                            </ul>
                            <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i> -->
                        </li>



                        <li class="item-menu-mobile">
                            <a href="products.php">Shop</a>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="products.php">Brands</a>
                            <ul class="sub_menu">
                                <li><a href="products.php?brand=kingsley-heath">Kingsley Heath</a></li>
                                <li><a href="products.php?brand=vans">Vans</a></li>
                                <li><a href="products.php?brand=wrangler">Wrangler</a></li>
                                <li><a href="products.php?brand=hush-puppies">Hush Puppies</a></li>
                                <li><a href="products.php?brand=duesouth">Duesouth</a></li>
                            </ul>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="products.php?pro=onsale">Sale</a>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="products.php?pro=newarrivals">New Arrivals</a>
                        </li>

                        <!-- <li class="item-menu-mobile">
                            <a href="blog.html">Blog</a>
                        </li> -->

                        <li class="item-menu-mobile">
                            <a href="products.php">Catalogue</a>
                            <ul class="sub_menu">
                                <li><a href="products.php?coll=men">Men</a></li>
                                <li><a href="products.php?coll=women">Women</a></li>
                                <li><a href="products.php?coll=girls">Girls</a></li>
                                <li><a href="products.php?coll=boys">Boys</a></li>
                            </ul>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
