<!-- Navbar -->
<div class="container-fluid top-info p-2 row m-0">
    <div class="col-10">
        <div class="row">
            <div class="col-lg-2 col-md-12 d-flex">
                <i class="bi bi-telephone text-light"></i>
                <a href="tel:9836176084" class="nav-link ms-2 text-light">+91 9836-17-6084</a>
            </div>
            <div class="col-lg-2 col-md-12 d-flex">
                <i class="bi bi-envelope text-light"></i>
                <a href="mailto:example@gmail.com" class="nav-link ms-2 text-light">example@gmail.com</a>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="d-flex justify-content-end">
            <a href="#" class="nav-link text-white"><i class="bi bi-facebook"></i></a>
            <a href="#" class="nav-link text-white"><i class="bi bi-instagram ms-3"></i></a>
            <a href="#" class="nav-link text-white"><i class="bi bi-youtube ms-3"></i></a>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg bg-white sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">
            <img src="./images/logo/Datta pets & Kennel.png" alt="Site Logo" width="60">
        </a>
        <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse p-lg-0 p-md-3 p-md-3 p-3" id="navbarSupportedContent">
            <ul class="w-100 navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end">
                <li class="nav-item">
                    <a id="home-link" class="nav-link" aria-current="page" href="./index.php">Home</a>
                    <div class="menu-divider"></div>
                </li>
                <li class="nav-item ms-lg-3 ms-md-0 ms-0">
                    <a id="gallery-link" class="nav-link" aria-current="page" href="./galary.php">Galary</a>
                    <div class="menu-divider"></div>
                </li>
                <li class="nav-item ms-lg-3 ms-md-0 ms-0">
                    <a id="blogs-link" class="nav-link" aria-current="page" href="./blogs.php">Blogs</a>
                    <div class="menu-divider"></div>
                </li>
                <li class="nav-item ms-lg-3 ms-md-0 ms-0">
                    <a id="about-link" class="nav-link" aria-current="page" href="./about.php">About Us</a>
                    <div class="menu-divider"></div>
                </li>
                <li class="nav-item ms-lg-3 ms-md-0 ms-0">
                    <a id="contact-link" class="nav-link" aria-current="page" href="./contact.php">Contact Us</a>
                    <div class="menu-divider"></div>
                </li>
            </ul>
            <form action="./search.php" method="GET" class="d-flex align-items-center ms-3 border border-1 border-gray p-1 rounded" role="search">
                <input name="search" class="form-control me-2 shadow-none border-0" type="search" placeholder="Search dogs..."
                    aria-label="Search">
                <button class="search-btn p-2" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </div>
</nav>