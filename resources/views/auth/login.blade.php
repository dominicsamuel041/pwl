@extends('layouts.guest')

@push('styles')
<style>
    body.login {
        background: #0B0C10;
        color: #E0E0E0;
    }

    .jmk-card {
        background: #121212;
        border: 1px solid rgba(102, 252, 241, 0.2);
        box-shadow: 0 10px 40px 0 rgba(102, 252, 241, 0.1);
        border-radius: 1.5rem;
        overflow: hidden;
        position: relative;
    }

    .jmk-header {
        background: linear-gradient(135deg, #1A1C23 0%, #0B0C10 100%);
        color: #E0E0E0;
        padding: 3rem 2rem 2.5rem;
        border-bottom: none;
        position: relative;
        text-align: center;
    }

    .jmk-header::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: -5%;
        width: 110%;
        height: 30px;
        background: #121212;
        transform: skewY(-3deg);
        z-index: 1;
    }

    .jmk-logo-text {
        font-weight: 900;
        font-size: 2.5rem;
        letter-spacing: 3px;
        margin: 0;
        position: relative;
        z-index: 2;
        color: #66FCF1;
        text-shadow: 0px 0px 10px rgba(102, 252, 241, 0.5);
        font-family: 'Public Sans', sans-serif;
    }

    .jmk-subtitle {
        font-size: 0.95rem;
        opacity: 0.9;
        position: relative;
        z-index: 2;
        font-weight: 500;
        letter-spacing: 1px;
        color: #E0E0E0;
    }

    .jmk-btn-primary {
        background: #66FCF1;
        border: none;
        color: #0B0C10;
        font-weight: 700;
        font-size: 1.1rem;
        border-radius: 50px;
        padding: 12px 30px;
        box-shadow: 0 4px 15px rgba(102, 252, 241, 0.4);
        transition: all 0.3s ease;
        letter-spacing: 1px;
    }

    .jmk-btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(204, 255, 0, 0.6);
        color: #0B0C10;
        background: #CCFF00;
    }

    .input-icon-addon i {
        color: #FF007F;
    }

    .form-control {
        border-radius: 10px;
        padding-left: 15px;
        border: 1px solid #333;
        background-color: #0B0C10 !important;
        color: #E0E0E0 !important;
    }

    .form-control::placeholder {
        color: #666 !important;
    }

    .form-control:focus {
        border-color: #66FCF1;
        box-shadow: 0 0 0 0.25rem rgba(102, 252, 241, 0.25);
        background-color: #121212 !important;
    }

    .form-floating-label .form-control.filled, .form-floating-label .form-control:focus {
        border-color: #66FCF1;
    }

    .jmk-link {
        color: #FF007F;
        font-weight: 700;
        transition: color 0.3s;
        text-decoration: none;
    }

    .jmk-link:hover {
        color: #66FCF1;
        text-decoration: underline;
    }

    .show-password i {
        transition: color 0.3s;
    }
    
    .show-password:hover i {
        color: #66FCF1;
    }
    
    .card-body {
        position: relative;
        z-index: 2;
    }

    /* Dark mode text overrides */
    .text-dark {
        color: #E0E0E0 !important;
    }
    
    .text-muted {
        color: #A0A0A0 !important;
    }
</style>
@endpush

@section('content')
<div class="container-login w-100">
    <div class="row justify-content-center w-100 m-0">
        <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 p-0">
            <div class="jmk-card my-5">
                <div class="jmk-header">
                    <h2 class="jmk-logo-text mb-2">Festoria</h2>
                    <p class="jmk-subtitle">Start Your Euphoria Here!</p>
                </div>
                <div class="card-body p-4 p-md-5 pt-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-4 px-0">
                            <label for="email" class="form-label fw-bold text-dark">Email Address</label>
                            <div class="input-icon">
                                <span class="input-icon-addon">
                                    <i class="fa fa-envelope"></i>
                                </span>
                                <input type="email" name="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus placeholder="Enter your email">
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block fw-bold">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-5 px-0">
                            <label for="password" class="form-label fw-bold text-dark d-flex justify-content-between align-items-center">
                                Password
                                <a href="#" class="jmk-link small">Forgot Password?</a>
                            </label>
                            <div class="input-icon position-relative">
                                <span class="input-icon-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required placeholder="Enter your password">
                                <span class="show-password" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer; color: #a1aab2; z-index: 10;">
                                    <i class="icon-eye"></i>
                                </span>
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block fw-bold">
                                    <i class="fas fa-exclamation-circle"></i> {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn jmk-btn-primary btn-lg">
                                <i class="fas fa-heart me-2"></i> Log In
                            </button>
                        </div>
                        
                        <div class="text-center mt-3">
                            <span class="text-muted fw-bold">belum memiliki akun? <a href="{{ route('register') }}" class="jmk-link">Daftar Sekarang!</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
