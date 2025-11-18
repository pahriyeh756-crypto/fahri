<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Keahlian - SMK Al Falah Tanjungjaya</title>
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
                <h1 class="animate-fade-in-up">Program Keahlian</h1>
                <p class="animate-fade-in-up animate-delay-100">Berbagai jurusan unggulan yang siap mencetak profesional muda</p>
            </div>
        </section>

        <section class="jurusan section-padding bg-light">
            <div class="container">
                <div class="section-title">
                    <h2 class="animate-fade-in-up">Program Keahlian Kami</h2>
                    <p class="animate-fade-in-up animate-delay-100">Pilih jurusan yang sesuai dengan minat dan bakat Anda</p>
                </div>
                <div class="jurusan-grid">
                    <a href="profil-rpl.php" class="jurusan-item-link">
                        <div class="jurusan-item animate-fade-in-up animate-delay-100">
                            <div class="logo-wrapper">
                                <img src="images/jurusan rpl (1).png" alt="Logo RPL">
                            </div>
                            <h3>Rekayasa Perangkat Lunak (RPL)</h3>
                            <p>Mempelajari pengembangan software, aplikasi web, dan mobile dengan teknologi terkini.</p>
                            <ul class="jurusan-features">
                                <li><i class="fas fa-check"></i> Pemrograman Web & Mobile</li>
                                <li><i class="fas fa-check"></i> Database Management</li>
                                <li><i class="fas fa-check"></i> UI/UX Design</li>
                            </ul>
                        </div>
                    </a>
                    <a href="profil-tjkt.php" class="jurusan-item-link">
                        <div class="jurusan-item animate-fade-in-up animate-delay-200">
                            <div class="logo-wrapper">
                                <img src="images/jurusan tkj (1).jpg" alt="Logo TJKT">
                            </div>
                            <h3>Teknik Jaringan, Komputer, dan Telekomunikasi (TJKT)</h3>
                            <p>Fokus pada infrastruktur jaringan, keamanan siber, dan administrasi server.</p>
                            <ul class="jurusan-features">
                                <li><i class="fas fa-check"></i> Jaringan Komputer</li>
                                <li><i class="fas fa-check"></i> Keamanan Siber</li>
                                <li><i class="fas fa-check"></i> Administrasi Server</li>
                            </ul>
                        </div>
                    </a>
                    <a href="profil-dkv.php" class="jurusan-item-link">
                        <div class="jurusan-item animate-fade-in-up animate-delay-300">
                            <div class="logo-wrapper">
                                <img src="images/jurusan dkv (1).jpg" alt="Logo DKV">
                            </div>
                            <h3>Desain Komunikasi Visual (DKV)</h3>
                            <p>Mengasah kreativitas dalam desain grafis, animasi, dan multimedia.</p>
                            <ul class="jurusan-features">
                                <li><i class="fas fa-check"></i> Desain Grafis</li>
                                <li><i class="fas fa-check"></i> Animasi 2D & 3D</li>
                                <li><i class="fas fa-check"></i> Multimedia Production</li>
                            </ul>
                        </div>
                    </a>
                    <a href="profil-akl.php" class="jurusan-item-link">
                        <div class="jurusan-item animate-fade-in-up animate-delay-400">
                            <div class="logo-wrapper">
                                <img src="images/jurusan akl (1).jpg" alt="Logo AKL">
                            </div>
                            <h3>Akuntansi dan Keuangan Lembaga (AKL)</h3>
                            <p>Fokus pada pembukuan, laporan keuangan, dan audit perusahaan.</p>
                            <ul class="jurusan-features">
                                <li><i class="fas fa-check"></i> Akuntansi Perusahaan</li>
                                <li><i class="fas fa-check"></i> Perpajakan</li>
                                <li><i class="fas fa-check"></i> Audit Keuangan</li>
                            </ul>
                        </div>
                    </a>
                    <a href="profil-mplb.php" class="jurusan-item-link">
                        <div class="jurusan-item animate-fade-in-up animate-delay-500">
                            <div class="logo-wrapper">
                                <img src="images/jurusan mp(1).jpg" alt="Logo MPLB">
                            </div>
                            <h3>Manajemen Perkantoran dan Layanan Bisnis (MPLB)</h3>
                            <p>Mempelajari administrasi, kesekretariatan, dan layanan bisnis modern.</p>
                            <ul class="jurusan-features">
                                <li><i class="fas fa-check"></i> Administrasi Perkantoran</li>
                                <li><i class="fas fa-check"></i> Kesekretariatan</li>
                                <li><i class="fas fa-check"></i> Layanan Bisnis</li>
                            </ul>
                        </div>
                    </a>
                    <a href="profil-tb.php" class="jurusan-item-link">
                        <div class="jurusan-item animate-fade-in-up animate-delay-600">
                            <div class="logo-wrapper">
                                <img src="images/jurusan tb (1).jpg" alt="Logo TB">
                            </div>
                            <h3>Tata Busana (TB)</h3>
                            <p>Mengembangkan keterampilan dalam desain, pembuatan, dan produksi busana.</p>
                            <ul class="jurusan-features">
                                <li><i class="fas fa-check"></i> Desain Busana</li>
                                <li><i class="fas fa-check"></i> Teknik Menjahit</li>
                                <li><i class="fas fa-check"></i> Produksi Fashion</li>
                            </ul>
                        </div>
                    </a>
                    <a href="profil-tsm.php" class="jurusan-item-link">
                        <div class="jurusan-item animate-fade-in-up animate-delay-700">
                            <div class="logo-wrapper">
                                <img src="images/jurusan tbsm (1).jpg" alt="Logo TSM">
                            </div>
                            <h3>Teknik Sepeda Motor (TSM)</h3>
                            <p>Menguasai perawatan dan perbaikan mesin serta sistem sepeda motor.</p>
                            <ul class="jurusan-features">
                                <li><i class="fas fa-check"></i> Perbaikan Mesin</li>
                                <li><i class="fas fa-check"></i> Sistem Kelistrikan</li>
                                <li><i class="fas fa-check"></i> Service & Maintenance</li>
                            </ul>
                        </div>
                    </a>
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