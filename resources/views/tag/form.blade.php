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
                                <h3 class="mt-3">Daftar Label</h3>
                                @include('share.showerrors')
                                @if (!$dataBaru)
                                <form action="{{ route('tag.update', $tag->id)}}" method="post">
                                    @else
                                    <form action="{{ route('tag.store') }}" method="post">
                                        @endif

                                        @csrf
                                        @if (!$dataBaru)
                                        @method('PUT')
                                        @endif


                                        
                                        Nama : <br>
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            value="{{ $tag->nama?? ''}}">

                                                                                
                                        <br>
                                        <input type="submit" value="Simpan" class="btn btn-sm btn-success">
                                        <a href="{{ route('tag.index') }}" class="btn btn-success btn-sm">Kembali</a>
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
