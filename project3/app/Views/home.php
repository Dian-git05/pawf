<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<?= $this->include('layouts/navbar'); ?>

	<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">Selamat Datang</h1>
        <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
        <!-- <button class="btn btn-primary btn-sm" type="button">Read more</button> -->
      </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Mulai ngoding PHP nich</h5>
					<p>Akhirnya memberanikan diri buat eksplor PHP lebih dalam! Ternyata asyik banget bisa bikin website yang nggak cuma statis, tapi bisa berinteraksi dengan data. Di sini aku bakal berbagi catatan kecil tentang variabel, logika dasar, sampai gimana caranya bikin script PHP yang efisien.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Jadi paham CSS dan JS</h5>
					<p>Ternyata bumbu rahasia biar website kelihatan cantik itu ada di CSS, dan biar interaktif ya pakai JavaScript. Dari yang tadinya bingung soal positioning dan event listener, sekarang mulai bisa bikin komponen yang lumayan enak dipandang dan responsif di berbagai perangkat.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Codeigniter asyik juga kok</h5>
					<p>Setelah kenal dasar PHP, naik kelas ke Framework CodeIgniter 4 bener-bener ngerubah cara pandangku soal coding. Struktur MVC-nya bikin kerjaan jadi lebih teratur dan rapi. Emang ada tantangan di awal, tapi kalau sudah terbiasa, bikin aplikasi jadi jauh lebih cepat dan scalable.</p>
				</div>
			</div>
			
		</div>
	</div>
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top">
			<div class="container">
				&copy; <?= Date('Y') ?>
			</div>
		</footer>
	</div>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>git 