<?php
$conn = new mysqli("localhost", "root", "", "pulauseribu");

//hapus pesanan
if (isset($_POST['hapus'])) {
    $conn->query("DELETE FROM pemesanan WHERE pemesanan_id = " . $_POST['id']);
}

//update pesanan
if (isset($_POST['update'])) {
    $peserta   = $_POST['peserta'];
    $sewa_boat = isset($_POST['sewa_boat']) ? 1 : 0;
    $id        = $_POST['id'];
    $paket_id  = $_POST['paket_id'];

    //mencari harga per orang sesuai jumlah peserta
    $query = $conn->prepare("SELECT harga_per_pax FROM harga_paket WHERE paket_id = ? AND ? BETWEEN min_peserta AND max_peserta LIMIT 1");
    $query->bind_param("ii", $paket_id, $peserta);
    $query->execute();
    $query->bind_result($harga_per_pax);
    $query->fetch();
    $query->close();

    $total = $harga_per_pax * $peserta;

    //tambah harga sewa boat jika ada
    if ($sewa_boat) {
        $q = $conn->query("SELECT pulau.harga_sewa FROM paket JOIN pulau ON paket.pulau_id = pulau.pulau_id WHERE paket.paket_id = $paket_id");
        $harga_sewa = $q->fetch_row()[0];
        $total += $harga_sewa;
    }

    //simpan perubahan ke database
    $query = $conn->prepare("UPDATE pemesanan SET peserta = ?, sewa_boat = ?, total_harga = ?, status_pembayaran = ? WHERE pemesanan_id = ?");
    $query->bind_param("iiisi", $peserta, $sewa_boat, $total, $status_pembayaran, $id);
    $query->execute();
}

//ambil semua data pesanan buat ditampilkan
$q = $conn->query("SELECT ps.*, p.nama, p.email, pk.jenis_paket, pk.durasi, pk.via_transport, pl.nama AS pulau, pk.paket_id
FROM pemesanan ps
JOIN pemesan p ON ps.pemesan_id = p.pemesan_id
JOIN paket pk ON ps.paket_id = pk.paket_id
JOIN pulau pl ON pk.pulau_id = pl.pulau_id
ORDER BY ps.tanggal DESC");
?>

<style>
  body {
    background-color: #0d1b2a;
    color: #e0e1dd;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding: 20px;
  }

  h2 {
    color: #e0e1dd;
    border-bottom: 2px solid #1b263b;
    padding-bottom: 10px;
    margin-bottom: 20px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    background-color: #1b263b;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 0 10px #00000066;
  }

  th, td {
    border: 1px solid #415a77;
    padding: 10px;
    text-align: center;
  }

  th {
    background-color: #1e2d42;
    color: #e0e1dd;
  }

  td {
    color: #e0e1dd;
  }

  input[type="number"] {
    width: 60px;
    padding: 5px;
    border: none;
    border-radius: 5px;
    background-color: #415a77;
    color: #e0e1dd;
  }

  input[type="checkbox"] {
    transform: scale(1.3);
    accent-color: #778da9;
  }

  button {
    background-color: #0a9396;
    color: #fff;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    cursor: pointer;
    margin: 2px;
    transition: 0.3s;
  }

  button:hover {
    background-color: #94d2bd;
    color: #000;
  }

  form {
    margin: 0;
  }

  tr:nth-child(even) {
    background-color: #1b2a41;
  }

  tr:hover {
    background-color: #2c3e50;
  }

  img.bukti-preview {
    max-width: 60px;
    max-height: 60px;
    border-radius: 6px;
  }
</style>

<h2>Kelola Pemesanan</h2>
<table border="1" cellpadding="5">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Pulau</th>
    <th>Paket</th>
    <th>Peserta</th>
    <th>Sewa Boat</th>
    <th>Total</th>
    <th>Tanggal</th>
    <th>Status</th>
    <th>Aksi</th>
  </tr>
  <?php $no = 1; foreach ($q as $data): ?>
    <tr>
      <form method="post">
        <td><?= $no++ ?></td>
        <td><?= htmlspecialchars($data['nama']) ?></td>
        <td><?= htmlspecialchars($data['pulau']) ?></td>
        <td><?= $data['jenis_paket'] ?> - <?= $data['durasi'] ?> via <?= $data['via_transport'] ?></td>
        <td>
          <?= $data['peserta'] ?>
        </td>
        <td>
          <?= $data['sewa_boat'] ? 'Ya' : 'Tidak' ?>
        </td>
        <td>Rp<?= number_format($data['total_harga'], 0, ',', '.') ?></td>
        <td><?= $data['tanggal'] ?></td>
        <td><?= $data['status_pembayaran'] ?></td>
        <td>
          <input type="hidden" name="id" value="<?= $data['pemesanan_id'] ?>">
          <input type="hidden" name="paket_id" value="<?= $data['paket_id'] ?>">
          <button name="update">Update</button>
          <button name="hapus" onclick="return confirm('Yakin hapus?')">Hapus</button>
        </td>
      </form>
    </tr>
  <?php endforeach; ?>
</table>
<a href="menu.php" style="color:#778da9;">menu</a>