<!-- Tambah Tagihan -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="model-8" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <!-- Modal Content -->
        <div class="modal-content">

        <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="modal-title" id="model-8">Tambah Tagihan</h3>
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
                        <label for="recipient-name" class="col-form-label">Kode Tagihan :</label>
                        <input class="form-control" name="kode_tagihan" type="text">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nama Tagihan :</label>
                        <input class="form-control" name="nama_tagihan" type="text">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Nominal :</label>
                        <input class="form-control nominal" name="nominal" type="text">
                    </div>
                    <div class="form-group text-center">
                        <input name="cicilan" type="checkbox">
                        <label for="message-text" class="col-form-label">Tagihan dapat dicicil</label>
                    </div>
                </div>
                <!-- /modal body -->

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm show">Save changes</button>
                    <button type="submit" class="btn btn-primary btn-sm hide" disabled>Save changes</button>
                </div>
                <!-- /modal footer -->

            </form>
        </div>
        <!-- /modal content -->

    </div>
</div>
<!-- /modal -->