@extends('layouts.master')

@section('main-container')

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
                                    <img src="../assets/images/products/img-4.png" alt="" class="avatar-sm">
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
                                    <img src="../assets/images/products/img-1.png" alt="" class="avatar-sm">
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
                                    <img src="../assets/images/products/img-6.png" alt="" class="avatar-sm">
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
                                    <img src="../assets/images/products/img-8.png" alt="" class="avatar-sm">
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

<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content rounded">
            <div class="modal-header p-3">
                <div class="position-relative w-100">
                    <input type="text" class="form-control form-control-lg border-2" placeholder="Search for Toner..." autocomplete="off" id="search-options" value="">
                    <span class="bi bi-search search-widget-icon fs-17"></span>
                    <a href="javascript:void(0);" class="search-widget-icon fs-14 link-secondary text-decoration-underline search-widget-icon-close d-none" id="search-close-options">Clear</a>
                </div>
            </div>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 overflow-hidden" id="search-dropdown">

                <div class="dropdown-head rounded-top">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fs-14 text-muted fw-semibold"> RECENT SEARCHES </h6>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown-item bg-transparent text-wrap">
                        <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1 align-middle"></i></a>
                        <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1 align-middle"></i></a>
                    </div>
                </div>

                <div data-simplebar style="max-height: 300px;" class="pe-2 ps-3 my-3">
                    <div class="list-group list-group-flush border-dashed">
                        <div class="notification-group-list">
                            <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Apps Pages</h5>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-speedometer2 me-2"></i> <span>Analytics Dashboard</span></a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-filetype-psd me-2"></i> <span>Toner.psd</span></a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-ticket-detailed me-2"></i> <span>Support Tickets</span></a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-file-earmark-zip me-2"></i> <span>Toner.zip</span></a>
                        </div>

                        <div class="notification-group-list">
                            <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">Links</h5>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item"><i class="bi bi-link-45deg me-2 align-middle"></i> <span>www.themesbrand.com</span></a>
                        </div>

                        <div class="notification-group-list">
                            <h5 class="text-overflow text-muted fs-13 mb-2 mt-3 text-uppercase notification-title">People</h5>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/users/avatar-1.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                    <div>
                                        <h6 class="mb-0">Ayaan Bowen</h6>
                                        <span class="fs-12 text-muted">React Developer</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/users/avatar-7.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                    <div>
                                        <h6 class="mb-0">Alexander Kristi</h6>
                                        <span class="fs-12 text-muted">React Developer</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="list-group-item dropdown-item notify-item">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle flex-shrink-0 me-2">
                                    <div>
                                        <h6 class="mb-0">Alan Carla</h6>
                                        <span class="fs-12 text-muted">React Developer</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- removeItemModal -->
<div id="removeItemModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this product ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="remove-product">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="subscribeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0">
            <div class="modal-body p-0 bg-info-subtle rounded">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-4 h-100">
                            <span class="badge bg-info-subtle text-info  fs-13">GET 10% SALE OFF</span>
                            <h2 class="display-6 mt-2 mb-3">Subscribe & Get <b>50% Special</b> Discount On Email</h2>
                            <p class="mb-4 pb-lg-2 fs-16">Join our newsletter to receive the latest updates and promotion</p>
                            <form action="#!">
                                <div class="position-relative ecommerce-subscript">
                                    <input type="email" class="form-control rounded-pill border-0" placeholder="Enter your email">
                                    <button type="submit" class="btn btn-info btn-hover rounded-pill">Subscript</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-4 pb-0">
                            <img src="../assets/images/subscribe.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

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
                                    <img src="../assets/images/logo-sm.png" alt="">
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
                                    <img src="../assets/images/logo-sm.png" alt="">
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

