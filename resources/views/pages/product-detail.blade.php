@extends('pages.template')

@section('content')


<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm productBreadcrumb" style='text-transform: capitalize;'>

</div>

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3 productImgSlick">
						<!-- <div class="item-slick3" data-thumb="images/thumb-item-01.jpg">
							<div class="wrap-pic-w">
								<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT" class="productImg">
							</div>
						</div>

						<div class="item-slick3" data-thumb="images/thumb-item-02.jpg">
							<div class="wrap-pic-w">
								<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">
							</div>
						</div>

						<div class="item-slick3" data-thumb="images/thumb-item-03.jpg">
							<div class="wrap-pic-w">
								<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">
							</div>
						</div> -->
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13 productName">

				</h4>

				<span class="m-text17 productPrice">

				</span>

				<p class="s-text8 p-t-10 productDesc">

				</p>

				<!--  -->
				<div class="p-t-33 p-b-60">
					<p class="text-danger sizeErr" style='display: none'>Please select prefered size.</p>
					<div class="flex-m flex-w p-b-10">
						<div class="s-text15 w-size15 t-center">
							Size
						</div>
						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2 productSize" name="size">

							</select>
						</div>
					</div>

					<p class="text-danger colorErr" style='display: none'>Please select prefered color.</p>
					<div class="flex-m flex-w">
						<div class="s-text15 w-size15 t-center">
							Color
						</div>
						<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
							<select class="selection-2 productColor" name="color">

							</select>
						</div>
					</div>

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
								<button class="color1 flex-c-m size7 bg8 eff2 subUpItem">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<input class="size8 m-text18 t-center num-product productQty" readonly type="number" name="num-product" value="1">

								<button class="color1 flex-c-m size7 bg8 eff2 addUpItem">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>

							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 addToCart">
									Add to Bag
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="p-b-45">
					<!-- <span class="s-text8 m-r-35">SKU: MUG-01</span> -->
					<span class="s-text8 productCategory"></span>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div>

				<!-- <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
						</p>
					</div>
				</div> -->

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews (3)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23 productReviews">
						<div class="alert alert-info">Please login to post a review.</div>
						<!-- <p >

						</p> -->
						<div class='pb-4 bb-1'>
							<span><strong>Savvy Manuel</strong></span> <span style='color: #aaa'><small>&bull; 1 days ago</small></span>
							<p class="s-text8">Deserunt nulla aliquip anim consectetur voluptate dolore nostrud. Incididunt ut cillum reprehenderit anim esse dolore consequat aute.</p>
							<hr>
						</div>
						<div class='pb-4 align-right' style='text-align: right'>
							<span style='color: #aaa'><small>9 hours ago &bull; </small></span><span><strong>Immanuel Giwa</strong></span>
							<p class="s-text8" style='text-align: left; margin-left: 50px'>Ex esse exercitation ea cupidatat enim labore sit aliquip velit qui. Dolore ad adipisicing voluptate ad irure pariatur cillum aliqua non dolor consectetur aliqua. Sit dolore eu dolor aliquip elit excepteur dolore cillum magna Lorem eu excepteur et nulla.</p>
							<hr>
						</div>
						<div class='pb-4'>
							<span><strong>Samanter Jane</strong></span> <span style='color: #aaa'><small>&bull; 7hours ago</small></span>
							<p class="s-text8">Ea do qui laborum ad mollit adipisicing aliquip. Dolor duis adipisicing nisi esse aliqua ea aute eu Lorem velit quis consequat nisi incididunt.</p>
						</div>

						<br><br>
						<form action="">
							<div class="form-group">
								<textarea cols="30" rows="5" class='form-control enterReview' style='resize: none;' placeholder='Please enter a review'>

								</textarea>
							</div>
							<button class='btn btn-secondary btn-block'>Post Review</button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2 relatedProducts">

				</div>
			</div>

		</div>
	</section>

<script src='js/product-detail.js'></script>

@endsection
