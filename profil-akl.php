<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil AKL - SMK Al Falah Tanjungjaya</title>
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
                <h1 class="animate-fade-in-up">Akuntansi dan Keuangan Lembaga (AKL)</h1>
                <p class="animate-fade-in-up animate-delay-100">Mencetak ahli akuntansi yang handal di era digital</p>
            </div>
        </section>

        <section class="jurusan-detail section-padding">
            <div class="container">
                <div class="detail-grid">
                    <div class="detail-content">
                        <h2 class="animate-fade-in-up">Tentang Jurusan AKL</h2>
                        <p class="animate-fade-in-up animate-delay-100">Jurusan Akuntansi dan Keuangan Lembaga (AKL) membekali siswa dengan pengetahuan dan keterampilan dalam bidang akuntansi, keuangan, perpajakan, dan audit untuk siap bekerja di berbagai lembaga keuangan dan perusahaan.</p>
                        
                        <h3 class="animate-fade-in-up animate-delay-200">Kompetensi Keahlian</h3>
                        <ul class="competency-list animate-fade-in-up animate-delay-300">
                            <li><i class="fas fa-calculator"></i> Akuntansi Keuangan</li>
                            <li><i class="fas fa-file-invoice-dollar"></i> Perpajakan</li>
                            <li><i class="fas fa-chart-line"></i> Analisis Laporan Keuangan</li>
                            <li><i class="fas fa-cash-register"></i> Akuntansi Perbankan</li>
                            <li><i class="fas fa-search-dollar"></i> Auditing</li>
                            <li><i class="fas fa-laptop-code"></i> Software Akuntansi</li>
                        </ul>

                        <h3 class="animate-fade-in-up animate-delay-400">Prospek Karir</h3>
                        <div class="career-prospects animate-fade-in-up animate-delay-500">
                            <div class="career-item">
                                <h4>Accountant</h4>
                                <p>Mengelola pembukuan dan laporan keuangan perusahaan</p>
                            </div>
                            <div class="career-item">
                                <h4>Tax Consultant</h4>
                                <p>Konsultan perpajakan untuk individu dan perusahaan</p>
                            </div>
                            <div class="career-item">
                                <h4>Bank Teller</h4>
                                <p>Melayani transaksi perbankan di lembaga keuangan</p>
                            </div>
                            <div class="career-item">
                                <h4>Financial Staff</h4>
                                <p>Staf keuangan di berbagai jenis perusahaan</p>
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
                                    <span class="info-value">Brevet Pajak</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label"><i class="fas fa-building"></i> Industri Partner</span>
                                    <span class="info-value">Bank, KPP, Perusahaan</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar-card animate-fade-in-up animate-delay-100">
                            <div class="card-header">
                                <h3>Fasilitas</h3>
                            </div>
                            <div class="card-body">
                                <ul class="facility-list">
                                    <li><i class="fas fa-check"></i> Lab Komputer Akuntansi</li>
                                    <li><i class="fas fa-check"></i> Software Akuntansi</li>
                                    <li><i class="fas fa-check"></i> Mini Bank</li>
                                    <li><i class="fas fa-check"></i> Perpustakaan Akuntansi</li>
                                    <li><i class="fas fa-check"></i> Simulasi Kantor</li>
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