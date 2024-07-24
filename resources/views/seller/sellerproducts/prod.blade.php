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
                        <a class="nav-link " href="{{ route('contact.index') }}" role="button" data-bs-toggle="dropdown"
                          aria-expanded="false">
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



            <div class="container">
                <table class="table table-success ms-5" style="margin-left: 250px">
                    <thead>
                      <tr>
                        <th scope="col">#</th>

                          <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">category</th>
                        <th scope="col"></th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach($products as $product)

                      <tr>
                        <th scope="row">{{ ++$counter }}</th>
                          <td> <img src="url('storage/app/public/products/' . $product->image)" width="100"></td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>



                        <td>${{ $product->price }}</td>
                        <td>{{ $product->category->name }}</td>

                        <td>
                          <a href="{{ route('products.show', $product) }}" class="btn btn-info"><i class="bi bi-eye-fill"></i>
                          </i>
                          </a>

                      </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>




          <script src="{{ asset('libs/rater-js/index.js') }}"></script>
          <script src="{{ asset('libs/dropzone/dist/min/dropzone.min.js') }}"></script>

          <!-- Libs JS -->
        <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('libs/simplebar/dist/simplebar.min.js') }}"></script>

        <!-- Theme JS -->
        <script src="{{ asset('js/theme.min.js') }}"></script>

          <script src="{{ asset('libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
          <script src="{{ asset('js/vendors/tns-slider.js') }}"></script>
          <script src="{{ asset('js/vendors/zoom.js') }}"></script>
          <script src="{{ asset('js/vendors/increment-value.js') }}"></script>

          <script src="{{ asset('libs/slick-carousel/slick/slick.min.js') }}"></script>
          <script src="{{ asset('js/vendors/slick-slider.js') }}"></script>
        </body>
        </html>
