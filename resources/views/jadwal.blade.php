<h2 style="text-align: center;">Jadwal Donor Darah</h2>

<table class="table table-bordered table-stripped mt-3" id="table">
    <thead>
        <tr>
            <th>No</th>
            <th style="text-align: center;">Lokasi</th>
            <th style="text-align: center;">Alamat</th>
            <th style="text-align: center;">Jam Mulai</th>
            <th style="text-align: center;">Jam Selesai</th>
            <th style="text-align: center;">Peruntukan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataJadwal as $jadwal)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td style="text-align: center;">{{ $jadwal->Lokasi }}</td>
            <td style="text-align: center;">{{ $jadwal->Alamat }}</td>
            <td style="text-align: center;">{{ $jadwal->Jam_Mulai }}</td>
            <td style="text-align: center;">{{ $jadwal->Jam_Selesai }}</td>
            <td style="text-align: center;">{{ $jadwal->Peruntukan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
