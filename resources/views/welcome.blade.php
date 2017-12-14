@extends('layouts.app')

@section('content')
    @include('layouts.inc_header')
    @include('layouts.inc_nav')
    @include('layouts.inc_special_offer_signin')
    @include('layouts.inc_b_asks')
    <br><br>
    @if(Session::has('alert'))
    <div class="alert alert-success">
        {{ Session::get('alert') }}
        @php
        Session::forget('alert');
        @endphp
    </div>
    @endif
    <section class="b-featured">
        <div class="container">
            <div class="b-search__main-title wow zoomInUp" data-wow-delay="0.3s">
                <img src="{{ asset('images/comingsoon.jpg') }}">
            </div>
        </div>
    </section>
    <br><br>
@endsection
