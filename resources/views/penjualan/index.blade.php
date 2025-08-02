<h1>Data Penjualan</h1>
<table>
    <thead class="table-dark">
            <tr>
                <th>Nama produk</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Harga produk</th>
                <th>Jumlah stok</th>
                <th>Foto Produk</th>
                <th>Foto KTP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penjualans as $penjualan)
                <tr>
                    <td>{{$penjualan->nama_produk}}</td>
                    <td>{{$penjualan->alamat}}</td>
                    <td>{{$penjualan->no_hp}}</td>
                    <td>{{$penjualan->stok_gabah}}</td>
                    <td>Rp {{number_format($penjualan->harga_produk, 0,)}}</td>
                    <td>
                        @if($penjualan->image_produk)
                            <img src="{{asset('storage/' . $penjualan->image_produk)}}" width="60" alt="Foto Produk">
                        @else
                            <span class="text-muted">Tidak ada foto</span>
                        @endif
                    </td>
                    <td>
                        @if($penjualan->image_ktp)
                            <img src="{{asset('storage/' . $penjualan->image_ktp)}}" width="60" alt="Foto KTP">
                        @else
                            <span class="text-muted">Tidak ada foto</span>
                        @endif
                    </td>
                    {{-- <td>
                        <a href="{{route('penjualan.edit', $penjualan->id)}}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{route('penjualan.destroy', $penjualan->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
        <a href="/penjualan/create" class="btn btn-primary">Tambah Data</a>
    </table>