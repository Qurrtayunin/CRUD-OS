@extends('base')
@section('konten')

<div class="card-header text-right">
          <a href="{{route('category.create')}}" class="btn btn-primary pull-right">Tambah Kategori</a>
</div>
        <br>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Edit</th>
                <th scope="col">Hapus</th>
                </tr>
            </thead>
            <tbody>
            @foreach($category as $value)
                <tr>
                    <td width="1">{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('category.edit', $value->id)}}"
                            class="btn btn-success"><i class="fas fa-edit"></i></a>
                      </div>
                    </td>
                    <td> 
                      <form action="{{route('category.destroy', $value->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>                          
                        </form> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
@endsection