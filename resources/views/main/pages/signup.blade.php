@extends('main.layouts.master')


@section('main-container')
<section class="auth-page-wrapper position-relative bg-light min-vh-100 d-flex align-items-center justify-content-between" >
    <div class="w-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="auth-card mx-lg-3">
                        <div class="card border-0 mb-0">
                            <div class="card-header bg-primary border-0">
                                <div class="row">
                                    <div class="col-lg-4 col-3">
                                      <a href="{{ route('home') }}">  <img src="{{ asset('assetsMain/images/logo-dark.png') }}" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="col-lg-8 col-9">
                                        <h2 class="text-white text-capitalize lh-base fw-lighter">Let's get started with Monkey Beanies</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="text-muted fs-15">Signup Your Monkey Beanies account now</p>
                                <div class="p-2">
                                    <form class="needs-validation" novalidate method="POST" action="{{ route('user.register.post') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="useremail" name="email" value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="country" class="form-label">Country <span class="text-danger">*</span></label>
                                            <select class="form-control" id="country" name="country" required>
                                                <option value="" disabled selected>Select Country</option>
                                                {{-- <option value="USA" {{ old('country') == 'USA' ? 'selected' : '' }}>USA</option> --}}
                                                <option value="CANADA" {{ old('country') == 'CANADA' ? 'selected' : '' }}>Canada</option>
                                            </select>
                                            @error('country')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        

                                        <div class="mb-3">
                                            <label class="form-label">Are You A Reseller? <span class="text-danger">*</span></label>
                                            <div class="d-flex">
                                                <div>
                                                    <input type="radio" id="resellerYes" name="reseller" value="yes" {{ old('reseller') === 'yes' ? 'checked' : '' }} required>
                                                    <label for="resellerYes" class="form-label">Yes</label>
                                                </div>
                                                <div style="margin-left: 5%;">
                                                    <input type="radio" id="resellerNo" name="reseller" value="no" {{ old('reseller') === 'no' ? 'checked' : '' }} required>
                                                    <label for="resellerNo" class="form-label">No</label>
                                                </div>
                                            </div>
                                            @error('reseller')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3" id="neqContainer" style="display: none;">
                                            <label for="neqNumber" class="form-label">NEQ Number</label>
                                            <input type="text" class="form-control" id="neqNumber" name="neq_number" value="{{ old('neq_number') }}">
                                            @error('neq_number')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <input type="password" class="form-control" name="password" required>
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="confirm-password-input">Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                                        </div>
                                    </form>
                                    <script>
                                        document.querySelectorAll('input[name="reseller"]').forEach(radio => {
                                            radio.addEventListener('change', function () {
                                                const neqContainer = document.getElementById('neqContainer');
                                                neqContainer.style.display = this.value === 'yes' ? 'block' : 'none';
                                            });
                                        });
                                    </script>
                                </div>
                                <div class="mt-4 text-center">
                                    <p class="mb-0">Already have an account? <a href="{{ route('user.login') }}" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div>
</section>
@endsection
