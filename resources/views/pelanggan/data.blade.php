<table class="table table-compact table-stripped" id="data-pelanggan">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode</th>
            <th>Nama Pelanggan</th>
            <th>alamat</th>
            <th>NO-Email</th>
            <th>Email</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pelanggan as $p)
        <tr>
            <td>{{$i = !isset($i)?$i=1:++$i}}</td>
            <td>{{ $p -> kode_pelanggan}}</td>
            <td>{{ $p -> nama}}</td>
            <td>{{ $p -> alamat}}</td>
            <td>{{ $p -> no_email}}</td>
            <td>{{ $p -> email}}</td>
            <td>
            <button type="button" class="btn" data-toggle="modal" data-target="#modalFromPelanggan" data-mode="edit"
            data-id = "{{$p -> id}}"
            data-kode_pelanggan="{{$p->kode_pelanggan }}"
            data-nama="{{$p->nama }}"
            data-alamat="{{$p->alamat }}" 
            data-no_email="{{$p->no_email }}"
            data-email="{{$p->email }}"
            
            >
            <i class="fas fa-edit"></i></button>

        <form method="POST" action="pelanggan/{{ $p->id }}" style="display:inline">
    @csrf
    @method('DELETE')
     <button type="button" class="btn btn-danger btn-delete" ><i class="fas fa-trash-alt"></i>
</button>
        </form>
         </td>
        </tr>
        @endforeach
    </tbody>
</table>