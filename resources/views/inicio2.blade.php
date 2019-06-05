<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CKALAMA &mdash; Ciudad Oasis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="{{ asset('template2/fonts/icomoon/style.css') }}">


    <link rel="stylesheet" href="{{ asset('template2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template2/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template2/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('template2/fonts/flaticon/font2/flaticon.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('template2/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('template2/css/style.css') }}">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-xl-3">
              <img src="{{ asset('template2/images/logockalamaweb.png') }}" alt="Image" class="img-fluid">
            <!-- <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">CKALAMA</a></h1> -->
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li>
                  <a href="#">¿Donde Dormir?&nbsp&nbsp&nbsp</a>
                </li>
                <li><a href="#">¿Que hacer?&nbsp&nbsp&nbsp</a></li>
                <li><a href="#">¿Donde Comer?&nbsp&nbsp&nbsp</a></li>
                <li><a href="#">¿Donde ir?&nbsp&nbsp&nbsp</a></li>
                
                <li><a href="contact.html">Unete&nbsp&nbsp&nbsp</a></li>
                <!-- <li><a href="booking.html">Book Online</a></li> -->
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-1 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">

                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
                </li>
                
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

  

   

    <div class="slide-one-item home-slider owl-carousel">    
      <div class="site-blocks-cover overlay" style="background-image: url({{ asset('template2/images/intro1.png') }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h3 class="text-white font-weight-light">Bienvenido a CKALAMA</h3>
              <p class="mb-5">Desde tiempos ancestrales, Calama ha sido un lugar de transito, descanso y activo comercio entre el Altiplano y la costa. Acá se reunen personas provenientes de todo el país, gente de países vecinos y la comunidad Atacameña local, dando vida así, a un verdadera capital multicultural.</p>             
            </div>
          </div>
        </div>
      </div>  
      <div class="site-blocks-cover overlay" style="background-image: url({{ asset('template2/images/intro2.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <h2 class="text-white font-weight-light">Disfruta de la ciudad</h2>
              <p class="mb-5"></p>
              
            </div>
          </div>
        </div>
      </div>  
    </div>


    <div class="site-section">      
      <div class="container overlap-section">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="{{ asset('template2/images/rutaAs3.jpg') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Ruta Historica</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="{{ asset('template2/images/filete-quinoa-1030x601.jpg') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Ruta Gastronomica</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <a href="#" class="unit-1 text-center">
              <img src="{{ asset('template2/images/rutaHisto3.jpg') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <h3 class="unit-1-heading">Ruta Ancestral</h3>
              </div>
            </a>
          </div>
        </div>
      </div>  
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-hotel"></span></div>
              <div>
                <h3>Hoteles</h3>
                <p>Visita los mejores Hoteles de la zona.</p>
                <p><a href="#">Ver más</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-fork"></span></div>
              <div>
                <h3>Restaurantes</h3>
                <p>Disfruta de excelente comida de la zona.</p>
                <p><a href="#">Ver más</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-vase"></span></div>
              <div>
                <h3>Artesanias</h3>
                <p>Conoce todo tipo de artesania elaborada con materia prima de la zona</p>
                <p><a href="#">Ver más</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-bread"></span></div>
              <div>
                <h3>Bazares</h3>
                <p>Disfruta de los platos tipicos del desierto de atacama</p>
                <p><a href="#">Ver más</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <div class="site-section block-13 bg-light">
    <div class="container ">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center">
          <h2 class="font-weight-light text-black">Sitios de Ckalama</h2>
          <p class="color-black-opacity-5">Conoce los mejores lugares turisticos de calama &amp; sus alrededores</p>
        </div>
      </div>

        <div class="nonloop-block-13 owl-carousel">
          <div class="item">
            <div class="row mb-3 align-items-stretch">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{ asset('template2/images/hero_bg_1.jpg') }}" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
                  <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div> 
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{ asset('template2/images/hero_bg_1.jpg') }}" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
                  <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div> 
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{ asset('template2/images/hero_bg_2.jpg') }}" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
                  <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row mb-3 align-items-stretch">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{ asset('template2/images/hero_bg_1.jpg') }}" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
                  <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div> 
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{ asset('template2/images/hero_bg_1.jpg') }}" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
                  <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div> 
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="h-entry">
                  <img src="{{ asset('template2/images/hero_bg_2.jpg') }}" alt="Image" class="img-fluid">
                  <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
                  <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section">
      
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Visita nuestros sitios turisticos</h2>
            <p class="color-black-opacity-5">Choose Your Next Destination</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="{{ asset('template2/images/01-greece.jpg') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="mb-2 d-block">$590</strong>
                <h3 class="unit-1-heading">Santorini, Greece</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="{{ asset('template2/images/02-rome.jpg') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$390</strong>
                <h3 class="unit-1-heading">Rome, Italy</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="{{ asset('template2/images/03-japan.jpg') }}" alt="Image" class="img-fluid">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block">$390</strong>
                <h3 class="unit-1-heading">Mount Fuji, Japan</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    
    </div>

    <!-- <div class="site-section bg-light">
      
    </div> -->


    <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url({{ asset('template2/images/intro1.png')}}); background-attachment: fixed;">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-7" data-aos="fade-up" data-aos-delay="400">
            <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
            <h2 class="text-white font-weight-light mb-5 h1">Vive Calama</h2>
            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Our Services</h2>
            <p class="color-black-opacity-5">We Offer The Following Services</p>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-airplane"></span></div>
              <div>
                <h3>Air Ticketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ship"></span></div>
              <div>
                <h3>Cruises</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary flaticon-route"></span></div>
              <div>
                <h3>Tour Packages</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About Travelers</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
            </div>

            
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Destination</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">About</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Discounts</a></li>
                </ul>
              </div>
            </div>

            

          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
           

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
                  </div>
                </div>
              </form>

            </div>

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-5">
              <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>

            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>


  <script src="{{ asset('template2/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('template2/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('template2/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('template2/js/popper.min.js') }}"></script>
  <script src="{{ asset('template2/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template2/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('template2/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('template2/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('template2/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('template2/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('template2/js/aos.js') }}"></script>

  <script src="{{ asset('template2/js/main.js') }}"></script>
    
  </body>
</html>