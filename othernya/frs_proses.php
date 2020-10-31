<?php
//Tempat untuk mengeksekusi semua event baik itu input data, edit data dan hapus data.

//membuat objek database mysql dengan format (link_server, username_mysql, password_mysql, database_mysql)
$mysqli = new mysqli("localhost", "root", "", "pabw");

//setiap request yang datang akan dicek methodnya apakah post atau get. 
//$_POST['aksi'] valuenya diperoleh dari tag <input type="hidden" value=""> karena kl metod post, data yang dikirim dr suatu form, tdk ditampilkan di url/link.
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "input") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $frs = $_POST["matakuliah"];
	
	//eksekusi query mysql dalam hal ini input data ke tabel
    $query = "INSERT INTO frs (nama, nim, frs[]) VALUES ('$nama', '$nim', '$matakuliah')";
    $result = $mysqli->query($query);
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "edit") {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $frs = $_POST["matakuliah"];

    $query = "UPDATE frs SET nama='$nama', nim='$nim', frs='$matakuliah' WHERE id='$id'";
    $result = $mysqli->query($query);
} else if ($_GET['aksi'] == "hapus") {
    $query = "DELETE FROM frs WHERE id='" . $_GET['id'] . "'";

    $result = $mysqli->query($query);
} 
header("Location: ../index.php");
$mysqli->close();
