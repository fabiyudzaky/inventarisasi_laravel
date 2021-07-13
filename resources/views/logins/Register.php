<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<h2 class="h2 text-uppercase fs-3 text-center mb-5 mt-5 pt-4">Daftarkan Akun Anda</h2>

<form action="/Login/register" method="post">
    <?= csrf_field(); ?>

    <div class="container d-flex flex-column align-items-center">
        <!-- baris untuk kode barang dan NUP SIMAK -->
        <div class="row justify-content-md-center my-4 w-50">
            <div class="col">
                <div class="col-12 d-flex flex-row mb-4">
                    <label for="full-name" class=" w-50 col-form-label">Nama Lengkap</label>
                    <input type="text" class="form-control ms-2" id="full-name" name="full-name">
                </div>
                <div class="col-12 d-flex flex-row mb-4">
                    <label for="username" class=" w-50 col-form-label">Username</label>
                    <input type="text" class="form-control ms-2" id="username" name="username">
                </div>
                <div class="col-12 d-flex flex-row mb-4">
                    <label for="password" class="w-50 col-form-label">Password</label>
                    <input type="password" class="form-control ms-2" id="password" name="password">
                </div>
                <div class="col-12 d-flex flex-row mb-4">
                    <label for="re-password" class="w-50 col-form-label">Retype Password</label>
                    <input type="password" class="form-control ms-2" id="re-password" name="re-password">
                </div>
            </div>
        </div>

        <!-- baris untuk tombol submit dan reset  -->
        <div class="row d-flex my-4">
            <div class="col-12">
                <button type="submit" class="btn btn-primary mx-2" name="submit">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    Submit
                </button>

                <button type="reset" class="btn btn-warning mx-2">
                    <i class="bi bi-arrow-counterclockwise"></i>
                    Reset
                </button>

                <a href="/Login" class="btn btn-danger mx-2">
                    <i class="bi bi-box-arrow-left"></i>
                    Back
                </a>
            </div>
        </div>

    </div>


</form>


<!-- <a href='https://www.freepik.com/free-photos-vectors/people'>People vector created by pch.vector - www.freepik.com</a> -->
<!-- JavaScript Bundle with Popper -->
<?= $this->endSection(); ?>