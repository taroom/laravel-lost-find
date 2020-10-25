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
                                <h3 class="mt-3">Tambah Tag</h3>
                                @include('share.showerrors')

                                <form action="{{ route('tag-barang.store')}}" method="post">
                                        @csrf

                                        Nama Barang : {{$barang->judul}} <br>
                                        <input type="hidden" name="id_barang" id="id_barang" value="{{ $barang->id }}">
                                        Tag : <br>
                                        <select name="id_tag" id="id_tag" class="form-control">
                                            @foreach ($tags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->nama}}</option>
                                            @endforeach    
                                        </select>                                       

                                        
                                        <br>
                                        <input type="submit" value="Tambah" class="btn btn-sm btn-success">
                                        <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-success btn-sm">Kembali</a>
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
