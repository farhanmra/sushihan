<?php
	@mysql_connect("localhost","root","") or die("Koneksi Database Error.");
	@mysql_select_db("sushihan") or die("Koneksi Database Error.");
	session_start();
	if(isset($_SESSION['user'])){
	$uid=$_SESSION['user'];
	$get_username=mysql_query("SELECT * FROM user WHERE uid=$uid");
	while($row_s = mysql_fetch_array($get_username)) {
	$s_nama=$row_s['nama'];
	$s_username=$row_s['username'];
	$s_password=$row_s['password'];
	$s_alamat=$row_s['alamat'];
	$s_email=$row_s['email'];
	$s_telepon=$row_s['telepon'];
	}
	}
?>
