@extends('layouts.frontend')
@push('styles')

@endpush

@section('content')
<div class="container-indent nomargin">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-sm-12">
                <div class="tt-promo-fullwidth">
                    <img src="{{ asset('/') }}img/promo/loader.svg" data-src="{{ asset('/') }}img/promo/index18-promo-img-01.jpg" alt="">
                    <div class="tt-description">
                        <div class="tt-description-wrapper">
                            <div class="tt-title-small"><span class="tt-base-color">Women’s</span></div>
                            <div class="tt-title-large"><span class="tt-white-color">Sales<br>70% Off</span></div>
                            <a href="listing-collection.html" class="btn btn-xl">SHOP NOW!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container-indent1">
        <div class="container-fluid-custom container-fluid-custom-mobile-padding">
            <div class="tt-block-title text-left">
                <h1 class="tt-title">WOMEN’S</h1>
            </div>
            <div class="tt-tab-wrapper">
                <ul class="nav nav-tabs tt-tabs-default" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link show active" data-toggle="tab" href="#tt-tab-01" role="tab">NEW ARRIVALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab-02" role="tab">SPECIALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab-03" role="tab">BESTSELLERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab-04" role="tab">MOST VIEWED</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab-05" role="tab">FEATURED PRODUCTS</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active fade" id="tt-tab-01" role="tabpanel">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-collection-listing slick-animated-show-js" data-item="6">
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-05.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Shirts &amp; Tops</h2>
                                        <ul class="tt-add-info">
                                            <li>45 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-21.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Jackets &amp; Outerwear</h2>
                                        <ul class="tt-add-info">
                                            <li>35 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-46.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>28 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-23.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Pants</h2>
                                        <ul class="tt-add-info">
                                            <li>22 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-14.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>26 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-15.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>26 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-16.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>26 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tt-tab-02" role="tabpanel">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-collection-listing slick-animated-show-js"  data-item="6">
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-23.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Pants</h2>
                                        <ul class="tt-add-info">
                                            <li>22 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-14.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>26 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-03.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Shirts &amp; Tops</h2>
                                        <ul class="tt-add-info">
                                            <li>45 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-18.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Jackets &amp; Outerwear</h2>
                                        <ul class="tt-add-info">
                                            <li>35 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-11.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>28 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-21.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Jackets &amp; Outerwear</h2>
                                        <ul class="tt-add-info">
                                            <li>35 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-03.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>28 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tt-tab-03" role="tabpanel">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-collection-listing slick-animated-show-js" data-item="6">
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-18.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Jackets &amp; Outerwear</h2>
                                        <ul class="tt-add-info">
                                            <li>35 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-11.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>28 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-23.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Pants</h2>
                                        <ul class="tt-add-info">
                                            <li>22 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-14.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>26 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-03.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Shirts &amp; Tops</h2>
                                        <ul class="tt-add-info">
                                            <li>45 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-24.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Jackets &amp; Outerwear</h2>
                                        <ul class="tt-add-info">
                                            <li>35 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-25.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>28 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tt-tab-04" role="tabpanel">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-collection-listing slick-animated-show-js"  data-item="6">
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-03.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Shirts &amp; Tops</h2>
                                        <ul class="tt-add-info">
                                            <li>45 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-18.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Jackets &amp; Outerwear</h2>
                                        <ul class="tt-add-info">
                                            <li>35 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-11.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>28 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-23.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Pants</h2>
                                        <ul class="tt-add-info">
                                            <li>22 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-14.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>26 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tt-tab-05" role="tabpanel">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-collection-listing slick-animated-show-js"  data-item="6">
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-11.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>28 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-23.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Pants</h2>
                                        <ul class="tt-add-info">
                                            <li>22 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-46.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Shirts &amp; Tops</h2>
                                        <ul class="tt-add-info">
                                            <li>45 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-45.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Jackets &amp; Outerwear</h2>
                                        <ul class="tt-add-info">
                                            <li>35 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <a href="#" class="tt-collection-item">
                                    <div class="tt-image-box"><img src="{{ asset('/') }}img/product/product-14.jpg" alt=""></div>
                                    <div class="tt-description">
                                        <h2 class="tt-title">Sweaters</h2>
                                        <ul class="tt-add-info">
                                            <li>26 PRODUCTS</li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent1">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-sm-12">
                    <div class="tt-promo-fullwidth">
                        <img src="{{ asset('/') }}img/loader.svg" data-src="{{ asset('/') }}img/index18-promo-img-02.jpg" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-title-small"><span class="tt-base-color">MEN’S</span></div>
                                <div class="tt-title-large">New<br>Arrival</div>
                                <a href="listing-collection.html" class="btn btn-xl">SHOP NOW!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent1">
        <div class="container-fluid-custom container-fluid-custom-mobile-padding">
            <div class="tt-block-title text-left">
                <h2 class="tt-title">MEN’S</h2>
            </div>
            <div class="tt-tab-wrapper">
                <ul class="nav nav-tabs tt-tabs-default" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tt-tab01-01">NEW ARRIVALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab01-02">SPECIALS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab01-03">BESTSELLERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab01-04">MOST VIEWED</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tt-tab01-05">FEATURED PRODUCTS</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tt-tab01-01">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-layout-product-item slick-animated-show-js"  data-item="6">
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-20.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-20-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                        <div class="tt-countdown_box">
                                            <div class="tt-countdown_inner">
                                                <div class="tt-countdown"
                                                    data-date="2018-11-01"
                                                    data-year="Yrs"
                                                    data-month="Mths"
                                                    data-week="Wk"
                                                    data-day="Day"
                                                    data-hour="Hrs"
                                                    data-minute="Min"
                                                    data-second="Sec"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-price">
                                            $12
                                        </div>
                                        <div class="tt-option-block">
                                            <ul class="tt-options-swatch">
                                                <li><a class="options-color tt-color-bg-01" href="#"></a></li>
                                                <li><a class="options-color tt-color-bg-02" href="#"></a></li>
                                            </ul>
                                        </div>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-02.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-02-02.jpg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-price">
                                            $124
                                        </div>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-22.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-22-01.jpg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-price">
                                            $12
                                        </div>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-24.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-24-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-sale">Sale 15%</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#" tabindex="0">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-price">
                                            $12
                                        </div>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-17.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-17-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-price">
                                            $12
                                        </div>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-05.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-05-02.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-sale">Sale 15%</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#" tabindex="0">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-price">
                                            $12
                                        </div>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-25.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-25-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-price">
                                            $12
                                        </div>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tt-tab01-02">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-layout-product-item slick-animated-show-js"  data-item="6">
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-24.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-24-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-sale">Sale 15%</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-17.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-17-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-20.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-20-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-02.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-02-02.jpg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-22.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-22-02.jpg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-41.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-41-02.jpg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-28.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-28-02.jpg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tt-tab01-03">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-layout-product-item slick-animated-show-js"  data-item="6">
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-02.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-02-02.jpg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-22.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-22-02.jpg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-24.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-24-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-sale">Sale 15%</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-17.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-17-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-20.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-20-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-41.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-41-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-sale">Sale 15%</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-28.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-28-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tt-tab01-04">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-layout-product-item slick-animated-show-js"  data-item="6">
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-22.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-22-02.jpg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-02.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-02-02.jpg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-24.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-24-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-sale">Sale 15%</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-20.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-20-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-17.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-17-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-32.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-32-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-11.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-11-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tt-tab01-05">
                        <div class="tt-carousel-products row arrow-location-tab tt-alignment-img tt-layout-product-item slick-animated-show-js"  data-item="6">
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-02.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-02-02.jpg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-22.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-22-02.jpg" alt=""></span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-24.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-24-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-sale">Sale 15%</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-20.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-20-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-17.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-17-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-41.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-41-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 col-md-4 col-lg-3">
                                <div class="tt-product thumbprod-center">
                                    <div class="tt-image-box">
                                        <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
                            <a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
                            <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
                                        <a href="product.html">
                                            <span class="tt-img"><img src="{{ asset('/') }}img/product/product-28.jpg" alt=""></span>
                                            <span class="tt-img-roll-over"><img src="{{ asset('/') }}img/product/product-28-01.jpg" alt=""></span>
                                            <span class="tt-label-location">
                                                <span class="tt-label-new">New</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="tt-description">
                                        <div class="tt-row">
                                            <ul class="tt-add-info">
                                                <li><a href="#">T-SHIRTS</a></li>
                                            </ul>
                                            <div class="tt-rating">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-half"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                        </div>
                                        <h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
                                        <div class="tt-product-inside-hover">
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                            </div>
                                            <div class="tt-row-btn">
                                                <a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
                                                <a href="#" class="tt-btn-wishlist"></a>
                                                <a href="#" class="tt-btn-compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent">
        <div class="container-fluid">
            <div class="tt-block-title">
                <h2 class="tt-title"><a target="_blank" href="https://www.instagram.com/wokieeshop/">@ FOLLOW</a> US ON</h2>
                <div class="tt-description">INSTAGRAM</div>
            </div>
            <div class="row">
                <div id="instafeed" class="instafeed-fluid"
                    data-accessToken="8626857013.dd09515.0fcd8351c65140d48f5a340693af1c3f"
                    data-clientId="dd095157744c4bd0a67181fc4906e5b6"
                    data-userId="8626857013"
                    data-limitImg="6">
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
