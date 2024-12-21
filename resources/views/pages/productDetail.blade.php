@extends('layouts.master')

@section('main-container')


  <!--cart -->
  <div class="offcanvas offcanvas-end product-list" tabindex="-1" id="ecommerceCart"
  aria-labelledby="ecommerceCartLabel">
  <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title" id="ecommerceCartLabel">
          My Cart
          <span class="badge bg-danger align-middle ms-1 cartitem-badge">4</span>
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body px-0">
      <div data-simplebar class="h-100">
          <ul class="list-group list-group-flush cartlist">
              <li class="list-group-item product">
                  <div class="d-flex gap-3">
                      <div class="flex-shrink-0">
                          <div class="avatar-md" style="height: 100%">
                              <div class="avatar-title bg-warning-subtle rounded-3">
                                  <img src="../assets/images/products/img-4.png" alt="" class="avatar-sm" />
                              </div>
                          </div>
                      </div>
                      <div class="flex-grow-1">
                          <a href="#!">
                              <h5 class="fs-15">Borosil Paper Cup</h5>
                          </a>
                          <div class="d-flex mb-3 gap-2">
                              <div class="text-muted fw-medium mb-0">
                                  $<span class="product-price">24.00</span>
                              </div>
                              <div class="vr"></div>
                              <span class="text-success fw-medium">In Stock</span>
                          </div>
                          <div class="input-step">
                              <button type="button" class="minus">–</button>
                              <input type="number" class="product-quantity" value="2" min="0" max="100"
                                  readonly />
                              <button type="button" class="plus">+</button>
                          </div>
                      </div>
                      <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"
                              data-bs-toggle="modal" data-bs-target="#removeItemModal">
                              <i class="ri-close-fill fs-16"></i>
                          </button>
                          <div class="fw-medium mb-0 fs-16">
                              $<span class="product-line-price">48.00</span>
                          </div>
                      </div>
                  </div>
              </li>
              <li class="list-group-item product">
                  <div class="d-flex gap-3">
                      <div class="flex-shrink-0">
                          <div class="avatar-md" style="height: 100%">
                              <div class="avatar-title bg-info-subtle rounded-3">
                                  <img src="../assets/images/products/img-1.png" alt="" class="avatar-sm" />
                              </div>
                          </div>
                      </div>
                      <div class="flex-grow-1">
                          <a href="#!">
                              <h5 class="fs-15">Rockerz Ear Bluetooth Hea...</h5>
                          </a>
                          <div class="d-flex mb-3 gap-2">
                              <div class="text-muted fw-medium mb-0">
                                  $<span class="product-price">160.00</span>
                              </div>
                              <div class="vr"></div>
                              <span class="text-success fw-medium">In Stock</span>
                          </div>
                          <div class="input-step">
                              <button type="button" class="minus">–</button>
                              <input type="number" class="product-quantity" value="1" min="0" max="100"
                                  readonly />
                              <button type="button" class="plus">+</button>
                          </div>
                      </div>
                      <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"
                              data-bs-toggle="modal" data-bs-target="#removeItemModal">
                              <i class="ri-close-fill fs-16"></i>
                          </button>
                          <div class="fw-medium mb-0 fs-16">
                              $<span class="product-line-price">160.00</span>
                          </div>
                      </div>
                  </div>
              </li>
              <li class="list-group-item product">
                  <div class="d-flex gap-3">
                      <div class="flex-shrink-0">
                          <div class="avatar-md" style="height: 100%">
                              <div class="avatar-title bg-danger-subtle rounded-3">
                                  <img src="../assets/images/products/img-6.png" alt="" class="avatar-sm" />
                              </div>
                          </div>
                      </div>
                      <div class="flex-grow-1">
                          <a href="#!">
                              <h5 class="fs-15">Monte Carlo Sweaters</h5>
                          </a>
                          <div class="d-flex mb-3 gap-2">
                              <div class="text-muted fw-medium mb-0">
                                  $ <span class="product-price">244.99</span>
                              </div>
                              <div class="vr"></div>
                              <span class="text-success fw-medium">In Stock</span>
                          </div>
                          <div class="input-step">
                              <button type="button" class="minus">–</button>
                              <input type="number" class="product-quantity" value="3" min="0" max="100"
                                  readonly />
                              <button type="button" class="plus">+</button>
                          </div>
                      </div>
                      <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"
                              data-bs-toggle="modal" data-bs-target="#removeItemModal">
                              <i class="ri-close-fill fs-16"></i>
                          </button>
                          <div class="fw-medium mb-0 fs-16">
                              $<span class="product-line-price">734.97</span>
                          </div>
                      </div>
                  </div>
              </li>
              <li class="list-group-item product">
                  <div class="d-flex gap-3">
                      <div class="flex-shrink-0">
                          <div class="avatar-md" style="height: 100%">
                              <div class="avatar-title bg-primary-subtle rounded-3">
                                  <img src="../assets/images/products/img-8.png" alt="" class="avatar-sm" />
                              </div>
                          </div>
                      </div>
                      <div class="flex-grow-1">
                          <a href="#!">
                              <h5 class="fs-15">Men's Running Shoes Act...</h5>
                          </a>
                          <div class="d-flex mb-3 gap-2">
                              <div class="text-muted fw-medium mb-0">
                                  $<span class="product-price">120.30</span>
                              </div>
                              <div class="vr"></div>
                              <span class="text-success fw-medium">In Stock</span>
                          </div>
                          <div class="input-step">
                              <button type="button" class="minus">–</button>
                              <input type="number" class="product-quantity" value="2" min="0" max="100"
                                  readonly />
                              <button type="button" class="plus">+</button>
                          </div>
                      </div>
                      <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"
                              data-bs-toggle="modal" data-bs-target="#removeItemModal">
                              <i class="ri-close-fill fs-16"></i>
                          </button>
                          <div class="fw-medium mb-0 fs-16">
                              $<span class="product-line-price">240.60</span>
                          </div>
                      </div>
                  </div>
              </li>
          </ul>

          <div class="table-responsive mx-2 border-top border-top-dashed">
              <table class="table table-borderless mb-0 fs-14 fw-semibold">
                  <tbody>
                      <tr>
                          <td>Sub Total :</td>
                          <td class="text-end cart-subtotal">$1183.57</td>
                      </tr>
                      <tr>
                          <td>Discount <span class="text-muted">(Toner15)</span>:</td>
                          <td class="text-end cart-discount">- $177.54</td>
                      </tr>
                      <tr>
                          <td>Shipping Charge :</td>
                          <td class="text-end cart-shipping">$65.00</td>
                      </tr>
                      <tr>
                          <td>Estimated Tax (12.5%) :</td>
                          <td class="text-end cart-tax">$147.95</td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  <div class="offcanvas-footer border-top p-3 text-center">
      <div class="d-flex justify-content-between align-items-center mb-3">
          <h6 class="m-0 fs-16 text-muted">Total:</h6>
          <div class="px-2">
              <h6 class="m-0 fs-16 cart-total">$1218.98</h6>
          </div>
      </div>
      <div class="row g-2">
          <div class="col-6">
              <button type="button" class="btn btn-light w-100" id="reset-layout">
                  View Cart
              </button>
          </div>
          <div class="col-6">
              <a href="#!" target="_blank" class="btn btn-info w-100">Continue to Checkout</a>
          </div>
      </div>
  </div>
