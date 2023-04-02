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
      <img class="filter-70" src="assets/img/portal/pexels-photo-247599.jpg" alt="Hero Section" />
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

  <!-- Advisory Section -->
  <section class="adivsory-section">
    <div class="container-fluid-custom">
      <div class="row">

        <div class="col-md-5">
          <h2 class="text-xl font-medium text-color-primary">
            Advisory <br> Client
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

      <br>

      <div class="row">

        <div id="advisoryClientGroups" class="container-fluid">

        </div>
        <div class="footer-news">
          <button class="btn-load" id="buttonLoadMore">
            <span>Load More</span>
            <hr>
          </button>
        </div>
        <hr id="hrButtonLoadMore">

      </div>

    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="portfolio-section">
    <div class="container-fluid-custom">
      <div class="row">

        <div class="col-md-5">
          <h2 class="text-xl font-medium text-color-primary">
            Portfolio
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

      <br>

      <div class="row">

        <div class="row buttonContainer d-flex justify-content-end">
          <button type="button" class="buttonCarousel prev-carousel buttonHover">
            <svg class="imageButton">
              <img src="/assets/arrowLeft.png" alt="" class="arrowButton">
            </svg>
          </button>

          <button type="button" class="buttonCarousel next-carousel buttonHover">
            <svg class="imageButton">
              <img src="/assets/bigarrowRight.png" alt="" class="arrowButton">
            </svg>

          </button>

        </div>

        <!-- Product Carousel -->
        <div class="row" style="overflow:hidden;width:100%;">

          <div class="carouselWrapper slider">
            @foreach ($portfolio_ids as $portfolio_id)
            <div class="carouselCard">

              <p>PRODUCTS</p>
              <H1>{{$portfolio_id->name}}</H1>

              <figure>
                <img src="{{ url('/images/portfolio/'.$portfolio_id->photo) }}" alt="Silica" class="carouselCardImage">
              </figure>

            </div>
            @endforeach
          </div>

        </div>

      </div>

    </div>

    </div>
  </section>

  <!-- Footer -->
  @include('portal.layouts.footer')

  <!-- Script Adivosry CLients -->
  <script>
    $(document).ready(function() {
      var count = 3;

      function loadMore(count) {

        $.ajax({
          type: 'get',
          url: '/get-advisory/' + count,
          success: function(data) {
            var list = $('#advisoryClientGroups');
            list.empty();
            for (var i = 0; i < data[0].length; i++) {
              list.append('<div class="news--item"><div class="container-fluid"><div class="row"><div class="col-md-4"><figure><img src="/images/client/' + data[0][i].photo + '" alt="News Photo" style="width:100%;height: auto;"></figure></div><div class="col-md-4 text-center d-flex align-items-center"><p>Engagement Type</p></div><div class="col-md-4 text-center d-flex align-items-center"><p>' + data[0][i].name + '</p></div></div><hr></div></div>');
              // list.append('<div class="news--item"><div class="container-fluid"><div class="row"><div class="col-4"><figure><img src="/images/client/'+ data[0][i].photo +'" alt="News Photo"></figure></div><div class="col-4 text-center"><p>Engagement Type</p></div><div class="col-4 text-center"><p>'+ data[0][i].name +'</p></div></div><hr></div></div>');
            }

            if (count >= data[1]) {
              $('#buttonLoadMore').hide();
              $('#hrButtonLoadMore').hide();
            } else {
              $('#buttonLoadMore').show();
              $('#hrButtonLoadMore').show();
            }
          },
          error: function(data) {
            console.log('Error', data);
          }
        })
      }

      loadMore(count);

      $('#buttonLoadMore').click(function() {

        count = count + 3;

        loadMore(count);
      })
    })
  </script>

  <!-- Script Portfolio -->
  <script>
    $(document).ready(function() {
      $('.carouselWrapper').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        infinite: true,
        autoplay: false,
        autoplaySpeed: 800,
        prevArrow: $('.prev-carousel'),
        nextArrow: $('.next-carousel'),
        responsive: [{
          breakpoint: 600,
          settings: {
            arrows: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
          }
        }]
      })

      $('.next-carousel').click(function() {
        var counter = $('.paginationCounter').html();
        counter = parseInt(counter);
        if (counter + 1 == 7) {
          counter = 1;
        } else {
          counter += 1;
        }
        $('.paginationCounter').html(counter);
      })

      $('.prev-carousel').click(function() {
        var counter = $('.paginationCounter').html();
        counter = parseInt(counter);
        if (counter - 1 == 0) {
          counter = 6;
        } else {
          counter -= 1;
        }
        $('.paginationCounter').html(counter);
      })

      AOS.init({
        duration: 1200,
      });

      // sidebar
      function openNav() {
        document.getElementById('sidenav').classList.toggle('active');
      };

      gsap.registerPlugin(CSSRulePlugin);

      var rule = CSSRulePlugin.getRule(".textH1 .first::after");
      var rule2 = CSSRulePlugin.getRule(".textH1 .second::after");

      // gsap.from('.desc-anim', {opacity: 0, duration: 1, y: -50, stagger: .6})
      // gsap.to(rule, {cssRule: {scaleY: 0}, duration: 1});

      var tl = gsap.timeline({
        defaults: {
          duration: 1
        }
      })

      tl.from(".desc-anim", {
          y: -50,
          stagger: .6,
          opacity: 0
        })
        .to(rule, {
          duration: 1.8,
          cssRule: {
            scaleY: 0
          }
        })
        .to(rule2, {
          duration: 1.8,
          cssRule: {
            scaleY: 0
          }
        }, "-=0.8")


      function checkCarousel() {
        let count = $('.slider').length;
        console.log(count);
      }

      checkCarousel();

    })
  </script>

</body>

</html>