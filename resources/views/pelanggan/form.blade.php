<!-- Modal -->
<div class="modal fade" id="modalFromPelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Form Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="pelanggan">
          @csrf
          <div id="method"></div>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">KODE</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="kode_pelanggan" value=" " name="kode_pelanggan">
            </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Nama Pelanggan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama" value=" " name="nama">
            </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Alamat</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="alamat" value=" " name="alamat">
            </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">No Email</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" id="no_email" value=" " name="no_email">
            </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="email" value=" " name="email">
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>