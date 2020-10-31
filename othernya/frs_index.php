<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <h1>Data FRS</h1>
    <a class="btn btn-primary py-2 float-right mb-4" href="frs_input.php">Input Data FRS</a>
    <?php
	// Cek sudah login atau belum, kalau belum akan diredirect ke page logi. Penjelasan kode ini ada di file index.php
   
		//membuat objek mysql
        $mysqli = new mysqli("localhost", "root", "", "pabw");

        //mengecek apakah sudah terkoneksi ke database mysql atau belum
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

		//menjalankan query mysql
        $sql = "SELECT * FROM frs";
        $result = $mysqli->query($sql);
        echo "
        <table class='table table-hover mt-4'>
            <thead>
                <th>Nama</th>
                <th>NIM</th>
                <th>Mata Kuliah</th>
                <th>Aksi</th>
            </thead>
            <tbody>
            ";
		//mengecek apakah tabel ada datanya atau tidak dengan kode num_rows
        if ($result->num_rows > 0) {
            // menampilkan hasil query data berdasarkan baris. id, nama, prodi dll merujuk ke nama kolom karena kita pakai method fetch_assoc
            while ($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>" . $row["nama"] . "</td>
                    <td>" . $row["nim"] . "</td>
                    <td>" . $row["matakuliah"] . "</td>
                    <td>
                    
                    <a class='btn btn-light' href='frs_edit.php?aksi=edit&&id=" . $row["id"] . "'>Edit</a>
                    <a class='btn btn-danger' href='frs_proses.php?aksi=hapus&&id=" . $row["id"] . "'>Hapus</a>
                  </tr>";
            }
        } else {
            echo "0 results";
        }
        echo "
        </tbody>
        </table>";
        $mysqli->close();
    
    ?>
</body>

</html>