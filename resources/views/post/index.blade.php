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
a{
  color: #fff;
  text-decoration: none;
}
.a{
  color: black;
  text-decoration: underline;
}
input{
  padding: 6px;
  border-radius: 2px;
  border: 2px solid #444;
}
.btn-blue{
  padding: 6px;
  border-radius: 4px;
  background: #174A7E;
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
    background-color: #174A7E;
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
  background: #C3514E;
}
.btn-green{
  border: 2px solid #1a887e;
  background: #0C8040;
}
.btn-tambah{
  border: 2px solid #1a887e;
  background: #1a887e;
  padding: 6px;
  border-radius: 2px; 
  color: #fff;
  width: 50px;
}

</style>


@extends('layouts.app')
@section('title', 'Semua Buku')
@section('content')
<div class="wrapper">
  <h1 style="text-align: center;">Semua Buku</h1>
  @if (session('success'))
    <div class="alert-success">
       <p>{{ session('success') }}</p> 
    </div>
    @endif
    <div>
    <buttton class="btn-blue"><a href="http://localhost:8000/posts/create" target="_blank">Tambah Data</a></button>
</div>
<br>
  <table style="width:100%">
    <thead>
      <tr>
        <th>Judul</th>
        <th>Author</th>
        <th>Synopsis</th>
        <th>Penerbit</th>
        <th colspan=2>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td style="width: 200px; color: black;" ><a class="a" href="{{ route('posts.show', $post->id) }}"> {{ $post->judul}}  </a></td>
        <td style="width: 200px" >{{ $post->author }}</td>
        <td style="width: 400px" >{{ $post->synopsis }}</td>
        <td style="width: 200px" >{{ $post->penerbit }}</td>
        <td style="width: 100px"><button class="btn-green"><a href="{{ route('posts.edit', $post->id) }}">Edit</a></button></td>
        <form method="POST" action="{{ url('posts', $post->id ) }}">
            @csrf
            @method('DELETE')
            <td style="width: 100px"><button class="btn-red">Hapus</button></td>
        </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection