<!-- Import Font Dancing Script untuk Logo -->
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

<style>
    .navbar-girly {
        background: linear-gradient(to right, #dcd0ff, #f8c8dc) !important;
        padding: 0.8rem 5%;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        border-bottom: 2px solid #ffffff;
    }

    .navbar-brand-girly {
        font-family: 'Dancing Script', cursive;
        font-size: 1.8rem !important;
        color: #9b59b6 !important;
        font-weight: bold;
    }

    .nav-link-girly {
        color: #6d5d6e !important;
        font-weight: 500;
        margin: 0 10px;
        transition: 0.3s;
        font-size: 1rem;
    }

    .nav-link-girly:hover {
        color: #ffffff !important;
        transform: translateY(-2px);
    }

    .btn-logout-girly {
        border: 2px solid #ffffff;
        border-radius: 20px;
        padding: 5px 20px !important;
        color: #ffffff !important;
        background: rgba(255, 255, 255, 0.2);
    }

    .btn-logout-girly:hover {
        background: #ffffff;
        color: #f1a7c4 !important;
    }

    /* Penyesuaian agar konten tidak tertutup navbar fixed */
    body { padding-top: 80px; }
</style>

<nav class="navbar navbar-expand-md navbar-girly fixed-top">
    <!-- Menggunakan base_url('') tanpa slash tambahan di dalam kurung jika sudah diatur di App.php -->
    <a class="navbar-brand navbar-brand-girly" href="<?= base_url() ?>">MyBlog ✨</a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link nav-link-girly" href="<?= base_url() ?>">Home</a>
            </li>
            <li class="nav-item">
                <!-- Sesuai dengan $routes->get('/about', 'Home::about'); -->
                <a class="nav-link nav-link-girly" href="<?= base_url('about') ?>">About</a>
            </li>
            <li class="nav-item">
                <!-- Sesuai dengan $routes->get('/contact', 'Home::contact'); -->
                <a class="nav-link nav-link-girly" href="<?= base_url('contact') ?>">Contact</a>
            </li>
            <li class="nav-item">
                <!-- Sesuai dengan grup admin di routes -->
                <a class="nav-link nav-link-girly" href="<?= base_url('admin/post') ?>">Admin</a>
            </li>
            
            <!-- Logika Auth (Myth:Auth) -->
            <?php if (function_exists('logged_in') && logged_in()) : ?>
                <li class="nav-item">
                    <a class="nav-link nav-link-girly btn-logout-girly" href="<?= base_url('logout') ?>">Logout</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link nav-link-girly" href="<?= base_url('login') ?>">Login</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>