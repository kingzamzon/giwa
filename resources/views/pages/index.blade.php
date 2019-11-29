@extends('pages.template')

@section('content')
    <!-- Slide1 -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 item1-slick1" style="background-image: url('images/ARC Banner 2.jpg');background-position: bottom">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                        <!-- Women Collection 2018 -->
                    </span>
                    <br>
                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        <!-- New arrivals -->
                    </h2>
                    <br><br><br><br>
                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <!-- Button -->
                        <a href="products.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4" style='margin-top:200px'>
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item2-slick1" style="background-image: url('images/ARC Banner.jpg');background-position: bottom;">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
                        <!-- Women Collection 2018 -->
                    </span>
                    <br>
                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                        <!-- New arrivals -->
                    </h2>
                    <br><br><br><br>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                        <!-- Button -->
                        <a href="products.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4" style='margin-top:200px'>
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Banner -->
<section class="banner bgwhite p-t-40 p-b-40">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Shop By Category
            </h3>
        </div>
        <div class="row">
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <!-- <img src="images/banner-02.jpg" alt="IMG-BENNER"> -->
                    <img src="images/hoodiess.jpg" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="products.php?cat=hoodies" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Sweatshirts
                        </a>
                    </div>
                </div>

                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <!-- <img src="images/banner-05.jpg" alt="IMG-BENNER"> -->
                    <img src="images/kids1.jpg" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="products.php?cat=kids-clothings" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Kids Clothings
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <!-- <img src="images/banner-03.jpg" alt="IMG-BENNER"> -->
                    <img src="images/footwears1.jpg" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="products.php?cat=footwears" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Footwears
                        </a>
                    </div>
                </div>

                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <!-- <img src="images/banner-07.jpg" alt="IMG-BENNER"> -->
                    <img src="images/denims.jpg" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="products.php?cat=denims-and-jeans" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Denims &amp; Jeans
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30">
                    <!-- <img src="images/banner-04.jpg" alt="IMG-BENNER"> -->
                    <img src="images/shirtts.jpg" alt="IMG-BENNER">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="products.php?cat=shirts" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            Shirts
                        </a>
                    </div>
                </div>

                <!-- block2 -->
                <div class="block2 wrap-pic-w pos-relative m-b-30">
                    <img src="images/icons/bg-01.jpg" alt="IMG">

                    <div class="block2-content sizefull ab-t-l flex-col-c-m">
                        <h4 class="m-text4 t-center w-size3 p-b-8">
                            Sign up & get 5% off
                        </h4>

                        <p class="t-center w-size4">
                            Be the first to know about the latest fashion news and get exclu-sive offers
                        </p>

                        <div class="w-size2 p-t-25">
                            <button type="button" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" data-toggle="modal" data-target="#exampleModalCenter">
                                Sign Up
                            </button>
                            <!-- <a href="#" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                                Sign Up
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- New Product -->
<section class="newproduct bgwhite p-t-15 p-b-105">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Featured Products
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2 featuredProducts">

            </div>
        </div>

    </div>
</section>

<!-- Shipping -->
<section class="shipping bgwhite p-t-62 p-b-46 bg-light mb-5">
    <div class="flex-w p-l-15 p-r-15">
        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">

            <h2 class="m-text12 t-center">
                <span class="icon mr-4 align-self-start">
                    <i class='fa fa-truck' style='font-size:40px'></i>
                </span>
                Shipping
            </h2>
            <span class="s-text11 t-center">Goods will be delivered less than two business days after order has been placed successfully.</span>
            <!-- <a href="#" class="s-text11 t-center">
                Click here for more info
            </a> -->
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
            <div class="icon mr-4 align-self-start">
            </div>
            <h4 class="m-text12 t-center">
                <span class="icon mr-4 align-self-start">
                    <i class='fa fa-refresh' style='font-size:40px'></i>
                </span>
                3 Days Return
            </h4>
            <span class="s-text11 t-center">
                If you are not satisfied with your purchase, you can return the product and get a full refund or exchange the product for another one. You can return a product for up to 72 hours from the date you got it delivered.
            </span>
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="m-text12 t-center">
                <span class="icon mr-4 align-self-start">
                    <i class='fa fa-user' style='font-size:40px'></i>
                </span>
                Customer Support
            </h4>

            <span class="s-text11 t-center">
                We have a 24/7 hotline <a href="tel://2348023049863">+234 802 304 9863</a> where we can always be reached. Also from our email address <a href="mailto://enquiries@arcstores.com"><em>enquiries@arcstores.com</em></a>.
            </span>
        </div>
    </div>
