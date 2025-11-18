<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil MPLB - SMK Al Falah Tanjungjaya</title>
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
                <h1 class="animate-fade-in-up">Manajemen Perkantoran dan Layanan Bisnis (MPLB)</h1>
                <p class="animate-fade-in-up animate-delay-100">Mencetak profesional administrasi perkantoran yang kompeten</p>
            </div>
        </section>

        <section class="jurusan-detail section-padding">
            <div class="container">
                <div class="detail-grid">
                    <div class="detail-content">
                        <h2 class="animate-fade-in-up">Tentang Jurusan MPLB</h2>
                        <p class="animate-fade-in-up animate-delay-100">Jurusan Manajemen Perkantoran dan Layanan Bisnis (MPLB) mempersiapkan siswa untuk menjadi tenaga administrasi yang handal dengan keterampilan mengelola perkantoran, kesekretariatan, dan layanan bisnis modern.</p>
                        
                        <h3 class="animate-fade-in-up animate-delay-200">Kompetensi Keahlian</h3>
                        <ul class="competency-list animate-fade-in-up animate-delay-300">
                            <li><i class="fas fa-file-alt"></i> Administrasi Perkantoran</li>
                            <li><i class="fas fa-user-tie"></i> Kesekretariatan</li>
                            <li><i class="fas fa-phone-volume"></i> Layanan Pelanggan</li>
                            <li><i class="fas fa-calendar-alt"></i> Manajemen Waktu</li>
                            <li><i class="fas fa-chart-bar"></i> Manajemen Arsip</li>
                            <li><i class="fas fa-laptop"></i> Office Automation</li>
                        </ul>

                        <h3 class="animate-fade-in-up animate-delay-400">Prospek Karir</h3>
                        <div class="career-prospects animate-fade-in-up animate-delay-500">
                            <div class="career-item">
                                <h4>Secretary</h4>
                                <p>Staff sekretaris di berbagai perusahaan dan instansi</p>
                            </div>
                            <div class="career-item">
                                <h4>Administrative Staff</h4>
                                <p>Staff administrasi perkantoran</p>
                            </div>
                            <div class="career-item">
                                <h4>Customer Service</h4>
                                <p>Pelayanan pelanggan di perusahaan jasa</p>
                            </div>
                            <div class="career-item">
                                <h4>Office Manager</h4>
                                <p>Manajer administrasi perkantoran</p>
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
                                    <span class="info-value">32 Siswa/Tahun</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label"><i class="fas fa-certificate"></i> Sertifikasi</span>
                                    <span class="info-value">Office Management</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label"><i class="fas fa-building"></i> Industri Partner</span>
                                    <span class="info-value">Perusahaan, Instansi</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar-card animate-fade-in-up animate-delay-100">
                            <div class="card-header">
                                <h3>Keterampilan yang Dipelajari</h3>
                            </div>
                            <div class="card-body">
                                <ul class="facility-list">
                                    <li><i class="fas fa-check"></i> Microsoft Office Suite</li>
                                    <li><i class="fas fa-check"></i> Bahasa Inggris Bisnis</li>
                                    <li><i class="fas fa-check"></i> Public Speaking</li>
                                    <li><i class="fas fa-check"></i> Manajemen Dokumen</li>
                                    <li><i class="fas fa-check"></i> Protokol Perkantoran</li>
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