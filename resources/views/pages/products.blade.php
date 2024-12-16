@extends('layouts.master')

@section('main-container')



        <!--cart -->
        <div class="offcanvas offcanvas-end product-list" tabindex="-1" id="ecommerceCart" aria-labelledby="ecommerceCartLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="ecommerceCartLabel">My Cart <span class="badge bg-danger align-middle ms-1 cartitem-badge">4</span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body px-0">
                <div data-simplebar  class="h-100">
                    <ul class="list-group list-group-flush cartlist">
                        <li class="list-group-item product">
                            <div class="d-flex gap-3">
                                <div class="flex-shrink-0">
                                    <div class="avatar-md" style="height: 100%;">
                                        <div class="avatar-title bg-warning-subtle rounded-3">
                                            <img src="{{ asset('assets/images/products/img-4.png') }}" alt="" class="avatar-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#!">
                                        <h5 class="fs-15">Borosil Paper Cup</h5>
                                    </a>
                                    <div class="d-flex mb-3 gap-2">
                                        <div class="text-muted fw-medium mb-0">$<span class="product-price">24.00</span></div>
                                        <div class="vr"></div>
                                        <span class="text-success fw-medium">In Stock</span>
                                    </div>
                                    <div class="input-step">
                                        <button type="button" class="minus">–</button>
                                        <input type="number" class="product-quantity" value="2" min="0" max="100" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-close-fill fs-16"></i></button>
                                    <div class="fw-medium mb-0 fs-16">$<span class="product-line-price">48.00</span></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item product">
                            <div class="d-flex gap-3">
                                <div class="flex-shrink-0">
                                    <div class="avatar-md" style="height: 100%;">
                                        <div class="avatar-title bg-info-subtle rounded-3">
                                            <img src="{{ asset('assets/images/products/img-1.png') }}" alt="" class="avatar-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#!">
                                        <h5 class="fs-15">Rockerz Ear Bluetooth Hea...</h5>
                                    </a>
                                    <div class="d-flex mb-3 gap-2">
                                        <div class="text-muted fw-medium mb-0">$<span class="product-price">160.00</span></div>
                                        <div class="vr"></div>
                                        <span class="text-success fw-medium">In Stock</span>
                                    </div>
                                    <div class="input-step">
                                        <button type="button" class="minus">–</button>
                                        <input type="number" class="product-quantity" value="1" min="0" max="100" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-close-fill fs-16"></i></button>
                                    <div class="fw-medium mb-0 fs-16">$<span class="product-line-price">160.00</span></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item product">
                            <div class="d-flex gap-3">
                                <div class="flex-shrink-0">
                                    <div class="avatar-md" style="height: 100%;">
                                        <div class="avatar-title bg-danger-subtle rounded-3">
                                            <img src="{{ asset('assets/images/products/img-6.png') }}" alt="" class="avatar-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#!">
                                        <h5 class="fs-15">Monte Carlo Sweaters</h5>
                                    </a>
                                    <div class="d-flex mb-3 gap-2">
                                        <div class="text-muted fw-medium mb-0">$ <span class="product-price">244.99</span></div>
                                        <div class="vr"></div>
                                        <span class="text-success fw-medium">In Stock</span>
                                    </div>
                                    <div class="input-step">
                                        <button type="button" class="minus">–</button>
                                        <input type="number" class="product-quantity" value="3" min="0" max="100" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-close-fill fs-16"></i></button>
                                    <div class="fw-medium mb-0 fs-16">$<span class="product-line-price">734.97</span></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item product">
                            <div class="d-flex gap-3">
                                <div class="flex-shrink-0">
                                    <div class="avatar-md" style="height: 100%;">
                                        <div class="avatar-title bg-primary-subtle rounded-3">
                                            <img src="{{ asset('assets/images/products/img-8.png') }}" alt="" class="avatar-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <a href="#!">
                                        <h5 class="fs-15">Men's Running Shoes Act...</h5>
                                    </a>
                                    <div class="d-flex mb-3 gap-2">
                                        <div class="text-muted fw-medium mb-0">$<span class="product-price">120.30</span></div>
                                        <div class="vr"></div>
                                        <span class="text-success fw-medium">In Stock</span>
                                    </div>
                                    <div class="input-step">
                                        <button type="button" class="minus">–</button>
                                        <input type="number" class="product-quantity" value="2" min="0" max="100" readonly>
                                        <button type="button" class="plus">+</button>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 d-flex flex-column justify-content-between align-items-end">
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn" data-bs-toggle="modal" data-bs-target="#removeItemModal"><i class="ri-close-fill fs-16"></i></button>
                                    <div class="fw-medium mb-0 fs-16">$<span class="product-line-price">240.60</span></div>
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
                                    <td>Estimated Tax (12.5%) : </td>
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
                        <button type="button" class="btn btn-light w-100" id="reset-layout">View Cart</button>
                    </div>
                    <div class="col-6">
                        <a href="#!" target="_blank" class="btn btn-info w-100">Continue to Checkout</a>
                    </div>
                </div>
            </div>
        </div>

     
