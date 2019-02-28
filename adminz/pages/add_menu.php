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
 $namapro = $_POST['nama_produk'];
 $isipro = $_POST['isi'];
 $des = $_POST['deskripsi'];
 $id_kategori = $_POST['id_kategori'];
 $brt=$_POST['berat'];
 $hrg=$_POST['harga'];

if(isset($namapro) or isset($isipro) or isset($des) or isset($id_kategori) or isset($brt) or isset($hrg))
{

 if(($_FILES["file"]["type"] == "image/jpeg") and ($_FILES["file"]["size"] <= 2000000)){
     if (file_exists("upload/" . $_FILES["file"]["name"])){
       echo $_FILES["file"]["name"] . " already exists. ";
       }else{
       move_uploaded_file($_FILES["file"]["tmp_name"],"../../images/" . $_FILES["file"]["name"]);
	   // Resize Image
	   $filePath = "../../images/" . $_FILES["file"]["name"];
       $orig_image = imagecreatefromjpeg($filePath);
       $image_info = getimagesize($filePath);
       $width_orig  = $image_info[0]; // current width as found in image file
       $height_orig = $image_info[1]; // current height as found in image file
       $width = 176; // new image width
       $height = 255; // new image height
       $destination_image = imagecreatetruecolor($width, $height);
       imagecopyresampled($destination_image, $orig_image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
       // This will just copy the new image over the original at the same filePath.
       imagejpeg($destination_image, $filePath, 100);
       $insert = "INSERT INTO produk SET nama_produk = '$namapro',isi = '$isipro',gambar = 'images/".$_FILES["file"]["name"]."',deskripsi = '$des' ,id_kategori = '$id_kategori', 
	   berat = '$brt',harga = '$hrg'";
       $query = mysql_query($insert);
       if($query == TRUE)
       {
        	echo '<script language="javascript">alert("Produk berhasil Ditambahkan"); document.location="./menu.php";</script>';
       }
       else
       {
      echo '<script language="javascript">alert("Produk gagal Ditambahkan"); document.location="./menu.php";</script>';
       }
     }
   }
}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin - Add Menu</title>
<link rel="stylesheet" href="./css/custom.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Tambah Menu</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post" action="add_menu.php" enctype="multipart/form-data">
    <table align="center">
    <tr>
    <td align="center"><a href="menu.php">Kembali ke daftar menu</a></td>
    </tr>
    <tr>
    <td><input type="text" name="nama_produk" placeholder="Nama Produk" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="isi" placeholder="Isi(ml)" required /></td>
    </tr>
	<tr>
    <td><input type="file" name="file" id="file" placeholder="Masukan Gambar" required />*Gambar Harus Berformat JPEG</td>
    </tr>
    <tr>
    <td><input type="text" name="deskripsi" placeholder="Deskripsi Obat" required /></td>
    </tr>
	  <tr>
    <td>Kategori&nbsp;:&nbsp;
			<select name="id_kategori" required="">
				<option name="id_kategori" label="Pilih" selected disabled>Pilih Kategori</option>
				<option name="id_kategori" label="Insektisida" value="1">Insektisida</option>
				<option name="id_kategori" label="Pupuk" value="2">Pupuk</option>
				<option name="id_kategori" label="Obat" value="3">Obat</option>
			</select>
		</td>
    </tr>
	<tr>
    <td><input type="text" name="berat" placeholder="Berat" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="harga" placeholder="Harga Obat" required /></td>
    </tr>
    <tr>
    <td><button type="submit"><strong>SAVE</strong></button>
        <button type="reset" ><strong>RESET</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
