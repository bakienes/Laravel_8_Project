@extends('backend.kutuphane.master')
@section('baslik')
Sayfa Ekleme
@endsection
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
        <table class="table table-sm">
        <thead class="table-primary">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kitap Adı</th>
                <th scope="col">Kodu</th>
                <th scope="col">Yazar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $key => $book)
                <tr>
                    <th scope="col">{{$key}}</th>
                    <th scope="col">{{$book->name}}</th>
                    <th scope="col">{{$book->book_code}}</th>
                    <th scope="col">{{$book->author}}</th>
                </tr>
            @endforeach
        </tbody>
        </table>
        </div>
        <div class="col-md-4">
            <form method="POST" action="{{url('book/store')}}">
                {{csrf_field()}}
                <div class="form-outlint mb-4">
                    <input type="text" id="name" name="name" class="form-control">
                    <label class="form-label" for="name">Kitap Adı</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="book_code" name="book_code" class="form-control">
                    <label class="form-label" for="book_code">Kitap Kodu</label>
                </div>
                <div class="form-outlint mb-4">
                    <input tpye="text" id="author" name="author" class="form-control">
                    <label class="form-label" for="author">Kitap Yazarı</label>
                </div>
                <input type="submit" name="kaydet" value="Ekle" class="btn btn-info btn-block">
            </form><br>
            <h3>
            Toplam Kitap Sayısı: {{$bookCount}}
            </h3>
        @endsection