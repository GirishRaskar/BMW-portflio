<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us - BMW Showcase</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .about-banner {
      background: url('https://bmwpc.nyc3.cdn.digitaloceanspaces.com/images/locations/bmw-m5-restyling-location-top-banner.jpg') no-repeat center center;
      background-size: cover;
      height: 500px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 0 0 10px rgba(0,0,0,0.7);
    }
    

    .about-banner h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .icon-box {
      text-align: center;
      padding: 2rem 1rem;
      border-radius: 12px;
      transition: 0.3s;
      background: #f8f9fa;
    }

    .icon-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <?php include(APPPATH . 'Views/shared/navbar.php'); ?>

  <!-- Banner -->
  <div class="about-banner">
    <h1>About Us</h1>
  </div>

  <!-- About Content -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="https://mediapool.bmwgroup.com/cache/P9/201703/P90252447/P90252447-bmw-group-plant-chennai-india-celebrates-10-years-of-production-excellence-in-india-03-2017-2204px.jpg" class="img-fluid rounded" alt="BMW showroom">
        </div>
        <div class="col-md-6">
          <h2 class="fw-bold mb-3">Who We Are</h2>
          <p class="text-muted">
            At BMW Showcase, we are passionate about bringing you the latest models, premium quality, and cutting-edge automotive technology. Our mission is to deliver an exceptional browsing experience that reflects the luxury and performance BMW stands for.
          </p>
          <p class="text-muted">
            Whether you’re exploring sedans, SUVs, or electric vehicles, we provide updated pricing, model comparisons, and curated galleries to help you make informed choices.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Why Choose Us -->
  <section class="bg-light py-5">
    <div class="container text-center">
      <h3 class="fw-bold mb-4 text-primary">Why Choose Us</h3>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="icon-box">
            <h5 class="fw-bold">Real-Time Pricing</h5>
            <p class="text-muted">Always updated with the latest prices from the official BMW India listings.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            <h5 class="fw-bold">High-Quality Images</h5>
            <p class="text-muted">Experience the beauty of BMW design with crisp and stylish images.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="icon-box">
            <h5 class="fw-bold">Model Comparison</h5>
            <p class="text-muted">Compare trims, performance specs, and features at a glance.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


</body>
</html>
