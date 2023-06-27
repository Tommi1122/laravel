<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!DOCTYPE html>
<html>

<head>
    <title>Responsi 1 Pemrograman Web Lanjut</title>
</head>

<style>
    .navbar {
        background-color: #000;
    }

    .navbar ul {
        list-style-type: none;
        margin: 0;
        padding: 15px;
        overflow: hidden;
    }

    .navbar ul li {
        float: left;
    }

    .navbar ul li a {
        display: block;
        padding: 8px;
        color: white;
    }

    footer p {
        background-color: #000;
        padding: 10px;
        color: white;
    }

    footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
    }
</style>

<body>
    <div class="navbar">
        <ul>
            <li><a href="<?php echo url('/home') ?>">Home</a></li>
            <li><a href="<?php echo url('/buku') ?>">Data Buku</a></li>
            <li><a href="<?php echo url('/pegawai') ?>">Data Pegawai</a></li>
            <li><a href="<?php echo url('/tentang') ?>">Tentang Kami</a></li>
            <li><a href="<?php echo url('/kontak') ?>">Kontak</a></li>
            <li><a href="<?php echo url('/logout') ?>">Logout</a></li>
        </ul>
    </div>

    <!-- bagian judul halaman blog -->
    @yield('judul_halaman')

    <!-- bagian konten blog -->
    @yield('konten')

    <footer style="text-align: center;">
        <p>Modul praktikum pemrograman web lanjut &copy; <b><i>2023</i></b></p>
    </footer>
</body>

</html>