@extends('layouts.main')
@section('container')
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh">
        @if ($errors->has('email') || session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $errors->first('email') ?? '' }}
                {{ session('loginError') ?? '' }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card px-5 py-5 custom-card">
            <h3 class="font-weight-bold">Sign in</h3>
            <p style="color: #8392AB">Enter your email and password to sign in</p>
            <form class="my-3" action="/login" method="post">
                @csrf
                {{-- input email --}}
                <div class="input-group mb-3">
                    <input type="email" name="email" id="email" class="form-control custom-input py-4 px-3"
                        placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="{{ old('email') }}"
                        required autofocus>
                </div>
                {{-- input password --}}
                <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control custom-input py-4 px-3"
                        placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                </div>
                <div class="custom-control custom-switch my-4">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary w-100 font-weight-bold py-2 custom-btn">Sign in</button>
            </form>
            <p class="text-center" style="color: #8392AB">Don't have an account? <a href="/register"
                    class="font-weight-bold text-primary">Sign up</a></p>
        </div>

    </div>
@endsection
