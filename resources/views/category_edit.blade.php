@extends('base')
@section('konten')

<form action="{{route('category.update',$category->id)}}"method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label>Nama Category</label>
        <input type="text" name="name" value="{{$category->name}}" class="form-control"
        placeholder="...">
    </div>
    <button type="submit" class=" btn btn-primary">Simpan</button>
    </br>
@endsection
