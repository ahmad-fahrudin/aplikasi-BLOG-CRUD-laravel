@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="row align-items-center g-lg-5 py-5">
    <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Selamat Datang!</h1>
        <p class="col-lg-10 fs-4">ditempat aplikasi Blog, tempat curhat, memasukkan postingan dan masih banyak lagi</p>
    </div>
    <div class="col-md-10 mx-auto col-lg-5">
        <form method="post" action="{{ url('login') }}" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
            @csrf

            @if(session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
            @endif
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
                <label for="password">Password</label>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Log In</button>
            <hr class="my-4">
            <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
        </form>
    </div>
</div>

@endsection