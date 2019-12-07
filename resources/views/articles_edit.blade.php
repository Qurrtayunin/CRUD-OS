@extends('base')
@section('konten')

<form action="{{route('articles.update',$articles->id)}}"method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label>Nama Artikel</label>
        <input type="text" name="name" value="{{$articles->name}}" class="form-control"
        placeholder="...">
    </div>
    <button type="submit" class=" btn btn-primary">Simpan</button>
    </br>
@endsection
