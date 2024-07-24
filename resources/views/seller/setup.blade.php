
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="Codescandy" name="author">
    <title>Dashboard - FreshCart </title>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/favicon.ico') }}">
<link href="{{ asset('libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
<link href="{{ asset('libs/feather-webfont/dist/feather-icons.css') }}" rel="stylesheet">
<link href="{{ asset('libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') }}">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M8S4MT3EYG');
</script>
<style>
    *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

</style>
</head>

<body >
    <div>
        <nav class="navbar navbar-expand-lg navbar-glass">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center w-100">
            <div class="d-flex align-items-center">

                <a class="text-inherit d-block d-xl-none me-4" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-text-indent-right" viewBox="0 0 16 16">
                    <path d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm10.646 2.146a.5.5 0 0 1 .708.708L11.707 8l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zM2 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                  </svg>
            </a>

                <form role="search">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                </form>
            </div>
            <div>
                <ul class="list-unstyled d-flex align-items-center mb-0 ms-5 ms-lg-0">

                    <li class="dropdown-center ">
                        <a class="position-relative btn-icon btn-ghost-secondary btn rounded-circle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-bell fs-5"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger mt-2 ms-n2">
                                2
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0 border-0 ">
                            <div class="border-bottom p-5 d-flex
              justify-content-between align-items-center">
              <div>
                                <h5 class="mb-1">Notifications</h5>
                                <p class="mb-0 small">You have 2 unread messages</p>
                            </div>
                                <a href="#!" class="text-muted">
                                    <a href="#" class="btn btn-ghost-secondary btn-icon rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Mark all as read">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check2-all text-success" viewBox="0 0 16 16">
                                            <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
                                            <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
                                          </svg>
                                        </a>
                                </a>
                            </div>
                            <div data-simplebar style="height: 250px;">
                                <!-- List group -->
                                <ul class="list-group list-group-flush notification-list-scroll fs-6">
                                    <!-- List group item -->
                                    <li class="list-group-item px-5 py-4 list-group-item-action active">
                                        <a href="#!" class="text-muted">
                                            <div class="d-flex">
                                           <img src="{{ asset('images/avatar/avatar-1.jpg') }}" alt="" class="avatar avatar-md rounded-circle ">
                                           <div class="ms-4">
                                           <p class="mb-1">
                                                <span class="text-dark">Your order is placed</span> waiting for shipping
                                            </p>
                                           <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock text-muted" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                          </svg><small class="ms-2">1 minute ago</small></span>
                                        </div>
                                            </div>
                                        </a>



                                    </li>
                                    <li class="list-group-item  px-5 py-4 list-group-item-action">
                                        <a href="#!" class="text-muted">
                                            <div class="d-flex">
                                           <img src="{{ asset('images/avatar/avatar-5.jpg') }}" alt="" class="avatar avatar-md rounded-circle ">
                                           <div class="ms-4">
                                           <p class="mb-1">
                                                <span class="text-dark">Jitu Chauhan </span> answered to your pending order list with notes
                                            </p>
                                           <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock text-muted" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                          </svg><small class="ms-2">2 days ago</small></span>
                                        </div>
                                            </div>
                                        </a>



                                    </li>
                                    <li class="list-group-item px-5 py-4 list-group-item-action">
                                        <a href="#!" class="text-muted">
                                            <div class="d-flex">
                                           <img src="{{ asset('images/avatar/avatar-2.jpg') }}" alt="" class="avatar avatar-md rounded-circle ">
                                           <div class="ms-4">
                                           <p class="mb-1">
                                                <span class="text-dark">You have new messages</span> 2 unread messages
                                            </p>
                                           <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-clock text-muted" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                                          </svg><small class="ms-2">3 days ago</small></span>
                                        </div>
                                            </div>
                                        </a>



                                    </li>

                                </ul>
                            </div>
                            <div class="border-top px-5 py-4 text-center">
                                <a href="#!" class=" ">
                                    View All
                                </a>
                            </div>
                        </div>

        </li>
        <li class="dropdown ms-4">
            <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('images/avatar/avatar-1.jpg') }}" alt="" class="avatar avatar-md rounded-circle">
            </a>

            <div class="dropdown-menu dropdown-menu-end p-0">



                    <div class="lh-1 px-5 py-4 border-bottom">
                        <h5 class="mb-1 h6">OMF Seller <br> {{ Auth::user()->name }}</h5>
                        <small>     {{ Auth::user()->email }}</small>
                    </div>



                <ul class="list-unstyled px-2 py-3">

                    <li>
                        <a class="dropdown-item" href="#!">
                        Profile
                        </a>


                    </li>


                    <li>
                        <a class="dropdown-item" href="#!">

                           Settings
                        </a>
                    </li>

                </ul>
                <div class="border-top px-5 py-3">

                    <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                </div>



            </div>

        </li>
        </ul>

    </div>

    </div>
    </div>
