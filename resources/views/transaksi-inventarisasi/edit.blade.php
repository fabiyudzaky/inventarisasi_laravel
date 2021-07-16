<!-- Tambah Barang -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="model-8" aria-hidden="true">
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

            <form action=get_action() id="myFormId" method="POST" >
                @method('PATCH')
                @csrf
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="kode_barang" class="col-form-label">Kode Barang :</label>
                        <input class="form-control" id="kode_barang" name="kode_barang" type="text">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang" class="col-form-label">Nama Barang :</label>
                        <input class="form-control" id="nama_barang" name="nama_barang" type="text">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_perolehan" class="col-form-label">Tanggal Perolehan :</label>
                        <input class="form-control nominal" id="tanggal_perolehan" name="tanggal_perolehan" type="date">
                    </div>
                    <div class="form-group">
                        <label for="keterangan" class="col-form-label">Keterangan :</label>
                        <input class="form-control nominal" id="keterangan" name="keterangan" type="text">
                    </div>
                    <div class="form-group">
                        <label for="kondisi_id" class="col-form-label">Kondisi :</label>
                        <select id="kondisi_id" name="kondisi_id" class="form-control">
                            <option value="1">Baik</option>
                            <option value="2">Rusak Ringan</option>
                            <option value="3">Rusak Berat</option>
                        </select>
                    </div>
                    <input type="hidden" id="ruangan_id" name="ruangan_id" value="{{$ruangan->id}}">
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