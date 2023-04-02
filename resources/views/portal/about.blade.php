<!DOCTYPE html>
<html lang="en">

<head>

  @include('portal.layouts.header')
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="src/css/portal.css">
  <link rel="stylesheet" href="src/css/horizontal_accordion.css">

  <title>540-Alpha</title>
</head>

<body>
  @include('portal.layouts.navbar')

  <!-- Hero Section -->
  <section class="hero full-height">
    <div class="image-wrapper">
      <img class="filter-70" src="assets/img/portal/pexels-photo-247599.jpg" alt="" />
    </div>
    <div class="absolute-start">
      <div class="container-fluid-custom">
        <div class="row">
          <div class="col-md-10">
            <h1 class="header-2xl text-white">
              Fiveforty Alpha sees a future where leading businesses are green
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Focus Section -->
  <section class="focus-section">
    <div class="container-fluid-custom">
      <div class="row">
        <div class="col-md-5">
          <h2 class="text-xl font-medium text-color-primary">
            Scope of Focus
          </h2>
        </div>
        <div class="col-md-6">
          <p class="text-m text-color-primary">
          </p>
        </div>
        <div class="col-md-12 mt-5 text-m">
          <div class="container-slides">
            <ul class="slides">
              <li class="slide active brand1">
                <a href="#" class="action"><span class="accordion-number">1.</span>
                  <span class="accordion-title">Sustainable Food and Materials</span></a>
                <div class="slide-content">
                  <h1>1.</h1>
                  <h2>Sustainable Food and Materials</h2>
                  <p>
                    How to efficiently use <br>
                    diminishing resources and <br>
                    come up with alternative or <br>
                    synthetic sources
                  </p>
                  <p></p>
                </div>
              </li>
              <li class="slide brand2">
                <a href="#" class="action"><span class="accordion-number">2.</span>
                  <span class="accordion-title">Clean Logistics and Transportation</span></a>
                <div class="slide-content">
                  <h1>2.</h1>
                  <h2>Clean Logistics and Transportation</h2>
                  <p>
                    How to cleanly and effectively transport goods and
                    services to consumers.
                  </p>
                </div>
              </li>
              <li class="slide brand3">
                <a href="#" class="action"><span class="accordion-number">3.</span>
                  <span class="accordion-title">Climate Intelligence and Enabling Technologies</span></a>
                <div class="slide-content">
                  <h1>3.</h1>
                  <h2>Climate Intelligence and Enabling Technologies</h2>
                  <p>
                    How to ensure solutions and <br>
                    impact are correctly <br>
                    quantified. How to ease the <br>
                    transitional processes
                  </p>
                </div>
              </li>
              <li class="slide brand4">
                <a href="#" class="action"><span class="accordion-number">4.</span>
                  <span class="accordion-title">Climate Restoration</span></a>
                <div class="slide-content">
                  <h1>4.</h1>
                  <h2>Climate Restoration</h2>
                  <p>
                    How to help achieving <br>
                    temperature limits by <br>
                    reducing emissions and <br>
                    sequestering carbon
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services-section">
    <div class="container-fluid-custom">
      <div class="row">
        <div class="col-12 mb-4">
          <p class="text-m">Our Services</p>
        </div>
        <div class="col-md-6">
          <h2 class="text-lg line-height-l font-medium pr-5">
            540 Alpha offers our combined business and technical expertise
            plus our insight and network in the green sector
          </h2>
        </div>
        <div class="col-md-6 strategy">
          <p class="font-medium heading-l">Strategy</p>
          <p class="text-m">
            We help you find your green vision, <br> starting from Business Thesis, <br>
            Management, Market, and Growth
          </p>
        </div>
        <div class="image-wrapper-small mt-5">
          <img class="" src="assets/img/portal/pexels-photo-6117551.jpg" alt="" />
        </div>
        <div class="col-md-6 implementation-title">
          <h2 class="text-xl">Implementation</h2>
        </div>
        <div class="col-md-6 implementation-description">
          <p class="text-m">
            We translate strategies into real actions in your organisations,
            answering these questions:
          </p>
        </div>
        <div class="col-md-12 mt-5">
          <div id="accordion">
            <div class="card">
              <button class="card-header d-flex justify-content-between align-items-center background-none border-none collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white icon-accordion feather feather-plus">
                  <line x1="12" y1="5" x2="12" y2="19"></line>
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                <h5 class="mb-0 heading-l font-medium text-white">
                  Operations
                </h5>
              </button>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <ol class="list-accordion">
                    <li class="text-m mb-4">
                      How can we design and generate green products?
                    </li>
                    <li class="text-m mb-4">
                      What is the right set up for production at scale?
                    </li>
                    <li class="text-m mb-4">
                      How can we achieve cost efficiency & effectiveness?
                    </li>
                    <li class="text-m mb-4">
                      How can we access the right market?
                    </li>
                    <li class="text-m mb-4">
                      How do we measure and evaluate green KPIs?
                    </li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="card">
              <button class="card-header d-flex justify-content-between align-items-center background-none border-none collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white icon-accordion feather feather-plus">
                  <line x1="12" y1="5" x2="12" y2="19"></line>
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                <h5 class="mb-0 heading-l font-medium text-white ">
                  Finance
                </h5>
              </button>
              <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  <ol class="list-accordion">
                    <li class="text-m mb-4">
                      How do we access financing and fund sources?
                    </li>
                    <li class="text-m mb-4">
                      What are the appropriate terms and structures?
                    </li>
                    <li class="text-m mb-4">
                      Who are the right financing partners?
                    </li>
                    <li class="text-m mb-4">
                      How to fit business plans to marketable valuations?
                    </li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="card">
              <button class="card-header d-flex justify-content-between align-items-center background-none border-none collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white icon-accordion feather feather-plus">
                  <line x1="12" y1="5" x2="12" y2="19"></line>
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                <h5 class="mb-0 heading-l font-medium text-white ">
                  Investment
                </h5>
              </button>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  <ol class="list-accordion">
                    <li class="text-m mb-4">
                      How to achieve synergy in the sector?
                    </li>
                    <li class="text-m mb-4">
                      Who to target for synergy and investments?
                    </li>
                    <li class="text-m mb-4">
                      What is the appropriate investment structure?
                    </li>
                    <li class="text-m mb-4">
                      What are the appropriate rate of returns?
                    </li>
                    <li class="text-m mb-4">
                      How do we achieve the return expectations?
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Apporoach Section -->
  <section class="approach-section">
    <div class="container-fluid-custom">
      <div class="row">
        <div class="col-12 mb-4">
          <p class="text-m text-color-primary">Our Approach</p>
        </div>
        <div class="col-12">
          <h2 class="text-lg line-height-l font-medium pr-5 text-color-primary">
            We focus on helping green businesses find a market-fitting and
            scalable strategy, as well as investing in businesses that has
            already shown promise in market fit and scalability
          </h2>
        </div>
        <div class="col-md-8 col-xs-12 mt-5 mb-5 pb-5">
          <p class="text-m text-color-primary font-medium line-height-l">
            "Green" businesses or businesses providing climate mitigation and
            adaptation solutions are some of the next multi-billion dollar
            growths. We believe that:
          </p>
        </div>
        <div class="col-md-6">
          <div class="content-wrapper position-relative">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus position-absolute bottom-corner text-color-primary">
              <line x1="12" y1="5" x2="12" y2="19"></line>
              <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg> -->
            <h3 class="heading-l approach-small-title line-height-l">
              The moment is right to enter or transition into Green
            </h3>
            <p class="text-m text-color-primary mt-5 line-height-l">
              After a long external push from regulations and policies, the
              market has begun intrinsically transitioning into more demand for
              sustainable technologies and products
            </p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="content-wrapper position-relative">
            <h3 class="heading-l approach-small-title responsive-margin-top line-height-l">
              Southeast Asia is lagging compared to North America, Europe, India, and China, but poised to catchup
            </h3>
            <p class="text-m text-color-primary mt-5 line-height-l">
              As one of the major population centres in the world, Southeast Asia needs the same market-centric solutions for more sustainable livelihood and resource-usage
            </p>
            <p class="text-m text-color-primary mt-5 line-height-l">
              The same solutions already successful in NA, Europe, India, and China would be applicable and translatable to the Southeast Asian market - with a local twist
            </p>
            <p class="text-m text-color-primary mt-5 line-height-l">
              These ideas, however, are still lacking strategy, business development, and financial support in the region
            </p>
          </div>
        </div>
        <div class="col-md-8 image-about-us">
          <img src="assets/img/portal/About-Us.png" alt="" />
        </div>
        <div class="col-xs-12 col-md-4 value-proposition-title d-flex align-items-end pb-4">
          <h2 class="text-lg line-height-l font-medium pr-5 text-color-primary">
            Our Value <br />
            Proposition
          </h2>
        </div>
        <div class="col-md-6 value-wrapper">
          <img src="assets/img/portal/Value-Proposition-1.png" alt="" />
          <p class="value-description text-m">
            Technical background to vet <br> and quantify profitable and <br> scalable
            trends in climate solutions
          </p>
        </div>
        <div class="col-md-6 value-wrapper">
          <img src="assets/img/portal/Value-Proposition-2.png" alt="" />
          <p class="value-description text-m">
            Access to incubation graduates, <br> emerging climate solutions
            founders, <br> and a network of like-minded investors
          </p>
        </div>
        <div class="col-md-6 value-wrapper">
          <img src="assets/img/portal/Value-Proposition-3.png" alt="" />
          <p class="value-description text-m">
            The right acumen for strategy <br> and timing for both profit and <br>
            impact-oriented clients
          </p>
        </div>
        <div class="col-md-6 value-wrapper">
          <img src="assets/img/portal/Value-Proposition-4.png" alt="" />
          <p class="value-description text-m">
            Best insights and experience in <br> ensuring regional growth <br> and
            market capture
          </p>
        </div>
      </div>
    </div>
  </section>

  @include('portal.layouts.footer')

  <script>
    $(document).ready(function() {

      $('.horizontal-accordion-choice').click(function() {

        $('.horizontal-accordion-choice').each(function() {
          $(this).removeClass('expand')
          $(this).removeClass('unset')
          $(this).addClass('small')

          // Uncollapse Text
          $(this).find('div.text-uncollapse').show()

          // Collapse Text
          $(this).find('div.text-collapse').hide()
        })

        $(this).removeClass('small')
        $(this).addClass('expand')

        // Uncollapse Text
        $(this).find('div.text-uncollapse').hide()

        // Collapse Text
        $(this).find('div.text-collapse').show()

      })

    })

    const changeIcon = () => {
      const iconAccordion = $('.icon-accordion');
      iconAccordion.replaceWith(feather.icons['feather feather-minus'].toSvg());
    }
  </script>
</body>

</html>