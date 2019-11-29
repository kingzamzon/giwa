@extends('pages.template')

@section('content')

<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/cart2.jpg);background-position: center bottom;">
    <h2 class="l-text2 t-center">
        Thank You
    </h2>
</section>

<!-- Thanks -->
<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">

  <div class="site-section">
      <div class="bg-light py-3 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Thank you</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Thank you!</h2>
            <p class="lead mb-5">Your order was successfully completed.</p>
            <p><a href="products.php" class="btn btn-sm btn-secondary" style='background: #e65540; border: none;'>Back to shop</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<script>
sessionStorage.removeItem('cart');
</script>
@endsection
