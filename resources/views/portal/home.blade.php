<!DOCTYPE html>
<html lang="en">

<head>

  @include('portal.layouts.header')
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="src/css/portal.css">

  <title>540-Alpha</title>
</head>

<body>

  <!-- Navbar -->
  @include('portal.layouts.navbar')

  <!-- Hero Section -->
  <section class="hero full-height">
    <div class="image-wrapper">
      <img class="filter-70" src="assets/img/pexels-photo-9697105.jpg" alt="" />
    </div>
    <div class="absolute-end">
      <div class="container-fluid-custom">
        <div class="row">
          <div class="col-md-5 offset-md-7">
            <h1 class="header-text">
              It is our mission to facilitate businesses in capturing their
              positions in this coming future
            </h1>
            <button type="button pointer" class="standard-button mt-5">
              Learn More
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section class="about-section">
    <div class="container-fluid-custom">
      <div class="row">
        <div class="col-md-6">
          <h2 class="text-xl">
            Fiveforty Alpha <br />
            sees a future where <br />
            leading businesses are green
          </h2>
        </div>
        <div class="col-12 mt-6">
          <div class="row">
            <div class="col-md-6">
              <h3 class="text-lg">540.</h3>
              <p class="mt-5">
                540 TH<sub>z</sub> (color frequency) = green.
              </p>
              <p class="mt-5 pr-13 subdescription">
                Fiveforty Alpha believes in the outperformance of sustainable
                and climate-friendly sectors. We focus our assistance on
                incumbent and new businesses joining the sector.
              </p>
            </div>
            <div class="col-md-6">
              <h3 class="text-lg">Alpha</h3>
              <p class="mt-5">α = excess returns.</p>
              <p class="mt-5 pr-13 subdescription">
                Fiveforty Alpha builds the right strategy in achieving more
                than market returns. We combine our business savvy and network
                to help companies in growth and transition.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 mt-6">
          <div class="row">
            <div class="col-md-4">
              <div class="w-100">
                <img width="100%" src="assets/img/Homepage-Photo-car.png" alt="" />
              </div>
            </div>
            <div class="col-md-8">
              <div class="px-7 offers">
                <h2 class="text-xl">
                  540 Alpha offers our combined <br />
                  business and technical expertise <br />
                  plus our insight and network <br />
                  in the green sector
                </h2>
                <button type="button pointer" class="standard-button mt-5">
                  Learn More
                </button>
                <div class="mt-10">
                  <img class="added-image" src="assets/img/Homepage-Photo-car-sun.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ambition Section -->
  <section class="ambition-section">
    <div class="container-fluid-custom">
      <div class="row">
        <div class="col-12">
          <h2 class="text-xl text-color-primary">
            Together, we aim to deliver sustainable returns and create
            positive climate and societal impact.
          </h2>
          <p class="text-m mt-5 text-center px-7 text-color-primary description">
            As a responsible to create an effective, credible, and efficient
            carbon ecosystem, 540 Alpha invests in and partners with companies
            that share our ambition to achieve a net zero future.
          </p>
          <div class="d-flex justify-content-center">
            <button type="button pointer" class="secondary-button mt-5">
              Learn More
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('portal.layouts.footer')

</body>

</html>