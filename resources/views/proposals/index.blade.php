@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($services as $service)
                <div class="card border-warning m-3 col-5" style="width: 100%">
                    <div class="card-header">Header</div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">{{$service->title}}</h5>
                        <p class="card-text">{{$service->description}}</p>
                        <a href="/client/services/detail/{{$service->id}}"
                           class="btn btn-primary">Details..</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
