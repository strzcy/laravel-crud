@extends('layouts.app')

@section('content')
<body style="background-color:#212529;">
    
    <h3 style="text-align:center;">Create Student</h3>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card bg-dark text-white mt-4">
                    <div class="card-body border border-light rounded">
                        <form action="{{ route('students.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control bg-dark text-white @error('name') is-invalid @enderror"  value="{{old('name')}}">
                                @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control bg-dark text-white @error('email') is-invalid @enderror" value="{{old('email')}}">
                                @error('email')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control bg-dark text-white @error('phone') is-invalid @enderror" value="{{old('phone')}}">
                            @error('phone')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <button class="btn btn-outline-success text-white">Save</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
@endsection