<a class="btn btn-danger shadow-lg chat-button rounded-bottom-0 d-none d-lg-block" data-bs-toggle="collapse" href="#chatBot" aria-expanded="false" aria-controls="chatBot">Online Chat</a>
<div class="collapse chat-box" id="chatBot">
    <div class="card shadow-lg border-0 rounded-bottom-0 mb-0">
        <div class="card-header bg-success d-flex align-items-center border-0">
            <h5 class="text-white fs-16 fw-medium flex-grow-1 mb-0">Hi, Raquel Murillo 👋</h5>
            <button type="button" class="btn-close btn-close-white flex-shrink-0" onclick="chatBot()" data-bs-dismiss="collapse" aria-label="Close"></button>
        </div>
        <div class="card-body p-0">
            <div id="users-chat-widget">
                <div class="chat-conversation p-3" id="chat-conversation" data-simplebar style="height: 280px;">
                    <ul class="list-unstyled chat-conversation-list chat-sm" id="users-conversation">
                        <li class="chat-list left">
                            <div class="conversation-list">
                                <div class="chat-avatar">
                                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="">
                                </div>
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">Welcome to Themesbrand. We are here to help you. You can also directly email us at Support@themesbrand.com to schedule a meeting with our Technology Consultant.</p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name"><small class="text-muted time">09:07 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                </div>
                            </div>
                        </li>
                        <!-- chat-list -->

                        <li class="chat-list right">
                            <div class="conversation-list">
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">Good morning, How are you? What about our next meeting?</p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name"><small class="text-muted time">09:08 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                </div>
                            </div>
                        </li>
                        <!-- chat-list -->

                        <li class="chat-list left">
                            <div class="conversation-list">
                                <div class="chat-avatar">
                                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="">
                                </div>
                                <div class="user-chat-content">
                                    <div class="ctext-wrap">
                                        <div class="ctext-wrap-content">
                                            <p class="mb-0 ctext-content">Yeah everything is fine. Our next meeting tomorrow at 10.00 AM</p>
                                        </div>
                                        <div class="dropdown align-self-start message-box-drop">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><i class="ri-reply-line me-2 text-muted align-bottom"></i>Reply</a>
                                                <a class="dropdown-item" href="#"><i class="ri-file-copy-line me-2 text-muted align-bottom"></i>Copy</a>
                                                <a class="dropdown-item delete-item" href="#"><i class="ri-delete-bin-5-line me-2 text-muted align-bottom"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="conversation-name"><small class="text-muted time">09:10 am</small> <span class="text-success check-message-icon"><i class="ri-check-double-line align-bottom"></i></span></div>
                                </div>
                            </div>
                        </li>
                        <!-- chat-list -->

                    </ul>
                </div>
            </div>
            <div class="border-top border-top-dashed">
                <div class="row g-2 mt-2 mx-3 mb-3">
                    <div class="col">
                        <div class="position-relative">
                            <input type="text" class="form-control border-light bg-light" placeholder="Enter Message...">
                        </div>
                    </div><!-- end col -->
                    <div class="col-auto">
                        <button type="submit" class="btn btn-info"><i class="mdi mdi-send"></i></button>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </div>
    </div>
</div>

<section class="section pb-0 mt-4">
    <div class="container-fluid">
        <div class="position-relative rounded-3" style="background-image: url('../assets/images/ecommerce/banner.jpg');background-size: cover;background-position: center;">
            <div class="row justify-content-end">
                <div class="col-xxl-4">
                    <div class="text-end py-4 px-5 mx-xxl-5">
                        <h1 class="text-white display-5 lh-base text-capitalize ff-secondary mb-3 fst-italic">Original sound listem to nature</h1>
                        <div>
                            <a href="#!" class="link-effect link-light text-white">Show Collections <i class="ri-arrow-right-line align-bottom ms-1"></i></a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div><!--end container-->
