<?php
include 'koneksi.php';  // Koneksi ke database



$sql_projects = "SELECT project_title, project_description FROM projects";
$result_projects = $conn->query($sql_projects);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f0f8ff,  #0077be, #f0f8ff); 
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
            max-width: 1200px; 
            margin: auto; 
            padding-top: 50px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            
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
            margin-bottom: 30px;
            animation: fadeInUp 1.2s ease;
          
        }
        .project-card {
            transition: transform 0.2s, box-shadow 0.2s; 
            background-color: #ffffff; 
            border: 1px solid #dee2e6;
            border-radius: 0.25rem; 
            margin-bottom: 20px; 
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease; 
            border-radius: 15px;
        }
        .project-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); 
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 1.2rem;
            padding: 10px 20px;
            border-radius: 25px;
            display: block; 
            margin: auto; 
        }
        .btn-primary:hover {
            background-color: #0056b3; 
            border-color: #0056b3;
        }
        .card-title {
            font-family: "#";
            font-style: italic;
        }
        h5 {
            font-size: 1.25rem; 
            text-align: center; 
            margin-bottom: 30px;
            animation: fadeInUp 1.2s ease;
            color: white;
          
        }

        /* Animasi Fade In */
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

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
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
    
    <div class="container">
        <h2>Proyek Saya</h2>
        <h5>Berikut adalah beberapa proyek yang telah saya kerjakan:</h5>
        
        <div class="row">
            <?php if ($result_projects->num_rows > 0): ?>
                <?php while ($row = $result_projects->fetch_assoc()): ?>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card project-card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($row["project_title"]); ?></h5>
                                <br>
                                <p class="card-text"><?php echo htmlspecialchars($row["project_description"]); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12 text-center">
                    <p>Belum ada proyek.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
