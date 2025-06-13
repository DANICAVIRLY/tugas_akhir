<?php $__env->startSection('content'); ?>
<section class="section fade-in">
    <div class="container">
        <h2>Our Products</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white h-100">
                    <img src="gt.webp" class="card-img-top" alt="Mustang 1">
                    <div class="card-body">
                        <h5 class="card-title">Mustang GT</h5>
                        <p class="card-text">Pure muscle and power with V8 engine performance.</p>
                    </div>
                </div>
            </div>
             <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white h-100">
                    <img src="5.0.jpg" class="card-img-top" alt="Mustang 2">
                    <div class="card-body">
                        <h5 class="card-title">Ford Mustang 5.0 GT Fastback – 2.3 EcoBoost</h5>
                        <p class="card-text">Model dengan kombinasi mesin 5.0 GT dan 2.3 EcoBoost, serta desain fastback</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white h-100">
                    <img src="Shelby-GT500-3a.jpg" class="card-img-top" alt="Mustang 3">
                    <div class="card-body">
                        <h5 class="card-title">Mustang Shelby GT500</h5>
                        <p class="card-text">The most powerful street-legal Ford ever built.</p>
                    </div>
                </div>
            </div>
             <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white h-100">
                    <img src="shelby gt350.jpg" class="card-img-top" alt="Mustang 2">
                    <div class="card-body">
                        <h5 class="card-title">Ford Mustang Shelby GT350</h5>
                        <p class="card-text">Varian Shelby lain yang menawarkan performa tinggi dengan mesin V8 naturally aspirated. .</p>
                    </div>
                </div>
            </div>
             <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white h-100">
                    <img src="2.3.jpg" class="card-img-top" alt="Mustang 2">
                    <div class="card-body">
                        <h5 class="card-title">Ford Mustang 2.3 Convertible</h5>
                        <p class="card-text">Model dengan mesin 2.3 liter dan atap yang dapat dilipat. .</p>
                    </div>
                </div>
            </div>
             <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white h-100">
                    <img src="mach 1.avif" class="card-img-top" alt="Mustang 2">
                    <div class="card-body">
                        <h5 class="card-title">Ford Mustang Mach 1</h5>
                        <p class="card-text">Model khusus yang mengusung desain klasik dan sentuhan performa dari Mustang zaman dulu.</p>
                    </div>
                </div>
            </div>
             <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white h-100">
                    <img src="bullitt.jpeg" class="card-img-top" alt="Mustang 2">
                    <div class="card-body">
                        <h5 class="card-title">Ford Mustang Bullitt:</h5>
                        <p class="card-text">Model edisi khusus yang terinspirasi dari Mustang ikonik dari film Bullitt, dengan fokus pada performa dan gaya. </p>
                    </div>
                </div>
            </div>
             <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white h-100">
                    <img src="302.jpeg" class="card-img-top" alt="Mustang 2">
                    <div class="card-body">
                        <h5 class="card-title">Ford Mustang Boss 302/429:</h5>
                        <p class="card-text">Model edisi khusus yang dikenal dengan performa tinggi dan mesin V8 berkapasitas besa</p>
                    </div>
                </div>
            </div>
             <div class="col-md-4 mb-4">
                <div class="card bg-dark text-white h-100">
                    <img src="High-Performance-Fastback-.webp" class="card-img-top" alt="Mustang 2">
                    <div class="card-body">
                        <h5 class="card-title">Ford Mustang 2.3 High Performance Fastback:</h5>
                        <p class="card-text">Model dengan mesin 2.3 liter yang lebih bertenaga dan memiliki desain fastback.
</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
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



<?php echo $__env->make('template.page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel\Project_Akhir\resources\views/product.blade.php ENDPATH**/ ?>