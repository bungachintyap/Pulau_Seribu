<?php
$conn = new mysqli("localhost", "root", "", "pulauseribu");

if (!isset($_GET['id'])) {
  die("ID pemesanan tidak ditemukan.");
}

$id = intval($_GET['id']);
$query = $conn->query("
  SELECT pemesanan.*, pemesan.nama, pemesan.email, pemesan.telepon, pemesan.alamat,
         paket.jenis_paket, paket.durasi, paket.via_transport, pulau.nama AS nama_pulau
  FROM pemesanan
  JOIN pemesan ON pemesanan.pemesan_id = pemesan.pemesan_id
  JOIN paket ON pemesanan.paket_id = paket.paket_id
  JOIN pulau ON paket.pulau_id = pulau.pulau_id
  WHERE pemesanan.pemesanan_id = $id
");

$data = $query->fetch_assoc();

if (!$data) {
  die("Data tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Struk Pemesanan</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #0f172a, #1e3a8a);
      color: #e2e8f0;
      margin: 0;
      padding: 140px;
    }

    .struk {
      background: rgba(14, 116, 144, 0.25);
      padding: 40px;
      max-width: 700px;
      margin: 0 auto;
      border-radius: 16px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(12px);
    }

    h2 {
      text-align: center;
      color: #a5f3fc;
      margin-bottom: 24px;
      position: relative;
      margin-top: 0.2cm;
    }

    .data {
      margin-bottom: 20px;
    }

    .data p {
      margin: 8px 0;
      line-height: 1.6;
    }

    .label {
      font-weight: 600;
      color: #93c5fd;
    }

    .success-msg {
      margin-top: 30px;
      padding: 18px;
      background: rgba(24, 136, 65, 0.28);
      color:rgb(187, 247, 208);
      border-left: 6px solidrgba(12, 100, 44, 0.72);
      border-radius: 8px;
      font-weight: 500;
      text-align: center;
    }

    .btn-kembali {
      display: block;
      margin: 30px auto 0;
      padding: 12px 28px;
      background: linear-gradient(to right,rgb(46, 116, 228),rgb(14, 189, 201));
      color: white;
      border: none;
      border-radius: 12px;
      font-size: 16px;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s ease;
      text-align: center;
      width: fit-content;
    }

    .btn-kembali:hover {
      transform: scale(1.05);
      background: linear-gradient(to right, #2563eb, #059669);
    }
  </style>
</head>
<body>

<div class="struk">
  <h2>Struk Pemesanan</h2>

  <div class="data">
    <p><span class="label">Nama    :</span> <?= htmlspecialchars($data['nama']) ?></p>
    <p><span class="label">Email   :</span> <?= htmlspecialchars($data['email']) ?></p>
    <p><span class="label">Telepon :</span> <?= htmlspecialchars($data['telepon']) ?></p>
    <p><span class="label">Alamat  :</span> <?= htmlspecialchars($data['alamat']) ?></p>
    <hr>
    <p><span class="label">Pulau Tujuan   :</span> <?= htmlspecialchars($data['nama_pulau']) ?></p>
    <p><span class="label">Paket          :</span> <?= $data['jenis_paket'] ?> - <?= $data['durasi'] ?> via <?= $data['via_transport'] ?></p>
    <p><span class="label">Jumlah Peserta :</span> <?= $data['peserta'] ?></p>
    <p><span class="label">Sewa Boat      :</span> <?= $data['sewa_boat'] ? 'Ya' : 'Tidak' ?></p>
    <p><span class="label">Total Harga    :</span> Rp <?= number_format($data['total_harga'], 0, ',', '.') ?></p>
  </div>

  <div class="success-msg">
    Terima kasih telah memesan paket wisata kami! Informasi selanjutnya akan kami infokan melalui email anda. Silahkan perhatikan tata cara 
    dibawah ini untuk melakukan proses pembayaran <br>
    <a href="rules.php">klik disini</a>
  </div>

  <a class="btn-kembali" href="menu.php">Kembali ke Beranda</a>
</div>
</body>
</html>