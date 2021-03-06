@extends('layouts.app')

@section('content')
<main id="main">
    <br>
    <section id="featured-services" class="featured-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <!-- MULAI -->
                    <br>
                    <br>
                    <br>


                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="mt-3">Daftar Kategori</h3>
                                <a class="btn btn-primary" href="/kategori/create">Masukkan Kategori Baru</a>
                                @include('share.message')
                                <br>
                                <br>
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
                                                <form action="{{route('kategori.destroy', $jenis->id)}}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{route('kategori.show', $jenis->id)}}"
                                                        class="badge badge-success">lihat</a>

                                                    <a href="{{route('kategori.edit', $jenis->id)}}"
                                                        class="badge badge-warning">edit</a>

                                                    <button type="submit" class="badge badge-danger"
                                                        class="d-inline">hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- SELESAI -->
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
