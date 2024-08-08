@extends('auth.layout')

@section('content')
    <div class="bg-light py-5 px-2">
        <section class="section_1">
            <div class="form1 px-md-4 px-3 py-5">
                <h2 class="text-center heading">Welcome Back!</h2>
                <p class="para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique cumque nemo id sed est
                    nam, quis dignissimos animi ea! Architecto!</p>

                <form action="{{ route('login.user') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter your email">
                    </div>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter your password">
                    </div>
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <input type="checkbox" class="checkbox" name="remember" id="remember">
                            <label for="remember" class="form-label mb-0">Remember Me</label>
                        </div>


                        <a href="#" class="forgot_btn">Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn btn-primary rounded text-uppercase mt-4 btn_blue">Login</button>
                </form>

                <div class="d-flex align-items-center justify-content-center">
                    <a href="{{ route('register') }}" class="mt-5 footer_btn">Sign up</a>
                </div>

            </div>
        </section>
    </div>
@endsection
