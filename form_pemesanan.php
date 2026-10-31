<?php
$conn = new mysqli("localhost", "root", "", "pulauseribu");

if (isset($_POST['submit'])) {
    //menyimpan data pemesan
    $query = $conn->prepare("INSERT INTO pemesan (nama, email, telepon, alamat) VALUES (?, ?, ?, ?)");
    $query->bind_param("ssss", $_POST['nama'], $_POST['email'], $_POST['telepon'], $_POST['alamat']);
    $query->execute();
    $pemesan_id = $query->insert_id;

    $paket_id  = $_POST['paket'];
    $peserta   = $_POST['peserta'];
    $sewa_boat = isset($_POST['sewa_boat']) ? 1 : 0;

    //mencari harga per peserta sesuai jumlah peserta
    $query = $conn->prepare("SELECT harga_per_pax FROM harga_paket WHERE paket_id = ? AND ? BETWEEN min_peserta AND max_peserta LIMIT 1");
    $query->bind_param("ii", $paket_id, $peserta);
    $query->execute();
    $query->bind_result($harga_per_pax);
    $query->fetch();
    $query->close();

    $total = $harga_per_pax * $peserta;

    //menambah biaya sewa boat kalau dicentang
    if ($sewa_boat) {
    $query = $conn->prepare("
        SELECT pulau.harga_sewa 
        FROM paket 
        JOIN pulau ON paket.pulau_id = pulau.pulau_id 
        WHERE paket.paket_id = ?"
    );

    $query->bind_param("i", $paket_id);
    $query->execute();
    $query->bind_result($harga_sewa);
    $query->fetch();
    $query->close();

    if ($harga_sewa !== null) {
        $total += $harga_sewa;
    }
}

    //menyimpan data ke tabel pemesanan
    $conn->query("INSERT INTO pemesanan (pemesan_id, paket_id, peserta, sewa_boat, total_harga) VALUES ($pemesan_id, $paket_id, $peserta, $sewa_boat, $total)");
    $pemesanan_id = $conn->insert_id;

    header("Location: struk.php?id=$pemesanan_id");
    exit;
}

$pulau = $conn->query("SELECT * FROM pulau");

