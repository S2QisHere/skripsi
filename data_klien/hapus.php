<?php


if (isset($_GET['id'])) {
    $query = "SELECT 
                tb_klien.*,
                tb_user.id AS id_user,
                tb_user.username,
                tb_user.password 
            FROM 
                tb_klien 
            INNER JOIN 
                tb_user 
            ON 
                tb_user.id=tb_klien.id_user";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    if ($conn->query("DELETE FROM tb_klien WHERE id=" . $row['id']) && $conn->query("DELETE FROM tb_user WHERE id=" . $row['id_user'])) {
        echo "<script>alert('Data dan akun klien berhasil dihapus!');</script>";
        echo "<script>window.location.href = '?page=klien';</script>";
    }
}
