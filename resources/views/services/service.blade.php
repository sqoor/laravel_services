@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="/services" class="btn btn-outline-dark  btn-sm my-2">Go back</a>
        <div class="card">
            <h5 class="card-header">Card Info
                @guest
                @elseguest
                    @if(count(\App\Proposal::where('service_id', $service->id)->get()) > 0)
                        <span class="float-right">
                    Status: {{ \App\Proposal::where('service_id', $service->id)->get()[0]->status  }}
                </span>
                    @endif
                @endguest
            </h5>
            <div class="card-body">
                <h5 class="card-title">Title: <span class="text-muted">{{$service->title}}</span></h5>
                <p class="card-text">Description: <span class="text-muted">{{$service->description}}<span></span></p>
                <p class="card-text">Price: <span class="text-muted">{{$service->price}}</span></p>
                <p class="card-text">Location: <span class="text-muted">{{$service->location}}</span></p>
                <p class="card-text">Time: <span class="text-muted">{{$service->time}}</span></p>
                <p class="card-text">Type of work: <span class="text-muted">{{$service->category}}</span></p>
                <p class="card-text">Created at: <span class="text-muted">{{$service->created_at}}</span></p>


                <div class="card-footer">

{{--                    @guest--}}
{{--                        <a href="/login" class="btn-btn-info">Register to sign for job</a>--}}
{{--                    @elseguest--}}
                        @if(count(\App\Proposal::where('service_id', $service->id)->get()) > 0)
                            {{--decline--}}
                            <form
                                action="/propose/{{\App\Proposal::where('service_id', $service->id)->get()[0]->id}}/decline"
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
{{--                    @endguest--}}
                </div>
            </div>
        </div>

        {{--    {{  dd(  \App\Proposal::where('service_id', $service->id)->get()[0]->id   )   }}--}}


        {{--    @endif--}}
    </div>

@endsection
