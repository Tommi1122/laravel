<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div style="padding-left: 100px; padding-right: 100px">
    <br>
    <h3>Data Pegawai</h3>
    <p>List pegawai yang bekerja di perpustakaan</p>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Pegawai</th>
            <th>No Telfon</th>
            <th>Alamat</th>
            <th>Posisi</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; ?>
        @foreach($pegawai as $data_pegawai)
        <tr>
            <td>{{ $data_pegawai->id }}</td>
            <td>{{ $data_pegawai->nama_pegawai }}</td>
            <td>{{ $data_pegawai->telfon_pegawai }}</td>
            <td>{{ $data_pegawai->alamat_pegawai }}</td>
            <td>{{ $data_pegawai->posisi_pegawai }}</td>
            <td>
                <button class="btn btn-primary">Edit</button></a>
                <button class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        <?php $i++; ?>
        @endforeach
    </table><br>
    Halaman : {{ $pegawai->currentPage() }} <br />
    Jumlah Data : {{ $pegawai->total() }} <br />
    Data Per Halaman : {{ $pegawai->perPage() }} <br /><br>
    {{ $pegawai->links() }}

</div>
<style>
    th,
    td {
        border: 1px solid;
        padding: 5px;
    }

    table {
        border-collapse: collapse;
    }

    tr td {
        padding-right: 40px;
    }
</style>



@endsection