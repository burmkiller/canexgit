@extends('layouts.app')

@section('content')

    <div class="container padding-y">

        <h1 class="text-center text-blue mb-5">Contact us</h1>
        @if(session()->has("success"))
        <h3 class="alert alert-success text-center">
            {{session("success")}}
        </h3>
        @endif
        <p class="font-weight-bold" style="line-height: 30px;">
            We communicate with over 100 countries. Please write to us in English. Thank you for understanding and sorry for inconvenience
        </p>
        <div class="my-5">
            <h5 class="text-blue">Mailing Address:</h5>
            <p class="text-justify" style="line-height: 30px;">
                1051 Blvd Decarie,
                P. O. Box: 53555 NORGATE,
                Montreal - Qc.
                Canada
                Postal Code: H4L 3M0.
            </p>
        </div>
        <div class="mb-5">
            <h5 class="text-blue">Toll Free:</h5>
            <p class="text-justify" style="line-height: 30px;">
                1-877-333-3014 (Toll-Free within Canada and USA)
            </p>
        </div>
        <div class="mb-5">
            <h5 class="text-blue">Telephone:</h5>
            <p class="text-justify" style="line-height: 30px;">
                +1-514-557-7856 (From the rest of the world)
            </p>
        </div>
        <div class="mb-5">
            <h5 class="text-blue">Fax:</h5>
            <p class="text-justify" style="line-height: 30px;">
                +1-514-333-4979
            </p>
        </div>
        <div class="mb-5">
            <h5 class="text-blue">e-mail:</h5>
            <p class="text-justify" style="line-height: 30px;">
                info@canadianexports.org
            </p>
        </div>
        <div class="mb-5">
            <h5 class="text-blue">Website:</h5>
            <p class="text-justify" style="line-height: 30px;">
                www.canadianexports.org
            </p>
        </div>
        <div class="mb-5">
            <h5 class="text-blue">General Inquiries:</h5>
            <p class="text-justify" style="line-height: 30px;">
                info@canadianexports.org
            </p>
        </div>
        <div class="mb-5">
            <h5 class="text-blue">Sales Department:</h5>
            <p class="text-justify" style="line-height: 30px;">
                sales@canadianexports.org
            </p>
        </div>
        <div class="mb-5">
            <h5 class="text-blue">Jobs at Canadian Exports:</h5>
            <p class="text-justify" style="line-height: 30px;">
                employment@canadianexports.org
            </p>
        </div>
        <div>
            <h5 class="text-blue">Office Hours:</h5>
            <p class="text-justify" style="line-height: 30px;">
                Monday - Friday 9:30 AM - 4:00 PM (EST)
            </p>
        </div>

    </div>



    <div class="container padding-y">
        <form method="post" action="{{route("contact-us")}}">
            @csrf
            <h1 class="text-blue mb-5">Get in touch</h1>

            <div class="form-group">
                <input type="text" class="form-control @error("name") invalid @enderror " value="{{old("name")}}" name="name" placeholder="Your Name *">
                @error('name')
                <small id="invalid-pw" class="form-text ml-3 text-danger"><i class="far fa-times-circle mr-2"></i>
                    {{$message}}
                </small>
                @enderror
            </div>
            <div class="form-group">
                <input type="email" class="form-control @error("email") invalid @enderror " value="{{old("email")}}" name="email" placeholder="Your E-mail *">
                @error('email')
                <small id="invalid-pw" class="form-text ml-3 text-danger"><i class="far fa-times-circle mr-2"></i>
                    {{$message}}
                </small>
                @enderror
            </div>
            <div class="form-group">
                <textarea rows="3" class="form-control @error("message") invalid @enderror " name="message"  placeholder="Your message *"></textarea>
                @error('message')
                <small id="invalid-pw" class="form-text ml-3 text-danger"><i class="far fa-times-circle mr-2"></i>
                    {{$message}}
                </small>
                @enderror
            </div>


            <div class="row d-flex justify-content-end mt-5 ">
                <button type="submit" class="btn btn-blue form-btn px-5 mr-3">Submit</button>
            </div>

        </form>
    </div>




    <hr width="60%" class="mt-3 mb-5">


@endsection
