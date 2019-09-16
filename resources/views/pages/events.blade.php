@extends('layouts.app')

@section('content')



    <div class="container padding-y">
        <h1 class="text-center text-blue pb-5">All Canadian Exports Events</h1>
        <div class="row d-flex justify-content">
            @foreach(getAllEvents() as $event)
                <div class="col-lg-4 p-3">
                    <div class="itb container-fluid">
                        <div class="py-4">
                            <a href="#" class="text-dark">
                                <h4 class="font-weight-bold mt-4">{{str_truncate($event->title,20," ","...")}}</h4>
                            </a>
                            <div class="mt-3">
                                <h6 class="font-weight-bold text-secondary mt-4">Start Date: : <span>{{$event->start_at}}</span></h6>
                                <h6 class="font-weight-bold text-secondary mt-4">End Date : <span>{{$event->end_at}}</span></h6>
                                <h6 class="font-weight-bold text-secondary mt-4">Venue : <span>{{str_truncate($event->venue,30," ","...")}}</span></h6>
                                <h6 class="font-weight-bold text-secondary mt-4">City : <span>{{$event->city}}</span></h6>
                                <h6 class="font-weight-bold text-secondary mt-4">Country : <span>{{$event->country}}</span></h6>
                                <a href="{{url("event/".$event->id)}}" class=""><h6 class="text-success font-weight-bold text-right mt-3">Event Detail</h6></a>
                                @if(isset($event->url))
                                    <a href="{{$event->url}}" target="_blank" class=""><h6 class="text-success font-weight-bold text-right">Web site</h6></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>


    </div>
    <div class="container padding-y">

        <div class="row d-flex justify-content-center mt-5">
            {{getAllEvents(null,9)->links()}}
        </div>
    </div>
@endsection
