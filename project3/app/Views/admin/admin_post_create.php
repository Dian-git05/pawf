<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Write Post ✨</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        /* Navbar Admin Ungu */
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
        /* Form Card Styling */
        .card-form {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            background-color: white;
            padding: 30px;
        }
        .form-label {
            font-weight: 600;
            color: #ad1457;
            margin-bottom: 8px;
        }
        .form-control {
            border-radius: 12px;
            border: 2px solid #fce4ec;
            padding: 12px;
            transition: 0.3s;
        }
        .form-control:focus {
            border-color: #f06292;
            box-shadow: 0 0 0 0.25 margin-bottomrem rgba(240, 98, 146, 0.25);
        }
        /* Buttons */
        .btn-publish {
            background-color: #f06292;
            color: white;
            border-radius: 12px;
            padding: 10px 25px;
            font-weight: 600;
            border: none;
            transition: 0.3s;
        }
        .btn-publish:hover {
            background-color: #d81b60;
            transform: translateY(-2px);
        }
        .btn-draft {
            background-color: #f5f5f5;
            color: #666;
            border-radius: 12px;
            padding: 10px 25px;
            font-weight: 600;
            border: none;
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-admin">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('admin/post') ?>">MyBlog Admin 🛠️</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="<?= base_url('post') ?>" target="_blank">View Site</a>
                <a class="nav-link text-warning" href="<?= base_url('logout') ?>">Logout</a>
            </div>
        </div>
    </nav>

    <div class="admin-header">
        <div class="container">
            <h1>Blog > Write Post 🖋️</h1>
            <p class="text-muted m-0">Tuliskan ide-ide cemerlangmu di sini.</p>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card-form">
                    <form action="" method="post">
                        <div class="mb-4">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Tuliskan judul artikel yang menarik ✨" required>
                        </div>

                        <div class="mb-4">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" class="form-control" rows="12" placeholder="Tuliskan isi postinganmu dengan penuh cinta... 💕" required></textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit" name="status" value="published" class="btn btn-publish">
                                Publish Post ✨
                            </button>
                            <button type="submit" name="status" value="draft" class="btn btn-draft">
                                Save to Draft
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-4 text-muted">
        &copy; <?= date('Y') ?> Admin Dashboard | Happy Writing! 💖
    </footer>

</body>
</html>