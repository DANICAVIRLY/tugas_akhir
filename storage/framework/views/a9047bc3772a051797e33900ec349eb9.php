<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ford mustang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            color: white;
            background-color: #0b0c2a;
            scroll-behavior: smooth;
        }
        nav {
            background-color: transparent;
        }
        .nav-link {
            color: #a0d2eb !important;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #ffffff !important;
        }
        .hero {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }
        .hero video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.4);
        }
        .hero .content {
            position: relative;
            z-index: 2;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
        }
        .section {
            padding: 100px 20px;
        }
        h1, h2 {
            color: #a0d2eb;
        }
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s forwards;
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="/">ford mustang</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/product">Product</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\laravel\Project_Akhir\resources\views/template/page.blade.php ENDPATH**/ ?>