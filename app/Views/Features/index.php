<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BMW Features</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .section-title {
      font-weight: bold;
      margin-bottom: 2rem;
      color: #0d6efd;
      text-align: center;
    }
    .feature-icon {
      font-size: 2.5rem;
      color: #0d6efd;
    }
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }
  </style>
</head>
<body>

    <?php include(APPPATH . 'Views/shared/navbar.php'); ?>

    <section class="banner-image d-flex align-items-center justify-content-center text-center text-white" style="
  background: url('https://www.aeternus.rs/wp-content/uploads/2024/09/BMW-Marketing-Cover-1024x576.webp') center center / cover no-repeat;
  height: 60vh;
  position: relative;">
  
  <div class="overlay" style="
    position: absolute;
    top: 0; left: 0; width: 100%; height: 100%;
    background-color: rgba(0, 0, 0, 0.5);">
  </div>

  <div class="container position-relative">
    <h1 class="display-4 fw-bold">Experience the Future of Luxury</h1>
    <p class="lead">Explore BMW’s latest innovations and stunning design</p>
    <!-- <a href="#pricing" class="btn btn-primary px-4 mt-3">View Models</a> -->
  </div>
</section>


  <!-- Header -->
  <header class="bg-dark text-white text-center py-4">
    <h1 class="fw-bold">BMW Features Overview</h1>
    <p class="mb-0">Technology | Performance | Safety | Luxury | Sustainability</p>
  </header>

  <main class="container py-5">

    <!-- Feature Section -->
    <section>
      <h2 class="section-title">Top BMW Features</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card feature-card p-4 text-center border-0 shadow-sm h-100">
            <div class="feature-icon mb-2">🖥️</div>
            <h5>iDrive Infotainment</h5>
            <p>Smart multimedia system with voice and gesture control for seamless interaction.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card feature-card p-4 text-center border-0 shadow-sm h-100">
            <div class="feature-icon mb-2">🏎️</div>
            <h5>M Performance</h5>
            <p>Enhanced turbocharged engines and sport suspension for thrilling drives.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card feature-card p-4 text-center border-0 shadow-sm h-100">
            <div class="feature-icon mb-2">🛡️</div>
            <h5>Driver Assistance</h5>
            <p>Adaptive cruise control, lane assist, and collision prevention systems.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Electric Features -->
    <section class="mt-5">
      <h2 class="section-title">Electric & Eco Features</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card feature-card p-4 text-center border-0 shadow-sm h-100">
            <div class="feature-icon mb-2">🔋</div>
            <h5>Electric Range</h5>
            <p>BMW i Series offers impressive range and rapid charging support.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card feature-card p-4 text-center border-0 shadow-sm h-100">
            <div class="feature-icon mb-2">♻️</div>
            <h5>Sustainable Interiors</h5>
            <p>Eco-friendly materials like vegan leather and recycled fabrics.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card feature-card p-4 text-center border-0 shadow-sm h-100">
            <div class="feature-icon mb-2">⚡</div>
            <h5>Regenerative Braking</h5>
            <p>Charges the battery while braking, improving efficiency and range.</p>
          </div>
        </div>
      </div>
    </section>


    <!-- Testimonials -->
    <section class="mt-5">
      <h2 class="section-title">Customer Reviews</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="bg-light p-4 rounded shadow-sm">
            <p>“BMW electric cars are a game changer. Smooth, quiet, powerful.”</p>
            <footer class="blockquote-footer">Priya S.</footer>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-light p-4 rounded shadow-sm">
            <p>“The iDrive system is so intuitive. I can't imagine a car without it now.”</p>
            <footer class="blockquote-footer">Rahul D.</footer>
          </div>
        </div>
        <div class="col-md-4">
          <div class="bg-light p-4 rounded shadow-sm">
            <p>“My M Series BMW is pure performance. Best decision ever.”</p>
            <footer class="blockquote-footer">Anika M.</footer>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include(APPPATH . 'Views/shared/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
