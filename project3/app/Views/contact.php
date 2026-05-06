<?php
// app/Views/contact.php

$title = "Contact Me ✨";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff5f8; /* Background pink pucat */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background: linear-gradient(to right, #e0c3fc 0%, #fbc2eb 100%);
            border-bottom: 3px solid #f8bbd0;
        }
        .navbar-brand {
            font-weight: bold;
            color: #fff !important;
            font-size: 1.5rem;
            font-style: italic;
        }
        .jumbotron-pink {
            background-color: white;
            padding: 4rem 2rem;
            margin-bottom: 2rem;
            border-radius: 0 0 50px 50px;
            box-shadow: 0 10px 20px rgba(248, 187, 208, 0.3);
            text-align: center;
        }
        h1.display-4 {
            color: #d81b60;
            font-weight: 700;
        }
        .card-contact {
            border: none;
            border-radius: 20px;
            transition: transform 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 20px;
            background-color: #ffffff;
        }
        .card-contact:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(216, 27, 96, 0.15);
        }
        .contact-label {
            color: #ad1457;
            font-weight: 600;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
        }
        .contact-label span {
            margin-right: 10px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">MyBlog ✨</a>
        <div class="navbar-nav ms-auto">
            <a class="nav-link text-white" href="<?= base_url() ?>">Home</a>
            <a class="nav-link text-white" href="<?= base_url('post') ?>">Blog</a>
            <a class="nav-link text-white" href="<?= base_url('admin/post') ?>">Admin</a>
        </div>
    </div>
</nav>

<div class="jumbotron-pink">
    <div class="container">
        <h1 class="display-4">Contact 🎀</h1>
        <p class="lead text-muted">Let's be friends! Feel free to reach out. ✨</p>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <!-- Card Alamat -->
            <div class="card card-contact p-4">
                <div class="card-body">
                    <div class="contact-label h5">
                        <span>📍</span> Alamat
                    </div>
                    <p class="text-muted mb-0">
                        Saya tinggal di Bogor Barat, tepat nya di daerah kecamatan Ciampea.
                    </p>
                </div>
            </div>

            <!-- Card Email -->
            <div class="card card-contact p-4">
                <div class="card-body">
                    <div class="contact-label h5">
                        <span>📧</span> Email
                    </div>
                    <p class="text-muted mb-0">
                        Dian Khaerunnisa@gmail.com
                    </p>
                </div>
            </div>

            <!-- Card No.HP -->
            <div class="card card-contact p-4">
                <div class="card-body">
                    <div class="contact-label h5">
                        <span>📱</span> No.HP
                    </div>
                    <p class="text-muted mb-0">
                        0895416503097
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<footer class="text-center p-4 mt-5 text-muted">
    &copy; <?= date('Y') ?> My Girly Blog | Made with Love 💖
</footer>

</body>
</html>