@extends('base')
@section('konten')

<div class="row">
<table class="table">
    <thead>
        <tr>
            <th scope="col">ARTIKEL</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $value)
        <tr>
            <td>
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Some new post - 
                            <small>by {{$value->id}} ( {{$value->category_id}} )</small>
                        </div>
                        <div class="panel-body">
                            <p>something to say !</p>
                            <p> {{$value->name}} </span> </p>
                            <p>
                        </div>
                        <div align="center"> </div>
                    </div>
                </div>
            </td>
            <td>
                <div class="btn-group">
                    <a href="{{route('articles.edit', $value->id)}}"
                    class="btn btn-success"><i class="fas fa-edit"></i></a>
                </div> 
            </td>
            <td>
                <form action="{{route('articles.destroy', $value->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit"><i class="fas fa-trash"></i></button>
                </form> 
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

@endsection