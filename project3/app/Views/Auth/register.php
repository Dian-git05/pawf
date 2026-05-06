<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us! ✨ | Register</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

    <style>
        body {
            background: linear-gradient(135deg, #fce4ec 0%, #f3e5f5 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
        }

        .register-container {
            width: 100%;
            max-width: 450px;
            margin: auto;
            padding: 20px;
        }

        .card-register {
            border: none;
            border-radius: 25px;
            box-shadow: 0 15px 35px rgba(216, 27, 96, 0.1);
            background-color: white;
            padding: 30px;
        }

        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .register-header h2 {
            color: #ad1457;
            font-weight: 800;
            letter-spacing: -1px;
        }

        .form-label {
            font-weight: 600;
            color: #6a1b9a;
            font-size: 0.9rem;
            margin-left: 5px;
        }

        .form-control {
            border-radius: 15px;
            border: 2px solid #fce4ec;
            padding: 12px 15px;
            transition: 0.3s;
        }

        .form-control:focus {
            border-color: #f06292;
            box-shadow: 0 0 0 0.25rem rgba(240, 98, 146, 0.15);
        }

        .btn-register {
            background: linear-gradient(to right, #f06292, #ec407a);
            color: white;
            border: none;
            border-radius: 15px;
            padding: 12px;
            font-weight: 700;
            width: 100%;
            margin-top: 10px;
            transition: 0.3s;
        }

        .btn-register:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(236, 64, 122, 0.4);
            color: white;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #888;
        }

        .footer-text a {
            color: #d81b60;
            text-decoration: none;
            font-weight: 700;
        }

        /* Hiasan kecil */
        .decoration-dot {
            height: 10px;
            width: 10px;
            background-color: #f06292;
            border-radius: 50%;
            display: inline-block;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <div class="register-container">
        <div class="card-register">
            <div class="register-header">
                <div class="decoration-dot"></div>
                <h2>Create Account</h2>
                <p class="text-muted small">Ayo bergabung dan mulai berbagi cerita! ✨</p>
            </div>

            <!-- Pastikan action form-nya sesuai dengan route Myth:Auth kamu -->
            <form action="<?= url_to('register') ?>" method="post">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" 
                           name="email" placeholder="nama@email.com" value="<?= old('email') ?>">
                    <div class="invalid-feedback">
                        <?= session('errors.email') ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" 
                           name="username" placeholder="pilih username cantikmu" value="<?= old('username') ?>">
                    <div class="invalid-feedback">
                        <?= session('errors.username') ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" 
                               placeholder="••••••••" autocomplete="off">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="pass_confirm" class="form-label">Repeat</label>
                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" 
                               placeholder="••••••••" autocomplete="off">
                    </div>
                </div>

                <button type="submit" class="btn btn-register">Join the Club! 🎀</button>
            </form>

            <div class="footer-text">
                Sudah punya akun? <a href="<?= url_to('login') ?>">Sign In</a>
            </div>
        </div>
        
        <p class="text-center mt-4 small text-muted">
            &copy; <?= date('Y') ?> MyBlog Dashboard | Informatics Engineering 💻
        </p>
    </div>

</body>

</html>