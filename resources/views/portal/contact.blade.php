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
              <input type="text" id="orng-grouped" name="orng-grouped" value="Startup Owner" hidden>
              <fieldset>
                <div class="row px-3">
                  <button type="button" class="orng-radio-2 orng-radio-2-focus col-6" data-text="Startup Owner">Startup Owner</button>
                  <button type="button" class="orng-radio-2  orng-radio-2-unfocus col-6" data-text="Investor">Investor</button>
                </div>
              </fieldset>
              <!-- <fieldset>
                <span class="orng-radio-group">
                  <input class="orng-radio" type="radio" name="orng-grouped" data-text="Startup Owner" checked />
                  <input class="orng-radio" type="radio" name="orng-grouped" data-text="Investor" />
                </span>
              </fieldset> -->
              <fieldset>
                <input type="text" id="fname" name="fname" placeholder="Full name" required />
              </fieldset>
              <fieldset>
                <input type="email" id="email" name="email" placeholder="Email" required/>
              </fieldset>
              <fieldset>
                <input type="text" id="phone" name="phone" placeholder="Phone" required />
              </fieldset>
              <fieldset id="company_name">
                <input type="text" name="company_name" placeholder="Company Name"/>
              </fieldset>
              <fieldset id="startup_name">
                <input type="text" name="startup_name" placeholder="Startup Name" />
              </fieldset>
              <fieldset id="startup_location">
                <input type="text" name="startup_location" placeholder="Startup Location (country)" />
              </fieldset>
              <fieldset id="startup_category">
                <input type="text" name="startup_category" placeholder="Startup Category/Industry" />
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
  <script>
    $(document).ready(function() {
      $('#company_name').hide();
      
      $('.orng-radio-2').click(function() {

        $('.orng-radio-2-focus').addClass('orng-radio-2-unfocus')
        $('.orng-radio-2-focus').removeClass('orng-radio-2-focus')
        $('#orng-grouped').val($(this).data('text'))

        $(this).removeClass('orng-radio-2-unfocus')
        $(this).addClass('orng-radio-2-focus')

        if($(this).data('text') != 'Startup Owner'){
          $('#startup_name').hide();
          $('#startup_location').hide();
          $('#startup_category').hide();
          $('#company_name').show();
        }
        else{
          $('#startup_name').show();
          $('#startup_location').show();
          $('#startup_category').show();
          $('#company_name').hide();
        }
      })
    })
  </script>

</body>

</html>