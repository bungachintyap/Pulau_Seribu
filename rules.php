<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Peraturan & Tata Cara Pembayaran</title>
<style>
 body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #0d1b2a; 
    color: #d0d7de; 
    padding: 40px 20px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
    margin: 0;
}
.container {
    background-color: #1b263b; 
    max-width: 720px;
    border-radius: 12px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.8);
    padding: 40px 55px;
    border: 1.5px solid #415a77; 
}
h1 {
    font-size: 2.6rem;
    font-weight: 700;
    color: #a9bcd0; 
    text-align: center;
    margin-bottom: 32px;
    border-bottom: 4px solid #627d98;
    padding-bottom: 12px;
    letter-spacing: 1.1px;
    font-family: 'Georgia', serif;
}
h2 {
    font-size: 1.4rem;
    font-weight: 600;
    margin-top: 36px;
    margin-bottom: 20px;
    color: #bfcde0;
    border-left: 6px solid #627d98;
    padding-left: 14px;
    font-family: 'Georgia', serif;
}
ol, ul {
    margin-left: 28px;
    color: #d0d7de;
    font-size: 1.05rem;
    line-height: 1.6;
}
ol li, ul li {
    margin-bottom: 16px;
}
p.footer {
    font-style: italic;
    font-size: 0.95rem;
    color: #627d98;
    text-align: center;
    margin-top: 42px;
    user-select: none;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
img.qr-code {
    display: block;
    max-width: 190px;
    margin: 28px auto 34px auto;
    border-radius: 10px;
    border: 2px solid #415a77;
    background-color: #274060;
    padding: 14px;
    box-shadow: 0 5px 14px rgba(65, 90, 119, 0.5);
}
b {
    color: #a9bcd0;
}
@media (max-width: 480px) {
    .container {
        padding: 30px 25px;
    }
    h1 {
        font-size: 2rem;
    }
    h2 {
        font-size: 1.15rem;
    }
    img.qr-code {
        max-width: 160px;
    }
}
</style>
</head>
<body>
    <div class="container">
        <h1>Tata Cara Pembayaran</h1>

        <h2>Tata Cara Pembayaran</h2>
        <ol>
            <li>Silakan melakukan pembayaran sesuai dengan total harga pemesanan yang telah diinformasikan.</li>
            <li>Pembayaran dapat dilakukan melalui transfer bank atau dengan melakukan scan QR code yang tersedia di bawah ini.</li>
            <li>Setelah melakukan pembayaran, Anda akan menerima email berisi konfirmasi dan tautan Google Form untuk mengunggah bukti pembayaran.</li>
            <li>Mohon unggah bukti pembayaran melalui Google Form tersebut agar dapat kami verifikasi.</li>
            <li>Tim kami akan memeriksa bukti pembayaran Anda dan mengubah status pembayaran menjadi <b>LUNAS</b> apabila valid.</li>
            <li>Setelah pembayaran dikonfirmasi lunas, tiket elektronik akan dikirimkan melalui email Anda.</li>
        </ol>

        <h2>Metode Pembayaran</h2>
        <ul>
            <li><b>Bank BCA:</b> 1234567890 a.n. PT Wisata Alam</li>
            <li><b>OVO / DANA / GoPay:</b> 0812 3456 7890</li>
        </ul>

        <h2>Pembayaran Melalui QR Code</h2>
        <img src="GAMBAR/qris.jpg" alt="QRIS Pembayaran" class="qr-code" />

        <h2>Ketentuan Tambahan</h2>
        <ul>
            <li>Pembayaran harus dilakukan dalam waktu 24 jam setelah melakukan pemesanan.</li>
            <li>Jika pembayaran tidak diterima dalam jangka waktu tersebut, maka pemesanan akan dibatalkan secara otomatis.</li>
            <li>Bukti pembayaran yang tidak valid akan ditolak dan harus dilakukan pengiriman ulang bukti pembayaran yang benar.</li>
            <li>Tiket yang telah lunas tidak dapat dibatalkan atau dikembalikan.</li>
        </ul>

        <p class="footer">
            Jika ada pertanyaan, silakan menghubungi kami melalui email <b>info@pulauseribu.com</b> atau WhatsApp <b>0822-986-56789</b>.
            <br><br><a href="menu.php" style="color: #415a77; text-align:center;" >menu</a>
        </p>
    </div>
</body>
</html>