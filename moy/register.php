<!DOCTYPE html>
<html>
<head>
  <title>Form Register</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #5F9EA0;
    }
    .login-container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #7FFFD4;
    }
    .login-container h2 {
      text-align: center;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    .form-group input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }
    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Form Login Inventaris Barang</h2>
    <form method="post" action="register.php">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Register">
      </div>
    </form>
  </div>
</body>
</html>

    <?php

    require 'koneksi.php';

    if (!$konek) {
          die('koneksi database gagal: ' . mysqli_connect_error());
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
      $username = $_POST['username'];
      $password = $_POST['password'];
  
      // Query untuk menyimpan data user ke dalam tabel
      $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
      
      if (mysqli_query($konek, $query)) {
          echo 'Registrasi berhasil!';
          echo "<script>
                alert('UDah bisa kocak registernya!');
                document.location.href = 'login.php';
                </script>";
      } else {
          echo 'Error: ' . mysqli_error($konek);
      }


  }
  
  mysqli_close($konek);
  
    ?>

</fieldset>
</body>
</html>