@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/dashboard" class="btn btn-outline-dark my-2">Go back</a>
        <div class="card">
            <h5 class="card-header">Service Info</h5>
            <div class="card-body">
                <h5 class="card-title"><span class="text-muted">Title: </span>{{$service->title}}</h5>
                <p class="card-text"><span class="text-muted">Description: </span>{{$service->description}}</p>
                <p class="card-text"><span class="text-muted">Price: </span>{{$service->price}} JD</p>
                <p class="card-text"><span class="text-muted">Location: </span>{{$service->location}}</p>
                <p class="card-text"><span class="text-muted">Time: </span>{{$service->time}}</p>
                <p class="card-text"><span class="text-muted">Category: </span>{{$service->category}}</p>
                <p class="card-text"><span class="text-muted">Created at: </span>{{$service->created_at}}</p>
                @if($service->provider_id !== null)
                    <p class="card-text">Provider:
                        {{-- {{$service->provider()->get()->name}}--}}
                    </p>
                @endif
                @if($service->client_rating > 0)
                    <p>Rating: {{$service->client_rating}} start</p>
                @endif
            </div>
        </div>
    </div>
@endsection
