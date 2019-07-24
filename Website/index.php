<!DOCTYPE html>
<html lang="eng">

<meta name="viewport" content="width=device-width">
<meta name="theme-color" content="#00bff3" />
<meta name="apple-mobile-web-app-status-bar-style" content="#00bff3">
<!--end-->
<?php include('include/head.php');	?>


<body>
<style>
.gif_loader_image {
    position: fixed;
    top: 0;
    text-align: center;
    width: 100%;
    z-index: 999;
    background: #fff;
    height: 100%;
    bottom: 0;
}
.gif_loader_image {
    transition: opacity 0.5s ease;
}
.gif_loader_image img {
    margin: 0 auto;
    display: inline-block;
    position: relative;
    top: 40%;
    max-width: 60px;
}
</style>
<script src="js/jquery-2.2.4.min.js"></script> 
<script>
   $('head').load("head.html");
 $(window).load(function() {
	 setTimeout(function(){
	       $('.gif_loader_image').css({"opacity":"0", "display":"none"});}, 3000);
       $('.mainwrapper').css("opacity", "1"), 5000;
	});
</script>
<div class="gif_loader_image">
	<img src="images/loder.gif">
</div>	
<div class="mainwrapper" id="myDiv"> 
  <!--header-->
  <?php include('include/header.php');	?>
  <!--end-->
  <div class="wrapper"> 
    <!--banner-->
    <section class="banner">
      <div class="slider">
        <div class="slide"> <a href=""> <img src="images/banner1.jpg" class="img-responsive" /> 
          <div class="banner-text">
            <p>Secure <span>a job in</span> Core Domain</p>
          </div>
          </a> 
      </div>
        <div class="slide"> <a href=""><img src="images/banner2.jpg" class="img-responsive" />
          <div class="banner-text">
            <p>Corporate Training</p>
          </div>
          </a>
        </div>
        <div class="slide"> <a href=""><img src="images/banner3.jpg" class="img-responsive" />
          <div class="banner-text">
            <p>Secure <span>a job in</span> Core Domain</p>
          </div>
          </a> 
        </div>
        <div class="slide"> <a href=""><img src="images/banner2.jpg" class="img-responsive" />
           <div class="banner-text">
            <p>Secure <span>a job in</span> Core Domain</p>
          </div>
        </a> </div>
        <div class="slide"> <a href=""><img src="images/banner1.jpg" class="img-responsive" />
           <div class="banner-text">
            <p>Secure <span>a job in</span> Core Domain</p>
          </div>
        </a> </div>
      </div>
    </section>
    
    <!--About Section-->
    <section class="aboutsec">
      <div class="container-fluid row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="about_heading padding-120"> <span>About us</span>
            <h2>Linux Kernel Foundation</h2>
            <p>
          Linux Kernel Foundation is a pioneer in Technical Training & Education services in EMBEDDED, DSP & WEB TECHNOLOGIES with over 20 years of acclaimed expertise. We have well established long term relationships as a trusted training partner with more than 5000 reputed organizations in the domains of Academia, Corporate and Defence.
        Having built a reputation as leading training providers, we now extend our training domains to emerging industry trends like Big Data Analytics, IOT &amp; Cloud Computing.</p>
            <p>A pioneering Education &amp; Training provider of Industry-focused Tools, Skills enhancement and post-professional Technical knowledge for engineers, Academia &amp;business enterprises in Embedded, IOT, VLSI technologies &amp; Software Application areas.</p>
            <a href="about.html">Read more</a> </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 padding-0">
          <div class="about_img break"> <img src="images/aboutimg.jpg" class="img-responsive" alt="abot letsbegin"> </div>
        </div>
      </div>
    </section>
    
    <!--tranning section-->
    <section class="traning_sec">
      <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-6 col-sm-6 col-xs-12 pr-0">
            <div class="tan_left row">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6 col-sm-offset-6">
                <div class="max-space"> <a href="" class="traning-block">
                  <div class="tan_box"> <img src="images/exprince.png" />
                    <p>Experience Professional Training</p>
                  </div>
                  </a> </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="train_heading">
                  <h2>Training</h2>
                  <p>Linux Kernel Foundation is a reputed training institute in India located in Bengaluru, karnataka. We offer comprehensive certified job oriented Professional Diploma Courses, Corporate Training Programs, M.Tech/B.Tech Internship Programs, Academic Projects, Summer Training Certification Programs, Technical Workshops & Placement Oriented Training Program for engineering students. 
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 on-mobile">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="max-space"> <a href="" class="traning-block">
                  <div class="tan_box"> <img src="images/exprince.png" />
                    <p>Experience Professional Training</p>
                  </div>
                  </a> </div>
                </div>
              </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="max-space"> <a href="" class="traning-block">
                <div class="tan_box"> <img src="images/corporat.png" />
                  <p>Corporate Professional Training</p>
                </div>
                </a> </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="max-space"> <a href="" class="traning-block">
                <div class="tan_box"> <img src="images/fresher.png" />
                  <p>Freshers<br>
                    Training</p>
                </div>
                </a> </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="max-space"> <a href="" class="traning-block">
                <div class="tan_box"> <img src="images/project.png" />
                  <p>Projects</p>
                </div>
                </a> </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="max-space"> <a href="" class="traning-block">
                <div class="tan_box"> <img src="images/workshops.png" />
                  <p>Workshops</p>
                </div>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--features Section-->
    <section class="feature-sec">
      <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="center_head">
            <h1>features</h1>
            <h4>We're here to help you building your career</h4>
            <p>Just enroll our courses and boost your career in no time</p>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="features-tab">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#home">New Courses</a></li>
              <li><a data-toggle="tab" href="#menu1">Featured Courses</a></li>
              <li><a data-toggle="tab" href="#menu2">Popular Courses</a></li>
            </ul>
            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <div class="features-box row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="fet_box">
                        <div class="fet_img"> <img src="images/f1.jpg" class="img-responsive" /> <span><strike><i class="fa fa-rupee"></i> 1000</strike>&nbsp;&nbsp;<i class="fa fa-rupee"></i> 500</span> </div>
                        <div class="fet_text">
                          <h3>Modern C++</h3>
                          <h4><i class="fa fa-user"></i>Sunish Ram</h4>
                          <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>-->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="fet_box">
                        <div class="fet_img"> <img src="images/f2.jpg" class="img-responsive" /> <span>Free</span> </div>
                        <div class="fet_text">
                          <h3>Raspberry pi</h3>
                          <h4><i class="fa fa-user"></i>Tom Steven</h4>
                          <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>-->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="fet_box">
                        <div class="fet_img"> <img src="images/f3.jpg" class="img-responsive" /> <span><strike><i class="fa fa-rupee"></i> 1000</strike>&nbsp;&nbsp;<i class="fa fa-rupee"></i> 500</span> </div>
                        <div class="fet_text">
                          <h3>Motherboards</h3>
                          <h4><i class="fa fa-user"></i>Joe</h4>
                           <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>-->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="fet_box">
                        <div class="fet_img"> <img src="images/f4.jpg" class="img-responsive" /> <span>Free</span> </div>
                        <div class="fet_text">
                          <h3>Beagleboard </h3>
                          <h4><i class="fa fa-user"></i>Vivek Verma</h4>
                          <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>-->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="menu1" class="tab-pane fade">
                <div class="features-box row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="fet_box">
                        <div class="fet_img"> <img src="images/f1.jpg" class="img-responsive" /> <span><strike><i class="fa fa-rupee"></i> 1000</strike>&nbsp;&nbsp;<i class="fa fa-rupee"></i> 500</span> </div>
                        <div class="fet_text">
                          <h3>Hadoop</h3>
                          <h4><i class="fa fa-user"></i>Vicky Kaushal</h4>
                           <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>-->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="fet_box">
                        <div class="fet_img"> <img src="images/f2.jpg" class="img-responsive" /> <span>Free</span> </div>
                        <div class="fet_text">
                          <h3>Machine Learning</h3>
                          <h4><i class="fa fa-user"></i>Nitima Malsa</h4>
                           <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>-->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="fet_box">
                        <div class="fet_img"> <img src="images/f3.jpg" class="img-responsive" /> <span><strike><i class="fa fa-rupee"></i> 1000</strike>&nbsp;&nbsp;<i class="fa fa-rupee"></i> 500</span> </div>
                        <div class="fet_text">
                          <h3>Data Science with R</h3>
                          <h4><i class="fa fa-user"></i>Rakesh Singh</h4>
                          <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>-->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="fet_box">
                        <div class="fet_img"> <img src="images/f4.jpg" class="img-responsive" /> <span>Free</span> </div>
                        <div class="fet_text">
                          <h3>Agile / Scrum Methodology</h3>
                          <h4><i class="fa fa-user"></i>Manoj Kumar</h4>
                           <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>-->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="menu2" class="tab-pane fade">
                <div class="features-box row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="fet_box">
                        <div class="fet_img"> <img src="images/f1.jpg" class="img-responsive" /> <span><strike><i class="fa fa-rupee"></i> 1000</strike>&nbsp;&nbsp;<i class="fa fa-rupee"></i> 500</span> </div>
                        <div class="fet_text">
                          <h3>SQL Using Oracle</h3>
                          <h4><i class="fa fa-user"></i>Vasu Arora</h4>
                           <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>-->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="fet_box">
                        <div class="fet_img"> <img src="images/f2.jpg" class="img-responsive" /> <span>Free</span> </div>
                        <div class="fet_text">
                          <h3>C Sharp / .NET / ASP.NET</h3>
                          <h4><i class="fa fa-user"></i>Hemant Chaudhary</h4>
                          <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>-->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="fet_box">
                        <div class="fet_img"> <img src="images/f3.jpg" class="img-responsive" /> <span><strike><i class="fa fa-rupee"></i> 1000</strike>&nbsp;&nbsp;<i class="fa fa-rupee"></i> 500</span> </div>
                        <div class="fet_text">
                          <h3>Expert C Programming</h3>
                          <h4><i class="fa fa-user"></i>Kavita Bishnoi</h4>
                           <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>-->
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                      <div class="fet_box">
                        <div class="fet_img"> <img src="images/f4.jpg" class="img-responsive" /> <span>Free</span> </div>
                        <div class="fet_text">
                          <h3>Analytics for Beginner </h3>
                          <h4><i class="fa fa-user"></i>Ranjana singh</h4>
                           <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>-->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--<div class="col-md-12 col-sm-12 col-xs-12">
          <div class="round_btn"> <a href="">See All Courses</a> </div>
        </div>-->
      </div>
    </section>
    
    <!--placements section-->
    <section class="placement-section">
      <div class="container-fluid row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="center_head">
            <h1>Placements</h1>
            <p>Linux Kernel Foundation helped AMI to find technical capable students in Embedded domain. </p>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12  place-row">
          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="placebox"> <img src="images/placeicon1.png" class="img-responsive" />
              <h4>15+</h4>
              <p>Years ofExpertise</p>
            </div>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="placebox"> <img src="images/placeicon2.png" class="img-responsive" />
              <h4>3000+</h4>
              <p>Graduates Trainee</p>
            </div>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="placebox"> <img src="images/placeicon3.png" class="img-responsive" />
              <h4>2000+</h4>
              <p>Workshop Attendee</p>
            </div>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="placebox"> <img src="images/placeicon4.png" class="img-responsive" />
              <h4>1500+</h4>
              <p>Lab Setup</p>
            </div>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="placebox"> <img src="images/placeicon5.png" class="img-responsive" />
              <h4>1000+</h4>
              <p>Alumni</p>
            </div>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-6">
            <div class="placebox"> <img src="images/placeicon6.png" class="img-responsive" />
              <h4>12+</h4>
              <p>Clientele</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--recruters section-->
    <section class="recrut_section">
      <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h2>Prominent Recruiters</h2>
          <ul class="logos_list">
            <li> <span><img src="images/logo1.png" class="img-responsive" /></span> </li>
            <li> <span><img src="images/logo2.png" class="img-responsive" /></span> </li>
            <li> <span><img src="images/logo3.png" class="img-responsive" /></span> </li>
            <li> <span><img src="images/logo4.png" class="img-responsive" /></span> </li>
            <li> <span><img src="images/logo5.png" class="img-responsive" /></span> </li>
            <li> <span><img src="images/logo6.png" class="img-responsive" /></span> </li>
            <li> <span><img src="images/logo7.png" class="img-responsive" /></span> </li>
            <li> <span><img src="images/logo8.png" class="img-responsive" /></span> </li>
            <li> <span><img src="images/logo9.png" class="img-responsive" /></span> </li>
            <li> <span><img src="images/logo10.png" class="img-responsive" /></span> </li>
            <li> <span><img src="images/logo11.png" class="img-responsive" /></span> </li>
            <li> <span><img src="images/logo12.png" class="img-responsive" /></span> </li>
          </ul>
        </div>
      </div>
    </section>
    
    <!--online offering section-->
    <section class="offer_sec">
      <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="offring_img"> <img src="images/offerimg.png" class="img-responsive" /> </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="offring_text">
              <h2>Online Offerings</h2>
              <p>Linux Kernel Foundation is thriving to bring training in Embedded Systems, IOT, Data Analytics, DSP, Android, Java, Matlab, Big Data, Hadoop, Linux and VLSI into an online platform through live virtual classes. Using a unique learning methodology of live online interactive courses along with 24x7 support. We aim to empower our customers with skills which will help them upgrade their careers and improve their lives.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--testimonial-->
    
    <section class="banneruptext testimonial_sec">
      <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="center_head">
            <h1>testimonials</h1>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 test-block">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="testi_box">
              <h4>Placement Testimonials</h4>
              <div class="testiborder">
                <p>Kernel is one of the top embedded systems design training institutes in Bengaluru. The opportunities provided by the Cranes were great. </p>
                <h5>Tanya Gupta</h5>
                <span>Algosoft</span> </div>
              <div class="testimorebtn"> <a href="testimonial.html" title="readmore">Read more</a> </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="testi_box">
              <h4>Corporate Testimonials</h4>
              <div class="testiborder">
                <p>The Embedded Linux Training provided by Linux Kernel Foundation was really a knowledgeable session for our employees .</p>
                <h5>Tejaswi</h5>
                <span>L&amp;T</span> </div>
              <div class="testimorebtn"> <a href="testimonial.html" title="readmore">Read more</a> </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="testi_box">
              <h4>Academic Testimonials</h4>
              <div class="testiborder">
                <p>The Embedded Course by Linux Kernel Foundation was extremely useful to our students and the trainer made the course very interesting.</p>
                <h5>Nidhi</h5>
                <span>NIIT</span> </div>
              <div class="testimorebtn"> <a href="testimonial.html" title="readmore">Read more</a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--contact form section-->
    <section class="contact_sec">
      <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="new_head">
              <p>Latest News</p>
              <h2>News and Updates</h2>
            </div>
            <div class="news_block">
              <div class="news_box"> <span class="news_date">03 May</span> <span class="news_text"> <small>Open House Training</small>
                <p>We have pleasure in announcing  our Open House Training Calendar for the month of  June &amp; July. </p>
                </span> </div>
              <div class="news_box"> <span class="news_date">04 June</span> <span class="news_text"> <small>College Program - Faculty Development Program</small>
                <p>Linux is executing a FDP for Aligarh Muslim University at Cranes Varsity, Bangalore</p>
                </span> </div>
              <!--<div class="news_box"> <span class="news_date">13 july</span> <span class="news_text"> <small>College Program - Industrial Visit</small>
                <p>Linux has organized a Industrial Visit for final year CSE students of Dr. M. V. Shetty Institute of Technology College, Managlore</p>
                </span> </div>
              <div class="news_box"> <span class="news_date">23 July</span> <span class="news_text"> <small>Campus Drive</small>
                <p>Campus Drive - Upcoming Drives</p>
                </span> </div>
              <div class="news_box"> <span class="news_date">19 Aug</span> <span class="news_text"> <small> MATLAB, Simulink & State Flow</small>
                <p>Corporate Training Program for DRDO, Pune</p>
                </span> </div>
              <div class="news_box"> <span class="news_date">03 Sep</span> <span class="news_text"> <small>Placement Oriented Program</small>
                <p>Placement Oriented Program in  Er. Perumal Manimekalai College of Engineering, Hosur</p>
                </span> </div>
              <div class="news_box"> <span class="news_date">03 Nov</span> <span class="news_text"> <small>Corporate Training Program</small>
                <p>Corporate Training Program for a PSU in Bangalore </p>
                </span> </div>-->
              
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="conatct_form">
              <h2>Create an account<br> Sign Up Now </h2>
              <form action="" method="">
                <div class="form-group">
                  <input type="text" name="name" placeholder="Name" class="form-control effect-1" required />
                  <span class="focus-border"></span> </div>
                <div class="form-group">
                  <input type="email" name="email" placeholder="email" class="form-control effect-1" required />
                  <span class="focus-border"></span> </div>
                <div class="form-group">
                  <input type="text" name="name" placeholder="Select city" class="form-control effect-1" required />
                  <span class="focus-border"></span> </div>
                <div class="form-group">
                  <input type="text" name="name" placeholder="Subject" class="form-control effect-1" required />
                  <span class="focus-border"></span> </div>
                <div class="form-group">
                  <textarea class="form-control effect-1" placeholder="Your Enquiry" required rows="3"></textarea>
                  <span class="focus-border"></span> </div>
                <div class="form-group button_div">
                  <div class="btn_design">
                    <input type="submit" value="" placeholder="Submit" class="btn btn-default">
                    <span>Submit</span> </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--newsletter-->
    
    <section class="newsletter_sec">
      <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-4">
            <div class="subscribe-text mb-15">
              <h2>subscribe newsletter</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="subscribe-wrapper subscribe2-wrapper mb-15">
              <div class="subscribe-form">
                <form action="#">
                  <input placeholder="enter your email address" type="email">
                  <button>subscribe <i class="fas fa-long-arrow-alt-right"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--Footer sec-->
  <?php include('include/footer.php');	?>

</div>
<?php include('include/footer_script.php');	?>
</body>
</html>