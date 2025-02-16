@extends('layouts.auth', ['title' => 'Login'])

@section('content')
    <div class="d-flex flex-column h-100 p-3">
        <div class="d-flex flex-column flex-grow-1">
            <div class="row h-100">
                <div class="col-xxl-7">
                    <div class="row justify-content-center h-100">
                        <div class="col-lg-6 py-lg-5">
                            <div class="d-flex flex-column h-100 justify-content-center">
                                <div class="auth-logo mb-4">
                                    <a href="{{ route('second', [ 'dashboards' , 'index']) }}" class="logo-dark">
                                        <img src="/images/logo-dark.png" height="24" alt="logo dark">
                                    </a>

                                    <a href="{{ route('second', [ 'dashboards' , 'index']) }}" class="logo-light">
                                        <img src="/images/logo-light.png" height="24" alt="logo light">
                                    </a>
                                </div>

                                <h2 class="fw-bold fs-24">Sign In</h2>

                                <p class="text-muted mt-1 mb-4">Enter your email address and password to access admin
                                    panel.</p>

                                <div class="mb-5">
                                    <form method="POST" action="{{ route('login') }}" class="authentication-form">
                                        @csrf
                                        @if (sizeof($errors) > 0)
                                            @foreach ($errors->all() as $error)
                                                <p class="text-danger mb-3">{{ $error }}</p>
                                            @endforeach
                                        @endif

                                        <div class="mb-3">
                                            <label class="form-label" for="example-email">Email</label>
                                            <input type="email" id="example-email" name="email"
                                                   class="form-control bg-" placeholder="Enter your email"
                                                   value="test@example.com">
                                        </div>
                                        <div class="mb-3">
                                            <a href="{{ route('second', [ 'auth' , 'reset-password']) }}"
                                               class="float-end text-muted text-unline-dashed ms-1">Reset password</a>
                                            <label class="form-label" for="example-password">Password</label>
                                            <input type="password" id="example-password" class="form-control"
                                                   placeholder="Enter your password" name="password" value="password">
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                                <label class="form-check-label" for="checkbox-signin">Remember
                                                    me</label>
                                            </div>
                                        </div>

                                        <div class="mb-1 text-center d-grid">
                                            <button class="btn btn-soft-primary" type="submit">Sign In</button>
                                        </div>
                                    </form>

                                    <p class="mt-3 fw-semibold no-span">OR sign with</p>

                                    <div class="d-grid gap-2">
                                        <a href="javascript:void(0);" class="btn btn-soft-dark"><i
                                                class="bx bxl-google fs-20 me-1"></i> Sign in with Google</a>
                                        <a href="javascript:void(0);" class="btn btn-soft-primary"><i
                                                class="bx bxl-facebook fs-20 me-1"></i> Sign in with Facebook</a>
                                    </div>
                                </div>

                                <p class="text-danger text-center">Don't have an account? <a href="{{ route('second', [ 'auth' , 'register']) }}"
                                                                                             class="text-dark fw-bold ms-1">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-5 d-none d-xxl-flex">
                    <div class="card h-100 mb-0 overflow-hidden">
                        <div class="d-flex flex-column h-100">
                            <img src="/images/small/img-10.jpg" alt="" class="w-100 h-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
