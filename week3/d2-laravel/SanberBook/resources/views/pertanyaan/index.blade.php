@extends('layouts.master')

@section('title')
<h1>Daftar Pertanyaan</h1>
@endsection

@section('content')
<a href="/pertanyaan/create" class="btn btn-primary" style="margin-bottom: 10px">Tambah</a>
<table class="table">
    <thead class="thead-light">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <!-- <th scope="col" style="display: inline">Actions</th> -->
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($pertanyaan as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$value->judul}}</td>
                <td>{{$value->isi}}</td>
                <td>
                    <a href="/pertanyaan/{{$value->id}}" class="btn btn-info">Show</a>
                    <a href="/pertanyaan/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="/pertanyaan/{{$value->id}}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <tr colspan="3">
                <td>No data</td>
            </tr>  
        @endforelse              
    </tbody>
</table>
@endsection