<?php
    session_start();
    include 'conn.php';
    include 'csrf.php';
    
    $tahun = stripslashes(strip_tags(htmlspecialchars($_POST['tahun'] ,ENT_QUOTES)));
    $jenis = stripslashes(strip_tags(htmlspecialchars($_POST['jenis'] ,ENT_QUOTES)));
    $nama_pendidikan = stripslashes(strip_tags(htmlspecialchars($_POST['nama_pendidikan'] ,ENT_QUOTES)));
    $tipe = stripslashes(strip_tags(htmlspecialchars($_POST['tipe'] ,ENT_QUOTES)));
    $deskripsi = stripslashes(strip_tags(htmlspecialchars($_POST['deskripsi'] ,ENT_QUOTES)));

    $query = "INSERT into pendidikan (tahun, jenis, nama_pendidikan, tipe, deskripsi) VALUES (?, ?, ?, ?, ?)";
    $result = $db1->prepare($query);
    $result->bind_param("sssss", $tahun, $jenis, $nama_pendidikan, $tipe, $deskripsi);
    $result->execute();
    
    echo json_encode(['success' => 'Sukses']);
    
    $db1->close();
?>