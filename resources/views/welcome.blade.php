@extends('layouts.app')

@section('content')
    <!-- 1st Section Start -->
    <div class="container padding-y">
        @if(session()->has("success"))
        <h1 class="text-center alert alert-success">
            {{session("success")}}
        </h1>
        @endif
        @if(session()->has("error"))
                <h1 class="text-center alert alert-danger">
                    {{session("error")}}
                </h1>
        @endif
        <h1 class="text-center text-blue mb-5">{{trans("home.welcome_head")}}</h1>
        <p class=" font-weight-bold text-justify" style="line-height: 30px;">
            {{trans("home.wlc_msg_1")}}

            <br>
            <a href="{{route("register")}}">{{trans("home.wlc_link")}}</a> {{trans("home.wlc_msg_2")}}
        </p>
    </div>
    <!-- 1st Section End -->


    <!-- 2nd Section Categories -->
    @include("layouts.partial.categories")
    <!-- 2nd Section End -->


    <hr class="my-5" width="60%">


    <div id="wwa" class="container padding-y">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 pr-lg-5">
                <h1 class="text-blue mb-5">{{trans("home.who_we_are")}}</h1>
                <p class="lead text-justify font-weight-normal">
                    {{trans("home.who_we_are_msg")}}
                </p></div>
            <div class="col-lg-6 p-0">
                <img src="{{asset("assets/front_end/images/1.jpg")}}" class="img-fluid">
            </div>
        </div>

        <hr class="w-100 clearfix d-md-none my-5">

        <div class="row d-flex align-items-center">
            <div class="col-lg-6 p-0">
                <img src="{{asset("assets/front_end/images/2.jpg")}}" class="img-fluid">
            </div>
            <div class="col-lg-6 pl-lg-5">
                <h1 class="text-blue text-right my-5">{{trans("home.our_mission")}}</h1>
                <p class="lead text-justify font-weight-normal">
                    {{trans("home.our_mission_msg")}}
                </p></div>
        </div>
    </div>


    <div id="magazine" class="container-fluid padding-y my-5 text-light text-center">
        <h1>Canadian Exports Magazine</h1>
        <p class="lead font-weight-normal">To receive Canadian Exports Magazine to your email, join our Info-Letter above.</p>
        <form class="row d-flex justify-content-center" action="{{route("info-letter")}}" method="post">
            <div class="container">
                @csrf
                <div class="row">
                    <div class="form-group col-lg-6 my-3">
                        <input type="text" class="form-control p-4"  name="company_name" placeholder="Your Company Name">
                        @error('company_name')
                        <small id="invalid-pw" class="form-text ml-3 text-danger font-weight-bold"><i class="far fa-times-circle mr-2"></i>
                            {{$message}}
                        </small>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6 my-3">
                        <input type="text" class="form-control p-4"  name="name" placeholder="Your Name">
                        @error('name')
                        <small id="invalid-pw" class="form-text ml-3 text-danger font-weight-bold"><i class="far fa-times-circle mr-2"></i>
                            {{$message}}
                        </small>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6 my-3">
                        <input type="email" class="form-control p-4"  name="email"  placeholder="Your E-mail">
                        @error('email')
                        <small id="invalid-pw" class="form-text ml-3 text-danger font-weight-bold"><i class="far fa-times-circle mr-2"></i>
                            {{$message}}
                        </small>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6 my-3">
                        <input type="text" class="form-control p-4" name="country"  placeholder="Your Country">
                        @error('country')
                        <small id="invalid-pw" class="form-text ml-3 text-danger font-weight-bold"><i class="far fa-times-circle mr-2"></i>
                            {{$message}}
                        </small>
                        @enderror
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center">
                        <button type="submit" class="btn button btn-outline-white mt-4">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

{{--        inquiries to buy--}}
    @if(count(getAllItems())>0)

        @include("layouts.partial.items")

     @endif
    {{--        ***********************--}}




    @if(count(getAllBanAndSpo("sponsor"))>0)
    <div class="container padding-y">
        <h1 class="text-blue text-center">{{trans("home.sponsor")}}</h1>
        <div class="row d-flex align-items-center justify-content-around my-5">
            @foreach(getAllBanAndSpo("sponsor") as $s)
            <div class="col-lg-3 p-2">
                <a href="{{$s->url}}">
                    <img src="{{asset("storage/".$s->image)}}" class="img-fluid">
                </a>

            </div>
            @endforeach

        </div>
    </div>
    @endif


    @if(count(getAllBanAndSpo("banner"))>0)
        <div class="container-fluid padding-y bg-blue">
        <h1 class="text-light text-center">{{trans("home.banner")}}</h1>
        <div class="row d-flex align-items-center my-5">
            <div class="container">
                <div class="row d-flex justify-content-around align-items-center">
                    @foreach(getAllBanAndSpo("banner") as $b)
                    <div class="col-lg-3 p-2">
                        <a href="{{$b->url}}">
                            <img src="{{asset("storage/".$b->image)}}" class="img-fluid">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(count(getAllEvents())>0)
    <div id="itb" class="container padding-y">
        <h1 class="text-blue text-center">TRADE SHOWS AND EVENTS</h1>
        <div class="row d-flex justify-content-between my-5">

           @foreach(getAllEvents(3) as $event)
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
        <div class="row d-flex justify-content-center">
            <a href="{{url("page/events")}}" class="btn btn-outline-blue px-5">SEE ALL EVENTS</a>
        </div>
    </div>
    @endif
    @if(getCurrentIssue()!=null)
    <div class="container-fluid padding-y bg-blue">
        <h1 class="text-light text-center">Canadian Exports Magazine</h1>
        <p class="font-weight-bold text-center text-light" style="line-height:30px;">To receive Canadian Exports Magazine to your email, join our Info-Letter above.</p>
        <div class="row d-flex align-items-center my-5">
            <div class="container">
                <div class="row">
                        <div class="col-lg-6 d-flex justify-content-end right">
                            <a href="{{asset("storage/".getCurrentIssue()->pdf)}}">
                                <img src="{{asset("storage/".getCurrentIssue()->front_image)}}" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-lg-6 p-3 d-flex align-items-center left">
                            <div>
                            <h4 class="text-light mt-1">{{getCurrentIssue()->title}}</h4>

                            <a href="{{url("page/see-all-magazines")}}" class="btn button btn-outline-white mt-3" style="border: 2px solid !important;">SEE ALL MAGAZINES</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </div>
    @endif
@endsection
