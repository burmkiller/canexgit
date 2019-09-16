@extends('layouts.app')

@section('content')



    <div class="container padding-y">
        <h1 class="text-center text-blue mb-5">What is this?</h1>
        <p class="font-weight-bold" style="line-height: 30px;">
            In case you are unable to find Canadian Exports through an organization close to you, you may want to join our  Info-Letter; you will receive every new issue via e-mail for free. We respect your privacy; we do not share your e-mail address with third parties nor will we send unsolicited mail. For additional information, view our Privacy Policy
        </p>
    </div>

    <div class="container padding-y">

        @if(session()->has("success"))
            <h1 class="alert alert-success text-center">
                {{session("success")}}
            </h1>
        @endif

        <form action="{{route("info-letter")}}" method="post">
            @csrf
            <h1 class="text-blue mb-5">Join Now</h1>

            <div class="form-group">
                <input type="text" class="form-control"  name="company_name" placeholder="Company Name *">
                @error('company_name')
                <small id="invalid-pw" class="form-text ml-3 text-danger"><i class="far fa-times-circle mr-2"></i>
                    {{$message}}
                </small>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name and Title *">
                @error('name')
                <small id="invalid-pw" class="form-text ml-3 text-danger"><i class="far fa-times-circle mr-2"></i>
                    {{$message}}
                </small>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your E-mail *">
                @error('email')
                <small id="invalid-pw" class="form-text ml-3 text-danger"><i class="far fa-times-circle mr-2"></i>
                    {{$message}}
                </small>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="country" placeholder="Your Country *">
                @error('country')
                <small id="invalid-pw" class="form-text ml-3 text-danger"><i class="far fa-times-circle mr-2"></i>
                    {{$message}}
                </small>
                @enderror
            </div>
            <div class="row d-flex justify-content-end mt-5 ">
                <button type="submit" class="btn btn-blue form-btn px-5 mr-3">Join now</button>
            </div>

        </form>
    </div>





@endsection
