<?php
if(!defined('GRANT')) {
	header("Location: user.php");
   die('Direct access not permitted');
}
?>
<div class="container" style="width:900px;" align="center">
<h2 class="top">Selamat datang <?php echo $s_username; ?>!</h2>
<br/>
<div class="about-info-grids">
	<div align="center">
    <h3><a style="text-decoration:none;">Profile Anda</a></h3>
		<table border="0" color="#000" style="padding:15px;margin:15px;">
      <tr>
        <td>Nama</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><?php echo $s_nama; ?></td>
      </tr>
      <tr>
        <td>Alamat</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><?php echo $s_alamat; ?></td>
      </tr>
      <tr>
        <td>Email</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><?php echo $s_email; ?></td>
      </tr>
      <tr>
        <td>Telepon</td><td>&nbsp;&nbsp;:&nbsp;&nbsp;</td><td><?php echo $s_telepon; ?></td>
      </tr>
      <tr>
        <td colspan="3" align="center" style="padding-top:25px;"><h3><a href="./user.php?page=1" style="text-decoration:none;"><span class="label label-success">Ubah Profile</span></a></h3></td>
      </tr>
    </table>
	</div>
 <div class="clearfix"></div>
</div>


<style>
.kosong{
	font-size: 2em !important;
	color: #000 !important;
}
</style>
