@extends('admin.admin_layouts.navbar')

@section('content')
  <!-- Hero Section -->
    <section class="hero full-height">
      <div class="image-wrapper">
        <img
          class="filter-70"
          src="assets/img/pexels-photo-247599.jpg"
          alt=""
        />
      </div>
      <div class="absolute-start">
        <div class="container-fluid-custom">
          <div class="row">
            <div class="col-md-8">
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
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
              nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
              erat volutpat. Ut wisi enim ad minim veniam,
            </p>
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

    <!-- Pitch Section -->
    <section class="pitch-section">
      <div class="container-fluid-custom">
        <div class="row">
          <div class="col-md-3">
            <h2 class="text-xl text-white">Send a Pitch</h2>
          </div>
          <div class="col-md-6">
            <p class="text-m pr-13 text-white">
              We are always looking for exceptional founders to join our
              ecosystem. Submit your pitch for review here.
            </p>
          </div>
          <div class="col-md-3">
            <button type="button pointer" class="standard-button">
              Learn More
            </button>
          </div>
        </div>
      </div>
    </section>
@endsection
