@extends('base')
@section('konten')

<form action="{{route('category.store')}}" method="POST">
  @csrf
    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" name="name" class="form-control" placeholder=" ">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
