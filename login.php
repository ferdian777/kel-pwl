<?php 


 ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Karyawan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      background-color: #f8f9fa;
    }
    .login-container {
      display: flex;
      height: 100vh;
    }
    .panelkiri {
      background: linear-gradient(135deg, #d59df5, #c6a1e5);
      color: white;
      padding: 5rem;
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .panelkanan {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .form-control {
      border-radius: 20px;
    }
    .btn-login {
      border-radius: 20px;
      background: linear-gradient(to right, #ba7cf3, #d59df5);
      border: none;
      color: white;
    }
    .btn-login:hover {
      background: #b26ee6;
    }
    .form-check-label {
      font-size: 0.9rem;
    }
    .forgot-pass {
      font-size: 0.9rem;
      float: right;
    }
  </style>
</head>
<body>

<div class="login-container">
  <div class="panelkiri">
    <h1 class="display-5 fw-bold">SELAMAT DATANG</h1>
    <p class="mt-4 fs-5">Setiap hari adalah kesempatan baru untuk berkembang.<br>Terus semangat, kontribusi Anda sangat berarti!</p>
  </div>
  <div class="panelkanan">
    <form class="w-75" style="max-width: 400px;">
      <h4 class="mb-4 text-center fw-bold">LOGIN KARYAWAN</h4>

      <div class="mb-3">
        <input type="text" class="form-control" placeholder="Username" required>
      </div>

      <div class="mb-3">
        <input type="password" class="form-control" placeholder="Password" required>
      </div>

      <div class="d-flex justify-content-between mb-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="remember">
          <label class="form-check-label" for="remember">Ingat saya</label>
        </div>
        <a href="#" class="forgot-pass text-decoration-none">Lupa Password?</a>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-login">LOGIN</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
