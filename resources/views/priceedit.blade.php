@extends('backend.kutuphane.master')
@section('baslik')
Fiyat Düzenleme
@endsection
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
        <table class="table table-sm">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Ana Başlık</th>
                <th scope="col">Ürün Başlık</th>
                <th scope="col">Fiyat</th>
                <th scope="col">Özellik</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prices as $key => $price)
            <?php $results = DB::select('SELECT * FROM prices where id = ?', array(1)); ?>
                <tr>
                    <th scope="col">{{$key}}</th>
                    <th scope="col">{{$price->head}}</th>
                    <th scope="col">{{$price->commenthead}}</th>
                    <th scope="col">{{$price->price}}</th>
                    <th scope="col">{{$price->comment}}</th>
                </tr>
            @endforeach
        </tbody>
        </table>
        </div>
        <div class="col-md-4">
            <form method="POST" action="{{url('price/store')}}">
                {{csrf_field()}}
                <div class="form-outlint mb-4">
                    <input tpye="text" id="head" name="head" class="form-control">
                    <label class="form-label" for="head">Ürün Başlık</label>
                </div>
                <div class="form-outlint mb-4">
                    <input type="text" id="commenthead" name="commenthead" class="form-control">
                    <label class="form-label" for="commenthead">Fiyat Başlık</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="price" name="price" class="form-control">
                    <label class="form-label" for="price">Fiyat</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="comment" name="comment" class="form-control">
                    <label class="form-label" for="comment">Fiyat Özellik</label>
                </div>
                <input type="submit" name="kaydet" value="Ekle" class="btn btn-info btn-block">
            </form><br>
            <h3>
            Toplam Kitap Sayısı: {{$priceCount}}
            </h3>
@endsection