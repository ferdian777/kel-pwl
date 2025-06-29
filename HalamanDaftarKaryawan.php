<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Form Tambah Karyawan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background: linear-gradient(to bottom, #00ff00, #00ffff);
      min-height: 100vh;
    }

    /* NAVBAR */
    .navbar-custom {
      background: linear-gradient(to right, #00ff00, #00ffff);
    }
    .navbar-custom .nav-link {
      font-weight: bold;
      color: #000 !important;
      transition: opacity 0.3s ease;
    }
    .navbar-custom .nav-link:hover {
      opacity: 0.6;
    }

    /* FORM BOX */
    .form-box {
      background: #d9d9d9;
      border: 2px solid #007bff;
      border-radius: 15px;
      padding: 30px 40px;
      max-width: 800px;
      margin: 50px auto;
      display: flex;
      flex-direction: row;
      align-items: flex-start;
      gap: 30px;
    }
    .upload-section {
      text-align: center;
      flex: 1;
    }
    .upload-section img {
      border: 1px solid #000;
      width: 80px;
      height: 80px;
      margin-bottom: 10px;
    }
    .form-fields {
      flex: 2;
      width: 100%;
    }
    .form-group {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }
    .form-group label {
      width: 100px;
    }
    .form-group input {
      flex: 1;
    }
    .btn-simpan {
      background-color: #00ff00;
      color: #000;
      border: none;
      width: 100px;
    }
    .btn-clear {
      background-color: red;
      color: #fff;
      border: none;
      width: 100px;
    }

    footer {
      background: linear-gradient(to bottom, #00ff00, #00ffff);
      text-align: center;
      padding: 15px 0;
      position: fixed;
      width: 100%;
      bottom: 0;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="nav-link" href="#">perusahaan</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="#">beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#">karyawan</a></li>
        <li class="nav-item"><a class="nav-link" href="#">izin</a></li>
        <li class="nav-item"><a class="nav-link" href="#">jobdesk</a></li>
        <li class="nav-item"><a class="nav-link" href="#">absensi</a></li>
        <li class="nav-item"><a class="nav-link" href="#">gaji</a></li>
      </ul>
      <span class="navbar-text">
        <img src="icon_orang.jpeg" class="rounded-circle" alt="User" width="30" height="30" />
      </span>
    </div>
  </div>
</nav>

<div class="form-box">
  <div class="upload-section">
    <img src="icon_orang.jpeg" alt="Foto" width="80" height="80">
    <div class="mb-3">
      <input type="file" class="form-control" name="foto" form="formkaryawan" required>
    </div>
  </div>

  <div class="form-fields">
    <form method="POST" enctype="multipart/form-data" id="formkaryawan">
      <div class="form-group">
        <label>isi nama</label>
        <input type="text" class="form-control" name="nama" required>
      </div>
      <div class="form-group">
        <label>isi TTL</label>
        <input type="text" class="form-control" name="ttl" required>
      </div>
      <div class="form-group">
        <label>isi Alamat</label>
        <input type="text" class="form-control" name="alamat" required>
      </div>
      <div class="form-group">
        <label>isi email</label>
        <input type="email" class="form-control" name="email" required>
      </div>
      <div class="form-group">
        <label>isi status</label>
        <input type="text" class="form-control" name="status" required>
      </div>
      <div class="mt-3">
        <button type="submit" name="simpan" class="btn btn-simpan me-3">SIMPAN</button>
        <button type="reset" class="btn btn-clear">CLEAR</button>
      </div>
    </form>
  </div>
</div>

<footer>
  est kelompok rendra
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