<section class="position-relative">
    <div id="ecommerceHero" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="ecommerce-home bg-danger-subtle" style="background-image: url('../assets/images/ecommerce/home/img-1.png');">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7">
                                <div class="text-sm-end">
                                    <p class="fs-15 fw-semibold text-uppercase"><i class="ri-flashlight-fill text-primary align-bottom me-1"></i> In this season, find the best</p>
                                    <h1 class="display-4 fw-bold lh-base text-capitalize mb-3">Exclusive collection for everyone</h1>
                                    <p class="fs-20 mb-4">Biggest offers on this season</p>
                                    <button class="btn btn-danger btn-hover"><i class="ph-shopping-cart align-middle me-1"></i> Shop Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ecommerce-home bg-primary-subtle" style="background-image: url('../assets/images/ecommerce/home/img-2.png');">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div>
                                    <p class="fs-15 fw-semibold text-uppercase"><i class="ri-flashlight-fill text-info align-bottom me-1"></i> Save up to <span class="text-danger">50%</span> off</p>
                                    <h1 class="display-4 fw-semibold text-capitalize lh-base">Pro Smart watches for smart People</h1>
                                    <p class="fs-18 mb-4"><b>40% off</b> up to on all selected products</p>
                                    <button class="btn btn-primary btn-hover"><i class="ph-shopping-cart align-middle me-1"></i> Shop Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="ecommerce-home" style="background-image: url('../assets/images/ecommerce/home/img-6.jpg');background-size: cover;">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-6">
                                <div class="text-end">
                                    <p class="fs-15 fw-semibold text-uppercase text-dark">Jewelry Design with Love</p>
                                    <h1 class="display-4 fw-semibold text-capitalize lh-base text-dark">Discover world best Jewelry</h1>
                                    <p class="text-dark lead fs-19 mb-4">Jewelry are like a tribute to being a woman</p>
                                    <div class="hstack gap-2 justify-content-end">
                                        <button class="btn btn-success btn-hover">Shop Now <i class="ph-arrow-up-right align-middle ms-1"></i></button>
                                        <button class="btn btn-ghost-secondary btn-hover">Watch Now <i class="ph-play-circle align-middle ms-1 fs-16"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#ecommerceHero" data-bs-slide="prev">
            <i class="ph-caret-left"></i>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#ecommerceHero" data-bs-slide="next">
            <i class="ph-caret-right"></i>
        </button>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row gy-4 gy-lg-0">
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <img src="../assets/images/ecommerce/fast-delivery.png" alt="" class="avatar-sm">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-15">Fast &amp; Secure Delivery</h5>
                        <p class="text-muted mb-0">Tell about your service.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <img src="../assets/images/ecommerce/returns.png" alt="" class="avatar-sm">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-15">2 Days Return Policy</h5>
                        <p class="text-muted mb-0">No question ask.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <img src="../assets/images/ecommerce/guarantee-certificate.png" alt="" class="avatar-sm">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-15">Money Back Guarantee</h5>
                        <p class="text-muted mb-0">Within 5 business days</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="d-flex align-items-center gap-3">
                    <div class="flex-shrink-0">
                        <img src="../assets/images/ecommerce/24-hours-support.png" alt="" class="avatar-sm">
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="fs-15">24 X 7 Service</h5>
                        <p class="text-muted mb-0">Online service for customer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="#!" class="product-banner-1 mt-4 mt-lg-0 rounded overflow-hidden position-relative d-block">
                    <img src="../assets/images/ecommerce/features/img-3.jpg" class="img-fluid rounded" alt="">
                    <div class="bg-overlay blue"></div>
                    <div class="product-content p-4">
                        <p class="text-uppercase text-white mb-2">Up to 50-70%</p>
                        <h1 class="text-white lh-base fw-medium ff-secondary"> Women's Sportwere Sales</h1>
                        <div class="product-btn mt-4 text-white">
                            Shop Now <i class="bi bi-arrow-right ms-2"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="#!" class="product-banner-1 mt-4 mt-lg-0 rounded overflow-hidden position-relative d-block">
                    <img src="../assets/images/ecommerce/features/img-1.jpg" class="img-fluid rounded" alt="">
                    <div class="product-content p-4">
                        <p class="text-uppercase fw-medium text-secondary mb-2">Summer Sales</p>
                        <h1 class="lh-base ff-secondary text-dark">Trendy Fashion Clothes</h1>
                        <div class="product-btn mt-4">
                            Shop Now <i class="bi bi-arrow-right ms-2"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- START PRODUCT -->
