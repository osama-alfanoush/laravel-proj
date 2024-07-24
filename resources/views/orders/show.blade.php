<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from freshcart.codescandy.com/dashboard/order-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 17:08:59 GMT -->
<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="Codescandy" name="author">
  <title>Order List Dashboard - FreshCart </title>
<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/favicon.ico') }}">


<!-- Libs CSS -->
<link href="{{ asset('libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">
<link href="{{ asset('libs/feather-webfont/dist/feather-icons.css') }}" rel="stylesheet">
<link href="{{ asset('libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">


<!-- Theme CSS -->
<link rel="stylesheet" href="{{ asset('css/theme.min.css') }}">
<!-- Google tag (gtag.js) -->
<script async src="{{ asset('https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG') }}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-M8S4MT3EYG');
</script>


</head>

<body>

  <!-- main -->
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
                                           <img src="images/avatar/avatar-1.jpg" alt="" class="avatar avatar-md rounded-circle ">
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
                                           <img src="images/avatar/avatar-5.jpg" alt="" class="avatar avatar-md rounded-circle ">
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
                                           <img src="images/avatar/avatar-2.jpg" alt="" class="avatar avatar-md rounded-circle ">
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
                <img src="images/avatar/avatar-1.jpg" alt="" class="avatar avatar-md rounded-circle">
            </a>

            <div class="dropdown-menu dropdown-menu-end p-0">



                    <div class="lh-1 px-5 py-4 border-bottom">
                        <h5 class="mb-1 h6">FreshCart Admin</h5>
                        <small>admindemo@email.com</small>
                    </div>



                <ul class="list-unstyled px-2 py-3">

                    <li>
                        <a class="dropdown-item" href="#!">
                           Home
                        </a>
                    </li>
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

                    <a href="#">Log Out</a>
                </div>



            </div>

        </li>
        </ul>

    </div>

    </div>
    </div>
</nav>
  <div class="main-wrapper">


                            <nav class="navbar-vertical-nav offcanvas offcanvas-start navbar-offcanvac" tabindex="-1" id="offcanvasExample" >
                                <div class="navbar-vertical">
                                                <div class="px-4 py-5 d-flex justify-content-between align-items-center">
                                                    <a href="html" class="navbar-brand">
                                                        <img src="images/logo/freshcart-logo.svg" alt="">
                                                    </a>
                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                                <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
                                                    <ul class="navbar-nav flex-column">
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="index.html" >
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-house"></i></span>
                                                                    <span>Dashboard</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item mt-6 mb-3">
                                                            <span class="nav-label">Store Managements</span></li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link "  href="products.html">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-cart"></i></span>
                                                                    <span class="nav-link-text">Products</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " href="categories.html">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-list-task"></i></span>
                                                                    <span class="nav-link-text">Categories</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link  " href="#"
                                                                data-bs-toggle="collapse" data-bs-target="#navOrders" aria-expanded="false"
                                                                aria-controls="navOrders">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="nav-link-icon"> <i class="bi bi-bag"></i></span>
                                                                    <span class="nav-link-text">Orders</span>
                                                                </div>
                                                            </a>
                                                            <div id="navOrders" class="collapse  show "
                                                                data-bs-parent="#sideNavbar">
                                                                <ul class="nav flex-column">
                                                                    <li class="nav-item ">
                                                                        <a class="nav-link  active "
                                                                            href="order-list.html">
                                                                            List
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </li>


                                                    </ul>
                                                </div>
                                            </div>

                                            </nav>


    <!-- main wrapper -->
    <main class="main-content-wrapper">
      <div class="container">
        <!-- row -->
        <div class="row mb-8">
          <div class="col-md-12">
            <!-- page header -->
            <div>
              <h2>Order List</h2>



            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row">
          <div class="col-xl-12 col-12 mb-5">
            <!-- card -->
            <div class="card h-100 card-lg">
              <div class=" p-6 ">
                <div class="row justify-content-between">
                  <div class="col-md-4 col-12 mb-2 mb-md-0">
                    <!-- form -->
                    <form class="d-flex" role="search">
                      <input class="form-control" type="search" placeholder="Search" aria-label="Search">

                    </form>
                  </div>

                </div>
              </div>
              <!-- card body -->
              <div class="card-body p-0">
                <!-- table responsive -->
                <div class="table-responsive">
                  <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                    <thead class="bg-light">
                      <tr>
                        <th>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkAll">
                            <label class="form-check-label" for="checkAll">

                            </label>
                          </div>
                        </th>
                        <th>Image</th>
                        <th>Order Name</th>
                        <th>Customer</th>
                        <th>Date & TIme</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>

                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="orderOne">
                            <label class="form-check-label" for="orderOne">

                            </label>
                          </div>
                        </td>
                        <td>
                          <a href="#!"> <img src="images/products/product-img-1.jpg" alt=""
                              class="icon-shape icon-md"></a>
                        </td>
                        <td><a href="#" class="text-reset">{{ $order->id }}</a></td>
                        <td>{{ $order->user->name }}</td>

                        <td>{{ $order->created_at }}</td>


                        <td>
                          <span class="badge bg-light-primary text-dark-primary">{{ $order->status }}</span>
                        </td>
                        <td>${{ $order->total_amount }}</td>

                        <td>
                          <div class="dropdown">
                            <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="feather-icon icon-more-vertical fs-5"></i>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-3"></i>Delete</a></li>
                              <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3 "></i>Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                      @endforeach

                      <tr>

                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="orderSeven">
                            <label class="form-check-label" for="orderSeven">

                            </label>
                          </div>
                        </td>
                        <td>
                          <a href="#!"> <img src="images/products/product-img-7.jpg" alt=""
                              class="icon-shape icon-md"></a>
                        </td>
                        <td><a href="#" class="text-reset">FC#1001</a></td>
                        <td>Diann Watson</td>

                        <td>22 Jan 2023 (1:20 pm)</td>
                        <td>Paypal</td>

                        <td>
                          <span class="badge bg-light-primary text-dark-primary">Success</span>
                        </td>
                        <td>$23.00</td>

                        <td>
                          <div class="dropdown">
                            <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="feather-icon icon-more-vertical fs-5"></i>
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-3"></i>Delete</a></li>
                              <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3 "></i>Edit</a>
                              </li>
                            </ul>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                <span>Showing 1 to 8 of 12 entries</span>

              </div>
            </div>

          </div>

        </div>
      </div>
    </main>

  </div>


  <!-- Libs JS -->
<script src="libs/jquery/dist/jquery.min.js"></script>
<script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="js/theme.min.js"></script>

</body>


<!-- Mirrored from freshcart.codescandy.com/dashboard/order-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Sep 2023 17:08:59 GMT -->
</html>