$old = [
  'nama'    => $_POST['nama'] ?? '',
  'email'   => $_POST['email'] ?? '',
  'telepon' => $_POST['telepon'] ?? '',
  'alamat'  => $_POST['alamat'] ?? '',
  'pulau'   => $_POST['pulau'] ?? '',
  'paket'   => $_POST['paket'] ?? '',
  'peserta' => $_POST['peserta'] ?? ''
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Pemesanan</title>
  <link rel="stylesheet" href="CSS/menu.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
</head>
<style>
  body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background-size: cover;
      backdrop-filter: blur(5px);
      color: #e0e0e0;
      background-color: rgba(11, 26, 65, 0.951);
    }

    form {
      background: rgba(15, 23, 42, 0.7);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 16px;
      padding: 40px;
      max-width: 600px;
      margin: 60px auto;
      box-shadow: 0 10px 30px rgba(0,0,0,0.3);
      backdrop-filter: blur(15px);
    }

    h4 {
      text-align: center;
      color: rgb(241, 245, 249);
      margin-bottom: 1cm;
      text-shadow: 0 2px 6px rgba(255, 255, 255, 0.19);
    }

    input[type="text"],
    input[type="email"],
    input[type="number"],
    textarea,
    select {
      width: 94%;
      padding: 14px;
      margin: 14px 0;
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 12px;
      font-size: 15px;
      background: rgba(255,255,255,0.05);
      color: rgb(241, 245, 249);
      transition: 0.3s;
      backdrop-filter: blur(8px);
    }

    input:focus,
    textarea:focus,
    select:focus {
      outline: none;
      background-color: rgba(255,255,255,0.08);
      border-color: #60a5fa;
    }

    input::placeholder, textarea::placeholder {
      color: rgb(203, 213, 225);
    }

    textarea {
      resize: vertical;
    }

    input[type="checkbox"] {
      transform: scale(1.2);
      margin-right: 10px;
      accent-color: rgb(59, 131, 246);
    }

    label {
      display: block;
      margin: 14px 0 6px;
      font-weight: 500;
      color: rgba(226, 232, 240, 0.9);
    }

    button {
      background: linear-gradient(to right, #2563eb, #1e40af);
      color: #fff;
      padding: 14px 28px;
      border: none;
      border-radius: 12px;
      font-weight: 600;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s ease;
      width: 100%;
      margin-top: 24px;
    }

    button:hover {
      background: linear-gradient(to right, #1d4ed8, #1e3a8a);
      transform: scale(1.02);
    }

    select option {
      background: #1e293b;
      color: #fff;
    }

    @media (max-width: 700px) {
      form {
        margin: 20px;
        padding: 30px;
      }
    }
</style>
<body>
<form method="post">
  <h4>Data Pemesan</h4>
  <input type="text" name="nama" placeholder="Nama" value="<?= htmlspecialchars($old['nama']) ?>" required><br>
  <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($old['email']) ?>" required><br>
  <input type="number" name="telepon" placeholder="Telepon" value="<?= htmlspecialchars($old['telepon']) ?>" required><br>
  <textarea name="alamat" placeholder="Alamat"><?= htmlspecialchars($old['alamat']) ?></textarea><br>

  <h4>Pilih Pulau</h4>
  <select name="pulau" required onchange="this.form.submit()">
    <option value="">- Pilih Pulau -</option>
    <?php foreach ($pulau as $p): ?>
      <option value="<?= $p['pulau_id'] ?>" <?= ($old['pulau'] == $p['pulau_id']) ? 'selected' : '' ?>>
        <?= $p['nama'] ?>
      </option>
    <?php endforeach; ?>
  </select><br>

  <?php if (!empty($old['pulau'])):
    $pulau_id = $old['pulau'];
    if ($pulau_id == 6) {
        $paket = $conn->query("SELECT * FROM paket WHERE pulau_id = 6 AND (jenis_paket = 'ONE DAY' OR jenis_paket = 'HEMAT')");
    } else {
        $paket = $conn->query("SELECT * FROM paket WHERE pulau_id = $pulau_id");
    }
  ?>

    <h4>Pilih Paket</h4>
    <select name="paket" required onchange="this.form.submit()">
      <option value="">- Pilih Paket -</option>
      <?php foreach ($paket as $pk): ?>
        <option value="<?= $pk['paket_id'] ?>" <?= ($old['paket'] == $pk['paket_id']) ? 'selected' : '' ?>>
          <?= $pk['jenis_paket'] ?> - <?= $pk['durasi'] ?> via <?= $pk['via_transport'] ?>
        </option>
      <?php endforeach; ?>
    </select><br>

    <?php
    $min_peserta = 2;
    $max_peserta = 100; 

    if (!empty($old['paket'])) {
        $paket_id = intval($old['paket']);
        $query = $conn->prepare("SELECT MIN(min_peserta), MAX(max_peserta) FROM harga_paket WHERE paket_id = paket_id");
        $query->bind_param("i", $paket_id);
        $query->execute();
        $query->bind_result($min_peserta, $max_peserta);
        $query->fetch();
        $query->close();
    }
    ?>

    <h4>Jumlah Peserta</h4>
    <select name="peserta" required>
      <option value="">- Jumlah Peserta -</option>
      <?php 
        $selected_peserta = $old['peserta'] ?? 0;
        for ($i = $min_peserta; $i <= $max_peserta; $i++): 
      ?>
        <option value="<?= $i ?>" <?= ($selected_peserta == $i) ? 'selected' : '' ?>>
          <?= $i ?> Peserta
        </option>
      <?php endfor; ?>
    </select><br>

    <div style="margin-top: 1cm; display: flex; align-items: center; gap: 4px;">
      <input type="checkbox" name="sewa_boat" <?= isset($_POST['sewa_boat']) ? 'checked' : '' ?>>
      <label for="sewa_boat" style="margin: 0;">Sewa Boat</label>
    </div>

    <button type="submit" name="submit">Pesan</button>
  <?php endif; ?>
</form>
</body>
</html>