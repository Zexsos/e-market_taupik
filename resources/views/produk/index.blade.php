@extends('Home.home')
@push('style')
@endpush
@section('content')
<div class="card">
            <div class="card-header">
              <h3 class="card-title">produk</h3>

              <div class="card-tools">
                <button
                  type="button"
                  class="btn btn-tool"
                  data-card-widget="collapse"
                  title="Collapse"
                >
                  <i class="fas fa-minus"></i>
                </button>
                <button
                  type="button"
                  class="btn btn-tool"
                  data-card-widget="remove"
                  title="Remove"
                >
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalFromProduk">
            Tambah produk 
            </button>
            @include('produk.data')
            </div>
            <!-- /.card-body -->
            <div class="card-footer">Footer</div>
            <!-- /.card-footer-->
            @include('produk.form')
          </div>
          <!-- /.card -->

@endsection


@push('script')
<script>
  $('.alert-success').fadeTo (2000,500).slideUp(500,function(){
    $('.alert-success').slideUp(500)
  });

  $('#error-alert').fadeTo(10000,500).slideUp(500, function(){
    $('#error-alert').slideUp(500)
  });

 
   $('#data-produk').DataTable()
  

   $('.btn-Delete').on('click',function(e){
    let nama_produk = $(this).closest('tr').find('td:eq(0)').text();
    swal.fire({
      icon :'error',
      title : 'Hapus Data',
      html: `pakah Data <b>${nama_produk}<b> akan dihapus?`,
      confirmButtonText:'Ya',
      denyButtonText : 'tidak',
      showDenyButton : true ,
      focusConfirm : false
    }).then((result) =>{
      if(result.isConfirmed) $(e.target).closest('form').submit()
      else swal.close();
    })
  })

  $('#modalFromProduk').on('show.bs.modal', function(e){
    const btn = $(e.relatedTarget)
    console.log(btn.data('mode'))
    const mode = btn.data('mode')
    const nama_produk = btn.data('nama_produk')
    const harga = btn.data('harga')
    const stok = btn.data('stok')
    const jenis = btn.data('jenis')
    const id = btn.data('id')
    const modal = $(this)
    if(mode == 'edit'){
      modal.find('.modal-title').text('Edit Data Produk')
      modal.find('#nama_produk').val(nama_produk)
      modal.find('#harga').val(harga)
      modal.find('#stok').val(stok)
      modal.find('#jenis').val(jenis)
      modal.find('.modal-body form').attr('action','{{ url("produk")}}/'+id)
      modal.find('#method').html('@method("PATCH")')
    }else{
      modal.find('.modal-title').text('input Data Produk')
      modal.find('#nama_produk').val('')
      modal.find('#harga').val('')
      modal.find('#stok').val('')
      modal.find('#jenis').val('')
      modal.find('#method').html('')
      modal.find('.modal-body form').attr('action','{{url("produk")}}')
    }
  })

  </script>
@endpush