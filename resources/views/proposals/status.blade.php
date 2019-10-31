@extends('layouts.app')

@section('content')
    <a href="/services" class="btn btn-outline-dark my-2">Go back</a>
    <div class="card">
        <h5 class="card-header">Service Info</h5>
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

    @if(count(\App\Proposal::where('service_id', $service->id)->get()) > 0)
        {{--decline--}}
        <form action="/propose/{{\App\Proposal::where('service_id', $service->id)->get()[0]->id}}/decline"
              method="post">
            @csrf
            <button class="btn btn-danger" type="submit">Cancel</button>
        </form>
    @else
        {{-- send--}}
        <form action="/propose/{{$service->id}}" method="post">
            @csrf
            <button class="btn btn-info" type="submit">Propose</button>
        </form>
    @endif
    {{--    desclie if proposed already --}}
@endsection
