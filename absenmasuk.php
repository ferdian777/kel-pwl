<?php 


 ?>
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Absen Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <style>
      .body-background {
        background-image: linear-gradient(to right, #FFC5F2, #8CBCFF);
      }
    </style>
  </head>
 <body class="d-flex justify-content-center align-items-center min-vh-100 bg-light body-background">

  <div class="bg-white rounded-4 shadow p-4" style="width: 320px; height: 400px;">
    
   
<div class="d-flex justify-content-center mb-3">
  <img src="icon_orang.jpeg" alt="foto gw" class="rounded-circle border border-dark bg-light" style="width: 100px; height: 100px; object-fit: cover;">
</div>


   
    <h5 class="text-center fw-semibold mb-4">NAMA</h5>

  
    <form id="absen-masuk">
      <div class="mb-3">
        <select id="statusSelect" name="status" class="form-select text-center fw-bold" required>
          <option value="" selected disabled> Pilih Status </option>
          <option value="Masuk">Masuk</option>
          <option value="Izin">Izin</option>
          <option value="Sakit">Sakit</option>
          <option value="Cuti">Cuti</option>
        </select>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-primary rounded-pill fw-semibold">KIRIM</button>
      </div>
    </form>

  </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>

</body>
</html>
