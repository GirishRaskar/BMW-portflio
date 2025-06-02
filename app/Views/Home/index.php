<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<style>
		.carousel-item img {
    height: 500px;
    object-fit: cover;
    width: 100%;
  }
.carousel-item img {
  display: block;
  max-width: 100%;  /* So image won't overflow container width */
  height: auto;     /* Keep aspect ratio */
}

.carousel-item img {
  max-height: 500px;  /* Set desired max height */
  width: auto;        /* Keep aspect ratio */
  display: block;
  margin-left: auto;
  margin-right: auto;
}



	</style>

  <style>
   .car-tile {
  transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
  border-radius: 15px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  height: 100%;
  background-color: #fff;
  cursor: pointer;
}

.car-tile:hover {
  transform: translateY(-8px) scale(1.02);
  box-shadow: 0 10px 24px rgba(0, 0, 0, 0.2);
  background-color: #f1faff;
}

.tile-header,
.tile-body {
  transition: color 0.3s ease;
}

.car-tile:hover .tile-header {
  color: #0d6efd; /* Bootstrap primary color */
}

.car-tile:hover .tile-body {
  color: #444;
}
.car-icon {
  font-size: 2rem;
  color: #007bff;
  transition: transform 0.3s ease;
}

.car-tile:hover .car-icon {
  transform: scale(1.2) rotate(2deg);
}
.tile-header {
  font-size: 1.2rem;
  font-weight: 700; /* Bold */
  color: #212529;
}


  </style>

  <style>
  .footer-link {
    color: #ccc;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .footer-link:hover {
    color: #ffffff;
    text-decoration: underline;
  }

  .footer-icon {
    color: #ccc;
    font-size: 1.25rem;
    margin-right: 0.75rem;
    transition: color 0.3s ease, transform 0.3s ease;
  }

  .footer-icon:hover {
    color: #0d6efd; /* Bootstrap primary blue */
    transform: scale(1.2);
  }
</style>

</head>
<body class="bg-light">
	<?php include(APPPATH . 'Views/shared/navbar.php'); ?>

	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/sliderCars/C9.jpg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="public/sliderCars/C8.jpg" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="public/sliderCars/C5.jpg" class="d-block w-100" alt="Slide 3">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="bmw-slogan text-center py-5">
  <h1 class="display-4 fw-bold text-primary">Sheer Driving Pleasure</h1>
  <p class="lead text-secondary">Where Performance Meets Precision</p>
</div>



<div class="container py-5">
  <h2 class="text-center section-title">Our Cars</h2>
  <div class="row g-4">

    <!-- Sedan -->
    <div class="col-md-4">
      <div class="card car-tile p-3">
        <div class="car-icon mb-2 text-center"><i class="fas fa-car-side"></i></div>
        <div class="tile-header text-center">Sedans</div>
        <div class="tile-body text-center">
          3 Series, 5 Series, 7 Series, i5, i7 – Luxury and sport in elegant form.
        </div>
      </div>
    </div>

    <!-- Coupe -->
    <div class="col-md-4">
      <div class="card car-tile p-3">
        <div class="car-icon mb-2 text-center"><i class="fas fa-car"></i></div>
        <div class="tile-header text-center">Coupes</div>
        <div class="tile-body text-center">
          2, 4, 8 Series – Sleek 2-door designs with performance edge.
        </div>
      </div>
    </div>

    <!-- SUV -->
    <div class="col-md-4">
      <div class="card car-tile p-3">
        <div class="car-icon mb-2 text-center"><i class="fas fa-suv"></i></div>
        <div class="tile-header text-center">SUVs / SAVs</div>
        <div class="tile-body text-center">
          X1 to X7, XM – Comfort and power in spacious form.
        </div>
      </div>
    </div>

    <!-- Convertible -->
    <div class="col-md-4">
      <div class="card car-tile p-3">
        <div class="car-icon mb-2 text-center"><i class="fas fa-wind"></i></div>
        <div class="tile-header text-center">Convertibles</div>
        <div class="tile-body text-center">
          Z4, 4 Series, 8 Series – Open-air freedom meets BMW performance.
        </div>
      </div>
    </div>

    <!-- M Models -->
    <div class="col-md-4">
      <div class="card car-tile p-3">
        <div class="car-icon mb-2 text-center"><i class="fas fa-bolt"></i></div>
        <div class="tile-header text-center">M Models</div>
        <div class="tile-body text-center">
          M2 to M8, X3M to X6M – Track-ready power and precision.
        </div>
      </div>
    </div>

    <!-- i Series -->
    <div class="col-md-4">
      <div class="card car-tile p-3">
        <div class="car-icon mb-2 text-center"><i class="fas fa-charging-station"></i></div>
        <div class="tile-header text-center">i Series (EV)</div>
        <div class="tile-body text-center">
          i4, i5, i7, iX – All-electric luxury, range, and technology.
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">


