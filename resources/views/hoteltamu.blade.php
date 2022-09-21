@extends('tamulayout')
@section('content')
@push('style')
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

<style>
    .swiper {
        width: 100%;
        margin-top: -25rem;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 280px;
        height: 300px;
        object-fit: cover;
      }
      .bar_content {
      display: block; /* Important to give the content a width */
      width: 100%;
      position: relative;
      top: -20rem;
      transform: translateX(100%); /* Animation start out of the screen */
  /* Add the animation */
      animation: move 15s linear infinite /* infinite make reapeat the animation indefinitely */;
    }
    .bar .bar_content h4 {
      background: url(https://media1.giphy.com/media/26ufo4EIIEdB8tX3y/giphy.gif?cid=ecf05e472chtd6fjy7sjjzeri0huy8mo2g99ujw6li8f8jnk&rid=giphy.gif&ct=g);
  background-size: cover;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    /* Create the animation */
    @keyframes move {
      to { transform: translateX(-100%); }
    }
</style>
@endpush

    <div class="backgroundnya" style="width:100rem;background:rgb(51, 156, 255);height:950px"></div>
    <div class="cardnya d-flex" style="margin: 0 auto; position:relative;top:-5rem">
    <div class="line" style="width: 5px;background:rgb(255, 166, 32);height:80px;position:relative;top:-19rem;"></div>
    <div class="textnya" style="background:rgb(255, 255, 255);position:relative;height:5rem;width:63rem;padding:1rem;border-radius:5px;top:-19rem;">
        <p style="font-size: 16px;" class="fw-lighter">The COVID-19 (corona virus) outbreak may impact your trip</br>
            Look for alerts on our site indicating certain destination-specific travel warnings. You'll find our latest advice <a href="">here</a></p>
    </div>
    </div>
    <div class="texnyalagi" style="position: relative;top:-20rem;margin-left:4rem">
        <h2 class="text-white">The best hotel deals from around the world.</br><a href="" class="text-white" style="text-decoration:underline">It's our guarantee!</a></h2>
    </div>
    <div class="imgnya">
        <img src="https://content.r9cdn.net/res/images/horizon/common/layout/brands/hotelscombined/htc_max_with_robe.png?v=f44f1bdf06c9489b9898db04c15f1d9fd52ed893&cluster=5" alt="" style="position: relative;top:-23.4rem;width:340px;float:right; right:5rem">
    </div>
    <div class="logo-logo">
        <img src="http://www.athosthealuxuryrooms.gr/el/wp-content/uploads/booking-athos-thea-luxury-rooms.png" alt="" width="100px" style="margin-top: -60rem;margin-left:4rem">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e4/Hotels.com_logo.svg/1280px-Hotels.com_logo.svg.png" alt="" width="100px" style="margin-top: -60rem;margin-left:.5rem">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Logo-tiket-com.png/640px-Logo-tiket-com.png" alt="" width="100px" style="margin-top: -60rem;margin-left:.5rem">
        <img src="https://mlgyojwnuflc.i.optimole.com/cb:h3v5.5d489/w:2000/h:413/q:mauto/f:avif/https://www.pointstar.co.id/wp-content/uploads/2021/08/logo-primary.png" alt="" width="100px" style="margin-top: -60rem;margin-left:.5rem">
    </div>
     <!-- Quick Action Toolbar Ends-->
     <div class="row" style="margin-top: -3rem;">
      <div class="col">
        <div class="bar" style="position:relative;">
          <span class="bar_content">
            <h4 style="font-family: 'Dancing Script', cursive; font-size:35px;">Welcome Westor EveryOne</h4>
          </span>
        </div>
      </div>
  </div>

    <div class="textnya-swipper" style="position:relative; top: -18rem;margin-left:5rem">
      <div class="textnya-2 d-flex">
        <div class="nahtextnya">
        <h3 style="font-weight: 900">Stays near Hveragerdi</h3>
        <p>Wed, Sep 21 - Thu, Sep 22</p>
        </div>
        <div class="buttonnya">
          <div class="btn btnbr mb-3" style="border: 1px solid #333; height:40px; border-radius:3px;margin-left:32rem;">See all</div>
        </div>
      </div>
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="col">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/14/fb/65/a9/frost-and-fire-hotel.jpg?w=600&h=400&s=1" alt="" style="
            border-radius: 10px;">
            <h4 class="fw-bold mt-2" style="font-size: 15px; text-align: left;">Frost and Fire Boutique Hotel</h4>
            <div class="bintangnya" style="font-size:13px; text-align: left;">
            <i class="fa-solid fa-star" style="color: rgb(20, 20, 20)"></i>
            <i class="fa-solid fa-star" style="color: rgb(20, 20, 20)"></i>
            <i class="fa-solid fa-star" style="color: rgb(20, 20, 20)"></i>
            <i class="fa-solid fa-star" style="color: rgb(100, 100, 100)"></i>
            <i class="fa-solid fa-star" style="color: rgb(100, 100, 100)"></i>
            <p>$254</p>
            </div>
          </div>
          </div>
          <div class="swiper-slide">
            <div class="col" style="margin-right: 8rem;">
                <img src="https://lsn-staging.s3.wefew.io/filestorage/images/49995/AudreyMa_Commissary_721A1683%20copy%203.jpg?width=926&quality=80&crop=0&method=ratio" alt="" style="
                border-radius: 10px;">
                <h4 class="fw-bold mt-2" style="font-size: 15px; text-align: left;">Hotel Örk</h4>
                <div class="bintangnya" style="font-size:13px; text-align: left;">
                <i class="fa-solid fa-star" style="color: rgb(20, 20, 20)"></i>
                <i class="fa-solid fa-star" style="color: rgb(20, 20, 20)"></i>
                <i class="fa-solid fa-star" style="color: rgb(20, 20, 20)"></i>
                <i class="fa-solid fa-star" style="color: rgb(100, 100, 100)"></i>
                <i class="fa-solid fa-star" style="color: rgb(100, 100, 100)"></i>
                <p>$140</p>
                </div>
              </div>
          </div>
          <div class="swiper-slide">
            <div class="col" style="margin-right: 13rem;">
                <img src="https://aff.bstatic.com/images/hotel/840x460/102/102269624.jpg" alt="" style="
                border-radius: 10px;">
                <h4 class="fw-bold mt-2" style="font-size: 15px; text-align: left;">Reykjadalur Guesthouse</h4>
                <div class="bintangnya" style="font-size:13px; text-align: left;">
                <i class="fa-solid fa-star" style="color: rgb(20, 20, 20)"></i>
                <i class="fa-solid fa-star" style="color: rgb(20, 20, 20)"></i>
                <i class="fa-solid fa-star" style="color: rgb(20, 20, 20)"></i>
                <i class="fa-solid fa-star" style="color: rgb(100, 100, 100)"></i>
                <i class="fa-solid fa-star" style="color: rgb(100, 100, 100)"></i>
                <p>$112</p>
                </div>
              </div>
          </div>
          <div class="swiper-slide">
            <div class="col" style="margin-right: 16rem;">
              <img src="https://q-xx.bstatic.com/xdata/images/hotel/max1024x768/333457116.jpg?k=705ae41843f26b0630ab4340bff1de6061fd1eeb2d7e3fe0df0c0538aafd9880&o=" alt="" style="
              border-radius: 10px;">
              <h4 class="fw-bold mt-2" style="font-size: 15px; text-align: left;">The Greenhouse Hotel</h4>
              <div class="bintangnya" style="font-size:13px; text-align: left;">
              <i class="fa-solid fa-star" style="color: rgb(20, 20, 20)"></i>
              <i class="fa-solid fa-star" style="color: rgb(20, 20, 20)"></i>
              <i class="fa-solid fa-star" style="color: rgb(20, 20, 20)"></i>
              <i class="fa-solid fa-star" style="color: rgb(20, 20, 20)"></i>
              <i class="fa-solid fa-star" style="color: rgb(100, 100, 100)"></i>
              <p>$254</p>
              </div>
            </div>
          </div>
        </div>
        <div class="buttonnyaya" style="margin-top: -14rem;">
          {{-- <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div> --}}
        </div>
      </div>
      <div class="faqnya mb-5" style="margin-left: 3rem;margin-top:-4rem">
        <h3 style="font-weight: 900" class="fw-bold">FAQs about finding hotel deals</h3>
        <div class="row align-item-start" style="position:relative; right: .2rem">
          <div class="col">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    How does HotelsCombined find lower hotel prices ?
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">At HotelsCombined, we know that booking accommodation online isn't easy, but we believe it should be. A simple search on HotelsCombined scans for prices on hundreds of travel sites in seconds. We find deals from across the web and put them in one place. Compare your options for the same Hotel, apartment or home and choose where you book—whether it's directly with the hotel —or even from another travel site.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    How reliable are hotel reviews on HotelsCombined ?
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">On HotelsCombined, all hotel and home reviews are written by verified guests. That means we have confirmation from each property that the reviewer has stayed there and is a real visitor.
                  We have gathered reviews from some of our top travel partners to ensure you get the most relevant and best reviews to help you make your booking decisions.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Does HotelsCombined have an app ?
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">We sure do! You can use the HotelsCombined app on most mobile and tablet devices. Download HotelsCombined Hotel Search on  <a href="">iOS</a> or <a href="">Android</a> today!</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="accordion accordion-flush" id="accordionFlushExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    How does HotelsCombined help me find the best deals ?
                  </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">With one quick and easy search, we look for hotels and homes from across the best travel sites around the world in seconds. We gather all of the prices, availabilities and rooms for you, and give you the tools to filter and compare the best options for the same hotel or home so that you can easily choose and book the best deals. Best of all there is no extra fee from HotelsCombined!</div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Can I create Price Alerts to track hotel prices on HotelsCombined ?
                  </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">Yes - once you have run a search on HotelsCombined you can create a price alert by switching the "Set Price Alert" toggle to ON. You will receive an email when the prices of the properties in your search drop by at least 10%.
                  You can also sign in and view or set Price Alerts on your <a href=""> account page</a>. If you're on our app, you can get to Price Alerts using the app's navigation menu and follow instructions there.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br/> 
      <br/> 

@endsection
@push('script')
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    
      <!-- Initialize Swiper -->
      <script>
        var swiper = new Swiper('.mySwiper', {
          slidesPerView: 3,
          spaceBetween: 10,
          autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      </script>
      @endpush