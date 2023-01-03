@extends('layouts.app')

@section('title', 'Edit | Todos')

@section('content')
<div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
 
<!-- Create Post Form -->
        
        <div class="card" >
            <div class="card-header">
                <h4 class="card-title">Edit Todo</h4>
            </div>
            <div class="card-body">
                <form action="/todos/update/{{$todo->id}}" method="POST">
                    @csrf 
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" value="{{$todo->name}}" id="">
                    </div>
                    
                    <div class="mb-3">
                        <textarea name="details" class="form-control" >{{$todo->details}}</textarea>
                    </div>

                    <div class="d-grid">
                        <input type="submit" name="submit" class="btn btn-success form-control" value="Create">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection