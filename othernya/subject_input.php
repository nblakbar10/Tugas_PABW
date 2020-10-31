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
    <h1>Input Data Mata Kuliah</h1>
    <form class="form-group" action="subject_proses.php" method="post">
    <input type="hidden" name="aksi" value="input">
        <table class="table table-hover">
            <tr>
                <td>Kode</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="kode"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <select class="custom-select" name="prodi">
                        <option value="Informatika">Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Matematika">Matematika</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>sks</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="sks"></td>
            </tr>
            <tr>
                <td>semester</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="semester"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input class="btn btn-primary" type="submit" value="Submit">
                    <input class="btn btn-danger" type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>