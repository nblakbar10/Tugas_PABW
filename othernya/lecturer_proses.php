<?php
//Tempat untuk mengeksekusi semua event baik itu input data, edit data dan hapus data.

//membuat objek database mysql dengan format (link_server, username_mysql, password_mysql, database_mysql)
$mysqli = new mysqli("localhost", "root", "", "pabw");

//setiap request yang datang akan dicek methodnya apakah post atau get. 
//$_POST['aksi'] valuenya diperoleh dari tag <input type="hidden" value=""> karena kl metod post, data yang dikirim dr suatu form, tdk ditampilkan di url/link.
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "input") {
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $pendidikan = $_POST["pendidikan"];
	
	//eksekusi query mysql dalam hal ini input data ke tabel
    $query = "INSERT INTO dosen (nip, nama, prodi, pendidikan) VALUES ('$nip', '$nama', '$prodi', '$pendidikan')";
    $result = $mysqli->query($query);
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['aksi'] == "edit") {
    $id = $_POST["id"];
    $nip = $_POST["nip"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $pendidikan = $_POST["pendidikan"];

    $query = "UPDATE dosen SET nip='$nip', nama='$nama', prodi=' $prodi', pendidikan='$pendidikan' WHERE id='$id'";
    $result = $mysqli->query($query);
} else if ($_GET['aksi'] == "hapus") {
    $query = "DELETE FROM dosen WHERE nip='" . $_GET['nip'] . "'";

    $result = $mysqli->query($query);
} 
header("Location: ../index.php");
$mysqli->close();
