@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($proposals as $proposal)
                <div class="card border-warning m-3 col-5" style="width: 100%">
                    <div class="card-header">Header <span class="float-right">status: {{$proposal->status}}</span></div>
                    <div class="card-body text-secondary">
                        <h5 class="card-title">{{\App\Service::where('id', $proposal->service_id)->get()[0]->title}}</h5>
                        <p class="card-text">{{\App\Service::where('id', $proposal->service_id)->get()[0]->description}}</p>
                        <a href="/services/detail/{{\App\Service::where('id', $proposal->service_id)->get()[0]->id}}"
                           class="btn btn-primary">Details..</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
