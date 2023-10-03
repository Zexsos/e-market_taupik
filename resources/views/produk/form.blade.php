<!-- Modal -->
<div class="modal fade" id="modalFromProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Form produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form method="POST" action="produk">
        @csrf
        <div id="method"></div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Nama Produk</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="nama_produk" value=" " name="nama_produk">
    </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Harga</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="harga" value=" " name="harga">
    </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">stok</label>
    <div class="col-sm-8">
      <input type="number" class="form-control" id="stok" value=" " name="stok">
    </div>
  </div>

  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Jenis</label>
    <div class="col-sm-8">
      <select name="jenis" id="jenis">
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
        <option value="Dll">Dll</option>
      </select>
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