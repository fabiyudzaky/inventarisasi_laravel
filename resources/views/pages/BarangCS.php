<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<h2 class="fs-3 text-center mb-5 mt-5"> Input Barang Berlebih</h2>

<!-- tombol kembali ke halaman sebelumnya -->
<div class="container d-flex flex-column align-items-start">
    <a href="/Inventarisasi/pindah" class="btn btn-primary my-4">
        <i class="bi bi-box-arrow-left "></i>
        Kembali
    </a>
</div>

<!-- bagian menampilkan ruangan dan pengurus -->

<?= csrf_field(); ?>

<div class="container d-flex flex-row">
    <div class="row justify-content-between ms-3 me-4 my-4 w-100">
        <div class="col-5">
            <!-- kolom kiri -->
            <div class="col-12 d-flex flex-row">
                <label for="Ruangan" class="col-form-label w-25">Ruangan</label>
                <input type="text" readonly class="form-control">
            </div>

        </div>

        <div class="col-6">
            <!-- kolom kanan -->
            <div class="col-12 d-flex flex-row">
                <label for="PengurusBarang" class="col-form-label w-25 me-1">Pengurus Barang</label>
                <input type="text" class="form-control ">
            </div>
        </div>

    </div>
</div>


<!-- tombol tambah dan edit -->
<div class="container d-flex flex-column">
    <div class="row d-flex my-4">
        <div class="col-12">
            <a href="/Inventarisasi/inputCS" class="btn btn-success">
                <i class="bi bi-box-arrow-left "></i>
                Tambah Data
            </a>
            <a href="" class="btn btn-warning">
                Edit
            </a>
        </div>
    </div>
</div>


<!-- tabel berisi barangnya -->
<div class="container d-flex flex-column">
    <div class="table-responsive mt-5 ms-1 me-5">
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Nomer Register</th>
                <th>Kode dan Nama Barang</th>
                <th>NUP</th>
                <th>Uraian Barang</th>
                <th>Tanggal Perolehan</th>
                <th>Keterangan</th>
                <th>Kondisi</th>

            </thead>

            <tbody>
                <?php $i; ?>
                <!--baris tabel  -->
                <tr>
                    <!-- isi dari tiap kolom. mengisinya dari kiri ke kanan -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
            </tbody>
        </table>

    </div>

</div>



<?= $this->endSection(); ?>