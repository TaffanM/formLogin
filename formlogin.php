<html>
<head>
<title> Form Login </title>
<!-- CSS only -->
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
<link rel="stylesheet" href="./css/formlogincss.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<div class="overlay">
  <form method="POST" action="ceklogin.php" class="box">
    <div class="header">
      <h4>Login</h4>
      <p>Masukkan username dan password anda</p>
    </div>

    <div class="login-area">
      <label>Username</label>
      <input type="text" class="username" placeholder="Masukan username anda" name="username" required>
      <label>Password</label>
      <input type="password" class="password" placeholder="masukan password anda" name="password" required>
      <button type="submit"  class="button">Login</button>
      <button type="button" class="button">Batal</button>
    </div>    
  </form>
</div>
</body>

</html>