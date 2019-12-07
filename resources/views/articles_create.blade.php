@extends('base')
@section('konten')

<form action="{{route('articles.store')}}" method="POST">
  @csrf
    <div class="form-group">
        <label>Nama Artikel</label>
        <input type="text" name="name" class="form-control" placeholder=" ">
        <label>ID Ketegori</label>
        <input type="text" name="category_id" class="form-control" placeholder=" ">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
