<?php
require('../database/koneksi.php');
include_once('../utils/tanggal.php');
?>

<head>
    <link rel="stylesheet" type="text/css" href="../assets/print.php">
    <style>
        table {
            font-size: 14px;

        }

        table,
        th,
        td {
            border-collapse: collapse;
        }

        thead {
            font-size: 16px;
        }

        .judul h3,
        h2,
        p {
            text-align: center;
            margin: 5px 0 5px 0;
        }

        .form-inline img {

            display: inline-block;
        }

        h2 {
            font-size: 30px;
        }

        .kop tr td {
            text-align: center;
            border: 2px solid white;
            border-collapse: collapse;
        }

        .gambar {
            margin-right: 10px;
        }

        .isi tr td {
            padding-left: 5px;
            padding-right: 5px;
        }

        .ttd {
            text-align: center;
            display: inline-block;
            float: right;
        }
    </style>

    <script>
        window.print();
    </script>
    <title>Cetak Data Klien</title>
</head>

<div class="container-fluid">
    <center>
        <table class="kop">
            <tr style="margin-bottom: 10px;">
                <td><img src="../assets/img/logo.png" height="90" alt="" class="gambar"></td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold;">Jl. Ir. PM. Noor Kel. Sungai Ulin Kecamatan Banjarbaru utara Kota Banjarbaru - 70714</td>
            </tr>
            <tr>
                <td style="font-size: 15px; font-weight: bold;">Telp (0511) 4772335</td>
            </tr>
        </table>

        <hr size="2px" color="black" style="margin-bottom: 1px;">
        <hr size="2px" color="black" style="margin-top: 1px;">
        <center>
            <table class="kop">

                <td style="font-size: 30px; font-weight: bold;">Data Klien</td>
            </table>
        </center>
        <hr size="2px" color="black" style="margin-top: 1px;">
        <dv>

            <table border="1" style="width: 100%;">
                <thead>
                    <th>No</th>
                    <th>Tanggal Terdaftar</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Username</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($conn, "  SELECT 
                    tb_klien.*,
                    tb_user.username 
                FROM 
                    tb_klien 
                INNER JOIN 
                    tb_user 
                ON 
                    tb_user.id=tb_klien.id_user");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <tr class="gradeA">
                            <td align="center"><?= $no++ ?></td>
                            <?php
                            $eng_date = explode('-', explode(' ', $data['tanggal_terdaftar'])[0]);
                            $tanggal = $eng_date[2];
                            $bulan = $eng_date[1];
                            $tahun = $eng_date[0];
                            ?>
                            <td style="text-align: center;"><?= $tanggal . " " . $BULAN_DALAM_INDONESIA[$bulan - 1] . " " . $tahun ?></td>
                            <td style="text-align: center;"><?= $data['nik']; ?></td>
                            <td style="text-align: center;"><?= $data['nama_lengkap']; ?></td>
                            <td style="text-align: center;"><?= $data['nomor_telepon']; ?></td>
                            <td style="text-align: center;"><?= $data['email']; ?></td>
                            <td style="text-align: center;"><?= $data['username']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <br>
            <br>
            <br>
            <table width="100%" align="right">
                <tr>
                    <th widht="20%"></th>
                    <th widht="20%"></th>
                    <th widht="20%"></th>
                    <th widht="20%"></th>
                    <th widht="20%"></th>
                </tr>
                <tr>
                    <th colspan="5" width="40%"></th>
                    <th colspan="2" align="right"> </th>
                    <th colspan="2" align="right"></th>
                </tr>
                <tr>
                    <th colspan="5" width="70%" align="right"></th>
                    <th colspan="5" width="70%" align="right"></th>
                    <th colspan="1"></th>
                </tr>
                <tr>
                    <th colspan="5" width="60%" align="center"></th>
                    <th colspan="1" width="80%" align="centar">ADMIN</th>
                </tr>
                <tr>
                    <th colspan="5" width="60%" align="right"><br><br><br><br></th>
                    <th colspan="1" width="80%" align="right"></th>
                </tr>
                <tr>
                    <th colspan="5" width="60%" align="right"></th>
                    <th colspan="1" width="80%" align="right"></th>
                </tr>
                <tr>
                    <th colspan="5" width="60%" align="right"></th>
                    <th colspan="1" width="80%" align="right"></th>
                </tr>
                <tr>
                    <th colspan="5" width="60%" align="right"></th>
                    <th colspan="1" width="80%" align="right"></th>
                </tr>
                <tr>
                    <th colspan="5" width="60%" align="right"></th>
                    <th colspan="1" width="80%" align="right"></th>
                </tr>
                <tr>
                    <th colspan="5" width="60%" align="right"></th>
                    <th colspan="1" width="80%" align="right"></th>
                </tr>
                <tr>
                    <th colspan="5" width="60%" align="right"></th>
                    <th colspan="1" width="80%" align="right"></th>
                </tr>
                <tr>
                    <th colspan="5" width="60%" align="center"><u></u></th>
                    <th colspan="1" width="80%" align="center"><u>Muhammad Syafiq</u></th>
                </tr>
                <tr>
                    <th colspan="5" width="60%" align="right"></th>
                    <th colspan="1" width="80%" align="centar"></th>
                </tr>
                <tr>
                    <th colspan="5" width="60%" align="right"></th>
                    <th colspan="1" width="80%" align="centar">NPM. 18630089</th>
                </tr>
            </table>


</div>
</div>