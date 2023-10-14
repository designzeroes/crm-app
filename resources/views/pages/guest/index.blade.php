@extends('layouts.guest')
@section('content')

  <main class="main-content site-wrapper-reveal">
    <!--== Start Hero Area Wrapper ==-->
    <section class="home-slider-area slider-default">
      <div class="container h-100 position-relative">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="slider-content-area" data-aos="fade-zoom-in" data-aos-duration="1300">
              <h2><span>Increase traffic</span> for <br>your website</h2>
              <p>Bring more traffic to your website with the help of new <br>proven techniques I can offer</p>
              <form class="input-btn-group">
                <input class="form-control" type="text" placeholder="www.example.com">
                <input class="form-control no-border" type="text" placeholder="sample@domain.com">
                <button class="btn btn-theme" type="button">Analyze</button>
              </form>
            </div>
          </div>
        </div>
        <div class="thumb-style" data-aos="fade-up" data-aos-duration="1300">
          <img src="{{asset('front-assets')}}/img/slider/01.jpg" alt="Roomedia-HasTech">
        </div>
        <div class="shape-layer">
          <div class="shape shape-one"></div>
          <div class="shape shape-two"></div>
          <div class="shape shape-three"></div>
          <div class="shape shape-four"></div>
          <div class="shape shape-five"></div>
          <div class="shape shape-six"></div>
          <div class="shape shape-seven"></div>
          <div class="shape shape-eight"></div>
        </div>
      </div>
      <div class="curve-style">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none" viewBox="0 0 100 100">
          <path d="M 0 0 L0 100 L100 100 L100 0 Q 50 110 0 0"></path>
        </svg>
      </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Contact Info Area Wrapper ==-->
    <section class="contact-info-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="contact-info-style contact-info-content">
              <div class="row">
                <div class="col-lg-6">
                  <div class="contact-info-item item-style-two pt-0">
                    <div class="icon">
                      <i class="icon_phone"></i>
                    </div>
                    <div class="content">
                      <h4>Contact Us <br>By Phone</h4>
                      <h3>(605) 230-5253</h3>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="contact-info-item">
                    <div class="icon">
                      <img class="icon-img" src="{{asset('front-assets')}}/img/icons/01.png" alt="Icon">
                    </div>
                    <div class="content">
                      <h4>Email Message</h4>
                      <p>hello@roomedia.com</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="contact-info-item">
                    <div class="icon">
                      <img class="icon-img" src="{{asset('front-assets')}}/img/icons/02.png" alt="Icon">
                    </div>
                    <div class="content">
                      <h4>Open Hours</h4>
                      <p>Mon-Sat: 8:00am - 5:00pm</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End  Contact Info Area Wrapper ==-->

    <!--== Start About Area ==-->
    <section class="about-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="thumb" data-aos="fade-right" data-aos-duration="1300">
              <img src="{{asset('front-assets')}}/img/about/01.png" alt="Roomedia-HasTech">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="about-content" data-aos="fade-up" data-aos-duration="1300">
              <div class="section-title">
                <h2 class="title"><span>About</span> Roomedia</h2>
              </div>
              <div class="accordian-content">
                <div class="accordion" id="accordionStyle">
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Who We Are
                        <i class="icon icon-plus icon_plus"></i>
                        <i class="icon icon-minus icon_minus-06"></i>
                      </button>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                      data-bs-parent="#accordionStyle">
                      <div class="accordion-body">
                        RooMedia is a Search Engine Marketing Company providing ser vices to Small & Medium size
                        Businesses to grow and get more and more online traffic towards their websites. We bring
                        advanced online marketing from the major cities to businesses right here
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Our Mission
                        <i class="icon icon-plus icon_plus"></i>
                        <i class="icon icon-minus icon_minus-06"></i>
                      </button>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                      data-bs-parent="#accordionStyle">
                      <div class="accordion-body">
                        RooMedia is a Search Engine Marketing Company providing ser vices to Small & Medium size
                        Businesses to grow and get more and more online traffic towards their websites. We bring
                        advanced online marketing from the major cities to businesses right here
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Our Vision
                        <i class="icon icon-plus icon_plus"></i>
                        <i class="icon icon-minus icon_minus-06"></i>
                      </button>
                    </div>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                      data-bs-parent="#accordionStyle">
                      <div class="accordion-body">
                        RooMedia is a Search Engine Marketing Company providing ser vices to Small & Medium size
                        Businesses to grow and get more and more online traffic towards their websites. We bring
                        advanced online marketing from the major cities to businesses right here
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a href="about.html" class="btn btn-theme">More About Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End About Area ==-->

    <!--== Start Service Area ==-->
    <section class="service-area" data-bg-img="{{asset('front-assets')}}/img/shape/bg-01.png">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 m-auto">
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1100">
              <h2 class="title text-uppercase"><span>Best Services</span> For You</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="icon-box-style1 mb-sm-70 mb-lg-80 mb-100" data-aos="fade-up" data-aos-duration="1200">
              <div class="icon-box-list">
                <div class="icon-box-item">
                  <div class="icon-box">
                    <img class="icon-img" src="{{asset('front-assets')}}/img/icons/s01.png" alt="Icon">
                  </div>
                  <div class="content">
                    <h4><a href="service-details.html">Organic Search (SEO)</a></h4>
                    <p>Stop selling. Start helping. Utilize SEO to capture early stage awareness queries through
                      relevant content</p>
                  </div>
                  <span class="icon-box-number">01</span>
                </div>
                <div class="icon-box-item">
                  <div class="icon-box">
                    <img class="icon-img" src="{{asset('front-assets')}}/img/icons/s02.png" alt="Icon">
                  </div>
                  <div class="content">
                    <h4><a href="service-details.html">Link Building Services</a></h4>
                    <p>Our full-service link building company specializes in custom link building campaigns that earn
                      high-quality links</p>
                  </div>
                  <span class="icon-box-number">02</span>
                </div>
                <div class="icon-box-item">
                  <div class="icon-box">
                    <img class="icon-img" src="{{asset('front-assets')}}/img/icons/s03.png" alt="Icon">
                  </div>
                  <div class="content">
                    <h4><a href="service-details.html">Paid Search (PPC)</a></h4>
                    <p>Search engine marketing (SEM, which can include SEO), pay-per-click (PPC), search engine
                      advertising sponsored</p>
                  </div>
                  <span class="icon-box-number">03</span>
                </div>
              </div>
              <div class="icon-box-list">
                <div class="icon-box-item">
                  <div class="icon-box">
                    <img class="icon-img" src="{{asset('front-assets')}}/img/icons/s04.png" alt="Icon">
                  </div>
                  <div class="content">
                    <h4><a href="service-details.html">SEO Auditing Services</a></h4>
                    <p>If you haven't recently audited you website, we recommend an SEO audit before you begin a
                      campaign</p>
                  </div>
                  <span class="icon-box-number">04</span>
                </div>
                <div class="icon-box-item">
                  <div class="icon-box">
                    <img class="icon-img" src="{{asset('front-assets')}}/img/icons/s05.png" alt="Icon">
                  </div>
                  <div class="content">
                    <h4><a href="service-details.html">B2B SEO Services</a></h4>
                    <p>B2B SEO campaign will include a study of business goals, followed by an evaluation of
                      pre-purchase</p>
                  </div>
                  <span class="icon-box-number">05</span>
                </div>
                <div class="icon-box-item">
                  <div class="icon-box">
                    <img class="icon-img" src="{{asset('front-assets')}}/img/icons/s06.png" alt="Icon">
                  </div>
                  <div class="content">
                    <h4><a href="service-details.html">Full Service SEO</a></h4>
                    <p>Based in Americas, Boseo offers full service SEO marketing solutions for companies of all sizes
                      and types</p>
                  </div>
                  <span class="icon-box-number">06</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="funfact-area" data-aos="fade-up" data-aos-duration="1300">
        <div class="container">
          <div class="row">
            <div class="col-6 col-sm-6 col-lg-3">
              <div class="funfact-item">
                <div class="number">
                  <h2><span class="counter-animate">3254</span>+</h2>
                </div>
                <p class="title">Completed Projects</p>
              </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-3">
              <div class="funfact-item">
                <div class="number">
                  <h2><span class="counter-animate">59</span></h2>
                </div>
                <p class="title">Award Winner</p>
              </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-3">
              <div class="funfact-item">
                <div class="number">
                  <h2><span class="counter-animate">234</span>k</h2>
                </div>
                <p class="title">Worldwide Users</p>
              </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-3">
              <div class="funfact-item">
                <div class="number">
                  <h2><span class="counter-animate">825</span></h2>
                </div>
                <p class="title">Satisfied Clients</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Service Area ==-->

    <!--== Start Portfolio Area ==-->
    <section class="portfolio-area portfolio-default-area">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="section-title" data-aos="fade-right" data-aos-duration="1300">
              <h2 class="title"><span>Our Latest</span> Projects</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="portfolio-items">
              <div class="portfolio-item">
                <div class="inner-content">
                  <div class="thumb">
                    <a href="portfolio-details.html"><img src="{{asset('front-assets')}}/img/portfolio/h01.png"
                        alt="Roomedia-Portfolio" /></a>
                  </div>
                  <div class="portfolio-info">
                    <h3 class="title"><a href="portfolio-details.html">Adventure SEO Website</a></h3>
                    <a href="portfolio-details.html" class="category">Social Media</a>
                    <a class="btn-icon" href="portfolio-details.html"><i class="lnr lnr-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="content-right">
                <div class="portfolio-item">
                  <div class="inner-content">
                    <div class="thumb">
                      <a href="portfolio-details.html"><img src="{{asset('front-assets')}}/img/portfolio/h02.png"
                          alt="Roomedia-Portfolio" /></a>
                    </div>
                    <div class="portfolio-info">
                      <h3 class="title"><a href="portfolio-details.html">High Fashion Fairvine</a></h3>
                      <a href="portfolio-details.html" class="category">Social Media</a>
                      <a class="btn-icon" href="portfolio-details.html"><i class="lnr lnr-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-item">
                  <div class="inner-content">
                    <div class="thumb">
                      <a href="portfolio-details.html"><img src="{{asset('front-assets')}}/img/portfolio/h03.png"
                          alt="Roomedia-Portfolio" /></a>
                    </div>
                    <div class="portfolio-info">
                      <h3 class="title"><a href="portfolio-details.html">High Fashion Fairvine</a></h3>
                      <a href="portfolio-details.html" class="category">Social Media</a>
                      <a class="btn-icon" href="portfolio-details.html"><i class="lnr lnr-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="portfolio-footer">
              <a class="btn-bottom" href="portfolio.html">See All Projects</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Portfolio Area ==-->

    <!--== Start Testimonial Area ==-->
    <section class="testimonial-area testimonial-default-area" data-aos="fade-up" data-aos-duration="1300">
      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-6 col-xl-5">
            <div class="section-title">
              <h2 class="title"><span>What Our Clients</span> Say About Us</h2>
              <div class="icon">
                <img class="icon-img" src="{{asset('front-assets')}}/img/icons/quote.png" alt="Icon">
                <img class="icon-shape" src="{{asset('front-assets')}}/img/shape/t01.png" alt="Roomedia-Image">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-7">
            <div class="testimonial-content-area">
              <div class="swiper-container testimonial-slider-container">
                <div class="swiper-wrapper testimonial-slider">
                  <!--== Start Testimonial Item ==-->
                  <div class="swiper-slide testimonial-single">
                    <div class="client-content">
                      <p>“Chris Carroll is definitely an expert in digital marketing! He is always doing a great job
                        and takes time to explain his thoughts and his process. He doesn't hesitate to share new ideas
                        and be proactive all the time.”</p>
                    </div>
                    <div class="client-info">
                      <h4 class="name">Daniel Parrick</h4>
                      <p class="designation">CEO Founder at Google Inc</p>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->

                  <!--== Start Testimonial Item ==-->
                  <div class="swiper-slide testimonial-single">
                    <div class="client-content">
                      <p>“Chris Carroll is definitely an expert in digital marketing! He is always doing a great job
                        and takes time to explain his thoughts and his process. He doesn't hesitate to share new ideas
                        and be proactive all the time.”</p>
                    </div>
                    <div class="client-info">
                      <h4 class="name">Chris Carrol</h4>
                      <p class="designation">CEO Founder at Google Inc</p>
                    </div>
                  </div>
                  <!--== End Testimonial Item ==-->
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-prev"><i class="lnr lnr-arrow-left"></i></div>
                <div class="swiper-button-next"><i class="lnr lnr-arrow-right"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Testimonial Area ==-->

    <!--== Start Pricing Area Wrapper ==-->
    <section class="pricing-area pricing-default-area bgcolor-f5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1100">
              <h2 class="title text-uppercase"><span>kick-start</span> with an affordable</h2>
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1300">
          <div class="col-lg-12 justify-items-center">
            <ul class="pricing-tab-switch" id="pricing-tab-style">
              <li class="month active"><a href="#/">Monthly</a></li>
              <li><label class="switch on"></label></li>
              <li class="annual"><a href="#/">Annual</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div id="month">
              <div class="pricing-items">
                <!--== Start Pricing Item ==-->
                <div class="pricing-item">
                  <div class="pricing-title">
                    <h5>Entrepreneur</h5>
                  </div>
                  <div class="pricing-thumb">
                    <img src="{{asset('front-assets')}}/img/photos/pricing-v01.png" alt="Roomedia-HasTech">
                    <img class="shape-img" src="{{asset('front-assets')}}/img/shape/p01.png" alt="Roomedia-HasTech">
                  </div>
                  <div class="pricing-amount">
                    <h2><sup>$</sup>29<span>/ Month</span></h2>
                  </div>
                  <div class="pricing-content">
                    <ul class="pricing-list">
                      <li>25 Analytics Compaign</li>
                      <li>1,300Change Keywords</li>
                      <li>1 Free Optimization</li>
                      <li>24/7 support</li>
                    </ul>
                  </div>
                  <div class="pricing-footer">
                    <a href="#/" class="btn btn-gray">Start Now</a>
                  </div>
                </div>
                <!--== End Pricing Item ==-->

                <!--== Start Pricing Item ==-->
                <div class="pricing-item active">
                  <div class="pricing-badge">
                    <h6>Popular</h6>
                  </div>
                  <div class="pricing-title">
                    <h5>Growing Business</h5>
                  </div>
                  <div class="pricing-thumb">
                    <img src="{{asset('front-assets')}}/img/photos/pricing-v02.png" alt="Roomedia-HasTech">
                    <img class="shape-img" src="{{asset('front-assets')}}/img/shape/p02.png" alt="Roomedia-HasTech">
                  </div>
                  <div class="pricing-amount">
                    <h2><sup>$</sup>59<span>/ Month</span></h2>
                  </div>
                  <div class="pricing-content">
                    <ul class="pricing-list">
                      <li>80 Analytics Compaign</li>
                      <li>1,500Change Keywords</li>
                      <li>3 Free Optimization</li>
                      <li>24/7 support</li>
                    </ul>
                  </div>
                  <div class="pricing-footer">
                    <a href="#/" class="btn btn-gray">Start Now</a>
                  </div>
                </div>
                <!--== End Pricing Item ==-->

                <!--== Start Pricing Item ==-->
                <div class="pricing-item">
                  <div class="pricing-title">
                    <h5>Pro Business</h5>
                  </div>
                  <div class="pricing-thumb">
                    <img src="{{asset('front-assets')}}/img/photos/pricing-v03.png" alt="Roomedia-HasTech">
                    <img class="shape-img" src="{{asset('front-assets')}}/img/shape/p03.png" alt="Roomedia-HasTech">
                  </div>
                  <div class="pricing-amount">
                    <h2><sup>$</sup>99<span>/ Month</span></h2>
                  </div>
                  <div class="pricing-content">
                    <ul class="pricing-list">
                      <li>100 Analytics Compaign</li>
                      <li>2,300Change Keywords</li>
                      <li>10 Free Optimization</li>
                      <li>24/7 support</li>
                    </ul>
                  </div>
                  <div class="pricing-footer">
                    <a href="#/" class="btn btn-gray">Start Now</a>
                  </div>
                </div>
                <!--== End Pricing Item ==-->
              </div>
            </div>
            <div id="annual">
              <div class="pricing-items">
                <!--== Start Pricing Item ==-->
                <div class="pricing-item">
                  <div class="pricing-title">
                    <h5>Entrepreneur</h5>
                  </div>
                  <div class="pricing-thumb">
                    <img src="{{asset('front-assets')}}/img/photos/pricing-v01.png" alt="Roomedia-HasTech">
                    <img class="shape-img" src="{{asset('front-assets')}}/img/shape/p01.png" alt="Roomedia-HasTech">
                  </div>
                  <div class="pricing-amount">
                    <h2><sup>$</sup>39<span>/ Annual</span></h2>
                  </div>
                  <div class="pricing-content">
                    <ul class="pricing-list">
                      <li>25 Analytics Compaign</li>
                      <li>1,300Change Keywords</li>
                      <li>1 Free Optimization</li>
                      <li>24/7 support</li>
                    </ul>
                  </div>
                  <div class="pricing-footer">
                    <a href="#/" class="btn btn-gray">Start Now</a>
                  </div>
                </div>
                <!--== End Pricing Item ==-->

                <!--== Start Pricing Item ==-->
                <div class="pricing-item active">
                  <div class="pricing-badge">
                    <h6>Popular</h6>
                  </div>
                  <div class="pricing-title">
                    <h5>Growing Business</h5>
                  </div>
                  <div class="pricing-thumb">
                    <img src="{{asset('front-assets')}}/img/photos/pricing-v02.png" alt="Roomedia-HasTech">
                    <img class="shape-img" src="{{asset('front-assets')}}/img/shape/p02.png" alt="Roomedia-HasTech">
                  </div>
                  <div class="pricing-amount">
                    <h2><sup>$</sup>89<span>/ Annual</span></h2>
                  </div>
                  <div class="pricing-content">
                    <ul class="pricing-list">
                      <li>80 Analytics Compaign</li>
                      <li>1,500Change Keywords</li>
                      <li>3 Free Optimization</li>
                      <li>24/7 support</li>
                    </ul>
                  </div>
                  <div class="pricing-footer">
                    <a href="#/" class="btn btn-gray">Start Now</a>
                  </div>
                </div>
                <!--== End Pricing Item ==-->

                <!--== Start Pricing Item ==-->
                <div class="pricing-item">
                  <div class="pricing-title">
                    <h5>Pro Business</h5>
                  </div>
                  <div class="pricing-thumb">
                    <img src="{{asset('front-assets')}}/img/photos/pricing-v03.png" alt="Roomedia-HasTech">
                    <img class="shape-img" src="{{asset('front-assets')}}/img/shape/p03.png" alt="Roomedia-HasTech">
                  </div>
                  <div class="pricing-amount">
                    <h2><sup>$</sup>99<span>/ Annual</span></h2>
                  </div>
                  <div class="pricing-content">
                    <ul class="pricing-list">
                      <li>100 Analytics Compaign</li>
                      <li>2,300Change Keywords</li>
                      <li>10 Free Optimization</li>
                      <li>24/7 support</li>
                    </ul>
                  </div>
                  <div class="pricing-footer">
                    <a href="#/" class="btn btn-gray">Start Now</a>
                  </div>
                </div>
                <!--== End Pricing Item ==-->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Pricing Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area blog-default-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2 class="title text-uppercase"><span>Latest</span> Post</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="blog-content-area">
              <div class="swiper-container blog-slider-container">
                <!-- Add Arrows -->
                <div class="swiper-button-next"><i class="lnr lnr-arrow-right"></i></div>
                <div class="swiper-button-prev"><i class="lnr lnr-arrow-left"></i></div>
                <div class="swiper-wrapper blog-slider">
                  <!--== Start Blog Post Item ==-->
                  <div class="swiper-slide post-item">
                    <div class="thumb">
                      <a href="blog-details.html"><img src="{{asset('front-assets')}}/img/blog/01.jpg" alt="Roomedia-Blog"></a>
                      <a class="icon" href="blog-details.html">
                        <i class="lnr lnr-camera-video"></i>
                      </a>
                    </div>
                    <div class="content">
                      <h4 class="title">
                        <a href="blog-details.html">Your Brand’s Next On Social Media</a>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur cora</p>
                      <div class="meta bottom meta-bottom">
                        <div>
                          <a class="category" href="blog.html"><img class="icon-img" src="{{asset('front-assets')}}/img/icons/layer.png"
                              alt="Icon"> In <span>News</span></a>
                          <a class="post-date" href="blog.html"><img class="icon-img"
                              src="{{asset('front-assets')}}/img/icons/calender.png" alt="Icon"> 16/4/2021</a>
                        </div>
                        <div class="post-share">
                          <a class="icon-share" href="#/"><img class="icon-img" src="{{asset('front-assets')}}/img/icons/share.png"
                              alt="Icon"></a>
                          <ul>
                            <li><a class="color-facebook" href="#/"><i class="social_facebook"></i></a></li>
                            <li><a class="color-twitter" href="#/"><i class="social_twitter"></i></a></li>
                            <li><a class="color-dribbble" href="#/"><i class="social_dribbble"></i></a></li>
                            <li><a class="color-pinterest" href="#/"><i class="social_pinterest"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Post Item ==-->

                  <!--== Start Blog Post Item ==-->
                  <div class="swiper-slide post-item">
                    <div class="thumb">
                      <a href="blog-details.html"><img src="{{asset('front-assets')}}/img/blog/02.jpg" alt="Roomedia-Blog"></a>
                      <a class="icon" href="blog-details.html">
                        <i class="lnr lnr-volume-high"></i>
                      </a>
                    </div>
                    <div class="content">
                      <h4 class="title">
                        <a href="blog-details.html">Sample Articles With Long Text Lorem Ispum</a>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur cora adipiscing elit....</p>
                      <div class="meta bottom meta-bottom">
                        <div>
                          <a class="category" href="blog.html"><img class="icon-img" src="{{asset('front-assets')}}/img/icons/layer.png"
                              alt="Icon"> In <span>Business</span></a>
                          <a class="post-date" href="blog.html"><img class="icon-img"
                              src="{{asset('front-assets')}}/img/icons/calender.png" alt="Icon"> 16/4/2021</a>
                        </div>
                        <div class="post-share">
                          <a class="icon-share" href="#/"><img class="icon-img" src="{{asset('front-assets')}}/img/icons/share.png"
                              alt="Icon"></a>
                          <ul>
                            <li><a class="color-facebook" href="#/"><i class="social_facebook"></i></a></li>
                            <li><a class="color-twitter" href="#/"><i class="social_twitter"></i></a></li>
                            <li><a class="color-dribbble" href="#/"><i class="social_dribbble"></i></a></li>
                            <li><a class="color-pinterest" href="#/"><i class="social_pinterest"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Post Item ==-->

                  <!--== Start Blog Post Item ==-->
                  <div class="swiper-slide post-item">
                    <div class="thumb">
                      <a href="blog-details.html"><img src="{{asset('front-assets')}}/img/blog/03.jpg" alt="Roomedia-Blog"></a>
                    </div>
                    <div class="content">
                      <h4 class="title">
                        <a href="blog-details.html">Sample Articles With Long Text Lorem Ispum</a>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur cora adipiscing elit. Quisque vel...</p>
                      <div class="meta bottom meta-bottom">
                        <div>
                          <a class="category" href="blog.html"><img class="icon-img" src="{{asset('front-assets')}}/img/icons/layer.png"
                              alt="Icon"> In <span>Business</span></a>
                          <a class="post-date" href="blog.html"><img class="icon-img"
                              src="{{asset('front-assets')}}/img/icons/calender.png" alt="Icon"> 16/4/2021</a>
                        </div>
                        <div class="post-share">
                          <a class="icon-share" href="#/"><img class="icon-img" src="{{asset('front-assets')}}/img/icons/share.png"
                              alt="Icon"></a>
                          <ul>
                            <li><a class="color-facebook" href="#/"><i class="social_facebook"></i></a></li>
                            <li><a class="color-twitter" href="#/"><i class="social_twitter"></i></a></li>
                            <li><a class="color-dribbble" href="#/"><i class="social_dribbble"></i></a></li>
                            <li><a class="color-pinterest" href="#/"><i class="social_pinterest"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Post Item ==-->

                  <!--== Start Blog Post Item ==-->
                  <div class="swiper-slide post-item">
                    <div class="thumb">
                      <a href="blog-details.html"><img src="{{asset('front-assets')}}/img/blog/04.jpg" alt="Roomedia-Blog"></a>
                      <a class="icon" href="blog-details.html">
                        <i class="lnr lnr-volume-high"></i>
                      </a>
                    </div>
                    <div class="content">
                      <h4 class="title">
                        <a href="blog-details.html">Your Brand’s Next On Social Media</a>
                      </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur cora adipiscing elit....</p>
                      <div class="meta bottom meta-bottom">
                        <div>
                          <a class="category" href="blog.html"><img class="icon-img" src="{{asset('front-assets')}}/img/icons/layer.png"
                              alt="Icon"> In <span>Business</span></a>
                          <a class="post-date" href="blog.html"><img class="icon-img"
                              src="{{asset('front-assets')}}/img/icons/calender.png" alt="Icon"> 16/4/2021</a>
                        </div>
                        <div class="post-share">
                          <a class="icon-share" href="#/"><img class="icon-img" src="{{asset('front-assets')}}/img/icons/share.png"
                              alt="Icon"></a>
                          <ul>
                            <li><a class="color-facebook" href="#/"><i class="social_facebook"></i></a></li>
                            <li><a class="color-twitter" href="#/"><i class="social_twitter"></i></a></li>
                            <li><a class="color-dribbble" href="#/"><i class="social_dribbble"></i></a></li>
                            <li><a class="color-pinterest" href="#/"><i class="social_pinterest"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--== End Blog Post Item ==-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->

    <!--== Start Divider Area Wrapper ==-->
    <section class="divider-area newsletter-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-lg-12">
            <div class="newsletter-content text-center">
              <div class="row">
                <div class="col-lg-6 m-auto">
                  <div class="section-title">
                    <h2 class="title text-uppercase"><span>Our</span> Newsletter</h2>
                  </div>
                  <form class="input-btn-group">
                    <input class="form-control no-border" type="text" placeholder="Your Email">
                    <button class="btn btn-theme" type="button">subscribe</button>
                  </form>
                </div>
              </div>
              <img class="bg-shape-img" src="{{asset('front-assets')}}/img/shape/bg-shape-01.png" alt="Image">
            </div>
          </div>
        </div>
        <div class="shape-layer">
          <div class="shape shape-one"></div>
          <div class="shape shape-two"></div>
          <div class="shape shape-three"></div>
          <div class="shape shape-four"></div>
          <div class="shape shape-five"></div>
          <div class="shape shape-six"></div>
          <div class="shape shape-seven"></div>
          <div class="shape shape-eight"></div>
        </div>
      </div>
    </section>
    <!--== End Divider Area Wrapper ==-->
  </main>

  <!--== Start Footer Area Wrapper ==-->
  <footer class="footer-area reveal-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 col-xl-3">
          <div class="widget-item mt-0">
            <div class="about-widget">
              <a class="footer-logo" href="index.html">
                <img src="{{asset('front-assets')}}/img/logo.png" alt="Logo">
              </a>
            </div>
            <div class="widget-copyright">
              <p>© 2025 <span>RooMedia</span>. <br>Made with <i class="icon_heart"></i> by <a target="_blank"
                  href="https://www.hasthemes.com">HasThemes</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-4">
          <div class="widget-item sm-pl-0 pl-70">
            <h4 class="widget-title">Contact</h4>
            <ul class="widget-contact-info">
              <li class="info-address">258 Orchad St, London, United Kingdom</li>
              <li class="info-mail"><a href="mailto://hello@roomedia.com">hello@roomedia.com</a></li>
              <li class="info-phone"><a href="tel://(605)2305253">(605) 230-5253</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-10 col-lg-5 col-xl-5">
          <div class="widget-item widget-menu-wrap-item">
            <nav class="widget-menu-wrap">
              <ul class="nav-menu nav-menu-three nav">
                <li><a href="index.html">Pages</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="portfolio.html">Projects</a></li>
                <li><a href="blog.html">Blog</a></li>
              </ul>
            </nav>
            <div class="widget-social-icons social-icons-style-three">
              <a href="#"><i class="social social_facebook"></i></a>
              <a href="#"><i class="social social_twitter"></i></a>
              <a href="#"><i class="social social_pinterest"></i></a>
              <a href="#"><i class="social social_vimeo"></i></a>
              <a href="#"><i class="social social_share"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="layer-shape">
      <img class="layer-shape-two" src="{{asset('front-assets')}}/img/shape/foooter-shape-02.png" alt="Boseo-Image">
      <img class="layer-shape-one" src="{{asset('front-assets')}}/img/shape/foooter-shape-01.png" alt="Boseo-Image">
    </div>
  </footer>
  <!--== End Footer Area Wrapper ==-->

  <!--== Scroll Top Button ==-->
  <div class="scroll-to-top"><span class="lnr lnr-chevron-up"></span></div>

  <!--== Start Side Menu ==-->
  <aside class="off-canvas-wrapper">
    <div class="off-canvas-inner">
      <div class="off-canvas-overlay"></div>
      <!-- Start Off Canvas Content Wrapper -->
      <div class="off-canvas-content">
        <!-- Off Canvas Header -->
        <div class="off-canvas-header">
          <div class="logo-area">
            <a href="index.html"><img src="{{asset('front-assets')}}')}}/img/logo.png" alt="Logo" /></a>
          </div>
          <div class="close-action">
            <button class="btn-close"><i class="lnr lnr-cross"></i></button>
          </div>
        </div>

        <div class="off-canvas-item">
          <!-- Start Mobile Menu Wrapper -->
          <div class="res-mobile-menu menu-active-one">
            <!-- Note Content Auto Generate By Jquery From Main Menu -->
          </div>
          <!-- End Mobile Menu Wrapper -->
        </div>
        <!-- Off Canvas Footer -->
        <div class="off-canvas-footer"></div>
      </div>
      <!-- End Off Canvas Content Wrapper -->
    </div>
  </aside>



@stop