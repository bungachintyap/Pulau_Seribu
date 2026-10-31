<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort</title>
    <link rel="stylesheet" href="CSS/menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <!-- bagian header -->
    <header>
        <div class="h_img">
            <img src="GAMBAR/logo.png" alt="pulauseribu">
        </div>
        <div class="navbar">
            <a href="menu.php">Home</a>
            <div class="dropdown">
                <a href="#">Destination</a>
                <div class="dropdown-content">
                    <a href="resort.php">Resort</a>
                    <a href="nonresort.php">Non Resort</a>
                </div>
            </div>
            <a href="boat.php">Boat</a>
            <a href="login.php">Ticket</a>
        </div>
    </header>

    <!-- bagian gambar pulau 1k -->
    <section class="m_img" style="background-image: url(GAMBAR/bgr.png);">
        <h3>Resort Living, Island Dreaming</h3>
        <p>LETS JOIN AND ENJOY</p>
    </section>

    <p style="margin-top: 5mm; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Pulau Seribu adalah surga tropis yang menawarkan lebih dari sekadar keindahan alamnya. Di sini, kamu bakal menemukan 
        deretan resort mewah yang dirancang untuk memberikan kenyamanan maksimal sambil tetap menjaga harmoni dengan lingkungan 
        sekitar. Setiap resort menyuguhkan pemandangan laut yang menakjubkan, fasilitas lengkap, dan suasana yang tenang, cocok 
        banget buat kamu yang pengen lepas dari penatnya rutinitas sehari-hari. <br><br>Gak cuma tempat buat santai, Pulau Seribu 
        juga menyediakan berbagai aktivitas seru mulai dari snorkeling, diving, hingga island hopping yang bikin liburan makin berkesan. 
        Dengan pelayanan ramah dan eksklusif, Pulau Seribu jadi pilihan ideal buat kamu yang mau menikmati hidup ala resort dengan 
        sentuhan keindahan alam tropis yang autentik dan tak terlupakan.
    </p>

    <section class="r_fasil">
        <img src="GAMBAR/r1.jpg" alt="r1">
        <img src="GAMBAR/r2.jpg" alt="r2">
        <img src="GAMBAR/r3.jpg" alt="r3">
    </section>

    <p style="margin-top: 5mm; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
        Resort di Pulau Seribu dirancang untuk memberikan pengalaman menginap yang memadukan kemewahan dan kenyamanan dalam balutan 
        keindahan alam tropis. Setiap akomodasi, mulai dari vila privat yang luas hingga bungalow dengan pemandangan laut langsung, menawarkan 
        suasana yang tenang dan eksklusif, jauh dari keramaian. Fasilitas modern seperti kolam renang infinity, restoran dengan menu gourmet, 
        dan layanan spa profesional melengkapi kenyamanan tamu, memastikan setiap momen di sini terasa istimewa. <br><br>Selain kenyamanan 
        akomodasi, resort di Pulau Seribu menyediakan beragam aktivitas yang memungkinkan pengunjung menjelajah keindahan bawah laut dan 
        pulau-pulau kecil sekitar. Aktivitas seperti snorkeling, diving, dan island hopping didukung oleh fasilitas peralatan lengkap dan 
        pemandu berpengalaman, sehingga aman dan menyenangkan. Dengan layanan personal yang ramah dan profesional, resort ini bukan hanya 
        tempat beristirahat, tapi juga destinasi hidup yang menghidupkan mimpi liburan tropis terbaik.
    </p>

    <section>
        <h1 class="r_ragam">Ragam Pilihan Paket Wisata Resort</h1>
        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            Pulau Seribu adalah gugusan pulau indah yang jadi destinasi favorit buat yang cari ketenangan dan keindahan alam dekat ibu kota. 
            Di antara pulau-pulau itu, Pulau Bidadari dan Pulau Macan jadi pilihan utama dengan resort-resort mewah yang siap manjain kamu. 
            Pulau Bidadari menawarkan vila elegan di tepi pantai pasir putih dengan laut jernih yang cocok buat snorkeling dan island hopping, 
            sementara Pulau Macan hadir dengan konsep eco-resort yang asri dan santai, pas banget buat yang pengen liburan dekat alam tapi tetap 
            nyaman. Di kedua pulau ini, layanan lengkap dan fasilitas modern berpadu sempurna buat bikin pengalaman liburan kamu jadi tak terlupakan.
        </p>
        <section class="r_islands">
            <div class="card" style="width: 18rem;">
                <img src="GAMBAR/p.bidadari.jpeg" class="card-img-top" alt="pulaubidadari">
                <div class="card-body">
                    <h5 class="card-title">Pulau Bidadari</h5>
                    <p class="card-text">Menyuguhkan pemandangan matahari terbenam yang memukau serta fasilitas resort yang nyaman dan modern di dekat Jakarta.</p>
                    <a href="PulauBidadari.php" class="btn btn-primary stretched-link">Learn More</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="GAMBAR/p.macan.jpg" class="card-img-top" alt="pulaumacan">
                <div class="card-body">
                    <h5 class="card-title">Pulau Macan</h5>
                    <p class="card-text">Eco-resort yang berfokus pada pelestarian lingkungan, memberikan pengalaman liburan yang tenang dan dekat dengan alam.</p>
                    <a href="PulauMacan.php" class="btn btn-primary stretched-link">Learn More</a>
                </div>
            </div>
        </section>
    </section>

    <div class="island-links" style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; margin-top: 2rem;">
        <a href="pulautidung.php">Pulau Tidung</a>
        <a href="pulaupramuka.php">Pulau Pramuka</a>
        <a href="pulaupari.php">Pulau Pari</a>
        <a href="pulauharapan.php">Pulau Harapan</a>
        <a href="pulaubidadari.php">Pulau Bidadari</a>
        <a href="pulaumacan.php">Pulau Macan</a>
    </div>

    <!-- footer -->
    <section id="kontak" style="background-color: #f8f9fa; padding: 1.5rem; margin-top: 2cm;">
        <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: center; text-align: center;">
            <div>
                <strong>📍 Alamat</strong><br>
                Jl. Wisata Bahari No.10, Jakarta Utara
            </div>
            <div>
                <strong>📞 Telepon/WA</strong><br>
                0822-986-56789
            </div>
            <div>
                <strong>📧 Email</strong><br>
                info@pulauseribu.com
            </div>
            <div>
                <strong>📱 Instagram</strong><br>
                <a href="#" target="_blank">@pulauseribu</a>
            </div>
        </div>
    </section>

    <p style="text-align: center; margin-top: 1rem; font-size: 0.9rem; color: #6c757d;">
        &copy; 2025 Pulau Seribu Tour. All rights reserved.
    </p>
</body>
</html>