<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - SMK Al Falah Tanjungjaya</title>
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
                        <li><a href="profil.php" class="nav-link active">Tentang Kami</a></li>
                        <li><a href="jurusan.php" class="nav-link">Jurusan</a></li>
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
                <h1 class="animate-fade-in-up">Tentang Kami</h1>
                <p class="animate-fade-in-up animate-delay-100">Mengenal lebih dekat SMK Al Falah Tanjungjaya</p>
            </div>
        </section>

        <section class="profil-new section-padding">
            <div class="container profil-grid">
                <div class="profil-text-content animate-fade-in-left">
                    <div class="section-title-left">TENTANG KAMI</div>
                    <h1>SMK Al Falah Tanjungjaya</h1>
                    <p>SMK Al Falah Tanjungjaya merupakan sekolah yang memadukan keunggulan pendidikan pesantren serta pengembangan keterampilan berbagai keahlian sebagai kontribusi dalam mensejahterakan masyarakat.</p>
                    <p>Kami menyelenggarakan pendidikan berkualitas dengan penekanan pada pengembangan karakter, kompetensi dan social skill siswa untuk menghadapi dunia industri yang kompetitif.</p>
                </div>
                <div class="profil-gallery animate-fade-in-right">
                    <div class="main-image-wrapper">
                        <img src="images/SMK-AL-FALAH-2024.png" alt="Fasilitas utama sekolah" class="main-image">
                        <div class="gallery-nav">
                            <button class="prev-btn" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
                            <button class="next-btn" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                    <div class="thumbnail-wrapper">
                        <img src="images/Barisan-Murid-SMK-Alfalah-min.png" alt="Thumbnail fasilitas 1" class="thumbnail active">
                        <img src="images/SMK-AL-FALAH-2024.png" alt="Thumbnail fasilitas 2" class="thumbnail">
                        <img src="images/gedung3.jpg" alt="Thumbnail fasilitas 3" class="thumbnail">
                        <img src="images/gedung4.jpg" alt="Thumbnail fasilitas 4" class="thumbnail">
                    </div>
                </div>
            </div>
        </section>

<!-- Ganti bagian Visi & Misi di profil.php dengan ini -->
<section class="cta-visi-misi section-padding bg-light">
    <div class="container">
        <div class="cta-content">
            <h2 class="animate-fade-in-up">Visi & Misi Sekolah</h2>
            <p class="animate-fade-in-up animate-delay-100"></p>
            <a href="visi-misi.php" class="btn-primary animate-fade-in-up animate-delay-200">
                Lihat Visi & Misi Lengkap <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

        <section class="sejarah section-padding">
            <div class="container">
                <div class="section-title">
                    <h2 class="animate-fade-in-up">Sejarah Singkat</h2>
                </div>
                <div class="sejarah-content animate-fade-in-up animate-delay-100">
                    <p>SMK Al Falah Tanjungjaya didirikan pada tahun 2010 dengan tujuan untuk memberikan pendidikan berkualitas yang mengintegrasikan nilai-nilai keislaman dengan kompetensi keahlian. Sekolah ini terus berkembang dan berkomitmen untuk menghasilkan lulusan yang siap bersaing di dunia kerja.</p>
                    <p>Dengan fasilitas yang terus ditingkatkan dan kurikulum yang selalu disesuaikan dengan kebutuhan industri, SMK Al Falah Tanjungjaya telah menjadi pilihan utama bagi masyarakat dalam menyekolahkan putra-putrinya.</p>
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