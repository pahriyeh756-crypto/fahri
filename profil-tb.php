<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil TB - SMK Al Falah Tanjungjaya</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="navbar-fancy">
        <nav class="navbar">
            <div class="container">
                <a href="index.php" class="logo">
                    <img src="images/logo smk af.jpg" alt="Logo SMK Al Falah Tanjungjaya">
                </a>
                <div class="menu-wrapper">
                    <ul class="menu">
                        <li><a href="index.php" class="nav-link">Beranda</a></li>
                        <li><a href="profil.php" class="nav-link">Tentang Kami</a></li>
                        <li><a href="jurusan.php" class="nav-link active">Jurusan</a></li>
                        <li><a href="ekskul.php" class="nav-link">Ekstrakurikuler</a></li>
                       
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle">Lainnya <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="berita.php" class="nav-link">Berita</a></li>
                                <li><a href="galeri.php" class="nav-link">Galeri</a></li>
                                <li><a href="kontak.php" class="nav-link">Kontak</a></li>
                                <li><a href="admin/login.php" class="nav-link">Login</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="hamburger-menu" aria-label="Toggle Menu">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section class="page-hero">
            <div class="container">
                <h1 class="animate-fade-in-up">Tata Busana (TB)</h1>
                <p class="animate-fade-in-up animate-delay-100">Mengembangkan kreativitas dalam dunia fashion dan desain busana</p>
            </div>
        </section>

        <section class="jurusan-detail section-padding">
            <div class="container">
                <div class="detail-grid">
                    <div class="detail-content">
                        <h2 class="animate-fade-in-up">Tentang Jurusan Tata Busana</h2>
                        <p class="animate-fade-in-up animate-delay-100">Jurusan Tata Busana (TB) membekali siswa dengan keterampilan dalam desain, pembuatan, dan produksi busana. Siswa belajar menciptakan karya fashion yang kreatif dan berkualitas.</p>
                        
                        <h3 class="animate-fade-in-up animate-delay-200">Kompetensi Keahlian</h3>
                        <ul class="competency-list animate-fade-in-up animate-delay-300">
                            <li><i class="fas fa-ruler-combined"></i> Pola dan Desain Busana</li>
                            <li><i class="fas fa-cut"></i> Teknik Menjahit</li>
                            <li><i class="fas fa-palette"></i> Desain Fashion</li>
                            <li><i class="fas fa-tshirt"></i> Produksi Busana</li>
                            <li><i class="fas fa-swatchbook"></i> Tekstil dan Bahan</li>
                            <li><i class="fas fa-store"></i> Fashion Business</li>
                        </ul>

                        <h3 class="animate-fade-in-up animate-delay-400">Prospek Karir</h3>
                        <div class="career-prospects animate-fade-in-up animate-delay-500">
                            <div class="career-item">
                                <h4>Fashion Designer</h4>
                                <p>Perancang busana dan koleksi fashion</p>
                            </div>
                            <div class="career-item">
                                <h4>Tailor</h4>
                                <p>Penjahit profesional untuk busana custom</p>
                            </div>
                            <div class="career-item">
                                <h4>Pattern Maker</h4>
                                <p>Pembuat pola busana untuk produksi massal</p>
                            </div>
                            <div class="career-item">
                                <h4>Fashion Entrepreneur</h4>
                                <p>Pengusaha di bidang fashion dan busana</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="detail-sidebar">
                        <div class="sidebar-card animate-fade-in-up">
                            <div class="card-header">
                                <h3>Informasi Jurusan</h3>
                            </div>
                            <div class="card-body">
                                <div class="info-item">
                                    <span class="info-label"><i class="fas fa-clock"></i> Durasi</span>
                                    <span class="info-value">3 Tahun</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label"><i class="fas fa-users"></i> Kuota</span>
                                    <span class="info-value">28 Siswa/Tahun</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label"><i class="fas fa-certificate"></i> Sertifikasi</span>
                                    <span class="info-value">Fashion Design</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label"><i class="fas fa-building"></i> Industri Partner</span>
                                    <span class="info-value">Butik, Garment, UMKM</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar-card animate-fade-in-up animate-delay-100">
                            <div class="card-header">
                                <h3>Fasilitas</h3>
                            </div>
                            <div class="card-body">
                                <ul class="facility-list">
                                    <li><i class="fas fa-check"></i> Lab Menjahit</li>
                                    <li><i class="fas fa-check"></i> Mesin Jahit Modern</li>
                                    <li><i class="fas fa-check"></i> Studio Desain</li>
                                    <li><i class="fas fa-check"></i> Perpustakaan Fashion</li>
                                    <li><i class="fas fa-check"></i> Showroom Busana</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <div class="theme-switcher" aria-label="Ganti Tema">
        <i class="fas fa-moon"></i>
    </div>

    <a href="#" class="back-to-top" aria-label="Kembali ke Atas"><i class="fas fa-arrow-up"></i></a>

    <script src="script.js"></script>
</body>
</html>