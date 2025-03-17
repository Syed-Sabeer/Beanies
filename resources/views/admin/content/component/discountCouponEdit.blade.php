{{-- @extends('admin.layouts.layoutMaster')

@section('title', 'Edit Coupon')
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />    
@endsection

@section('vendor-script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/modal-add-new-address.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#couponFor').on('change', function() {
                let selectedType = $(this).val();
                let itemSelect = $('#itemSelect');
                itemSelect.html('<option value="0">Select All</option>');

                if (selectedType == "1" || selectedType == "3") {
                    $.ajax({
                        url: "{{ route($prefix .'.get-items') }}",
                        type: "GET",
                        data: { type: selectedType },
                        dataType: "json",
                        success: function(response) {
                            itemSelect.empty();
                            itemSelect.append('<option value="0">Select All</option>');
                            response.forEach(item => {
                                itemSelect.append(`<option value="${item.id}" ${item.id == {{ $discountCoupon->item_id }} ? 'selected' : ''}>${item.title}</option>`);
                            });
                        },
                        error: function(xhr) {
                            console.error("AJAX Error:", xhr.responseText);
                        }
                    });
                }
            });

            // Populate items on page load
            $('#couponFor').trigger('change');
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#is_expiry_switch').change(function () {
                if ($(this).is(':checked')) {
                    $('#expiryOptions').show();
                    $('#is_expiry').val(1);
                } else {
                    $('#expiryOptions').hide();
                    $('#is_expiry').val(0);
                }
            });
        });
    </script>
    
@endsection

@section('content')
<form method="POST" action="{{ route($prefix .'.content-discount-coupon-update', $discountCoupon->id) }}">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Coupon Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $discountCoupon->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Coupon Code</label>
                        <input type="text" name="code" class="form-control" value="{{ $discountCoupon->code }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Coupon Country</label>
                        <select name="coupon_country" class="select2 form-select form-select-lg">
                            <option value="0" {{ $discountCoupon->coupon_country == 0 ? 'selected' : '' }}>All</option>
                            <option value="1" {{ $discountCoupon->coupon_country == 1 ? 'selected' : '' }}>CANADA</option>
                            <option value="2" {{ $discountCoupon->coupon_country == 2 ? 'selected' : '' }}>USA</option>  
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Coupon User</label>
                        <select name="coupon_user" class="select2 form-select form-select-lg">
                            <option value="0" {{ $discountCoupon->coupon_user == 0 ? 'selected' : '' }}>Both</option>
                            <option value="1" {{ $discountCoupon->coupon_user == 1 ? 'selected' : '' }}>Reseller</option>
                            <option value="2" {{ $discountCoupon->coupon_user == 2 ? 'selected' : '' }}>Regular Customer</option>  
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Coupon For</label>
                        <select name="discount_type" id="couponFor" class="select2 form-select form-select-lg">
                            <option value="1" {{ $discountCoupon->discount_type == 1 ? 'selected' : '' }}>Products</option>
                            <option value="3" {{ $discountCoupon->discount_type == 3 ? 'selected' : '' }}>Printing</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Item</label>
                        <select name="item_id" id="itemSelect" class="select2 form-select form-select-lg">
                            <option value="0" {{ $discountCoupon->is_all ? 'selected' : '' }}>Select All</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Discount Percentage</label>
                        <input type="text" name="percentage" class="form-control" value="{{ $discountCoupon->percentage }}" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Has Expiry?</label><br>
                        <input type="checkbox" id="is_expiry_switch" {{ $discountCoupon->is_expiry ? 'checked' : '' }}>
                        <input type="hidden" name="is_expiry" id="is_expiry" value="{{ $discountCoupon->is_expiry }}">
                    </div>
                    
                    <div id="expiryOptions" style="{{ $discountCoupon->is_expiry ? '' : 'display: none;' }}">
                        <div class="mb-3">
                            <label class="form-label">Limit Count</label>
                            <input type="number" name="count" class="form-control" value="{{ $discountCoupon->count ?? '' }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Duration From</label>
                            <input type="date" name="duration_from" class="form-control" value="{{ $discountCoupon->duration_from ?? '' }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Duration To</label>
                            <input type="date" name="duration_to" class="form-control" value="{{ $discountCoupon->duration_to ?? '' }}">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Update Coupon</button>
</form>
@endsection --}}


@extends('admin.layouts.layoutMaster')

@section('title', 'Edit Coupon')
@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endsection

