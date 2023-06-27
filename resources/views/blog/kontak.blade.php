<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<p>Ini Adalah Halaman Kontak</p>

<table style="margin-left: auto; margin-right: auto">
    <tr>
        <td>Email</td>
        <td>:</td>
        <td>ardisetyo77@gmail.com</td>
    </tr>
    <tr>
        <td>Hp</td>
        <td>:</td>
        <td>0856-0407-3793</td>
    </tr>
</table>

@endsection