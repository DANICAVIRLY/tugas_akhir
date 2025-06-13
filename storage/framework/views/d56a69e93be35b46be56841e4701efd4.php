<?php $__env->startSection('content'); ?>
<section class="section fade-in">
    <div class="container">
        <h2>About Mustang Indonesia</h2>
    </div>



<section class="section py-5 fade-in">
    <div class="container text-center">
        <h2 class="mb-3 fw-bold">A Sure Bet for Fast Times</h2>
        <p class="mb-5">Mustang Indonesia is dedicated to showcasing the legacy and innovation of the Ford Mustang. Our mission is to deliver an unforgettable experience to every car enthusiast in the country.
            The Ford Mustang is a series of American automobiles manufactured by Ford. In continuous production since 1964, the Mustang is currently the longest-produced Ford car nameplate. Currently in its seventh generation, it is the fifth-best selling Ford car nameplate. The namesake of the "pony car" automobile segment, the Mustang was developed as a highly styled line of sporty coupes and convertibles derived from existing model lines, initially distinguished by "long hood, short deck" proportions</p>

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

<?php echo $__env->make('template.page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laravel\Project_Akhir\resources\views/about.blade.php ENDPATH**/ ?>