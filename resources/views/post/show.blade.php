<style>
  .ditel{
    height: 40px;
    width:50%;
  }
</style>


@extends('layouts.app')
@section('title', 'Post Detail')
@section('content')
<div class="wrapper">
  <h2>Detail Buku {{ $post->judul }}</h2>
  
  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  
 
    @csrf
    @method('PUT')
    <h3>Judul Buku</h3>
    <p>{{ $post->judul }}</p><br>
    <h3>Author</h3>
    <p>{{ $post->author }}</p><br>
    <h3>Synopsis</h3>
    <p>{{ $post->synopsis }}</p><br>
    <h3>Penerbit</h3>
    <p>{{ $post->penerbit }}</p><br>
 

  <a href="http://localhost:8000/posts/">Kembali</a>
</div>
@endsection
