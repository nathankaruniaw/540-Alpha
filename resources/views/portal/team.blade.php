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
            Meet the expert behind 540 alpha. Lorem ipsum dolor sit amet,
            consectetuer adipiscing elit, sed diam nonummy nibh euismod
            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
            enim ad minim veniam,
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Team List -->
  <section class="team-list">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-md-6">
          <div class="team-1">
            <div class="row">
              <div class="col-md-6 p-0">
                <img class="w-100" src="assets/img/portal/Eka-Namara-Ginting.png" alt="" />
              </div>
              <div class="col-md-6 p-0">
                <div class="team-content p-5">
                  <h4 class="text-lg font-medium">Eka Namara Ginting</h4>
                  <p class="mt-5 text-xs line-height-l">
                    has embodied the success of being a green business
                    pioneer. As a serial entrepreneur and angel investor, Eka
                    is a seasoned high impact value creator ready to mentor
                    and guide businesses on critical journeys. He has
                    previously brought up green businesses such as the Rimba
                    Raya Conservation, making profits while saving the
                    Indonesia peat rainforest.
                  </p>
                  <p class="mt-4 text-xs line-height-l">
                    25 years in technology ecosystems and management
                    consulting.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="team-2">
            <div class="row">
              <div class="col-md-6 p-0">
                <img class="w-100" src="assets/img/portal/Steven-Sujoto.png" alt="" />
              </div>
              <div class="col-md-6 p-0">
                <div class="team-content p-5">
                  <h4 class="text-lg font-medium">Steven Sujoto</h4>
                  <p class="mt-5 text-xs line-height-l">
                  brings more than 12 years of professional experience in digital 
                  transformation, management consulting and nature-based solutions. 
                  He is passionate in green technology and is currently taking part 
                  in an end-to-end circular economy program. Steven has previously 
                  delivered a successful peat restoration strategy work for the 
                  Indonesian government and led the company-wide digital adoption in 
                  one of the world’s largest plantations. He is an engineer by training, 
                  holding MSc from Delft University of Technology. 
                  </p>
                  <p class="mt-4 text-xs line-height-l">
                    More than 12 years of professional experience in digital
                    transformation, management consulting and nature-based
                    solutions.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="team-3">
            <div class="row">
              <div class="col-md-6 p-0">
                <div class="team-content p-5">
                  <h4 class="text-lg font-medium">Julianto Johanes</h4>
                  <p class="mt-5 text-xs line-height-l">
                    is a passionate investment professional who believes that
                    the right capital allocation strategy can save the world.
                    An INSEAD graduate, he spent his post-MBA life building
                    investment strategy to accelerate the United Nation’s
                    Sustainable Development Goals. Julian is deeply familiar
                    in driving critical changes, having successfully led
                    various rounds of financial and business restructuring for
                    value creation.
                  </p>
                  <p class="mt-4 text-xs line-height-l">
                    He is a CFA Charterholder trained in private equity
                    investments and management consulting.
                  </p>
                </div>
              </div>
              <div class="col-md-6 p-0">
                <img class="w-100" src="assets/img/portal/Julianto-Johanes.png" alt="" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="team-4">
            <div class="row">
              <div class="col-md-6 p-0">
                <div class="team-content p-5">
                  <h4 class="text-lg font-medium">Reinard Gunadjaja</h4>
                  <p class="mt-5 text-xs line-height-l">
                    is a real-asset management professional with deep
                    expertise in restructuring and extensive network within
                    some of the biggest property conglomerates in Indonesia.
                    He had represented national and multinational companies on
                    multi-million dollar property deals and delivered asset
                    restructuring deals with local and global financial
                    institutions.
                  </p>
                  <p class="mt-4 text-xs line-height-l">
                    Reinard was trained as a Master of Applied Finance at the
                    Monash University.
                  </p>
                </div>
              </div>
              <div class="col-md-6 p-0">
                <img class="w-100" src="assets/img/portal/Reinard-Gunadjaja.png" alt="" />
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
          <p class="text-m mt-5 text-center px-7 text-color-primary">
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