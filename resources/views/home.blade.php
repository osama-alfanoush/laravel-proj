<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 17:05:06 GMT -->
<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="Codescandy" name="author">
  <title>Homepage v1 - eCommerce HTML Template - FreshCart </title>

  <link href="{{ asset('libs/slick-carousel/slick/slick.css') }}" rel="stylesheet" />
<link href="{{ asset('libs/slick-carousel/slick/slick-theme.css') }}" rel="stylesheet" />
<link href="{{asset('libs/tiny-slider/dist/tiny-slider.css')}}" rel="stylesheet">

  <!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/favicon.ico') }}">


<!-- Libs CSS -->
<link href="{{ asset('libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
<link href="{{ asset('libs/feather-webfont/dist/feather-icons.css') }}" rel="stylesheet">
<link href="{{asset('libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">


<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M8S4MT3EYG');
</script>

</head>

<body>

  <div class="border-bottom ">

    <div class="py-5">
      <div class="container">
        <div class="row w-100 align-items-center gx-lg-2 gx-0">
          <div class="col-xxl-2 col-lg-3">
            <a class="navbar-brand d-none d-lg-block" href="{{ route('home') }}">
              <img src="{{ asset('images/logo/freshcart-logo.svg') }}">

            </a>
            <div class="d-flex justify-content-between w-100 d-lg-none">
              <a class="navbar-brand" href="index.html">
                <img src="{{ asset('images/logo/freshcart-logo.svg') }}">

              </a>

              <div class="d-flex align-items-center lh-1">

                <div class="list-inline me-4">
                  <div class="list-inline-item">

                    <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                    </a>
                  </div>


                </div>
                <!-- Button -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-label="Toggle navigation">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-text-indent-left text-primary" viewBox="0 0 16 16">
                    <path
                      d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                  </svg>
                </button>

              </div>
            </div>

          </div>
          <div class="col-xxl-5 col-lg-5 d-none d-lg-block">

            </form>
            <form action="{{ route('products.search') }}" method="get">
              <div class="input-group ">
                <input type="text" name="query" class="form-control rounded" type="search" placeholder="Search for products...">
                <span class="input-group-append">
                  <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-search">
                      <circle cx="11" cy="11" r="8"></circle>
                      <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                  </button>
                </span>
              </div>

            </form>
          </div>

          <div class="col-md-2 col-xxl-2 text-end d-none d-lg-block"style="margin-left:270px;margin-right:25px">


          <div class="list-inline-item me-5 ms-5"  style="display: inline-block; margin-right: 10px;" >
            <a href="#" class="text-muted" data-bs-toggle="dropdown">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>

              @if (Auth::check())
                {{ Auth::user()->name }}
              @endif
            </a>

            <ul class="dropdown-menu">
              @if (Auth::check())
                <li><a href="{{ route('user.profile') }}" class="dropdown-item">Profile</a></li>
                <li>   <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form></li>
              @else

                <li><a href="{{ route('login') }}" class="dropdown-item">Login</a></li>

                <li><a href="{{ route('register') }}" class="dropdown-item">Signup</a></li>
              @endif
            </ul>
          </div>

              <div class="list-inline-item mx-5 ms-5"   style="display: inline-block; margin-right: 10px;">

                <a class="text-muted position-relative "
                  href="{{ route('cart.items.index') }}" role="button" aria-controls="offcanvasRight">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-shopping-bag">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                  </svg>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    {{ $productCount}}

                </a>

              </div>





            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 pb-lg-4 mt-3" aria-label="Offcanvas navbar large">
        <div class="container">


          <div class="offcanvas offcanvas-start" tabindex="-1" id="navbar-default" aria-labelledby="navbar-defaultLabel">
            <div class="offcanvas-header pb-1">
              <a href="index.html"><img src="{{ asset('images/logo/freshcart-logo.svg') }}" alt="eCommerce HTML Template"></a>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <div class="d-block d-lg-none mb-4">
                <form action="#">
                  <div class="input-group ">
                    <input class="form-control rounded" type="search" placeholder="Search for products">
                    <span class="input-group-append">
                      <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="feather feather-search">
                          <circle cx="11" cy="11" r="8"></circle>
                          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                      </button>
                    </span>
                  </div>
                </form>
                <div class="mt-2">

                </div>
              </div>

              <div class="dropdown me-3 d-none d-lg-block">
                  <button class="btn btn-primary px-6 " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="me-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-grid">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                      </svg></span>  Category
                  </button>
                  @php
                  $categories = App\Models\Category::inRandomOrder()->take(5)->get();
                @endphp
         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          @foreach ($categories as $category)
            <li><a class="dropdown-item" href="{{ route('categories.products',$category->id) }}">{{ $category->name }}</a></li>
          @endforeach
        </ul>
                </div>

              <div class="">
                <ul class="navbar-nav align-items-center ">

                    <a class="nav-link " href="{{ route('home') }}" role="button"
                      aria-expanded="false">
                      Home
                    </a>


                  <li class="nav-item dropdown w-100 w-lg-auto">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      Shop
                    </a>
                    @php
                  $shops = App\Models\Seller::inRandomOrder()->take(5)->get();
                  @endphp
                       <ul class="dropdown-menu">
                           @foreach ($shops as $shop)


                           <li><a class="dropdown-item" href="{{ route('shop.products',$shop->id) }}">{{ $shop->shop_name }}</a></li>
                          @endforeach
                           </ul>


                  </li>

                  <li class="nav-item dropdown w-100 w-lg-auto dropdown-fullwidth">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Mega menu
                      </a>
                      <div class=" dropdown-menu pb-0">
                        <div class="row p-2 p-lg-4">
                          @php
                          $categories = App\Models\Category::inRandomOrder()->take(3)->get();
                        @endphp

                                  @foreach ($categories as $category)
                          <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                            <a class="dropdown-item" href="{{ route('categories.products',$category->id) }}">
                                  <h6 class="text-primary ps-3">{{ $category->name }}</h6></a>
                                @foreach ($category->products as $product)
                                @if ($product !== null)
    <a class="dropdown-item" href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
