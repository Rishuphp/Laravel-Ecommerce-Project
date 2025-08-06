   @extends('front.layouts.app')

   @section('content')
 @section('content')
<style>
.marquee-container {
    perspective: 1000px;
    overflow: hidden;
    background: linear-gradient(0deg, rgba(206, 206, 206, 1) 0%, rgba(16, 16, 16, 1) 100%);
    padding: 12px 0;
    text-align: center;
    width: 100%;
}

.marquee-inner {
    display: inline-block;
    white-space: nowrap;
    font-size: 24px;
    font-weight: bold;
    animation: scroll 15s linear infinite, blink 1s step-start infinite, colorchange 5s linear infinite;
   
}

/* Horizontal scroll */
@keyframes scroll {
    0% { transform: translateX(100%) ; }
    100% { transform: translateX(-100%) ; }
}

/* Blinking effect */
@keyframes blink {
    100% { opacity: 0; }
    100% { opacity: 1; }
}

/* Color change effect */
@keyframes colorchange {
    0%   { color: red; }
    25%  { color: orange; }
    50%  { color: green; }
    75%  { color: blue; }
    100% { color: violet; }
}

/* Responsive */
@media (max-width: 768px) {
    .marquee-inner {
        font-size: 18px;
    }
}
@media (max-width: 480px) {
    .marquee-inner {
        font-size: 16px;
    }
}
</style>

<div class="marquee-container text-center">
    <span class="marquee-inner">🎉 Welcome to our Ecommerce Website! Hot Deals 🔥 | New Arrivals 🚀 | Big Discounts 💸</span>
</div>


