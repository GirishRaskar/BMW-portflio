<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BMW Models & Pricing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Smaller cards, uniform image sizes */
    .car-card {
      max-width: 250px;
      margin: 0.5rem;
      flex: 1 0 250px;
      border-radius: 0.5rem;
      transition: transform 0.3s ease;
    }
    .car-card:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    }
    .car-img {
      height: 140px;
      object-fit: cover;
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }
    .cards-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1rem;
    }
  </style>
  <style>
  /* Custom tab styling */
  #pricingTabs {
    display: flex;
    justify-content: center;
    gap: 2rem;
    padding: 0;
    list-style: none;
    font-weight: 600;
  }
  #pricingTabs button {
    background: transparent;
    border: none;
    padding: 0.5rem 1.2rem;
    font-size: 1.1rem;
    color: #6c757d; /* Bootstrap gray-600 */
    cursor: pointer;
    position: relative;
    transition: color 0.3s ease;
  }
  #pricingTabs button:hover {
    color:rgb(2, 14, 32); /* Bootstrap primary */
  }
  #pricingTabs button.active {
    color:rgb(7, 21, 41);
  }
  #pricingTabs button.active::after {
    content: '';
    position: absolute;
    bottom: -6px;
    left: 50%;
    transform: translateX(-50%);
    width: 40%;
    height: 3px;
    background-color:rgb(4, 16, 33);
    border-radius: 2px;
  }
  /* Responsive wrap */
  @media (max-width: 576px) {
    #pricingTabs {
      gap: 1rem;
      flex-wrap: wrap;
    }
  }
</style>
</head>
<body>

  <?php include(APPPATH . 'Views/shared/navbar.php'); ?>

  <section class="py-5 bg-light" id="pricing">
  <div class="container">
    <h2 class="text-center fw-bold text-primary mb-5">BMW Latest Models & Prices</h2>

    <ul id="pricingTabs" role="tablist" class="mb-4">
  <li role="presentation">
    <button class="active" id="sedans-tab" data-bs-toggle="tab" data-bs-target="#sedans" type="button" role="tab" aria-controls="sedans" aria-selected="true">
      Sedans &amp; Coupes
    </button>
  </li>
  <li role="presentation">
    <button id="suvs-tab" data-bs-toggle="tab" data-bs-target="#suvs" type="button" role="tab" aria-controls="suvs" aria-selected="false">
      SUVs
    </button>
  </li>
  <li role="presentation">
    <button id="evs-tab" data-bs-toggle="tab" data-bs-target="#evs" type="button" role="tab" aria-controls="evs" aria-selected="false">
      Electric Vehicles
    </button>
  </li>
