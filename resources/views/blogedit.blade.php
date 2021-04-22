@extends('backend.kutuphane.master')
@section('baslik')
Blog Düzenleme
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
                <th scope="col">Blog Başlığı</th>
                <th scope="col">Yazar</th>
                <th scope="col">Blog İçerik</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $key => $blog)
            <?php $results = DB::select('SELECT * FROM blogs where id = ?', array(1)); ?>
                <tr>
                    <th scope="col">{{$key}}</th>
                    <th scope="col">{{$blog->head}}</th>
                    <th scope="col">{{$blog->commenthead}}</th>
                    <th scope="col">{{$blog->author}}</th>
                    <th scope="col">{{$blog->comment}}</th>
                </tr>
            @endforeach
        </tbody>
        </table>
        </div>
        <div class="col-md-4">
            <form method="POST" action="{{url('service/blog')}}">
                {{csrf_field()}}
                <div class="form-outlint mb-4">
                    <input type="text" id="head" name="head" class="form-control">
                    <label class="form-label" for="head"> Başlık</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="commenthead" name="commenthead" class="form-control">
                    <label class="form-label" for="commenthead">Blog Başlık</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="author" name="author" class="form-control">
                    <label class="form-label" for="author">Blog Yazar</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="comment" name="comment" class="form-control">
                    <label class="form-label" for="comment">Blog İçerik</label>
                </div>
                <input type="submit" name="kaydet" value="Ekle" class="btn btn-info btn-block">
            </form><br>
            <h3>
            Toplam Kitap Sayısı: {{$blogCount}}
            </h3>
@endsection