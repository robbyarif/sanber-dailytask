@extends('layouts.master')

@section('title')
<h1>Tambah Pertanyaan</h1>
@endsection

@section('content')

<form action="/pertanyaan" method="POST">
    @csrf
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
        @error('judul')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="isi">Isi</label>
        <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan Isi">
        @error('isi')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    <a class="btn btn-danger" href="/pertanyaan" role="button">Cancel</a>
</form>

@endsection
