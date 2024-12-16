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
                                    <img src="assets/images/logo-sm.png" alt="">
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
                                    <img src="assets/images/logo-sm.png" alt="">
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

<section class="ecommerce-about" style="background-image: url('assets/images/profile-bg.jpg'); background-size: cover;background-position: center;">
    <div class="bg-overlay bg-primary" style="opacity: 0.85;"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center">
                    <h1 class="text-white mb-0">Product Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light justify-content-center mt-4">
                            <li class="breadcrumb-item"><a href="#">Product</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                        </ol>
                    </nav>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>

<section class="section">
    <div class="container">
        <div class="row gx-2">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-2">
                        <div thumbsSlider="" class="swiper productSwiper mb-3 mb-lg-0">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-thumb rounded cursor-pointer">
                                        <img src="assets/images/products/img-31.png" alt="" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-thumb rounded cursor-pointer">
                                        <img src="assets/images/products/img-33.png" alt="" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-thumb rounded cursor-pointer">
                                        <img src="assets/images/products/img-32.png" alt="" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-thumb rounded cursor-pointer">
                                        <img src="assets/images/products/img-34.png" alt="" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-thumb rounded cursor-pointer">
                                        <img src="assets/images/products/img-34.png" class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-md-10">
                        <div class="bg-light rounded-2 position-relative ribbon-box overflow-hidden">
                            <div class="ribbon ribbon-danger ribbon-shape trending-ribbon">
                                <span class="trending-ribbon-text">Trending</span> <i class="ri-flashlight-fill text-white align-bottom float-end ms-1"></i>
                            </div>
                            <div class="swiper productSwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide ">
                                        <img src="assets/images/products/img-31.png" alt="" class="img-fluid" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/img-33.png" alt="" class="img-fluid" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/img-32.png" alt="" class="img-fluid" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/img-34.png" alt="" class="img-fluid" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="assets/images/products/img-34.png" alt="" class="img-fluid" />
                                    </div>
                                </div>
                                <div class="swiper-button-next bg-transparent"></div>
                                <div class="swiper-button-prev bg-transparent"></div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-12">
                        <div class="mt-3">
                            <div class="hstack gap-2">
                                <button type="button" class="btn btn-success btn-hover w-100">
                                    <i class="bi bi-basket2 me-2"></i> Add To Cart
                                </button>
                                <button type="button" class="btn btn-primary btn-hover w-100">
                                    <i class="bi bi-cart2 me-2"></i> Buy Now
                                </button>
                                <button class="btn btn-soft-danger custom-toggle btn-hover" data-bs-toggle="button" aria-pressed="true"> <span class="icon-on"><i class="ri-heart-line"></i></span> <span class="icon-off"><i class="ri-heart-fill"></i></span> </button>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
            <div class="col-lg-5 ms-auto">
                <div class="ecommerce-product-widgets mt-4 mt-lg-0">
                    <div class="mb-4">
                        <div class="d-flex gap-3 mb-2">
                            <div class="fs-15 text-warning">
                                <i class="ri-star-fill align-bottom"></i>
                                <i class="ri-star-fill align-bottom"></i>
                                <i class="ri-star-fill align-bottom"></i>
                                <i class="ri-star-fill align-bottom"></i>
                                <i class="ri-star-half-fill align-bottom"></i>
                            </div>
                            <span class="fw-medium"> (50 Review)</span>
                        </div>
                        <h4 class="lh-base mb-1">Opinion Striped Round Neck Green T-shirt</h4>
                        <p class="text-muted mb-4">The best part about stripped t shirt denim & white sneakers or wear it with a cool chinos and blazer to dress up <a href="javascript:void(0);" class="link-info">Read More</a></p>
                        <h5 class="fs-24 mb-4">$185.79 <span class="text-muted fs-14"><del>$280.99</del></span> <span class="fs-14 ms-2 text-danger"> (50% off)</span></h5>
                        <ul class="list-unstyled vstack gap-2">
                            <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>In stock</li>
                            <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>Free delivery available</li>
                            <li class=""><i class="bi bi-check2-circle me-2 align-middle text-success"></i>Sales 10% Off Use Code: <b>FASHION10</b></li>
                        </ul>
                        <h6 class="fs-14 text-muted mb-3">Available offers :</h6>
                        <ul class="list-unstyled vstack gap-2 mb-0">
                            <li>
                                <div class="d-flex gap-3">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-tag-fill text-success align-middle fs-15"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <b>Bank Offer</b> 10% instant discount on Federal Bank Debit Cards, up to ₹3000 on orders of ₹5,000 and above <a href="#!" data-bs-toggle="tooltip" data-bs-title="Terms & Conditions">T&C</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex gap-3">
                                    <div class="flex-shrink-0">
                                        <i class="bi bi-tag-fill text-success align-middle fs-15"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <b>Bank Offer</b> 10% instant discount on Federal Bank Debit Cards, up to ₹3000 on orders of ₹5,000 and above <a href="#!" data-bs-toggle="tooltip" data-bs-title="Terms & Conditions">T&C</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <h5 class="fs-15 mb-0">Quantity:</h5>
                        <div class="input-step ms-2">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity1" value="1" min="0" max="100" readonly="">
                            <button type="button" class="plus">+</button>
                        </div>
                    </div>
                    <div class="row gy-3">
                        <div class="col-md-6">
                            <div>
                                <h6 class="fs-14 fw-medium text-muted">Sizes:</h6>
                                <ul class="clothe-size list-unstyled hstack gap-2 mb-0 flex-wrap">
                                    <li> <input type="radio" name="sizes7" id="product-color-72"> <label class="avatar-xs btn btn-soft-primary text-uppercase p-0 fs-12 d-flex align-items-center justify-content-center rounded-circle" for="product-color-72">s</label> </li>
                                    <li> <input type="radio" name="sizes7" id="product-color-73"> <label class="avatar-xs btn btn-soft-primary text-uppercase p-0 fs-12 d-flex align-items-center justify-content-center rounded-circle" for="product-color-73">m</label> </li>
                                    <li> <input type="radio" name="sizes7" checked id="product-color-74"> <label class="avatar-xs btn btn-soft-primary text-uppercase p-0 fs-12 d-flex align-items-center justify-content-center rounded-circle" for="product-color-74">l</label> </li>
                                    <li> <input type="radio" name="sizes7" id="product-color-75"> <label class="avatar-xs btn btn-soft-primary text-uppercase p-0 fs-12 d-flex align-items-center justify-content-center rounded-circle" for="product-color-75">xl</label> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h6 class="fs-14 fw-medium text-muted">Colors: </h6>
                            <ul class="clothe-colors list-unstyled hstack gap-1 mb-0 flex-wrap ms-2">
                                <li>
                                    <input type="radio" name="sizes" id="product-color-2">
                                    <label class="avatar-xs btn btn-info p-0 d-flex align-items-center justify-content-center rounded-circle" for="product-color-2"></label>
                                </li>
                                <li>
                                    <input type="radio" name="sizes" id="product-color-3">
                                    <label class="avatar-xs btn btn-light p-0 d-flex align-items-center justify-content-center rounded-circle" for="product-color-3"></label>
                                </li>
                                <li>
                                    <input type="radio" name="sizes" id="product-color-4" checked>
                                    <label class="avatar-xs btn btn-primary p-0 d-flex align-items-center justify-content-center rounded-circle" for="product-color-4"></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>

