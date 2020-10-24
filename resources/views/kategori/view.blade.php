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
                                <form action="{{route('kategori.destroy', $kategori->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <a class="btn btn-sm btn-primary" href="/kategori">Daftar Kategori</a>
                                    <a href="{{route('kategori.edit', $kategori->id)}}"
                                        class="btn btn-sm btn-warning">edit</a>

                                    <button type="submit" class="btn btn-sm btn-danger d-inline">hapus</button>
                                </form>

                                <h3>{{ $kategori->nama }}</h3>
                                {{$kategori->slug}} <br>
                                {{$kategori->deskripsi}} <br>
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
