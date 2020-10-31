<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">	
	<title>Login | Institut Teknologi Kalimantan</title>
	<marquee onmouseover="this.stop()" onmouseout="this.start()">Selamat Datang di Website Informatika. Website ini bertujuan untuk melihat data Dosen, Mahasiswa, dan Mata Kuliah dari Akademisi Civitas Informatika ITK.</marquee>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />	
	<link rel="stylesheet"  href="css/style.css" />
	<script src="css/html5.js"></script>	
</head>

<body>
<br><br>


	<div class="main">
        <p align="center"><img src="images/logo_if.png"/ height=200 weight=400></p>
	 
<br><br>
 	 <div class="box">
			<h2 align="center">Login</h2>
			<h3 align="center">Masukkan Username dan Password untuk Login</h3>
			
			<form class="form" name="login" method="post"
					    
						<input type="hidden" name="dst" />
						<input type="hidden" name="popup" value="true" />
				<fieldset>
					<div class="row">
						<input type="text" class="login" name="username" placeholder="Username" />
						<!-- To mark the incorrectly filled input, you must add the class "error" to the input -->
						<!-- example: <input type="text" class="login error" name="login" value="Username" /> -->
					</div>
					<div class="row">
						<input type="password" class="password" name="password" placeholder="Password"/>
						<!-- <a class="forgot" href="#">Lupa kata sandi</a> -->
					</div>	
					<div class="row">
						<!--
						<input type="checkbox" class="remember" name="remember" id="remember"  />
						<label for="remember">Biarkan saya tetap masuk</label>
						-->
                        <input type="submit" value="Submit" />
                       
             
						
					</div>
				</fieldset>
			</form>		
		</div>
		<span class="copy"><i>Belum memiliki Akun? <a href="reg.html"><font color="#0099FF">Klik Disini</font></a></i>
        
	</div>

</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mysqli = new mysqli("localhost", "root", "", "pabw");

    $sql = "SELECT * FROM user where username='" . $_POST['username'] . "' and password='" . $_POST['password'] . "'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            session_start();
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
            header("Location: index.php?");
        }
    } else {
        echo "Username dan Password salah";
    }
}
?>
</html>