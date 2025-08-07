<?php
// AKSI PELAJAR - Simple Responsive Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AKSI PELAJAR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="AKSI PELAJAR - Empowering Students for a Brighter Future">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">AKSI PELAJAR</div>
            <ul class="nav-links" id="navLinks">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
            <div class="menu-toggle" id="menuToggle">&#9776;</div>
        </nav>
    </header>

    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Selamat Datang di <span>AKSI PELAJAR</span></h1>
            <p>Komunitas pelajar yang beraksi untuk masa depan yang lebih cerah.</p>
            <a href="#about" class="cta-btn">Pelajari Lebih Lanjut</a>
        </div>
        <img src="assets/students-warm.jpg" alt="Pelajar Beraksi" class="hero-img">
    </section>

    <section class="about" id="about">
        <h2>Tentang Kami</h2>
        <div class="about-content">
            <img src="assets/group-students.jpg" alt="Tentang Pelajar" class="about-img">
            <div>
                <p>
                    AKSI PELAJAR adalah wadah bagi pelajar Indonesia untuk mengembangkan diri, berkolaborasi, dan berkontribusi bagi masyarakat. Kami percaya bahwa setiap pelajar memiliki potensi untuk menjadi agen perubahan.
                </p>
                <ul>
                    <li>Program mentoring dan pelatihan</li>
                    <li>Kegiatan sosial dan edukatif</li>
                    <li>Komunitas yang suportif</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h2>Kontak Kami</h2>
        <form class="contact-form" method="post" action="contact.php">
            <input type="text" name="name" placeholder="Nama Anda" required>
            <input type="email" name="email" placeholder="Email" required>
            <textarea name="message" rows="4" placeholder="Pesan..." required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
        <div class="contact-info">
            <p>Email: <a href="mailto:info@aksipelajar.id">info@aksipelajar.id</a></p>
            <p>Instagram: <a href="https://instagram.com/aksipelajar" target="_blank">@aksipelajar</a></p>
        </div>
    </section>

    <footer>
        <p>&copy; <?=date('Y')?> AKSI PELAJAR. All rights reserved.</p>
    </footer>
    <script>
    // Mobile menu toggle
    document.getElementById('menuToggle').onclick = function() {
        document.getElementById('navLinks').classList.toggle('show');
    };
    </script>
</body>
</html>