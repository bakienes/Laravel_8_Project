@extends('frontend.kutuphane.master')
@section('baslik')
Hizmetlerimiz
@endsection
@section('content')
@foreach ($services as $key => $service)
<?php $results = DB::select('SELECT * FROM services where id = ?', array(1)); ?>
    <!-- Services Start -->
    <div class="container-fluid bg-light pt-5">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Hizmetlerimiz</h4>
                <h1 class="display-4 m-0"><span class="text-primary">{{$service->head}}</span></h1>
            </div>
            <div class="row pb-3">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">{{$service->commenthead}}</h3>
                        <p>{{$service->comment}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
    @endforeach
@endsection