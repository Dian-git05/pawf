<?= $this->extend($config->viewLayout) ?>

<?= $this->section('main') ?>

<!-- Import Font agar tampilan lebih estetik -->
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
    :root {
        --pink-soft: #f8c8dc;
        --pink-bold: #f1a7c4;
        --lavender: #dcd0ff;
        --cream: #fff9f0;
        --text-color: #6d5d6e;
    }

    body {
        background-color: var(--cream);
        /* Efek garis-garis pastel seperti di gambar */
        background-image: linear-gradient(90deg, rgba(248, 200, 220, 0.2) 50%, transparent 50%);
        background-size: 60px 100%;
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Navbar bawaan Myth:Auth kita beri sentuhan ungu */
    .navbar {
        background-color: var(--lavender) !important;
        border-bottom: 2px solid var(--pink-soft);
    }

    .container-fluid {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 90vh;
    }

    .girly-card {
        background: #ffffff;
        padding: 40px;
        border-radius: 40px;
        box-shadow: 0 15px 35px rgba(241, 167, 196, 0.2);
        width: 100%;
        max-width: 420px;
        text-align: center;
        border: 4px solid #ffffff;
        outline: 2px solid var(--pink-soft);
        position: relative;
        overflow: hidden;
    }

    /* Dekorasi bunga/daun (Opsional: menggunakan emoji jika tidak ada file gambar) */
    .girly-card::before {
        content: "✿";
        position: absolute;
        top: 10px;
        left: 10px;
        color: var(--pink-soft);
        font-size: 2rem;
        opacity: 0.5;
    }

    .girly-title {
        color: #9b59b6; 
        font-family: 'Dancing Script', cursive;
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .heart {
        color: var(--pink-bold);
        display: inline-block;
        animation: heartbeat 1.5s infinite;
    }

    @keyframes heartbeat {
        0% { transform: scale(1); }
        50% { transform: scale(1.2); }
        100% { transform: scale(1); }
    }

    .form-group {
        text-align: left;
        margin-bottom: 20px;
    }

    .form-group label {
        color: var(--text-color);
        font-weight: 600;
        margin-left: 10px;
        font-size: 0.9rem;
    }

    .girly-input {
        width: 100%;
        padding: 14px 20px;
        border: 2px solid var(--lavender);
        border-radius: 25px;
        background: #fffbff;
        transition: all 0.3s ease;
        outline: none;
        box-sizing: border-box;
    }

    .girly-input:focus {
        border-color: var(--pink-bold);
        box-shadow: 0 0 10px rgba(241, 167, 196, 0.3);
    }

    .girly-btn {
        width: 100%;
        padding: 14px;
        background: linear-gradient(135deg, var(--pink-soft) 0%, var(--pink-bold) 100%);
        border: none;
        border-radius: 25px;
        color: white;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: 0.4s;
        margin-top: 10px;
        box-shadow: 0 5px 15px rgba(241, 167, 196, 0.4);
    }

    .girly-btn:hover {
        letter-spacing: 1px;
        background: linear-gradient(135deg, var(--pink-bold) 0%, #e88fb3 100%);
        transform: translateY(-2px);
    }

    .girly-links {
        margin-top: 25px;
        border-top: 1px solid #eee;
        padding-top: 15px;
    }

    .girly-links a {
        display: block;
        color: #74b9ff;
        text-decoration: none;
        font-size: 0.85rem;
        margin-bottom: 8px;
        transition: 0.3s;
    }

    .girly-links a:hover {
        color: var(--pink-bold);
        text-decoration: underline;
    }
</style>

<div class="container-fluid">
    <div class="girly-card">
        <h2 class="girly-title">Login <span class="heart">♡</span></h2>

        <?= view('Myth\Auth\Views\_message_block') ?>

        <form action="<?= url_to('login') ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="login">Email or Username</label>
                <input type="text" class="girly-input <?= session('errors.login') ? 'is-invalid' : '' ?>"
                       name="login" placeholder="Masukkan nama cantikmu...">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="girly-input <?= session('errors.password') ? 'is-invalid' : '' ?>" 
                       placeholder="Rahasia kita...">
            </div>

            <?php if ($config->allowRemembering): ?>
                <div class="form-check" style="text-align: left; margin-bottom: 15px; padding-left: 35px;">
                    <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                    <label class="form-check-label" style="font-size: 0.8rem; color: #999;">Ingat saya?</label>
                </div>
            <?php endif; ?>

            <button type="submit" class="girly-btn">Masuk ✨</button>
        </form>

        <div class="girly-links">
            <?php if ($config->allowRegistration) : ?>
                <a href="<?= url_to('register') ?>">Belum punya akun? Daftar di sini</a>
            <?php endif; ?>
            <?php if ($config->activeResetter): ?>
                <a href="<?= url_to('forgot') ?>">Lupa password ya?</a>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>