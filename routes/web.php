<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

use App\Http\Controllers\Main\SitemapController;
use App\Http\Controllers\Main\ProductDetailController;
use App\Http\Controllers\Main\ProductController;
use App\Http\Controllers\Main\AboutController;
use App\Http\Controllers\Main\HomeController;
use App\Http\Controllers\Main\ContactController;
use App\Http\Controllers\Main\AuthController;
use App\Http\Controllers\Main\FAQsController;
use App\Http\Controllers\Main\CartController;
use App\Http\Controllers\Main\OrderController;

use App\Http\Controllers\Admin\apps\EcommercePrintingList;
use App\Http\Controllers\Admin\apps\EcommerceDashboard;
use App\Http\Controllers\Admin\apps\EcommerceProductAdd;
use App\Http\Controllers\Admin\apps\EcommerceProductList;
use App\Http\Controllers\Admin\apps\EcommerceAuthController;
use App\Http\Controllers\Admin\apps\EcommercePrintingAdd;
use App\Http\Controllers\Admin\apps\EcommerceDeliveryAdd;
use App\Http\Controllers\Admin\apps\EcommerceDeliveryList;
use App\Http\Controllers\Admin\apps\EcommerceOrderList;
use App\Http\Controllers\Admin\apps\EcommerceCustomerDetailsOverview;
use App\Http\Controllers\Admin\apps\EcommerceOrderDetails;
use App\Http\Controllers\Admin\apps\EcommerceCustomerAll;

use App\Http\Controllers\Admin\components\ProductColorController;
use App\Http\Controllers\Admin\components\TVQTaxPricingController;
use App\Http\Controllers\Admin\components\TPSTaxPricingController;
use App\Http\Controllers\Admin\components\InternalStatusController;
use App\Http\Controllers\Admin\components\DiscountCouponsController;


Route::get('/', function () {
  return redirect()->route('home');
});

