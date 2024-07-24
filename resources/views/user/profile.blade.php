<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="Codescandy" name="author">
<title>Settings eCommerce HTML Template - FreshCart </title>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/favicon.ico') }}">
<link href="{{ asset('libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
<link href="{{ asset('libs/feather-webfont/dist/feather-icons.css') }}" rel="stylesheet">
<link href="{{ asset('libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">
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
              <img src="{{ asset('images/logo/freshcart-logo.svg') }}" alt="eCommerce HTML Template">

            </a>
            <div class="d-flex justify-content-between w-100 d-lg-none">
              <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo/freshcart-logo.svg') }}" alt="eCommerce HTML Template">

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
                  <div class="list-inline-item">

                    <a class="text-muted position-relative " data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                      href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                      </svg>
                      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                        1
                        <span class="visually-hidden">unread messages</span>
                      </span>
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
          </div>
          <div class="col-md-2 col-xxl-3 d-none d-lg-block">




          </div>
          <div class="col-md-2 col-xxl-2 text-end d-none d-lg-block">

            <div class="list-inline">
              <div class="list-inline-item me-5">

                <a href="shop-wishlist.html" class="text-muted position-relative">

                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-heart">
                    <path
                      d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                    </path>
                  </svg>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    5
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </a></div>
              <div class="list-inline-item me-5">

                <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </a></div>
              <div class="list-inline-item">

                <a class="text-muted position-relative " data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                  href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-shopping-bag">
                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                  </svg>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    1
                    <span class="visually-hidden">unread messages</span>
                  </span>
                </a>

              </div>





            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 pb-lg-4 " aria-label="Offcanvas navbar large">
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
                    </svg></span> All Category
                </button>
                @php
                $categories = App\Models\Category::inRandomOrder()->take(5)->get();
              @endphp
       <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        @foreach ($categories as $category)
          <li><a class="dropdown-item" href="shop-grid.html">{{ $category->name }}</a></li>
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
                     <li><a class="dropdown-item" href="shop-grid.html">{{ $shop->shop_name }}</a></li>
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
                            <h6 class="text-primary ps-3">{{ $category->name }}</h6>
                              @foreach ($category->products as $product)
                                  <a class="dropdown-item" href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                        @endforeach
                        </div>
                @endforeach
                        </div>


                    </div>
                  </li>



              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>