</ul>

    <!-- Tab Content -->
    <div class="tab-content">

      <!-- Sedans & Coupes -->
      <div class="tab-pane fade show active" id="sedans" role="tabpanel" aria-labelledby="sedans-tab">
        <div class="cards-container d-flex flex-wrap justify-content-center gap-3">

          <div class="card car-card">
            <img src="https://www.bmw.in/content/dam/bmw/marketIN/bmw_in/Images/all-models/BMW%20Series/bmw-2-series/Main%20Banner%20Desktop.jpg" class="card-img-top car-img" alt="BMW 2 Series Gran Coupe" />
            <div class="card-body">
              <h5 class="card-title">BMW 2 Series Gran Coupe</h5>
              <p class="card-text">₹43.90 – 46.90 Lakh</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqjxNrU_nhXg4-iBXHhqGWGEhKEDweBBxVqA&s" alt="BMW 3 Series Gran Limousine" />
            <div class="card-body">
              <h5 class="card-title">BMW 3 Series Gran Limousine</h5>
              <p class="card-text">₹60.60 – 65.00 Lakh</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://img.autocarindia.com/ExtraImages/20240725095103_BMW_5_Series_LWB_side_action.jpg" alt="BMW 5 Series LWB" />
            <div class="card-body">
              <h5 class="card-title">BMW 5 Series LWB</h5>
              <p class="card-text">₹72.90 Lakh</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWhGwgpYTCU5uf80_UOMj-tZw_Ci50GChWWQ&s" class="card-img-top car-img" alt="BMW 6 Series GT" />
            <div class="card-body">
              <h5 class="card-title">BMW 6 Series GT</h5>
              <p class="card-text">₹68.90 – 78.90 Lakh</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://img.autocarindia.com/ExtraImages/20230106025629_P90486165_highRes_the_new_bmw_760i_xdr.jpg" alt="BMW 7 Series LWB" />
            <div class="card-body">
              <h5 class="card-title">BMW 7 Series LWB</h5>
              <p class="card-text">₹1.81 – 1.84 Crore</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://mediapool.bmwgroup.com/cache/P9/202209/P90479559/P90479559-the-new-bmw-m340i-xdrive-09-2022-600px.jpg" class="card-img-top car-img" alt="BMW M340i xDrive" />
            <div class="card-body">
              <h5 class="card-title">BMW M340i xDrive</h5>
              <p class="card-text">₹74.90 Lakh</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/176129/m4-competition-exterior-right-front-three-quarter-3.jpeg?isig=0&q=80" alt="BMW M2 Coupe" />
            <div class="card-body">
              <h5 class="card-title">BMW M2 Coupe</h5>
              <p class="card-text">₹99.90 Lakh</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://res.cloudinary.com/exclusive-resorts/image/upload/f_auto/q_auto/v1641962649/erassets/Club%20Journal/THE-NEW-BMW-M4-COUPE/BMW%20M4%20001_ut2z6l?_a=BBDAADAD0" class="card-img-top car-img" alt="BMW M4 Competition" />
            <div class="card-body">
              <h5 class="card-title">BMW M4 Competition</h5>
              <p class="card-text">₹1.53 Crore</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="data:image/jpeg;base64,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" alt="BMW M4 CS" />
            <div class="card-body">
              <h5 class="card-title">BMW M4 CS</h5>
              <p class="card-text">₹1.89 Crore</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://carindia.in/wp-content/uploads/2021/07/P90391325_highRes_the-new-bmw-m5-compe-798x532.jpg" class="card-img-top car-img" alt="BMW M5" />
            <div class="card-body">
              <h5 class="card-title">BMW M5</h5>
              <p class="card-text">₹1.99 Crore</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo0RtC1QQVpmmc8J3pgVPvOlkWwLMfssDiFA&s" class="card-img-top car-img" alt="BMW M8 Competition Coupe" />
            <div class="card-body">
              <h5 class="card-title">BMW M8 Competition Coupe</h5>
              <p class="card-text">₹2.44 Crore</p>
            </div>
          </div>

        </div>
      </div>

      <!-- SUVs -->
      <div class="tab-pane fade" id="suvs" role="tabpanel" aria-labelledby="suvs-tab">
        <div class="cards-container d-flex flex-wrap justify-content-center gap-3">

          <div class="card car-card">
            <img src="https://www.bmw.in/content/dam/bmw/common/all-models/x-series/x1/2022/highlights/bmw-x-series-x1-sp-desktop.jpg" class="card-img-top car-img" alt="BMW X1" />
            <div class="card-body">
              <h5 class="card-title">BMW X1</h5>
              <p class="card-text">₹49.50 – 52.50 Lakh</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://stimg.cardekho.com/images/carexteriorimages/930x620/BMW/X3/11819/1737265651680/front-left-side-47.jpg" class="card-img-top car-img" alt="BMW X3" />
            <div class="card-body">
              <h5 class="card-title">BMW X3</h5>
              <p class="card-text">₹75.80 – 77.80 Lakh</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://images.moneycontrol.com/static-mcnews/2024/03/Holding-image-1.jpg?impolicy=website&width=1600&height=900" class="card-img-top car-img" alt="BMW X5" />
            <div class="card-body">
              <h5 class="card-title">BMW X5</h5>
              <p class="card-text">₹97.00 Lakh – 1.11 Crore</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/2018_BMW_X6_xDrive30d_M_Sport_Automatic_3.0_Front.jpg/960px-2018_BMW_X6_xDrive30d_M_Sport_Automatic_3.0_Front.jpg" class="card-img-top car-img" alt="BMW X6" />
            <div class="card-body">
              <h5 class="card-title">BMW X6</h5>
              <p class="card-text">₹1.27 Crore</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://stimg.cardekho.com/images/carexteriorimages/930x620/BMW/X7/10571/1689673096346/front-left-side-47.jpg" class="card-img-top car-img" alt="BMW X7" />
            <div class="card-body">
              <h5 class="card-title">BMW X7</h5>
              <p class="card-text">₹1.42 – 1.55 Crore</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://sp-ao.shortpixel.ai/client/to_webp,q_glossy,ret_img,w_600,h_327/https://www.dsf.my/wp-content/uploads/2021/04/IMG_7327-600x327.jpg" class="card-img-top car-img" alt="BMW X8 Concept" />
            <div class="card-body">
              <h5 class="card-title">BMW X8 Concept</h5>
              <p class="card-text">₹Expected Soon</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://imgd.aeplcdn.com/664x374/n/cw/ec/163337/x4-exterior-left-front-three-quarter.jpeg?isig=0&q=80" class="card-img-top car-img" alt="BMW X4" />
            <div class="card-body">
              <h5 class="card-title">BMW X4</h5>
              <p class="card-text">₹70.50 – 72.50 Lakh</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/BMW_F39_25e_IMG_4070.jpg/1200px-BMW_F39_25e_IMG_4070.jpg" class="card-img-top car-img" alt="BMW X2" />
            <div class="card-body">
              <h5 class="card-title">BMW X2</h5>
              <p class="card-text">₹55.00 – 59.00 Lakh</p>
            </div>
          </div>

        </div>
      </div>

      <!-- EVs -->
      <div class="tab-pane fade" id="evs" role="tabpanel" aria-labelledby="evs-tab">
        <div class="cards-container d-flex flex-wrap justify-content-center gap-3">

          <div class="card car-card">
            <img src="https://img.autocarpro.in/autocarpro/72632d5a-8641-41be-b5b3-50afb0c42c46_white-bmw-iu.jpg?w=750&h=490&q=75&c=1" class="card-img-top car-img" alt="BMW iX1" />
            <div class="card-body">
              <h5 class="card-title">BMW iX1</h5>
              <p class="card-text">₹49.00 Lakh</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQB4MyJ9IDFfimBH1HgWvba9JYq4LE1DBycKw&s" class="card-img-top car-img" alt="BMW i4" />
            <div class="card-body">
              <h5 class="card-title">BMW i4</h5>
              <p class="card-text">₹72.50 – 77.50 Lakh</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://stimg.cardekho.com/images/carexteriorimages/930x620/BMW/i7/8972/1650533655232/front-view-118.jpg" class="card-img-top car-img" alt="BMW i7" />
            <div class="card-body">
              <h5 class="card-title">BMW i7</h5>
              <p class="card-text">₹2.03 – 2.50 Crore</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYdg4XldZ-ryAes7UBVstAvunc3DfsJRGDYw&s" class="card-img-top car-img" alt="BMW iX xDrive50" />
            <div class="card-body">
              <h5 class="card-title">BMW iX xDrive50</h5>
              <p class="card-text">₹1.39 Crore</p>
            </div>
          </div>

          <div class="card car-card">
            <img src="https://images.netdirector.co.uk/gforces-auto/image/upload/w_558,h_419,q_auto,c_fill,f_auto,fl_lossy/auto-titan/898e89af90b70f4b3d684aa3264a7099/bmw_x_series_ix1_mc_design_exterior_01.jpg" class="card-img-top car-img" alt="BMW iX1 Concept" />
            <div class="card-body">
              <h5 class="card-title">BMW iX1 Concept</h5>
              <p class="card-text">₹Expected Soon</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<?php include(APPPATH . 'Views/shared/footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
