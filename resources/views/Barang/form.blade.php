<!-- Modal -->
<div class="modal fade" id="modalFromBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Form Barangs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form method="POST" action="barang">
        @csrf
        <div id="method"></div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Kode_barang</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="kode_barang" value=" " name="kode_barang">
    </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">ID</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="produk_id" value=" " name="produk_id">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">barang</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="nama_barang" value=" " name="nama_barang">
    </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Satuan</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="satuan" value=" " name="satuan">
    </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Harga</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="harga" value=" " name="harga">
    </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Stok</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="stok" value=" " name="stok">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Ditarik</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="ditarik" value=" " name="ditarik">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">User</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="user_id" value=" " name="user_id">
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