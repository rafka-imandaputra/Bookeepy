<style>
   
.container{
 margin:1rem;
 padding: 1rem;
 border: 2px solid #444;
 min-height:80vh;
 background-color: #f9f9f9;
}
.wrapper h1{
  padding-bottom: 14px;
  border-bottom: 2px solid #444;
  margin-top: 0;
}

input{
  padding: 6px;
  border-radius: 2px;
  border: 2px solid #444;
}
.btn-blue{
  padding: 6px;
  border-radius: 2px;
  background: #3f51b5;
  color: #fff;
  border: 2px solid #3f51b5;
 }
.alert-success p{
  background: #009688;
  padding: 12px;
  color: #ffff;
}
.alert-danger ul{
  background: #f34444;
  color:#fff;
  padding: 1rem 2rem;
} 
table,
td {
    border: 1px solid #333;
    text-align:center;
}
tr{
    height: 32px;
}
thead,
tfoot {
    background-color: #3f51b5;
    color: #fff;
}
.btn-red, .btn-green{
    padding: 6px;
    border-radius: 2px; 
    color: #fff;
    width: 50%;
   
}
.btn-red{
  border: 2px solid #e14949;
  background: #e14949;
}
.btn-green{
  border: 2px solid #1a887e;
  background: #1a887e;
}

</style>






@extends('layouts.app')
@section('title', 'Post Edit')
@section('content')
<div class="wrapper">
  <h1>Edit Buku</h1>
  
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
  
  <form method="POST" action="{{ url('posts', $post->id ) }}">
    @csrf
    @method('PUT')
    <input name="judul" value="{{ $post->judul }}" type="text" placeholder="Judul..."> 
    <input name="author" value="{{ $post->author }}" type="text" placeholder="Author...">
    <input name="synopsis" value="{{ $post->synopsis }}" type="text" placeholder="Synopsis...">
    <input name="penerbit" value="{{ $post->penerbit }}" type="text" placeholder="Penerbit...">
    <button class="btn-blue">Submit</button>
  </form>
</div>
<a style="color: black" href="http://localhost:8000/posts/">Kembali</a>
@endsection
