

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="./css/tambah.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<title>Tambah</title>
</head>
<body>
<div class="container">
	<div class="header">
		<h2>Tambah Data Pengguna</h2>
	</div>
	<form method="post" action="inputuser.php" class="form">
		<div class="form-control">
			<label for="username">Username</label>
			<input type="text" placeholder="Masukkan username" name="username" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Password</label>
			<input type="text" placeholder="Masukkan password" name="password" />
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<div class="form-control">
			<label for="username">Level</label>
			<input type="text" placeholder="Masukkan level" name="level"/>
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			<small>Error message</small>
		</div>
		<input type="submit" value="SIMPAN" class="button">
	</form>
</div>
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>tambah data</title>
    <link href="./css/tambah.css" rel="stylesheet">
</head>
<body>
	<br/>
	<a href="tampil.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA Pengguna</h3>
	<form method="post" action="inputuser.php">
		<table>
			<tr>			
				<td>username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>level</td>
				<td><input type="text" name="level"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html> -->