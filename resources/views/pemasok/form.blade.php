<!-- Modal -->
<div class="modal fade" id="modalFrompemasok" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Form pemasok</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form method="POST" action="pemasok">
        @csrf
        <div id="method"></div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-3 col-form-label">Nama Pemasok</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="nama_pemasok" value=" " name="nama_pemasok">
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