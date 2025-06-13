<?php $__env->startSection('content'); ?>
<div class="hero">
    <video autoplay muted loop>
        <source src="2014 Ford Mustang 3.7 K.N. _ Cinematic 4k Short Film.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="content text-white">
        <h1 class="display-4 fade-in">Welcome to Mustang Indonesia</h1>
        <p class="lead fade-in">Experience the power and legacy of Ford Mustang</p>
    </div>
</div>
<section class="section fade-in">
    <div class="container text-center">
        <h2 class="mb-5">Interior 360 Gallery</h2>

        <!-- Preview Utama -->
        <div class="mb-4">
            <img id="mainImage" src="stir2.avif" class="img-fluid rounded shadow" style="max-height: 500px;" alt="Mustang Interior">
        </div>

        <!-- Carousel Thumbnail -->
        <div class="d-flex justify-content-center flex-wrap gap-3">
            <img src="stir.jpg" class="img-thumbnail" style="width: 150px; cursor: pointer;" onclick="changeImage(this)">
            <img src="interior4.jpg" class="img-thumbnail" style="width: 150px; cursor: pointer;" onclick="changeImage(this)">
            <img src="foto1.avif" class="img-thumbnail" style="width: 150px; cursor: pointer;" onclick="changeImage(this)">
            <img src="foto2.jpeg" class="img-thumbnail" style="width: 150px; cursor: pointer;" onclick="changeImage(this)">
            <img src="interior5.jpg" class="img-thumbnail" style="width: 150px; cursor: pointer;" onclick="changeImage(this)">
        </div>
    </div>
</section>

<script>
    function changeImage(img) {
        document.getElementById("mainImage").src = img.src;
    }
</script>

<section class="section py-5 fade-in">
    <div class="container text-center">
        <h2 class="mb-3 fw-bold">A Sure Bet for Fast Times</h2>
        <p class="mb-5">Take a spin in the Mustang Dark Horse model, equipped with the powerful, naturally aspirated Modified 5.0L Coyote V8 engine.</p>

        <div class="row justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-5 mb-4">
                <div class="card bg-dark text-white border-0 shadow-lg">
                    <img src="<?php echo e(asset('foto2.jpeg')); ?>" class="card-img" alt="Drift Brake">
                    <div class="card-img-overlay d-flex align-items-end p-3" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);">
                        <h5 class="card-title mb-0">Adrenaline-Boosting Drift Brake</h5>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-5 mb-4">
                <div class="card bg-dark text-white border-0 shadow-lg">
                    <img src="<?php echo e(asset('interior6.jpg')); ?>" class="card-img" alt="Thrill-Inducing Engines">
                    <div class="card-img-overlay d-flex align-items-end p-3" style="background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);">
                        <h5 class="card-title mb-0">Thrill-Inducing Engines</h5>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="btn btn-outline-primary mt-4">Experience Performance +</a>
    </div>
</section>

<div class="container py-5">
    <!-- Judul -->
    <h2 class="fw-bold mb-3">Vehicle Details</h2>

    <!-- Dropdown Pilihan Model -->
    <div class="mb-4">
        <select class="form-select w-auto">
            <option selected>Mustang® EcoBoost® Fastback</option>
            <option>Mustang® GT</option>
            <option>Mustang® Dark Horse</option>
        </select>
    </div>

    <!-- Gambar + Dimensi -->
    <div class="row align-items-center mb-5">
        <div class="col-md-6 offset-md-3 text-center">
            <img src="<?php echo e(asset('mach 1.avif')); ?>" alt="Mustang" class="img-fluid" style="max-width: 450px;">
            <div class="mt-3 small text-muted">
                Width: 81.9 in. &nbsp;&nbsp;|&nbsp;&nbsp; Length: 189.4 in. &nbsp;&nbsp;|&nbsp;&nbsp; Height: 55 in.
            </div>
        </div>
    </div>

    <!-- Tabel Spesifikasi -->
    <div class="table-responsive">
        <table class="table table-bordered text-start">
            <tbody>
                <tr>
                    <th>Engine Type</th>
                    <td>2.3L GTDI I-4 Engine</td>
                </tr>
                <tr>
                    <th>Horsepower (SAE net @ RPM)</th>
                    <td>315 @ 5,500 rpm (93-Octane Fuel)</td>
                </tr>
                <tr>
                    <th>Torque (lb.-ft. @ RPM)</th>
                    <td>350 @ 3,000 rpm (93-Octane Fuel)</td>
                </tr>
                <tr>
                    <th>Dampers</th>
                    <td>Hydraulic Gas-Pressurized, Outboard-Mounted</td>
                </tr>
                <tr>
                    <th>Transmission</th>
                    <td>10-Speed Automatic</td>
                </tr>
                <tr>
                    <th>Rear Axle Ratio</th>
                    <td>3.15 Limited-Slip Rear Axle</td>
                </tr>
                <tr>
                    <th>Body Style</th>
                    <td>Fastback</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Tombol Compare -->
    <div class="text-start mt-4">
        <button class="btn btn-outline-primary">Compare +</button>
    </div>