// Route::prefix('main')->middleware(['web', 'CheckCountry'])->group(function () {
Route::middleware(['web'])->group(function () {

  // Routes that require authentication
  Route::middleware('auth')->group(function () {



    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::delete('/cart/remove/{itemId}', [CartController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
    Route::get('/checkout', [OrderController::class, 'index'])->name('checkout');
    Route::post('/checkout/add', [OrderController::class, 'add'])->name('checkout.add');
    Route::get('/order-success', [OrderController::class, 'orderSuccess'])->name('main.pages.success');
    Route::get('/order-history', [OrderController::class, 'orderHistory'])->name('main.pages.orderhistory');
    Route::get('/payment-status', [OrderController::class, 'GetPaymentStatus'])->name('status');
    Route::post('/apply-discount', [OrderController::class, 'applyDiscount'])->name('apply.discount');

    Route::get('/view-color-book', [ProductDetailController::class, 'showColorBook']);
  });


  // for country selection through pop up


  Route::get('/select-country', function () {
    return view('main.global.country-selection');
  })->name('select.country');

  // POST route to store country selection
  Route::post('/set-country', function (Request $request) {
    Session::put('country', $request->country);

    // Debug: Check if session is actually set
    if (!Session::has('country')) {
      return back()->with('error', 'Session not set!');
    }

    return redirect()->route('home'); // Redirect to home after setting country
  })->name('set.country');



  Route::get('/sitemap.xml', [SitemapController::class, 'index']);
  

  Route::get('/products', [ProductController::class, 'index'])->name('products');
  Route::get('/product/{slug}', [ProductDetailController::class, 'index'])->name('product.detail');

  Route::post('/temp-cart-images/upload', [AuthController::class, 'uploadTempCartImage'])->name('temp_cart_images.upload');




  Route::get('/about', [AboutController::class, 'index'])->name('about');
  Route::get('/home', [HomeController::class, 'index'])->name('home');
  Route::get('/contact', [ContactController::class, 'index'])->name('contact');
  Route::get('/faqs', [FAQsController::class, 'index'])->name('faqs');

  // Routes for registration that do not require authentication
  // Registration Routes
  Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('user.register');
  Route::post('/register', [AuthController::class, 'register'])->name('user.register.post');
  Route::get('/login', [AuthController::class, 'showLoginForm'])->name('user.login');
  Route::post('/login', [AuthController::class, 'login'])->name('user.login.post');
  Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');
});



// function Route::prefixed($prefix, $name) {
//   return "{$prefix}.{$name}";
// }

// Define roles
$roles = [

  'superadmin' => 'superadmin',
  'sale' => 'sale',
  'marketing' => 'marketing',

];


Route::prefix('backend')->group(function () {
  Route::get('login', [EcommerceAuthController::class, 'showLoginForm'])->name('admin.login');
  Route::post('login', [EcommerceAuthController::class, 'login'])->name('admin.login.post');
});

foreach ($roles as $role => $prefix) {
  Route::middleware(["auth:{$role}", "role:{$role}"])->group(function () use ($prefix) {

    Route::prefix("backend/{$prefix}")->group(function () use ($prefix) {  // Apply backend prefix

      if ($prefix == 'superadmin') {





        Route::get('/dashboard', [EcommerceDashboard::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-dashboard'));


        Route::prefix('/component')->group(function () use ($prefix) {

          Route::get('/productcolor/add', [ProductColorController::class, 'index'])->name(Route::prefixed($prefix, 'content-product-color-add'));
          Route::post('/productcolor/add', [ProductColorController::class, 'store'])->name(Route::prefixed($prefix, 'content-product-color-store'));
          Route::get('/productcolor/list', [ProductColorController::class, 'list'])->name(Route::prefixed($prefix, 'content-product-color-list'));
          Route::get('/productcolor/edit/{id}', [ProductColorController::class, 'edit'])->name(Route::prefixed($prefix, 'content-product-color-edit'));
          Route::post('/productcolor/update/{id}', [ProductColorController::class, 'update'])->name(Route::prefixed($prefix, 'content-product-color-update'));
          Route::delete('/productcolor/delete/{id}', [ProductColorController::class, 'destroy'])->name(Route::prefixed($prefix, 'content-product-color-delete'));

          Route::get('/InternalStatus/list', [InternalStatusController::class, 'index'])->name(Route::prefixed($prefix, 'content-embroidery-color-list'));
          Route::get('/InternalStatus/add', [InternalStatusController::class, 'create'])->name(Route::prefixed($prefix, 'InternalStatus.index'));
          Route::post('/InternalStatus/store', [InternalStatusController::class, 'store'])->name(Route::prefixed($prefix, 'order-internal-status.store'));
          Route::get('/InternalStatus/edit/{id}', [InternalStatusController::class, 'edit'])->name(Route::prefixed($prefix, 'order-internal-status.edit'));
          Route::put('/InternalStatus/update/{id}', [InternalStatusController::class, 'update'])->name(Route::prefixed($prefix, 'order-internal-status.update'));
          Route::delete('/InternalStatus/delete/{id}', [InternalStatusController::class, 'destroy'])->name(Route::prefixed($prefix, 'order-internal-status.destroy'));
          Route::patch('/InternalStatus/restore/{id}', [InternalStatusController::class, 'restore'])->name(Route::prefixed($prefix, 'order-internal-status.index'));

          Route::get('/discountcoupon/add', [DiscountCouponsController::class, 'index'])->name(Route::prefixed($prefix, 'content-discount-coupon-add'));
          Route::post('/discountcoupon/add', [DiscountCouponsController::class, 'store'])->name(Route::prefixed($prefix, 'content-discount-coupon-store'));
          Route::get('/discountcoupon/list', [DiscountCouponsController::class, 'list'])->name(Route::prefixed($prefix, 'content-discount-coupon-list'));
          Route::get('/discountcoupon/edit/{id}', [DiscountCouponsController::class, 'edit'])->name(Route::prefixed($prefix, 'content-discount-coupon-edit'));
          Route::post('/discountcoupon/update/{id}', [DiscountCouponsController::class, 'update'])->name(Route::prefixed($prefix, 'content-discount-coupon-update'));
          Route::delete('/discountcoupon/delete/{id}', [DiscountCouponsController::class, 'destroy'])->name(Route::prefixed($prefix, 'content-discount-coupon-delete'));
          Route::patch('/update-visibility/{id}', [DiscountCouponsController::class, 'updateVisibility'])->name(Route::prefixed($prefix, 'update.visibilitycoupon'));
          Route::get('/get-items', [DiscountCouponsController::class, 'getItems'])->name(Route::prefixed($prefix, 'get-items'));

          Route::get('/TVQ_TaxPrice/list', [TVQTaxPricingController::class, 'index'])->name(Route::prefixed($prefix, 'TVQtax_price.index'));
          Route::get('/TVQ_TaxPrice/create', [TVQTaxPricingController::class, 'create'])->name(Route::prefixed($prefix, 'TVQtax_price.create'));
          Route::post('/TVQ_TaxPrice/store', [TVQTaxPricingController::class, 'store'])->name(Route::prefixed($prefix, 'TVQtax_price.store'));
          Route::get('/TVQ_TaxPrice/{id}/edit', [TVQTaxPricingController::class, 'edit'])->name(Route::prefixed($prefix, 'TVQtax_price.edit'));
          Route::put('/TVQ_TaxPrice/{id}/update', [TVQTaxPricingController::class, 'update'])->name(Route::prefixed($prefix, 'TVQtax_price.update'));
          Route::delete('/TVQ_TaxPrice/{id}/delete', [TVQTaxPricingController::class, 'destroy'])->name(Route::prefixed($prefix, 'TVQtax_price.destroy'));

          Route::get('/TPS_TaxPrice/list', [TPSTaxPricingController::class, 'index'])->name(Route::prefixed($prefix, 'TPStax_price.index'));
          Route::get('/TPS_TaxPrice/create', [TPSTaxPricingController::class, 'create'])->name(Route::prefixed($prefix, 'TPStax_price.create'));
          Route::post('/TPS_TaxPrice/store', [TPSTaxPricingController::class, 'store'])->name(Route::prefixed($prefix, 'TPStax_price.store'));
          Route::get('/TPS_TaxPrice/{id}/edit', [TPSTaxPricingController::class, 'edit'])->name(Route::prefixed($prefix, 'TPStax_price.edit'));
          Route::put('/TPS_TaxPrice/{id}/update', [TPSTaxPricingController::class, 'update'])->name(Route::prefixed($prefix, 'TPStax_price.update'));
          Route::delete('/TPS_TaxPrice/{id}/delete', [TPSTaxPricingController::class, 'destroy'])->name(Route::prefixed($prefix, 'TPStax_price.destroy'));
        });


        Route::get('/product/add', [EcommerceProductAdd::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-product-add'));
        Route::post('/product/add', [EcommerceProductAdd::class, 'store'])->name(Route::prefixed($prefix, 'app-ecommerce-product-store'));
        Route::get('/product/list', [EcommerceProductList::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-product-list'));
        Route::get('/product/edit/{id}', [EcommerceProductList::class, 'edit'])->name(Route::prefixed($prefix, 'app-ecommerce-product-edit'));
        Route::post('/product/edit/{id}', [EcommerceProductList::class, 'update'])->name(Route::prefixed($prefix, 'app-ecommerce-product-update'));
        Route::post('/product/edit/{id}', [EcommerceProductList::class, 'update'])->name(Route::prefixed($prefix, 'app-ecommerce-product-update'));
        Route::post('/update-visibility/{id}', [EcommerceProductList::class, 'updateVisibility'])->name(Route::prefixed($prefix, 'update.visibility'));
        Route::get('/product/delete/{id}', [EcommerceProductList::class, 'destroy'])->name(Route::prefixed($prefix, 'app-ecommerce-product-delete'));

        Route::get('/delete/product-color/{id}', [EcommerceProductList::class, 'deleteProductColor'])->name(Route::prefixed($prefix, 'delete.product-color'));
        Route::get('/delete/product-base-image/{id}', [EcommerceProductList::class, 'deleteProductBaseImage'])->name(Route::prefixed($prefix, 'delete.product-base-image'));

        Route::get('/delivery/add', [EcommerceDeliveryAdd::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-delivery-add'));

        Route::get('/printing/add', [EcommercePrintingAdd::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-printing-add'));
        Route::post('/printing/add', [EcommercePrintingAdd::class, 'store'])->name(Route::prefixed($prefix, 'app-ecommerce-printing-store'));
        Route::get('/printing/list', [EcommercePrintingList::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-printing-list'));

        Route::get('/order/list', [EcommerceOrderList::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-order-list'));
        Route::get('/order/detail/{orderId}', [EcommerceOrderDetails::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-order-detail'));
        Route::post('/order/upload-file/{id}', [EcommerceOrderDetails::class, 'orderfileupload'])->name(Route::prefixed($prefix, 'order.file.upload'));
        Route::post('/order/{orderId}/update-status', [EcommerceOrderDetails::class, 'updateOrderStatus'])->name(Route::prefixed($prefix, 'order-status.update'));

        Route::post('/admin/orders/{id}/status', [EcommerceOrderList::class, 'updateStatus'])->name(Route::prefixed($prefix, 'admin.orders.updateStatus'));

        Route::get('/customer/all', [EcommerceCustomerAll::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-customer-all'));
        Route::get('/customer/{id}', [EcommerceCustomerDetailsOverview::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-customer-detail'));
        Route::post('/update-status/{id}', [EcommerceCustomerAll::class, 'updateStatus'])->name(Route::prefixed($prefix, 'update.status'));
        Route::get('/customers/edit/{id}', [EcommerceCustomerAll::class, 'edit'])->name(Route::prefixed($prefix, 'admin.customers.edit'));
        Route::post('/customers/update/{id}', [EcommerceCustomerAll::class, 'update'])->name(Route::prefixed($prefix, 'admin.customers.update'));
        Route::delete('/customers/delete/{id}', [EcommerceCustomerAll::class, 'destroy'])->name(Route::prefixed($prefix, 'admin.customers.destroy'));

        Route::post('/logout', [EcommerceAuthController::class, 'logout'])->name(Route::prefixed($prefix, 'admin.logout'));

      } elseif ($prefix == 'sale') {

        Route::get('/dashboard', [EcommerceDashboard::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-dashboard'));


        Route::prefix('/component')->group(function () use ($prefix) {

          Route::get('/productcolor/add', [ProductColorController::class, 'index'])->name(Route::prefixed($prefix, 'content-product-color-add'));
          Route::post('/productcolor/add', [ProductColorController::class, 'store'])->name(Route::prefixed($prefix, 'content-product-color-store'));
          Route::get('/productcolor/list', [ProductColorController::class, 'list'])->name(Route::prefixed($prefix, 'content-product-color-list'));
          Route::get('/productcolor/edit/{id}', [ProductColorController::class, 'edit'])->name(Route::prefixed($prefix, 'content-product-color-edit'));
          Route::post('/productcolor/update/{id}', [ProductColorController::class, 'update'])->name(Route::prefixed($prefix, 'content-product-color-update'));
          Route::delete('/productcolor/delete/{id}', [ProductColorController::class, 'destroy'])->name(Route::prefixed($prefix, 'content-product-color-delete'));

          Route::get('/InternalStatus/list', [InternalStatusController::class, 'index'])->name(Route::prefixed($prefix, 'content-embroidery-color-list'));
          Route::get('/InternalStatus/add', [InternalStatusController::class, 'create'])->name(Route::prefixed($prefix, 'InternalStatus.index'));
          Route::post('/InternalStatus/store', [InternalStatusController::class, 'store'])->name(Route::prefixed($prefix, 'order-internal-status.store'));
          Route::get('/InternalStatus/edit/{id}', [InternalStatusController::class, 'edit'])->name(Route::prefixed($prefix, 'order-internal-status.edit'));
          Route::put('/InternalStatus/update/{id}', [InternalStatusController::class, 'update'])->name(Route::prefixed($prefix, 'order-internal-status.update'));
          Route::delete('/InternalStatus/delete/{id}', [InternalStatusController::class, 'destroy'])->name(Route::prefixed($prefix, 'order-internal-status.destroy'));
          Route::patch('/InternalStatus/restore/{id}', [InternalStatusController::class, 'restore'])->name(Route::prefixed($prefix, 'order-internal-status.index'));

          Route::get('/discountcoupon/add', [DiscountCouponsController::class, 'index'])->name(Route::prefixed($prefix, 'content-discount-coupon-add'));
          Route::post('/discountcoupon/add', [DiscountCouponsController::class, 'store'])->name(Route::prefixed($prefix, 'content-discount-coupon-store'));
          Route::get('/discountcoupon/list', [DiscountCouponsController::class, 'list'])->name(Route::prefixed($prefix, 'content-discount-coupon-list'));
          Route::get('/discountcoupon/edit/{id}', [DiscountCouponsController::class, 'edit'])->name(Route::prefixed($prefix, 'content-discount-coupon-edit'));
          Route::post('/discountcoupon/update/{id}', [DiscountCouponsController::class, 'update'])->name(Route::prefixed($prefix, 'content-discount-coupon-update'));
          Route::delete('/discountcoupon/delete/{id}', [DiscountCouponsController::class, 'destroy'])->name(Route::prefixed($prefix, 'content-discount-coupon-delete'));
          Route::patch('/update-visibility/{id}', [DiscountCouponsController::class, 'updateVisibility'])->name(Route::prefixed($prefix, 'update.visibilitycoupon'));
          Route::get('/get-items', [DiscountCouponsController::class, 'getItems'])->name(Route::prefixed($prefix, 'get-items'));

          Route::get('/TVQ_TaxPrice/list', [TVQTaxPricingController::class, 'index'])->name(Route::prefixed($prefix, 'TVQtax_price.index'));
          Route::get('/TVQ_TaxPrice/create', [TVQTaxPricingController::class, 'create'])->name(Route::prefixed($prefix, 'TVQtax_price.create'));
          Route::post('/TVQ_TaxPrice/store', [TVQTaxPricingController::class, 'store'])->name(Route::prefixed($prefix, 'TVQtax_price.store'));
          Route::get('/TVQ_TaxPrice/{id}/edit', [TVQTaxPricingController::class, 'edit'])->name(Route::prefixed($prefix, 'TVQtax_price.edit'));
          Route::put('/TVQ_TaxPrice/{id}/update', [TVQTaxPricingController::class, 'update'])->name(Route::prefixed($prefix, 'TVQtax_price.update'));
          Route::delete('/TVQ_TaxPrice/{id}/delete', [TVQTaxPricingController::class, 'destroy'])->name(Route::prefixed($prefix, 'TVQtax_price.destroy'));

          Route::get('/TPS_TaxPrice/list', [TPSTaxPricingController::class, 'index'])->name(Route::prefixed($prefix, 'TPStax_price.index'));
          Route::get('/TPS_TaxPrice/create', [TPSTaxPricingController::class, 'create'])->name(Route::prefixed($prefix, 'TPStax_price.create'));
          Route::post('/TPS_TaxPrice/store', [TPSTaxPricingController::class, 'store'])->name(Route::prefixed($prefix, 'TPStax_price.store'));
          Route::get('/TPS_TaxPrice/{id}/edit', [TPSTaxPricingController::class, 'edit'])->name(Route::prefixed($prefix, 'TPStax_price.edit'));
          Route::put('/TPS_TaxPrice/{id}/update', [TPSTaxPricingController::class, 'update'])->name(Route::prefixed($prefix, 'TPStax_price.update'));
          Route::delete('/TPS_TaxPrice/{id}/delete', [TPSTaxPricingController::class, 'destroy'])->name(Route::prefixed($prefix, 'TPStax_price.destroy'));
        });


        Route::get('/product/add', [EcommerceProductAdd::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-product-add'));
        Route::post('/product/add', [EcommerceProductAdd::class, 'store'])->name(Route::prefixed($prefix, 'app-ecommerce-product-store'));
        Route::get('/product/list', [EcommerceProductList::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-product-list'));
        Route::get('/product/edit/{id}', [EcommerceProductList::class, 'edit'])->name(Route::prefixed($prefix, 'app-ecommerce-product-edit'));
        Route::post('/product/edit/{id}', [EcommerceProductList::class, 'update'])->name(Route::prefixed($prefix, 'app-ecommerce-product-update'));
        Route::post('/product/edit/{id}', [EcommerceProductList::class, 'update'])->name(Route::prefixed($prefix, 'app-ecommerce-product-update'));
        Route::post('/update-visibility/{id}', [EcommerceProductList::class, 'updateVisibility'])->name(Route::prefixed($prefix, 'update.visibility'));


        Route::get('/delivery/add', [EcommerceDeliveryAdd::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-delivery-add'));

        Route::get('/printing/add', [EcommercePrintingAdd::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-printing-add'));
        Route::post('/printing/add', [EcommercePrintingAdd::class, 'store'])->name(Route::prefixed($prefix, 'app-ecommerce-printing-store'));
        Route::get('/printing/list', [EcommercePrintingList::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-printing-list'));

        Route::get('/order/list', [EcommerceOrderList::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-order-list'));
        Route::get('/order/detail/{orderId}', [EcommerceOrderDetails::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-order-detail'));
        Route::post('/order/upload-file/{id}', [EcommerceOrderDetails::class, 'orderfileupload'])->name(Route::prefixed($prefix, 'order.file.upload'));
        Route::post('/order/{orderId}/update-status', [EcommerceOrderDetails::class, 'updateOrderStatus'])->name(Route::prefixed($prefix, 'order-status.update'));

        Route::post('/admin/orders/{id}/status', [EcommerceOrderList::class, 'updateStatus'])->name(Route::prefixed($prefix, 'admin.orders.updateStatus'));

        Route::get('/customer/all', [EcommerceCustomerAll::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-customer-all'));
        Route::get('/customer/{id}', [EcommerceCustomerDetailsOverview::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-customer-detail'));
        Route::post('/update-status/{id}', [EcommerceCustomerAll::class, 'updateStatus'])->name(Route::prefixed($prefix, 'update.status'));
        Route::get('/customers/edit/{id}', [EcommerceCustomerAll::class, 'edit'])->name(Route::prefixed($prefix, 'admin.customers.edit'));
        Route::post('/customers/update/{id}', [EcommerceCustomerAll::class, 'update'])->name(Route::prefixed($prefix, 'admin.customers.update'));
        Route::delete('/customers/delete/{id}', [EcommerceCustomerAll::class, 'destroy'])->name(Route::prefixed($prefix, 'admin.customers.destroy'));

        Route::post('/logout', [EcommerceAuthController::class, 'logout'])->name(Route::prefixed($prefix, 'admin.logout'));

      } elseif ($prefix == 'marketing') {

        Route::get('/dashboard', [EcommerceDashboard::class, 'index'])->name(Route::prefixed($prefix, 'app-ecommerce-dashboard'));

        Route::prefix('/component')->group(function () use ($prefix) {

          Route::get('/discountcoupon/add', [DiscountCouponsController::class, 'index'])->name(Route::prefixed($prefix, 'content-discount-coupon-add'));
          Route::post('/discountcoupon/add', [DiscountCouponsController::class, 'store'])->name(Route::prefixed($prefix, 'content-discount-coupon-store'));
          Route::get('/discountcoupon/list', [DiscountCouponsController::class, 'list'])->name(Route::prefixed($prefix, 'content-discount-coupon-list'));
          Route::get('/discountcoupon/edit/{id}', [DiscountCouponsController::class, 'edit'])->name(Route::prefixed($prefix, 'content-discount-coupon-edit'));
          Route::post('/discountcoupon/update/{id}', [DiscountCouponsController::class, 'update'])->name(Route::prefixed($prefix, 'content-discount-coupon-update'));
          Route::delete('/discountcoupon/delete/{id}', [DiscountCouponsController::class, 'destroy'])->name(Route::prefixed($prefix, 'content-discount-coupon-delete'));
          Route::patch('/update-visibility/{id}', [DiscountCouponsController::class, 'updateVisibility'])->name(Route::prefixed($prefix, 'update.visibilitycoupon'));
          Route::get('/get-items', [DiscountCouponsController::class, 'getItems'])->name(Route::prefixed($prefix, 'get-items'));


        });



        Route::post('/logout', [EcommerceAuthController::class, 'logout'])->name(Route::prefixed($prefix, 'admin.logout'));

      }

    });
  });
}


// Route::prefix('admin')->middleware('guest:admin')->group(function () {
//   Route::get('login', [EcommerceAuthController::class, 'showLoginForm'])->name('admin.login');
//   Route::post('login', [EcommerceAuthController::class, 'login'])->name('admin.login.post');
// });

// Route::prefix('admin')->middleware(['role:admin'])->group(function () {

//   Route::prefix('/component')->group(function () {

//     Route::get('/productcolor/add', [ProductColorController::class, 'index'])->name('content-product-color-add');
//     Route::post('/productcolor/add', [ProductColorController::class, 'store'])->name('content-product-color-store');
//     Route::get('/productcolor/list', [ProductColorController::class, 'list'])->name('content-product-color-list');
//     Route::get('/productcolor/edit/{id}', [ProductColorController::class, 'edit'])->name('content-product-color-edit');
//     Route::post('/productcolor/update/{id}', [ProductColorController::class, 'update'])->name('content-product-color-update');
//     Route::delete('/productcolor/delete/{id}', [ProductColorController::class, 'destroy'])->name('content-product-color-delete');

//     Route::get('/InternalStatus/list', [InternalStatusController::class, 'index'])->name('content-embroidery-color-list');
//     Route::get('/InternalStatus/add', [InternalStatusController::class, 'create'])->name('InternalStatus.index');
//     Route::post('/InternalStatus/store', [InternalStatusController::class, 'store'])->name('order-internal-status.store');
//     Route::get('/InternalStatus/edit/{id}', [InternalStatusController::class, 'edit'])->name('order-internal-status.edit');
//     Route::put('/InternalStatus/update/{id}', [InternalStatusController::class, 'update'])->name('order-internal-status.update');
//     Route::delete('/InternalStatus/delete/{id}', [InternalStatusController::class, 'destroy'])->name('order-internal-status.destroy');
//     Route::patch('/InternalStatus/restore/{id}', [InternalStatusController::class, 'restore'])->name('order-internal-status.index');

//     Route::get('/discountcoupon/add', [DiscountCouponsController::class, 'index'])->name('content-discount-coupon-add');
//     Route::post('/discountcoupon/add', [DiscountCouponsController::class, 'store'])->name('content-discount-coupon-store');
//     Route::get('/discountcoupon/list', [DiscountCouponsController::class, 'list'])->name('content-discount-coupon-list');
//     Route::get('/discountcoupon/edit/{id}', [DiscountCouponsController::class, 'edit'])->name('content-discount-coupon-edit');
//     Route::post('/discountcoupon/update/{id}', [DiscountCouponsController::class, 'update'])->name('content-discount-coupon-update');
//     Route::delete('/discountcoupon/delete/{id}', [DiscountCouponsController::class, 'destroy'])->name('content-discount-coupon-delete');
//     Route::patch('/update-visibility/{id}', [DiscountCouponsController::class, 'updateVisibility'])->name('update.visibilitycoupon');
//     Route::get('/get-items', [DiscountCouponsController::class, 'getItems'])->name('get-items');

//     Route::get('/TVQ_TaxPrice/list', [TVQTaxPricingController::class, 'index'])->name('TVQtax_price.index');
//     Route::get('/TVQ_TaxPrice/create', [TVQTaxPricingController::class, 'create'])->name('TVQtax_price.create');
//     Route::post('/TVQ_TaxPrice/store', [TVQTaxPricingController::class, 'store'])->name('TVQtax_price.store');
//     Route::get('/TVQ_TaxPrice/{id}/edit', [TVQTaxPricingController::class, 'edit'])->name('TVQtax_price.edit');
//     Route::put('/TVQ_TaxPrice/{id}/update', [TVQTaxPricingController::class, 'update'])->name('TVQtax_price.update');
//     Route::delete('/TVQ_TaxPrice/{id}/delete', [TVQTaxPricingController::class, 'destroy'])->name('TVQtax_price.destroy');

//     Route::get('/TPS_TaxPrice/list', [TPSTaxPricingController::class, 'index'])->name('TPStax_price.index');
//     Route::get('/TPS_TaxPrice/create', [TPSTaxPricingController::class, 'create'])->name('TPStax_price.create');
//     Route::post('/TPS_TaxPrice/store', [TPSTaxPricingController::class, 'store'])->name('TPStax_price.store');
//     Route::get('/TPS_TaxPrice/{id}/edit', [TPSTaxPricingController::class, 'edit'])->name('TPStax_price.edit');
//     Route::put('/TPS_TaxPrice/{id}/update', [TPSTaxPricingController::class, 'update'])->name('TPStax_price.update');
//     Route::delete('/TPS_TaxPrice/{id}/delete', [TPSTaxPricingController::class, 'destroy'])->name('TPStax_price.destroy');
//   });;


//   Route::get('/dashboard', [EcommerceDashboard::class, 'index'])->name('app-ecommerce-dashboard');

//   Route::get('/delivery/add', [EcommerceDeliveryAdd::class, 'index'])->name('app-ecommerce-delivery-add');
//   Route::post('/delivery/add', [EcommerceDeliveryAdd::class, 'store'])->name('app-ecommerce-delivery-store');
//   Route::get('/delivery/list', [EcommerceDeliveryList::class, 'index'])->name('app-ecommerce-delivery-list');

//   Route::get('/printing/add', [EcommercePrintingAdd::class, 'index'])->name('app-ecommerce-printing-add');
//   Route::post('/printing/add', [EcommercePrintingAdd::class, 'store'])->name('app-ecommerce-printing-store');
//   Route::get('/printing/list', [EcommercePrintingList::class, 'index'])->name('app-ecommerce-printing-list');

//   Route::get('/order/list', [EcommerceOrderList::class, 'index'])->name('app-ecommerce-order-list');
//   Route::get('/order/detail/{orderId}', [EcommerceOrderDetails::class, 'index'])->name('app-ecommerce-order-detail');
//   Route::post('/order/upload-file/{id}', [EcommerceOrderDetails::class, 'orderfileupload'])->name('order.file.upload');
//   Route::post('/order/{orderId}/update-status', [EcommerceOrderDetails::class, 'updateOrderStatus'])->name('order-status.update');

//   Route::post('/admin/orders/{id}/status', [EcommerceOrderList::class, 'updateStatus'])->name('admin.orders.updateStatus');

//   Route::get('/customer/all', [EcommerceCustomerAll::class, 'index'])->name('app-ecommerce-customer-all');
//   Route::get('/customer/{id}', [EcommerceCustomerDetailsOverview::class, 'index'])->name('app-ecommerce-customer-detail');
//   Route::post('/update-status/{id}', [EcommerceCustomerAll::class, 'updateStatus'])->name('update.status');

//   Route::get('/product/add', [EcommerceProductAdd::class, 'index'])->name('app-ecommerce-product-add');
//   Route::post('/product/add', [EcommerceProductAdd::class, 'store'])->name('app-ecommerce-product-store');
//   Route::get('/product/list', [EcommerceProductList::class, 'index'])->name('app-ecommerce-product-list');
//   Route::get('/product/edit/{id}', [EcommerceProductList::class, 'edit'])->name('app-ecommerce-product-edit');
//   Route::post('/product/edit/{id}', [EcommerceProductList::class, 'update'])->name('app-ecommerce-product-update');
//   Route::post('/product/edit/{id}', [EcommerceProductList::class, 'update'])->name('app-ecommerce-product-update');

//   Route::post('/update-visibility/{id}', [EcommerceProductList::class, 'updateVisibility'])->name('update.visibility');


//   Route::post('/logout', [EcommerceAuthController::class, 'logout'])->name('admin.logout');
// });


// Route::prefix('marketing')->middleware(['role:marketing'])->group(function () {

//   Route::get('/dashboard', [EcommerceDashboard::class, 'index'])->name('app-ecommerce-dashboard');

//   Route::prefix('/component')->group(function () {

//     Route::get('/discountcoupon/add', [DiscountCouponsController::class, 'index'])->name('content-discount-coupon-add');
//     Route::post('/discountcoupon/add', [DiscountCouponsController::class, 'store'])->name('content-discount-coupon-store');
//     Route::get('/discountcoupon/list', [DiscountCouponsController::class, 'list'])->name('content-discount-coupon-list');
//     Route::get('/discountcoupon/edit/{id}', [DiscountCouponsController::class, 'edit'])->name('content-discount-coupon-edit');
//     Route::post('/discountcoupon/update/{id}', [DiscountCouponsController::class, 'update'])->name('content-discount-coupon-update');
//     Route::delete('/discountcoupon/delete/{id}', [DiscountCouponsController::class, 'destroy'])->name('content-discount-coupon-delete');
//     Route::patch('/update-visibility/{id}', [DiscountCouponsController::class, 'updateVisibility'])->name('update.visibilitycoupon');
//     Route::get('/get-items', [DiscountCouponsController::class, 'getItems'])->name('get-items');


//   });;
//   Route::post('/logout', [EcommerceAuthController::class, 'logout'])->name('admin.logout');
// });

// Route::prefix('sale')->middleware(['role:sale'])->group(function () {
//   Route::prefix('/component')->group(function () {

//     Route::get('/productcolor/add', [ProductColorController::class, 'index'])->name('content-product-color-add');
//     Route::post('/productcolor/add', [ProductColorController::class, 'store'])->name('content-product-color-store');
//     Route::get('/productcolor/list', [ProductColorController::class, 'list'])->name('content-product-color-list');
//     Route::get('/productcolor/edit/{id}', [ProductColorController::class, 'edit'])->name('content-product-color-edit');
//     Route::post('/productcolor/update/{id}', [ProductColorController::class, 'update'])->name('content-product-color-update');
//     Route::delete('/productcolor/delete/{id}', [ProductColorController::class, 'destroy'])->name('content-product-color-delete');

//     Route::get('/InternalStatus/list', [InternalStatusController::class, 'index'])->name('content-embroidery-color-list');
//     Route::get('/InternalStatus/add', [InternalStatusController::class, 'create'])->name('InternalStatus.index');
//     Route::post('/InternalStatus/store', [InternalStatusController::class, 'store'])->name('order-internal-status.store');
//     Route::get('/InternalStatus/edit/{id}', [InternalStatusController::class, 'edit'])->name('order-internal-status.edit');
//     Route::put('/InternalStatus/update/{id}', [InternalStatusController::class, 'update'])->name('order-internal-status.update');
//     Route::delete('/InternalStatus/delete/{id}', [InternalStatusController::class, 'destroy'])->name('order-internal-status.destroy');
//     Route::patch('/InternalStatus/restore/{id}', [InternalStatusController::class, 'restore'])->name('order-internal-status.index');

//     Route::get('/discountcoupon/add', [DiscountCouponsController::class, 'index'])->name('content-discount-coupon-add');
//     Route::post('/discountcoupon/add', [DiscountCouponsController::class, 'store'])->name('content-discount-coupon-store');
//     Route::get('/discountcoupon/list', [DiscountCouponsController::class, 'list'])->name('content-discount-coupon-list');
//     Route::get('/discountcoupon/edit/{id}', [DiscountCouponsController::class, 'edit'])->name('content-discount-coupon-edit');
//     Route::post('/discountcoupon/update/{id}', [DiscountCouponsController::class, 'update'])->name('content-discount-coupon-update');
//     Route::delete('/discountcoupon/delete/{id}', [DiscountCouponsController::class, 'destroy'])->name('content-discount-coupon-delete');
//     Route::patch('/update-visibility/{id}', [DiscountCouponsController::class, 'updateVisibility'])->name('update.visibilitycoupon');
//     Route::get('/get-items', [DiscountCouponsController::class, 'getItems'])->name('get-items');

//     Route::get('/TVQ_TaxPrice/list', [TVQTaxPricingController::class, 'index'])->name('TVQtax_price.index');
//     Route::get('/TVQ_TaxPrice/create', [TVQTaxPricingController::class, 'create'])->name('TVQtax_price.create');
//     Route::post('/TVQ_TaxPrice/store', [TVQTaxPricingController::class, 'store'])->name('TVQtax_price.store');
//     Route::get('/TVQ_TaxPrice/{id}/edit', [TVQTaxPricingController::class, 'edit'])->name('TVQtax_price.edit');
//     Route::put('/TVQ_TaxPrice/{id}/update', [TVQTaxPricingController::class, 'update'])->name('TVQtax_price.update');
//     Route::delete('/TVQ_TaxPrice/{id}/delete', [TVQTaxPricingController::class, 'destroy'])->name('TVQtax_price.destroy');

//     Route::get('/TPS_TaxPrice/list', [TPSTaxPricingController::class, 'index'])->name('TPStax_price.index');
//     Route::get('/TPS_TaxPrice/create', [TPSTaxPricingController::class, 'create'])->name('TPStax_price.create');
//     Route::post('/TPS_TaxPrice/store', [TPSTaxPricingController::class, 'store'])->name('TPStax_price.store');
//     Route::get('/TPS_TaxPrice/{id}/edit', [TPSTaxPricingController::class, 'edit'])->name('TPStax_price.edit');
//     Route::put('/TPS_TaxPrice/{id}/update', [TPSTaxPricingController::class, 'update'])->name('TPStax_price.update');
//     Route::delete('/TPS_TaxPrice/{id}/delete', [TPSTaxPricingController::class, 'destroy'])->name('TPStax_price.destroy');
//   });;


//   Route::get('/dashboard', [EcommerceDashboard::class, 'index'])->name('app-ecommerce-dashboard');

//   Route::get('/delivery/add', [EcommerceDeliveryAdd::class, 'index'])->name('app-ecommerce-delivery-add');
//   Route::post('/delivery/add', [EcommerceDeliveryAdd::class, 'store'])->name('app-ecommerce-delivery-store');
//   Route::get('/delivery/list', [EcommerceDeliveryList::class, 'index'])->name('app-ecommerce-delivery-list');

//   Route::get('/printing/add', [EcommercePrintingAdd::class, 'index'])->name('app-ecommerce-printing-add');
//   Route::post('/printing/add', [EcommercePrintingAdd::class, 'store'])->name('app-ecommerce-printing-store');
//   Route::get('/printing/list', [EcommercePrintingList::class, 'index'])->name('app-ecommerce-printing-list');

//   Route::get('/order/list', [EcommerceOrderList::class, 'index'])->name('app-ecommerce-order-list');
//   Route::get('/order/detail/{orderId}', [EcommerceOrderDetails::class, 'index'])->name('app-ecommerce-order-detail');
//   Route::post('/order/upload-file/{id}', [EcommerceOrderDetails::class, 'orderfileupload'])->name('order.file.upload');
//   Route::post('/order/{orderId}/update-status', [EcommerceOrderDetails::class, 'updateOrderStatus'])->name('order-status.update');

//   Route::post('/admin/orders/{id}/status', [EcommerceOrderList::class, 'updateStatus'])->name('admin.orders.updateStatus');

//   Route::get('/customer/all', [EcommerceCustomerAll::class, 'index'])->name('app-ecommerce-customer-all');
//   Route::get('/customer/{id}', [EcommerceCustomerDetailsOverview::class, 'index'])->name('app-ecommerce-customer-detail');
//   Route::post('/update-status/{id}', [EcommerceCustomerAll::class, 'updateStatus'])->name('update.status');

//   Route::get('/product/add', [EcommerceProductAdd::class, 'index'])->name('app-ecommerce-product-add');
//   Route::post('/product/add', [EcommerceProductAdd::class, 'store'])->name('app-ecommerce-product-store');
//   Route::get('/product/list', [EcommerceProductList::class, 'index'])->name('app-ecommerce-product-list');
//   Route::get('/product/edit/{id}', [EcommerceProductList::class, 'edit'])->name('app-ecommerce-product-edit');
//   Route::post('/product/edit/{id}', [EcommerceProductList::class, 'update'])->name('app-ecommerce-product-update');
//   Route::post('/product/edit/{id}', [EcommerceProductList::class, 'update'])->name('app-ecommerce-product-update');

//   Route::post('/update-visibility/{id}', [EcommerceProductList::class, 'updateVisibility'])->name('update.visibility');


//   Route::post('/logout', [EcommerceAuthController::class, 'logout'])->name('admin.logout');
// });


// foreach ($roles as $role => $prefix) {
//   Route::middleware(['auth', "role:{$role}"])->group(function () use ($prefix) {
//       Route::prefix($prefix)->group(function () use ($prefix) {


//           if ($prefix == 'admin'){


//   Route::prefix('/component')->group(function () {

//     Route::get('/productcolor/add', [ProductColorController::class, 'index'])->name('content-product-color-add');
//     Route::post('/productcolor/add', [ProductColorController::class, 'store'])->name('content-product-color-store');
//     Route::get('/productcolor/list', [ProductColorController::class, 'list'])->name('content-product-color-list');
//     Route::get('/productcolor/edit/{id}', [ProductColorController::class, 'edit'])->name('content-product-color-edit');
//     Route::post('/productcolor/update/{id}', [ProductColorController::class, 'update'])->name('content-product-color-update');
//     Route::delete('/productcolor/delete/{id}', [ProductColorController::class, 'destroy'])->name('content-product-color-delete');

//     Route::get('/InternalStatus/list', [InternalStatusController::class, 'index'])->name('content-embroidery-color-list');
//     Route::get('/InternalStatus/add', [InternalStatusController::class, 'create'])->name('InternalStatus.index');
//     Route::post('/InternalStatus/store', [InternalStatusController::class, 'store'])->name('order-internal-status.store');
//     Route::get('/InternalStatus/edit/{id}', [InternalStatusController::class, 'edit'])->name('order-internal-status.edit');
//     Route::put('/InternalStatus/update/{id}', [InternalStatusController::class, 'update'])->name('order-internal-status.update');
//     Route::delete('/InternalStatus/delete/{id}', [InternalStatusController::class, 'destroy'])->name('order-internal-status.destroy');
//     Route::patch('/InternalStatus/restore/{id}', [InternalStatusController::class, 'restore'])->name('order-internal-status.index');

//     Route::get('/discountcoupon/add', [DiscountCouponsController::class, 'index'])->name('content-discount-coupon-add');
//     Route::post('/discountcoupon/add', [DiscountCouponsController::class, 'store'])->name('content-discount-coupon-store');
//     Route::get('/discountcoupon/list', [DiscountCouponsController::class, 'list'])->name('content-discount-coupon-list');
//     Route::get('/discountcoupon/edit/{id}', [DiscountCouponsController::class, 'edit'])->name('content-discount-coupon-edit');
//     Route::post('/discountcoupon/update/{id}', [DiscountCouponsController::class, 'update'])->name('content-discount-coupon-update');
//     Route::delete('/discountcoupon/delete/{id}', [DiscountCouponsController::class, 'destroy'])->name('content-discount-coupon-delete');
//     Route::patch('/update-visibility/{id}', [DiscountCouponsController::class, 'updateVisibility'])->name('update.visibilitycoupon');
//     Route::get('/get-items', [DiscountCouponsController::class, 'getItems'])->name('get-items');

//     Route::get('/TVQ_TaxPrice/list', [TVQTaxPricingController::class, 'index'])->name('TVQtax_price.index');
//     Route::get('/TVQ_TaxPrice/create', [TVQTaxPricingController::class, 'create'])->name('TVQtax_price.create');
//     Route::post('/TVQ_TaxPrice/store', [TVQTaxPricingController::class, 'store'])->name('TVQtax_price.store');
//     Route::get('/TVQ_TaxPrice/{id}/edit', [TVQTaxPricingController::class, 'edit'])->name('TVQtax_price.edit');
//     Route::put('/TVQ_TaxPrice/{id}/update', [TVQTaxPricingController::class, 'update'])->name('TVQtax_price.update');
//     Route::delete('/TVQ_TaxPrice/{id}/delete', [TVQTaxPricingController::class, 'destroy'])->name('TVQtax_price.destroy');

//     Route::get('/TPS_TaxPrice/list', [TPSTaxPricingController::class, 'index'])->name('TPStax_price.index');
//     Route::get('/TPS_TaxPrice/create', [TPSTaxPricingController::class, 'create'])->name('TPStax_price.create');
//     Route::post('/TPS_TaxPrice/store', [TPSTaxPricingController::class, 'store'])->name('TPStax_price.store');
//     Route::get('/TPS_TaxPrice/{id}/edit', [TPSTaxPricingController::class, 'edit'])->name('TPStax_price.edit');
//     Route::put('/TPS_TaxPrice/{id}/update', [TPSTaxPricingController::class, 'update'])->name('TPStax_price.update');
//     Route::delete('/TPS_TaxPrice/{id}/delete', [TPSTaxPricingController::class, 'destroy'])->name('TPStax_price.destroy');
//   });;


//   Route::get('/dashboard', [EcommerceDashboard::class, 'index'])->name('app-ecommerce-dashboard');

//   Route::get('/delivery/add', [EcommerceDeliveryAdd::class, 'index'])->name('app-ecommerce-delivery-add');
//   Route::post('/delivery/add', [EcommerceDeliveryAdd::class, 'store'])->name('app-ecommerce-delivery-store');
//   Route::get('/delivery/list', [EcommerceDeliveryList::class, 'index'])->name('app-ecommerce-delivery-list');

//   Route::get('/printing/add', [EcommercePrintingAdd::class, 'index'])->name('app-ecommerce-printing-add');
//   Route::post('/printing/add', [EcommercePrintingAdd::class, 'store'])->name('app-ecommerce-printing-store');
//   Route::get('/printing/list', [EcommercePrintingList::class, 'index'])->name('app-ecommerce-printing-list');

//   Route::get('/order/list', [EcommerceOrderList::class, 'index'])->name('app-ecommerce-order-list');
//   Route::get('/order/detail/{orderId}', [EcommerceOrderDetails::class, 'index'])->name('app-ecommerce-order-detail');
//   Route::post('/order/upload-file/{id}', [EcommerceOrderDetails::class, 'orderfileupload'])->name('order.file.upload');
//   Route::post('/order/{orderId}/update-status', [EcommerceOrderDetails::class, 'updateOrderStatus'])->name('order-status.update');

//   Route::post('/admin/orders/{id}/status', [EcommerceOrderList::class, 'updateStatus'])->name('admin.orders.updateStatus');

//   Route::get('/customer/all', [EcommerceCustomerAll::class, 'index'])->name('app-ecommerce-customer-all');
//   Route::get('/customer/{id}', [EcommerceCustomerDetailsOverview::class, 'index'])->name('app-ecommerce-customer-detail');
//   Route::post('/update-status/{id}', [EcommerceCustomerAll::class, 'updateStatus'])->name('update.status');

//   Route::get('/product/add', [EcommerceProductAdd::class, 'index'])->name('app-ecommerce-product-add');
//   Route::post('/product/add', [EcommerceProductAdd::class, 'store'])->name('app-ecommerce-product-store');
//   Route::get('/product/list', [EcommerceProductList::class, 'index'])->name('app-ecommerce-product-list');
//   Route::get('/product/edit/{id}', [EcommerceProductList::class, 'edit'])->name('app-ecommerce-product-edit');
//   Route::post('/product/edit/{id}', [EcommerceProductList::class, 'update'])->name('app-ecommerce-product-update');
//   Route::post('/product/edit/{id}', [EcommerceProductList::class, 'update'])->name('app-ecommerce-product-update');

//   Route::post('/update-visibility/{id}', [EcommerceProductList::class, 'updateVisibility'])->name('update.visibility');


//   Route::post('/logout', [EcommerceAuthController::class, 'logout'])->name('admin.logout');
// }
// });
// });
// }