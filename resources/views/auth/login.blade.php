@extends('auth.layout')

@section('content')
    <main class="login-form">
        <!-- loader Start -->
        <div id="loading">
            <div class="loader simple-loader">
                <div class="loader-body loader-center">
                    {{-- <img src="{{asset('hope-ui/assets/images/halma.gif')}}" alt=""> --}}
                </div>
            </div>
        </div>
        <div class="wrapper">
            <section class="login-content">
                <div class="row m-0 align-items-center bg-white vh-100">
                    <div class="col-md-6">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                                    <div class="card-body">
                                        <a href="../../dashboard/index.html"
                                            class="navbar-brand d-flex align-items-center mb-3">
                                            <!--Logo start-->
                                            <!--logo End-->

                                            <!--Logo start-->
                                            <div class="logo-main">
                                                <div class="logo-normal">
                                                    <!-- <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                     <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                                                        transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                                                     <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                                                        transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                                                     <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                                                        transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                                                     <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                                                        transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                                                  </svg> -->
                                                    <img src="{{ asset('hope-ui/assets/images/halma8logo.png') }}"
                                                        width="50px" alt="">
                                                </div>
                                                <div class="logo-mini">
                                                    <!-- <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                     <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                                                        transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                                                     <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                                                        transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                                                     <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                                                        transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                                                     <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                                                        transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                                                  </svg> -->
                                                </div>
                                            </div>
                                            <!--logo End-->




                                            <h4 class="logo-title ms-3">Halma Grafika</h4>
                                        </a>
                                        <h2 class="mb-2 text-center">Sign In</h2>
                                        <p class="text-center">Login to stay connected.</p>
                                        <form action="{{ route('login.post') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="email" class="form-label">Email</label>
                                                        <input type="email" class="form-control" id="email"
                                                            name="email" aria-describedby="email" placeholder=" ">
                                                        @if ($errors->has('email'))
                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="password" class="form-control" id="password"
                                                            name="password" required aria-describedby="password"
                                                            placeholder=" ">
                                                        @if ($errors->has('password'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('password') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 d-flex justify-content-between">
                                                    <div class="form-check mb-3">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheck1">
                                                        <label class="form-check-label" for="customCheck1">Remember
                                                            Me</label>
                                                    </div>
                                                    <a href="recoverpw.html">Forgot Password?</a>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                            <p class="text-center my-3">or sign in with other accounts?</p>
                                            <div class="d-flex justify-content-center">
                                                <ul class="list-group list-group-horizontal list-group-flush">
                                                    <li class="list-group-item border-0 pb-0">
                                                        <a href="#"><img
                                                                src="{{ asset('hope-ui/assets/images/brands/fb.svg') }}"
                                                                alt="fb"></a>
                                                    </li>
                                                    <li class="list-group-item border-0 pb-0">
                                                        <a href="#"><img
                                                                src="{{ asset('hope-ui/assets/images/brands/gm.svg') }}"
                                                                alt="gm"></a>
                                                    </li>
                                                    <li class="list-group-item border-0 pb-0">
                                                        <a href="#"><img
                                                                src="{{ asset('hope-ui/assets/images/brands/im.svg') }}"
                                                                alt="im"></a>
                                                    </li>
                                                    <li class="list-group-item border-0 pb-0">
                                                        <a href="#"><img
                                                                src="{{ asset('hope-ui/assets/images/brands/li.svg') }}"
                                                                alt="li"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="mt-3 text-center">
                                                Don’t have an account? <a href="{{ route('register') }}"
                                                    class="text-underline">Click
                                                    here to Register</a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sign-bg" id="sign-bg">
                            {{-- <img src="{{asset('hope-ui/assets/images/shapes/01.png')}}" width="100px" height="200px" class="animated-scaleX" alt="asa" > --}}
                        </div>
                    </div>
                    <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
                        <img src="{{ asset('hope-ui/assets/images/curved2.jpg') }}"
                            class="img-fluid gradient-main animated-scaleX" alt="images">
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
