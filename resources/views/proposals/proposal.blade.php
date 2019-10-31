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

    {{--    {{dd(   \App\Proposal::where('service_id', $service->id)->get()  )}}--}}
    @if(\App\Proposal::where('service_id', $service->id)->get()[0]->status === 'waiting')
        {{--        @if(\App\Proposal::where('service_id', $service->id)->get()->status = 'declined')--}}
        {{-- accept --}}
        <form class="d-inline"
              action="/proposal/decline/{{\App\Proposal::where('service_id', $service->id)->get()[0]->id}}"
              method="post">
            @csrf
            <button class="btn btn-danger" type="submit">Decline</button>
        </form>

        <form class="d-inline"
              action="/proposal/accept/{{\App\Proposal::where('service_id', $service->id)->get()[0]->id}}"
              method="post">
            @csrf
            <button class="btn btn-success" type="submit">Accept</button>
        </form>
    @else
        {{-- show status --}}
        @if(\App\Proposal::where('service_id', $service->id)->get()[0]->status === 'accepted')
            <p>Status: Proposal Accepted</p>
            <form class="d-inline"
                  action="/proposal/decline/{{\App\Proposal::where('service_id', $service->id)->get()[0]->id}}"
                  method="post">
                @csrf
                <button class="btn btn-danger" type="submit">Decline</button>
            </form>

        @else
            <p>Status: Proposal Declined</p>
            <form action="/proposal/accept/{{\App\Proposal::where('service_id', $service->id)->get()[0]->id}}"
                  method="post">
                @csrf
                <button class="btn btn-success" type="submit">Accept</button>
            </form>
        @endif
    @endif
@endsection