</div>


<section class="ecommerce-about" style="
background-image: url('../assets/images/profile-bg.jpg');
background-size: cover;
background-position: center;
">
<div class="bg-overlay bg-primary" style="opacity: 0.85"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-center">
                <h1 class="text-white mb-0">Product Details</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light justify-content-center mt-4">
                        <li class="breadcrumb-item"><a href="#">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Product Details
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div>
<!--end container-->
</section>

<section class="section pt-0 pb-0">
    <h4 class="lh-base mb-1 p-3 mt-3" style="font-size: 2rem; color: #1d497e; background-color: #ECF1F4; text-align: center">
        {{ $product->title }}
    </h4>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
         
            <ul class="nav nav-tabs nav-tabs-custom mb-3" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#pricechart" role="tab">
                        Price Chart
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#home1" role="tab">
                        Description
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                        Ratings & Reviews
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content text-muted">
                <div class="tab-pane active" id="pricechart" role="tabpanel">
                    <table class="table fs-15 align-middle table-nowrap mt-4">
                        <thead>
                            <tr>
                                <th scope="col">Qty</th>
                                @foreach($quantities as $quantity)
                                    <th scope="col" data-quantity="{{ $quantity }}">{{ $quantity }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#" class="text-body">Price</a>
                                </td>
                                @foreach($prices as $price)
                                    <td class="fw-medium" data-price="{{ $price }}">
                                        ${{ number_format($price, 2) }}
                                    </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>

                </div>

                <div class="tab-pane" id="home1" role="tabpanel">
                    

                    <p class=" fs-15">
                        {{ $product->description }}
                    </p>
                </div>
                <div class="tab-pane" id="profile1" role="tabpanel">
                    <div>
                        <div class="d-flex flex-wrap gap-4 justify-content-between align-items-center mt-4">
                            <div class="flex-shrink-0">
                                <h5 class="fs-15 mb-3 fw-medium">Total Rating's</h5>
                                <h2 class="fw-bold mb-3">10.14k</h2>
                                <p class="text-muted mb-0">
                                    Growth in reviews on this year
                                </p>
                            </div>
                            <hr class="vr" />
                            <div class="flex-shrink-0">
                                <h5 class="fs-15 mb-3 fw-medium">Average Rating</h5>
                                <h2 class="fw-bold mb-3">
                                    5.6
                                    <span class="fs-16 align-middle text-warning ms-2">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </span>
                                </h2>
                                <p class="text-muted mb-0">Average rating on this year</p>
                            </div>
                            <hr class="vr" />
                            <div class="flex-shrink-0 w-xl">
                                <div class="row align-items-center g-3 align-items-center mb-2">
                                    <div class="col-auto">
                                        <div>
                                            <h6 class="mb-0 text-muted fs-13">
                                                <i class="ri-star-fill text-warning me-1 align-bottom"></i>5
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <div class="progress animated-progress progress-sm">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: 50.16%" aria-valuenow="50.16"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div>
                                            <h6 class="mb-0 text-muted fs-13">2758</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center g-3 mb-2">
                                    <div class="col-auto">
                                        <div>
                                            <h6 class="mb-0 text-muted fs-13">
                                                <i class="ri-star-fill text-warning me-1 align-bottom"></i>4
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <div class="progress animated-progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 29.32%" aria-valuenow="29.32"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div>
                                            <h6 class="mb-0 text-muted fs-13">1063</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center g-3 mb-2">
                                    <div class="col-auto">
                                        <div>
                                            <h6 class="mb-0 text-muted fs-13">
                                                <i class="ri-star-fill text-warning me-1 align-bottom"></i>3
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <div class="progress animated-progress progress-sm">
                                                <div class="progress-bar bg-info" role="progressbar"
                                                    style="width: 18.12%" aria-valuenow="18.12"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div>
                                            <h6 class="mb-0 text-muted fs-13">997</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center g-3 mb-2">
                                    <div class="col-auto">
                                        <div>
                                            <h6 class="mb-0 text-muted fs-13">
                                                <i class="ri-star-fill text-warning me-1 align-bottom"></i>2
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <div class="progress animated-progress progress-sm">
                                                <div class="progress-bar bg-secondary" role="progressbar"
                                                    style="width: 4.98%" aria-valuenow="4.98" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div>
                                            <h6 class="mb-0 text-muted fs-13">227</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center g-3">
                                    <div class="col-auto">
                                        <div>
                                            <h6 class="mb-0 text-muted fs-13">
                                                <i class="ri-star-fill text-warning me-1 align-bottom"></i>2
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <div class="progress animated-progress progress-sm">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 7.42%" aria-valuenow="7.42" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div>
                                            <h6 class="mb-0 text-muted fs-13">408</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4" data-simplebar style="max-height: 350px">
                            <div class="d-flex p-3 border-bottom border-bottom-dashed">
                                <div class="flex-shrink-0 me-3">
                                    <img class="avatar-xs rounded-circle"
                                        src="../assets/images/users/avatar-5.jpg" alt="" />
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex mb-3">
                                        <div class="flex-grow-1">
                                            <div>
                                                <div class="mb-2 fs-12">
                                                    <span>
                                                        <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span>
                                                        <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span>
                                                        <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span>
                                                        <i
                                                            class="ri-star-line text-warning align-bottom"></i></span>
                                                    <span>
                                                        <i
                                                            class="ri-star-line text-warning align-bottom"></i></span>
                                                </div>
                                                <h6 class="mb-0">Donald Risher</h6>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="mb-0 text-muted">
                                                <i class="ri-calendar-event-fill me-2 align-middle"></i>Aug 16,
                                                2022
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="lh-base fs-15">Design Quality</h5>
                                        <p class="mb-0">
                                            " This is an incredible framework worth so much in
                                            the right hands! Nowhere else are you going to get
                                            so much flexibility and great code for a few
                                            dollars. Highly recommend purchasing today! Like
                                            right now! "
                                        </p>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="avatar-xs rounded-circle"
                                                src="../assets/images/users/avatar-1.jpg" alt="" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <h6 class="mb-2">Jansh Brown</h6>
                                                        <p class="mb-0 text-muted fs-13">Admin</p>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <p class="mb-0 text-muted">
                                                        <i
                                                            class="ri-calendar-event-fill me-2 align-middle"></i>Aug
                                                        16, 2022
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0">Thank You</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex p-3 border-bottom border-bottom-dashed">
                                <div class="flex-shrink-0 me-3">
                                    <img class="avatar-xs rounded-circle"
                                        src="../assets/images/users/avatar-3.jpg" alt="" />
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex mb-3">
                                        <div class="flex-grow-1">
                                            <div>
                                                <div class="mb-2 fs-12">
                                                    <span>
                                                        <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span>
                                                        <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span>
                                                        <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span>
                                                        <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span>
                                                        <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                </div>
                                                <h6 class="mb-0">Richard Smith</h6>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="mb-0 text-muted">
                                                <i class="ri-calendar-event-fill me-2 align-middle"></i>Dec 10,
                                                2022
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="lh-base fs-15">Feature Availability</h5>
                                        <p class="mb-0">
                                            " Hello everyone, I would like to suggest here two
                                            contents that you could create. Course pages and
                                            blog pages. In them you could insert the listing and
                                            management of courses and listing and management of
                                            blog. The theme is perfect, one of the best
                                            purchases I've ever made. "
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex p-3 border-bottom border-bottom-dashed mb-3">
                                <div class="flex-shrink-0 me-3">
                                    <img class="avatar-xs rounded-circle"
                                        src="../assets/images/users/avatar-8.jpg" alt="" />
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex mb-3">
                                        <div class="flex-grow-1">
                                            <div>
                                                <div class="mb-2 fs-12">
                                                    <span>
                                                        <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span>
                                                        <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span>
                                                        <i
                                                            class="ri-star-fill text-warning align-bottom"></i></span>
                                                    <span>
                                                        <i
                                                            class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                    <span>
                                                        <i
                                                            class="ri-star-line text-warning align-bottom"></i></span>
                                                </div>
                                                <h6 class="mb-0">Pauline Moll</h6>
                                            </div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="mb-0 text-muted">
                                                <i class="ri-calendar-event-fill me-2 align-middle"></i>Aug 16,
                                                2022
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="lh-base fs-15">Design Quality</h5>
                                        <p class="mb-0">
                                            "We have used your other templates as well and seems
                                            it's amazing with the design and code quality. Wish
                                            you best for the future updates. Keep updated you
                                            will be #1 in near future. "
                                        </p>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="avatar-xs rounded-circle"
                                                src="../assets/images/users/avatar-1.jpg" alt="" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex mb-3">
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <h6 class="mb-2">Jansh Brown</h6>
                                                        <p class="mb-0 text-muted fs-13">Admin</p>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <p class="mb-0 text-muted">
                                                        <i
                                                            class="ri-calendar-event-fill me-2 align-middle"></i>Aug
                                                        16, 2022
                                                    </p>
                                                </div>
                                            </div>
                                            <p class="mb-0">Thank You</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3">
                            <h5 class="fs-18">Add a Review</h5>
                            <div>
                                <form action="#" class="form">
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="fs-14">Your rating:</span>
                                        <div class="ms-3">
                                            <span class="fs-14">
                                                <i class="ri-star-fill text-warning align-bottom"></i></span>
                                            <span class="fs-14">
                                                <i class="ri-star-fill text-warning align-bottom"></i></span>
                                            <span class="fs-14">
                                                <i class="ri-star-fill text-warning align-bottom"></i></span>
                                            <span class="fs-14">
                                                <i class="ri-star-fill text-warning align-bottom"></i></span>
                                            <span class="fs-14">
                                                <i
                                                    class="ri-star-half-fill text-warning align-bottom"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <input class="form-control" name="your-name" placeholder="Title"
                                            type="text" />
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="your-comment"
                                            placeholder="Enter your comments & reviews" rows="4"></textarea>
                                    </div>
                                    <div class="text-end">
                                        <button class="btn btn-primary btn-hover" type="submit" value="Submit">
                                            Send Review
                                            <i class="ri-send-plane-2-line align-bottom ms-1"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div>
</section>

<section class="section" >
<div class="container">
    <div class="row gx-2">
        <div class="col-lg-4">
            <div class="row">
                <div class="col-md-2">
                    <div thumbsSlider="" class="swiper productSwiper mb-3 mb-lg-0">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product-thumb rounded cursor-pointer">
                                    <img src="../assets/images/products/img-31.png" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-thumb rounded cursor-pointer">
                                    <img src="../assets/images/products/img-31.png" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-thumb rounded cursor-pointer">
                                    <img src="../assets/images/products/img-32.png" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-thumb rounded cursor-pointer">
                                    <img src="../assets/images/products/img-34.png" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-thumb rounded cursor-pointer">
                                    <img src="../assets/images/products/img-34.png" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-md-10">
                    <div class="bg-light rounded-2 position-relative ribbon-box overflow-hidden">
                        <div class="ribbon ribbon-danger ribbon-shape trending-ribbon">
                            <span class="trending-ribbon-text">Trending</span>
                            <i class="ri-flashlight-fill text-white align-bottom float-end ms-1"></i>
                        </div>
                        <div class="swiper productSwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="../assets/images/products/img-31.png" alt="" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="../assets/images/products/img-33.png" alt="" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="../assets/images/products/img-32.png" alt="" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="../assets/images/products/img-34.png" alt="" class="img-fluid" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="../assets/images/products/img-34.png" alt="" class="img-fluid" />
                                </div>
                            </div>
                            <div class="swiper-button-next bg-transparent"></div>
                            <div class="swiper-button-prev bg-transparent"></div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-12">
                    <div class="mt-3">
                        <div class="hstack gap-2">
                            <button type="button" class="btn btn-success btn-hover w-100">
                                <i class="bi bi-basket2 me-2"></i> Add To Cart
                            </button>
                            <button type="button" class="btn btn-primary btn-hover w-100">
                                <i class="bi bi-cart2 me-2"></i> Buy Now
                            </button>
                            <button class="btn btn-soft-danger custom-toggle btn-hover" data-bs-toggle="button"
                                aria-pressed="true">
                                <span class="icon-on"><i class="ri-heart-line"></i></span>
                                <span class="icon-off"><i class="ri-heart-fill"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end col-->
        <div class="col-lg-8 ms-auto">

            <div class="container">
                <div class="customization-section bg-white border border-light" id="customization-section">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <!-- Step 1 on the left -->
                        <div class="d-flex align-items-center">
                            <div class="step me-3">
                                <strong>STEP 1</strong>
                            </div>
                            <h2 class="h4 mb-0">Enter Quantity</h2>
                        </div>
                        
                        <!-- Total quantity and price on the right -->
                        <div class="price-details">
                            Total Qty: <span id="total-qty">0</span> | Price: <span id="total-price">$0.00</span>
                        </div>
                    </div>
                    

                    <div>
                        <input
                            type="number"
                            id="quantity-input"
                            placeholder="Qty"
                            class="form-control"
                            min="0"
                        >
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="customization-section bg-white border border-light">
                  <!-- Header -->
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <!-- Step 2 on the left -->
                    <div class="d-flex align-items-center">
                        <div class="step me-3">
                            <strong>STEP 2</strong>
                        </div>
                        <h2 class="h4 mb-0">Customization</h2>
                    </div>
                    
                    <!-- Total quantity and price on the right -->
                    <div class="price-details">
                        Total Qty: <span id="total-qty2">0</span> | Price: <span id="total-price2">$0.00</span>
                    </div>
                </div>
           

                  <!-- Dropdown Section -->
                  <div class="form-group">
                    <label for="beanie-color" class="section-header">Select Beanies Color</label>
                    <select id="beanie-color" class="form-control">
                        <option>Select Beanies Color</option>
                        @if(!empty($colorNames))
                            @foreach($colorNames as $colorName)
                                <option>{{ ucfirst($colorName) }}</option>
                            @endforeach
                        @else
                            <option>No colors available</option>
                        @endif
                    </select>



                    <div class="container">
                        <div class="section-header mt-4">
                            Select Printing Option
                        </div>
                    
                        <div class="printing-options">
                            @if($productPrintings->isNotEmpty())
                                @foreach($productPrintings as $printing)
                                    <div class="option-card printing-option" 
                                         data-id="{{ $printing->id }}"
                                         data-title="{{ $printing->title }}"
                                         data-quantities="{{ json_encode($printing->quantity) }}"
                                         data-prices="{{ json_encode($printing->price) }}">
                                        <img src="{{ asset('/' . $printing->image) }}" alt="{{ $printing->title }}">
                                        <h3>{{ $printing->title }}</h3>
                                    </div>
                                @endforeach
                            @else
                                <p>No printing options available.</p>
                            @endif
                        </div>
                    </div>
                    
             
                        


                      <div class="container my-5">
                        <h2 class="text-center mb-4">Upload Your Artwork</h2>

                        <!-- Artwork Type -->
                        <div class="mb-3">
                            <label for="artworkType" class="form-label fw-bold">Artwork Type</label>
                            <select id="artworkType" class="form-select">
                                <option value="upload">Upload my Artwork</option>
                                <option value="message">Enter Your Message</option>
                            </select>
                        </div>

                        <!-- File Upload -->
                        <div class="mb-3">
                            <label for="fileUpload" class="form-label fw-bold">Browse Files To Upload</label>
                            <input type="file" id="fileUpload" class="form-control">
                            <div class="form-text">
                                File Accepted: JPEG, JPG, GIF, PNG, EPS, PDF, PSD, AI, BMP, TIF, TIFF<br>
                                <strong>Preferred File Type for Better Quality Product:</strong> AI, EPS, PSD, PDF
                            </div>
                        </div>

                        <!-- Patch Dimensions -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="patchLength" class="form-label fw-bold">Patch Length</label>
                                <input type="text" id="patchLength" class="form-control" placeholder="Patch Length">
                                <small class="form-text text-muted">Min Length - 1", Max Length - 4"</small>
                            </div>
                            <div class="col-md-6">
                                <label for="patchHeight" class="form-label fw-bold">Patch Height</label>
                                <input type="text" id="patchHeight" class="form-control" placeholder="Patch Height">
                                <small class="form-text text-muted">Max Height - 2"</small>
                            </div>
                        </div>

                        <!-- Font Style -->
                        <div class="mb-3">
                            <label for="fontStyle" class="form-label fw-bold">Select Font Style</label>
                            <select id="fontStyle" class="form-select">
                                <option value="arial">Arial</option>
                                <option value="times">Times New Roman</option>
                                <option value="courier">Courier New</option>
                            </select>
                        </div>

                        <!-- Imprint Colors -->
                        <div class="mb-3">
                            <label for="imprintColors" class="form-label fw-bold">Select Number Of Imprint Colors</label>
                            <select id="imprintColors" class="form-select">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                  </div>
                </div>
              </div>





                </div>
             
              
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div>
<!--end container-->
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const quantityInput = document.getElementById("quantity-input");
    const totalQty = document.getElementById("total-qty");
    const totalQtyCustomization = document.getElementById("total-qty2");
    const totalPrice = document.getElementById("total-price");
    const totalPriceCustomization = document.getElementById("total-price2");
    const printingOptions = document.querySelectorAll(".printing-option");

    let selectedPrintingPrice = 0;  // Store price based on the selected printing option
    let selectedPrintingQuantities = [];  // Store quantities for selected printing
    let pricesForSelectedPrinting = [];  // Store prices for selected printing

    // Quantities and prices from the server (for quantity-based price calculation)
    const quantities = @json($quantities).map(Number);  // Ensure quantities are numbers
    const prices = @json($prices).map(Number);  // Ensure prices are numbers

    console.log("Available Quantities: ", quantities);
    console.log("Available Prices: ", prices);

    // Handle printing option selection
    printingOptions.forEach(option => {
        option.addEventListener("click", function () {
            // Remove active class from all options
            printingOptions.forEach(opt => opt.classList.remove("active"));
            // Add active class to the clicked option
            this.classList.add("active");

            // Get the selected printing option's quantities and prices
            let quantitiesData = this.dataset.quantities;  // Raw data from the attribute
            let pricesData = this.dataset.prices;  // Raw data from the attribute

            console.log("Raw Quantities Data:", quantitiesData);
            console.log("Raw Prices Data:", pricesData);

            try {
                // Parse the quantities and prices safely
                selectedPrintingQuantities = JSON.parse(quantitiesData);
                pricesForSelectedPrinting = JSON.parse(pricesData);

                // Check if parsing was successful and log the results
                console.log("Selected Quantities (parsed):", selectedPrintingQuantities);
                console.log("Selected Prices (parsed):", pricesForSelectedPrinting);

                // Ensure the parsed data is arrays of numbers
                if (Array.isArray(selectedPrintingQuantities)) {
                    selectedPrintingQuantities = selectedPrintingQuantities.map(Number);
                }

                if (Array.isArray(pricesForSelectedPrinting)) {
                    pricesForSelectedPrinting = pricesForSelectedPrinting.map(Number);
                }

                console.log("Selected Quantities after mapping to numbers:", selectedPrintingQuantities);
                console.log("Selected Prices after mapping to numbers:", pricesForSelectedPrinting);
            } catch (error) {
                console.error("Error parsing quantities or prices data:", error);
            }

            // Recalculate total price after selecting the printing option
            updatePrintingPriceAndTotal();
        });
    });

    // Function to calculate printing price based on quantity
    function calculatePrintingPrice(quantity, quantities, prices) {
        let price = 0;  // Default to 0 if no match is found

        console.log("Calculating price for quantity:", quantity);

        // Ensure quantity is a valid number
        quantity = parseInt(quantity);

        if (isNaN(quantity)) {
            console.error("Invalid quantity entered");
            return price;  // Return 0 if the quantity is invalid
        }

        // Ensure quantities and prices are arrays
        if (!Array.isArray(quantities)) {
            console.error("Quantities is not an array. Parsing the quantities...");
            quantities = JSON.parse(quantities);  // Ensure it is an array if it's a string
        }

        if (!Array.isArray(prices)) {
            console.error("Prices is not an array. Parsing the prices...");
            prices = JSON.parse(prices);  // Ensure it is an array if it's a string
        }

        // Now, parse quantities and prices as numbers
        quantities = quantities.map(q => parseInt(q));
        prices = prices.map(p => parseFloat(p));

        console.log("Parsed Quantities:", quantities);
        console.log("Parsed Prices:", prices);

        // Loop through the quantities array to find the exact match
        for (let i = 0; i < quantities.length; i++) {
            console.log(`Checking if ${quantity} matches ${quantities[i]}`);
            if (quantity === quantities[i]) {
                price = prices[i];
                console.log("Exact match found:", price);
                return price;
            }
        }

        // If no exact match is found, find the largest quantity less than or equal to the entered quantity
        console.log("No exact match found, checking for the largest valid quantity...");
        let closestQuantity = -1;
        for (let i = quantities.length - 1; i >= 0; i--) {
            if (quantity >= quantities[i]) {
                closestQuantity = quantities[i];
                price = prices[i];
                break;
            }
        }

        if (closestQuantity === -1) {
            console.error("No valid quantity found for the entered amount.");
        } else {
            console.log("Using closest quantity:", closestQuantity, "with price:", price);
        }

        return price;
    }

    // Function to update the printing price and calculate total price
    function updatePrintingPriceAndTotal() {
        const enteredQty = parseInt(quantityInput.value) || 0;
        totalQty.textContent = enteredQty;
        totalQtyCustomization.textContent = enteredQty;

        // Recalculate the printing price based on the selected quantity
        selectedPrintingPrice = calculatePrintingPrice(enteredQty, selectedPrintingQuantities, pricesForSelectedPrinting);

        console.log("Selected Printing Price:", selectedPrintingPrice);

        calculateTotalPrice(); // Recalculate the total price after updating printing price
    }

    // Calculate total price based on quantity and selected printing option
    function calculateTotalPrice() {
        const enteredQty = parseInt(quantityInput.value) || 0;
        totalQty.textContent = enteredQty;
        totalQtyCustomization.textContent = enteredQty;

        let calculatedPrice = 0;

        // Calculate base price based on quantity (default pricing)
        if (enteredQty > 0) {
            if (enteredQty > Math.max(...quantities)) {
                calculatedPrice = prices[prices.length - 1];  // Use the highest price if quantity exceeds max
            } else {
                for (let i = 0; i < quantities.length; i++) {
                    if (enteredQty >= quantities[i]) {
                        calculatedPrice = prices[i];
                    }
                }
            }
        }

        console.log("Calculated Price based on Quantity:", calculatedPrice);

        // Now calculate the total price by adding the printing price if available
        const total = (calculatedPrice * enteredQty) + (selectedPrintingPrice * enteredQty);
        console.log("Total Price Calculated:", total);

        // Update the displayed total price
        if (isNaN(total)) {
            totalPrice.textContent = "$0.00";
            totalPriceCustomization.textContent = "$0.00";  // Ensure this is also updated
        } else {
            totalPrice.textContent = `$${total.toFixed(2)}`;

            // Display calculated price for the selected printing option in the second field
            totalPriceCustomization.textContent = `$${(selectedPrintingPrice * enteredQty).toFixed(2)}`;
        }
    }

    // Update price when quantity is entered
    quantityInput.addEventListener("input", updatePrintingPriceAndTotal);

    // Prevent entering a value below the minimum quantity
    quantityInput.addEventListener("blur", function () {
        const enteredQty = parseInt(quantityInput.value) || 0;
        if (enteredQty < Math.min(...quantities)) {
            quantityInput.value = Math.min(...quantities);
            calculateTotalPrice();
        }
    });
});


    // Script For Selecting an Embroidery card
        document.addEventListener("DOMContentLoaded", function () {
            const printingOptions = document.querySelectorAll(".option-card");
        
            // Handle printing option selection
            printingOptions.forEach(option => {
                option.addEventListener("click", function () {
                    // Remove the "selected" class from all other options
                    printingOptions.forEach(opt => opt.classList.remove("selected"));
        
                    // Add the "selected" class to the clicked option
                    this.classList.add("selected");
                });
            });
        });
        </script>
@endsection
