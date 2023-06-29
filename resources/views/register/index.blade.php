@extends('layouts.main')

@section('container')
    <div class="row d-flex justify-content-center">
        <div class="col-md-4">
            <form action="/register" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                <div class="form-floating">
                    <input style="margin-bottom: -1px; border-radius: 0;" type="text" name="name"
                        class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                        placeholder="Name" required value="{{ old('name')  }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input style="margin-bottom: -1px; border-radius: 0;" type="text" name="username"
                        class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username')  }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input style="margin-bottom: -1px; border-radius: 0;" type="email" name="email"
                        class="form-control @error('email') is-invalid @enderror" id="email"
                        placeholder="name@example.com" value="{{ old('email')  }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input style="margin-bottom: -1px; border-radius: 0;" type="password" name="password"
                        class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                        placeholder="Password" value="{{ old('password')  }}">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="text-center d-block mt-3">Have an account? <a href="/login" class="text-decoration-none">Login
                    Now!</a></small>
        </div>
    </div>
@endsection