</nav>

        <div class="main-wrapper">
            <!-- navbar vertical -->

            <nav class="navbar-vertical-nav d-none d-xl-block ">
                <div class="navbar-vertical">
                                <div class="px-4 py-5">
                                    <a href="{{ route('home') }}" class="navbar-brand">
                                        <img src="{{ asset('images/logo/freshcart-logo.svg') }}" alt="">
                                    </a>
                                </div>
                                <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
                                    <ul class="navbar-nav flex-column" id="sideNavbar">

                                        <li class="nav-item ">
                                            <a class="nav-link  active " href="{{ route('seller.home') }}" >
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-house"></i></span>
                                                    <span class="nav-link-text">Dashboard</span>
                                                </div>
                                            </a>
                                        </li>

                                            <li class="nav-item ">
                                                <a class="nav-link "  href="{{ route('categories.request.index') }}">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-icon"> <i class="bi bi-cart"></i></span>
                                                        <span class="nav-link-text">Request Category</span>
                                                    </div>
                                                </a>
                                            </li>
                                        <li class="nav-item ">
                                            <a class="nav-link "  href="{{ route('products.index') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-cart"></i></span>
                                                    <span class="nav-link-text">Products</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link   collapsed " href="#"
                                                data-bs-toggle="collapse" data-bs-target="#navCategoriesOrders" aria-expanded="false"
                                                aria-controls="navCategoriesOrders">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-bag"></i></span>
                                                    <span class="nav-link-text">Orders</span>
                                                </div>
                                            </a>
                                            <div id="navCategoriesOrders" class="collapse "
                                                data-bs-parent="#sideNavbar">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item ">
                                                        <a class="# "
                                                            href="order-list.html">
                                                            Your orders
                                                        </a>
                                                    </li>
                                                    <!-- Nav item -->
                                                    <li class="nav-item ">
                                                        <a class="nav-link "
                                                            href="order-single.html">
                                                            Single

                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item ">
                                            <a class="nav-link " href="vendor-grid.html">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-shop"></i></span>
                                                    <span class="nav-link-text">Sellers / Vendors</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="customers.html">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-people"></i></span>
                                                    <span class="nav-link-text">Customers</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link " href="reviews.html">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-icon"> <i class="bi bi-star"></i></span>
                                                    <span class="nav-link-text">Reviews</span>
                                                </div>
                                            </a>
                                        </li>

 <li class="nav-item">
    <a class="nav-link  collapsed " href="#"
        data-bs-toggle="collapse" data-bs-target="#navMenuLevelFirst" aria-expanded="false"
        aria-controls="navMenuLevelFirst">
        <span class="nav-link-icon"><i class=" bi bi-arrow-90deg-down"></i></span>
        <span class="nav-link-text">Menu Level</span>
    </a>
    <div id="navMenuLevelFirst" class="collapse "
        data-bs-parent="#sideNavbar">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link " href="#"
                    data-bs-toggle="collapse" data-bs-target="#navMenuLevelSecond1" aria-expanded="false"
                    aria-controls="navMenuLevelSecond1">
                    Two Level
                </a>
                <div id="navMenuLevelSecond1" class="collapse" data-bs-parent="#navMenuLevel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link "
                                href="#">NavItem 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link "
                                href="#">NavItem 2</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link  collapsed  " href="#"
                    data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeOne1" aria-expanded="false"
                    aria-controls="navMenuLevelThreeOne1">
                    Three Level
                </a>
                <div id="navMenuLevelThreeOne1"
                    class="collapse "
                    data-bs-parent="#navMenuLevel">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link  collapsed "
                                href="#" data-bs-toggle="collapse" data-bs-target="#navMenuLevelThreeTwo"
                                aria-expanded="false" aria-controls="navMenuLevelThreeTwo">
                                NavItem 1
                            </a>
                            <div id="navMenuLevelThreeTwo"
                                class="collapse collapse "
                                data-bs-parent="#navMenuLevelThree">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link "
                                            href="#">
                                            NavChild Item 1
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Nav
                                Item 2</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <main class="main-content-wrapper">
                            <section class="container">
                                <!-- row -->
                                <div class="row mb-8">
                                    <div class="col-md-12">



<div class="profile-form">
     <h2>Setup your Seller Profile</h2>
    <form method="POST" action="{{ route('seller.profile') }}">
        @csrf

<div class="form-group">

  <label for="shop_name">Shop Name:</label>
  <input
    type="text"
    class="form-control @error('shop_name') is-invalid @enderror"
    id="shop_name"
    name="shop_name"
  >

  @error('shop_name')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror

</div>

<div class="form-group">

  <label for="address">Address:</label>
  <textarea
    class="form-control @error('address') is-invalid @enderror"
    id="address"
    name="address"
  ></textarea>

  @error('address')
    <div class="invalid-feedback">{{ $message }}</div>
  @enderror

</div>

<button type="submit" class="btn btn-primary mt-3">Save Profile</button>
</form> </div>
</div>
</div>
</div>
</div>
<script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/simplebar/dist/simplebar.min.js') }}"></script>

<!-- Theme JS -->
<script src="js/theme.min.js"></script>
    <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/vendors/chart.js') }}"></script>

</body>

</html>

