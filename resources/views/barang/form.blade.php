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
                                <h3 class="mt-3">Daftar Barang Temuan</h3>
                                @include('share.showerrors')
                                @if (!$dataBaru)
                                <form action="{{ route('barang.update', $barang->id)}}" method="post"
                                    enctype="multipart/form-data">
                                    @else
                                    <form action="{{ route('barang.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @endif

                                        @csrf
                                        @if (!$dataBaru)
                                        @method('PUT')
                                        @endif


                                        {{-- user_id --}}
                                        <input type="hidden" class="form-control" name="user_id" id="user_id"
                                            value="{{ Auth::id() }}">

                                        Judul : <br>
                                        <input type="text" class="form-control" name="judul" id="judul"
                                            value="{{ $barang->judul?? ''}}">

                                        Gambar : <br>
                                        <input type="file" class="form-control" name="gambar" id="gambar">

                                        Tanggal Menemukan : <br>
                                        <input type="text" class="form-control" name="tanggal_menemukan"
                                            id="tanggal_menemukan" value="{{ $barang->tanggal_menemukan?? ''}}">

                                        Tempat Menemukan : <br>
                                        <input type="text" class="form-control" name="tempat_menemukan"
                                            id="tempat_menemukan" value="{{ $barang->tempat_menemukan?? ''}}">

                                        Deskripsi : <br>
                                        <textarea class="form-control" name="deskripsi"
                                            id="deskripsi">{{ $barang->deskripsi ?? ''}}</textarea>

                                        Kategori : <br>
                                        <select class="form-control" name="id_kategori" id="id_kategori">
                                            @foreach ($dataKategori as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                            @endforeach
                                        </select>

                                        <br>
                                        <input type="submit" value="Simpan" class="btn btn-sm btn-success">
                                        <a href="{{ route('barang.index') }}" class="btn btn-success btn-sm">Kembali</a>
                                    </form>

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
