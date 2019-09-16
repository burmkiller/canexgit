@extends('layouts.app')

@section('content')

    <div class="container padding-y">
        <h1 class="text-center text-blue mb-5">Testimonials</h1>
        <p class="font-weight-bold" style="line-height: 30px;">
            We publish these Testimonials in the language(s) we receive them without translation; most of them are in English.<br>
            Nous publions ces témoignages dans la langue(s) nous les recevons sans traduction; la plupart d'entre eux sont en anglais
        </p>
    </div>


    <div class="container padding-y my-5 px-0">

        @foreach(getAllTestimonies() as $test)
        <div class="testimonial px-3 py-2">
            <h5 class="text-blue">Business Category : {{$test->category()->name_en}}</h5>
            <h5 class="text-blue">{{$test->place}}</h5>
            <p class="font-weight-bold text-justify">
                {{$test->comment}}
            </p>
            <h5 class="text-blue text-right">{{$test->name}}</h5>
        </div>
            <br>
        @endforeach
            <div class="row d-flex justify-content-center mt-5">
                {{getAllTestimonies()->links()}}
            </div>

    </div>


@endsection
