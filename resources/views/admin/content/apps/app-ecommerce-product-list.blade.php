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
                                // Check if the product has base images
                                $baseImages = $product->productBaseImages; // Retrieve the base images using the relationship
                            @endphp

                            @if ($baseImages->isNotEmpty())
                                <td>
                                    <!-- Get the first base image, or use default if none exists -->
                                    <img src="{{ asset('storage/' . ($baseImages->first()->base_image ?? 'ProductImages/default.jpg')) }}"
                                        alt="Product Image" width="50">
                                </td>
                            @else
                                <td>No Image Available</td>
                            @endif

                            <td>{{ $product->title }}</td>
                            <td>
                                @php
                                    // Ensure min_price and max_price are numeric and greater than zero
                                    $minPrice =
                                        isset($product->min_price) &&
                                        is_numeric($product->min_price) &&
                                        $product->min_price > 0
                                            ? $product->min_price
                                            : 0;
                                    $maxPrice =
                                        isset($product->max_price) &&
                                        is_numeric($product->max_price) &&
                                        $product->max_price > 0
                                            ? $product->max_price
                                            : 0;
                                @endphp

                                @if ($minPrice > 0 && $maxPrice > 0)
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
                                <a href="{{ route($prefix . '.app-ecommerce-product-edit', $product->id) }}"
                                    class="me-2"><i class="fa-solid fa-pen-to-square"></i></a>


                                <a href="{{ route($prefix . '.app-ecommerce-product-delete', $product->id) }}"
                                    class="me-2 delete-product delete_confirm" data-id="{{ $product->id }}">
                                    <i class="fa-solid fa-trash text-danger"></i>
                                </a>
                                <a data-bs-toggle="modal" data-bs-target="#onboardHorizontalImageModal"><i
                                        class="fa-solid fa-eye text-success"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>




    <!-- Form with Image horizontal Modal -->
    <div class="modal-onboarding modal fade animate__animated" id="onboardHorizontalImageModal" tabindex="-1"
        aria-hidden="true">
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
                            <img src="{{ asset('storage/app/public/uploads/0x5Pm8HHpCgQY8xHs2cYlpKzozSfrkiNitKVX3jv.jpg') }}"
                                alt="">
                        </div>

                    </div>

                    <div class="onboarding-content mb-0">
                        <h4 class="onboarding-title text-body">Product Detail</h4>
                        <div class="onboarding-info">In this example you can see a form where you can request some
                            additional
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
                    fetch("{{ route($prefix . '.update.visibility', ':id') }}".replace(':id',
                            productId), {
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
