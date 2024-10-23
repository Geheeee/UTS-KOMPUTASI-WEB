<?php
include 'koneksi.php';  

$sql = "SELECT content FROM tentang"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc(); 
    $content = $data['content']; 
} else {
    $content = "Tidak ada data";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f0f8ff, #0077be, #f0f8ff);
            font-family: 'Poppins', sans-serif;
               
        }
        .profile-section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
               
        }
        .profile-card {
            background-color: rgba(255, 255, 255, 0.9); 
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            padding: 40px;
            display: flex;
            align-items: center;
            max-width: 900px;
            width: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); 
        }
        .profile-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0, 0, 0, 0.3);
        }
        .profile-image {
            flex: 1;
            text-align: center;
            
        }
        .profile-image img {
            width: 300px;
            border-radius: 50%;
            border: 5px solid #0077b6;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .profile-content {
            flex: 1;
            padding-left: 50px;
            opacity: 0; 
            transform: translateY(10px);  
            transition: opacity 0.3s ease, transform 0.3s ease; 
            
        }
        .show {
            opacity: 1; 
            transform: translateY(0); 
            
        }
        .profile-content h1 {
            font-size: 2.5rem;
            color: #0077b6;
            
        }
        .profile-content p {
            font-size: 1.2rem;
            color: #343a40;
            margin-top: 15px;
            
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar a {
            color: #fff;
            font-weight: bold;
            margin-left: 15px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Profile Section -->
    <div class="profile-section">
        <div class="profile-card">
            <div class="profile-image">
                <img src="download.jpeg" alt="Foto Profil">
            </div>
            <div class="profile-content" id="profileContent">
                <h1>Gardavi Nabhan Gussasy</h1> <!-- Animasi nama -->
                <p><?php echo htmlspecialchars($content); ?></p> <!-- Konten dari database -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Menambahkan class 'show' untuk memunculkan teks saat halaman dimuat
        window.onload = function() {
            document.getElementById('profileContent').classList.add('show');
        };
    </script>
</body>
</html>
