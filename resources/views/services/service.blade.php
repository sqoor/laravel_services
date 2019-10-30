@extends('layouts.app')

@section('content')
    <a href="/services" class="btn btn-outline-dark my-2">Go back</a>
    <div class="card">
        <h5 class="card-header">Card Info</h5>
        <div class="card-body">
            <h5 class="card-title">{{$service->title}}</h5>
            <p class="card-text">Description: {{$service->description}}</p>
            <p class="card-text">Price: {{$service->price}}</p>
            <p class="card-text">Location: {{$service->location}}</p>
            <p class="card-text">Time: {{$service->time}}</p>
            <p class="card-text">Category: {{$service->category}}</p>
            <p class="card-text">Created at: {{$service->created_at}}</p>
        </div>
    </div>
@endsection
