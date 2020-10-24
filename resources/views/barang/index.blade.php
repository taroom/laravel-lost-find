@extends('layouts.app')

<div class="container">
    <div class="row">
        <div class="col-10">
            <h3 class="mt-3">Daftar Barang Temuan</h3>
            <a class="btn btn-primary" href="/barang/create">Masukkan Barang Temuan Anda</a>

            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Foto</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tanggal Ditemukan</th>
                <th scope="col">Tempat Ditemukan</th>
                <th scope="col">User</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang ?? '' as $benda)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$benda->gambar}}</td>
                <td>{{$benda->deskripsi}}</td>
                <td>{{$benda->id_kategori}}</td>
                <td>{{$benda->tanggal_menemukan}}</td>
                <td>{{$benda->tempat_menemukan}}</td>
                <td>{{$benda->user_id}}</td>
                <td> 
                    <a href="/barang/{{$benda->id}}/edit" class="badge badge-success">edit</a>
                    <form action="/barang/{{$benda->id}}" method="post">
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