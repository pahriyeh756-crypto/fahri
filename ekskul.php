<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler - SMK Al Falah Tanjungjaya</title>
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
                        <li><a href="jurusan.php" class="nav-link">Jurusan</a></li>
                        <li><a href="ekskul.php" class="nav-link active">Ekstrakurikuler</a></li>
                    
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
                <h1 class="animate-fade-in-up">Ekstrakurikuler</h1>
                <p class="animate-fade-in-up animate-delay-100">Wadah pengembangan bakat dan minat siswa di luar jam pelajaran</p>
            </div>
        </section>

        <section class="ekskul section-padding bg-light">
            <div class="container">
                <div class="section-title">
                    <h2 class="animate-fade-in-up">Ekstrakurikuler Kami</h2>
                    <p class="animate-fade-in-up animate-delay-100">Berbagai kegiatan ekstrakurikuler untuk mengembangkan potensi siswa</p>
                </div>
                <div class="ekskul-grid">
                    <div class="ekskul-item animate-fade-in-up animate-delay-100">
                        <div class="logo-wrapper">
                            <img src="images/eskul ippnu.jpg" alt="Logo IPNU & IPPNU">
                        </div>
                        <h3>IPNU & IPPNU</h3>
                        <p>Berfokus pada pengembangan diri pelajar melalui kegiatan yang berlandaskan ajaran Islam Ahlussunnah wal Jama'ah dan nilai-nilai kebangsaan.</p>
                        <div class="ekskul-info">
                            <span><i class="fas fa-users"></i> 150+ Anggota</span>
                            <span><i class="fas fa-calendar"></i> Setiap Jumat</span>
                        </div>
                    </div>
                    <div class="ekskul-item animate-fade-in-up animate-delay-200">
                        <div class="logo-wrapper">
                            <img src="images/eskul paskibra.jpg" alt="Logo Paskibra">
                        </div>
                        <h3>Paskibra</h3>
                        <p>Latihan baris-berbaris untuk melatih disiplin, kekompakan, dan fisik. Menjadi kebanggaan sekolah dalam berbagai event.</p>
                        <div class="ekskul-info">
                            <span><i class="fas fa-users"></i> 80+ Anggota</span>
                            <span><i class="fas fa-calendar"></i> Setiap Sabtu</span>
                        </div>
                    </div>
                    <div class="ekskul-item animate-fade-in-up animate-delay-300">
                        <div class="logo-wrapper">
                            <img src="images/eskul pks.jpg" alt="Logo PKS">
                        </div>
                        <h3>PKS</h3>
                        <p>Patroli Keamanan Sekolah untuk menjaga ketertiban dan keamanan lingkungan sekolah.</p>
                        <div class="ekskul-info">
                            <span><i class="fas fa-users"></i> 50+ Anggota</span>
                            <span><i class="fas fa-calendar"></i> Setiap Hari</span>
                        </div>
                    </div>
                    <div class="ekskul-item animate-fade-in-up animate-delay-400">
                        <div class="logo-wrapper">
                            <img src="images/eskul silat.jpg" alt="Logo Pencak Silat">
                        </div>
                        <h3>Pencak Silat Sanca Putih</h3>
                        <p>Mempelajari seni bela diri tradisional untuk melatih kekuatan fisik, mental, dan karakter.</p>
                        <div class="ekskul-info">
                            <span><i class="fas fa-users"></i> 100+ Anggota</span>
                            <span><i class="fas fa-calendar"></i> Senin & Kamis</span>
                        </div>
                    </div>
                    <div class="ekskul-item animate-fade-in-up animate-delay-500">
                        <div class="logo-wrapper">
                            <img src="images/eskul pramuka.jpg" alt="Logo Pramuka">
                        </div>
                        <h3>Pramuka</h3>
                        <p>Kegiatan kepanduan untuk membentuk karakter mandiri, disiplin, dan kerjasama tim.</p>
                        <div class="ekskul-info">
                            <span><i class="fas fa-users"></i> 200+ Anggota</span>
                            <span><i class="fas fa-calendar"></i> Setiap Rabu</span>
                        </div>
                    </div>
                    <div class="ekskul-item animate-fade-in-up animate-delay-600">
                        <div class="logo-wrapper">
                            <img src="images/eskul pmr.jpg" alt="Logo PMR">
                        </div>
                        <h3>PMR</h3>
                        <p>Palang Merah Remaja, mengasah kemampuan pertolongan pertama dan nilai-nilai kemanusiaan.</p>
                        <div class="ekskul-info">
                            <span><i class="fas fa-users"></i> 60+ Anggota</span>
                            <span><i class="fas fa-calendar"></i> Setiap Selasa</span>
                        </div>
                    </div>
                    <div class="ekskul-item animate-fade-in-up animate-delay-700">
                        <div class="logo-wrapper">
                            <img src="images/eskul.sanggar seni.jpg" alt="Logo Sanggar Seni">
                        </div>
                        <h3>Sanggar Seni</h3>
                        <p>Wadah kreativitas untuk mengembangkan bakat di bidang tari, musik, teater, dan seni rupa.</p>
                        <div class="ekskul-info">
                            <span><i class="fas fa-users"></i> 90+ Anggota</span>
                            <span><i class="fas fa-calendar"></i> Jumat & Sabtu</span>
                        </div>
                    </div>
                    <div class="ekskul-item animate-fade-in-up animate-delay-800">
                        <div class="logo-wrapper">
                            <img src="images/eskul putsal.jpg" alt="Logo Futsal">
                        </div>
                        <h3>Futsal</h3>
                        <p>Olahraga populer untuk melatih fisik, strategi, kerjasama tim, dan sportivitas.</p>
                        <div class="ekskul-info">
                            <span><i class="fas fa-users"></i> 40+ Anggota</span>
                            <span><i class="fas fa-calendar"></i> Setiap Senin</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ekskul-benefits section-padding">
            <div class="container">
                <div class="section-title">
                    <h2 class="animate-fade-in-up">Manfaat Mengikuti Ekstrakurikuler</h2>
                </div>
                <div class="benefits-grid">
                    <div class="benefit-item animate-fade-in-up animate-delay-100">
                        <i class="fas fa-brain"></i>
                        <h3>Pengembangan Karakter</h3>
                        <p>Membentuk kepribadian yang disiplin, bertanggung jawab, dan berkarakter kuat</p>
                    </div>
                    <div class="benefit-item animate-fade-in-up animate-delay-200">
                        <i class="fas fa-users"></i>
                        <h3>Keterampilan Sosial</h3>
                        <p>Meningkatkan kemampuan berkomunikasi dan bekerja sama dalam tim</p>
                    </div>
                    <div class="benefit-item animate-fade-in-up animate-delay-300">
                        <i class="fas fa-trophy"></i>
                        <h3>Prestasi</h3>
                        <p>Menghasilkan prestasi di berbagai kompetisi dan event</p>
                    </div>
                    <div class="benefit-item animate-fade-in-up animate-delay-400">
                        <i class="fas fa-heart"></i>
                        <h3>Kesehatan Mental</h3>
                        <p>Mengurangi stres dan meningkatkan kebahagiaan melalui kegiatan positif</p>
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