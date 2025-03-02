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
@section('content')
    <form method="POST" action="{{ route($prefix . '.app-ecommerce-product-update', $product->id) }}"
        enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Product Name</label>
                            <input type="text" name="title" class="form-control" placeholder="Product title"
                                value="{{ $product->title }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" class="form-control" placeholder="Product slug"
                                value="{{ $product->slug }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="5" required>{{ $product->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pom Pom Option</label>
                            <br>
                            <label class="switch switch-primary switch-sm me-4 pe-2">
                                <input type="checkbox" class="switch-input" id="is_pompom_switch"
                                    {{ $product->is_pompom == '1' ? 'checked' : '' }}>
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                </span>
                            </label>
                            <input type="hidden" name="is_pompom" id="is_pompom" value="{{ $product->is_pompom }}">
                            <!-- Hidden input to store is_pompom value -->
                        </div>

                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-header">Colors</div>
                    <div class="card-body" id="color-section">
                        @if (isset($product->productColors) && count($product->productColors) > 0)
                            @foreach ($product->productColors as $index => $selectedColor)
                                <div class="demo-inline-spacing mt-4">
                                    <div class="list-group">
                                        <div
                                            class="list-group-item list-group-item-action waves-effect d-flex justify-content-between">
                                            <span>{{ $selectedColor->componentColor->color_name }}</span>
                                            @if ($selectedColor->image)
                                                <div class="mb-2">
                                                    <img src="{{ asset('storage/' . $selectedColor->image) }}"
                                                        alt="Color Image" width="30">
                                                </div>
                                            @else
                                                <span>No image for this color.</span>
                                            @endif
                                            <a href="{{ route($prefix . '.delete.product-color', $selectedColor->id) }}"
                                                class="btn btn-danger btn-sm delete_confirm">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="color-item">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label class="form-label">Color</label>
                                        <select name="color[]" class="form-control color-select" required>
                                            @foreach ($colorData as $color)
                                                <option value="{{ $color->id }}">{{ $color->color_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label class="form-label">Images</label>
                                        <input type="file" name="images[0][]" class="form-control" multiple>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <button type="button" class="btn btn-primary" id="add-color">Add another color</button>
                </div>

                <div class="card mb-4">
                    <div class="card-header">Pricing</div>
                    <div class="card-body" id="pricing-section">
                        @foreach ($product->productPricing as $index => $pricing)
                            <div class="pricing-item">
                                <div class="row mb-3">
                                    <div class="col-3">
                                        <label class="form-label">Quantity</label>
                                        <input type="number" name="quantity[]" class="form-control"
                                            value="{{ $pricing->quantity }}" required>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Normal Price</label>
                                        <input type="text" name="pricing[]" class="form-control"
                                            value="{{ $pricing->pricing }}" required>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Reseller Price</label>
                                        <input type="text" name="reseller_pricing[]" class="form-control"
                                            value="{{ $pricing->reseller_pricing }}" required>
                                    </div>
                                    <div class="col-3">
                                        <label class="form-label">Remove Price Item</label>
                                        <button type="button" class="btn btn-danger btn-sm remove-pricing">Remove</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-primary" id="add-pricing">Add another pricing</button>
                </div>

            </div>

            <div class="col-12 col-lg-4">
                <div class="card mb-4">
                    <div class="card-header">Base Images</div>
                    <div class="card-body" id="base-image-section">
                        @if ($selectedColor->image)
                            @foreach ($product->productBaseImages as $baseImage)
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $baseImage->base_image) }}" alt="Color Image"
                                            width="30">
                                    </div>
                                    <a href="{{ route($prefix . '.delete.product-base-image', $baseImage->id) }}"
                                        class="btn btn-danger btn-sm delete_confirm">Remove</a>
                                </div>
                            @endforeach
                        @else
                            <span>No base image for this product.</span>
                            <div class="mb-3">
                                <label class="form-label">Images</label>
                                <input type="file" accept="image/*" name="base_images[]" class="form-control"
                                    multiple>
                            </div>
                        @endif
                    </div>
                    <button type="button" class="btn btn-primary" id="add-base-image">Add another image</button>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success">Save Product</button>
    </form>

    <script>
        document.getElementById('add-color').addEventListener('click', () => {
            const colorSection = document.getElementById('color-section');

            // Create a fresh color input section
            const newColorItem = document.createElement('div');
            newColorItem.classList.add('color-item');
            const newIndex = colorSection.children.length; // Ensure a unique index

            newColorItem.innerHTML = `
                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Color</label>
                        <select name="color[${newIndex}]" class="form-control color-select" required>
                            @foreach ($colorData as $color)
                                <option value="{{ $color->id }}">{{ $color->color_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-6">
                        <label class="form-label">Images</label>
                        <input type="file" name="images[${newIndex}][]" class="form-control" multiple>
                    </div>
                </div>
            `;

            colorSection.appendChild(newColorItem);

            // Reinitialize Select2 for the new dropdown
            $(newColorItem).find('.color-select').select2({
                placeholder: "Select a color",
                allowClear: true,
                width: '100%'
            });
        });

        // document.getElementById('add-pricing').addEventListener('click', () => {
        //     const pricingSection = document.getElementById('pricing-section');

        //     // Create a fresh pricing input section
        //     const newPricingItem = document.createElement('div');
        //     newPricingItem.classList.add('pricing-item');

        //     const newIndex = pricingSection.children.length; // Ensure unique index

        //     newPricingItem.innerHTML = `
    //         <div class="row mb-3">
    //             <div class="col-4">
    //                 <label class="form-label">Quantity</label>
    //                 <input type="number" name="quantity[${newIndex}]" class="form-control" required>
    //             </div>
    //             <div class="col-4">
    //                 <label class="form-label">Normal Price</label>
    //                 <input type="text" name="pricing[${newIndex}]" class="form-control" required>
    //             </div>
    //             <div class="col-4">
    //                 <label class="form-label">Reseller Price</label>
    //                 <input type="text" name="reseller_pricing[${newIndex}]" class="form-control" required>
    //             </div>
    //         </div>
    //     `;

        //     pricingSection.appendChild(newPricingItem);
        // });

        document.getElementById('add-pricing').addEventListener('click', () => {
            const pricingSection = document.getElementById('pricing-section');

            // Create a fresh pricing input section
            const newPricingItem = document.createElement('div');
            newPricingItem.classList.add('pricing-item');

            newPricingItem.innerHTML = `
            <div class="row mb-3">
                <div class="col-3">
                    <label class="form-label">Quantity</label>
                    <input type="number" name="quantity[]" class="form-control" required>
                </div>
                <div class="col-3">
                    <label class="form-label">Normal Price</label>
                    <input type="text" name="pricing[]" class="form-control" required>
                </div>
                <div class="col-3">
                    <label class="form-label">Reseller Price</label>
                    <input type="text" name="reseller_pricing[]" class="form-control" required>
                </div>
                <div class="col-3">
                    <label class="form-label">Remove Price Item</label>
                    <button type="button" class="btn btn-danger btn-sm remove-pricing">Remove</button>
                </div>
            </div> `;

            pricingSection.appendChild(newPricingItem);
        });

        // Event delegation for dynamically added remove buttons
        document.getElementById('pricing-section').addEventListener('click', (e) => {
            if (e.target.classList.contains('remove-pricing')) {
                e.target.closest('.pricing-item').remove();
            }
        });

        document.getElementById('add-base-image').addEventListener('click', () => {
            const baseImageSection = document.getElementById('base-image-section');

            // Create a new image input element
            const newImageItem = document.createElement('div');
            newImageItem.innerHTML = `
                <div class="mb-3">
                    <label class="form-label">Images</label>
                    <input type="file" accept="image/*" name="base_images[]" class="form-control" multiple>
                </div>
            `;

            // Append the new image input to the section
            baseImageSection.appendChild(newImageItem);
        });


        document.getElementById('is_pompom_switch').addEventListener('change', function() {
            const isPompomInput = document.getElementById('is_pompom');
            // If the switch is on, set value to 1, otherwise set it to 0
            isPompomInput.value = this.checked ? 1 : 0;
        });
    </script>
@endsection
