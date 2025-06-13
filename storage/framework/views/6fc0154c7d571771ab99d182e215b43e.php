<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Benelli Clone</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            height: 100vh;
            background: url('https://benelli.co.id/assets/img/slide1.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 0 15px;
        }

        .hero h1 {
            font-size: 3rem;
        }

        .hero p {
            font-size: 1.2rem;
        }

        @media (min-width: 768px) {
            .hero h1 {
                font-size: 4rem;
            }

            .hero p {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

<?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>

<footer class="bg-dark text-white text-center p-3 mt-5">
    &copy; <?php echo e(date('Y')); ?> Benelli Clone - Static Company Profile
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\laravel\Project_Akhir\resources\views/templates/page.blade.php ENDPATH**/ ?>