<?php
include_once '../database.php';

class User extends Database{
    function tampil(){
		$sql = mysqli_query("select * from user");
		while($fetch = mysqli_fetch_array($sql)){
			$hasil[] = $fetch;
		}
		return $hasil;
	}
    // untuk memanggilnya
    // foreach($class->tampil() as $x){var_dump($x);}
    function tambah($nama,$alamat,$usia){
		mysqli_query("insert into user values('','$nama','$alamat','$usia')");
	}
    // untuk memanggilnya
    // $class->tambah($_POST['nama'],$_POST['alamat'],$_POST['usia']);
    function hapus($id){
		mysql_query("delete from user where id='$id'");
	}
    // untuk memanggilnya
    // $class->hapus($_GET['id']);
}