</section>

<div class="site-section site-blocks-2">
  <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    Collections
                </h3>
            </div>
    <div class="row mb-5">
      <div class="col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
        <a class="block-2-item" href="products.php?coll=women">
          <figure class="image">
            <img src="images/women.jpg" alt="" class="img-fluid">
          </figure>
          <div class="text">
            <span class="text-uppercase">Collections</span>
            <h3>Women</h3>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
        <a class="block-2-item" href="products.php?coll=men">
          <figure class="image">
            <img src="images/men.jpg" alt="" class="img-fluid">
          </figure>
          <div class="text">
            <span class="text-uppercase">Collections</span>
            <h3>Men</h3>
          </div>
        </a>
                </div>
      <div class="col-sm-6 col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
        <a class="block-2-item" href="products.php?coll=boys">
          <figure class="image">
            <img src="images/boyys.jpg" alt="" class="img-fluid">
          </figure>
          <div class="text">
            <span class="text-uppercase">Collections</span>
            <h3>Boys</h3>
          </div>
        </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
        <a class="block-2-item" href="products.php?coll=girls">
          <figure class="image">
            <img src="images/children.jpg" alt="" class="img-fluid">
          </figure>
          <div class="text">
            <span class="text-uppercase">Collections</span>
            <h3>Girls</h3>
          </div>
        </a>
      </div>
    </div>
  </div>
    </div>
<!-- <div class="site-section site-blocks-2">
    <div class="container-fluid">
        <div class="sec-title p-b-60 bg-light">
            <h3 class="m-text5 t-center" style='padding-top: 30px;'>
                Brands
            </h3>
        </div>
        <div class="row bg-light">
            <div class="col-lg-3 col-md-6 col-sm-6 brandLogo mx-2" data-aos="fade" data-aos-delay="200">
                <figure class="image">
                    <img src='images/vans-png-addthis-sharing-sidebar-600.png' class='img-fluid'>
                </figure>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 brandLogo" data-aos="fade" data-aos-delay="200">
                <figure class="image">
                    <img src='images/ARC Logo.png' class='img-fluid'>
                </figure>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 brandLogo" data-aos="fade" data-aos-delay="200">
                <figure class="image">
                    <img src='images/huspuppies2.dms' class='img-fluid'>
                </figure>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 brandLogo" data-aos="fade" data-aos-delay="200">
                <figure class='image'>
                    <img src='images/Wrangler_logo_gray.png' class='img-fluid'>
                </figure>
            </div>
        </div>
    </div>
</div> -->

