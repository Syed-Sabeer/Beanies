@extends('admin.layouts/layoutMaster')

@section('title', 'eCommerce Product List - Apps')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
@endsection

@section('page-script')

@endsection

@section('content')
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">eCommerce /</span> Product List
    </h4>

    <!-- Product List Widget -->

    <div class="card mb-4">
        <div class="card-widget-separator-wrapper">
            <div class="card-body card-widget-separator">
                <div class="row gy-4 gy-sm-1">
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                            <div>
                                <h6 class="mb-2">In-store Sales</h6>
                                <h4 class="mb-2">$5,345.43</h4>
                                <p class="mb-0"><span class="text-muted me-2">5k orders</span><span
                                        class="badge bg-label-success">+5.7%</span></p>
                            </div>
                            <span class="avatar me-sm-4">
                                <span class="avatar-initial bg-label-secondary rounded"><i
                                        class="ti-md ti ti-smart-home text-body"></i></span>
                            </span>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none me-4">
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                            <div>
                                <h6 class="mb-2">Website Sales</h6>
                                <h4 class="mb-2">$674,347.12</h4>
                                <p class="mb-0"><span class="text-muted me-2">21k orders</span><span
                                        class="badge bg-label-success">+12.4%</span></p>
                            </div>
                            <span class="avatar p-2 me-lg-4">
                                <span class="avatar-initial bg-label-secondary rounded"><i
                                        class="ti-md ti ti-device-laptop text-body"></i></span>
                            </span>
                        </div>
                        <hr class="d-none d-sm-block d-lg-none">
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                            <div>
                                <h6 class="mb-2">Discount</h6>
                                <h4 class="mb-2">$14,235.12</h4>
                                <p class="mb-0 text-muted">6k orders</p>
                            </div>
                            <span class="avatar p-2 me-sm-4">
                                <span class="avatar-initial bg-label-secondary rounded"><i
                                        class="ti-md ti ti-gift text-body"></i></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <h6 class="mb-2">Affiliate</h6>
                                <h4 class="mb-2">$8,345.23</h4>
                                <p class="mb-0"><span class="text-muted me-2">150 orders</span><span
                                        class="badge bg-label-danger">-3.5%</span></p>
                            </div>
                            <span class="avatar p-2">
                                <span class="avatar-initial bg-label-secondary rounded"><i
                                        class="ti-md ti ti-wallet text-body"></i></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Product List Table -->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Filter</h5>
            <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                <div class="col-md-4 product_status"></div>
                <div class="col-md-4 product_category"></div>
                <div class="col-md-4 product_stock"></div>
            </div>
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-products table">
                <thead class="border-top">
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price Range</th>
                        <th>Visibility</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            @php
                            // Check if base_images is an array already
                            $baseImages = is_array($product->base_images) ? $product->base_images : json_decode($product->base_images, true);
                        @endphp

                        @if (is_array($baseImages) && !empty($baseImages))
                            <td><img src="{{ asset('storage/' . $baseImages[0]) }}" alt="Product Image" width="50"></td>
                        @else
                            <td>No Image Available</td>
                        @endif

                        <td>{{ $product->title }}</td>
                        <td>
                          @php
                              // Ensure min_price and max_price are numeric and greater than zero
                              $minPrice = isset($product->min_price) && is_numeric($product->min_price) && $product->min_price > 0
                                          ? $product->min_price
                                          : 0;
                              $maxPrice = isset($product->max_price) && is_numeric($product->max_price) && $product->max_price > 0
                                          ? $product->max_price
                                          : 0;
                          @endphp

                          @if($minPrice > 0 && $maxPrice > 0)
                              ${{ number_format($minPrice, 2) }} ~ ${{ number_format($maxPrice, 2) }}
                          @else
                              Not Available
                          @endif
                      </td>





                            <td>
                                <div class="w-25 d-flex justify-content-end">
                                    <label class="switch switch-primary switch-sm me-4 pe-2">
                                        <input type="checkbox" class="switch-input" data-id="{{ $product->id }}"
                                            {{ $product->visibility == 1 ? 'checked' : '' }}>
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                    </label>
                                </div>
                            </td>
                            <td>
                                <a href="{{ route('app-ecommerce-product-edit', $product->id) }}" class="me-2"><i class="fa-solid fa-pen-to-square"></i></a>



                                <a href="javascript:void(0);" class="me-2 delete-product" data-id="{{ $product->id }}">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#onboardHorizontalImageModal"><i class="fa-solid fa-eye"></i></a>
                            </td>
                            
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-product');
    
            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const productId = this.dataset.id;
    
                    if (confirm('Are you sure you want to delete this product?')) {
                        fetch(`/admin/product/${productId}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    alert('Product deleted successfully!');
                                    location.reload();
                                } else {
                                    alert('Error deleting product: ' + (data.message || 'Unknown error.'));
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('Error deleting product!');
                            });
                    }
                });
            });
        });
    </script>
    

       <!-- Form with Image horizontal Modal -->
       <div class="modal-onboarding modal fade animate__animated" id="onboardHorizontalImageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
          <div class="modal-content text-center">
            <div class="modal-header border-0">

              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
              </button>
            </div>

            <div class="modal-body onboarding-horizontal p-0">

              <div class="onboarding-content mb-0">
                <h4 class="onboarding-title text-body">Product Basic Images</h4>
                <div class="onboarding-info">
                  <img src="{{ asset('storage/app/public/uploads/0x5Pm8HHpCgQY8xHs2cYlpKzozSfrkiNitKVX3jv.jpg') }}" alt="">
                </div>

              </div>

              <div class="onboarding-content mb-0">
                <h4 class="onboarding-title text-body">Product Detail</h4>
                <div class="onboarding-info">In this example you can see a form where you can request some additional
                  information from the customer when they land on the app page.</div>

              </div>

            </div>


            <div class="onboarding-content mb-0">
              <h4 class="onboarding-title text-body">Product Detail</h4>
              <div class="onboarding-info">In this example you can see a form where you can request some additional
                information from the customer when they land on the app page.</div>

            </div>

            <div class="modal-footer border-0">
              <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>
      <!--/ Form with Image horizontal Modal -->




    <script>
        // Wait for the document to be ready
        document.addEventListener('DOMContentLoaded', function() {
            // Add event listener for checkbox changes
            document.querySelectorAll('.switch-input').forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    // Get the product ID and the new visibility value (1 for checked, 0 for unchecked)
                    const productId = this.dataset.id;
                    const visibility = this.checked ? 1 : 0;

                    // Send AJAX request to update visibility
                    fetch("{{ route('update.visibility', ':id') }}".replace(':id', productId), {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                            body: JSON.stringify({
                                visibility: visibility
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                console.log('Visibility updated successfully');
                            } else {
                                console.error('Failed to update visibility');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });
            });
        });
    </script>

@endsection
