<?php
if(!defined('GRANT')) {
	header("Location: user.php");
   die('Direct access not permitted');
}
?>
<div class="container" style="width:900px;">
<?php
if(isset($_POST['ubah'])){
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];	
$telepon=$_POST['telepon'];


$edit ="UPDATE user set nama='".$nama."', alamat='".$alamat."', email='".$email."', telepon='".$telepon."' where uid=".$_SESSION['user'];
$query = mysql_query($edit);
if($query){
  echo("<script>alert('Data berhasil diubah.');</script>");
  echo("<script language='javascript'>window.location.href='./user.php?stat=success'</script>");
  
}else{
  echo("<script>alert('Data gagal diubah, silahkan coba beberapa saat lagi.');</script>");
    echo("<script language='javascript'>window.location.href='./user.php?stat=fail'</script>");
}
}
?>

    <form action="" method="post">
		<div class="input-group" style="width:500px;margin-left:auto;margin-right:auto;">
				<input type="text" name="nama" class="form-control" placeholder="Nama Anda" value="<?php echo $s_nama; ?>" required>
		</div>
       <div class="input-group" style="width:500px;margin-left:auto;margin-right:auto;">
        <textarea name="alamat" class="form-control" placeholder="Alamat Anda" required><?php echo $s_alamat; ?></textarea>
      </div>
      
      <div class="input-group" style="width:500px;margin-left:auto;margin-right:auto;">
        <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $s_email; ?>" required>
      </div>
	  <div class="input-group" style="width:500px;margin-left:auto;margin-right:auto;">
        <input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $s_telepon; ?>" required>
      </div>
      <center>
        <input type="submit" value="Kirim" name="ubah" style="width:40%;background-color: #5cb85c;border-radius: 4px;padding: 4px 6px;border: none;color: #fff;margin-bottom:10px;" />
      </center>
    </form>

    <center><a href="user.php?stat=none" style="text-decoration:none;color:#fff;"><button type="submit" style="width:40%;background-color: #5cb85c;border-radius: 4px;padding: 4px 6px;border: none;color: #fff;" />Batal</button></a></center>
