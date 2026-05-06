<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($post['title']) ?> ✨</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    
    <style>
        body {
            background-color: #fff5f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #444;
        }
        .jumbotron-pink {
            background-color: white;
            padding: 4rem 2rem;
            margin-bottom: 2rem;
            border-radius: 0 0 50px 50px;
            box-shadow: 0 10px 20px rgba(248, 187, 208, 0.3);
            text-align: center;
        }
        h1.display-5 {
            color: #d81b60;
            font-weight: 700;
        }
        .card-detail {
            border: none;
            border-radius: 25px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.05);
            background-color: #ffffff;
            padding: 20px;
        }
        .post-title {
            color: #ad1457;
            font-weight: 700;
            margin-bottom: 20px; /* Jarak ke konten sedikit ditambah */
        }
        .post-content {
            line-height: 1.8;
            font-size: 1.1rem;
            color: #555;
        }
    </style>
</head>

<body>

    <?= $this->include('layouts/navbar'); ?>

    <div class="jumbotron-pink">
      <div class="container py-3">
        <h1 class="display-5 fw-bold">🎀</h1>
        <p class="text-muted">Selamat membaca cerita seru hari ini!</p>
      </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 my-2">
                <article class="card-detail p-4">
                    <!-- Judul Langsung ke Konten -->
                    <h2 class="post-title h2"><?= esc($post['title']) ?></h2> 
                    
                    <div class="post-content">
                        <?= $post['content'] ?>
                    </div>

                    <div class="mt-5">
                        <a href="<?= base_url('post') ?>" class="btn btn-outline-secondary btn-sm" style="border-radius: 20px;">
                            &larr; Kembali ke Blog
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <footer class="container py-4 mt-4 text-center text-muted border-top">
        &copy; <?= Date('Y') ?> My Girly Blog | Made with Love 💖
    </footer>

    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>