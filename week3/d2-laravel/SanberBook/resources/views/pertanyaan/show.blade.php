@extends('layouts.master')

@section('title')
@endsection

@section('content')
<h2>Show Pertanyaan {{$pertanyaan->id}}</h2>
<h4>{{$pertanyaan->judul}}</h4>
<p>{{$pertanyaan->isi}}</p>

<a class="btn btn-danger" href="/pertanyaan" role="button">Back</a>

@endsection