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
                                Email : {{ $user->email }} <br>
                                Nama : {{ $user->name }} <br>
                                Alamat : {{ $user->profile->alamat ?? '' }} <br>
                                No. HP : {{ $user->profile->no_hp ?? '' }} <br>

                                <a href="/user-profile/update-profile" class="btn btn-sm btn-warning">Update Data</a>
                                <hr>
                                Daftar Barang Terkait :
                                <ul>
                                @foreach ($user->barang as $item)
                                    <li>{{ $item->judul }}</li>
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
