<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['sku'])) {
          //query SQL
          $sku_del = $_GET['sku'];
          $query = "DELETE FROM barang WHERE sku = '$sku_del'"; 

          //eksekusi query
          $result = mysqli_query(connection(),$query);

          if ($result) {
            $status = 'Done';
          }
          else{
            $status = 'Gagal';
          }

          //redirect ke halaman lain
          header('Location: index.php?status='.$status);
      }  
  }