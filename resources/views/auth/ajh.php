@extends('layouts.app')

@section('content')
<div style="background-color:#212529; min-height:100vh;">

    <h3 style="text-align:center;">Login</h3>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-3">
                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="card bg-dark text-white mt-4">
                    <div class="card-body border border-light rounded">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control bg-dark text-white @error('email') is-invalid @enderror" required autofocus>
                                @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control bg-dark text-white @error('password') is-invalid @enderror" required>
                                @error('password')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-outline-success text-white">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