</section>

<div class="position-relative section">
    <div class="container-fluid">
        <div class="ecommerce-product gap-4">
            <div class="sidebar flex-shrink-0">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <div class="d-flex mb-3">
                            <div class="flex-grow-1">
                                <h5 class="fs-16">Filters</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="#" class="text-decoration-underline" id="clearall">Clear All</a>
                            </div>
                        </div>
                        <div class="search-box">
                            <input type="text" class="form-control" id="searchProductList" autocomplete="off" placeholder="Search Products...">
                            <i class="ri-search-line search-icon"></i>
                        </div>
                    </div>
                    <div class="accordion accordion-flush filter-accordion">
                        <div class="card-body border-bottom">
                            <div>
                                <p class="text-muted text-uppercase fs-12 fw-medium mb-3">Products</p>
                                <ul class="list-unstyled mb-0 filter-list">
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Grocery</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Fashion</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">5</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Watches</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Electronics</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">5</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Furniture</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">6</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Automotive Accessories</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Appliances</h5>
                                            </div>
                                            <div class="flex-shrink-0 ms-2">
                                                <span class="badge bg-light text-muted">7</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="d-flex py-1 align-items-center">
                                            <div class="flex-grow-1">
                                                <h5 class="fs-13 mb-0 listname">Kids</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-body border-bottom">
                            <p class="text-muted text-uppercase fs-12 fw-medium mb-4">Price</p>

                            <div id="product-price-range" data-slider-color="info"></div>
                            <div class="formCost d-flex gap-2 align-items-center mt-3">
                                <input class="form-control form-control-sm" type="text" id="minCost" value="0" /> <span class="fw-semibold text-muted">to</span> <input class="form-control form-control-sm" type="text" id="maxCost" value="1000" />
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingColors">
                                <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseColors" aria-expanded="true" aria-controls="flush-collapseColors">
                                    <span class="text-muted text-uppercase fs-12 fw-medium">Colors</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                </button>
                            </h2>

                            <div id="flush-collapseColors" class="accordion-collapse collapse show" aria-labelledby="flush-headingColors">
                                <div class="accordion-body text-body pt-0">
                                    <ul class="clothe-colors list-unstyled hstack gap-3 mb-0 flex-wrap" id="color-filter">
                                        <li>
                                            <input type="radio" name="colors" value="success" id="color-1">
                                            <label class="avatar-xs btn btn-success p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-1"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="info" id="color-2">
                                            <label class="avatar-xs btn btn-info p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-2"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="warning" id="color-3">
                                            <label class="avatar-xs btn btn-warning p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-3"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="danger" id="color-4">
                                            <label class="avatar-xs btn btn-danger p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-4"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="primary" id="color-5">
                                            <label class="avatar-xs btn btn-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-5"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="secondary" id="color-6">
                                            <label class="avatar-xs btn btn-secondary p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-6"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="dark" id="color-7">
                                            <label class="avatar-xs btn btn-dark p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-7"></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" value="light" id="color-8">
                                            <label class="avatar-xs btn btn-light p-0 d-flex align-items-center justify-content-center rounded-circle" for="color-8"></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSize">
                                <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSize" aria-expanded="true" aria-controls="flush-collapseSize">
                                    <span class="text-muted text-uppercase fs-12 fw-medium">Sizes</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                </button>
                            </h2>

                            <div id="flush-collapseSize" class="accordion-collapse collapse show" aria-labelledby="flush-headingSize">
                                <div class="accordion-body text-body pt-0">
                                    <ul class="clothe-size list-unstyled hstack gap-3 mb-0 flex-wrap" id="size-filter">
                                        <li>
                                            <input type="radio" name="sizes" value="xs" id="sizeXs">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeXs">XS</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="s" id="sizeS">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeS">S</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="m" id="sizeM">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeM">M</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="l" id="sizeL">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeL">L</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="xl" id="sizeXl">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="sizeXl">XL</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="2xl" id="size2xl">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size2xl">2XL</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="3xl" id="size3xl">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size3xl">3XL</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="sizes" value="4xl" id="size4xl">
                                            <label class="avatar-xs btn btn-soft-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="size4xl">4XL</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingBrands">
                                <button class="accordion-button bg-transparent shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseBrands" aria-expanded="true" aria-controls="flush-collapseBrands">
                                    <span class="text-muted text-uppercase fs-12 fw-medium">Brands</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                </button>
                            </h2>

                            <div id="flush-collapseBrands" class="accordion-collapse collapse show" aria-labelledby="flush-headingBrands">
                                <div class="accordion-body text-body pt-0">
                                    <div class="search-box search-box-sm">
                                        <input type="text" class="form-control bg-light border-0" id="searchBrandsList" placeholder="Search Brands...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                    <div class="d-flex flex-column gap-2 mt-3 filter-check">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Boat" id="productBrandRadio5">
                                            <label class="form-check-label" for="productBrandRadio5">Boat</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="OnePlus" id="productBrandRadio4">
                                            <label class="form-check-label" for="productBrandRadio4">OnePlus</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Realme" id="productBrandRadio3">
                                            <label class="form-check-label" for="productBrandRadio3">Realme</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Sony" id="productBrandRadio2">
                                            <label class="form-check-label" for="productBrandRadio2">Sony</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="JBL" id="productBrandRadio1">
                                            <label class="form-check-label" for="productBrandRadio1">JBL</label>
                                        </div>

                                        <div>
                                            <button type="button" class="btn btn-link text-decoration-none text-uppercase fw-medium p-0">1,235
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingDiscount">
                                <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseDiscount" aria-expanded="true" aria-controls="flush-collapseDiscount">
                                    <span class="text-muted text-uppercase fs-12 fw-medium">Discount</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                </button>
                            </h2>
                            <div id="flush-collapseDiscount" class="accordion-collapse collapse" aria-labelledby="flush-headingDiscount">
                                <div class="accordion-body text-body pt-1">
                                    <div class="d-flex flex-column gap-2 filter-check" id="discount-filter">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="50" id="productdiscountRadio6">
                                            <label class="form-check-label" for="productdiscountRadio6">50% or more</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="40" id="productdiscountRadio5">
                                            <label class="form-check-label" for="productdiscountRadio5">40% or more</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="30" id="productdiscountRadio4">
                                            <label class="form-check-label" for="productdiscountRadio4">
                                                30% or more
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="20" id="productdiscountRadio3">
                                            <label class="form-check-label" for="productdiscountRadio3">
                                                20% or more
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="10" id="productdiscountRadio2">
                                            <label class="form-check-label" for="productdiscountRadio2">
                                                10% or more
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="0" id="productdiscountRadio1">
                                            <label class="form-check-label" for="productdiscountRadio1">
                                                Less than 10%
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingRating">
                                <button class="accordion-button bg-transparent shadow-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseRating" aria-expanded="false" aria-controls="flush-collapseRating">
                                    <span class="text-muted text-uppercase fs-12 fw-medium">Rating</span> <span class="badge bg-success rounded-pill align-middle ms-1 filter-badge"></span>
                                </button>
                            </h2>

                            <div id="flush-collapseRating" class="accordion-collapse collapse" aria-labelledby="flush-headingRating">
                                <div class="accordion-body text-body">
                                    <div class="d-flex flex-column gap-2 filter-check" id="rating-filter">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="4" id="productratingRadio4">
                                            <label class="form-check-label" for="productratingRadio4">
                                                <span class="text-muted">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </span> 4 & Above
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="3" id="productratingRadio3">
                                            <label class="form-check-label" for="productratingRadio3">
                                                <span class="text-muted">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </span> 3 & Above
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="2" id="productratingRadio2">
                                            <label class="form-check-label" for="productratingRadio2">
                                                <span class="text-muted">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </span> 2 & Above
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="productratingRadio1">
                                            <label class="form-check-label" for="productratingRadio1">
                                                <span class="text-muted">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                    <i class="mdi mdi-star"></i>
                                                </span> 1
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion-item -->
                    </div>
                </div>
                <!-- end card -->
            </div>
            <div class="flex-grow-1" id="col-3-layout">
                <div class="d-flex align-items-center gap-2 mb-4">
                    <p class="text-muted flex-grow-1 mb-0">Showing 1-12 of 84 results</p>

                    <div class="flex-shrink-0">
                        <div class="d-flex gap-2">
                            <div class="flex-shrink-0">
                                <label for="sort-elem" class="col-form-label">Sort By:</label>
                            </div>
                            <div class="flex-shrink-0">
                                <select class="form-select w-md" id="sort-elem">
                                    <option value="">All</option>
                                    <option value="low_to_high">Low to High</option>
                                    <option value="high_to_low">High to Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="product-grid"></div>
                <div class="row" id="pagination-element">
                    <div class="col-lg-12">
                        <div class="pagination-block pagination pagination-separated justify-content-center justify-content-sm-end mb-sm-0">
                            <div class="page-item">
                                <a href="javascript:void(0);" class="page-link" id="page-prev">Previous</a>
                            </div>
                            <span id="page-num" class="pagination"></span>
                            <div class="page-item">
                                <a href="javascript:void(0);" class="page-link" id="page-next">Next</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-none" id="search-result-elem">
                    <div class="col-lg-12">
                        <div class="text-center py-5">
                            <div class="avatar-lg mx-auto mb-4">
                                <div class="avatar-title bg-primary-subtle text-primary rounded-circle fs-24">
                                    <i class="bi bi-search"></i>
                                </div>
                            </div>

                            <h4>No matching records found</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offer-bar flex-shrink-0">
                <div class="d-flex gap-3 flex-column">
                    <div class="card fs-13 border border-primary border-opacity-25">
                        <div class="card-header text-center bg-primary-subtle border-0">
                            <h6 class="card-title text-uppercase fs-13 mb-0 text-primary">Deals of the week</h6>
                        </div>
                        <div class="card-body">
                            <div class="px-5">
                                <img src="{{ asset('assets/images/products/img-16.png') }}" alt="" class="img-fluid d-block mx-auto">
                            </div>
                            <div class="mt-4 text-center">
                                <h4 class="text-body mb-3">$63.00 <span class="text-muted fs-12"><del>$123.99</del></span></h4>
                                <a href="#!" class="stretched-link"><h5 class="mb-4">Ninja Pro Max Smartwatch</h5></a>
                            </div>
                            <div class="progress animated-progress custom-progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-2">
                                <div class="flex-grow-1 fw-medium fs-12">
                                    <span class="text-muted">Sold</span>: 451 Items
                                </div>
                                <div class="fw-medium fs-12">
                                    <span class="text-muted">Available</span>: 90 Items
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offer-banner rounded-3" style="background-image: url('../assets/images/ecommerce/offer-banner.jpg');background-size: cover;background-position: center;"></div>
                </div>
            </div>
        </div>
    </div><!--end conatiner-fluid-->
