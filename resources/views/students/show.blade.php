@extends('layouts.app')

@section('content')
<div style="background-color:#212529; min-height:100vh;">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-3">
        <h1 class="text-white">Student Details</h2>
                <div class="card bg-dark border border-light text-white mt-4">
                    <div class="card-body border-success rounded">
                        <h5 class="card-title"><strong>Name: </strong>{{$student->name}}</h5>
                        <p class="card-text"><strong>Email: </strong>{{$student->email}}</p>
                        <p class="card-text"><strong>Phone: </strong>{{$student->phone}}</p>
                        <a href="{{route('students.index')}}" class="btn btn-secondary">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    
</div>
@endsection
