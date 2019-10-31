@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($services as $service)
                <div class="card border-secondary m-3 col-5" style="width: 100%">
                    <div class="card-header">Title: {{$service->title}}</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Description</h5>
                        <p class="card-text">{{$service->description}}</p>
                        <p class="card-text">Location: {{$service->location}}</p>
                        <p class="card-text">Price: {{$service->price}} JD</p>
                        <p class="card-text">Type of work: {{$service->category}}</p>
                        <a href="/services/detail/{{$service->id}}" class="btn btn-primary">Details..</a>
                    </div>
                </div>
            @endforeach
        </div>

        {{$services->links()}}
    </div>
@endsection
