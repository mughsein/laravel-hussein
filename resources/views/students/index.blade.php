@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">{{ __('Students') }}</div>

                <div class="card-body">
    <div class="col-sm-12">

    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}  
        </div>
    @endif
    </div>
    <div class="col-sm-12">
        <h1 class="display-3">Students</h1>   
        <div>
        <a style="margin: 19px;" href="{{ route('students.create')}}" class="btn btn-primary">New student</a>
        </div>  
    <table class="table table-striped">
        <thead>
            <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Class</td>
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->first_name}} {{$student->last_name}}</td>
                <td>{{$student->class_id}}</td>
                <td>
                    <a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('students.destroy', $student->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
    </div>
            </div>
        </div>
    </div>
</div>
@endsection