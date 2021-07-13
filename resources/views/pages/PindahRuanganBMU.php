<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<!-- heading/tulisan sebagai judul -->
<h2 class="fs-3 text-center mb-5 mt-5"> Pindah Ruangan BMU</h2>

<!-- tombol kembali ke halaman pilih aksi -->
<div class="container d-flex flex-column align-items-start">
    <a href="/Inventarisasi/index" class="btn btn-primary my-4">
        <i class="bi bi-box-arrow-left "></i>
        Kembali
    </a>
</div>

<!-- form untuk menampilkan nama ruangan, dsb -->
<div class="container d-flex flex-column">
    <div class="row justify-content-between ms-3 me-4 my-4 w-100">
        <div class="col-5">
            <div class="col-12 d-flex flex-row mb-4">
                <!-- ruangan asal -->
                <label for="ruanganAsal" class="w-25 col-form-label">Ruangan Asal</label>
                <input type="text" name="ruangan-asal" id="ruangan-asal" class="form-control ms-2">

            </div>

            <div class="col-12 d-flex flex-row mb-4">
                <!-- ruangan tujuan -->
                <label for="ruanganTujuan" class="w-25 col-form-label">Ruangan Tujuan</label>
                <input type="text" name="ruangan-tujuan" id="ruangan-tujuan" class="form-control ms-2">
            </div>

        </div>

        <div class="col-5">
            <div class="col-12 d-flex flex-row mb-4">
                <!-- ruangan asal -->
                <label for="pengirim" class="w-25 col-form-label">Pengirim</label>
                <input type="text" name="pengirim" id="" class="form-control ms-2">

            </div>

            <div class="col-12 d-flex flex-row mb-4">
                <!-- ruangan tujuan -->
                <label for="penerima" class="w-25 col-form-label">Penerima</label>
                <input type="text" name="penerima" id="penerima" class="form-control ms-2">
            </div>
        </div>
    </div>
</div>

<!-- tombol tambah dan edit -->
<div class="container d-flex flex-column">
    <div class="row d-flex my-4">
        <div class="col-12">
            <a href="" class="btn btn-success">
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
                <?php $i = 1; ?>
                <!--baris tabel  -->
                <tr>
                    <!-- isi dari tiap kolom. mengisinya dari kiri ke kanan -->
                    <td>1</td>
                    <td>129191919</td>
                    <td>LAP23-Laptop 24 inch</td>
                    <td>898989</td>
                    <td>Laptop</td>
                    <td>29/01/2021</td>
                    <td>Warna Hitam</td>
                    <td>Baik</td>

                </tr>
            </tbody>
        </table>

    </div>

</div>



<?= $this->endSection(); ?>