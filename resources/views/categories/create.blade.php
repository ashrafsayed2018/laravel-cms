@extends('layouts.app')

@section('content')

    <div class="card card-default">
        <div class="card-header">Create Category</div>
        <div class="card-body">
            @if ($errors->all())

            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
                
            @endif
        <form action="{{route('categories.store')}}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="name"></label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group float-right">
                    <button class="btn btn-success">Add Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection