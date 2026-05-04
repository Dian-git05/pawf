
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
        <h1 class="display-5 fw-bold">FAQ</h1>
       
      </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Apa bahasa pemrograman dan framework yang paling sering digunakan dalam proyek-proyek di blog ini? (Q)</h5>
					<p>Sebagian besar proyek yang saya bagikan di sini dibangun menggunakan PHP dengan framework CodeIgniter 4 (CI4). Selain itu, saya juga aktif mengeksplorasi Python untuk logika pemrosesan data dan tentu saja menggunakan HTML, CSS, serta JavaScript untuk tampilan antarmuka yang interaktif.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Apakah konten di blog ini boleh dipelajari atau digunakan kembali untuk tugas kuliah? (Q)</h5>
					<p>Tentu saja! Blog ini dibuat dengan semangat berbagi ilmu. Kamu bebas mempelajari kode yang saya bagikan, mengadaptasinya, atau menggunakannya sebagai referensi belajar. Jika ada bagian yang kurang jelas atau ingin diskusi lebih lanjut mengenai teknis kodingnya, jangan ragu untuk menghubungi saya melalui halaman Contact.</p>
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