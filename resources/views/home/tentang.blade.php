@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-uppercase text-center my-1">Tentang Kami</h2>
                </div>

                <div class="card-body">

                    <div class="container d-flex justify-content-center">
                        <div class="col-12 col-lg-7">

                            <!-- Fauzan abiyyu dzaky -->
                            <div class="row my-3">
                                <div class="col-md-4">
                                    <img src="{{asset('images/user-svgrepo-com.svg')}}" class="img-fluid rounded-start mx-1 my-1 " alt="...">
                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title">Fauzan Abiyyu Dzaky</h5>
                                    <p class="card-text">Mahasiswa Teknik Informatika Universitas Dian Nuswantoro</p>
                                    <p class="card-text"> Temukan saya di :</p>

                                    <p class="card-text">
                                        <!-- github -->
                                        <a href="https://github.com/fabiyudzaky" class="mx-2 btn btn-dark">
                                            <i class="fab fa-github"></i>
                                        </a>

                                        <!-- telegram -->
                                        <a href="https://t.me/fabiyudzaky" class="mx-2 btn btn-primary">
                                            <i class="fab fa-telegram"></i>
                                        </a>
                                    </p>

                                    <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                                </div>
                            </div>

                            <div class="row my-3">
                                <div class="col-md-4">
                                    <img src="{{asset('images/user-svgrepo-com.svg')}}" class="img-fluid rounded-start mx-1 my-1 " alt="...">

                                </div>
                                <div class="col-md-8">
                                    <h5 class="card-title">Naufal Haidar Rauf</h5>
                                    <p class="card-text">Mahasiswa Teknik Informatika Universitas Dian Nuswantoro</p>
                                    <p class="card-text"> Temukan saya di :</p>

                                    <!-- social media link -->
                                    <p class="card-text">

                                        <!-- link akun github -->
                                        <a href="https://github.com/naufalHaidar12342" class="mx-2 btn btn-dark">
                                            <i class="fab fa-github"></i>
                                        </a>

                                        <!-- telegram -->
                                        <a href="https://t.me/heydar12342" class="mx-2 btn btn-primary">
                                            <i class="fab fa-telegram"></i>
                                        </a>
                                    </p>


                                    <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection