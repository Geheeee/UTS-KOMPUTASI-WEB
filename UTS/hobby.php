    <?php
    include 'koneksi.php';  // Koneksi ke database

    // Ambil data hobi
    $sql_hobbies = "SELECT hobby_name FROM hobbies"; 
    $result_hobbies = $conn->query($sql_hobbies);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hobi</title>
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
        }

        
        h2 {
            font-size: 2.5rem; 
            color: #ffffff; 
            text-align: center;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease;
        }

        p {
            font-size: 1.25rem; 
            text-align: center; 
            margin-bottom: 40px;
            animation: fadeInUp 1.2s ease; 
            color: #ffffff; 
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

        .list-group-item {
            background-color: #ffffff; 
            border: 1px solid #e0e0e0; 
            border-radius: 10px; 
            margin-bottom: 10px; 
            transition: transform 0.3s ease, box-shadow 0.3s ease; 
            animation: fadeIn 1s ease; 
        }
        .list-group-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); 
        }

   
        
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="container">
        <h2>Hobi Saya</h2>
        <p>Saya memiliki beberapa hobi yang saya nikmati di waktu luang:</p>
        <ul class="list-group">
            <?php if ($result_hobbies->num_rows > 0): ?>
                <?php while ($row = $result_hobbies->fetch_assoc()): ?>
                    <li class="list-group-item"><?php echo htmlspecialchars($row["hobby_name"]); ?></li>
                <?php endwhile; ?>
            <?php else: ?>
                <li class="list-group-item">Belum ada hobi yang ditambahkan.</li>
            <?php endif; ?>
        </ul>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>