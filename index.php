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

<div class="card bg-dark text-white shadow border-0 p-4 m-5">
    <h4 class="fw-bold mb-4 text-center">Add Album</h4>

    <form action="./server.php" method="POST">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control bg-secondary text-white border-0" id="title" name="title" placeholder="Es. Dark Side of the Moon" required>
        </div>

        <div class="mb-3">
            <label for="artist" class="form-label">Artist</label>
            <input type="text" class="form-control bg-secondary text-white border-0" id="artist" name="artist" placeholder="Es. Pink Floyd" required>
        </div>

        <div class="mb-3">
            <label for="cover" class="form-label">Cover URL</label>
            <input type="url" class="form-control bg-secondary text-white border-0" id="cover" name="cover" placeholder="https://..." required>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <label for="year" class="form-label">Year</label>
                <input type="number" class="form-control bg-secondary text-white border-0" id="year" name="year" placeholder="Es. 1973" min="1900" max="2025" required>
            </div>
            <div class="col-md-6">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control bg-secondary text-white border-0" id="genre" name="genre" placeholder="Es. Progressive Rock" required>
            </div>
        </div>

        <div class="d-grid mt-4">
            <button type="submit" class="btn btn-primary fw-bold">Add Album</button>
        </div>
    </form>
</div>
    
    
        
        
    
</div>
</body>
</html>