<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Girly Blog ✨</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #fff5f8; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        .navbar { background: linear-gradient(to right, #e0c3fc 0%, #fbc2eb 100%); border-bottom: 3px solid #f8bbd0; }
        .navbar-brand { font-weight: bold; color: #fff !important; font-style: italic; }
        .jumbotron-pink { background-color: white; padding: 4rem 2rem; margin-bottom: 2rem; border-radius: 0 0 50px 50px; box-shadow: 0 10px 20px rgba(248, 187, 208, 0.3); text-align: center; }
        h1.display-4 { color: #d81b60; font-weight: 700; }
        .card-post { border: none; border-radius: 20px; transition: transform 0.3s ease; box-shadow: 0 5px 15px rgba(0,0,0,0.05); margin-bottom: 25px; background-color: #ffffff; }
        .card-post:hover { transform: translateY(-5px); box-shadow: 0 8px 25px rgba(216, 27, 96, 0.15); }
        .card-title a { color: #ad1457; text-decoration: none; font-weight: 600; }
        .btn-pink { background-color: #f06292; color: white; border-radius: 25px; padding: 8px 20px; border: none; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">MyBlog ✨</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link text-white" href="<?= base_url() ?>">Home</a>
            <a class="nav-link text-white" href="<?= base_url('post') ?>">Blog</a>
            <a class="nav-link text-white" href="<?= base_url('contact') ?>">Contact</a>
            <a class="nav-link text-white" href="<?= base_url('admin/post') ?>">Admin</a>
        </div>
    </div>
</nav>

<div class="jumbotron-pink">
    <div class="container">
        <h1 class="display-4">Blog Updates 🎀</h1>
        <p class="lead text-muted">Cerita awal mengenal coding</p>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if (!empty($posts)) : ?>
                <?php foreach ($posts as $post) : ?>
                    <div class="card card-post p-4">
                        <div class="card-body">
                            <h2 class="card-title">
                                <a href="<?= base_url('post/' . $post['slug']) ?>"><?= $post['title'] ?></a>
                            </h2>
                            <p class="card-text text-muted">
                                <?= substr($post['content'], 0, 150) ?>...
                            </p>
                            <a href="<?= base_url('post/' . $post['slug']) ?>" class="btn btn-pink btn-sm">Read More 💕</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="text-center text-muted">Belum ada postingan... 🌸</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<footer class="text-center p-4 mt-5 text-muted">
    &copy; 2026 My Girly Blog | Made with Love 💖
</footer>

</body>
</html>