</div>


<footer class="bg-light text-dark pt-5 pb-4 border-top mt-5">
    <div class="container">
        <!-- Disclosures and Search -->
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
            <h6 class="fw-semibold mb-2">Disclosures</h6>
            <form class="d-flex">
                <input type="text" class="form-control me-2" placeholder="Search">
                <button class="btn btn-outline-dark">Search</button>
            </form>
        </div>

        <!-- Main Footer Columns -->
        <div class="row text-start">
            <div class="col-md-3 col-6 mb-4">
                <h6 class="fw-bold">All Vehicles</h6>
                <ul class="list-unstyled">
                    <li><a href="#">SUVs & Crossovers</a></li>
                    <li><a href="#">Trucks & Vans</a></li>
                    <li><a href="#">Cars</a></li>
                    <li><a href="#">Electrified</a></li>
                    <li><a href="#">Commercial Vehicles</a></li>
                    <li><a href="#">Future Vehicles</a></li>
                    <li><a href="#">Certified Used</a></li>
                    <li><a href="#">All Vehicles</a></li>
                    <li><a href="#">Performance Vehicles</a></li>
                    <li><a href="#">Awards</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-6 mb-4">
                <h6 class="fw-bold">Shop</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Build & Price</a></li>
                    <li><a href="#">Search Inventory</a></li>
                    <li><a href="#">Get a Quote</a></li>
                    <li><a href="#">Trade-In Value</a></li>
                    <li><a href="#">Towing Guides</a></li>
                    <li><a href="#">Compare Vehicles</a></li>
                    <li><a href="#">Get Updates</a></li>
                    <li><a href="#">Certified Used Inventory</a></li>
                    <li><a href="#">Ford Merchandise</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-6 mb-4">
                <h6 class="fw-bold">Finance</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Ford Credit Home</a></li>
                    <li><a href="#">Finance Options</a></li>
                    <li><a href="#">Payment Calculator</a></li>
                    <li><a href="#">Customer Support</a></li>
                    <li><a href="#">Credit Account</a></li>
                    <li><a href="#">Ford Insure</a></li>
                    <li><a href="#">Investor Center</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-6 mb-4">
                <h6 class="fw-bold">Support</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Locate a Dealer</a></li>
                    <li><a href="#">Support Home</a></li>
                    <li><a href="#">Technology Support</a></li>
                    <li><a href="#">Warranty & Manuals</a></li>
                    <li><a href="#">Collision Assistance</a></li>
                    <li><a href="#">Recalls</a></li>
                    <li><a href="#">Maintenance Schedule</a></li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <hr>

        <!-- Bottom Row -->
        <div class="d-flex justify-content-between flex-wrap align-items-center mt-3">
            <p class="mb-0 small">&copy; 2025 Ford Motor Company</p>
            <div class="d-flex gap-3">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
                <a href="#"><i class="bi bi-tiktok"></i></a>
            </div>
        </div>
    </div>
</footer>


<?php echo $__env->make('template.page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel\Project_Akhir\resources\views/home.blade.php ENDPATH**/ ?>