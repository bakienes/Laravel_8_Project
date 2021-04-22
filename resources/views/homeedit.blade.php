@extends('backend.kutuphane.master')
@section('baslik')
Ana Sayfa Düzenleme
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
                <th scope="col">İçerik</th>
                <th scope="col">Özellik</th>
            </tr>
        </thead>
        <tbody>
            @foreach($abouts as $key => $about)
            <?php $results = DB::select('SELECT * FROM abouts where id = ?', array(1)); ?>
                <tr>
                    <th scope="col">{{$key}}</th>
                    <th scope="col">{{$about->name}}</th>
                    <th scope="col">{{$about->author}}</th>
                    <th scope="col">{{$about->comment}}</th>
                </tr>
            @endforeach
        </tbody>
        </table>
        </div>
        <div class="col-md-4">
            <form method="POST" action="{{url('about/store')}}">
                {{csrf_field()}}
                <div class="form-outlint mb-4">
                    <input type="text" id="name" name="name" class="form-control">
                    <label class="form-label" for="name">Hakkımızda Başlık</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="author" name="author" class="form-control">
                    <label class="form-label" for="author">Hakkımızda İçeriği</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="comment" name="comment" class="form-control">
                    <label class="form-label" for="comment">Hakkımızda Özellik</label>
                </div>
                <input type="submit" name="kaydet" value="Ekle" class="btn btn-info btn-block">
            </form><br>
            <h3>
            Toplam Kitap Sayısı: {{$aboutCount}}
            </h3>
@endsection