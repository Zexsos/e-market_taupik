<table class="table table-compact table-stripped" id="data-produk">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>stok</th>
            <th>jenis</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produk as $p)
        <tr>
            <td>{{$i = !isset($i)?$i=1:++$i}}</td>
            <td>{{ $p -> nama_produk}}</td>
            <td>{{ $p -> harga}}</td>
            <td>{{ $p -> stok}}</td>
            <td>{{ $p -> jenis}}</td>
            <td>
            <button type="button" class="btn" data-toggle="modal" data-target="#modalFromProduk" data-mode="edit"
            data-id = "{{$p -> id}}"
            data-nama_produk="{{$p->nama_produk }}"
            data-harga="{{$p->harga }}"
            data-stok="{{$p->stok }}" 
            data-jenis="{{$p->jenis }}">
            <i class="fas fa-edit"></i></button>

        <form method="POST" action="produk/{{ $p->id }}" style="display:inline">
    @csrf
    @method('DELETE')
     <button type="button" class="btn btn-danger btn-Delete" ><i class="fas fa-trash-alt"></i>
</button>
        </form>
         </td>
        </tr>
        @endforeach
    </tbody>
</table>