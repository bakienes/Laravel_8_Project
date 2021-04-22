@extends('backend.kutuphane.master')
@section('baslik')
Hizmetlerimiz Düzenleme
@endsection
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
        <table class="table table-sm">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Başlık</th>
                <th scope="col">Hizmet Başlığı</th>
                <th scope="col">Hizmet İçeriği</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $key => $service)
            <?php $results = DB::select('SELECT * FROM services where id = ?', array(1)); ?>
                <tr>
                    <th scope="col">{{$key}}</th>
                    <th scope="col">{{$service->head}}</th>
                    <th scope="col">{{$service->commenthead}}</th>
                    <th scope="col">{{$service->comment}}</th>
                </tr>
            @endforeach
        </tbody>
        </table>
        </div>
        <div class="col-md-4">
            <form method="POST" action="{{url('service/store')}}">
                {{csrf_field()}}
                <div class="form-outlint mb-4">
                    <input type="text" id="head" name="head" class="form-control">
                    <label class="form-label" for="head">Başlık</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="commenthead" name="commenthead" class="form-control">
                    <label class="form-label" for="commenthead">Hizmet Başlığı</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="comment" name="comment" class="form-control">
                    <label class="form-label" for="comment">Hizmet İçeriği</label>
                </div>
                <input type="submit" name="kaydet" value="Ekle" class="btn btn-info btn-block">
            </form><br>
            <h3>
            Toplam Kitap Sayısı: {{$serviceCount}}
            </h3>
@endsection