<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold text-primary mb-4">Latest BMW Launches</h2>
    <div class="row g-5">
      <!-- Car 1 -->
      <div class="col-md-6">
        <a href="#" target="_blank">
          <img src="https://stimg.cardekho.com/images/carexteriorimages/930x620/BMW/iX1/9127/1695967266489/front-left-side-47.jpg" alt="BMW iX1" class="img-fluid rounded mb-3" />
        </a>
        <h3 class="fw-bold">BMW iX1</h3>
        <p>Compact electric SUV combining practicality and innovation.</p>
        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
      </div>

      <!-- Car 2 -->
      <div class="col-md-6">
        <a href="#" target="_blank">
          <img src="https://images.hindustantimes.com/auto/img/2024/09/17/600x338/BMW_XM_Label_1726563271129_1726563276787.png" alt="BMW XM" class="img-fluid rounded mb-3" />
        </a>
        <h3 class="fw-bold">BMW XM</h3>
        <p>Plug-in hybrid SUV with M performance and bold presence.</p>
        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
      </div>

      <!-- Car 3 -->
      <div class="col-md-6">
        <a href="#" target="_blank">
          <img src="https://static0.carbuzzimages.com/wordpress/wp-content/uploads/2024/03/1070707.jpg" alt="BMW M4 CSL" class="img-fluid rounded mb-3" />
        </a>
        <h3 class="fw-bold">BMW M4 CSL</h3>
        <p>Track-ready performance coupe with extreme lightweight design.</p>
        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
      </div>

      <!-- Car 4 -->
      <div class="col-md-6">
        <a href="#" target="_blank">
          <img src="https://hips.hearstapps.com/hmg-prod/images/2024-bmw-i7-m70-136-650b22851401e.jpg?crop=0.628xw:0.529xh;0.319xw,0.394xh&resize=2048:*" alt="BMW i7" class="img-fluid rounded mb-3" />
        </a>
        <h3 class="fw-bold">BMW i7</h3>
        <p>All-electric flagship sedan redefining luxury and innovation.</p>
        <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
      </div>

      <!-- Car 5 (Centered) -->
      <div class="row justify-content-center">
        <div class="col-md-6 text-center">
          <a href="#" target="_blank">
            <img src="https://www.motorbiscuit.com/wp-content/uploads/2023/05/2024-BMW-5-Series-1.jpg?w=1200" alt="BMW 5 Series 2024" class="img-fluid rounded mb-3" />
          </a>
          <h3 class="fw-bold">BMW 5 Series 2024</h3>
          <p>Smarter, sharper, and now with mild-hybrid powertrain.</p>
          <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="mx-auto" style="max-width: 900px;">
  <div class="ratio ratio-16x9">
    <iframe width="914" height="514" src="https://www.youtube.com/embed/-8UPg6hyDBg" title="The Soul of BMW." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
</div>

<br>


<footer class="bg-dark text-light pt-5 pb-4">
  <div class="container text-md-left">
    <div class="row text-md-left">

      <!-- About -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
        <h5 class="text-uppercase fw-bold text-primary">BMW</h5>
        <p>Driving innovation, luxury, and performance forward. Discover the world of BMW.</p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold">Quick Links</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="footer-link">Home</a></li>
          <li><a href="#" class="footer-link">Models</a></li>
          <li><a href="#" class="footer-link">Book Test Drive</a></li>
          <li><a href="#" class="footer-link">Contact</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        <h6 class="text-uppercase fw-bold">Support</h6>
        <ul class="list-unstyled">
          <li><a href="#" class="footer-link">FAQs</a></li>
          <li><a href="#" class="footer-link">Dealer Locator</a></li>
          <li><a href="#" class="footer-link">Privacy Policy</a></li>
          <li><a href="#" class="footer-link">Terms of Service</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <h6 class="text-uppercase fw-bold">Contact</h6>
        <p><i class="bi bi-house-door-fill me-2"></i> Munich, Germany</p>
        <p><i class="bi bi-envelope-fill me-2"></i> info@bmw.com</p>
        <p><i class="bi bi-telephone-fill me-2"></i> +49 89 3820</p>
      </div>

    </div>

    <hr class="mb-4 text-secondary">

    <!-- Footer Bottom -->
    <div class="row align-items-center">
      <div class="col-md-6 text-center text-md-start">
        <p class="mb-0">&copy; 2025 BMW Motors. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-center text-md-end">
        <a href="#" class="footer-icon"><i class="bi bi-facebook"></i></a>
        <a href="#" class="footer-icon"><i class="bi bi-instagram"></i></a>
        <a href="#" class="footer-icon"><i class="bi bi-youtube"></i></a>
        <a href="#" class="footer-icon"><i class="bi bi-twitter-x"></i></a>
      </div>
    </div>
  </div>
</footer>




</body>
</html>