@extends('layout/main')

@section('title','Form edit anggota')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Edit Data anggota</h1>
            
    <form method="post" action="/children/{{ $children->id }}">
    @method('patch')
    @csrf
        <div class="form-group">
            <label for="nik">Nik</label>
            <input type="text" class="form-control" id="nik" placeholder="Masukan nik" name="nik" value="{{ $children->nik }}">
        </div>
        <div class="form-group">
            <label for="nama">Mama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama" value="{{ $children->nama }}">
        </div>
        <div class="form-group">
            <label for="buku">Buku</label>
            <input type="text" class="form-control" id="buku" placeholder="Masukan buku" name="buku" value="{{ $children->buku }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" name="alamat" value="{{ $children->alamat }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="Jurusan" placeholder="Masukan email" name="email" value="{{ $children->email }}">
        </div>
        <div class="form-group">
            <label for="handphone">Handphone</label>
            <input type="text" class="form-control" id="handphone" placeholder="Masukan handphone" name="handphone" value="{{ $children->handphone }}">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>

        </div>
    </div>
</div>
@endsection
   