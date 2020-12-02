<?php
    session_start();
    include 'conn.php';
    include 'csrf.php';
    
    $id = $_POST['id'];
    
    $query = "DELETE FROM pendidikan WHERE id=?";
    $result = $db1->prepare($query);
    $result->bind_param("i", $id);
    $result->execute();
    
    echo json_encode(['success' => 'Sukses']);
    
    $db1->close();
?>