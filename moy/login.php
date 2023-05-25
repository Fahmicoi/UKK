<!DOCTYPE html>
<html>
<head>
  <title>Login Form Aplikasi Inventaris Barang</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #5F9EA0;
    }
    .login-container {
      background-color: #7FFFD4;
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
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
    <form method="post" action="ceklogin.php">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="nama_user">Nama:</label>
        <input type="nama_user" id="password" name="nama_user" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Login">
      </div>
      <div class="form-group">
        <a href="register.php">Register</a>
      </div>
    </form>
  </div>
</body>
</html>