</div>




  <main>
  <!-- section -->
  <section>
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- col -->
        <div class="col-12">
          <div class="d-flex justify-content-between align-items-center d-md-none py-4">
            <!-- heading -->
            <h3 class="fs-5 mb-0">Account Setting</h3>
            <!-- button -->
            <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3 " type="button"
              data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount" aria-controls="offcanvasAccount">
              <i class="bi bi-text-indent-left fs-3"></i>
            </button>
          </div>
        </div>
        <!-- col -->
        <div class="col-lg-3 col-md-4 col-12 border-end  d-none d-md-block">
          <div class="pt-10 pe-lg-10">
            <!-- nav item -->
            <ul class="nav flex-column nav-pills nav-pills-dark">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ route('orders.index') }}"><i
                    class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
              </li>
              <!-- nav item -->
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('user.profile.edit', ['user' => auth()->user()->id]) }}"><i
                    class="feather-icon icon-settings me-2"></i>Settings</a>
              </li>

              <li class="nav-item">
                <hr>
              </li>
              <!-- nav item -->
              <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 <i class="feather-icon icon-log-out me-2"></i>{{ __('Logout') }}
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9 col-md-8 col-12">
          <div class="py-6 p-md-6 p-lg-10">
            <div class="mb-6">
              <!-- heading -->
              <h2 class="mb-0">Account Setting</h2>
            </div>
            <div>
              <!-- heading -->
              <h5 class="mb-4">Account details</h5>
              <div class="row">
                <div class="col-lg-5">
                  <!-- form -->
                  <form method="POST" action="{{ route('user.profile.update', auth()->user()->id) }}">
                    @if (session()->has('successs'))
                      <div class="alert alert-success" role="alert">
                        {{ session('successs') }}
                      </div>
                    @endif
                    @csrf

                    <input type="hidden" name="id" value="{{ auth()->user()->id }}">

                    <div class="mb-3">
                      <label class="form-label" for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" placeholder="Enter your name" required>
                    </div>

                    <div class="mb-5">
                      <label class="form-label" for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" value="{{ auth()->user()->phone }}" placeholder="Enter your phone number" required>
                    </div>
                    <div class="mb-5">
                        <label class="form-label" for="phone">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ auth()->user()->location }}" placeholder="Enter your Locaion" required>
                      </div>
                    <div class="mb-5">
                      <label class="form-label" for="gender">Gender</label>
                      <select class="form-control" id="gender" name="gender" required>
                        <option value="male" {{ auth()->user()->gender === 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ auth()->user()->gender === 'female' ? 'selected' : '' }}>Female</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                  </form>

                  <hr class="my-10">
                  <form method="POST" action="{{ route('user.profile.update.email') }}">

                    @csrf



                    <input type="hidden" name="id" value="{{ auth()->user()->id }}">

                    <div class="mb-3">
                      <h2 class="form-label">Change your Email</h2>
                      <input type="email" class="form-control" name="email"placeholder="{{ auth()->user()->email }} ">
                    </div>


                    <div class="mb-3">
                      <button class="btn btn-primary">Save Email</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <hr class="my-10">
            <div class="pe-lg-14">
              <!-- heading -->
              <h2 class="mb-4">Change Password</h2>
              <form action="{{ route('change.password') }}" method="post">
                @csrf
                @if (session()->has('success1'))
                <div class="alert alert-success" role="alert">
                    {{ session('success1') }}
                                </div>
                       @elseif (session()->has('errors'))
                       <div class="alert alert-danger" role="alert">
                    Something went wrong. Please try again later.
                            </div>
                           @endif
                <div class="mb-3 col">
                    <label class="form-label">Current Password</label>
                    <input type="password" class="form-control" name="old_password" placeholder="**********">
                  </div>

                <div class="mb-3 col">
                  <label class="form-label">New Password</label>
                  <input type="password" class="form-control" name="new_password" placeholder="**********">
                </div>

                <div class="mb-3 col">
                    <label class="form-label">Confirm New Password</label>
                    <input type="password" class="form-control" name="new_password_confirmation" placeholder="**********">
                  </div>

                <div class="col-12">
                  <p class="mb-4">Can’t remember your current password?<a href="{{ route('password.request') }}"> Reset your password.</a></p>
                  <button type="submit" class="btn btn-primary">Save Password</button>
                </div>

              </form>
            </div>
            <hr class="my-10">
            <div>
                <h2 class="mb-4">Delete Account</h2>
                <p class="mb-2">Would you like to delete your account?</p>

                <form action="{{ route('account.delete') }}" method="post">
                    @csrf



                    <div class="mb-3 col">
                      <label class="form-label">Enter Your  Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Enter your password">
                    </div>

                    <button type="submit" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">Delete Account</button>

                    @if (session()->has('success'))
                      <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                      </div>
                    @elseif (session()->has('error1'))
                      <div class="alert alert-danger" role="alert">
                      the password is incorrect
                      </div>
                    @elseif (session()->has('error2'))
                      <div class="alert alert-danger" role="alert">
                        Something went worng. Please try again later.
                      </div>
                    @endif
                  </form>

              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<footer class="footer">
  <div class="container">
    <div class="row g-4 py-4">
      <div class="col-12 col-md-12 col-lg-4">
        <h6 class="mb-4">Categories</h6>
        @php
        $categories = App\Models\Category::inRandomOrder()->take(9)->get();
      @endphp
        <div class="row">
          <div class="col-6">
            <ul class="nav flex-column">
                @foreach ($categories as $category)
              <li class="nav-item mb-2"><a href="{{ route('categories.show', ['id' => $category->id]) }}" class="nav-link">{{ $category->name }}</a></li>
              @endforeach
            </ul>
          </div>
          <div class="col-6">
            <ul class="nav flex-column">
                @foreach ($categories as $category)

                <li class="nav-item mb-2"><a href="{{ route('categories.show', ['id' => $category->id]) }}" class="nav-link">{{ $category->name }}</a></li>
                @endforeach

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
              <li class="nav-item mb-2"><a href="shop-checkout.html" class="nav-link">Shop Checkout</a></li>
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
  <!-- Javascript-->
  <!-- Libs JS -->
<script src="libs/jquery/dist/jquery.min.js"></script>
<script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="js/theme.min.js"></script>




</body>


<!-- Mirrored from freshcart.codescandy.com/pages/account-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 17:08:24 GMT -->
</html>
