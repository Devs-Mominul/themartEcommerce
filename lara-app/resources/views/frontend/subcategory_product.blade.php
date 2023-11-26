@extends('frontend.master')
@section('frontend')




        <!-- start wpo-page-title -->
        <section class="wpo-page-title">
            <h2 class="d-none">Hide</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="wpo-breadcumb-wrap">
                            <ol class="wpo-breadcumb-wrap">
                                <li><a href="index.html">Home</a></li>
                                <li>Recently Viewed</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start of themart-interestproduct-section -->
        <section class="themart-interestproduct-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="wpo-section-title">
                            <h2>{{ $subcategory->subcategory_name }}</h2>
                        </div>
                    </div>
                </div>
                <div class="product-wrap">
                    <div class="row">
                       @forelse ($subcategory_product as $product)
                       <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="product-item">
                            <div class="image">
                                <img src="{{ asset('uploads/product/preview/') }}/{{ $product->preview }}" alt="">
                                <div class="tag new">New</div>
                            </div>
                            <div class="text">
                                <h2><a href="product-single.html">{{ $product->product_name }}</a></h2>
                                <div class="rating-product">
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <i class="fi flaticon-star"></i>
                                    <span>130</span>
                                </div>
                                <div class="price">
                                    <span class="present-price">$120.00</span>
                                    <del class="old-price">$200.00</del>
                                </div>
                                <div class="shop-btn">
                                    <a class="theme-btn-s2" href="product.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="alert alert-info">
                     <marquee behavior="" direction="">
                        <h4>
                            <span class="text-danger">
                               product not fount
                           </span>
                          </h4>
                     </marquee>
                    </div>

                       @endforelse

                        <div class="more-btn">
                            <a class="theme-btn-s2" href="product.html">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of themart-interestproduct-section -->

        <!-- popup-quickview  -->
        <div id="popup-quickview" class="modal fade" tabindex="-1">
            <div class="modal-dialog quickview-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="ti-close"></i></button>
                    <div class="modal-body d-flex">
                        <div class="product-details">
                            <div class="row align-items-center">
                                <div class="col-lg-5">
                                    <div class="product-single-img">
                                        <div class="modal-product">
                                            <div class="item">
                                                <img src="{{asset('frontend')}}/assets/images/modal.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="product-single-content">
                                        <h5>Wireless Headphones</h5>
                                        <h6>120.00 USD</h6>
                                        <ul class="rating">
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis ultrices
                                            lectus lobortis, dolor et tempus porta, leo mi efficitur ante, in varius
                                            felis
                                            sem ut mauris. Proin volutpat lorem inorci sed vestibulum tempus. Lorem
                                            ipsum
                                            dolor sit amet, consectetur adipiscing elit. Aliquam
                                            hendrerit.
                                        </p>
                                        <div class="pro-single-btn">
                                            <div class="quantity cart-plus-minus">
                                                <input type="text" value="1">
                                                <div class="dec qtybutton">-</div>
                                                <div class="inc qtybutton"></div>
                                            </div>
                                            <a href="#" class="theme-btn">Add to cart</a>
                                        </div>
                                        <div class="social-share">
                                            <span>Share with : </span>
                                            <ul class="socialLinks">
                                                <li><a href='#'><i class="fa fa-facebook"></i></a></li>
                                                <li><a href='#'><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href='#'><i class="fa fa-twitter"></i></a></li>
                                                <li><a href='#'><i class="fa fa-instagram"></i></a></li>
                                                <li><a href='#'><i class="fa fa-youtube-play"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- popup-quickview -->
        </div>

    </div>
    <!-- end of page-wrapper -->
@endsection

