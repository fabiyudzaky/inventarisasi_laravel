@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-uppercase text-center my-1">Menu Daftar Inventaris Ruangan</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- card untuk pilih ruangan -->
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-12 text-center mb-3">
                            <a href="{{route('home')}}" class="btn btn-lg btn-danger"><i class="fas fa-home"></i> Home</a>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card m-auto">
                                <a href="{{route('dir')}}" class="">
                                    <div class="card-body text-center">
                                        <img src="{{asset('images/ruang-kantor.jpg')}}" class="card-img-top" alt="<a href='https://www.freepik.com/vectors/business'>Business vector created by macrovector - www.freepik.com</a>" loading="lazy">
                                        <h5 class="card-title">Ruangan Kantor</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card m-auto">
                                <a href="{{route('dir')}}" class="">
                                    <div class="card-body text-center">
                                        <img src="{{asset('images/gudang-listrik.jpg')}}" class="card-img-top" alt="<a href='https://www.freepik.com/vectors/business'>Business vector created by macrovector - www.freepik.com</a>" loading="lazy">
                                        <h5 class="card-title">Gudang Listrik</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card m-auto">
                                <a href="{{route('dir')}}" class="">
                                    <div class="card-body text-center">
                                        <img src="{{asset('images/gudang-atk.jpg')}}" class="card-img-top" alt="<a href='https://www.freepik.com/vectors/business'>Business vector created by macrovector - www.freepik.com</a>" loading="lazy">
                                        <h5 class="card-title">Gudang ATK</h5>
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