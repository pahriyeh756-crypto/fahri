<?php
require_once 'config.php';

// Ambil data berita dari database
$berita_query = getBerita();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita & Informasi - SMK Al Falah Tanjungjaya</title>
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
                        <li><a href="ekskul.php" class="nav-link">Ekstrakurikuler</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle">Lainnya <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="berita.php" class="nav-link active">Berita</a></li>
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
                <h1 class="animate-fade-in-up">Berita & Informasi</h1>
                <p class="animate-fade-in-up animate-delay-100">Update terbaru seputar kegiatan dan informasi SMK Al Falah Tanjungjaya</p>
            </div>
        </section>

        <section class="berita section-padding bg-light">
            <div class="container">
                <div class="section-title">
                    <h2 class="animate-fade-in-up">Berita Terkini</h2>
                    <p class="animate-fade-in-up animate-delay-100">Informasi terbaru tentang kegiatan, prestasi, dan perkembangan sekolah</p>
                </div>

                <?php if ($berita_query->num_rows > 0): ?>
                <div class="berita-grid">
                    <?php while ($berita = $berita_query->fetch_assoc()): ?>
                    <div class="berita-card animate-fade-in-up">
                        <div class="berita-image-circle">
                            <img src="./uploads/<?php echo !empty($berita['gambar']) ? $berita['gambar'] : 'default-news.jpg'; ?>" 
                                 alt="<?php echo htmlspecialchars($berita['judul']); ?>">
                            <div class="image-overlay">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                        <div class="berita-content">
                            <span class="tag"><?php echo htmlspecialchars($berita['kategori']); ?></span>
                            <h3><?php echo htmlspecialchars($berita['judul']); ?></h3>
                            <p><?php echo substr(strip_tags($berita['isi']), 0, 150) . '...'; ?></p>
                            <div class="berita-meta">
                                <span><i class="far fa-calendar"></i> <?php echo date('d M Y', strtotime($berita['tanggal'])); ?></span>
                                <span><i class="far fa-eye"></i> <?php echo $berita['dilihat'] ?? 0; ?>x dilihat</span>
                                <a href="berita-detail.php?id=<?php echo $berita['id']; ?>" class="read-more-btn">
                                    Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <?php else: ?>
                <div class="no-berita animate-fade-in-up">
                    <div class="no-berita-content">
                        <i class="fas fa-newspaper"></i>
                        <h3>Belum Ada Berita</h3>
                        <p>Silakan kembali lagi nanti untuk melihat berita terbaru dari kami.</p>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Pagination (jika diperlukan) -->
                <div class="pagination animate-fade-in-up animate-delay-200">
                    <a href="#" class="page-nav disabled"><i class="fas fa-chevron-left"></i> Sebelumnya</a>
                    <div class="page-numbers">
                        <a href="#" class="page-number active">1</a>
                        <a href="#" class="page-number">2</a>
                        <a href="#" class="page-number">3</a>
                    </div>
                    <a href="#" class="page-nav">Selanjutnya <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </section>

        <section class="kategori-berita section-padding">
            <div class="container">
                <div class="section-title">
                    <h2 class="animate-fade-in-up">Kategori Berita</h2>
                </div>
                <div class="kategori-grid">
                    <div class="kategori-item animate-fade-in-up animate-delay-100">
                        <i class="fas fa-trophy"></i>
                        <h3>Prestasi</h3>
                        <p>Informasi tentang prestasi siswa dan sekolah</p>
                    </div>
                    <div class="kategori-item animate-fade-in-up animate-delay-200">
                        <i class="fas fa-calendar-alt"></i>
                        <h3>Kegiatan</h3>
                        <p>Update kegiatan sekolah dan acara-acara</p>
                    </div>
                    <div class="kategori-item animate-fade-in-up animate-delay-300">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h3>Pembelajaran</h3>
                        <p>Informasi seputar proses belajar mengajar</p>
                    </div>
                    <div class="kategori-item animate-fade-in-up animate-delay-400">
                        <i class="fas fa-industry"></i>
                        <h3>Kerjasama</h3>
                        <p>Kerjasama dengan industri dan instansi</p>
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