<section class="section-1">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- <img src="images/carousel-1.jpg" class="d-block w-100" alt=""> -->

                        <picture>
                            <source media="(max-width: 799px)" srcset="{{asset('front-assets/images/image1.jpg')}}" />
                            <source media="(min-width: 800px)" srcset="{{asset('front-assets/images/image1.jpg')}}" />
                            <img src="{{asset('front-assets/images/image1.jpg')}}" alt="" />
                        </picture>

                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3">
                                <h1 class="display-4 text-white mb-3">Kids Fashion</h1>
                                <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3" href="{{route('front.shop')}}">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">

                        <picture>
                            <source media="(max-width: 799px)" srcset="images/carousel-2-m.jpg" />
                            <source media="(min-width: 800px)" srcset="images/carousel-2.jpg" />
                            <img src="images/carousel-2.jpg" alt="" />
                        </picture>

                        <picture>
                            <source media="(max-width: 799px)" srcset="{{asset('front-assets/images/carousel-2-m.jpg')}}" />
                            <source media="(min-width: 800px)" srcset="{{asset('front-assets/images/carousel-2.jpg')}}" />
                            <img src="{{asset('front-assets/images/carousel-2.jpg')}}" alt="" />
                        </picture>
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3">
                                <h1 class="display-4 text-white mb-3">Womens Fashion</h1>
                                <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img src="images/carousel-3.jpg" class="d-block w-100" alt=""> -->

                        <picture>
                            <source media="(max-width: 799px)" srcset="images/carousel-3-m.jpg" />
                            <source media="(min-width: 800px)" srcset="images/carousel-3.jpg" />
                            <img src="images/carousel-2.jpg" alt="" />
                        </picture>

                        <picture>
                            <source media="(max-width: 799px)" srcset="{{asset('front-assets/images/carousel-3-m.jpg')}}" />
                            <source media="(min-width: 800px)" srcset="{{asset('front-assets/images/carousel-3.jpg')}}" />
                            <img src="{{asset('front-assets/images/carousel-3.jpg')}}" alt="" />
                        </picture>

                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3">
                                <h1 class="display-4 text-white mb-3">Shop Online at Flat 70% off on Branded Clothes</h1>
                                <p class="mx-md-5 px-5">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="section-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="box shadow-lg">
                            <div class="fa icon fa-check text-primary m-0 mr-3"></div>
                            <h2 class="font-weight-semi-bold m-0">Quality Product</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="box shadow-lg">
                            <div class="fa icon fa-shipping-fast text-primary m-0 mr-3"></div>
                            <h2 class="font-weight-semi-bold m-0">Free Shipping</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="box shadow-lg">
                            <div class="fa icon fa-exchange-alt text-primary m-0 mr-3"></div>
                            <h2 class="font-weight-semi-bold m-0">14-Day Return</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 ">
                        <div class="box shadow-lg">
                            <div class="fa icon fa-phone-volume text-primary m-0 mr-3"></div>
                            <h2 class="font-weight-semi-bold m-0">24/7 Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-3">
            <div class="container">
                <div class="section-title">
                    <h2>Categories</h2>
                </div>
                <div class="row pb-3">
                    @if(getCategories()->isNotEmpty())

                    @foreach(getCategories() as $category)
                    <div class="col-lg-3">
                        <div class="cat-card">
                            <div class="left">
                                @if($category->name !="")
                                <img src="{{asset('uploads/category/thumb/'.$category->image)}}" alt="" class="img-fluid">

                                @endif
                                <!-- <img src="{{asset('front-assets/images/cat-1.jpg')}}" alt="" class="img-fluid"> -->
                            </div>
                            <div class="right">
                                <div class="cat-data">
                                    <h2>{{$category->name}}</h2>
                                    <!-- <p>100 Products</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    @endif


                    <!-- <div class="col-lg-3">
                    <div class="cat-card">
                        <div class="left">
                            <img src="{{asset('front-assets/images/cat-1.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2>Mens</h2>
                                <p>100 Products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <div class="left">
                            <img src="{{asset('front-assets/images/cat-1.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2>Mens</h2>
                                <p>100 Products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <div class="left">
                            <img src="{{asset('front-assets/images/cat-1.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2>Mens</h2>
                                <p>100 Products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <div class="left">
                            <img src="{{asset('front-assets/images/cat-1.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2>Mens</h2>
                                <p>100 Products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <div class="left">
                            <img src="{{asset('front-assets/images/cat-1.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2>Mens</h2>
                                <p>100 Products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="cat-card">
                        <div class="left">
                            <img src="{{asset('front-assets/images/cat-1.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="right">
                            <div class="cat-data">
                                <h2>Mens</h2>
                                <p>100 Products</p>
                            </div>
                        </div>
                    </div>
                </div> -->
                </div>
            </div>
        </section>

        <section class="section-4 pt-5">
            <div class="container">
                <div class="section-title">
                    <h2>Featured Products</h2>
                </div>
                <div class="row pb-3">
                    @if($featuredProducts->isNotEmpty())
                    @foreach($featuredProducts as $product)
                    @php
                    $productImage =$product->product_images->first();
                    @endphp
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="{{route('front.product',$product->slug)}}" class="product-img">

                                    <!-- <img class="card-img-top" src="{{asset('front-assets/images/product-1.jpg')}}" alt=""> -->
                                 @if(!empty($productImage->image))
											<img class="card-img-top" src="{{asset('uploads/product/small/'.$productImage->image)}}" c  >
                                            @else
                                            <img src="{{asset('admin-assets/img/default-150x150.png')}}" />

                                            @endif
                                </a>
                                <a onclick="addToWishlist({{$product->id}})" class="whishlist" href="javascript:void(0);"><i class="far fa-heart"></i></a>

                                <div class="product-action">
                                    @if($product->track_qty == 'Yes')
                                    @if($product->qty > 0)
                                    <a class="btn btn-dark" href="javascript:void(0);" onclick="addToCart({{$product->id}});">
                                        <i class="fa fa-shopping-cart"></i> Add To Cart
                                    </a>
                                    @else
                                     <a class="btn btn-dark" href="javascript:void(0);">
                                         Out of Stock
                                    </a>
                                    @endif
                                    @else
                                     <a class="btn btn-dark" href="javascript:void(0);" onclick="addToCart({{$product->id}});">
                                        <i class="fa fa-shopping-cart"></i> Add To Cart
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product.php">{{$product->title}}</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>₹{{$product->price}}</strong></span>
                                    @if($product->compare_price > 0)
                                    <span class="h6 text-underline"><del>₹{{$product->compare_price}}</del></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif



                </div>
            </div>
        </section>

        <section class="section-4 pt-5">
            <div class="container">
                <div class="section-title">
                    <h2>Latest Produsts</h2>
                </div>
                <div class="row pb-3">
                    @if($latestProducts->isNotEmpty())
                    @foreach($latestProducts as $product)
                    @php
                    $productImage =$product->product_images->first();
                    @endphp
                    <div class="col-md-3">
                        <div class="card product-card">
                            <div class="product-image position-relative">
                                <a href="{{route('front.product',$product->slug)}}" class="product-img">

                                    <!-- <img class="card-img-top" src="{{asset('front-assets/images/product-1.jpg')}}" alt=""> -->
                                 @if(!empty($productImage->image))
											<img class="card-img-top" src="{{asset('uploads/product/small/'.$productImage->image)}}" c  >
                                            @else
                                            <img src="{{asset('admin-assets/img/default-150x150.png')}}" />

                                            @endif
                                </a>
                                          <a onclick="addToWishlist({{$product->id}})" class="whishlist" href="javascript:coid(0);"><i class="far fa-heart"></i></a>

                                <div class="product-action">
                                    @if($product->track_qty == 'Yes')
                                    @if($product->qty > 0)
                                    <a class="btn btn-dark" href="javascript:void(0);" onclick="addToCart({{$product->id}});">
                                        <i class="fa fa-shopping-cart"></i> Add To Cart
                                    </a>
                                    @else
                                     <a class="btn btn-dark" href="javascript:void(0);">
                                        Out of Stock
                                    </a>
                                    @endif
                                    @else
                                     <a class="btn btn-dark" href="javascript:void(0);" onclick="addToCart({{$product->id}});">
                                        <i class="fa fa-shopping-cart"></i> Add To Cart
                                    </a>
                                    @endif
                                </div>
                            </div>
                            <div class="card-body text-center mt-3">
                                <a class="h6 link" href="product.php">{{$product->title}}</a>
                                <div class="price mt-2">
                                    <span class="h5"><strong>₹{{$product->price}}</strong></span>
                                    @if($product->compare_price > 0)
                                    <span class="h6 text-underline"><del>₹{{$product->compare_price}}</del></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </section>
   @endsection
   