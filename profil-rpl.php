<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil RPL - SMK Al Falah Tanjungjaya</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        .rpl-hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 80px 0 60px;
            text-align: center;
        }

        .rpl-hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .rpl-hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .rpl-hero p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .rpl-content {
            padding: 80px 0;
        }

        .rpl-overview {
            margin-bottom: 60px;
        }

        .rpl-overview-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .rpl-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .rpl-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .rpl-details {
            margin-bottom: 60px;
        }

        .detail-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .detail-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            border-left: 4px solid #667eea;
        }

        .detail-card h3 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .detail-card ul {
            list-style: none;
            padding: 0;
        }

        .detail-card li {
            padding: 5px 0;
            position: relative;
            padding-left: 20px;
        }

        .detail-card li:before {
            content: "▸";
            color: #667eea;
            position: absolute;
            left: 0;
        }

        .rpl-staff {
            margin-bottom: 60px;
        }

        .staff-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .staff-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .staff-card:hover {
            transform: translateY(-5px);
        }

        .staff-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 30px auto 20px;
            overflow: hidden;
            border: 4px solid #667eea;
        }

        .staff-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .staff-info {
            padding: 0 20px 30px;
        }

        .staff-info h4 {
            margin-bottom: 5px;
            color: #333;
        }

        .staff-info p {
            color: #667eea;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .rpl-achievements {
            background: #f8f9fa;
            padding: 60px 0;
            border-radius: 10px;
            margin-bottom: 60px;
        }

        .achievement-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .achievement-item {
            text-align: center;
            padding: 30px 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .achievement-icon {
            width: 60px;
            height: 60px;
            background: #667eea;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 1.5rem;
        }

        .achievement-item h3 {
            font-size: 2rem;
            color: #667eea;
            margin-bottom: 10px;
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #667eea;
            color: white;
            padding: 12px 25px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-top: 30px;
        }

        .back-button:hover {
            background: #5a6fd8;
            transform: translateX(-5px);
        }

        .text-center {
            text-align: center;
        }

        @media (max-width: 768px) {
            .rpl-hero h1 {
                font-size: 2.2rem;
            }
            
            .rpl-overview-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .detail-cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
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
        <section class="rpl-hero">
            <div class="container">
                <div class="rpl-hero-content">
                    <h1 class="animate-fade-in-up">Rekayasa Perangkat Lunak</h1>
                    <p class="animate-fade-in-up animate-delay-100">Mencetak Developer Profesional yang Siap Berkontribusi di Era Digital</p>
                </div>
            </div>
        </section>

        <section class="rpl-content">
            <div class="container">
                <div class="rpl-overview">
                    <div class="rpl-overview-grid">
                        <div class="rpl-text">
                            <h2>Tentang Jurusan RPL</h2>
                            <p>Jurusan Rekayasa Perangkat Lunak (RPL) di SMK Al Falah Tanjungjaya merupakan program keahlian yang fokus pada pengembangan kemampuan siswa dalam merancang, mengembangkan, dan mengelola perangkat lunak. Dengan kurikulum yang selalu update mengikuti perkembangan teknologi, kami mempersiapkan siswa untuk menjadi programmer dan developer yang kompeten di industri teknologi informasi.</p>
                            <p>Program ini menggabungkan teori dan praktik secara seimbang, dengan fasilitas laboratorium komputer yang lengkap dan project-based learning yang memungkinkan siswa mengembangkan aplikasi nyata.</p>
                        </div>
                        <div class="rpl-image">
                            <img src="images/jurusan rpl (1).png" alt="Laboratorium RPL">
                        </div>
                    </div>
                </div>

                <div class="rpl-details">
                    <h2 class="text-center">Kompetensi Keahlian</h2>
                    <div class="detail-cards">
                        <div class="detail-card">
                            <h3>Pemrograman Dasar</h3>
                            <ul>
                                <li>Algoritma dan Struktur Data</li>
                                <li>Pemrograman Berorientasi Objek</li>
                                <li>Bahasa Pemrograman Python</li>
                                <li>Konsep Dasar Database</li>
                                <li>Version Control System (Git)</li>
                            </ul>
                        </div>
                        <div class="detail-card">
                            <h3>Pengembangan Web</h3>
                            <ul>
                                <li>HTML5, CSS3, JavaScript</li>
                                <li>Framework Frontend (React/Vue)</li>
                                <li>Backend Development (PHP/Laravel)</li>
                                <li>RESTful API Development</li>
                                <li>Web Security Fundamentals</li>
                            </ul>
                        </div>
                        <div class="detail-card">
                            <h3>Mobile Development</h3>
                            <ul>
                                <li>Android Development (Java/Kotlin)</li>
                                <li>iOS Development (Swift)</li>
                                <li>Cross-platform (Flutter/React Native)</li>
                                <li>Mobile UI/UX Design</li>
                                <li>App Publishing & Distribution</li>
                            </ul>
                        </div>
                        <div class="detail-card">
                            <h3>Teknologi Terkini</h3>
                            <ul>
                                <li>Cloud Computing</li>
                                <li>Internet of Things (IoT)</li>
                                <li>Machine Learning Basics</li>
                                <li>DevOps Fundamentals</li>
                                <li>Agile Development</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="jurusan.php" class="back-button">
                        <i class="fas fa-arrow-left"></i>
                        Kembali ke Daftar Jurusan
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