@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">{{ __('Teachers') }}</div>

                <div class="card-body">
    <div class="col-sm-12">

    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}  
        </div>
    @endif
    </div>
    <div class="col-sm-12">
        <h1 class="display-3">Teachers</h1>   
        <div>
        <a style="margin: 19px;" href="{{ route('teachers.create')}}" class="btn btn-primary">New teacher</a>
        </div>  
    <table class="table table-striped">
        <thead>
            <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Class</td>
            <td>Teacher Type</td>
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
            <tr>
                <td>{{$teacher->id}}</td>
                <td>{{$teacher->first_name}} {{$teacher->last_name}}</td>
                <td>{{$teacher->email}}</td>
                <td>{{$teacher->class_id}}</td>
                <td>{{$teacher->teacher_type}}</td>
                <td>
                    <a href="{{ route('teachers.edit',$teacher->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('teachers.destroy', $teacher->id)}}" method="post">
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