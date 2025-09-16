<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #1c1c1c, #2a2a2a);
            color: #e0e0e0;
        }
        .navbar {
            background-color: #111 !important;
        }
        .navbar-brand, .nav-link {
            color: #f8f9fa !important;
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .card {
            background-color: #2c2c2c;
            border: 1px solid #444;
            color: #f8f9fa;
        }
        .form-control, textarea {
            background-color: #1e1e1e;
            color: #f8f9fa;
            border: 1px solid #555;
        }
        .form-control:focus, textarea:focus {
            background-color: #1e1e1e;
            color: #fff;
            border-color: #0d6efd;
            box-shadow: none;
        }
        .alert-success {
            background-color: #198754;
            color: #fff;
            border: none;
        }
        a.btn, button.btn {
            color: #fff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">My Blog</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.create') }}">Create Post</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