<section class="section pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h3 class="mb-3">Top Picks Products Of The Week</h3>
                    <p class="text-muted fs-15 mb-0">This ranges from women and men's outfits to children's clothing, shoes, accessories, and more. People love their clothes, and fashion isn't going anywhere!</p>
                </div>
           </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="text-center">
                    <ul class="list-inline categories-filter animation-nav " id="filter">
                        <li class="list-inline-item"><a class="categories active" data-filter="*">All Arrival</a></li>
                        <li class="list-inline-item"><a class="categories" data-filter=".seller">Best Seller</a></li>
                        <li class="list-inline-item"><a class="categories" data-filter=".hot">Hot Collection</a></li>
                        <li class="list-inline-item"><a class="categories" data-filter=".trendy">Trendy</a></li>
                        <li class="list-inline-item"><a class="categories" data-filter=".arrival">New Arrival</a></li>
                    </ul>
                </div>

                <div class="row gallery-wrapper mt-4 pt-2">

                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 seller hot arrival" data-category="hot arrival">
                        <div class="card overflow-hidden">
                            <div class="bg-warning-subtle rounded-top py-4">
                                <div class="gallery-product">
                                    <img src="../assets/images/products/img-6.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                </div>
                                <p class="fs-11 fw-medium badge bg-primary py-2 px-3 product-lable mb-0">Best Arrival</p>
                                <div class="gallery-product-actions">
                                   <div class="mb-2">
                                        <button type="button" class="btn btn-danger btn-sm custom-toggle" data-bs-toggle="button">
                                            <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                            <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                        </button>
                                   </div>

                                   <div>
                                        <button type="button" class="btn btn-success btn-sm custom-toggle" data-bs-toggle="button">
                                            <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                            <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                        </button>
                                   </div>
                                </div>
                                <div class="product-btn px-3">
                                    <a href="shop-cart.html" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <a href="product-details.html">
                                        <h6 class="fs-15 lh-base text-truncate mb-0">Man Relaxed Fit T-shirt</h6>
                                    </a>
                                    <div class="mt-3">
                                        <span class="float-end">4.9 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                        <h5 class="mb-0">$199.00 <span class="text-muted fs-12"><del>$425.00</del></span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 seller hot" data-category="seller hot">
                        <div class="card overflow-hidden">
                            <div class="bg-info-subtle rounded-top py-4">
                                <div class="gallery-product">
                                    <img src="../assets/images/products/img-7.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                </div>
                                <div class="gallery-product-actions">
                                    <div class="mb-2">
                                         <button type="button" class="btn btn-danger btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                         </button>
                                    </div>
                                    <div>
                                         <button type="button" class="btn btn-success btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                         </button>
                                    </div>
                                 </div>
                                 <div class="product-btn px-3">
                                     <a href="shop-cart.html" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                 </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <a href="product-details.html">
                                        <h6 class="fs-15 lh-base text-truncate mb-0">Innovative education book </h6>
                                    </a>
                                    <div class="mt-3">
                                        <span class="float-end">3.2 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                        <h5 class="mb-0">$129.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 trendy" data-category="trendy">
                        <div class="card overflow-hidden">
                            <div class="bg-danger-subtle rounded-top py-4">
                                <div class="gallery-product">
                                    <img src="../assets/images/products/img-1.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                </div>
                                <div class="gallery-product-actions">
                                    <div class="mb-2">
                                         <button type="button" class="btn btn-danger btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                         </button>
                                    </div>

                                    <div>
                                         <button type="button" class="btn btn-success btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                         </button>
                                    </div>
                                 </div>
                                 <div class="product-btn px-3">
                                     <a href="shop-cart.html" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                 </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <a href="product-details.html">
                                        <h6 class="fs-15 lh-base text-truncate mb-0">Hp Trendsetter Backpack</h6>
                                    </a>
                                    <div class="mt-3">
                                        <span class="float-end">4.3 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                        <h5 class="mb-0">$299.00 <span class="text-muted fs-12"><del>$399.00</del></span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 trendy" data-category="trendy">
                        <div class="card overflow-hidden">
                            <div class="bg-warning-subtle rounded-top py-4">
                                <div class="gallery-product">
                                    <img src="../assets/images/products/img-2.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                </div>
                                <div class="gallery-product-actions">
                                    <div class="mb-2">
                                         <button type="button" class="btn btn-danger btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                         </button>
                                    </div>

                                    <div>
                                         <button type="button" class="btn btn-success btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                         </button>
                                    </div>
                                 </div>
                                 <div class="product-btn px-3">
                                     <a href="shop-cart.html" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                 </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <a href="product-details.html">
                                        <h6 class="fs-15 lh-base text-truncate mb-0">Hoodie Newyorker Winter Clothes</h6>
                                    </a>
                                    <div class="mt-3">
                                        <span class="float-end">3.1 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                        <h5 class="mb-0">$159.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 seller arrival" data-category="arrival">
                        <div class="card overflow-hidden">
                            <div class="bg-danger-subtle rounded-top py-4">
                                <div class="gallery-product">
                                    <img src="../assets/images/products/img-3.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                </div>
                                <p class="fs-11 fw-medium badge bg-primary py-2 px-3 product-lable mb-0">Best Arrival</p>
                                <div class="gallery-product-actions">
                                    <div class="mb-2">
                                         <button type="button" class="btn btn-danger btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                         </button>
                                    </div>

                                    <div>
                                         <button type="button" class="btn btn-success btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                         </button>
                                    </div>
                                 </div>
                                 <div class="product-btn px-3">
                                     <a href="shop-cart.html" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                 </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <a href="product-details.html">
                                        <h6 class="fs-15 lh-base text-truncate mb-0">Leather band Smartwatches</h6>
                                    </a>
                                   <div class="mt-3">
                                        <span class="float-end">3.7 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                        <h5 class="mb-0">$159.00</h5>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 seller hot" data-category="seller hot">
                        <div class="card overflow-hidden">
                            <div class="bg-success-subtle rounded-top py-4">
                                <div class="gallery-product">
                                    <img src="../assets/images/products/img-4.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                </div>
                                <div class="gallery-product-actions">
                                    <div class="mb-2">
                                         <button type="button" class="btn btn-danger btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                         </button>
                                    </div>

                                    <div>
                                         <button type="button" class="btn btn-success btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                         </button>
                                    </div>
                                 </div>
                                 <div class="product-btn px-3">
                                     <a href="shop-cart.html" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                 </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <a href="product-details.html">
                                        <h6 class="fs-15 lh-base text-truncate mb-0">Slippers Open Toe</h6>
                                    </a>
                                   <div class="mt-3">
                                        <span class="float-end">2.6 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                        <h5 class="mb-0">$169.00 <span class="text-muted fs-12"><del>$225.00</del></span></h5>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 project hot arrival" data-category="hot arrival">
                        <div class="card overflow-hidden">
                            <div class="bg-info-subtle rounded-top py-4">
                                <div class="gallery-product">
                                    <img src="../assets/images/products/img-8.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                </div>
                                <div class="gallery-product-actions">
                                    <div class="mb-2">
                                         <button type="button" class="btn btn-danger btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                         </button>
                                    </div>

                                    <div>
                                         <button type="button" class="btn btn-success btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                         </button>
                                    </div>
                                 </div>
                                 <div class="product-btn px-3">
                                     <a href="shop-cart.html" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                 </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <a href="product-details.html">
                                        <h6 class="fs-15 lh-base text-truncate mb-0">T-shirt Geometric Print pattern</h6>
                                    </a>
                                    <div class="mt-3">
                                        <span class="float-end">4.9 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                        <h5 class="mb-0">$339.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="element-item col-xxl-3 col-xl-4 col-sm-6 trendy" data-category="trendy">
                        <div class="card overflow-hidden">
                            <div class="bg-danger-subtle rounded-top py-4">
                                <div class="gallery-product">
                                    <img src="../assets/images/products/img-5.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                </div>
                                <p class="fs-11 fw-medium badge bg-primary py-2 px-3 product-lable mb-0">Best Arrival</p>
                                <div class="gallery-product-actions">
                                    <div class="mb-2">
                                         <button type="button" class="btn btn-danger btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-heart-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-heart align-bottom fs-15"></i></span>
                                         </button>
                                    </div>

                                    <div>
                                         <button type="button" class="btn btn-success btn-sm custom-toggle" data-bs-toggle="button">
                                             <span class="icon-on"><i class="mdi mdi-eye-outline align-bottom fs-15"></i></span>
                                             <span class="icon-off"><i class="mdi mdi-eye align-bottom fs-15"></i></span>
                                         </button>
                                    </div>
                                 </div>
                                 <div class="product-btn px-3">
                                     <a href="shop-cart.html" class="btn btn-primary btn-sm w-75 add-btn"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                 </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <a href="product-details.html">
                                        <h6 class="fs-15 lh-base text-truncate mb-0">Leather sports shoes on wood</h6>
                                    </a>
                                    <div class="mt-3">
                                        <span class="float-end">4.9 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                        <h5 class="mb-0">$435.00 <span class="text-muted fs-12"><del>$636.00</del></span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>

                <div class="mt-4 text-center">
                    <a href="product-list-defualt.html" class="btn btn-soft-primary btn-hover">View All Products <i class="mdi mdi-arrow-right align-middle ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END PRODUCT -->