</div>

<section class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex align-items-center justify-content-between mb-4 pb-1">
                    <h3 class="flex-grow-1 mb-0">Deals Of The Day</h3>
                    <div class="flex-shrink-0">
                        <a href="#!" class="link-effect link-success">All Deals <i class="ri-arrow-right-line ms-1 align-bottom"></i></a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="ecommerce-deals-widgets">
                    <div class="card overflow-hidden mb-0">
                        <div class="gallery-product">
                            <img src="{{ asset('assets/images/ecommerce/img-5.jpg') }}" alt="" class="mx-auto d-block object-fit-cover">
                        </div>
                    </div>
                    <div class="content mx-4">
                        <div class="countdown-deals mb-3">
                            <div data-countdown="Oct 30, 2023" class="countdownlist"></div>
                        </div>
                        <div class="card border-0 p-4 position-relative rounded-3 shadow-lg">
                            <a href="#!">
                                <h6 class="text-capitalize fs-16 lh-base text-truncate">World's most expensive t-shirt</h6>
                            </a>
                            <p class="text-muted"><i class="ri-star-fill text-warning align-bottom"></i> <i class="ri-star-fill text-warning align-bottom"></i> <i class="ri-star-fill text-warning align-bottom"></i> <i class="ri-star-fill text-warning align-bottom"></i> <i class="ri-star-half-fill text-warning align-bottom"></i> (4.9)</p>
                            <div class="mt-3 d-flex align-items-center">
                                <h5 class="text-secondary flex-grow-1 mb-0">$124.99 <span class="text-muted fs-12"><del>$354.99</del></span></h5>
                                <a href="#!" class="btn btn-primary btn-sm"><i class="ri-shopping-bag-line align-bottom me-1"></i> Add</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4 col-md-6">
                <div class="ecommerce-deals-widgets">
                    <div class="card overflow-hidden mb-0">
                        <div class="gallery-product">
                            <img src="{{ asset('assets/images/ecommerce/img-3.jpg') }}" alt="" class="mx-auto d-block object-fit-cover">
                        </div>
                    </div>
                    <div class="content mx-4">
                        <div class="countdown-deals mb-3">
                            <div data-countdown="Oct 23, 2023" class="countdownlist"></div>
                        </div>
                        <div class="card border-0 p-4 position-relative rounded-3 shadow-lg">
                            <a href="#!">
                                <h6 class="text-capitalize fs-16 lh-base text-truncate">Best Footwear Collections</h6>
                            </a>
                            <p class="text-muted"><i class="ri-star-fill text-warning align-bottom"></i> <i class="ri-star-fill text-warning align-bottom"></i> <i class="ri-star-fill text-warning align-bottom"></i> <i class="ri-star-fill text-warning align-bottom"></i> <i class="ri-star-half-fill text-warning align-bottom"></i> (4.3)</p>
                            <div class="mt-3 d-flex align-items-center">
                                <h5 class="text-secondary flex-grow-1 mb-0">$80.00 <span class="text-muted fs-12"><del>$180.00</del></span></h5>
                                <a href="#!" class="btn btn-primary btn-sm"><i class="ri-shopping-bag-line align-bottom me-1"></i> Add</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4 col-md-6">
                <div class="ecommerce-deals-widgets">
                    <div class="card overflow-hidden mb-0">
                        <div class="gallery-product">
                            <img src="{{ asset('assets/images/ecommerce/img-1.jpg') }}" alt="" class="mx-auto d-block object-fit-cover">
                        </div>
                    </div>
                    <div class="content mx-4">
                        <div class="countdown-deals mb-3">
                            <div data-countdown="Oct 20, 2023" class="countdownlist"></div>
                        </div>
                        <div class="card border-0 p-4 position-relative rounded-3 shadow-lg">
                            <a href="#!">
                                <h6 class="text-capitalize fs-16 lh-base text-truncate">Elegant Designer Western Dress</h6>
                            </a>
                            <p class="text-muted"><i class="ri-star-fill text-warning align-bottom"></i> <i class="ri-star-fill text-warning align-bottom"></i> <i class="ri-star-fill text-warning align-bottom"></i> <i class="ri-star-fill text-warning align-bottom"></i> <i class="ri-star-half-fill text-warning align-bottom"></i> (5.0)</p>
                            <div class="mt-3 d-flex align-items-center">
                                <h5 class="text-secondary flex-grow-1 mb-0">$30.10 <span class="text-muted fs-12"><del>$121.99</del></span></h5>
                                <a href="#!" class="btn btn-primary btn-sm"><i class="ri-shopping-bag-line align-bottom me-1"></i> Add</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>

