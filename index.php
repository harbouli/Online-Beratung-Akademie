<?php 


$Your_email = "info@onlineberatungakademie.com";


    if (isset($_POST["Touch"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message_customer = $_POST["message"];
      
        $subject = 'your subject';

        $message =
        "
        customer Name : $name

        Email: $email

        Message: $email

";
    }

    if (isset($_POST["consultants"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    
    $subject = 'your subject';

    $message =
    "
    customer Name : $name
   
    Email: $email
   
    Phone Number: $phone_number
   
   
   ";

    }
if (isset($_POST["consultants"]) || isset($_POST["Touch"])) {
$headers = "From: $Your_email". phpversion();
mail($Your_email, $subject, $message, $headers);

    }


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Online Beratung Akademie</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--
    
TemplateMo 557 Grad School
https://templatemo.com/tm-557-grad-school
-->
  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <img src="assets/images/Logo.png" height="50" width="100%"alt="logo" >
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li ><a href="#section2">About Us</a>
        </li>
        <li><a href="#section4">Updates</a></li>
        <!-- <li><a href="#section5">Video</a></li> -->
        <li><a href="#section6">Contact</a></li>
        <!-- <li><a href="https://templatemo.com" class="external">External</a></li> -->
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              
              <h2><em>Your</em> way to German</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#section6">Get In Touch</a></div>
              </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>All Courses</h4>
              </div>
              <div class="content-hide">
                <p>
                  <br>-A1 course
                  <br>-A2 course
                  <br>-B1 course
                  <br>-B2 course
                  <br>-Preparation
                </p>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Working hours</h4>
              </div>
              <div class="content-hide">
                <p>
                  <br>Monday
                  <br>9:00 - 13:00
                  <br>Tuesday
                  <br>9:00 - 13:00
                  <br>Wednesday
                  <br>9:00 - 13:00
                  <br>Thursday
                  <br>9:00 - 13:00
                  <br>Friday
                  <br>9:00 - 13:00
                </p>
                
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Real Meeting</h4>
              </div>
              <div class="content-hide">
                <p>
                <br>Monday 15:00 - 20:00
                <br>Tuesday 15:00 - 20:00
                <br>Wednesday 15:00 - 20:00
                <br>Thursday 15:00 - 20:00
                <br>Friday 16 :00 - 21:00</p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why Online Beratung Akademie?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Best Education</a></li>
              <li><a href='#tabs-2'>Top Management</a></li>
              <li><a href='#tabs-3'>Quality Meeting</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-01.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Best Education</h4>
                    <p>Online Beratung Akademie is an educational platform, where you learn german in all levels A1 , A2, B1, B2 . The
preparations are also affordable for you . You will pass the exams with confidence.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-02.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Top Level</h4>
                  <p>Our Akademie is always concerned about the future of our Students . We give the exact info , the right choice , and
                  always motivated.</p>  
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-03.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Quality Meeting</h4>
<p>You will be always surrounded by our professionals .You will be answered about all your questions , worries, fears . We
are here for you. Don't hesitate to contact us.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4>Fill In The <em>Formuler</em> and be one of our community</h4>
              <div class="counter">

                <div class="days">
                  <div class="value">10</div>
                  <span>Consultants</span>
                </div>

                <div class="hours">
                  <div class="value">20</div>
                  <span>Services</span>
                </div>

                <div class="minutes">
                  <div class="value">234</div>
                  <span>Students</span>
                </div>

                <div class="seconds">
                  <div class="value">785</div>
                  <span>Visitors</span>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Register  <em>free </em>and get immediate access to our consultants</h6>
            </div>
            <form id="contact" action="thx.php" method="POST">
              <div class="row">
                <div class="col-md-12">
                 
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="phone_number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" name="consultants" id="form-submit" class="button">Send</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="section4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Future is our CONCERN</h2>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="assets/images/courses-01.jpg" alt="Course #1">
            <div class="down-content">
              <p>What awaits you
              <br>-You prepare or carry out chemical tests and test series
              <br>-You analyze substances, separate mixtures of substances and produce chemical substances
              <br>-You document your work and evaluate the logged results</p>
              
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-02.jpg" alt="Course #2">
            <div class="down-content">
              <p>German restaurants and inns are running out of young chefs. The number of young people completing an apprenticeship as a
              chef has almost halved since 2007 to currently around 23,000. According to figures from the Association of German
              Chambers of Industry and Commerce (DIHK), only 9750 young people took up training as cooks last year - and many dropped
              out again.</p>
              
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-03.jpg" alt="Course #3">
            <div class="down-content">
              <p>According to Christine Vogler, President of the German Nursing Council (DPR), there is a shortage of 200,000 nurses in
              Germany today. By 2030, when the number of people in need of care is expected to be 5.1 million8, a further 300,000
              nurses will be needed. The additional demand should then amount to a total of 500,000 jobs, according to Vogler. The
              Bertelsmann Stiftung's 2030 Nursing Report also comes up with the same number. on the other hand, assumes a total demand
              of 493,603 inpatient and outpatient nurses by 2035.</p>
              
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-04.jpg" alt="Course #4">
            <div class="down-content">
              <p>The training as an IT specialist is offered in four main areas: IT specialist for application development, IT specialist
              for system integration, IT specialist for digital networking and IT specialist for data and process analysis. The last
              two disciplines were added in the summer of 2020. The background is the reorganization of the IT professions. You
              usually decide on the respective specialization at the beginning of the training.</p>
             
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-05.jpg" alt="">
            <div class="down-content">
              <p>You should bring that with you.
              <br>
              -Enjoyment of technical tasks
              <br>
              -Craftsmanship
              <br>
              -Reliable and accurate way of working
              <br>
              -Desire to work on the future of mobility
              <br>
              -Interest in math and physics
              <br>
              -Qualifying degree from the middle school/Hauptschule or Mittlere Reife</p></p>
             
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-06.jpg" alt="">
            <div class="down-content">
              <p>This is a monthly income between 2,000 EUR and 4,167 EUR gross. On average, the annual salary as a merchant is thus EUR
              30,972 gross. Half of the wages and salaries collected are above EUR 31,000 gross, which means a monthly salary of EUR
              2,583 gross.</p>
             
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-07.jpg" alt="">
            <div class="down-content">
              <p>MAWISTA GmbH
              MAWISTA is a market leader in Germany for individually tailored health insurance plans for temporary stays abroad.
              
              The products meet the individual needs of international students, expats and tourists, offering up to 5 years of
              insurance cover. We have the right health insurance for both people travelling to Germany as well as Germans staying
              abroad.
              
              MAWISTA has worked with Allianz Partners since 2003, one of the world’s leading international travel insurers.</p>
             
            </div>
          </div>
          <div class="item">
            <img src="assets/images/courses-08.jpg" alt="">
            <div class="down-content">
              <p>FOR UNIVERSITIES
              At its core, the uni-assist procedure is based on the practical know-how of a "master plan group" consisting of
              admission office workers from the founding universities of uni-assist. Today, uni-assist is an established presence and
              centre of excellence for the evaluation of international student applications in the realm of university education. The
              concept of active participation by member universities remains the central concept of uni-assist's work. They are vital
              partners in the constant development of our work on many levels.</p>
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  

  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>our presentation is for you</span>
            <h4>Watch the video and discover <em>Germany</em></h4>
<p>Germany , officially the Federal Republic of Germany,is a country in Central Europe. It is the second most populous
country in Europe after Russia, and the most populous member state of the European Union. Germany is situated between
the Baltic and North seas to the north, and the Alps to the south; it covers an area of 357,022 square kilometres
(137,847 sq mi), with a population of almost 84 million within its 16 constituent states. Germany borders Denmark to the
north, Poland and the Czech Republic to the east, Austria and Switzerland to the south, and France, Luxembourg, Belgium,
and the Netherlands to the west. The nation's capital and largest city by population is Berlin and its financial centre
is Frankfurt; the largest urban area is the Ruhr.</p>
          </div>
        </div>
        <div class="col-md-6">
          <article class="video-item">
            
            <figure>
              <a href="https://www.youtube.com/watch?v=6dvX_ncLIRg" class="play"><img src="assets/images/main-thumb.jpg"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">
        
        <!-- Do you need a working HTML contact-form script?
                	
                    Please visit https://templatemo.com/contact page -->
                    
          <form id="contact" action="thx.php" method="post">
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <input name="name_contact" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="email_contact" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message_contact" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" name="Touch" id="form-submit" class="button">Send Message Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div id="map">
            <img src="assets/images/Contact-us.jpg" width="100%" height="422px" alt="Contact Us" >
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2022 by Online Beratung akademie
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      // const formSubm = document.getElementById('contact')
      // formSubm.addEventListener('submit',(e)=>{
      //   e.preventDefault()
      // })



        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>


