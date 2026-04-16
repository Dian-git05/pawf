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
        <h1 class="display-5 fw-bold">About</h1>
        
      </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Siapa Aku</h5>
					<p>Halo! Nama saya Dian Khaerunnisa, seorang mahasiswi Teknik Informatika di Universitas Nahdlatul Ulama Indonesia. Lahir pada 8 Agustus 2005, saya memiliki antusiasme yang tinggi dalam dunia teknologi, khususnya dalam membangun solusi digital yang bermanfaat bagi banyak orang melalui baris-baris kode.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Bisa Apa Aku</h5>
					<p>Fokus utama saya adalah Web Development. Saya memiliki spesialisasi dalam mengembangkan aplikasi web yang dinamis dan responsif. Saya terbiasa bekerja di sisi backend maupun frontend untuk memastikan sebuah website tidak hanya berfungsi dengan baik, tetapi juga memberikan pengalaman pengguna yang optimal.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Bagaimana Aku</h5>
					<p>Dalam membangun proyek, saya menggunakan bahasa pemrograman Python dan PHP. Secara spesifik, saya sangat mahir menggunakan Framework CodeIgniter 4 (CI4) untuk mempercepat proses pengembangan yang rapi dan terstruktur. Saya selalu terbuka untuk mempelajari teknologi baru dan berkolaborasi dalam proyek-proyek inovatif.</p>
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

</html>