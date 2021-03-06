@extends('layouts.master')

@section('title')
@endsection

@section('content')

<div>
    <h2>Edit Pertanyaan {{$pertanyaan->id}}</h2>
    <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" value="{{$pertanyaan->judul}}" id="judul" placeholder="Masukkan judul">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="isi">isi</label>
            <input type="text" class="form-control" name="isi"  value="{{$pertanyaan->isi}}"  id="isi" placeholder="Masukkan isi">
            @error('isi')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a class="btn btn-danger" href="/pertanyaan" role="button">Cancel</a>
    </form>
</div>

@endsection