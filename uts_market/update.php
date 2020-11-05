<!doctype html>
<html class="no-js" lang="en">

<?php
    ///memanggil file conn.php yang berisi koneski ke database
    //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
    include ('conn.php');

    $status = '';
    $result = '';
    //melakukan pengecekan apakah ada variable GET yang dikirim
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['sku'])) {
            //query SQL
            $sku_upd = $_GET['sku'];
            $query = "SELECT * FROM barang WHERE sku = '$sku_upd'";

            //eksekusi query
            $result = mysqli_query(connection(),$query);
        }
        
    }

    //melakukan pengecekan apakah ada form yang dipost
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sku = $_POST['sku'];
        $nama_barang = $_POST['nama_barang'];
        $kategori = $_POST['kategori'];
        $jumlah_stok = $_POST['jumlah_stok'];
        $harga_satuan = $_POST['harga_satuan'];
        //query SQL
        $sql = "UPDATE barang SET nama_barang='$nama_barang', kategori='$kategori', jumlah_stok=$jumlah_stok, harga_satuan=$harga_satuan WHERE sku='$sku'";

        //eksekusi query
        $result = mysqli_query(connection(),$sql);
        if ($result) {
            $status = 'OK';
        }
        else{
            $status = 'Error';
        }

        //redirect ke halaman lain
        header('Location: index.php?status='.$status);
    }


?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Barokah Minimarket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
	<!-- Start datatable css -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
	
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">Barokah Minimarket</a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="index.php"><i class="ti-dashboard"></i><span>Daftar Barang</span></a>
                            </li>
                            <li class="deactive">
                                <a href="input-kategori.php"><i class="ti-dashboard"></i><span>Kategori Barang</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">			
            <div class="main-content-inner">
               
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <?php 
                                        //mengecek apakah proses update dan delete sukses/gagal
                                        if (@$_GET['status']!==NULL) {
                                            $status = $_GET['status'];
                                            if ($status=='OK') {
                                                echo '<br><br><div class="alert alert-success" role="alert">Data Barang berhasil di-update</div>';
                                            }
                                            elseif($status=='Error'){
                                                echo '<br><br><div class="alert alert-danger" role="alert">Data Barang gagal di-update</div>';
                                            }
                                        }
                                    ?>
									<h2>Update Barang</h2>
								</div>
                                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                                    <h2 style="margin: 30px 0 30px 0;">Update Data Barang</h2>
                                    <form action="update.php" method="POST">
                                        <?php while($data = mysqli_fetch_array($result)): ?>
                                            <div class="form-group">
                                                <label>SKU</label>
                                                <input type="text" class="form-control" placeholder="sku" name="sku" value="<?php echo $data['sku'];  ?>" required="required" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Barang</label>
                                                <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang" value="<?php echo $data['nama_barang'];  ?>" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="custom-select" name="kategori" required="required">
                                                    <option value="">Pilih Salah Satu</option>
                                                    <?php 
                                                        //proses menampilkan data dari database:
                                                        //siapkan query SQL
                                                        $querykategori = "SELECT * FROM daftar"; //query select
                                                        $resultkategori = mysqli_query(connection(),$querykategori); //menampung data dari query
                                                    ?>
                                                    <?php while($data2 = mysqli_fetch_array($resultkategori)): ?>
                                                        <?php if ($data2['kategori'] == $data['kategori']): ?>
                                                            <option value="<?php echo $data['kategori'];  ?>" selected><?php echo $data2['kategori'];  ?></option>
                                                        <?php else: ?>
                                                            <option value="<?php echo $data2['kategori'];?>"><?php echo $data2['kategori'];?></option>
                                                        <?php endif ?>    
                                                    <?php endwhile ?>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Stok</label>                                            
                                                <input type="text" class="form-control" placeholder="Jumlah Stok" name="jumlah_stok" value="<?php echo $data['jumlah_stok'];  ?>" required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Harga Satuan</label>
                                                <input type="text" class="form-control" placeholder="Harga Satuan" name="harga_satuan" value="<?php echo $data['harga_satuan'];  ?>" required="required">
                                            </div>
                                        <?php endwhile; ?>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script>
		$(document).ready(function() {
		$('input').on('keydown', function(event) {
			if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event.shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
			   var $t = $(this);
			   event.preventDefault();
			   var char = String.fromCharCode(event.keyCode);
			   $t.val(char + $t.val().slice(this.selectionEnd));
			   this.setSelectionRange(1,1);
			}
		});
	});
	
	$(document).ready(function() {
    $('#dataTable3').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
	} );
	</script>
	
	<!-- jquery latest version -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- Start datatable js -->
	 <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
	
	
</body>

</html>
