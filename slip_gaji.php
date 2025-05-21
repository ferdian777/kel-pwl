<?php
// Data karyawan dan perusahaan (contoh statis; dapat diganti dengan data dari database)
$nama_perusahaan = "PT Sejahtera Bersama";
$alamat_perusahaan = "Jl. Merdeka No. 123, Jakarta";
$telepon_perusahaan = "(021) 12345678";
$divisi = "Teknologi Informasi";
$nama_karyawan = "John Doe";
$jabatan = "Software Engineer";
$kode_karyawan = "EMP001";
$telepon_karyawan = "08123456789";
$periode = "April 2025";
$nomor_referensi = "REF202504001";
$gaji_pokok = 10000000;
$tunjangan_transport = 1000000;
$tunjangan_makan = 500000;
$potongan_bpjs = 250000;
$total_gaji = $gaji_pokok + $tunjangan_transport + $tunjangan_makan - $potongan_bpjs;
$tanggal_cetak = date("d F Y");
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Slip Gaji Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @media print {
            .no-print {
                display: none;
            }

            @page {
                size: A4 portrait;
                margin: 20mm;
            }

            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
                font-size: 12pt;
            }

            .card {
                page-break-inside: avoid;
                box-shadow: none;
            }
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container my-5">
        <div class="card">
            <div class="card-header text-center">
                <h3>Slip Gaji Karyawan</h3>
                <p class="mb-0"><?= $nama_perusahaan; ?></p>
                <p class="mb-0"><?= $alamat_perusahaan; ?> | Telp: <?= $telepon_perusahaan; ?></p>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p><strong>Nama Karyawan:</strong> <?= $nama_karyawan; ?></p>
                        <p><strong>Jabatan:</strong> <?= $jabatan; ?></p>
                        <p><strong>Divisi:</strong> <?= $divisi; ?></p>
                        <p><strong>Kode Karyawan:</strong> <?= $kode_karyawan; ?></p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <p><strong>No.telp:</strong> <?= $telepon_karyawan; ?></p>
                        <p><strong>Periode:</strong> <?= $periode; ?></p>
                        <p><strong>Nomor Referensi:</strong> <?= $nomor_referensi; ?></p>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Komponen</th>
                            <th>Jumlah (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Gaji Pokok</td>
                            <td><?= number_format($gaji_pokok, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Tunjangan Transportasi</td>
                            <td><?= number_format($tunjangan_transport, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Tunjangan Makan</td>
                            <td><?= number_format($tunjangan_makan, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Potongan BPJS</td>
                            <td><?= number_format($potongan_bpjs, 0, ',', '.'); ?></td>
                        </tr>
                        <tr class="fw-bold">
                            <td>Total Gaji Bersih</td>
                            <td><?= number_format($total_gaji, 0, ',', '.'); ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row mt-5 text-center">
                    <div class="col-md-6">
                        <p>Penerima,</p>
                        <br><br>
                        <p>(<?= $nama_karyawan; ?>)</p>
                    </div>
                    <div class="col-md-6">
                        <p>Menyetujui,</p>
                        <br><br>
                        <p>(___________________)</p>
                    </div>
                </div>
                <div class="text-end mt-4">
                    <p><strong>Tanggal Cetak:</strong> <?= $tanggal_cetak; ?></p>
                </div>
            </div>
        </div>
        <div class="text-center mt-3 no-print">
            <button class="btn btn-primary" onclick="window.print()">Cetak Slip Gaji</button>
        </div>
    </div>
</body>

</html>