<section class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-tabs-custom mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
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
                    <div class="tab-pane active" id="home1" role="tabpanel">
                        <table class="table table-sm table-borderless align-middle">
                            <tr>
                                <th>Type</th>
                                <td>Round Neck</td>
                            </tr>
                            <tr>
                                <th>Sleeve</th>
                                <td>Short Sleeve</td>
                            </tr>
                            <tr>
                                <th>Fit</th>
                                <td>Regular</td>
                            </tr>
                            <tr>
                                <th>Sales Package</th>
                                <td>1 T shirt</td>
                            </tr>
                            <tr>
                                <th>Pack of</th>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th>Style Code</th>
                                <td>HYP02</td>
                            </tr>
                            <tr>
                                <th>Neck Type</th>
                                <td>Round Neck</td>
                            </tr>
                            <tr>
                                <th>Ideal For</th>
                                <td>Men</td>
                            </tr>
                            <tr>
                                <th>Size</th>
                                <td>L</td>
                            </tr>
                            <tr>
                                <th>Pattern</th>
                                <td>Solid</td>
                            </tr>
                            <tr>
                                <th>Suitable For</th>
                                <td>Western Wear</td>
                            </tr>
                            <tr>
                                <th>Fabric Care</th>
                                <td>Do not bleach</td>
                            </tr>
                            <tr>
                                <th>Seller</th>
                                <td>Zibra Fashion</td>
                            </tr>
                            <tr>
                                <th>Color</th>
                                <td>
                                    <div class="avatar-xs">
                                        <div class="avatar-title rounded"></div>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <p class="text-muted fs-15">Clothing serves many purposes: it can serve as protection from the elements, rough surfaces, sharp stones, rash-causing plants, insect bites, by providing a barrier between the skin and the environment. It is worth noting that a man's style goes beyond his outward appearance. Style is about more than the clothes you wear. It's who you are on the inside and how you present yourself to the outside world. It's having appreciation and cultivating gratitude.</p>
                    </div>
                    <div class="tab-pane" id="profile1" role="tabpanel">

                        <div>
                            <div class="d-flex flex-wrap gap-4 justify-content-between align-items-center mt-4">
                                <div class="flex-shrink-0">
                                    <h5 class="fs-15 mb-3 fw-medium">Total Rating's</h5>
                                    <h2 class="fw-bold mb-3">10.14k</h2>
                                    <p class="text-muted mb-0">Growth in reviews on this year</p>
                                </div>
                                <hr class="vr">
                                <div class="flex-shrink-0">
                                    <h5 class="fs-15 mb-3 fw-medium">Average Rating</h5>
                                    <h2 class="fw-bold mb-3">5.6 <span class="fs-16 align-middle text-warning ms-2">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-fill"></i>
                                    </span></h2>
                                    <p class="text-muted mb-0">Average rating on this year</p>
                                </div>
                                <hr class="vr">
                                <div class="flex-shrink-0 w-xl">
                                    <div class="row align-items-center g-3 align-items-center mb-2">
                                        <div class="col-auto">
                                            <div>
                                                <h6 class="mb-0 text-muted fs-13"><i class="ri-star-fill text-warning me-1 align-bottom"></i>5</h6>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div>
                                                <div class="progress animated-progress progress-sm">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50.16%" aria-valuenow="50.16" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                <h6 class="mb-0 text-muted fs-13"><i class="ri-star-fill text-warning me-1 align-bottom"></i>4</h6>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div>
                                                <div class="progress animated-progress progress-sm">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 29.32%" aria-valuenow="29.32" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                <h6 class="mb-0 text-muted fs-13"><i class="ri-star-fill text-warning me-1 align-bottom"></i>3</h6>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div>
                                                <div class="progress animated-progress progress-sm">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 18.12%" aria-valuenow="18.12" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                <h6 class="mb-0 text-muted fs-13"><i class="ri-star-fill text-warning me-1 align-bottom"></i>2</h6>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div>
                                                <div class="progress animated-progress progress-sm">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 4.98%" aria-valuenow="4.98" aria-valuemin="0" aria-valuemax="100"></div>
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
                                                <h6 class="mb-0 text-muted fs-13"><i class="ri-star-fill text-warning me-1 align-bottom"></i>2</h6>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div>
                                                <div class="progress animated-progress progress-sm">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 7.42%" aria-valuenow="7.42" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <img class="avatar-xs rounded-circle" src="assets/images/users/avatar-5.jpg" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex mb-3">
                                            <div class="flex-grow-1">
                                                <div>
                                                    <div class="mb-2 fs-12">
                                                        <span> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                        <span> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                        <span> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                        <span> <i class="ri-star-line text-warning align-bottom"></i></span>
                                                        <span> <i class="ri-star-line text-warning align-bottom"></i></span>
                                                    </div>
                                                    <h6 class="mb-0">Donald Risher</h6>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <p class="mb-0 text-muted"><i class="ri-calendar-event-fill me-2 align-middle"></i>Aug 16, 2022</p>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="lh-base fs-15">Design Quality</h5>
                                            <p class="mb-0">
                                                " This is an incredible framework worth so much in the right hands! Nowhere else are you going to get so much flexibility and great code for a few dollars. Highly recommend purchasing today! Like right now! "
                                            </p>
                                        </div>
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0 me-3">
                                                <img class="avatar-xs rounded-circle" src="assets/images/users/avatar-1.jpg" alt="">
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
                                                        <p class="mb-0 text-muted"><i class="ri-calendar-event-fill me-2 align-middle"></i>Aug 16, 2022</p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Thank You
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex p-3 border-bottom border-bottom-dashed">
                                    <div class="flex-shrink-0 me-3">
                                        <img class="avatar-xs rounded-circle" src="assets/images/users/avatar-3.jpg" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex mb-3">
                                            <div class="flex-grow-1">
                                                <div>
                                                    <div class="mb-2 fs-12">
                                                        <span> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                        <span> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                        <span> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                        <span> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                        <span> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                    </div>
                                                    <h6 class="mb-0">Richard Smith</h6>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <p class="mb-0 text-muted"><i class="ri-calendar-event-fill me-2 align-middle"></i>Dec 10, 2022</p>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="lh-base fs-15">Feature Availability</h5>
                                            <p class="mb-0">
                                                " Hello everyone, I would like to suggest here two contents that you could create. Course pages and blog pages. In them you could insert the listing and management of courses and listing and management of blog. The theme is perfect, one of the best purchases I've ever made. "
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex p-3 border-bottom border-bottom-dashed mb-3">
                                    <div class="flex-shrink-0 me-3">
                                        <img class="avatar-xs rounded-circle" src="assets/images/users/avatar-8.jpg" alt="">
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex mb-3">
                                            <div class="flex-grow-1">
                                                <div>
                                                    <div class="mb-2 fs-12">
                                                        <span> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                        <span> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                        <span> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                        <span> <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                                        <span> <i class="ri-star-line text-warning align-bottom"></i></span>
                                                    </div>
                                                    <h6 class="mb-0">Pauline Moll</h6>
                                                </div>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <p class="mb-0 text-muted"><i class="ri-calendar-event-fill me-2 align-middle"></i>Aug 16, 2022</p>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="lh-base fs-15">Design Quality</h5>
                                            <p class="mb-0">
                                                "We have used your other templates as well and seems it's amazing with the design and code quality. Wish you best for the future updates. Keep updated you will be #1 in near future. "
                                            </p>
                                        </div>
                                        <div class="d-flex mt-4">
                                            <div class="flex-shrink-0 me-3">
                                                <img class="avatar-xs rounded-circle" src="assets/images/users/avatar-1.jpg" alt="">
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
                                                        <p class="mb-0 text-muted"><i class="ri-calendar-event-fill me-2 align-middle"></i>Aug 16, 2022</p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">
                                                    Thank You
                                                </p>
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
                                                <span class="fs-14"> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                <span class="fs-14"> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                <span class="fs-14"> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                <span class="fs-14"> <i class="ri-star-fill text-warning align-bottom"></i></span>
                                                <span class="fs-14"> <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input class="form-control" name="your-name" placeholder="Title" type="text">
                                        </div>
                                        <div class="mb-3">
                                            <textarea class="form-control" name="your-comment" placeholder="Enter your comments & reviews" rows="4"></textarea>
                                        </div>
                                        <div class="text-end">
                                            <button class="btn btn-primary btn-hover" type="submit" value="Submit">Send Review <i class="ri-send-plane-2-line align-bottom ms-1"></i></button>
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



@endsection
