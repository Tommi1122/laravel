<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div style="padding-left: 100px; padding-right:100px; height:80%">
    <br>
    <div class="header">
        <div class="header-tittle">
            <h3>Tambah Data Buku</h3>
            <p>Masukkan data buku yang ingin ditambahkan</p>
        </div>
        <div class="header-back">
            <button class="btn btn-dark" onclick="history.back()">Kembali</button>
        </div>
    </div>
    <form method="POST" action="/insertbuku">
        @csrf
        <label for="name">Nama</label><br>
        <input type="text" name="name" id="name" placeholder="Nama Buku"><br>
        <label for="kategori">Kategori</label><br>
        <select name="kategori" id="kategori" placeholder="Anak - anak">
            <option value="Anak - anak">Anak - anak</option>
            <option value="Ilmu Pengeteahuan Alam">Ilmu Pengetahuan Alam</option>
            <option value="Politik">Politik</option>
            <option value="Religi">Religi</option>
            <option value="Novel">Novel</option>
        </select><br>
        <label for="penerbit">Penerbit</label><br>
        <select name="penerbit" id="penerbit" placeholder="Bukunesia">
            <option value="Bukunesia">Bukunesia</option>
            <option value="Graha Ilmu">Graha Ilmu</option>
            <option value="Al Hayat">Al Hayat</option>
            <option value="Deep Publish">Deep Publish</option>
            <option value="Falcon Publishing">Falcon Publishing</option>
            <option value="Kata Depan">Kata Depan</option>
        </select><br>
        <table>
            <tr>
                <td><label for="tahunBuku">Tahun Buku</label></td>
                <td class="padding-left-30"><label for="stockBuku">Jumlah Stock Buku</label></td>
            <tr>
            <tr>
                <td><input type="number" name="tahunBuku" id="tahunBuku" placeholder="2007"></td>
                <td class="padding-left-30"><input type="number" name="stockBuku" id="stockBuku" placeholder="7"></td>
            </tr>
        </table>
        @if ($errors->any())
        <br>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <input class="btn btn-primary margin-top-25" type="submit" name="submit" id="submit" value="Simpan Data">
    </form>


</div>
<style>
    .padding-left-30 {
        padding-left: 30px;
    }

    .margin-top-25 {
        margin-top: 25px;
    }

    label {
        padding-top: 10px;
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

    .header-back {
        padding-top: 35px;
        height: 100%;
    }

    input,
    select {
        width: 250px;
    }
</style>



@endsection