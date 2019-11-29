@extends('pages.template')

@section('content')
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/cart2.jpg);background-position: center bottom;">
    <h2 class="l-text2 t-center">
        Checkout
    </h2>
</section>

<!-- Checkout -->
<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">

<div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12">
        <div class="border p-4 rounded" role="alert">
          Returning customer? <a href="#">Click here</a> to login
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-5 mb-md-0">
        <h2 class="h3 mb-3 text-black">Billing Details</h2>
        <div class="p-3 p-lg-5 border">
          <div class="form-group">
            <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
            <select id="c_country" class="form-control countries">

            </select>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <label for="c_fname">First Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control firstName">
              <div class="invalid-feedback">* Please provide a valid name</div>
            </div>
            <div class="col-md-6">
              <label for="c_lname">Last Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control lastName">
              <div class="invalid-feedback">* Please provide a valid name</div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_companyname" class="text-black">Company Name </label>
              <input type="text" class="form-control companyName" id="c_companyname" name="c_companyname">
              <div class="invalid-feedback">* Please provide a valid company name</div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-md-12">
              <label for="c_address">Address <span class="text-danger">*</span></label>
              <input type="text" class="form-control physicalAddress" placeholder="Street address">
              <div class="invalid-feedback">* Please provide a valid address</div>
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control physicalApartment" placeholder="Apartment, suite, unit etc. (optional)">
            <div class="invalid-feedback">* Please provide a valid input</div>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
              <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
              <input type="text" class="form-control state">
              <div class="invalid-feedback">* Please provide a valid state </div>
            </div>
            <div class="col-md-6">
              <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
              <input type="text" class="form-control zipCode">
              <div class="invalid-feedback">* Please provide a valid zipcode</div>
            </div>
          </div>

          <div class="form-group row mb-5">
            <div class="col-md-6">
              <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
              <input type="text" class="form-control emailAddress">
              <div class="invalid-feedback">* Please provide a valid email address</div>
            </div>
            <div class="col-md-6">
              <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
              <input type="text" class="form-control phoneNumber" placeholder="Phone Number">
              <div class="invalid-feedback">* Please provide a valid phone number</div>
            </div>
          </div>
          <div class="form-group">
            <label for="c_ship_different_address" class="text-black"><input type="checkbox" value="1" id="c_ship_different_address" class='alternateShipAddr'> Add an alternate address?</label>
            <div id="ship_different_address" style='display: none;'>
              <div class="py-2">

                <div class="form-group">
                  <label for="c_diff_country" class="text-black">Country <span class="text-danger">*</span></label>
                  <select id="c_diff_country" class="form-control country2">

                  </select>
                </div>


                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_diff_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control altFirstName" id="c_diff_fname" name="c_diff_fname">
                    <div class="invalid-feedback">* Invalid first name</div>
                  </div>
                  <div class="col-md-6">
                    <label for="c_diff_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control altLastName">
                    <div class="invalid-feedback">* Invalid last name</div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_diff_companyname" class="text-black">Company Name </label>
                    <input type="text" class="form-control altCompanyName">
                    <div class="invalid-feedback">* Please provide a valid company name</div>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control altStrAddr" placeholder="Street address">
                    <div class="invalid-feedback">* Please provide a valid physical address</div>
                  </div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control altApartment" placeholder="Apartment, suite, unit etc. (optional)">
                </div>

                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_diff_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                    <input type="text" class="form-control altState">
                    <div class="invalid-feedback">* Please provide a valid state</div>
                  </div>
                  <div class="col-md-6">
                    <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                    <input type="text" class="form-control altZipCode">
                    <div class="invalid-feedback">* Please provide a valid zipcode</div>
                  </div>
                </div>

                <div class="form-group row mb-5">
                  <div class="col-md-6">
                    <label for="c_diff_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control altEmailAddr">
                    <div class="invalid-feedback">* Please provide a valid email address</div>
                  </div>
                  <div class="col-md-6">
                    <label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control altPhoneNumber" placeholder="Phone Number">
                    <div class="invalid-feedback">* Please provide a valid phone number</div>
                  </div>
                </div>

              </div>

            </div>
          </div>

          <div class="form-group">
            <label for="c_order_notes" class="text-black">Order Notes</label>
            <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control orderNote" placeholder="Write your notes here..."></textarea>
          </div>

        </div>
      </div>
      <div class="col-md-6">

        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Coupon Code</h2>
            <div class="p-3 p-lg-5 border">

              <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
              <div class="input-group w-75">
                <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-secondary btn-sm" type="button" id="button-addon2">Apply</button>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Your Order</h2>
            <div class="p-3 p-lg-5 border">
              <table class="table site-block-order-table mb-5">
                <thead>
                  <th>Items</th>
                  <th>Total</th>
                </thead>
                <tbody class='items'>

                </tbody>
              </table>

              <div class="border p-3 mb-3">
                <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Credit Card</a></h3>

                <div class="collapse" id="collapsebank">
                  <div class="py-2">
                    <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                  </div>
                </div>
              </div>

              <!-- <div class="border p-3 mb-3">
                <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Paypal</a></h3>

                <div class="collapse" id="collapsecheque">
                  <div class="py-2">
                    <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                  </div>
                </div>
              </div> -->
              <div class="form-group">
                <a class="btn btn-primary btn-md py-3 btn-block placeOrder" type='submit' style='background: #e65540;border: none; color: #fff;cursor:pointer;'>Place Order</a>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- </form> -->
    </div>
</section>

<script src="https://js.paystack.co/v1/inline.js"></script>
<script src='js/checkout.js'></script>
@endsection
