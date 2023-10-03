@extends('Home.home')
@push('style')
@endpush
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Barang</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <!-- Button trigger modal -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{session('success')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <ul>
        @foreach($errors -> all() as $error)
        <li>
          {{$error}}
        </li>
        @endforeach
      </ul>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFromBarang">
      Tambah Barang
    </button>
    @include('Barang.data')
  </div>
  <!-- /.card-body -->
  <div class="card-footer">Footer</div>
  <!-- /.card-footer-->
  @include('Barang.form')
</div>
<!-- /.card -->

@endsection


@push('script')
<script>
  $('.alert-success').fadeTo(2000, 500).slideUp(500, function() {
    $('.alert-success').slideUp(500)
  });

  $('.alert-danger').fadeTo(1000, 500).slideUp(500, function() {
    $('.alert-danger').slideUp(500)
  });


  $('#data-Barang').DataTable()


  $('.btn-delete').on('click', function(e) {
    let kode_barang = $(this).closest('tr').find('td:eq(0)').text();
    swal.fire({
      icon: 'error',
      title: 'Hapus Data',
      html: `pakah Data <b>${kode_barang}<b> akan dihapus?`,
      confirmButtonText: 'Ya',
      denyButtonText: 'tidak',
      showDenyButton: true,
      focusConfirm: false
    }).then((result) => {
      if (result.isConfirmed) $(e.target).closest('form').submit()
      else swal.close();
    })
  })

  $('#modalFromBarang').on('show.bs.modal', function(e) {
    const btn = $(e.relatedTarget)
    console.log(btn.data('mode'))
    const mode = btn.data('mode')
    const kode_barang = btn.data('kode_barang')
    const produk_id = btn.data('produk_id')
    const nama_barang = btn.data('nama_barang')
    const satuan = btn.data('satuan')
    const harga = btn.data('harga')
    const stok = btn.data('stok')
    const ditarik = btn.data('ditarik')
    const user_id = btn.data('user_id')
    const id = btn.data('id')
    const modal = $(this)
    if (mode == 'edit') {
      modal.find('.modal-title').text('Edit Data Produk')
      modal.find('#kode_barang').val(kode_barang)
      modal.find('#produk_id').val(produk_id)
      modal.find('#nama_barang').val(nama_barang)
      modal.find('#satuan').val(satuan)
      modal.find('#harga').val(harga)
      modal.find('#stok').val(stok)
      modal.find('#ditarik').val(ditarik)
      modal.find('#user_id').val(user_id)
      modal.find('.modal-body form').attr('action', '{{ url("barang")}}/' + id)
      modal.find('#method').html('@method("PATCH")')
    } else {
      modal.find('.modal-title').text('input Data barang')
      modal.find('#kode_barang').val('')
      modal.find('#produk_id').val('')
      modal.find('#nama_barang').val('')
      modal.find('#satuan').val('')
      modal.find('#harga').val('')
      modal.find('#stok').val('')
      modal.find('#ditarik').val('')
      modal.find('#user_id').val('')
      modal.find('#method').html('')
      modal.find('.modal-body form').attr('action', '{{url("barang")}}')
    }
  })
</script>
@endpush