<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.dashboard_layouts.header')
  <title>Funity</title>

</head>

<body>
  <!-- Our Product Section -->
  <div class="container-fluid" id="product" style="padding-top: 50px;" >

    <div class="row" data-aos="fade-up">

      <div class="col-md-6" style="padding: 20px 50px;">
        <h1 class="textH1 ">Our <br>Product</h1>
      </div>

      <div class="col-md-6" style="padding: 20px 50px;">
        <p class="textH6">
          Funity continues to innovate in providing its products and services so it
          will have better quality and more affordable by applying digital
          technology as its strong foundation, caring to all employees from various
          backgrounds, and surrounding community. In addition, the key to
          operational excellence is the transformation of work culture, mindset
          and people behavior towards a digital world.
        </p>
      </div>

    </div>

    <div class="row buttonContainer d-flex justify-content-end" >

      <button type="button" class="buttonPagination">
        <p class="textH6" style="color: #BDB5A8;">
          PRODUCT <span class="paginationCounter">1</span>/6
        </p>
      </button>

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
    <div class="row" style="overflow:hidden;">

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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CSSRulePlugin3.min.js"></script>

  <script>  
    $(document).ready(function(){
      $('.carouselWrapper').slick({
          slidesToShow: 3.4,
        //   slidesToScroll: 2,
          arrows: true,
          infinite: true,
          autoplay: false,
          autoplaySpeed: 800,
          prevArrow: $('.prev-carousel'),
          nextArrow: $('.next-carousel'),
          responsive: [
              {
                  breakpoint: 600,
                  settings: {
                      arrows: false,
                      slidesToShow: 1.05,
                      slidesToScroll: 1,
                      infinite: true,
                  }
              }
          ]
      })

      $('.next-carousel').click(function(){
        var counter = $('.paginationCounter').html();
        counter = parseInt(counter);
        if(counter+1 == 7){
          counter = 1;
        }
        else{
          counter += 1;
        }
        $('.paginationCounter').html(counter);
      })

      $('.prev-carousel').click(function(){
        var counter = $('.paginationCounter').html();
        counter = parseInt(counter);
        if(counter-1 == 0){
          counter = 6;
        }
        else{
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

      var tl = gsap.timeline({defaults:{duration: 1}})
      
      tl.from(".desc-anim", {y: -50, stagger: .6, opacity: 0})
      .to(rule, {duration: 1.8, cssRule: {scaleY: 0}})
      .to(rule2, {duration: 1.8, cssRule: {scaleY: 0}}, "-=0.8")

      
      function checkCarousel(){
        let count = $('.slider').length;
        console.log(count);
      }
      
      checkCarousel();
      
    })

  </script>

  

</body>

</html>