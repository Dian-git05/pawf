<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs ✨</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    
    <style>
        body {
            background-color: #fff5f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #444;
        }
        /* Header FAQ */
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
        /* Accordion Style */
        .accordion-item {
            border: none;
            margin-bottom: 15px;
            border-radius: 15px !important;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .accordion-button {
            background-color: #ffffff;
            color: #ad1457;
            font-weight: 600;
        }
        .accordion-button:not(.collapsed) {
            background-color: #fce4ec;
            color: #d81b60;
            box-shadow: none;
        }
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(248, 187, 208, 0.5);
        }
        .accordion-body {
            background-color: #ffffff;
            line-height: 1.7;
            color: #666;
        }
    </style>
</head>

<body>

    <?= $this->include('layouts/navbar'); ?>

    <div class="jumbotron-pink">
      <div class="container py-3">
        <h1 class="display-5 fw-bold">Frequently Asked Questions 🎀</h1>
        <p class="text-muted">Punya pertanyaan? Cek jawabannya di bawah ini ya!</p>
      </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                
                <div class="accordion" id="faqAccordion">
                    
                    <!-- Pertanyaan 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                Apa bahasa pemrograman dan framework yang paling sering digunakan di blog ini? ✨
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sebagian besar proyek yang saya bagikan di sini dibangun menggunakan <strong>PHP</strong> dengan framework <strong>CodeIgniter 4 (CI4)</strong>. Selain itu, saya juga aktif mengeksplorasi <strong>Python</strong> untuk logika pemrosesan data dan tentu saja menggunakan HTML, CSS, serta JavaScript untuk tampilan antarmuka yang interaktif.
                            </div>
                        </div>
                    </div>

                    <!-- Pertanyaan 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                Apakah konten di blog ini boleh digunakan untuk tugas kuliah? 🎓
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Tentu saja! Blog ini dibuat dengan semangat berbagi ilmu. Kamu bebas mempelajari kode yang saya bagikan, mengadaptasinya, atau menggunakannya sebagai referensi belajar. Jika ada bagian yang kurang jelas, jangan ragu untuk menghubungi saya melalui halaman Contact. Semangat skripsiannya! 💕
                            </div>
                        </div>
                    </div>

                </div> <!-- End Accordion -->

            </div>
        </div>
    </div>

    <footer class="container py-4 mt-5 text-center text-muted border-top">
        &copy; <?= Date('Y') ?> My Girly Blog | Made with Love 💖
    </footer>

    <!-- Jquery dan Bootstrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>