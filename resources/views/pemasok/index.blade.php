@extends('Home.home')
@push('style')
@endpush
@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">pemasok</h3>

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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFrompemasok">
      Tambah pemasok
    </button>
    @include('pemasok.data')
  </div>
  <!-- /.card-body -->
  <div class="card-footer">Footer</div>
  <!-- /.card-footer-->
  @include('pemasok.form')
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


  $('#tbl-pemasok').DataTable()


  $('.btn-delete').on('click', function(e) {
    let nama_pemasok = $(this).closest('tr').find('td:eq(0)').text();
    swal.fire({
      icon: 'error',
      title: 'Hapus Data',
      html: `pakah Data <b>${nama_pemasok}<b> akan dihapus?`,
      confirmButtonText: 'Ya',
      denyButtonText: 'tidak',
      showDenyButton: true,
      focusConfirm: false
    }).then((result) => {
      if (result.isConfirmed) $(e.target).closest('form').submit()
      else swal.close();
    })
  })

  $('#modalFrompemasok').on('show.bs.modal', function(e) {
    const btn = $(e.relatedTarget)
    console.log(btn.data('mode'))
    const mode = btn.data('mode')
    const kode_barang = btn.data('nama_pemasok')
    const id = btn.data('id')
    const modal = $(this)
    if (mode == 'edit') {
      modal.find('.modal-title').text('Edit Data pemasok')
      modal.find('#nama_pemasok').val(nama_pemasok)
      modal.find('.modal-body form').attr('action', '{{ url("pemasok")}}/' + id)
      modal.find('#method').html('@method("PATCH")')
    } else {
      modal.find('.modal-title').text('input Data pemasok')
      modal.find('#nama_pemasok').val('')
      modal.find('#method').html('')
      modal.find('.modal-body form').attr('action', '{{url("pemasok")}}')
    }
  })
</script>
@endpush