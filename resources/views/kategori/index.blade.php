@extends('layouts.app')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h3 class="mt-3">Daftar Kategori</h3>
            <a class="btn btn-primary" href="/barang/create">Masukkan Kategori Baru</a>

            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Slug</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kategori as $jenis)
                <tr>
                <th scope="row">{{ $loop->iteration}}</th>
                <td>{{$jenis->nama}}</td>
                <td>{{$jenis->slug}}</td>
                <td>{{$jenis->deskripsi}}</td>
                <td> 
                    <a href="/kategori/{{$jenis->id}}/edit" class="badge badge-success">edit</a>
                    <form action="/kategori/{{$jenis->id}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge badge-danger" class="d-inline">hapus</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection