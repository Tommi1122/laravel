<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div style="padding-left: 100px; padding-right:100px; height:80%">
    <br>
    <div class="header">
        <div class="header-tittle">
            <h3>Edit Data Buku</h3>
            <p>List buku yang tersedia di perpustakaan</p>
        </div>
        <div class="header-back">
            <button class="btn btn-dark" onclick="history.back()">Kembali</button>
        </div>
    </div>
    <form method="POST" action="/editbuku">
        @csrf
        @foreach ($buku as $data_buku)
        <input type="hidden" name="id" value="{{ $data_buku->id }}">
        <label for="name">Nama</label><br>
        <input type="text" name="name" id="name" value="{{ $data_buku->nama_buku }}"><br>
        <label for="kategori">Kategori</label><br>
        <select name="kategori" id="kategori" placeholder="Anak - anak">
            <option value="Anak - anak" <?php if($data_buku->kategori_buku  == "Anak - anak") echo "Selected" ?>>Anak - anak</option>
            <option value="Ilmu Pengeteahuan Alam" <?php if($data_buku->kategori_buku  == "Ilmu Pengetahuan Alam") echo "Selected" ?>>Ilmu Pengetahuan Alam</option>
            <option value="Politik" <?php if($data_buku->kategori_buku  == "Politik") echo "Selected" ?>>Politik</option>
            <option value="Religi" <?php if($data_buku->kategori_buku  == "Religi") echo "Selected" ?>>Religi</option>
            <option value="Novel" <?php if($data_buku->kategori_buku  == "Novel") echo "Selected" ?>>Novel</option>
        </select><br>
        <label for="penerbit">Penerbit</label><br>
        <select name="penerbit" id="penerbit" placeholder="Bukunesia">
            <option value="Bukunesia" <?php if($data_buku->penerbit_buku  == "Bukunesia") echo "Selected" ?>>Bukunesia</option>
            <option value="Graha Ilmu" <?php if($data_buku->penerbit_buku  == "Graha Ilmu") echo "Selected" ?>>Graha Ilmu</option>
            <option value="Al Hayat" <?php if($data_buku->penerbit_buku  == "Al Hayat") echo "Selected" ?>>Al Hayat</option>
            <option value="Deep Publish" <?php if($data_buku->penerbit_buku  == "Deep Publlish") echo "Selected" ?>>Deep Publish</option>
            <option value="Falcon Publishing" <?php if($data_buku->penerbit_buku  == "Falcon Publishing") echo "Selected" ?>>Falcon Publishing</option>
            <option value="Kata Depan" <?php if($data_buku->penerbit_buku  == "Kata Depan") echo "Selected" ?>>Kata Depan</option>
        </select><br>
        <table>
            <tr>
                <td><label for="tahunBuku">Tahun Buku</label></td>
                <td class="padding-left-30"><label for="stockBuku">Jumlah Stock Buku</label></td>
            <tr>
            <tr>
                <td><input type="number" name="tahunBuku" id="tahunBuku" value="{{ $data_buku->tahun_buku }}"></td>
                <td class="padding-left-30"><input type="number" name="stockBuku" id="stockBuku" value="{{ $data_buku->jumlah_buku }}"></td>
            </tr>
        </table>
        @endforeach
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