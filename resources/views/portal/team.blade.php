<!DOCTYPE html>
<html lang="en">

<head>

  @include('portal.layouts.header')
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="src/css/portal.css">

  <title>540-Alpha</title>
</head>

<body>
  @include('portal.layouts.colorNavbar')

  <!-- Team Section -->
  <section class="team-section">
    <div class="container-fluid-custom">
      <div class="row">
        <div class="col-md-5">
          <h2 class="text-xl font-medium text-color-primary">Our Team</h2>
        </div>
        <div class="col-md-6">
          <p class="text-m text-color-primary">
            Meet the expert behind 540 alpha.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Team List -->
  <section class="team-list">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-md-12 col-xl-6">
          <div class="team-1">
            <div class="row">
              <div class="col-md-6 p-0">
                <figure class="fig-image">
                  <img src="assets/img/portal/Eka.png" alt="" />
                </figure>
              </div>
              <div class="col-md-6 p-0">
                <div class="team-content p-5">
                  <h4 class="text-lg font-medium">Eka Namara Ginting</h4>
                  <p class="mt-3 text-xs line-height-l">
                    As a serial entrepreneur and angel investor, Eka is a seasoned high-impact value
                    creator ready to guide businesses on their critical journeys.
                  </p>
                  <p class="mt-4 text-xs line-height-l">
                    He has spent 25 years in technology ecosystems and has previously brough up
                    successful green businesses such as Rimba Raya Conservation, generating value
                    while saving the Indonesian rainforest.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xl-6">
          <div class="team-2">
            <div class="row">
              <div class="col-md-6 p-0">
                <figure class="fig-image">
                  <img src="assets/img/portal/Steven.png" alt="" />
                </figure>
              </div>
              <div class="col-md-6 p-0">
                <div class="team-content p-5">
                  <h4 class="text-lg font-medium">Steven Sujoto</h4>
                  <p class="mt-3 text-xs line-height-l">
                    Steven brings more than 12 years of professional experience in digital transformation, management consulting, and
                    sustainable materials. He is passionate in green technology and is currently managing a circular economy program in
                    Indonesia. Steven has successfully delivered country-wide green strategies as well as a digital transformation at one of
                    the world's largest plantations. He is an engineer by training, holding an MSc from Delft University of Technology.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xl-6 mt-4">
          <div class="team-3">
            <div class="row">
              <div class="col-md-6 p-0" id="teamContent-3">
                <div class="team-content p-5">
                  <h4 class="text-lg font-medium">Julianto Johanes</h4>
                  <p class="mt-3 text-xs line-height-l">
                    Julian is a impact-driven investment professional who believes that influuencing where capital flows is the most effective
                    way to save the world. An INSEAD MBA graduate, he spends most of his time investing or building capital strategies to
                    accelerate the United Nation's Sustainable Development Goals. Julian is familiar in driving critical changes, having
                    successfully led various rounds of financial and business restructuring for value creation.
                  </p>
                </div>
              </div>
              <div class="col-md-6 p-0" id="teamPhoto-3">
                <figure class="fig-image">
                  <img src="assets/img/portal/Julianto.png" alt="" />
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-xl-6 mt-4">
          <div class="team-4">
            <div class="row">
              <div class="col-md-6 p-0" id="teamContent-4">
                <div class="team-content p-5">
                  <h4 class="text-lg font-medium">Reinard Gunadjaja</h4>
                  <p class="mt-3 text-xs line-height-l">
                    Reinard is a real-asset management professional with deep expertise in financial structures, as well as an extensive
                    network among the biggest property conglomerates in Indonesia. He had represented national and multinational companies
                    on multi-million dollars deals and delivered various asset solutions to global financial institutions. Reinard is a
                    Master of Applied Finance at the Monash University.
                  </p>
                </div>
              </div>
              <div class="col-md-6 p-0" id="teamPhoto-4">
                <figure class="fig-image">
                  <img src="assets/img/portal/Reinard-Indratama.png" alt="" />
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Ambition Section -->
  <section class="ambition-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-xl text-color-primary text-center">
            Together, we aim to deliver sustainable returns and create
            positive climate and societal impact.
          </h2>
        </div>
      </div>
    </div>
  </section>
  @include('portal.layouts.pitch')
  @include('portal.layouts.footer')

</body>

</html>