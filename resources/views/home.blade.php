@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-sm-4"><a class="btn btn-primary btn-lg btn-block" style="margin-top: 20px;" href="{{ route('classes.index')}}"  rel="noopener noreferrer">Classes</a></div>
                        <div class="col-sm-4"><a class="btn btn-primary btn-lg btn-block" style="margin-top: 20px;" href="{{ route('teachers.index')}}"  rel="noopener noreferrer">Teachers</a></div>
                        <div class="col-sm-4"><a class="btn btn-primary btn-lg btn-block" style="margin-top: 20px;" href="{{ route('students.index')}}"  rel="noopener noreferrer">Students</a></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
