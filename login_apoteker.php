<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/admin.style.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="" rel="shortcut icon">
   <title> DrugDesc </title>
</head>
<body>
  <div align="center">
    <img  src="" width="350" height="200" />
  </div>
  <div align="center" class="judul2">
    <h2 style="color: white;"><strong>Log In</strong></h2>
      <form method="post" action="prosesloginapoteker.php">
        <tr>
          <input type="text" id="kode" name="kode" placeholder="Kode Anda" maxlength="3" required>
        </tr>
        <tr>
          <input type="password" id="password" name="pass" placeholder="Password" maxlength="20" required>
        </tr>
        <div>
          <button type="submit" style="width: 100px; height: 30px;">Masuk</button>
        </div>  
      </form>
</body>
</html>