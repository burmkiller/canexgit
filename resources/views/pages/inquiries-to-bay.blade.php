@extends('layouts.app')

@section('content')

    <div class="container padding-y">
        @if(session()->has("success"))
            <h1 class="text-center alert alert-success">
                {{session("success")}}
            </h1>
        @endif
        <h1 class="text-center text-blue pb-5">Tenders, Inquiries to Buy, and more</h1>
        <p class="font-weight-normal text-justify" style="line-height: 30px;">
            Last year we generated a daily average of over 7,000 tenders from all around the world. Below is just a sample. They are provided free of charge exclusively to our premium members.<br>
            Don’t have time to go through them? Talk to our customer service agents and we will be happy to do it for you; we will filter them out and email you the ones that belong to Your Industry sector(s).
        </p>
    </div>



    <div id="itb" class="container padding-y">
        <div class="row d-flex justify-content">
            @foreach(getAllItems(9) as $item)
                <div class="col-lg-4 p-3">
                    <div class="itb container-fluid">
                        <div class="row">
                            <div class="col-lg-12 p-0 img-itb">
                                <img src="{{asset("assets/front_end")}}/images/buy.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="py-4">
                            <a href="#" class=""><h6 class="text-success font-weight-bold text-uppercase">{{$item->category}}</h6></a>
                            <a href="#" class="text-dark" data-toggle="modal" data-target="#item{{$item->id}}">
                                <h4 class="font-weight-bold">{{$item->name}}</h4>
                            </a>
                            <div class="mt-3">
                                <h6 class="font-weight-bold text-secondary">Country : <span> {{$item->country}}</span></h6>
                                <h6 class="font-weight-bold text-secondary">Deadline : <span>{{$item->dead_line}}</span></h6>
                                <h6 class="font-weight-bold text-secondary">Estimated value : <span>{{$item->value}}</span></h6>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal Inquiries to buy-->
                <div class="modal fade" id="item{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-blue" id="">Canadian Exporters</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container padding-y">
                                    <p class="font-weight-bold">
                                        These Inquiries to Buy are provided free of charge exclusively to our premium members
                                    </p>
                                    <form action="{{route("inquire-mail")}}" method="post" id="{{$item->id}}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" required placeholder="Your company name *">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" required placeholder="Your E-mail *">
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="3" class="form-control" name="item" placeholder="Inquiry">{{$item->name}}</textarea>
                                        </div>


                                        <div class="row d-flex justify-content-end mt-5 ">
                                            <button type="submit" class="btn btn-blue form-btn px-5 mr-3">Submit</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Inquiries to buy -->
            @endforeach


        </div>

    </div>

    <div class="container padding-y">
        <p class="font-weight-bold">
            Please note: Not all these Tenders are in English. Canadian Exports can help you translate and fill them
        </p>

        <div class="row d-flex justify-content-center mt-5">
            {{getAllItems(9)->links()}}
        </div>
    </div>
@endsection