@endif
                          @endforeach
                          </div>
                  @endforeach
                          </div>


                      </div>
                    </li>
                    <li class="nav-item  w-100 w-lg-auto">
                        <a class="nav-link " href="{{ route('contact.index') }}"
                          >
                         Contact us
                        </a>
                    </li>

                          @auth()

                          <li class="nav-item">

                            @if($seller = App\Models\Seller::where('user_id', auth()->id())->first())


                              <a class="nav-link" href="{{ route('seller.home') }}">
                              My Shop
                              </a>

                            @else

                              <a class="nav-link" href="{{ route('user.become.seller') }}">
                                Become a Seller
                              </a>

                            @endif

                          </li>

                        @endauth




                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>




  <main>
    <section class="mt-8">
      <div class="container">
        <div class="hero-slider ">
          <div
            style="background: url(images/slider/beuty.png)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
            <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
              <span class="badge text-bg-warning">Opening Sale Discount 50%</span>

              <h2 class="text-dark display-5 fw-bold mt-4">Free Shipping - orders over $100 </h2>
              <p class="lead">Introduced a new model for online grocery shopping
                and convenient home delivery.</p>
              <a href="#!" class="btn btn-dark mt-3">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
            </div>

          </div>
          <div class=" "
            style="background: url(images/slider/book.png)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
            <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
              <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
              <h2 class="text-dark display-5 fw-bold mt-4">Free Shipping on <br> orders over <span
                  class="text-primary">$100</span></h2>
              <p class="lead">Free Shipping to First-Time Customers Only, After promotions and discounts are applied.
              </p>
              <a href="#!" class="btn btn-dark mt-3">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
            </div>

          </div>

        </div>
      </div>
    </section>

    <!-- Category Section Start-->
    <section class="mb-lg-10 mt-lg-14 my-8">
        <div class="container">
          <div class="row">
            <div class="col-12 mb-6">

              <h3 class="mb-0">Featured Categories</h3>

            </div>
          </div>
          <div class="category-slider ">
            @php
              $categories = App\Models\Category::inRandomOrder()->get();
            @endphp

            @foreach ($categories as $category)
              <div class="item">
                <a href="{{ route('categories.products',$category->id) }}" class="text-decoration-none text-inherit">
                  <div class="card card-product mb-lg-4">
                    <div class="card-body text-center py-8">
                      <img src="{{ asset($category->image) /*Storage::url($category->image)*/ }}" class="mb-3 img-fluid">
                      <div class="text-truncate">{{ $category->name }}</div>
                    </div>
                  </div>
                </a>
              </div>
            @endforeach
          </div>
        </div>
      </section>

    <!-- Category Section End-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 mb-3 mb-lg-0">
            <div>
              <div class="py-10 px-8 rounded"
                style="background:url(images/banner/elcbanner.jpg)no-repeat; background-size: cover; background-position: center;">
                <div>
                    <h1>.</h1>

                </div>
              </div>
              <a style="margin-right:15px " href="#!" class="btn btn-dark ">Shop Now</a>
            </div>

          </div>
          <div class="col-12 col-md-6 ">

            <div>
              <div class="py-10 px-8 rounded"
                style="background:url(images/banner/clobanner.jpeg)no-repeat; background-size: cover; background-position: center;">
                <div>

                  <a href="#!" class="btn btn-dark">Shop Now</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Popular Products Start-->
    <section class="my-lg-14 my-8">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-6">

            <h3 class="mb-0">Popular Products</h3>
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
          </div>
        </div>
            @php
                $products =  App\Models\Product::inRandomOrder()->limit(10)->get();
            @endphp

        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">

            @foreach ($products->take(10) as $product)
            <div class="col">
                <div class="card card-product">
                  <div class="card-body">

                    <div class="text-center position-relative ">
                      <div class=" position-absolute top-0 start-0">
                        <span class="badge bg-danger">Sale</span>
                      </div>
                      <a href="{{ route('products.show', ['product' => $product->id]) }}"> <img src="{{ asset('app/localimage/'.$product->image) }}" alt="Grocery Ecommerce Template"
                          class="mb-3 img-fluid"></a>

                      <div class="card-product-action">
                        <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                            class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                            class="bi bi-heart"></i></a>
                        <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                            class="bi bi-arrow-left-right"></i></a>
                      </div>

                    </div>
                    <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>{{$product->category->name  }}</small></a></div>

                    <h2 class="fs-6"><a href="{{ route('products.show', ['product' => $product->id]) }}" class="text-inherit text-decoration-none">{{ $product->name }}</a></h2>
                    <div>

                      <small class="text-warning"> <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i></small> <span class="text-muted small">{{ $product->rating }}({{ $product->reviews_count }})</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                      <div><span class="text-dark">${{ $product->price }}</span> <span
                          class="text-decoration-line-through text-muted">${{ $product->old_price }}</span>
                      </div>
                      <form action="{{ route('cart.items.store') }}" method="POST">
                        @csrf
                        @if (Session::has('danger'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ Session::get('danger') }}

                        </div>
                    @endif

                        <div>
                          <input type="hidden" name="product_id" value="{{ $product->id }}">
                          <div class="input-group mb-3">
                            <input type="hidden" class="form-control" name="quantity" value="1">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-plus">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                              </svg> Add</button>
                          </div>

                           </a></div>
                          </form>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

        </div>
      </div>
    </section>
    <!-- Popular Products End-->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-6">
            <h3 class="mb-0">Daily Best Sells</h3>
          </div>
        </div>
        <div class="table-responsive-xl pb-6">
        <div class="row row-cols-lg-4 row-cols-1 row-cols-md-2 g-4 flex-nowrap">
          <div class="col">
            <div class=" pt-8 px-6 px-xl-8 rounded"
              style="background:url(images/banner/banner-deal.jpg)no-repeat; background-size: cover; height: 470px;">
              <div>
                <h3 class="fw-bold text-white">100% Organic
                  Coffee Beans.
                </h3>
                <p class="text-white">Get the best deal before close.</p>
                <a href="#!" class="btn btn-primary">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center  position-relative "> <a href="pages/shop-single.html"><img
                      src="{{ asset('images/products/gaminlaptop.jpg') }}" alt="Grocery Ecommerce Template"
                      class="mb-3 img-fluid"></a>

                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                      class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Laptop</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">HP Pavilion Gaming Laptop</a></h2>

                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$750</span> <span
                      class="text-decoration-line-through text-muted">$900</span>
                  </div>
                  <div>
                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                    </small>
                    <span><small>4.5</small></span>
                  </div>
                </div>
                <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg> Add to cart </a></div>
                <div class="d-flex justify-content-start text-center mt-3">
                  <div class="deals-countdown w-100" data-countdown="2023/10/27 00:00:00"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center  position-relative "> <a href="pages/shop-single.html"><img
                      src="{{ asset('images/products/clear.jpg') }}" alt="Grocery Ecommerce Template"
                      class="mb-3 img-fluid"></a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Beauty and Personal Care</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Clear Men Anti-dandruff Anti Hair Fall Shampoo</a></h2>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$13</span> <span
                      class="text-decoration-line-through text-muted">$25</span>
                  </div>
                  <div>
                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                    </small>
                    <span><small>4.5</small></span>
                  </div>
                </div>
                <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg> Add to cart </a></div>
                <div class="d-flex justify-content-start text-center mt-3 w-100">
                  <div class="deals-countdown w-100" data-countdown="2023/12/9 00:00:00"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center  position-relative "> <a href="pages/shop-single.html"><img
                      src="{{ asset('images/products/book.jpg') }}" alt="Grocery Ecommerce Template"
                      class="mb-3 img-fluid"></a>
                  <div class="card-product-action">
                    <a href="#!" class="btn-action" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                        class="bi bi-eye" data-bs-toggle="tooltip" data-bs-html="true" title="Quick View"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Wishlist"><i
                        class="bi bi-heart"></i></a>
                    <a href="#!" class="btn-action" data-bs-toggle="tooltip" data-bs-html="true" title="Compare"><i
                        class="bi bi-arrow-left-right"></i></a>
                  </div>
                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>Books</small></a></div>
                <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">Rich Dad Poor Dad by Robert T. Kiyosaki</a></h2>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <div><span class="text-dark">$25</span> <span
                      class="text-decoration-line-through text-muted">$45</span>
                  </div>
                  <div>
                    <small class="text-warning"> <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i></small>
                    <span><small>4.5</small></span>
                  </div>
                </div>
                <div class="d-grid mt-2"><a href="#!" class="btn btn-primary ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-plus">
                      <line x1="12" y1="5" x2="12" y2="19"></line>
                      <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg> Add to cart </a></div>
                <div class="d-flex justify-content-start text-center mt-3">
                  <div class="deals-countdown w-100" data-countdown="2023/11/1 00:00:00"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <section class="my-lg-14 my-8">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="mb-8 mb-xl-0">
              <div class="mb-6"><img src="images/icons/clock.svg" alt=""></div>
              <h3 class="h5 mb-3">
                10 minute grocery now
              </h3>
              <p>Get your order delivered to your doorstep at the earliest from FreshCart pickup stores near you.</p>
            </div>
          </div>
          <div class="col-md-6  col-lg-3">
            <div class="mb-8 mb-xl-0">
              <div class="mb-6"><img src="images/icons/gift.svg" alt=""></div>
              <h3 class="h5 mb-3">Best Prices & Offers</h3>
              <p>Cheaper prices than your local supermarket, great cashback offers to top it off. Get best pricess &
                offers.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="mb-8 mb-xl-0">
              <div class="mb-6"><img src="images/icons/package.svg" alt=""></div>
              <h3 class="h5 mb-3">Wide Assortment</h3>
              <p>Choose from 5000+ products across food, personal care, household, bakery, veg and non-veg & other
                categories.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="mb-8 mb-xl-0">
              <div class="mb-6"><img src="images/icons/refresh-cw.svg" alt=""></div>
              <h3 class="h5 mb-3">Easy Returns</h3>
              <p>Not satisfied with a product? Return it at the doorstep & get a refund within hours. No questions asked
                <a href="#!">policy</a>.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <!-- Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body p-8">
        <div class="position-absolute top-0 end-0 me-3 mt-3">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <!-- img slide -->
            <div class="product productModal" id="productModal">
              <div
                class="zoom"
                onmousemove="zoom(event)"
                style="
                  background-image: url(images/products/product-single-img-1.jpg);
                "
              >
                <!-- img -->
                <img
                  src="images/products/product-single-img-1.jpg"
                  alt=""
            >
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(images/products/product-single-img-2.jpg);
                  "
                >
                  <!-- img -->
                  <img
                    src="images/products/product-single-img-2.jpg"
                    alt=""
              >
                </div>
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(images/products/product-single-img-3.jpg);
                  "
                >
                  <!-- img -->
                  <img
                    src="images/products/product-single-img-3.jpg"
                    alt=""
              >
                </div>
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(images/products/product-single-img-4.jpg);
                  "
                >
                  <!-- img -->
                  <img
                    src="images/products/product-single-img-4.jpg"
                    alt=""
              >
                </div>
              </div>
            </div>
            <!-- product tools -->
            <div class="product-tools">
              <div class="thumbnails row g-3" id="productModalThumbnails">
                <div class="col-3" class="tns-nav-active">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img
                      src="images/products/product-single-img-1.jpg"
                      alt=""
                >
                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img" >
                    <!-- img -->
                    <img
                      src="images/products/product-single-img-2.jpg"
                      alt=""
                >
                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img
                      src="images/products/product-single-img-3.jpg"
                      alt=""
                >
                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img
                      src="images/products/product-single-img-4.jpg"
                      alt=""
                >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ps-lg-8 mt-6 mt-lg-0">
              <a href="#!" class="mb-4 d-block">Bakery Biscuits</a>
              <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
              <div class="mb-4">
                <small class="text-warning">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i></small
                ><a href="#" class="ms-2">(30 reviews)</a>
              </div>
              <div class="fs-4">
                <span class="fw-bold text-dark">$32</span>
                <span class="text-decoration-line-through text-muted">$35</span
                ><span
                  ><small class="fs-6 ms-2 text-danger">26% Off</small></span
                >
              </div>
              <hr class="my-6">
              <div class="mb-4">
                <button type="button" class="btn btn-outline-secondary">
                  250g
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  500g
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  1kg
                </button>
              </div>
              <div>
                <!-- input -->
                <!-- input -->
                <div class="input-group input-spinner  ">
                  <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                  <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                  <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                </div>
              </div>
              <div
                class="mt-3 row justify-content-start g-2 align-items-center"
              >

                <div class="col-lg-4 col-md-5 col-6 d-grid">
                  <!-- button -->
                  <!-- btn -->
                  <button type="button" class="btn btn-primary">
                    <i class="feather-icon icon-shopping-bag me-2"></i>Add to
                    cart
                  </button>
                </div>
                <div class="col-md-4 col-5">
                  <!-- btn -->
                  <a
                    class="btn btn-light"
                    href="#"
                    data-bs-toggle="tooltip"
                    data-bs-html="true"
                    aria-label="Compare"
                    ><i class="bi bi-arrow-left-right"></i
                  ></a>
                  <a
                    class="btn btn-light"
                    href="#!"
                    data-bs-toggle="tooltip"
                    data-bs-html="true"
                    aria-label="Wishlist"
                    ><i class="feather-icon icon-heart"></i
                  ></a>
                </div>
              </div>
              <hr class="my-6">
              <div>
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td>Product Code:</td>
                      <td>FBB00255</td>
                    </tr>
                    <tr>
                      <td>Availability:</td>
                      <td>In Stock</td>
                    </tr>
                    <tr>
                      <td>Type:</td>
                      <td>Fruits</td>
                    </tr>
                    <tr>
                      <td>Shipping:</td>
                      <td>
                        <small
                          >01 day shipping.<span class="text-muted"
                            >( Free pickup today)</span
                          ></small
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- footer -->
<footer class="footer">
  <div class="container">
    <div class="row g-4 py-4">
      <div class="col-12 col-md-12 col-lg-4">
        <h6 class="mb-4">Categories</h6>
        <div class="row">
          <div class="col-6">
            <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Vegetables & Fruits</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Breakfast & instant food</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Bakery & Biscuits</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Atta, rice & dal</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Sauces & spreads</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Organic & gourmet</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Baby care</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Cleaning essentials</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Personal care</a></li>
            </ul>
          </div>
          <div class="col-6">
              <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Dairy, bread & eggs</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Cold drinks & juices</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Tea, coffee & drinks</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Masala, oil & more</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Chicken, meat & fish</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Paan corner</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link"> Pharma & wellness</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Home & office</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Pet care</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-8">
        <div class="row g-4">
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">Get to know us</h6>
              <!-- list -->
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Company</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">About</a></li>
              <li class="nav-item mb-2"><a href="#1" class="nav-link">Blog</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Help Center</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Our Value</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">For Consumers</h6>
            <ul class="nav flex-column">
                  <!-- list -->
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Payments</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Shipping</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Product Returns</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">FAQ</a></li>
              <li class="nav-item mb-2"><a href="pages/shop-checkout.html" class="nav-link">Shop Checkout</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">Become a Shopper</h6>
            <ul class="nav flex-column">
                <!-- list -->
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Shopper Opportunities</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Become a Shopper</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Earnings</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Ideas & Guides</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">New Retailers</a></li>
            </ul>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <h6 class="mb-4">Freshcart programs</h6>
            <ul class="nav flex-column">
                <!-- list -->
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart programs</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Gift Cards</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Promos & Coupons</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart Ads</a></li>
              <li class="nav-item mb-2"><a href="#!" class="nav-link">Careers</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="border-top py-4">
      <div class="row align-items-center">
        <div class="col-lg-5 text-lg-start text-center mb-2 mb-lg-0">
          <ul class="list-inline mb-0">
            <li class="list-inline-item text-dark">Payment Partners</li>
            <li class="list-inline-item">
              <a href="#!"><img src="images/payment/amazonpay.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="images/payment/american-express.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="images/payment/mastercard.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="images/payment/paypal.svg" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="images/payment/visa.svg" alt=""></a>
            </li>
          </ul>
        </div>
        <div class="col-lg-7 mt-4 mt-md-0">
          <ul class="list-inline mb-0 text-lg-end text-center">
            <li class="list-inline-item mb-2 mb-md-0 text-dark">Get deliveries with FreshCart</li>
            <li class="list-inline-item ms-4">
              <a href="#!"> <img src="images/appbutton/appstore-btn.svg" alt=""
                  style="width: 140px;"></a></li>
            <li class="list-inline-item">
              <a href="#!"> <img src="images/appbutton/googleplay-btn.svg" alt=""
                  style="width: 140px;"></a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="border-top py-4">
      <div class="row align-items-center">
        <div class="col-md-6"><span class="small text-muted">© 2022 <span id="copyright"> -
          <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
      </span>FreshCart eCommerce HTML Template.  All rights reserved. Powered by <a href="https://codescandy.com/">Codescandy</a>.</span></div>
        <div class="col-md-6">
          <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
            <li class="list-inline-item text-muted">Follow us on</li>
            <li class="list-inline-item me-1">
              <a href="#!" class="btn btn-xs btn-social btn-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-facebook" viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></a></li>
            <li class="list-inline-item me-1">
              <a href="#!" class="btn btn-xs btn-social btn-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-twitter" viewBox="0 0 16 16">
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg></a></li>
            <li class="list-inline-item">
              <a href="#!" class="btn btn-xs btn-social btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-instagram" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</footer>


<script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/simplebar/dist/simplebar.min.js') }}"></script>

<script src="{{ asset('js/theme.min.js') }}"></script>
  <script src="{{ asset('libs/jquery-countdown/dist/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('js/vendors/countdown.js') }}"></script>
  <script src="{{ asset('libs/slick-carousel/slick/slick.min.js') }}"></script>
  <script src="{{ asset('js/vendors/slick-slider.js') }}"></script>
  <script src="{{ asset('libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
  <script src="{{ asset('js/vendors/tns-slider.js') }}"></script>
  <script src="{{ asset('js/vendors/zoom.js') }}"></script>
<script src="{{ asset('js/vendors/increment-value.js') }}"></script>



</body>


</html>
