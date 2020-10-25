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
                    <br>


                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3>{{ $barang->judul }}</h3>
                                <img src="{{asset('data_file/'.$barang->gambar)}}" class="img-fluid" alt="{{$barang->judul}}"> <br>
                                Deskripsi : <br>
                                {!! $barang->deskripsi !!} <br>
                                
                                Kategori : {{$barang->kategori->nama}} <br>
                                Tanggal Menemukan : {{date('d-m-Y', strtotime($barang->tanggal_menemukan))}} <br>
                                Tempat Menemukan : {{$barang->tempat_menemukan}} <br>
                                Pengguna : {{$barang->user->name}} <br>
                                Tag/Label : 
                                <ul>
                                    @foreach ($barang->tags as $tag)
                                    <li>{{ $tag->nama }}</li>
                                    @endforeach    
                                </ul>
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
