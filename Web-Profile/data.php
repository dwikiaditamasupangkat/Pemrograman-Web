<div id="pendidikan">
<?php 
    include 'conn.php';
    $query = "SELECT * FROM pendidikan";
    $result = $db1->prepare($query);
    $result->execute();
    $res1 = $result->get_result();

    if ($res1->num_rows > 0) {
        while ($row = $res1->fetch_assoc()) {
            $id = $row['id'];
            $tahun = $row['tahun'];
            $jenis = $row['jenis'];
            $nama_pendidikan = $row['nama_pendidikan'];
            $tipe = $row['tipe'];
            $deskripsi = $row['deskripsi'];

    ?>
      <div class="card">
        <div class="row">
          <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
            <div class="card-body cc-education-header">
              <p><?php echo $tahun;  ?></p>
              <div class="h5"><?php echo $jenis;  ?></div>
            </div>
          </div>
          <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
            <div class="card-body">
              <div class="h5"><?php echo $nama_pendidikan;  ?></div>
              <p class="category"><?php echo $tipe;  ?></p>
              <p><?php echo $deskripsi;  ?></p>
              <button id="<?php echo $id; ?>" class=" tombol btn-outline-danger btn-sm delete"> <i class="fa fa-trash"></i> Delete </button>
            </div>
          </div>
        </div>
      </div>
      <?php } } else { ?> 
            <tr>
                <td colspan='7'>
                <div class="h6 text-center mb-4 title">Data Tidak Ditemukan</div>
                </td>
            </tr>
        <?php } ?>
</div>

