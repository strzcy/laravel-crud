@extends('layouts.app')

@section('content')
<div style="background-color:#212529; min-height:100vh;">
    <div class="container pt-4">
        <h2 class="mb-4 text-white">Student List</h2>
        <a href="{{ route('students.create')}}" class="btn btn-outline-info mb-3">Add Student</a>
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        <table class="table table-bordered table-dark table-striped">
            <thead>
                <tr>
                    <!-- <th>#</th> -->
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)

                
                <tr>
                    <!-- <td>{{$student->id}}</td> -->
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-outline-warning">View</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-outline-info">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger" onclick="return confirm('are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>

                @empty
                    <tr colspan="5" class="text-center">No Student Found!</tr>
                @endforelse
            </tbody>
        </table>
    </div>

    
</div>
@endsection
