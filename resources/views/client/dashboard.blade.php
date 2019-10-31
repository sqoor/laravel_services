{{--@extends('client.layout')--}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-muted">Dashboard</h3>
        {{--        // CRUD Operations--}}
        {{--        // form to create a new service--}}
        {{--        // with the list of services delete/ update // or maybe we don't want to delete as we do have foreign keys--}}

        <div class="history mt-4">
            <a href="/dashboard/create" class="btn btn-primary mb-5">Add a new service</a>
            <h3 class="text-muted ml-5">List of services</h3>
            <ul>
                @if(count($services) > 0)
                    <div class="container">
                        <div class="row">

                            @foreach($services as $service)

                                <div class="card border-secondary m-3 col-4" style="max-width: 18rem;">

                                    <div class="card-header"><span class="text-muted">Title: </span>{{$service->title}}</div>
                                    <div class="card-body text-secondary">
                                        <h5 class="card-title">Description</h5>
                                        <p class="card-text">{{$service->description}}</p>
                                        <a href="/services/{{$service->id}}" class="btn btn-primary">Details..</a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @else
                    <p>There is no services right now, add new one!</p>
                @endif
            </ul>
        </div>
@endsection
