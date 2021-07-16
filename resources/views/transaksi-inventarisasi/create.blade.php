<!-- Tambah Barang -->
<div class="modal fade" id="tambah-modal" tabindex="-1" role="dialog" aria-labelledby="model-8" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <!-- Modal Content -->
        <div class="modal-content">

        <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="modal-title" id="model-8">Tambah Barang</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- /modal header -->

            <form action="{{route('transaksi-inventarisasi.store')}}" method="post">
                @csrf
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode_barang" class="col-form-label">Kode Barang :</label>
                        <input class="form-control" name="kode_barang" type="text">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang" class="col-form-label">Nama Barang :</label>
                        <input class="form-control" name="nama_barang" type="text">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_perolehan" class="col-form-label">Tanggal Perolehan :</label>
                        <input class="form-control nominal" name="tanggal_perolehan" type="date">
                    </div>
                    <div class="form-group">
                        <label for="keterangan" class="col-form-label">Keterangan :</label>
                        <input class="form-control nominal" name="keterangan" type="text">
                    </div>
                    <div class="form-group">
                        <label for="kondisi_id" class="col-form-label">Kondisi :</label>
                        <select name="kondisi_id" id="" class="form-control">
                            <option value="1">Baik</option>
                            <option value="2">Rusak Ringan</option>
                            <option value="3">Rusak Berat</option>
                        </select>
                    </div>
                    <input type="hidden" name="ruangan_id" value="{{$ruangan_id}}">
                </div>
                <!-- /modal body -->

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm show">Save changes</button>
                    <!-- <button type="submit" class="btn btn-primary btn-sm hide" disabled>Save changes</button> -->
                </div>
                <!-- /modal footer -->

            </form>
        </div>
        <!-- /modal content -->

    </div>
</div>
<!-- /modal -->