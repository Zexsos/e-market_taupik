<table class="table table-compact table-stripped" id="tbl-pemasok">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Pemasok</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pemasok as $p)
        <tr>
            <td>{{$i = !isset($i)?$i=1:++$i}}</td>
            <td>{{ $p->nama_pemasok}}</td>
            <td>
            <button type="button" class="btn" data-toggle="modal" data-target="#modalFrompemasok" data-mode="edit"
            data-id = "{{$p -> id}}"
            data-nama_pemasok="{{$p->nama_pemasok }}">
            <i class="fas fa-edit"></i></button>

        <form method="POST" action="pemasok/{{ $p->id }}" style="display:inline">
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