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

  <section class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header mb-5">
            <h1 class="text-color-primary text-xl text-center">
              Contact us for Inquiries
            </h1>
          </div>
        </div>
        <div class="col-xs-12 col-md-1">
          <div class="side-title">
            <h4>I’m A</h4>
          </div>
        </div>
        <div class="col-xs-12 col-md-11">
          <div class="form-wrapper">
            <form action="#">
              <fieldset>
                <span class="orng-radio-group">
                  <input class="orng-radio" type="radio" name="orng-grouped" data-text="Startup Owner" checked />
                  <input class="orng-radio" type="radio" name="orng-grouped" data-text="Investor" />
                </span>
              </fieldset>
              <fieldset>
                <input type="text" id="fname" name="fname" placeholder="Full name" required />
              </fieldset>
              <fieldset>
                <input type="email" id="email" name="email" placeholder="Email" required/>
              </fieldset>
              <fieldset>
                <input type="text" id="phone" name="phone" placeholder="Phone" required />
              </fieldset>
              <fieldset>
                <input type="text" id="company-name" name="company-name" placeholder="Company name" />
              </fieldset>
              <div class="button-wrapper">
                <button type="submit" class="secondary-button">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('portal.layouts.footer')

</body>

</html>