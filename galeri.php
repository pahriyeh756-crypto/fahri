<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kegiatan - SMK Al Falah Tanjungjaya</title>
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
                                <li><a href="berita.php" class="nav-link">Berita</a></li>
                                <li><a href="galeri.php" class="nav-link active">Galeri</a></li>
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
                <h1 class="animate-fade-in-up">Galeri Kegiatan</h1>
                <p class="animate-fade-in-up animate-delay-100">Momen berharga dari berbagai kegiatan di SMK Al Falah Tanjungjaya</p>
            </div>
        </section>

        <section class="galeri section-padding bg-light">
            <div class="container">
                <div class="section-title">
                    <h2 class="animate-fade-in-up">Galeri Foto</h2>
                    <p class="animate-fade-in-up animate-delay-100">Dokumentasi kegiatan belajar mengajar dan event sekolah</p>
                </div>

                <div class="galeri-filter animate-fade-in-up animate-delay-200">
                    <button class="filter-btn active" data-filter="all">Semua</button>
                </div>

                <div class="galeri-grid">
                    <div class="galeri-item animate-zoom-in animate-delay-100" data-category="kegiatan">
                        <img src="images/galeri1.jpg" alt="Upacara bendera">
                        <div class="galeri-overlay">
                            <div class="galeri-info">
                                
                            </div>
                        </div>
                    </div>
                    <div class="galeri-item animate-zoom-in animate-delay-200" data-category="pembelajaran">
                        <img src="images/galeri2.jpg" alt="jsg">
                        <div class="galeri-overlay">
                            <div class="galeri-info">
                               
                            </div>
                        </div>
                    </div>
                    <div class="galeri-item animate-zoom-in animate-delay-300" data-category="prestasi">
                        <img src="images/galeri3.jpg" alt="Penghargaan lomba">
                        <div class="galeri-overlay">
                            <div class="galeri-info">
                                
                            </div>
                        </div>
                    </div>
                    <div class="galeri-item animate-zoom-in animate-delay-400" data-category="ekskul">
                        <img src="images/galeri4.jpg" alt="Latihan paskibra">
                        <div class="galeri-overlay">
                            <div class="galeri-info">
                               
                            </div>
                        </div>
                    </div>
                    <div class="galeri-item animate-zoom-in animate-delay-500" data-category="kegiatan">
                        <img src="images/galeri5.jpg" alt="Kegiatan seminar">
                        <div class="galeri-overlay">
                            <div class="galeri-info">
                               
                            </div>
                        </div>
                    </div>
                    <div class="galeri-item animate-zoom-in animate-delay-600" data-category="ekskul">
                        <img src="images/galeri6.jpg" alt="Pentas seni">
                        <div class="galeri-overlay">
                            <div class="galeri-info">
                               
                            </div>
                        </div>
                    </div>
                    <div class="galeri-item animate-zoom-in" data-category="pembelajaran">
                        <img src="images/galeri7.jpg" alt="Workshop design">
                        <div class="galeri-overlay">
                            <div class="galeri-info">
                                
                            </div>
                        </div>
                    </div>
                    <div class="galeri-item animate-zoom-in" data-category="prestasi">
                        <img src="images/galeri8.jpg" alt="Piala penghargaan">
                        <div class="galeri-overlay">
                            <div class="galeri-info">
                                
                            </div>
                        </div>
                    </div>
                    <div class="galeri-item animate-zoom-in" data-category="kegiatan">
                        <img src="images/galeri9.jpg" alt="Kegiatan outing">
                        <div class="galeri-overlay">
                            <div class="galeri-info">
                               
                            </div>
                        </div>
                    </div>
                    <div class="galeri-item animate-zoom-in" data-category="ekskul">
                        <img src="images/galeri10.jpg" alt="Latihan futsal">
                        <div class="galeri-overlay">
                            <div class="galeri-info">
                                
                            </div>
                        </div>
                    </div>
                    <div class="galeri-item animate-zoom-in" data-category="pembelajaran">
                        <img src="images/galeri11.jpg" alt="Presentasi project">
                        <div class="galeri-overlay">
                            <div class="galeri-info">
                                
                            </div>
                        </div>
                    </div>
                    <div class="galeri-item animate-zoom-in" data-category="kegiatan">
                        <img src="images/galeri12.jpg" alt="Perayaan hari besar">
                        <div class="galeri-overlay">
                            <div class="galeri-info">
                               
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

    <div id="image-modal" class="modal">
        <span class="modal-close">×</span>
        <img class="modal-content" id="modal-image" alt="Full size image">
    </div>

    <script src="script.js"></script>
    <script>
        // Galeri Filter Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const galeriItems = document.querySelectorAll('.galeri-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    galeriItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 50);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.8)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>