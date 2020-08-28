@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">{{ __('Contact') }}</div>

                <div class="card-body">
    <div class="col-sm-12">

    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}  
        </div>
    @endif
    </div>
    <div class="col-sm-12">
        <h1 class="display-3">Classes</h1>   
        <div>
        <a style="margin: 19px;" href="{{ route('classes.create')}}" class="btn btn-primary">New class</a>
        </div>  
    <table class="table table-striped">
        <thead>
            <tr>
            <td>ID</td>
            <td>Class Name</td>
            <td>Class Description</td>
            
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($classes as $class)
            <tr>
                <td>{{$class->id}}</td>
                <td>{{$class->class_name}}</td>
                <td>{{$class->class_description}}</td>
                
                <td>
                    <a href="{{ route('classes.edit',$class->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('classes.destroy', $class->id)}}" method="post">
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