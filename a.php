@extends('layouts.main')
    <!-- Modal -->
@foreach ( $bukus as $buku )
<div class="modal fade" id="detail_buku{{ $buku->id }}" tabindex="-1" aria-labelledby="detailBukuModal{{ $buku->id }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Buku | Web App Pencatatan Buku</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="id">ID Buku</label>
                <input type="number" name="id" class="form-control col-md-9" id="cb" placeholder="Masukkan ID Buku" value="{{ $buku->id }}" readonly>
            </div>

            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" name="judul" class="form-control col-md-9" id="cb" placeholder="Masukkan Judul Buku" value="{{ $buku->judul }}" readonly> 
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control col-md-9" id="cb" placeholder="Masukkan Nama Author" value="{{ $buku->author }}" readonly>
            </div>

            <div class="form-group">
                <label for="penerbit">Penerbit</label>
                <input type="text" name="penerbit" class="form-control col-md-9" id="cb" placeholder="Masukkan Nama Penerbit" value="{{ $buku->penerbit }}" readonly>
            </div>

            <div class="form-group">
                <label for="sinopsis">Sinopis</label>
                <textarea name="sinopsis" class="form-control col-md-9" style="height: 130px;"id="cb" cols="2" rows="3" placeholder="Masukkan Sinopsis Buku" readonly>{{ $buku->sinopsis }}</textarea>
                <!-- <input type="text" name="sinopsis" class="form-control col-md-9" id="cb" placeholder="Masukkan Sinopis Buku" value=""> -->
            </div>
        </div>
      </div>
  </div>
</div>
@endforeach