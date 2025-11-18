<?php
require_once 'config.php';

// Ambil data dari database
$data_guru_query = getGuru();
$data_siswa_query = $koneksi->query("SELECT * FROM jumlah_siswa ORDER BY angkatan DESC");
$data_guru_karyawan = $koneksi->query("SELECT jml_guru_karyawan FROM jumlah_guru_karyawan WHERE id=1")->fetch_assoc();
$berita_query = getBerita(3);

// Hitung total siswa dan jumlah angkatan untuk ditampilkan di statistik
$total_siswa = 0;
$jumlah_angkatan = 0;
$angkatan_data = [];
while ($row = $data_siswa_query->fetch_assoc()) {
    $total_siswa += $row['jml_siswa'];
    $jumlah_angkatan++;
    $angkatan_data[] = $row;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website resmi SMK Al Falah Tanjungjaya, sekolah unggulan yang berfokus pada inovasi dan kreativitas di bidang teknologi.">
    <title>SMK Al Falah Tanjungjaya - Unggul, Kreatif, Inovatif</title>
    
    <link rel="stylesheet" href="style.css">
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
                        <li><a href="index.php" class="nav-link active">Beranda</a></li>
                        <li><a href="profil.php" class="nav-link">Tentang Kami</a></li>
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
        <section class="hero">
            <div class="hero-bg" style="background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');"></div>
            <div class="hero-overlay"></div>
            <div class="container">
                 <p class="hero-subtitle animate-fade-in-up">SMK Al Falah Tanjungjaya</p>
                <h1 class="animate-fade-in-up animate-delay-100">Menjadi Pribadi Unggul dan Produktif</h1>
                <p class="animate-fade-in-up animate-delay-200">SMK Al-Falah Tanjungjaya siap mendidik siswa/siswi menjadi pribadi yang memiliki keunggulan agar siap menghadapi persaingan global dengan kekuatan akhlak dan kompetensi yang memadai.</p>
                <a href="profil.php" class="btn-hero animate-fade-in-up animate-delay-400">Selengkapnya <i class="fas fa-arrow-down"></i></a>
            </div>
        </section>

        <section id="statistik" class="statistik section-padding">
            <div class="container">
                <div class="statistik-grid">
                    <div class="statistik-item animate-fade-in-up">
                        <i class="fas fa-user-graduate"></i>
                        <h3 class="counter" data-target="<?php echo $total_siswa; ?>"><?php echo $total_siswa; ?></h3>
                        <p>Total Siswa</p>
                    </div>
                    <div class="statistik-item animate-fade-in-up animate-delay-100">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h3 class="counter" data-target="<?php echo $data_guru_karyawan['jml_guru_karyawan']; ?>"><?php echo $data_guru_karyawan['jml_guru_karyawan']; ?></h3>
                        <p>Guru Profesional</p>
                    </div>
                    <div class="statistik-item animate-fade-in-up animate-delay-200">
                        <i class="fas fa-building"></i>
                        <h3 class="counter" data-target="<?php echo $jumlah_angkatan; ?>"><?php echo $jumlah_angkatan; ?></h3>
                        <p>Jumlah Angkatan</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="guru" class="guru section-padding bg-light">
            <div class="container">
                <div class="section-title">
                    <h2 class="animate-fade-in-up">Guru & Staff Pengajar</h2>
                    <p class="animate-fade-in-up animate-delay-100">Dosen dan tenaga pendidik profesional yang berkompeten di bidangnya</p>
                </div>
                <div class="guru-grid">
                    <?php if ($data_guru_query->num_rows > 0): ?>
                        <?php while ($guru = $data_guru_query->fetch_assoc()): ?>
                        <div class="guru-card animate-fade-in-up animate-delay-200">
                            <div class="guru-img">
                                <img class="guru-foto" src="./uploads/<?php echo !empty($guru['foto']) ? $guru['foto'] : 'default.jpg'; ?>" alt="<?php echo htmlspecialchars($guru['nama']); ?>">
                            </div>
                            <div class="guru-info">
                                <h3><?php echo htmlspecialchars($guru['nama']); ?></h3>
                                <p class="jabatan"><?php echo htmlspecialchars($guru['jabatan']); ?></p>
                                <div class="guru-social">
                                    <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="no-data animate-fade-in-up">
                            <p>Data guru belum tersedia.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section id="berita" class="berita section-padding">
            <div class="container">
                <div class="section-title">
                    <h2 class="animate-fade-in-up">Berita & Informasi Terbaru</h2>
                    <p class="animate-fade-in-up animate-delay-100">Update terbaru kegiatan dan informasi dari SMK Al Falah Tanjungjaya</p>
                </div>
                <div class="berita-grid">
                    <?php if ($berita_query->num_rows > 0): ?>
                        <?php while ($berita = $berita_query->fetch_assoc()): ?>
                        <div class="berita-card animate-fade-in-up animate-delay-200">
                            <div class="berita-img-container">
                                <img class="berita-foto" src="./uploads/<?php echo !empty($berita['gambar']) ? $berita['gambar'] : 'default-news.jpg'; ?>" alt="<?php echo htmlspecialchars($berita['judul']); ?>">
                            </div>
                            <div class="berita-content">
                                <span class="tag"><?php echo htmlspecialchars($berita['kategori']); ?></span>
                                <h3><?php echo htmlspecialchars($berita['judul']); ?></h3>
                                <p><?php echo substr(htmlspecialchars($berita['isi']), 0, 100) . '...'; ?></p>
                                <div class="berita-meta">
                                    <span><i class="far fa-calendar"></i> <?php echo date('d M Y', strtotime($berita['tanggal'])); ?></span>
                                    <a href="berita-detail.php?id=<?php echo $berita['id']; ?>">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="no-data animate-fade-in-up">
                            <p>Tidak ada berita terbaru.</p>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="text-center animate-fade-in-up animate-delay-300">
                    <a href="berita.php" class="btn-primary">Lihat Semua Berita <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <section id="mitra" class="mitra section-padding bg-light">
            <div class="container">
                <div class="section-title">
                    <h2 class="animate-fade-in-up">Mitra Kerjasama</h2>
                    <p class="animate-fade-in-up animate-delay-100">Perusahaan mitra yang bekerja sama dengan SMK Al Falah Tanjungjaya</p>
                </div>
                <div class="mitra-grid">
                    <div class="mitra-item animate-fade-in-up animate-delay-200">
                        <img src="images/mitra yamaha.jpg" alt="Yamaha">
                        <h4>Yamaha</h4>
                    </div>
                    <div class="mitra-item animate-fade-in-up animate-delay-300">
                        <img src="images/mitra1.jpg" alt="Telkom">
                        <h4>Telkom Indonesia</h4>
                    </div>
                    <div class="mitra-item animate-fade-in-up animate-delay-400">
                        <img src="images/bniiiiii.webp" alt="Google">
                        <h4>bni</h4>
                    </div>
                    <div class="mitra-item animate-fade-in-up animate-delay-500">
                        <img src="images/mitra bantex.jpg" alt="Microsoft">
                        <h4>bantex</h4>
                    </div>
                    <div class="mitra-item animate-fade-in-up animate-delay-500">
                        <img src="images/mitra axioo.jpg" alt="Microsoft">
                        <h4>axioo</h4>
                    </div>
                    <div class="mitra-item animate-fade-in-up animate-delay-500">
                        <img src="images/cblb1.jpg" alt="Microsoft">
                        <h4>cyberlabs</h4>
                    </div>
                    <div class="mitra-item animate-fade-in-up animate-delay-500">
                        <img src="images/mitra sansan.jpg" alt="Microsoft">
                        <h4>sansan</h4>
                    </div>
                    <div class="mitra-item animate-fade-in-up animate-delay-500">
                        <img src="images/mitra nusaedu.jpg" alt="Microsoft">
                        <h4>nusaedu</h4>
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