<section class="shipping bgwhite p-t-62 p-b-46 bg-light">
    <div class="sec-title p-b-20">
        <h3 class="m-text5 t-center">
            Brands
        </h3>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-2 my-auto">
            <figure class='image' style='background: #fff;padding:0 20px height:100%;width:100%'>
                <img src='images/Fila_logo_logotype.png' class='img-fluid' alt='Fila Logo'>
            </figure>
        </div>
        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-2 my-auto">
            <figure class='image' style='background: #fff;padding:0 20px height:100%;width:100%'>
                <img src='images/ARC Logo.png' class='img-fluid' alt='Kingsley Heath Logo'>
            </figure>
        </div>
        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-2 my-auto">
            <figure class='image' style='background: #fff;padding:0 20px height:100%;width:100%'>
                <img src='images/guess.png' class='img-fluid' alt='Guess Logo'>
            </figure>
        </div>
        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-2 my-auto">
            <figure class='image' style='background: #fff;padding:0 20px height:100%;width:100%'>
                <img src='images/duesouth_1_orig.png' class='img-fluid' alt='DueSouth Logo'>
            </figure>
        </div>
        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-2 my-auto">
            <figure class='image' style='background: #fff;padding:0 20px height:100%;width:100%'>
                <img src='images/lee-cooper-logo.png' class='img-fluid' alt='Lee Cooper Logo'>
            </figure>
        </div>
        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-2 my-auto">
            <figure class='image' style='background: #fff;padding:0 20px height:100%;width:100%'>
                <img src='images/Soviet.png' class='img-fluid' alt='Soviet Logo'>
            </figure>
        </div>
        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-2 my-auto">
            <figure class='image' style='background: #fff;padding:0 20px height:100%;width:100%'>
                <img src='images/Urbanart logo.png' class='img-fluid' alt='Urbanart Logo'>
            </figure>
        </div>
        <!-- <div class="flex-col-c w-size4 p-l-15 p-r-15 p-t-16 p-b-15 respon1" style='display: inline-block'>
            <span class="s-text11 t-center">
                <figure class='image' style='background: #fff;padding:0 20px height:100%;width:100%'>
                    <img src='images/vans-png-addthis-sharing-sidebar-600.png' class='img-fluid' alt='Vans Logo'>
                </figure>
            </span>
        </div>

        <div class="flex-col-c w-size4 p-l-15 p-r-15 p-t-16 p-b-15 respon1" style='display: inline-block'>
            <span class="s-text11 t-center">
                <figure class='image' style='background: #fff;padding:0 20px height:100%;width:100%'>
                    <img src='images/ARC Logo.png' class='img-fluid' alt='Kingsley Heath Logo'>
                </figure>
            </span>
        </div>

        <div class="flex-col-c w-size4 p-l-15 p-r-15 p-t-16 p-b-15 respon1" style='display: inline-block'>
            <span class="s-text11 t-center">
                <figure class='image' style='background: #fff;padding:0 20px height:100%;width:100%'>
                    <img src='images/huspuppies2.dms' class='img-fluid' alt='Hush Puppies Logo'>
                </figure>
            </span>
        </div>

        <div class="flex-col-c w-size4 p-l-15 p-r-15 p-t-16 p-b-15 respon1" style='display: inline-block'>
            <span class="s-text11 t-center">
                <figure class='image' style='background: #fff;padding:0 20px height:100%;width:100%'>
                    <img src='images/Wrangler_logo_gray.png' class='img-fluid' alt='Wrangler Logo'>
                </figure>
            </span>
        </div>

        <div class="flex-col-c w-size4 p-l-15 p-r-15 p-t-16 p-b-15 respon1" style='display: inline-block'>
            <span class="s-text11 t-center">
                <figure class='image' style='background: #fff;padding:0 20px height:100%;width:100%'>
                    <img src='images/duesouth_1_orig.png' class='img-fluid' alt='DueSouth Logo'>
                </figure>
            </span>
        </div> -->
        </div> <!--.row-->
    </div> <!--.container-->
</section>

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Sign Up and Get 5% off!</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
            <p>Be the first to know about the latest fashion news and get exclusive offers </p> <br>
            <form class='dynamicForm'>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for='signFirstName'>First Name</label>
                        <input type="text" placeholder='Firstname' class='form-control' id='signFirstName'>
                    </div>
                    <div class="col-md-6">
                        <label for='signFirstName'>Last Name</label>
                        <input type="text" placeholder='Lastname' class='form-control' id='signLastName'>
                    </div>
                </div>
                <div id="spinner" class=''></div>
                <div class="form-group">
                    <label for="signEmail">Email</label>
                    <input type="email" class="form-control" placeholder='Email Address' id='signEmail'>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for='signPwd'>Password</label>
                        <input type="password" placeholder='Password' class='form-control' id='signPwd'>
                    </div>
                    <div class="col-md-6">
                        <label for='signCpwd'>Confirm Password</label>
                        <input type="password" placeholder='Confirm Password' class='form-control' id='signCpwd'>
                    </div>
                </div>
            </form>

            <p>Already a user? <a href='#' class='loginHere'>Login here</a></p>
        </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary btn-block signUp">Sign Up</button>
  </div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
     $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        $.ajax({
            url: "{{ url('api/products') }}",
            method: "get",
            success: function(data){
               console.log(data);
            }
        })
    })
</script>
<script src="js/modalLogs.js"></script>
<script>
let prods = JSON.parse(localStorage.getItem('products'));

function displayProduct(products){
    let productsDiv = document.querySelector('.featuredProducts');
    let out = '';
    // alert('helo')
    products.forEach((product)=>{
        out += `
            <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img src="${product.img}" alt="IMG-PRODUCT">
                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="fa fa-heart icon_heart_alt" aria-hidden="true"></i>
                                    <i class="fa fa-heart icon_heart dis-none" aria-hidden="true"></i>
                                </a>
                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Bag
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="block2-txt p-t-20">
                            <a href="product-detail.php?prod=${product.name}" class="block2-name dis-block s-text3 p-b-5">
                                ${product.name}
                            </a>
                            <span class="block2-price m-text6 p-r-5">
                                ${
                                    currencyConverter(product.price)
                                        .currency
                                }
                                ${
                                  