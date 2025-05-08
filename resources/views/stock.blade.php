<h2 style="text-align: center;">Stok Darah</h2>

<table class="table table-bordered table-stripped mt-3" id="table">
    <thead>
        <tr>
            <th>No</th>
            <th style="text-align: center;">Lokasi</th>
            <th style="text-align: center;">Jenis Darah</th>
            <th style="text-align: center;">Jumlah Stok</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataStock as $stock)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td style="text-align: center;">{{ $stock->Lokasi }}</td>
            <td style="text-align: center;">{{ $stock->Jenis_Darah }}</td>
            <td style="text-align: center;">{{ $stock->Jumlah_Stok }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
