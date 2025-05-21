<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $alasan = $_POST['alasan'] ?? '';
    $upload_dir = 'uploads/';
    $file_name = $_FILES['bukti']['name'];
    $file_tmp = $_FILES['bukti']['tmp_name'];
    $upload_path = $upload_dir . basename($file_name);

    if (move_uploaded_file($file_tmp, $upload_path)) {
        echo "<script>alert('Berhasil dikirim');</script>";
    } else {
        echo "<script>alert('Gagal upload');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Tidak Absen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: white;
	  min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }

    .card-custom {
      background:linear-gradient(180deg, #c084fc, #d4d4d4);
      border-radius: 20px;
      padding: 40px;
      width: 500px;
      text-align: center;
      backdrop-filter: blur(20px);
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .card-custom img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin-bottom: 10px;
    }

    .nama {
      font-size: 1.2rem;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .garis {
      width: 60%;
      height: 1px;
      background-color: black;
      margin: 0 auto 30px auto;
    }

    .form-label {
      font-weight: 500;
      color: #333;
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-purple {
      background-color: #8b5cf6;
      border: none;
      color: white;
      padding: 10px 30px;
      border-radius: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div class="card-custom">
 <div class="d-flex justify-content-center mb-3">
  <img src="icon_orang.jpeg" alt="foto gw" class="rounded-circle border border-dark bg-light" style="width: 100px; height: 100px; object-fit: cover;">
</div>

  <div class="nama">NAMA</div>
  <div class="garis"></div>

  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3 text-start">
      <label for="alasan" class="form-label">ALASAN</label>
      <textarea class="form-control" id="alasan" name="alasan" rows="3" required></textarea>
    </div>
    <div class="mb-3 text-start">
      <label for="bukti" class="form-label">UPLOAD BUKTI</label>
      <input type="file" class="form-control" id="bukti" name="bukti" required>
    </div>
    <button type="submit" class="btn btn-purple mt-3">KIRIM</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
