<!DOCTYPE html>
<?php
// sertakan berkas utama
require_once '../../includes/db.php';
require_once 'authv2.php';

if (empty($_SESSION['admin'])) {
?>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="./css/style2.css" />
</head>
<body>
<div id="wrapper">

	<form name="login-form" class="login-form" action="" method="post">

		<div class="header">
		<h1>Admin page access.</h1>
		<span>Please login.</span>
		</div>

		<div class="content">
		<input name="username" type="text" class="input username" placeholder="Username" autofocus />
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" placeholder="Password" />
		<div class="pass-icon"></div>
		</div>

		<div class="footer">
		<input type="submit" name="submit" value="Login" class="button" /></form><br>
		</div>

	<!--/form-->

</div>
<div class="gradient"></div>
</body>
</html>
<?php
die;
}
ob_start();
if(isset($_GET['edit1_id']))
{
 $qry1 = "SELECT * FROM barang WHERE nobar=".$_GET['edit1_id'];
 $result1 = mysql_query($qry1);
 $row1 = mysql_fetch_array($result1);
  // variables for input data
 $nabar = $_POST['nabar'];
 $deskripsi = $_POST['deskripsi'];
 $img=$_POST['image'];
$jenis=$_POST['jenis'];
$harga=$_POST['harga'];
 $stok=$_POST['stok'];
  $berat=$_POST['berat'];
 


if(isset($_FILES['file']['name']))
{
$filename = $_FILES['file']['name']; // Get the name of the file (including file extension).
$filename = str_replace(' ', '_', $filename); // Replace space with underscore.
$filename = str_replace("'", '`', $filename); // Replace ' with `.
$filename = $filename; // Get final file name.
move_uploaded_file($_FILES["file"]["tmp_name"],"../../image/" .$filename);

if(!empty($filename)){
// Resize Image
$filePath = "../../image/" .$filename;
$orig_image = imagecreatefromjpeg($filePath);
$image_info = getimagesize($filePath);
$width_orig  = $image_info[0]; // current width as found in image file
$height_orig = $image_info[1]; // current height as found in image file
$width = 150; // new image width
$height = 150; // new image height
$destination_image = imagecreatetruecolor($width, $height);
imagecopyresampled($destination_image, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
// This will just copy the new image over the original at the same filePath.
imagejpeg($destination_image, $filePath, 100);
}

if(empty($filename)){
$img=$row['image'];
}
else{
$img="image/".$filename;
}
}

 {
 if($_SERVER["REQUEST_METHOD"] == "POST")

 {
     $sqlAdd ="update barang set nabar='".$nabar."',
	 deskripsi='".$deskripsi."',
     image='".$img."',
	 jenis='".$jenis."',
	 harga='".$harga."',
	 stok='".$stok."',
	 berat='".$berat."'
     where nobar=".$_GET['edit1_id'];
     $query = mysql_query($sqlAdd);
	 if($query == TRUE)
       {
         error_reporting(E_ALL ^ E_WARNING);
         echo '<script language="javascript">alert("Menu Sushi berhasil di Update"); document.location="./menu.php";</script>';
       }
       else
       {
         error_reporting(E_ALL ^ E_WARNING);
         echo '<script language="javascript">alert("Menu Sushi gagal di update"); document.location="./menu.php";</script>';
       }
     exit;
    }

 }
}

   ob_end_flush();

	

?>



<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Sushihan - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-plus"></i> Tambah Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
															<li><a href="tambah.php">Tambah Sushi</a></li>


                            </ul
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-th-list fa-fw"></i> Daftar Menu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
															<li><a href="menu.php">Semua Ukuran Sushi</a></li>
															<li><a href="menu.php?kd=1">Sushi Standar</a></li>
															<li><a href="menu.php?kd=2">Sushi Large</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="pelanggan.php"><i class="fa fa-table fa-fw"></i> Pelanggan</a>
                        </li>
                        <li>
                            <a href="pesanan.php"><i class="fa fa-edit fa-fw"></i> Pesanan</a>
                        </li>
                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">edit sushi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><a href="menu.php">
						Kembali Ke Daftar Produk</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nama Sushi</label>
                                            <input class="form-control" name = "nabar" value="<?php echo $row1['nabar']; ?>"  required >
                                        </div>
										<div class="form-group">
                                            <label>Deskripsi</label>
                                            <input type="text area" class="form-control" name = "deskripsi" value="<?php echo $row1['deskripsi']; ?>"  required>
                                        </div>
										 <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" name = "harga" value="<?php echo $row1['harga']; ?>" required >
                                        </div> 
										 <div class="form-group">
                                            <label>Jenis</label>
                                            <select name="jenis" value="<?php echo $row1['jenis']; ?>" required="">
												<option name="jenis" label="Pilih" selected disabled>Pilih Jenis Menu</option>
												<option name="jenis" label="standar" value="standar"Standar</option>
												<option name="jenis" label="large" value="large">Large</option>
			</select>
                                        </div> 
										
										     <div class="form-group">
                                            <label>Stok</label>
                                            <input class="form-control" name = "stok" value="<?php echo $row1['stok']; ?>" required >
                                      
                                        </div>
										<div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name = "file" id="file" value="">
                                        </div>
										<div class="form-group">
                                            <label>berat</label>
                                            <input class="form-control" name = "berat" value="<?php echo $row1['berat']; ?>" required >
                                        </div>
										
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <a href = "./menu.php" button type="reset" class="btn btn-default">Cancel Button</a></button>
                                    </form>
                                </div>

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>