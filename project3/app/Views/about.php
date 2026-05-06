<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me ✨</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
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

        /* Hero Section Custom */
        .girly-jumbotron {
            background: linear-gradient(135deg, var(--lavender) 0%, var(--pink-soft) 100%);
            padding: 80px 0;
            border-bottom-left-radius: 50% 20%;
            border-bottom-right-radius: 50% 20%;
            text-align: center;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            margin-bottom: 50px;
        }

        .display-about {
            font-family: 'Dancing Script', cursive;
            font-size: 4.5rem;
            color: white;
            text-shadow: 2px 2px rgba(155, 89, 182, 0.3);
            margin: 0;
        }

        /* About Cards */
        .about-card {
            background: white;
            border-radius: 35px;
            padding: 30px;
            margin-bottom: 25px;
            border: 2px solid var(--lavender);
            box-shadow: 0 10px 25px rgba(155, 89, 182, 0.05);
            transition: all 0.3s ease;
            position: relative;
        }

        .about-card:hover {
            transform: scale(1.02);
            box-shadow: 0 15px 35px rgba(241, 167, 196, 0.2);
            border-color: var(--pink-bold);
        }

        .h5-title {
            color: #9b59b6;
            font-family: 'Dancing Script', cursive;
            font-size: 2rem;
            margin-bottom: 15px;
            border-bottom: 2px dashed var(--pink-soft);
            display: inline-block;
        }

        p {
            line-height: 1.8;
            font-size: 1rem;
        }

        /* Footer */
        .footer-girly {
            text-align: center;
            padding: 40px 0;
            color: var(--pink-bold);
            font-weight: 600;
        }

        .heart-footer {
            color: #ff7675;
            animation: pulse 1s infinite;
            display: inline-block;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
    </style>
</head>

<body>

    <?= $this->include('layouts/navbar'); ?>

    <div class="girly-jumbotron">
        <div class="container">
            <h1 class="display-about">About Me <span>✨</span></h1>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-10 about-card">
                <h5 class="h5-title">Siapa Saya ✿</h5>
                <p>Halo! Nama saya <strong>Dian Khaerunnisa</strong>, seorang mahasiswi Teknik Informatika di Universitas Nahdlatul Ulama Indonesia. Saya memiliki antusiasme yang tinggi dalam dunia teknologi, khususnya dalam membangun solusi digital yang bermanfaat bagi banyak orang melalui baris-baris kode.</p>
            </div>

            <!-- Card 2 -->
            <div class="col-md-10 about-card">
                <h5 class="h5-title">Bisa Apa Saya ✿</h5>
                <p>Fokus utama saya adalah <strong>Web Development</strong>. Saya memiliki spesialisasi dalam mengembangkan aplikasi web yang dinamis dan responsif. Saya terbiasa bekerja di sisi backend maupun frontend untuk memastikan sebuah website tidak hanya berfungsi dengan baik, tetapi juga memberikan pengalaman pengguna yang optimal.</p>
            </div>

            <!-- Card 3 -->
            <div class="col-md-10 about-card">
                <h5 class="h5-title">Bagaimana Saya ✿</h5>
                <p>Dalam membangun proyek, saya menggunakan bahasa pemrograman <strong>Python dan PHP</strong>. Secara spesifik, saya sangat mahir menggunakan <strong>Framework CodeIgniter 4 (CI4)</strong> untuk mempercepat proses pengembangan yang rapi dan terstruktur. Saya selalu terbuka untuk mempelajari teknologi baru dan berkolaborasi dalam proyek-proyek inovatif.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="footer-girly border-top mt-5">
            <p>Made with <span class="heart-footer">❤</span> by Dian &copy; <?= Date('Y') ?></p>
        </footer>
    </div>

    <!-- Jquery dan Bootstrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>