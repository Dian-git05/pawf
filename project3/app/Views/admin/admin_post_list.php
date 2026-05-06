<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Blog Management ✨</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        /* Navbar khusus Admin */
        .navbar-admin {
            background: linear-gradient(to right, #4a148c 0%, #7b1fa2 100%);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        /* Header Section */
        .admin-header {
            background-color: white;
            padding: 3rem 2rem;
            margin-bottom: 2rem;
            border-bottom: 4px solid #f8bbd0;
        }
        .admin-header h1 {
            color: #4a148c;
            font-weight: 800;
        }
        /* Table Styling */
        .card-table {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            background-color: white;
            overflow: hidden;
        }
        .table thead {
            background-color: #fce4ec;
            color: #ad1457;
        }
        .table th {
            border: none;
            padding: 15px;
            font-weight: 600;
        }
        .table td {
            vertical-align: middle;
            padding: 15px;
            border-color: #f3f3f3;
        }
        /* Badge Status */
        .badge-published {
            background-color: #e8f5e9;
            color: #2e7d32;
            padding: 5px 12px;
            border-radius: 10px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        /* Buttons */
        .btn-new {
            background-color: #f06292;
            color: white;
            border-radius: 12px;
            padding: 10px 20px;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-new:hover {
            background-color: #d81b60;
            color: white;
            transform: scale(1.05);
        }
        .btn-action {
            border-radius: 8px;
            font-size: 0.85rem;
            margin: 2px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-admin">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('admin/post') ?>">MyBlog Admin 🛠️</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="<?= base_url('post') ?>" target="_blank">View Site</a>
                <a class="nav-link" href="<?= base_url('admin/setting') ?>">Setting</a>
                <a class="nav-link text-warning" href="<?= base_url('logout') ?>">Logout</a>
            </div>
        </div>
    </nav>

    <div class="admin-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <h1>Blog > Admin 🎀</h1>
                <p class="text-muted m-0">Kelola semua konten artikelmu di sini.</p>
            </div>
            <a href="<?= base_url('admin/post/new') ?>" class="btn btn-new">
                + New Post
            </a>
        </div>
    </div>

    <div class="container mb-5">
        <div class="card card-table">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 5%">#</th>
                            <th style="width: 50%">Title</th>
                            <th style="width: 15%">Status</th>
                            <th style="width: 30%" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post) : ?>
                        <tr>
                            <td><?= $post['id'] ?></td>
                            <td>
                                <strong><?= esc($post['title']) ?></strong><br>
                                <small class="text-muted"><?= $post['created_at'] ?></small>
                            </td>
                            <td>
                                <span class="badge-published"><?= $post['status'] ?></span>
                            </td>
                            <td class="text-center">
                                <a href="<?= base_url('post/' . $post['slug']) ?>" class="btn btn-outline-info btn-sm btn-action" target="_blank">Preview</a>
                                <a href="<?= base_url('admin/post/' . $post['id'] . '/edit') ?>" class="btn btn-outline-secondary btn-sm btn-action">Edit</a>
                                <a href="#" class="btn btn-outline-danger btn-sm btn-action" onclick="confirmDelete('<?= $post['id'] ?>')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="text-center py-4 text-muted">
        &copy; <?= date('Y') ?> Admin Dashboard | Semangat Nulisnya! 💕
    </footer>

    <script>
        function confirmDelete(id) {
            if (confirm("Yakin mau hapus postingan ini? 🥺")) {
                // PERBAIKAN: Menghapus slash berlebih agar URL menjadi /admin/post/delete/ID
                window.location.href = "<?= base_url('admin/post/delete') ?>/" + id;
            }
        }
    </script>

</body>
</html>