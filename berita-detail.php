<?php
require_once 'config.php';

// Ambil ID berita dari parameter URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Query untuk mendapatkan detail berita
$berita_query = $koneksi->prepare("SELECT * FROM berita WHERE id = ?");
$berita_query->bind_param("i", $id);
$berita_query->execute();
$berita_result = $berita_query->get_result();

// Jika berita tidak ditemukan, redirect ke halaman berita
if ($berita_result->num_rows === 0) {
    header("Location: berita.php");
    exit();
}

$berita = $berita_result->fetch_assoc();

// Query untuk mendapatkan berita terbaru (untuk sidebar)
$berita_terbaru_query = getBerita(5);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars(substr($berita['isi'], 0, 160)); ?>">
    <title><?php echo htmlspecialchars($berita['judul']); ?> - SMK Al Falah Tanjungjaya</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="berita-detail.css?v=1.2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
        <div class="breadcrumb">
            <div class="breadcrumb-content">
                <a href="index.php">Beranda</a> &gt; 
                <a href="berita.php">Berita</a> &gt; 
                <span><?php echo htmlspecialchars($berita['judul']); ?></span>
            </div>
        </div>

        <section class="detail-berita">
            <div class="berita-detail-container">
                <div class="berita-detail-content">
                    <div class="berita-header">
                        <span class="berita-tag"><?php echo htmlspecialchars($berita['kategori']); ?></span>
                        <h1 class="berita-title"><?php echo htmlspecialchars($berita['judul']); ?></h1>
                        <div class="berita-meta-detail">
                            <span><i class="far fa-calendar"></i> <?php echo date('d M Y', strtotime($berita['tanggal'])); ?></span>
                            <span><i class="far fa-user"></i> Admin</span>
                            <span><i class="far fa-eye"></i> 1.2k dilihat</span>
                        </div>
                    </div>

                    <!-- FIXED: Gambar dengan container yang benar -->
                    <?php if (!empty($berita['gambar']) && $berita['gambar'] != 'default-news.jpg'): ?>
                    <div class="berita-image-container">
                        <img src="./uploads/<?php echo $berita['gambar']; ?>" 
                             alt="<?php echo htmlspecialchars($berita['judul']); ?>" 
                             class="berita-image">
                        <div class="berita-image-caption">Ilustrasi berita</div>
                    </div>
                    <?php endif; ?>

                    <div class="berita-body">
                        <?php echo nl2br(htmlspecialchars($berita['isi'])); ?>
                    </div>

                    <div class="berita-share">
                        <h4>Bagikan Berita:</h4>
                        <div class="share-buttons">
                            <a href="#" class="share-btn facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="share-btn twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="share-btn whatsapp"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" class="share-btn linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="berita-sidebar">
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Berita Terbaru</h3>
                        <div class="berita-terbaru-list">
                            <?php if ($berita_terbaru_query->num_rows > 0): ?>
                                <?php while ($berita_terbaru = $berita_terbaru_query->fetch_assoc()): ?>
                                <div class="berita-terbaru-item">
                                    <?php if (!empty($berita_terbaru['gambar']) && $berita_terbaru['gambar'] != 'default-news.jpg'): ?>
                                    <img src="./uploads/<?php echo $berita_terbaru['gambar']; ?>" 
                                         alt="<?php echo htmlspecialchars($berita_terbaru['judul']); ?>"
                                         class="sidebar-image">
                                    <?php endif; ?>
                                    <div class="berita-terbaru-content">
                                        <h4><a href="berita-detail.php?id=<?php echo $berita_terbaru['id']; ?>"><?php echo htmlspecialchars($berita_terbaru['judul']); ?></a></h4>
                                        <span><?php echo date('d M Y', strtotime($berita_terbaru['tanggal'])); ?></span>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <p>Tidak ada berita terbaru.</p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="sidebar-widget">
                        <h3 class="widget-title">Kategori</h3>
                        <ul class="kategori-list">
                            <li><a href="berita.php?kategori=Pendidikan">Pendidikan</a></li>
                            <li><a href="berita.php?kategori=Olahraga">Olahraga</a></li>
                            <li><a href="berita.php?kategori=Acara">Acara</a></li>
                            <li><a href="berita.php?kategori=Prestasi">Prestasi</a></li>
                        </ul>
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