<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<div style="padding-left: 100px; height:80%">
    <br>
    <div class="header">
        <div class="header-tittle">
            <h3>Home</h3>
            <p>Selamat datang {{ Session::get('email') }}</p>
        </div>
    </div>
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