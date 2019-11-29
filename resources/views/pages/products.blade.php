@extends('pages.template')

@section('content')

<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m bg-light" style="background-image: url(images/blog_1.jpg);">
    <h2 class="l-text2 t-center">
        Arc Store
    </h2>
    <p class="m-text13 t-center">
  Premium quality on wears at affordable prices
    </p>
</section>


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                    <!--  -->
                    <h4 class="m-text14 p-b-7">
                        Categories
                    </h4>

                    <ul class="p-b-54 category">
                        <li class="p-t-4">
                            <a href="products.php" class="s-text13 active1 catAll">
                                All
                            </a>
                        </li>

                        <li class="p-t-4">
                            <a href="products.php?coll=women" class="s-text13 cats">
                                Women
                            </a>
                        </li>

                        <li class="p-t-4">
                            <a href="products.php?coll=men" class="s-text13 cats">
                                Men
                            </a>
                        </li>

                        <li class="p-t-4">
                            <a href="products.php?coll=girls" class="s-text13 cats">
                                Girls
                            </a>
                        </li>

                        <li class="p-t-4">
                            <a href="products.php?coll=boys" class="s-text13 cats">
                                Boys
                            </a>
                        </li>
                    </ul>

                    <!--  -->
                    <!-- <h4 class="m-text14 p-b-32">
                        Filters
                    </h4> -->

                    <!-- <div class="filter-price p-t-22 p-b-50 bo3">
                        <div class="m-text15 p-b-17">
                            Price
                        </div>

                        <div class="wra-filter-bar">
                            <div id="filter-bar"></div>
                        </div>

                        <div class="flex-sb-m flex-w p-t-16">
                            <div class="w-size11">
                                <button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
                                    Filter
                                </button>
                            </div>

                            <div class="s-text3 p-t-10 p-b-10">
                                Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="filter-color p-t-22 p-b-50 bo3">
                        <div class="m-text15 p-b-12">
                            Color
                        </div>

                        <ul class="flex-w">
                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
                                <label class="color-filter color-filter1" for="color-filter1"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
                                <label class="color-filter color-filter2" for="color-filter2"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
                                <label class="color-filter color-filter3" for="color-filter3"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
                                <label class="color-filter color-filter4" for="color-filter4"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
                                <label class="color-filter color-filter5" for="color-filter5"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
                                <label class="color-filter color-filter6" for="color-filter6"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
                                <label class="color-filter color-filter7" for="color-filter7"></label>
                            </li>
                        </ul>
                    </div> -->

                    <p>Search product by name</p>
                    <div class="search-product pos-relative bo4 of-hidden">
                        <input class="s-text7 size6 p-l-23 p-r-50 searchFilter form-control" type="text" name="search-product" placeholder="Search Products..." id=search-product>

                        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                            <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                <!--  -->
                <div class="flex-sb-m flex-w p-b-35">
                    <div class="flex-w">
                        <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                            <select class="selection-2 sortByOther form-control" name="sorting">
                                <option value='default'>Default Sorting</option>
                                <!-- <option>Popularity</option> -->
                                <option value='high'>Price: high to low</option>
                                <option value='low'>Price: low to high</option>
                            </select>
                        </div>

                        <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                            <select class="selection-2 sortByPrice form-control" name="sorting">
                                <!-- <option>All Price</option>
                                <option value='200-999'>&#8358;200.00 - &#8358;999.99</option>
                                <option value='1000-4999'>&#8358;1000.00 - &#8358;4999.99</option>
                                <option value='5000-9999'>&#8358;5000.99 - &#8358;9999.99</option>
                                <option value='10000-14999'>&#8358;10000.00 - &#8358;14999.99</option>
                                <option value='15000'>&#8358;15000.00+</option> -->
                            </select>
                        </div>
                    </div>

                    <span class="s-text8 p-t-5 p-b-5 resultStat">
                        <!-- Showing 1–12 of 16 results -->
                    </span>
                </div>

                <!-- Product -->
                <div class="row products">

                </div>

                <!-- Pagination -->
                <div class="pagination flex-m flex-w p-t-26">
                    <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                    <!-- <a href="#" class="item-pagination flex-c-m trans-0-4">2</a> -->
                </div>
            </div>
        </div>
    </div>
</section>


<script src='js/products.js'></script>
@endsection