<section class="position-relative bg-danger-subtle bg-cta">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="py-5">
                    <p class="text-uppercase  badge bg-danger-subtle text-danger  fs-13">Get <b>50%</b> off to your order</p>

                    <h1 class="lh-base fw-semibold mb-3 text-capitalize">Deal off the week</h1>
                    <p class="fs-16 mt-2">The hands-down winner of denim-friendly sandal styles has to be flat and simple thong sandals. They can be paired with virtually every style of women's jeans imaginable, and, as long as you can stand the toe strap, they tend to be really comfortable as well.</p>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="ecommerce-land-countdown mt-3 mb-0">
                                <div data-countdown="Jan 30, 2025" class="countdownlist"></div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 pt-2 d-flex gap-2">
                        <a href="#!" class="btn btn-primary w-md btn-hover">Shopping Now</a>
                        <a href="#!" class="btn btn-danger w-md btn-hover">Subscribe</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
               <div class="mt-lg-n5">
                    <img src="../assets/images/ecommerce/home/cta.png" alt="" class="mt-lg-n4">
               </div>
            </div>
        </div>
    </div>
</section>

<section class="section pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h3 class="mb-3">Latest Arrival</h3>
                    <p class="text-muted fs-15">What you wear is how you present yourself to the world, especially today, when human contacts are so quick. Fashion is instant language.</p>
                </div>
           </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="swiper latest-slider mt-4" dir="ltr">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-wrapper pt-5">

                        <div class="swiper-slide">
                            <div class="card overflow-hidden">
                                <div class="bg-dark-subtle rounded-top py-4">
                                    <div class="gallery-product">
                                        <img src="../assets/images/products/img-9.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="product-details.html">
                                            <h6 class="fs-15 lh-base text-truncate mb-0">Petronas Baseball Cap</h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">3.2 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="mb-0">$125.00 <span class="text-muted fs-12"><del>$200.00</del></span></h5>
                                        </div>
                                        <div class="mt-3">
                                            <a href="shop-cart.html" class="btn btn-primary btn-sm"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card overflow-hidden">
                                <div class="bg-warning-subtle rounded-top py-4">
                                    <div class="gallery-product">
                                        <img src="../assets/images/products/img-10.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="product-details.html">
                                            <h6 class="fs-15 lh-base text-truncate mb-0">Mens Black T Shirt</h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">4.3 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="mb-0">$150.00 <span class="text-muted fs-12"><del>$300.00</del></span></h5>
                                        </div>
                                        <div class="mt-3">
                                            <a href="shop-cart.html" class="btn btn-primary btn-sm"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card overflow-hidden">
                                <div class="bg-primary-subtle rounded-top py-4">
                                    <div class="gallery-product">
                                        <img src="../assets/images/products/img-11.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="product-details.html">
                                            <h6 class="fs-15 lh-base text-truncate mb-0">Blue Checked Slim Fit Shirt</h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">2.3 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="mb-0">$135.00 <span class="text-muted fs-12"><del>$523.00</del></span></h5>
                                        </div>
                                        <div class="mt-3">
                                            <a href="shop-cart.html" class="btn btn-primary btn-sm"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card overflow-hidden">
                                <div class="bg-danger-subtle rounded-top py-4">
                                    <div class="gallery-product">
                                        <img src="../assets/images/products/img-12.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="product-details.html">
                                            <h6 class="fs-15 lh-base text-truncate mb-0">Onyx SmartGRID Chair Red</h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">3.5 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="mb-0">$99.00 <span class="text-muted fs-12"><del>$129.00</del></span></h5>
                                        </div>
                                        <div class="mt-3">
                                            <a href="shop-cart.html" class="btn btn-primary btn-sm"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="card overflow-hidden">
                                <div class="bg-secondary-subtle rounded-top py-4">
                                    <div class="gallery-product">
                                        <img src="../assets/images/products/img-14.png" alt="" style="max-height: 215px;max-width: 100%;" class="mx-auto d-block">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <a href="product-details.html">
                                            <h6 class="fs-15 lh-base text-truncate mb-0">Nursing Chair Steam Grey</h6>
                                        </a>
                                        <div class="mt-3">
                                            <span class="float-end">2.3 <i class="ri-star-half-fill text-warning align-bottom"></i></span>
                                            <h5 class="mb-0">$632.00 <span class="text-muted fs-12"><del>$721.00</del></span></h5>
                                        </div>
                                        <div class="mt-3">
                                            <a href="shop-cart.html" class="btn btn-primary btn-sm"><i class="mdi mdi-cart me-1"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h3 class="mb-3">What Customers Say About Us</h3>
                    <p class="text-muted fs-15">A customer is a person or business that buys goods or services from another business. Customers are crucial because they generate revenue.</p>
                </div>
           </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="swiper testi-slider">
                    <div class="swiper-wrapper my-5">

                        <div class="swiper-slide">
                            <div class="client-box m-1">
                                <div class="client-desc p-4 border rounded">
                                    <p class="mb-0 fs-16">" Clean design. document is just a few's page but i should be like this cuz when looking on laravel project it well prepare. everytime i need a component or something else. easy to find. "</p>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center mt-4 pt-1">
                                        <img src="../assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-2 fs-16">George Obrien</h5>
                                            <p class="text-muted mb-0">Velzon User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide mt-5">
                            <div class="client-box m-1">
                                <div class="client-desc p-4 border rounded">
                                    <p class="mb-0 fs-16">" Thank you for supporting CakePHP 4, we have purchased the template because of this support, please push forward more integration "</p>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center mt-4 pt-1">
                                        <img src="../assets/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-2 fs-16">Chadwick A. Scott</h5>
                                            <p class="text-muted mb-0">Velzon User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="client-box m-1">
                                <div class="client-desc p-4 border rounded">
                                    <p class="mb-0 fs-16">" We have used your other templates as well and seems it's amazing with the design and code quality. Wish you best for the future updates. Keep updated you will be #1 in near future. "</p>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center mt-4 pt-1">
                                        <img src="../assets/images/users/avatar-8.jpg" alt="" class="avatar-sm rounded">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-2 fs-16">Tommy Moreno</h5>
                                            <p class="text-muted mb-0">Skote User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide mt-5">
                            <div class="client-box m-1">
                                <div class="client-desc p-4 border rounded">
                                    <p class="mb-0 fs-16">" The template is very complete as an admin panel and was well written in a way that makes it easy to use. "</p>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center mt-4 pt-1">
                                        <img src="../assets/images/users/avatar-10.jpg" alt="" class="avatar-sm rounded">
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-2 fs-16">Mary Atkinson</h5>
                                            <p class="text-muted mb-0">Velzon User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination-dark"></div>
                </div>
            </div>
        </div>

        <div class="row row-cols-lg-5 row-cols-md-3 row-cols-1 text-center justify-content-center align-items-center g-3 mt-5 pt-lg-5">
            <div class="col">
                <div class="client-images">
                    <a href="#!">
                        <img src="../assets/images/clients/paypal.svg" alt="client-img" class="mx-auto img-fluid d-block">
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="client-images">
                    <a href="#!">
                        <img src="../assets/images/clients/walmart.svg" alt="client-img" class="mx-auto img-fluid d-block">
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="client-images">
                    <a href="#!">
                        <img src="../assets/images/clients/spotify.svg" alt="client-img" class="mx-auto img-fluid d-block">
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="client-images">
                    <a href="#!">
                        <img src="../assets/images/clients/shopify.svg" alt="client-img" class="mx-auto img-fluid d-block">
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="client-images">
                    <a href="#!">
                        <img src="../assets/images/clients/lenovo.svg" alt="client-img" class="mx-auto img-fluid d-block">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- START BLOG -->
