@extends('layouts.app')

@section('title', 'Home | Todos')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4>Your Todos</h4>
            </div>
            <div class="card-body">
            <ul class="list-group">
                @foreach ($todos as $todo)
                <li class="list-group-item">{{$todo->name}}
                    <a href="/todos/{{$todo->id}}" class="btn btn-primary float-end btn-sm">View</a>
                    
                    @if(!$todo->completed)
                    <a href="/todos/complete/{{$todo->id}}" class="btn btn-warning float-end btn-sm mx-2">Pending</a>
                </li>
                @endif
                @endforeach
            </ul>
            </div>
            </div>
        </div>
    </div>
@endsection