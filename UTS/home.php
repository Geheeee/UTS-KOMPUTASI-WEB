<?php
include 'koneksi.php';  // Koneksi ke database

$page_name = 'home';  // Nama halaman untuk mengambil data
$sql = "SELECT * FROM content WHERE page_name='$page_name'";
$result = $conn->query($sql);
$content = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $content['title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%; 
            margin: 0;
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
      
        body {
            background: linear-gradient(to right, #f0f8ff,  #0077be,#f0f8ff); 
            overflow-x: hidden; 
            color: #333; 
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
            border-radius: 15px;
            
        }
        h2 {
            font-size: 2.5rem;
            color: #005f8d,#f0f8ff; 
            opacity: 0; 
            transform: translateY(20px); 
            transition: opacity 0.5s ease, transform 0.5s ease; 
            
        }
        h2.visible {
            opacity: 1; 
            transform: translateY(0); 
        }
        p {
            font-size: 1.25rem;
            margin-bottom: 30px;
            opacity: 0;
            transform: translateY(20px); 
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        p.visible {
            opacity: 1; 
            transform: translateY(0); 
        }
        .btn-primary {
            background-color: #0077be; 
            border-color: #0077be;
            font-size: 1.2rem;
            padding: 10px 20px;
            border-radius: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); 
        }
        .btn-primary:hover {
            background-color: #005f8d;
            border-color: #005f8d;
            
        }
        
        section {
            padding: 50px 0;
            border-bottom: 1px solid #ddd; 
            
        }
        
        .about {
            background-color: rgba(255, 255, 255, 0.8);
            
            
        }
        .hobbies {
            background-color: rgba(248, 249, 250, 0.8); 
        }
        .contact {
            background-color: rgba(233, 236, 239, 0.8); 
        }

        .profile-card {
            background-color: rgba(255, 255, 255, 0.9); 
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 30px;
            display: flex; 
            flex-direction: column; 
            align-items: center;
            
        }
        .profile-card img {
            width: 150px;
            border-radius: 50%;
            margin-bottom: 20px; 
            border: 5px solid #0077be;
            
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>  
    <br>
    <div class="container text-center mt-5">
        <h2 class="scroll-effect"><?php echo $content['title']; ?></h2>
        <p class="scroll-effect"><?php echo $content['description']; ?></p>
    </div>
<br>
<br>
<br>
    <section id="about" class="about text-center">
        <div class="container">
            <h2 class="scroll-effect">Tentang Saya</h2>
            <div class="profile-card">
                <img src="download.jpeg" alt="Foto Profil">
                <div>
                    <a href="tentang.php" class="btn btn-primary">Disini</a>
                </div>
            </div>
        </div>
    </section>

    <section class="hobbies text-center">
        <div class="container">
            <h2 class="scroll-effect">Hobi Saya</h2>
            <div class="profile-card">
                <img src="download (1).jpeg" alt="Foto Profil">
                <a href="hobby.php" class="btn btn-primary">Disini</a>
            </div>
        </div>
    </section>
    
    <section id="projects" class="about text-center">
        <div class="container">
            <h2 class="scroll-effect">Proyek Saya</h2>
            <div class="profile-card">
                <img src="proyek.jpg" alt="Foto Profil">
                <div>
                    <a href="proyek.php" class="btn btn-primary">Disini</a>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function handleScroll() {
            const elements = document.querySelectorAll('.scroll-effect');
            elements.forEach((el) => {
                if (isInViewport(el)) {
                    el.classList.add('visible');
                } else {
                    el.classList.remove('visible'); 
                }
            });
        }

        window.addEventListener('scroll', handleScroll);
        handleScroll(); 
    </script>
</body>
</html>
