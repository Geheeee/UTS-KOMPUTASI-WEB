<?php
include 'koneksi.php';  // Menghubungkan ke database

// Ambil data kontak dari tabel `kontak`
$sql_kontak = "SELECT * FROM kontak LIMIT 1";
$result_kontak = $conn->query($sql_kontak);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f0f8ff,  #0077be,#f0f8ff); 
            font-size: 1rem;
            font-family: "#";
            
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar a {
            color: #fff;
            font-weight: bold;
            margin-left: 15px;
        }
        .container {
            max-width: 800px; 
            margin: auto; 
            padding-top: 100px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
            border-radius: 15px;
        }
        form {
            background-color: #ffffff; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); 
            
        }
        .social-icons {
            margin-top: 20px;
        }
        .social-icon {
            width: 40px; 
            margin-right: 15px; 
            transition: transform 0.3s ease;
        }
        .social-icon:hover {
            transform: scale(1.2);
        }
        h2 {
            font-size: 2.5rem; 
            color: black; 
            text-align: center;
            margin-bottom: 30px;
            color: white;
            animation: fadeInUp 1s ease;
        }
        h3 {
            color: #ffffff; 
            margin-top: 40px; 
            text-align: center;
            animation: fadeInUp 1s ease;
        }
        p {
            font-size: 1.25rem; 
            text-align: center; 
            margin-bottom: 30px;
            animation: fadeInUp 1s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <br> <br>  <br> <br> <br> 
    
    <div class="container">
        <?php if ($result_kontak->num_rows > 0): ?>
            <?php while ($row = $result_kontak->fetch_assoc()): ?>
                <h2><?= $row['judul_kontak']; ?></h2>

                <form>
                    <div class="mb-3">
                        <p class="text-center"><?= $row['deskripsi_kontak']; ?></p>
                    </div>
                    <div class="social-icons text-center">
                        <a href="<?= $row['github_link'] ?>" target="_blank">
                            <img src="github.png" alt="Github" class="social-icon">
                        </a>
                        <a href="<?= $row['gmail_link'] ?>" target="_blank">
                            <img src="gmail.webp" alt="Gmail" class="social-icon">
                        </a>
                        <a href="<?= $row['instagram_link'] ?>" target="_blank">
                            <img src="insta.avif" alt="Instagram" class="social-icon">
                        </a>
                        <a href="<?= $row['facebook_link'] ?>" target="_blank">
                            <img src="facebook.avif" alt="Facebook" class="social-icon">
                        </a>
                        <a href="<?= $row['youtube_link'] ?>" target="_blank">
                            <img src="yt.png" alt="YouTube" class="social-icon">
                        </a>
                        <a href="<?= $row['whatsapp_link'] ?>" target="_blank">
                            <img src="wa.jpg" alt="WhatsApp" class="social-icon">
                        </a>
                    </div>
                </form>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center">Data kontak tidak tersedia.</p>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
