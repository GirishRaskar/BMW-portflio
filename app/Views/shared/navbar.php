<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Stylish Navbar</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
    }

    nav {
  background-color: #1e1e2f;
  padding: 0.5rem 2rem; /* reduced vertical padding */
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.nav-logo {
  font-size: 1.25rem; /* smaller logo */
}

    .nav-links {
  list-style: none;
  display: flex;
  gap: 1.5rem;
  align-items: center;  /* Add this */
  margin: 0;            /* reset any default margins */
  padding: 0;           /* reset any default padding */
}


    .nav-links li {
      position: relative;
    }

    .nav-links a {
      line-height: 1.2;

      color: #cbd5e1;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .nav-links a:hover {
      color: #00e0ff;
    }

    .nav-links a::after {
      content: '';
      display: block;
      height: 2px;
      background: #00e0ff;
      transition: width 0.3s;
      width: 0;
      margin-top: 4px;
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    .nav-cta {
      background: #00e0ff;
      color: #000;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .nav-cta:hover {
      background: #00bcd4;
    }

    @media (max-width: 768px) {
      nav {
        flex-direction: column;
        align-items: flex-start;
      }
      .nav-links {
        flex-direction: column;
        width: 100%;
        gap: 0.75rem;
        margin-top: 1rem;
      }

    }
  </style>
</head>
<body>

  <nav>
    <div class="nav-logo">
      <img src="public/logo.png" alt="MyApp Logo" style="height: 60px;">
    </div>

    <ul class="nav-links">
      <li><a href="<?=base_url('/')?>">Home</a></li>
      <li><a href="<?=base_url('features')?>">Features</a></li>
      <li><a href="<?=base_url("prices")?>">Pricing</a></li>
      <li><a href="#">About</a></li>
    </ul>
    <a href="#" class="nav-cta">Login</a>
  </nav>

</body>
</html> -->

<?php
  $uri = service('uri');  // CodeIgniter helper to get current URI
  $current = $uri->getSegment(1); // e.g., 'features', 'prices', etc.
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Stylish Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { font-family: 'Segoe UI', sans-serif; }
    
    nav {
      background-color: #1e1e2f;
      padding: 0.5rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }

    .nav-logo { font-size: 1.25rem; }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 1.5rem;
      align-items: center;
      margin: 0;
      padding: 0;
    }

    .nav-links li {
      position: relative;
    }

    .nav-links a {
      color: #cbd5e1;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .nav-links a:hover {
      color: #00e0ff;
    }

    .nav-links a::after {
      content: '';
      display: block;
      height: 2px;
      background: #00e0ff;
      transition: width 0.3s;
      width: 0;
      margin-top: 4px;
    }

    .nav-links a:hover::after,
    .nav-links .active::after {
      width: 100%;
    }

    .nav-links .active {
      color: #00e0ff !important;
    }

    .nav-cta {
      background: #00e0ff;
      color: #000;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
    }

    .nav-cta:hover {
      background: #00bcd4;
    }

    @media (max-width: 768px) {
      nav {
        flex-direction: column;
        align-items: flex-start;
      }

      .nav-links {
        flex-direction: column;
        width: 100%;
        gap: 0.75rem;
        margin-top: 1rem;
      }
    }
  </style>
  
</head>
<body>

  <nav>
    <div class="nav-logo">
      <img src="<?= base_url('public/logo.png') ?>" alt="MyApp Logo" style="height: 60px;">
    </div>

    <ul class="nav-links">
      <li><a class="<?= $current == '' ? 'active' : '' ?>" href="<?= base_url('/') ?>">Home</a></li>
      <li><a class="<?= $current == 'features' ? 'active' : '' ?>" href="<?= base_url('features') ?>">Features</a></li>
      <li><a class="<?= $current == 'prices' ? 'active' : '' ?>" href="<?= base_url('prices') ?>">Pricing</a></li>
      <li><a class="<?= $current == 'about' ? 'active' : '' ?>" href="<?= base_url('about') ?>">About</a></li>
    </ul>

    <a href="#" class="nav-cta">Book Now</a>
  </nav>

</body>
</html>

