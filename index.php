<?php 

include_once('./server.php');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="container my-4">

<div class="row row-cols-1 row-cols-md-3 g-4 mx-auto">
    <?php foreach($datas as $data){?>
    <div class="col">
        <div class="card h-100 shadow-sm text-center bg-dark text-white">
            <img src=<?php echo $data['cover'] ?> class="card-img-top p-3" alt=<?php echo $data['title'] ?>  style="height: 220px; object-fit: contain;">
            <div class="card-body d-flex flex-column align-items-center text-center">
                <h5 class="card-title fw-bold mb-1"><?php echo $data['title'] ?></h5>
                <p class="card-text text-secondary mb-3"><?php echo $data['artist'] ?></p>
                
                <div class="mt-auto d-flex gap-2 flex-wrap justify-content-center">
                    <span class="badge rounded-pill bg-primary"><?php echo $data['year'] ?></span>
                    <span class="badge rounded-pill bg-secondary text-uppercase"><?php echo $data['genre'] ?></span>
                </div>
            </div>
        </div>
    </div>
    <?php  }?>
        
        
</div>
    
    
        
        
    
</div>
</body>
</html>