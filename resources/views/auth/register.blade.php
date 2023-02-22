@extends('backend.layouts.auth')

@section('content')
<div class="nk-block nk-block-middle nk-auth-body  wide-xs">
    <div class="brand-logo pb-4 text-center">
        <a href="/" class="logo-link">
            <img class="logo-light logo-img logo-img-lg" src="{{ asset('assets/images/logo.png') }}"
                srcset="{{ asset('assets/images/logo2x.png') }} 2x" alt="logo">
            <img class="logo-dark logo-img logo-img-lg" src="{{ asset('assets/images/logo-dark.png') }}"
                srcset="{{ asset('assets/images/logo-dark2x.png') }} 2x" alt="logo-dark">
        </a>
    </div>
    <div class="card">
        <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Sign-Up</h4>
                    <div class="nk-block-des">
                        <p>Sign up using your email.</p>
                    </div>
                </div>
            </div>
            <form action="{{ route('register') }}">
                <div class="form-group">
                    <label class="form-label" for="first_name">First Name</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control form-control-lg" id="first_name" name="first_name" placeholder="Enter your first name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="Last_name">last Name</label>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control form-control-lg" id="last_name" name="last_name" placeholder="Enter your last name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="default-01">Email</label>
                    </div>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control form-control-lg" id="default-01"
                            placeholder="Enter your email address">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="form-control-wrap">
                        <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                        </a>
                        <input type="password" class="form-control form-control-lg" id="password"
                            placeholder="Enter your password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="confirm_password">Confirm Password</label>
                    </div>
                    <div class="form-control-wrap">
                        <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="confirm_password">
                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                        </a>
                        <input type="password" class="form-control form-control-lg" id="confirm_password"
                            placeholder="Re-enter your password">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                </div>
            </form>
            <div class="form-note-s2 text-center pt-4"> Already have an account? <a
                    href="{{ route('login') }}">Sign in instead</a>
            </div>
        </div>
    </div>
</div>
@include('backend.layouts.partials.footer')
@endsection