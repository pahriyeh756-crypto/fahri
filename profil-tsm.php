<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil TSM - SMK Al Falah Tanjungjaya</title>
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
                <h1 class="animate-fade-in-up">Teknik Sepeda Motor (TSM)</h1>
                <p class="animate-fade-in-up animate-delay-100">Menjadi ahli dalam perawatan dan perbaikan sepeda motor</p>
            </div>
        </section>

        <section class="jurusan-detail section-padding">
            <div class="container">
                <div class="detail-grid">
                    <div class="detail-content">
                        <h2 class="animate-fade-in-up">Tentang Jurusan TSM</h2>
                        <p class="animate-fade-in-up animate-delay-100">Jurusan Teknik Sepeda Motor (TSM) membekali siswa dengan keterampilan teknis dalam perawatan, perbaikan, dan modifikasi sepeda motor. Siswa belajar menguasai sistem mekanik, elektrik, dan elektronik kendaraan roda dua.</p>
                        
                        <h3 class="animate-fade-in-up animate-delay-200">Kompetensi Keahlian</h3>
                        <ul class="competency-list animate-fade-in-up animate-delay-300">
                            <li><i class="fas fa-cog"></i> Perbaikan Mesin</li>
                            <li><i class="fas fa-bolt"></i> Sistem Kelistrikan</li>
                            <li><i class="fas fa-tachometer-alt"></i> Sistem Transmisi</li>
                            <li><i class="fas fa-tools"></i> Service & Maintenance</li>
                            <li><i class="fas fa-car-crash"></i> Troubleshooting</li>
                            <li><i class="fas fa-wrench"></i> Modifikasi Motor</li>
                        </ul>

                        <h3 class="animate-fade-in-up animate-delay-400">Prospek Karir</h3>
                        <div class="career-prospects animate-fade-in-up animate-delay-500">
                            <div class="career-item">
                                <h4>Motorcycle Technician</h4>
                                <p>Teknisi sepeda motor di bengkel resmi</p>
                            </div>
                            <div class="career-item">
                                <h4>Service Advisor</h4>
                                <p>Konsultan service di dealer motor</p>
                            </div>
                            <div class="career-item">
                                <h4>Workshop Manager</h4>
                                <p>Manajer bengkel sepeda motor</p>
                            </div>
                            <div class="career-item">
                                <h4>Motor Modifier</h4>
                                <p>Ahli modifikasi sepeda motor</p>
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
                                    <span class="info-value">AHM, Yamaha</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label"><i class="fas fa-building"></i> Industri Partner</span>
                                    <span class="info-value">Dealer Motor, Bengkel</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar-card animate-fade-in-up animate-delay-100">
                            <div class="card-header">
                                <h3>Fasilitas</h3>
                            </div>
                            <div class="card-body">
                                <ul class="facility-list">
                                    <li><i class="fas fa-check"></i> Bengkel Praktik</li>
                                    <li><i class="fas fa-check"></i> Mesin Motor Berbagai Merek</li>
                                    <li><i class="fas fa-check"></i> Tools dan Equipment</li>
                                    <li><i class="fas fa-check"></i> Diagnostic Tools</li>
                                    <li><i class="fas fa-check"></i> Spare Parts</li>
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