<section class="section bg-light bg-opacity-25" style="background-image: url('../assets/images/ecommerce/bg-effect.png');background-position: center; background-size: cover;">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6">
                <div>
                    <p class="fs-15 text-uppercase fw-medium"><span class="fw-semibold text-danger">25% Up to</span> off all Products</p>
                    <h1 class="lh-base text-capitalize mb-3">Stay home & get your daily needs from our shop</h1>
                    <p class="fs-15 mb-4 pb-2">Start You'r Daily Shopping with <a href="#!" class="link-info fw-medium">Toner</a></p>
                    <form action="#!">
                        <div class="position-relative ecommerce-subscript">
                            <input type="email" class="form-control rounded-pill" placeholder="Enter your email">
                            <button type="submit" class="btn btn-primary btn-hover rounded-pill">Subscript Now</button>
                        </div>
                    </form>
                </div>
            </div><!--end col-->
            <div class="col-lg-4">
                <div class="mt-5 mt-lg-0">
                    <img src="{{ asset('assets/images/ecommerce/subscribe.png') }}" alt="" class="img-fluid">
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>

<section class="position-relative py-5">
    <div class="container">
        <div class="row gy-3 gy-lg-0">
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/images/ecommerce/fast-delivery.png') }}" alt="" class="avatar-sm">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-15">Fast &amp; Secure Delivery</h5>
                        <p class="text-muted mb-0">Tell about your service.</p>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/images/ecommerce/returns.png') }}" alt="" class="avatar-sm">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-15">2 Days Return Policy</h5>
                        <p class="text-muted mb-0">No question ask.</p>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/images/ecommerce/guarantee-certificate.png') }}" alt="" class="avatar-sm">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-15">Money Back Guarantee</h5>
                        <p class="text-muted mb-0">Within 5 business days</p>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/images/ecommerce/24-hours-support.png') }}" alt="" class="avatar-sm">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-15">24 X 7 Service</h5>
                        <p class="text-muted mb-0">Online service for customer</p>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>



@endsection