<section class="section bg-light bg-opacity-50">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h3 class="mb-3">Shop insights & feeds</h3>
                    <p class="text-muted fs-15">Shopping Insights gives marketers a 360-degree view of a product's popularity. Harnessing search volume data for more than 7,000 popular products (and counting)</p>
                </div>
        </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="card overflow-hidden">
                    <img src="../assets/images/small/img-3.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <div class="entry-meta">
                            <a href="#!" class="text-muted">12  <i class="mdi mdi-like"></i> Like</a>
                            <span class="text-muted mx-1">|</span>
                            <a href="#!" class="text-muted">10 Comments</a>
                        </div>
                        <div class="blog-date bg-body-secondary rounded">
                            <h4 class="mb-0">15</h4>
                            <p class="text-muted mt-1">April</p>
                        </div>
                        <div class="mt-3">
                            <a href="#!"><h5 class="fs-17 lh-base">Society Pass Turns to Stripe to Simplify Checkout</h5></a>
                            <p class="text-muted fs-15 mt-2">Southeast Asian eCommerce ecosystem Society Pass (SoPa) says it has integrated Stripe’s financial infrastructure solutions onto its platform.</p>
                            <a href="#!" class="link-effect link-info">Continue Reading <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card overflow-hidden">
                    <img src="../assets/images/small/img-8.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <div class="entry-meta">
                            <a href="#!" class="text-muted">24  <i class="mdi mdi-like"></i> Like</a>
                            <span class="text-muted mx-1">|</span>
                            <a href="#!" class="text-muted">32 Comments</a>
                        </div>
                        <div class="blog-date bg-body-secondary rounded">
                            <h4 class="mb-0">23</h4>
                            <p class="text-muted mt-1">April</p>
                        </div>
                        <div class="mt-3">
                            <a href="#!"><h5 class="fs-17 lh-base">Integrating Crypto Payment to Ecommerce</h5></a>
                            <p class="text-muted fs-15 mt-2"> To start accepting Bitcoin on your eCommerce site, simply integrate a BTC payment processor into your store. Many major eCommerce providers. </p>
                            <a href="#!" class="link-effect link-info">Continue Reading <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card overflow-hidden">
                    <img src="../assets/images/small/img-6.jpg" class="img-fluid" alt="">
                    <div class="card-body">
                        <div class="entry-meta">
                            <a href="#!" class="text-muted">48  <i class="mdi mdi-like"></i> Like</a>
                            <span class="text-muted mx-1">|</span>
                            <a href="#!" class="text-muted">15 Comments</a>
                        </div>
                        <div class="blog-date bg-body-secondary rounded">
                            <h4 class="mb-0">31</h4>
                            <p class="text-muted mt-1">April</p>
                        </div>
                        <div class="mt-3">
                            <a href="#!"><h5 class="fs-17 lh-base">Etsy Is a High-Flier Among E-Commerce Stocks</h5></a>
                            <p class="text-muted fs-15 mt-2">E-commerce stocks soared to record-high valuations during the pandemic. However, now that economies have reopened during the pandemic.</p>
                            <a href="#!" class="link-effect link-info">Continue Reading <i class="bi bi-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 text-center">
            <a href="#!" class="btn btn-soft-primary btn-hover">View More Articles <i class="bi bi-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>
