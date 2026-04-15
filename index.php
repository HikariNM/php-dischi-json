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
<body class="text-white min-vh-100 py-5" style="background-color: #4d4d4d">
<div class="container">

    <h2 class="fw-bold mb-4">My Library</h2>
    <hr class="border-secondary mb-4">

    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3">
        <?php foreach($datas as $data){ ?>
        <div class="col">
            <div class="card bg-dark text-white border-0 h-100">
                <img src="<?php echo $data['cover'] ?>" class="card-img-top p-2" alt="<?php echo $data['title'] ?>" style="aspect-ratio:1; object-fit:cover;">
                <div class="card-body p-2">
                    <p class="fw-bold mb-0 small text-truncate"><?php echo $data['title'] ?></p>
                    <p class="text-secondary small mb-2"><?php echo $data['artist'] ?></p>
                    <div class="d-flex gap-2 flex-wrap">
                        <span class="badge bg-secondary"><?php echo $data['year'] ?></span>
                        <span class="badge bg-info text-dark text-uppercase"><?php echo $data['genre'] ?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

    <div class="card bg-dark text-white border-0 mt-5 p-4">
        <h5 class="fw-bold mb-4">Add Album</h5>
        <form action="./server.php" method="POST">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label text-secondary small text-uppercase">Title</label>
                    <input type="text" class="form-control bg-black text-white border-secondary" name="title" placeholder="Dark Side of the Moon" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label text-secondary small text-uppercase">Artist</label>
                    <input type="text" class="form-control bg-black text-white border-secondary" name="artist" placeholder="Pink Floyd" required>
                </div>
                <div class="col-12">
                    <label class="form-label text-secondary small text-uppercase">Cover URL</label>
                    <input type="url" class="form-control bg-black text-white border-secondary" name="cover" placeholder="https://..." required>
                </div>
                <div class="col-md-6">
                    <label class="form-label text-secondary small text-uppercase">Year</label>
                    <input type="number" class="form-control bg-black text-white border-secondary" name="year" placeholder="1973" min="1900" max="2025" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label text-secondary small text-uppercase">Genre</label>
                    <input type="text" class="form-control bg-black text-white border-secondary" name="genre" placeholder="Progressive Rock" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-info text-dark fw-bold w-100 rounded-pill">Add to Library</button>
                </div>
            </div>
        </form>
    </div>

</div>
</body>
</html>