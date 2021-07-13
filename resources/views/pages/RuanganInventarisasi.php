<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Inventarisasi</title>

    <!-- css dari bootstrap. butuh koneksi internet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- icon dari bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<!-- isi halaman RuanganInventarisasi  -->
<h2 class="h2 text-uppercase fs-3 text-center mb-5 mt-5">Pilih Ruangan</h2>
<!-- card untuk pilih ruangan -->
<div class="row justify-content-center g-3">
    <!-- opsi customer service -->
    <div class="col-12 col-lg-4">
        <div class="card m-auto" style="width: 24rem;">
            <!-- source :https://www.pexels.com/photo/stack-of-books-in-shelf-256559/ -->
            <img src="/img/pexels-olha-ruskykh-7504860.jpg" class="card-img-top" alt="bagian-cs">
            <div class="card-body">
                <h5 class="card-title">Customer Service</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                <a href="/Inventarisasi/customerService" class="btn btn-primary">
                    Masuk
                    <i class="bi bi-box-arrow-in-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- opsi produksi -->
    <div class="col-12 col-lg-4">
        <div class="card m-auto" style="width: 24rem;">
            <img src="/img/pexels-cleyder-duque-3637786.jpg" class="card-img-top" alt="bagian-produksi">
            <div class="card-body">
                <h5 class="card-title">Produksi</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="/Inventarisasi/produksi" class="btn btn-primary">
                    Masuk
                    <i class="bi bi-box-arrow-in-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- opsi akuntansi -->
    <div class="col-12 col-lg-4 ">
        <div class="card m-auto" style="width: 24rem;">
            <img src="/img/pexels-tima-miroshnichenko-6693630.jpg" class="card-img-top" alt="bagian-akuntansi">
            <div class="card-body">
                <h5 class="card-title">Akuntansi</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="/Inventarisasi/akuntansi" class="btn btn-primary">
                    Masuk
                    <i class="bi bi-box-arrow-in-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- tombol kembali ke page sebelumnya -->
<div class="container d-flex flex-column align-items-center">
    <div class="row d-flex my-5">
        <div class="col-12">
            <a class="btn btn-primary" href="/">
                <i class="bi bi-box-arrow-left "></i>
                Kembali
            </a>
        </div>

    </div>

</div>



<?= $this->endSection(); ?>