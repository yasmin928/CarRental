<!doctype html>
<html lang="en">

  <head>
    <title>CarRental </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{asset('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

  </head>

  <body>

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3">
              <div class="site-logo">
                <a href=""><strong>CarRental</strong></a>
              </div>
            </div>

            <div class="col-9  text-right">
              
              <span class="d-inline-block d-lg-none"><a href="#" class=" site-menu-toggle js-menu-toggle py-5 "><span class="icon-menu h3 text-black"></span></a></span>

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
                  <li><a href="{{ route('listing') }}" class="nav-link">Listing</a></li>
                  <li><a href="{{ route('testimonials') }}" class="nav-link">Testimonials</a></li>
                  <li><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                  <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                  <li><a href="{{ route('contact.store') }}" class="nav-link">Contact</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>
        @if (Route::has('login'))
          <nav class="-mx-3 flex flex-1 justify-end">
          @auth
          <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
          dashboard</a>
        @else
          <a href="{{ route('login') }}"  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
          Log in</a>
          @if (Route::has('register'))                                        
          <a href="{{ route('admin.register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Register</a>
                                        
        @endif
          @endauth
        </nav>
          @endif                       
    </header>

      
      <div class="hero" style="background-image: url('{{asset('images/hero_1_a.jpg')}}');">
        
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-10">

              <div class="row mb-5">
                <div class="col-lg-7 intro">
                <h1>
                    <strong>Rent a car</strong><br>
                    is within your fingertips.
                </h1>
                </div>
              </div>
              
              <form class="trip-form">
                
                <div class="row align-items-center">
                  
                  <div class="mb-3 mb-md-0 col-md-3">
                    <select name="" id="" class="custom-select form-control">
                      <option value="">Select Type</option>
                      <option value="">Ferrari</option>
                      <option value="">Toyota</option>
                      <option value="">Ford</option>
                      <option value="">Lamborghini</option>
                    </select>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-3">
                    <div class="form-control-wrap">
                      <input type="text" id="cf-3" placeholder="Pick up" class="form-control datepicker px-3">
                      <span class="icon icon-date_range"></span>

                    </div>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-3">
                    <div class="form-control-wrap">
                      <input type="text" id="cf-4" placeholder="Drop off" class="form-control datepicker px-3">
                      <span class="icon icon-date_range"></span>
                    </div>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-3">
                    <input type="submit" value="Search Now" class="btn btn-primary btn-block py-3">
                  </div>
                </div>
                
              </form>

            </div>
          </div>
        </div>
      </div>
  


      <div class="site-section">
        <div class="container">
          <h2 class="section-heading"><strong>How it works?</strong></h2>
          <p class="mb-5">Easy steps to get you started</p>    

          <div class="row mb-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="step">
                <span>1</span>
                <div class="step-inner">
                  <span class="number text-primary">01.</span>
                  <h3>Select a car</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="step">
                <span>2</span>
                <div class="step-inner">
                  <span class="number text-primary">02.</span>
                  <h3>Fill up form</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="step">
                <span>3</span>
                <div class="step-inner">
                  <span class="number text-primary">03.</span>
                  <h3>Payment</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 mx-auto">
              <a href="#" class="d-flex align-items-center play-now mx-auto">
                <span class="icon">
                  <span class="icon-play"></span>
                </span>
                <span class="caption">Video how it works</span>
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="site-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 text-center order-lg-2">
              <div class="img-wrap-1 mb-5">
                <img src="{{asset('images/feature_01.png')}}" alt="Image" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-4 ml-auto order-lg-1">
              <h3 class="mb-4 section-heading"><strong>You can easily avail our promo for renting a car.</strong></h3>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, explicabo iste a labore id est quas, doloremque veritatis! Provident odit pariatur dolorem quisquam, voluptatibus voluptates optio accusamus, vel quasi quidem!</p>
              
              <p><a href="#" class="btn btn-primary">Meet them now</a></p>
            </div>
          </div>
        </div>
      </div>

      

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Car Listings</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>
        

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="{{asset('images/car_6.jpg')}}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <h3>Mitsubishi Pajero</h3>
                <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">8</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">4</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">4</span>
                  </div>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum, voluptatem quibusdam.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="{{asset('images/car_5.jpg')}}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <h3>Nissan Moco</h3>
                <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">8</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">4</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">4</span>
                  </div>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum, voluptatem quibusdam.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div>
          

          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="{{asset('images/car_4.jpg')}}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <h3>Honda Fitta</h3>
                <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">8</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">4</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">4</span>
                  </div>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum, voluptatem quibusdam.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="{{asset('images/car_3.jpg')}}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <h3>Skoda Laura</h3>
                <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">8</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">4</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">4</span>
                  </div>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum, voluptatem quibusdam.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="{{asset('images/car_2.jpg')}}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <h3>Mazda LaPuta</h3>
                <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">8</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">4</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">4</span>
                  </div>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum, voluptatem quibusdam.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div>
          

          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="{{asset('images/car_1.jpg')}}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-100">
                <h3>Buick LaCrosse</h3>
                <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">8</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">4</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">4</span>
                  </div>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum, voluptatem quibusdam.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Features</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 mb-5">
            <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="icon-home"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                <p class="mb-0"><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="icon-gear"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                <p class="mb-0"><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="icon-watch_later"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                <p class="mb-0"><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5">
            <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="icon-verified_user"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                <p class="mb-0"><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="icon-video_library"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                <p class="mb-0"><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-5">
            <div class="service-1 dark">
              <span class="service-1-icon">
                <span class="icon-vpn_key"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
                <p class="mb-0"><a href="#">Learn more</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Testimonials</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">Mike Fisher</span>
                  <span>Owner, Ford</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">Jean Stanley</span>
                  <span>Traveler</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="{{asset('images/person_3.jpg')}}" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">Katie Rose</span>
                  <span >Customer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-primary py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-4 mb-md-0">
            <h2 class="mb-0 text-white">What are you waiting for?</h2>
            <p class="mb-0 opa-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
          </div>
          <div class="col-lg-5 text-md-right">
            <a href="#" class="btn btn-primary btn-white">Rent a car now</a>
          </div>
        </div>
      </div>
    </div>

      
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h2 class="footer-heading mb-4">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              <ul class="list-unstyled social">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
              </ul>
            </div>
            <div class="col-lg-8 ml-auto">
              <div class="row">
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Quick Links</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Resources</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Support</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-4">Company</h2>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
              <div class="border-top pt-5">
                <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
              </div>
            </div>

          </div>
        </div>
      </footer>

    </div>

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>

    <script src="{{asset('js/main.js')}}"></script>

  </body>

</html>
