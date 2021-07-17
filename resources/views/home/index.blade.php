@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-uppercase text-center my-1">Sistem Informasi Manajemen Aset</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- card untuk pilih ruangan -->
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-4">
                            <div class="card m-auto">
                                <a href="@if($user->roles->first()->id == 1) {{route('dir')}} @else {{route('approval-transaksi-inventarisasi.index')}} @endif" class="">
                                    <div class="card-body text-center">
                                        <img src="{{asset('images/menu-dir.jpg')}}" class="card-img-top" alt="<a href='https://www.freepik.com/vectors/business'>Business vector created by macrovector - www.freepik.com</a>" loading="lazy">
                                        <h5 class="card-title">Daftar Inventaris Ruangan</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card m-auto">
                                <a href="{{route('pindah_ruangan')}}" class="">
                                    <div class="card-body text-center">
                                        <img src="{{asset('images/menu-pindah-ruangan.jpg')}}" class="card-img-top" alt="..." loading="lazy">
                                        <h5 class="card-title">Pindah Ruangan</h5>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection