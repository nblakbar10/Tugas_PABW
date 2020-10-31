<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

        <script>

            $(document).ready(function () {

                $("#frs").select2({

                    placeholder: "Silahkan Pilih"

                });

            });

        </script>
</head>

<body>
    <h1>Input Data FRS</h1>
    <form class="form-group" action="FRS_proses.php" method="post">
    <input type="hidden" name="aksi" value="input">
        <table class="table table-hover">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input class="form-control" type="text" name="nim"></td>
            </tr>
            <tr>
                <div class="form-group">
                    <td>Pilih Mata Kuliah yang akan diambil</td>
                    <td>:</td>
                    <td>
                        <select id="frs" name="frs[]" class="form-control" multiple="multiple">
                            <option value="Pengantar Probabilitas dan Optimasi">Pengantar Probabilitas dan Optimasi</option>
                            <option value="Otomata">Otomata</option>
                            <option value="Teknologi IoT">Teknologi IoT</option>
                            <option value="Algoritma dan Pemrograman">Algoritma dan Pemrograman</option>
                            <option value="Pengantar Kecerdasan Buatan">Pengantar Kecerdasan Buatan</option>
                            <option value="Pengembangan Aplikasi Berbasis Web">Pengembangan Aplikasi Berbasis Web</option>
                            <option value="Analisis dan Perancangan Perangkat Lunak">Analisis dan Perancangan Perangkat Lunak</option>
                            <option value="Grafika Komputer">Grafika Komputer</option>
                            <option value="Manajemen Basis Data">Manajemen Basis Data</option>
                            <option value="Interaksi Manusia dan Komputer">Interaksi Manusia dan Komputer</option>
                        </select>
                    </td>
                </div>
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