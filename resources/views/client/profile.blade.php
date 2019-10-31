@extends('layouts.app')

@section('content')
    <div>
        {{$user}}
        <img src="{{$user->image}}" alt="" class="rounded-circle">
        <h3 class="text-muted">Name: {{$user->name}}</h3>
        <h3 class="text-muted">Role: {{$user->role}}</h3>
        <h3 class="text-muted">Age: {{$user->age}}</h3>
    </div>
@endsection
