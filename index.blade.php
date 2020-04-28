@extends('layout/main')

@section('title','Data anggota perpustakaan')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-15">
            <h1 class="mt-3">Data anggota perpustakaan</h1>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <table class="table table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Npm</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenjang</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">jurusan</th>
                    <th scope="col">email</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>    
                <tbody>
                @foreach( $children as $children )
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $children->nik}}</td>
                    <td>{{ $children->nama }}</td>
                    <td>{{ $children->alamat }}</td>
                    <td>{{ $children->buku }}</td>
                    <td>{{ $children->email }}</td>
                    <td>{{ $children->handphone }}</td>
                    <td>
                    <a href="/children/{{ $children->id }}" class="badge badge-info">Detail</a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            
        

            <a href="/children/create" class="btn btn-primary my-3">create</a>

        </div>
    </div>
</div>
@endsection
   