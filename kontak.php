<?php
require_once 'config.php';

// Proses form kontak
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama       = $_POST['nama'];
    $email      = $_POST['email'];
    $isi_pesan  = $_POST['isi_pesan'];

    $query = "INSERT INTO pesan (nama, email, isi_pesan) VALUES ('$nama', '$email', '$isi_pesan')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location='kontak.php';</script>";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - SMK Al Falah Tanjungjaya</title>
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
                                <li><a href="galeri.php" class="nav-link">Galeri</a></li>
                                <li><a href="kontak.php" class="nav-link active">Kontak</a></li>
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
                <h1 class="animate-fade-in-up">Kontak Kami</h1>
                <p class="animate-fade-in-up animate-delay-100">Hubungi kami untuk informasi lebih lanjut</p>
            </div>
        </section>

        <section class="kontak section-padding bg-light">
            <div class="container">
                <div class="section-title">
                    <h2 class="animate-fade-in-up">Hubungi SMK Al Falah Tanjungjaya</h2>
                    <p class="animate-fade-in-up animate-delay-100">Kami siap membantu dan menjawab pertanyaan Anda</p>
                </div>

                <div class="kontak-grid">
                    <div class="kontak-info animate-fade-in-left">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <h3>Alamat</h3>
                                <p></p>Jl. KH. Ahmad Faqih Kp. Kebonkalapa, Desa Cibalanarik, Kec. Tanjungjaya, Kab. Tasikmalaya, Jawa Barat 46184
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info-content">
                                <h3>Telepon</h3>
                                <p>0265 549380</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="info-content">
                                <h3>Email</h3>
                                <p>alfalahtanjungjayasmk@gmail.com</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="info-content">
                                <h3>Jam Operasional</h3>
                                <p>Senin - kamsi: 07:00 - 16:00<br>jum'at: 07:00 - 11:00</p>
                            </div>
                        </div>
                    </div>

                    <div class="kontak-form animate-fade-in-right">
                        <h3>Kirim Pesan</h3>
                        <?php if (isset($success_message)): ?>
                            <div class="alert alert-success">
                                <?php echo $success_message; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($error_message)): ?>
                            <div class="alert alert-error">
                                <?php echo $error_message; ?>
                            </div>
                        <?php endif; ?>
                        <form method="POST" action="">
                            <div class="form-group">
                                <input type="text" name="nama" placeholder="Nama Lengkap" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="Alamat Email" required>
                            </div>

                            <div class="form-group">
                                <textarea name="pesan" placeholder="Pesan Anda" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn-primary">Kirim Pesan <i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="maps section-padding">
            <div class="container">
                <div class="section-title">
                    <h2 class="animate-fade-in-up">Lokasi Kami</h2>
                </div>
                <div class="maps-container animate-fade-in-up animate-delay-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.287684354934!2d108.1442569!3d-7.3922977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f560629873baf%3A0x25448b2b10862ad2!2sSMK%20Al%20Falah%20Tanjungjaya!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" width="100%" height="450" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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