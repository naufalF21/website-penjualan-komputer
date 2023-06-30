@extends('layouts.main')
@section('container')
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh">
        @if ($errors->has('email') || session()->has('loginError'))
            <div>
                {{ $errors->first('email') ?? '' }}
                {{ session('loginError') ?? '' }}
            </div>
        @endif
        <div class="card px-5 py-5 custom-card">
            <h3 class="font-weight-bold">Sign up</h3>
            <p style="color: #8392AB">Enter your email and password to sign up</p>
            <form class="my-3" action="/register" method="post">
                @csrf
                {{-- input name --}}
                <div class="input-group mb-3">
                    <input type="text" name="name" id="name" class="form-control custom-input py-4 px-3"
                        placeholder="Name" aria-label="Name" aria-describedby="basic-addon1" value="{{ old('name') }}"
                        required autofocus>
                </div>
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

                <button type="submit" class="btn btn-primary w-100 mt-4 font-weight-bold py-2 custom-btn">Sign up</button>
            </form>
            <p class="text-center" style="color: #8392AB">Already have an account? <a href="/"
                    class="font-weight-bold text-primary">Sign in here</a></p>
        </div>

    </div>
@endsection
