<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div style="padding-left: 100px; padding-right: 100px; height:80%">
    <br>
    <div class="header">
        <div class="header-tittle">
            <h3>Data Buku</h3>
            <p>List Buku yang ada di perpustakaan</p>
        </div>
        <div class="header-add">
            <button class="btn btn-primary" onclick="window.location.href='/tambahbuku'">Tambah Buku</button>
        </div>
    </div>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Buku</th>
            <th>Kategori</th>
            <th>Penerbit</th>
            <th>Tahun Buku</th>
            <th>Jumlah Buku</th>
            <th>Action</th>
        </tr>
        <?php $i = 1; ?>
        @foreach($buku as $data_buku)
        <tr>
            <td>{{ $data_buku->id }}</td>
            <td>{{ $data_buku->nama_buku }}</td>
            <td>{{ $data_buku->kategori_buku }}</td>
            <td>{{ $data_buku->penerbit_buku }}</td>
            <td>{{ $data_buku->tahun_buku }}</td>
            <td>{{ $data_buku->jumlah_buku }}</td>
            <td>
                <button class="btn btn-primary" onclick="window.location.href='/buku/edit/{{ $data_buku->id }}'">Edit</button></a>
                <button class="btn btn-primary" onclick="window.location.href='/buku/delete/{{ $data_buku->id }}'">Delete</button></a>
            </td>
        </tr>
        <?php $i++; ?>
        @endforeach
    </table><br>
    Halaman : {{ $buku->currentPage() }} <br />
    Jumlah Data : {{ $buku->total() }} <br />
    Data Per Halaman : {{ $buku->perPage() }} <br /><br>
    {{ $buku->links() }}

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

    .header {
        content: "";
        display: table;
        clear: both;
        width: 100%;
    }

    .header-tittle {
        float: left;
        width: 50%;
        padding: 10px;
    }

    .header-add {
        padding-top: 35px;
        height: 100%;
    }
</style>



@endsection