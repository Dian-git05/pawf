<!-- Import Font Estetik -->
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
    :root {
        --pink-soft: #f8c8dc;
        --pink-bold: #f1a7c4;
        --lavender: #dcd0ff;
        --cream: #fff9f0;
        --text-dark: #6d5d6e;
    }

    body {
        background-color: var(--cream);
        background-image: linear-gradient(90deg, rgba(248, 200, 220, 0.1) 50%, transparent 50%);
        background-size: 80px 100%;
        font-family: 'Poppins', sans-serif;
        color: var(--text-dark);
        margin: 0;
    }

    /* Navbar Girly */
    .navbar-custom {
        background: linear-gradient(to right, var(--lavender), var(--pink-soft));
        padding: 1rem 5%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .brand-name {
        font-family: 'Dancing Script', cursive;
        font-size: 2.2rem;
        color: #9b59b6;
        text-decoration: none;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        margin-left: 20px;
        font-weight: 400;
        transition: 0.3s;
        font-size: 0.95rem;
    }

    .nav-links a:hover {
        color: #9b59b6;
    }

    /* Hero Section */
    .hero-section {
        text-align: center;
        padding: 60px 20px;
    }

    .welcome-text {
        font-family: 'Dancing Script', cursive;
        font-size: 4rem;
        color: #9b59b6;
        margin: 0;
        text-shadow: 2px 2px white;
    }

    /* Article Cards */
    .content-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 20px 60px 20px;
    }

    .article-card {
        background: white;
        border-radius: 35px;
        padding: 30px 40px;
        margin-bottom: 30px;
        border: 2px solid var(--lavender);
        box-shadow: 0 10px 25px rgba(155, 89, 182, 0.05);
        transition: transform 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .article-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(241, 167, 196, 0.2);
    }

    .article-card::after {
        content: "✨";
        position: absolute;
        top: 15px;
        right: 20px;
        font-size: 1.2rem;
        opacity: 0.4;
    }

    .article-title {
        color: #a29bfe;
        font-size: 1.5rem;
        font-weight: 600;
        margin-top: 0;
        margin-bottom: 15px;
    }

    .article-text {
        line-height: 1.8;
        font-size: 1rem;
        color: var(--text-dark);
        margin: 0;
    }

    .logout-btn {
        border: 2px solid white;
        padding: 5px 15px;
        border-radius: 15px;
        color: white !important;
    }

    .logout-btn:hover {
        background: white;
        color: var(--pink-bold) !important;
    }
</style>

<nav class="navbar-custom">
    <a href="<?= base_url() ?>" class="brand-name">MyBlog ✨</a>
    <div class="nav-links">
        <a href="<?= base_url() ?>">Home</a>
        <a href="<?= base_url('about') ?>">About</a>
        <a href="<?= base_url('post') ?>">Blog</a>
        <a href="<?= base_url('contact') ?>">Contact</a>
        <a href="<?= base_url('faqs') ?>">FAQ</a>

        <?php if (function_exists('logged_in') && logged_in()) : ?>
            <!-- Menu Admin hanya muncul jika user sudah Login -->
            <a href="<?= base_url('admin/post') ?>">Admin</a>
            <a href="<?= base_url('logout') ?>" class="logout-btn">Logout</a>
        <?php else : ?>
            <a href="<?= base_url('login') ?>" class="logout-btn">Login</a>
        <?php endif; ?>
    </div>
</nav>

<div class="hero-section">
    <h1 class="welcome-text">Selamat Datang <span>♡</span></h1>
</div>

<div class="content-container">
    <!-- Card 1 -->
    <div class="article-card">
        <h2 class="article-title">Mulai ngoding PHP nich</h2>
        <p class="article-text">
            Akhirnya memberanikan diri buat eksplor PHP lebih dalam! Ternyata asyik banget bisa bikin website yang nggak cuma statis, tapi bisa berinteraksi dengan data. Di sini aku bakal berbagi catatan kecil tentang variabel, logika dasar, sampai gimana caranya bikin script PHP yang efisien.
        </p>
    </div>

    <!-- Card 2 -->
    <div class="article-card">
        <h2 class="article-title">Jadi paham CSS dan JS</h2>
        <p class="article-text">
            Ternyata bumbu rahasia biar website kelihatan cantik itu ada di CSS, dan biar interaktif ya pakai JavaScript. Dari yang tadinya bingung soal positioning dan event listener, sekarang mulai bisa bikin komponen yang lumayan enak dipandang dan responsif di berbagai perangkat.
        </p>
    </div>

    <!-- Card 3 -->
    <div class="article-card">
        <h2 class="article-title">Codeigniter asyik juga kok</h2>
        <p class="article-text">
            Setelah kenal dasar PHP, naik kelas ke Framework CodeIgniter 4 bener-bener ngerubah cara pandangku soal coding. Struktur MVC-nya bikin kerjaan jadi lebih teratur dan rapi. Emang ada tantangan di awal, tapi kalau sudah terbiasa, bikin aplikasi jadi jauh lebih cepat dan scalable.
        </p>
    </div>
</div>