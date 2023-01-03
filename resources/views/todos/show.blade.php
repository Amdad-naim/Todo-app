@extends('layouts.app')

@section('title', 'Details | Todos')

@section('content')
<div class="row justify-content-center mt-5">
        <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>{{$todo->name}}</h4>
            </div>
            <div class="card-body">
                <p>{{$todo->details}}</p>
            </div>
            <div class="card-footer">
                <a href="/todos/edit/{{$todo->id}}" class="btn btn-primary">Edit</a>
                <a href="/todos/delete/{{$todo->id}}" class="btn btn-danger">delete</a>
            </div>
            </div>
        </div>
    </div>
@endsection 