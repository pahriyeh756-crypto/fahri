<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil TJKT - SMK Al Falah Tanjungjaya</title>
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
                <h1 class="animate-fade-in-up">Teknik Jaringan, Komputer, dan Telekomunikasi (TJKT)</h1>
                <p class="animate-fade-in-up animate-delay-100">Menjadi ahli dalam infrastruktur jaringan dan teknologi komunikasi</p>
            </div>
        </section>

        <section class="jurusan-detail section-padding">
            <div class="container">
                <div class="detail-grid">
                    <div class="detail-content">
                        <h2 class="animate-fade-in-up">Tentang Jurusan TJKT</h2>
                        <p class="animate-fade-in-up animate-delay-100">Jurusan Teknik Jaringan, Komputer, dan Telekomunikasi (TJKT) mempersiapkan siswa untuk menjadi tenaga profesional di bidang jaringan komputer, administrasi sistem, dan teknologi telekomunikasi.</p>
                        
                        <h3 class="animate-fade-in-up animate-delay-200">Kompetensi Keahlian</h3>
                        <ul class="competency-list animate-fade-in-up animate-delay-300">
                            <li><i class="fas fa-network-wired"></i> Instalasi dan Konfigurasi Jaringan</li>
                            <li><i class="fas fa-shield-alt"></i> Keamanan Jaringan dan Siber</li>
                            <li><i class="fas fa-server"></i> Administrasi Server</li>
                            <li><i class="fas fa-wifi"></i> Teknologi Nirkabel</li>
                            <li><i class="fas fa-phone-alt"></i> Sistem Telekomunikasi</li>
                            <li><i class="fas fa-tools"></i> Troubleshooting Jaringan</li>
                        </ul>

                        <h3 class="animate-fade-in-up animate-delay-400">Prospek Karir</h3>
                        <div class="career-prospects animate-fade-in-up animate-delay-500">
                            <div class="career-item">
                                <h4>Network Administrator</h4>
                                <p>Mengelola dan memelihara infrastruktur jaringan perusahaan</p>
                            </div>
                            <div class="career-item">
                                <h4>IT Support Specialist</h4>
                                <p>Memberikan dukungan teknis untuk masalah jaringan dan sistem</p>
                            </div>
                            <div class="career-item">
                                <h4>Cyber Security Analyst</h4>
                                <p>Melindungi sistem dari ancaman keamanan siber</p>
                            </div>
                            <div class="career-item">
                                <h4>Telecommunication Technician</h4>
                                <p>Instalasi dan perawatan sistem telekomunikasi</p>
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
                                    <span class="info-value">36 Siswa/Tahun</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label"><i class="fas fa-certificate"></i> Sertifikasi</span>
                                    <span class="info-value">Cisco, MikroTik</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label"><i class="fas fa-building"></i> Industri Partner</span>
                                    <span class="info-value">Telkom, Indihome, ISP Lokal</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar-card animate-fade-in-up animate-delay-100">
                            <div class="card-header">
                                <h3>Fasilitas</h3>
                            </div>
                            <div class="card-body">
                                <ul class="facility-list">
                                    <li><i class="fas fa-check"></i> Lab Jaringan Komputer</li>
                                    <li><i class="fas fa-check"></i> Router & Switch Cisco</li>
                                    <li><i class="fas fa-check"></i> Server Room</li>
                                    <li><i class="fas fa-check"></i> Tools Networking</li>
                                    <li><i class="fas fa-check"></i> Simulator Jaringan</li>
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