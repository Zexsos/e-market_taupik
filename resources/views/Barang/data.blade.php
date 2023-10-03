<table class="table table-compact table-stripped" id="data-Barang">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode</th>
            <th>ID</th>
            <th>Barang</th>
            <th>Satuan</th>
            <th>harga</th>
            <th>stok</th>
            <th>ditarik</th>
            <th>user</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Barang as $p)
        <tr>
            <td>{{$i = !isset($i)?$i=1:++$i}}</td>
            <td>{{ $p -> kode_barang}}</td>
            <td>{{ $p -> produk_id}}</td>
            <td>{{ $p -> nama_barang}}</td>
            <td>{{ $p -> satuan}}</td>
            <td>{{ $p -> harga}}</td>
            <td>{{ $p -> stok}}</td>
            <td>{{ $p -> ditarik}}</td>
            <td>{{ $p -> user_id}}</td>
            <td>
                <button type="button" class="btn" data-toggle="modal" data-target="#modalFromBarang" data-mode="edit" data-id="{{$p -> id}}" data-kode_barang="{{$p->kode_barang}}" data-produk_id="{{$p->produk_id}}" data-nama_barang="{{$p->nama_barang}}" data-satuan="{{$p->satuan}}" data-harga="{{$p->harga}}" data-stok="{{$p->stok}}" data-ditarik="{{$p->ditarik}}" data-user_id="{{$p->user_id}}">
                    <i class="fas fa-edit"></i></button>

                <form method="POST" action="barang/{{ $p->id }}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-delete"><i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>