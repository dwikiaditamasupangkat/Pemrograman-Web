<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['kategori2'])) {
          //query SQL
          $kategori_del = $_GET['kategori2'];
          $query = "DELETE FROM daftar WHERE kategori = '$kategori_del'"; 

          //eksekusi query
          $result = mysqli_query(connection(),$query);

          if ($result) {
            $status = 'Hilang';
          }
          else{
            $status = 'Tidak';
          }

          //redirect ke halaman lain
          header('Location: input-kategori.php?status='.$status);
      }  
  }