@section('vendor-script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/modal-add-new-address.js') }}"></script>
    <script>
        $(document).ready(function() {
            let isExpiry = {{ $discountCoupon->is_expiry ?? 0 }}; // Get the value from the database

            if (isExpiry == 1) {
                $('#expiryOptions').show();
                $('#is_expiry_switch').prop('checked', true);
            } else {
                $('#expiryOptions').hide();
                $('#is_expiry_switch').prop('checked', false);
            }

            $('#is_expiry_switch').change(function() {
                if ($(this).is(':checked')) {
                    $('#expiryOptions').show();
                    $('#is_expiry').val(1);
                } else {
                    $('#expiryOptions').hide();
                    $('#is_expiry').val(0);
                }
            });

            function fetchItems() {
                let selectedType = $('#couponFor').val();
                let itemSelect = $('#itemSelect');

                itemSelect.html('<option value="0">Select All</option>'); // Reset dropdown

                if (selectedType == "1" || selectedType == "3") {
                    console.log("Fetching items for type:", selectedType);

                    $.ajax({
                        url: "{{ route($prefix . '.get-items') }}",
                        type: "GET",
                        data: {
                            type: selectedType
                        },
                        dataType: "json",
                        beforeSend: function() {
                            console.log("AJAX request sent...");
                        },
                        success: function(response) {
                            console.log("Response received:", response);

                            if (response.length > 0) {
                                response.forEach(item => {
                                    itemSelect.append(
                                        `<option value="${item.id}">${item.title}</option>`);
                                });
                            } else {
                                itemSelect.append('<option value="">No items found</option>');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("AJAX Error:", xhr.responseText);
                        }
                    });
                }
            }

            // Fetch items when the page loads
            fetchItems();

            // Fetch items when the dropdown value changes
            $('#couponFor').on('change', function() {
                fetchItems();
            });

            // let selectedItem = "{{ $discountCoupon->discountable_id ?? '' }}";
            // if (selectedItem) {
            //     $('#itemSelect').val(selectedItem).trigger('change'); // Pre-select item
            // }
        });
    </script>

    {{-- <script>
        $('#couponFor').on('change', function() {
            let selectedType = $(this).val();
            let itemSelect = $('#itemSelect');
            itemSelect.html('<option value="0">Select All</option>'); // Reset dropdown

            if (selectedType == "1" || selectedType == "3") {
                $.ajax({
                    url: "{{ route($prefix . '.get-items') }}",
                    type: "GET",
                    data: {
                        type: selectedType
                    },
                    dataType: "json",
                    success: function(response) {
                        console.log("Response Data:", response);
                        if (response.length > 0) {
                            response.forEach(item => {
                                itemSelect.append(
                                    `<option value="${item.id}">${item.title}</option>`);
                            });
                        } else {
                            itemSelect.append('<option value="">No items found</option>');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("AJAX Error:", xhr.responseText);
                    }
                });
            }
        });
    </script> --}}
@endsection
{{-- @dd($discountCoupon) --}}
@section('content')
    <form method="POST" action="{{ route($prefix . '.content-discount-coupon-update', $discountCoupon->id) }}">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Coupon Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter title" required
                                value="{{ $discountCoupon->title }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Coupon Code</label>
                            <input type="text" name="code" class="form-control" placeholder="Enter code" required
                                value="{{ $discountCoupon->code }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Coupon Country</label>
                            <select name="coupon_country" id="couponCountry" class="select2 form-select form-select-lg">
                                <option value="0" {{ $discountCoupon->coupon_country == 0 ? 'selected' : '' }}>All
                                </option>
                                <option value="1" {{ $discountCoupon->coupon_country == 1 ? 'selected' : '' }}>CANADA
                                </option>
                                <option value="2" {{ $discountCoupon->coupon_country == 2 ? 'selected' : '' }}>USA
                                </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Coupon User</label>
                            <select name="coupon_user" id="couponUser" class="select2 form-select form-select-lg">
                                <option value="0" {{ $discountCoupon->coupon_user == 0 ? 'selected' : '' }}>Both
                                </option>
                                <option value="1" {{ $discountCoupon->coupon_user == 1 ? 'selected' : '' }}>Reseller
                                </option>
                                <option value="2" {{ $discountCoupon->coupon_user == 2 ? 'selected' : '' }}>Regular
                                    Customer</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Coupon For</label>
                            <select name="discount_type" id="couponFor" class="select2 form-select form-select-lg">
                                <option value="">Select Status</option>
                                <option value="1" {{ $discountCoupon->discount_type == 1 ? 'selected' : '' }}>Products
                                </option>
                                <option value="3" {{ $discountCoupon->discount_type == 3 ? 'selected' : '' }}>Printing
                                </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select Item</label>
                            <select name="item_id" id="itemSelect" class="select2 form-select form-select-lg" required>
                                <option value="0">Select All</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Discount Percentage</label>
                            <input type="text" name="percentage" class="form-control" placeholder="Enter Number" required
                                value="{{ $discountCoupon->percentage }}">
                        </div>

                        <!-- Expiry Option -->
                        <div class="mb-3">
                            <label class="form-label">Expiry</label>
                            <br>
                            <label class="switch switch-primary switch-sm me-4 pe-2">
                                <input type="checkbox" class="switch-input" id="is_expiry_switch"
                                    {{ $discountCoupon->is_expiry ? 'checked' : '' }}>
                                <span class="switch-toggle-slider">
                                    <span class="switch-on"></span>
                                    <span class="switch-off"></span>
                                </span>
                            </label>
                            <input type="hidden" name="is_expiry" id="is_expiry" value="{{ $discountCoupon->is_expiry }}">
                        </div>

                        <!-- Expiry Options (Hidden initially) -->
                        <div id="expiryOptions" style="display: {{ $discountCoupon->is_expiry ? 'block' : 'none' }}">
                            <!-- Count (for time limit) -->
                            <div id="countField" class="mb-3">
                                <label class="form-label">Count</label>
                                <input type="number" name="count" class="form-control" placeholder="Enter count"
                                    min="1" value="{{ $discountCoupon->count }}">
                            </div>

                            <!-- Duration (from & to) -->
                            <div id="durationField" class="d-flex gap-3">
                                <div class="w-50">
                                    <label class="form-label">Duration From</label>
                                    <input type="datetime-local" name="duration_from" class="form-control"
                                        value="{{ \Carbon\Carbon::parse($discountCoupon->duration_from)->format('Y-m-d\TH:i') }}">
                                </div>
                                <div class="w-50">
                                    <label class="form-label">Duration To</label>
                                    <input type="datetime-local" name="duration_to" class="form-control"
                                        value="{{ \Carbon\Carbon::parse($discountCoupon->duration_to)->format('Y-m-d\TH:i') }}">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save Coupon</button>
    </form>
@endsection
