<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<h2 class="h2 text-uppercase fs-3 text-center mb-5 mt-5 pt-4">Sistem Informasi Manajemen Aset</h2>

<form action="/Login/submit" method="post">
    <?= csrf_field(); ?>

    <div class="container d-flex flex-column align-items-center">
        <!-- baris untuk kode barang dan NUP SIMAK -->
        <div class="row justify-content-md-center my-4 w-50">
            <div class="col">
                <div class="col-12 d-flex flex-row mb-4">
                    <label for="username" class=" w-25 col-form-label">Username</label>
                    <input type="text" class="form-control ms-2" id="username" name="username">
                </div>
                <div class="col-12 d-flex flex-row mb-4">
                    <label for="password" class="w-25 col-form-label">Password</label>
                    <input type="password" class="form-control ms-2" id="password" name="password">
                </div>
            </div>
        </div>

        <!-- baris untuk tombol submit dan reset  -->
        <div class="row d-flex my-4">
            <div class="col-12">
                <button type="submit" class="btn btn-primary mx-2" name="submit">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    Masuk
                </button>

                <a href="/Login/signUp" class="btn btn-success mx-2">
                    <i class="bi bi-journal-album"></i>
                    Daftar Akun
                </a>
            </div>
        </div>

    </div>


</form>


<!-- <a href='https://www.freepik.com/free-photos-vectors/people'>People vector created by pch.vector - www.freepik.com</a> -->
<!-- JavaScript Bundle with Popper -->
<?= $this->endSection(); ?>