@extends('auth.layout')

@section('content')
    <div class="bg-light py-5 px-2">
        <section class="section_1">
            <div class="form1 px-md-4 px-3 py-5">
                <h2 class="text-center heading">Create your Account!</h2>
                <p class="para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique cumque nemo id sed est
                    nam, quis dignissimos animi ea! Architecto!</p>

                <form action="{{ route('register.user') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter your first name">
                    </div>
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
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm PAssword</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                            placeholder="Re-Enter your password">
                    </div>

                    <button type="submit" class="btn btn-primary rounded text-uppercase mt-4 btn_blue">Sign up</button>
                </form>

                <div class="d-flex align-items-center justify-content-center">
                    <a href="{{ route('login') }}" class="mt-5 footer_btn">Login</a>
                </div>

            </div>
        </section>
    </div>
@endsection
