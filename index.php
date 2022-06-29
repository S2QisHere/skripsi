<?php
session_start();
include_once('database/koneksi.php');
include_once('utils/tanggal.php');

if (isset($_SESSION['id'])) {
    include_once('partials/header.php');
    include_once('partials/navbar.php');
    if ($_SESSION['level'] === 'ADMIN') include_once('partials/sidebar_admin.php');
    else if ($_SESSION['level'] === 'KLIEN') include_once('partials/sidebar_klien.php');
    if (isset($_GET['page'])) {
        if ($_GET['page'] === 'konsep') include_once('master_data/konsep/tampil.php');
        else if ($_GET['page'] === 'talent') include_once('master_data/talent/tampil.php');
        else if ($_GET['page'] === 'equipment') include_once('master_data/equipment/tampil.php');
        else if ($_GET['page'] === 'produksi') include_once('master_data/produksi/tampil.php');
        else if ($_GET['page'] === 'pengajuan') include_once('pengajuan/tampil.php');
        else if ($_GET['page'] === 'klien') include_once('data_klien/tampil.php');
        else if ($_GET['page'] === 'tambah_klien') include_once('data_klien/tambah.php');
        else if ($_GET['page'] === 'edit_klien') include_once('data_klien/edit.php');
        else if ($_GET['page'] === 'hapus_klien') include_once('data_klien/hapus.php');
        else include_once('dashboard.php');
    } else include_once('dashboard.php');
    include_once('partials/footer.php');
} else {
    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'register') {
            include_once "halaman_auth/register.php";
            exit;
        }
        include_once "halaman_auth/login.php";
        exit;
    }
    header('Location: portfolio.php');
    exit;
}