<!-- END BLOG -->

<!-- START INSTAGRAM -->
<section class="section pb-0">
    <div class="container">
        <div class="row justify-content-center g-0">
            <div class="col-lg-7">
                <div class="text-center">
                    <h3 class="mb-3">Follow Us In Instagram</h3>
                    <p class="text-muted fs-15">The most common approach that peoples use to say follow me on Instagram is by sending a direct message.</p>
                </div>
           </div>
        </div>
    </div>

    <div class="position-relative">
        <div class="row g-0 mt-5">
            <div class="col">
                <div class="insta-img">
                    <a href="#!" class="stretched-link">
                        <img src="../assets/images/ecommerce/instagram/img-1.jpg" class="img-fluid" alt="">
                        <i class="ri-instagram-line"></i>
                    </a>
                </div>
            </div>

            <div class="col">
                <div class="insta-img">
                    <a href="#!" class="stretched-link">
                        <img src="../assets/images/ecommerce/instagram/img-2.jpg" class="img-fluid" alt="">
                        <i class="ri-instagram-line"></i>
                    </a>
                </div>
            </div>

            <div class="col d-none d-md-block">
                <div class="insta-img">
                    <a href="#!" class="stretched-link">
                        <img src="../assets/images/ecommerce/instagram/img-3.jpg" class="img-fluid" alt="">
                        <i class="ri-instagram-line"></i>
                    </a>
                </div>
            </div>

            <div class="col d-none d-md-block">
                <div class="insta-img">
                    <a href="#!" class="stretched-link">
                        <img src="../assets/images/ecommerce/instagram/img-4.jpg" class="img-fluid" alt="">
                        <i class="ri-instagram-line"></i>
                    </a>
                </div>
            </div>
            <div class="col d-none d-lg-block">
                <div class="insta-img">
                    <a href="#!" class="stretched-link">
                        <img src="../assets/images/ecommerce/instagram/img-5.jpg" class="img-fluid" alt="">
                        <i class="ri-instagram-line"></i>
                    </a>
                </div>
            </div>
            <div class="col d-none d-lg-block">
                <div class="insta-img">
                    <a href="#!" class="stretched-link">
                        <img src="../assets/images/ecommerce/instagram/img-6.jpg" class="img-fluid" alt="">
                        <i class="ri-instagram-line"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="insta-lable text-center">
            <a href="#!" class="btn btn-primary btn-hover">
                <i class="ph-instagram-logo align-middle me-1"></i> Follow In Instagram
            </a>
        </div>
    </div>
</section>
<!-- END INSTAGRAM -->

@endsection
