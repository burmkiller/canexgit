@extends('layouts.app')

@section('content')
    <div class="container padding-y">
        <h1 class="text-center text-blue mb-5">Confirm my business</h1>


        <div class="mb-5">
            <h5 class="text-blue font">Registration Package:</h5>
            <p class="text-justify" style="line-height: 30px;">
                {{$user->package_description}}
            </p>
        </div>

        <div class="mb-5">
            <h5 class="text-blue font">User Profile</h5>
            <p class="text-justify">
                Name : {{$user->name}}
            </p>
            <p class="text-justify">
                Email : {{$user->email}}
            </p>

        </div>

        <div class="mb-5">
        <h5 class="text-blue font">Select Your Business Categories (Industry Sectors)</h5>
            @foreach($user->profile()->categories()->get() as $category)
            <p class="text-justify">
                {{$category->name_en}}
            </p>
            @endforeach

        </div>

        <div class="mb-5">
            <h5 class="text-blue font">Business Profile</h5>
            <p class="text-justify">
                Company name : {{$user->profile()->company_name}}
            </p>

            <p class="text-justify">
                Company email : {{$user->profile()->company_email}}
            </p>
            <p class="text-justify">
                Mailing address :{{$user->profile()->address}}
            </p>
            <p class="text-justify">
                Phone : {{$user->profile()->phone}}
            </p>
            <p class="text-justify">
                Website : {{$user->profile()->site}}
            </p>
            <p class="text-justify">
                Detailed business description : {{$user->profile()->description}}
            </p>
        </div>

        <div class="row d-flex justify-content-end mt-5">
            <form action="{{route("register.back",$user->id)}}" method="post">
                @csrf
                {{method_field("DELETE")}}
                <div class="row d-flex justify-content-end mt-5 mr-1">
                    <button type="submit" class="btn btn-blue form-btn px-5 mr-3">Back</button>
                </div>
            </form>
            <form action="{{route("create-payment")}}" method="post">
                @csrf
                <div class="row d-flex justify-content-end mt-5 mr-1">
                    <button type="submit" class="btn btn-blue form-btn px-5">Confirm</button>
                </div>
            </form>
        </div>





    </div>

@endsection
