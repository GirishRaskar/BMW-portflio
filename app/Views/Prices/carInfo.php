<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Car Gallery with Carousel</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background: #f9f9f9;
    color: #333;
  }
  h1 {
    text-align: center;
    margin-bottom: 30px;
  }
  .car-gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 20px;
  }
  .car-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(192, 189, 189, 0.1);
    overflow: hidden;
    display: flex;
    flex-direction: column;
  }
  
  /* Carousel images wrapper */
  .carousel-images {
    display: flex;
    transition: transform 0.4s ease;
    height: 100%;
  }
  
  /* Carousel navigation buttons */
  .carousel-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.5);
    border: none;
    color: white;
    font-size: 32px;    /* bigger font */
    padding: 8px 14px;  /* bigger clickable area */
    cursor: pointer;
    border-radius: 3px;
    user-select: none;
    transition: background 0.3s;
  }
  .carousel-button:hover {
    background: rgba(0,0,0,0.8);
  }
  
  .carousel-button:focus {
    outline: none;
    background: rgba(0,0,0,0.8);
  }

  .car-info {
    padding: 15px 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
  }
  .car-info h2 {
    margin: 0 0 10px;
    font-size: 1.2rem;
    color: #222;
  }
  .car-info p {
    margin: 0 0 5px;
    font-size: 0.9rem;
    color: #555;
    line-height: 1.3;
  }
  .car-info .price {
    font-weight: bold;
    color: #007BFF;
    margin-top: auto;
    font-size: 1rem;
  }

 .carousel {
  width: auto;
  max-width: 100%;
  height: auto;
  margin: 0 auto;
  background: #000;
  position: relative;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Images adjust to carousel size */
.carousel-images img {
  max-width: 100%;
  height: auto;
  object-fit: contain;
  background: #000;
  display: block;
}

/* Navigation buttons */
.carousel-button {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(255, 255, 255, 0.6);
  border: none;
  padding: 8px;
  cursor: pointer;
  z-index: 10;
}

.carousel-button.prev {
  left: 5px;
}

.carousel-button.next {
  right: 5px;
}

/* Desktop settings */
@media (min-width: 768px) {
  .carousel {
    width: 600px;
    height: 350px;
  }

  .carousel-images img {
    width: 600px;
    height: 350px;
  }
}


</style>
</head>
<body>
  <?php include(APPPATH . 'Views/shared/navbar.php'); ?>

<!-- <h1>Car Gallery with Carousel</h1> -->
<h1>BMW 2 Series Gran Coupe</h1>

<div class="car-gallery">


  <article class="car-card">
    <div class="carousel">
      <div class="carousel-images">
        <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/48034/2-series-gran-coupe-exterior-right-front-three-quarter-2.jpeg?q=80" alt="Car 1 Image 1" />
        <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/48034/2-series-gran-coupe-exterior-right-side-view.jpeg?q=80" alt="Car 1 Image 2" />
        <img src="https://www.bmw.in/content/dam/bmw/marketIN/bmw_in/Images/all-models/BMW%20Series/bmw-2-series/offers-services/BMW%20Accessories%20Desktop.jpg/jcr:content/renditions/cq5dam.resized.img.1680.large.time1602583871538.jpg" alt="Car 1 Image 3" />
        <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/48034/2-series-gran-coupe-interior-dashboard.jpeg?q=80" alt="Car 1 Image 4" />
        <img src="https://imgd.aeplcdn.com/370x208/n/cw/ec/133461/bmw-2-series-gran-coupe-infotainment-system25.jpeg?isig=0&wm=1&q=80" alt="Car 1 Image 5" />
        <img src="https://imgd.aeplcdn.com/370x208/n/cw/ec/99499/infotainment-system10.jpeg?isig=0&wm=1&q=80" alt="Car 1 Image 6" />
        <img src="https://www.bmw.in/content/dam/bmw/common/all-models/2-series/gran-coupe/2019/Inform/bmw-2-series-gran-coupe-multicontent-hero-connectivity-inform-ag-desktop.jpg/jcr:content/renditions/cq5dam.resized.img.1680.large.time1627455108625.jpg" alt="Car 1 Image 7" />
        <img src="https://imgd.aeplcdn.com/370x208/n/cw/ec/48034/2-series-gran-coupe-interior-steering-wheel.jpeg?q=80" alt="Car 1 Image 8" />
      </div>
      <button class="carousel-button prev">&#10094;</button>
      <button class="carousel-button next">&#10095;</button>
    </div>
    <div style="max-width: 720px; margin: 20px auto; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #222; line-height: 1.5; border: 1px solid #ddd; border-radius: 8px; padding: 20px; background: #fff; box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);">
  
  <section style="margin-bottom: 25px;">
    <h2 style="border-bottom: 2px solid #007BFF; padding-bottom: 6px; margin-bottom: 15px; color: #007BFF;">Basic Info</h2>
    <div style="display: grid; grid-template-columns: 140px 1fr; row-gap: 10px; column-gap: 20px;">
      <div style="font-weight: 600;">Make:</div>
      <div>BMW</div>

      <div style="font-weight: 600;">Model:</div>
      <div>Gran Coupe</div>

      <div style="font-weight: 600;">Mileage:</div>
      <div>15 kmpl</div>

      <div style="font-weight: 600;">Price:</div>
      <div>₹43 lakh - ₹47 lakh</div>
    </div>
  </section>

  <section style="margin-bottom: 25px;">
    <h2 style="border-bottom: 2px solid #007BFF; padding-bottom: 6px; margin-bottom: 15px; color: #007BFF;">Overview</h2>
    <p>The 2023 BMW 2 Series Gran Coupe is a sporty and luxurious sedan with a coupe-style design, offering dynamic performance and advanced technology.</p>
  </section>

  
  <section style="margin-bottom: 25px;">
    <h2 style="border-bottom: 2px solid #007BFF; padding-bottom: 6px; margin-bottom: 15px; color: #007BFF;">Performance & Engine</h2>
    <ul style="padding-left: 20px; margin: 0; list-style-type: disc;">
      <li>2.0L turbocharged 4-cylinder petrol engine</li>
      <li>Power output: 190-220 HP (variant-dependent)</li>
      <li>7-speed dual-clutch or 8-speed automatic transmission</li>
      <li>Front-wheel drive or optional all-wheel drive (xDrive)</li>
      <li>Fuel efficiency: Approx. 15 kmpl</li>
    </ul>
  </section>


  <section style="margin-bottom: 25px;">
    <h2 style="border-bottom: 2px solid #007BFF; padding-bottom: 6px; margin-bottom: 15px; color: #007BFF;">Dimensions & Design</h2>
    <ul style="padding-left: 20px; margin: 0; list-style-type: disc;">
      <li>Length: ~4,526 mm</li>
      <li>Width: ~1,800 mm</li>
      <li>Height: ~1,420 mm</li>
      <li>Wheelbase: ~2,670 mm</li>
      <li>Sporty coupe-like roofline with four doors</li>
    </ul>
  </section>

  <section style="margin-bottom: 25px;">
    <h2 style="border-bottom: 2px solid #007BFF; padding-bottom: 6px; margin-bottom: 15px; color: #007BFF;">Features</h2>
    <ul style="padding-left: 20px; margin: 0; list-style-type: disc;">
      <li>LED Headlamps with DRLs</li>
      <li>Premium leather upholstery</li>
      <li>BMW iDrive infotainment with 8.8–10.25 inch touchscreen</li>
      <li>Apple CarPlay & Android Auto</li>
      <li>Advanced safety features including multiple airbags and stability control</li>
    </ul>
  </section>

  <section>
    <h2 style="border-bottom: 2px solid #007BFF; padding-bottom: 6px; margin-bottom: 15px; color: #007BFF;">Price Range</h2>
    <p>₹43 lakh to ₹47 lakh (ex-showroom price, varies by variant and location)</p>
  </section>
</div>



  </article>

  
  
</div>

<?php include(APPPATH . 'Views/shared/footer.php'); ?>
<script>
  // For each carousel, handle next/prev buttons
  document.querySelectorAll('.carousel').forEach(carousel => {
    const imagesContainer = carousel.querySelector('.carousel-images');
    const images = carousel.querySelectorAll('img');
    const prevBtn = carousel.querySelector('.carousel-button.prev');
    const nextBtn = carousel.querySelector('.carousel-button.next');
    let currentIndex = 0;

    function updateCarousel() {
      const width = images[0].clientWidth;
      imagesContainer.style.transform = `translateX(${-currentIndex * width}px)`;
    }

    prevBtn.addEventListener('click', () => {
      currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
      updateCarousel();
    });

    nextBtn.addEventListener('click', () => {
      currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
      updateCarousel();
    });

    window.addEventListener('resize', updateCarousel);

    updateCarousel();
  });
</script>

</body>
</html>
