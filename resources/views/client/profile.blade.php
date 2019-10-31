@extends('layouts.app')

@section('content')
    <div class="container w-75 mt-5">
{{--        {{$user}}--}}
        <img width="250px" src="https://images.vexels.com/media/users/3/145908/preview2/52eabf633ca6414e60a7677b0b917d92-male-avatar-maker.jpg" alt={{$user->image}}"" class="rounded-circle">
        <h3 class="text-muted mt-3">Name: {{$user->name}}</h3>
        <h5 class="text-muted">Role: {{$user->role}}</h5>
        <h5 class="text-muted">Age: {{$user->age}}</h5>
        <h5 class="text-muted">Email: {{$user->email}}</h5>
        <h5 class="text-muted">Phone: {{$user->phone}}</h5>
    </div>
@endsection
