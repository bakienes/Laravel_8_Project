@extends('frontend.kutuphane.master')
@section('baslik')
Hakkımızda
@endsection
@section('content')
@foreach ($abouts as $key => $about)
<?php $results = DB::select('SELECT * FROM abouts where id = ?', array(1)); ?>
    <!-- About Start -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Hakkımızda</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">{{$about->name}}</span></h1>
                <p class="mb-4">{{$about->author}}</p>
                <ul class="list-inline">
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>{{$about->comment}}</h5></li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="{{asset('front/')}}/img/about-1.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="{{asset('front/')}}/img/about-2.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="{{asset('front/')}}/img/about-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endforeach
@endsection