<!DOCTYPE html>
<html lang="eng">
<?php include('include/head.php');	?>

<!--Body Start-->
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
<?php include('include/header.php');	?>
    <!--banner-->
    <section class="inbanner">
      <div class="in-slide">
        <div class="banner-img"> <a href=""><img src="images/training-banner.jpg" class="img-responsive" /></a> </div>
      </div>
    </section>
    <!--training page-->
    <section class="aboutsec traningpage_sec">
      <div class="container-fluid row">
        <div class="col-md-7 col-sm-7 col-xs-12">
          <div class="about_heading padding-120">
            <h2>India's top leading IT Professional Technical 
              training Institute</h2>
            <p>Linux Kernel Foundation is a reputed training institute in India located in Karnataka. We offer comprehensive certified job oriented Professional Diploma Courses, Corporate Training Programs, M.Tech/B.Tech Internship Programs, Academic Projects, Summer Training Certification Programs, Technical Workshops & Placement Oriented Training Program for engineering students. Our Engagement model provide Customized training program On-site, In-house & Online technical training / workshops for the Engineering College/Universities, research institutes, corporate and for working professionals.</p>
            <p>Linux Kernel Foundation provides professional training in Post Graduate Diploma in Embedded Systems Design & Development, Post Graduate Diploma in Internet of Things & Embedded Technology, Post Graduate Diploma in VLSI Design & Embedded Systems.</p>
            <p>All our courses are designed to meet industry requirements and their expectation. After completion of the training, students will be able to Evaluate, Design, Develop and Integrate Hardware / Software projects on their own and will be placed with reputed core companies.</p>
          </div>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12 padding-0">
          <div class="about_img break"> <img src="images/training-right.jpg" class="img-responsive" alt="abot letsbegin"> </div>
        </div>
      </div>
    </section>
    
    <!--traing tab-->
    <section class="traing-corstopic">
      <div class="container-fluid row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="tab_btn">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#coursesid">Courses</a></li>
              <li><a data-toggle="tab" href="#topicsid">Topics</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 padding-0">
          <div class="tab-content">
            <div id="coursesid" class="tab-pane fade in active">
              <div class="course_list">
                <div class="container">
                  <div class="row_repeat row">
                    <h1>Professional Diploma Training</h1>
                    <h3>Post Graduate Diploma Courses</h3>
                    <ul>
                      <li> <a href="">PG Diploma in Embedded System Design &amp; Development</a> </li>
                      <li> <a href="">PG Diploma in Internet of Things &amp; Embedded Technology</a> </li>
                      <li> <a href="">PG Diploma in VLSI Design &amp; Embedded System</a> </li>
                    </ul>
                  </div>
                  <div class="row_repeat row">
                    <h1>Corporate &amp; Working Professionals Training</h1>
                    <h3>For Corporates</h3>
                    <ul>
                      <li> <a href="">Corporate Training Programs</a> </li>
                      <li> <a href="">Internet of Things</a> </li>
                      <li> <a href="">Big Data, Analytics Software</a> </li>
                      <li> <a href="">Operating system based - Linux &amp; RTOS</a> </li>
                      <li> <a href="">Android</a> </li>
                      <li> <a href="">Embedded Systems &amp; MCU Programming</a> </li>
                      <li> <a href="">Modelling, Simulation &amp; Digital Signal Processing</a> </li>
                      <li> <a href="">Automotive Segment Training</a> </li>
                      <li> <a href="">Soft Skills</a> </li>
                    </ul>
                    <h3>For Working Professionals</h3>
                    <ul>
                      <li> <a href="">Weekend / Evening Programs for Working Professionals</a> </li>
                    </ul>
                  </div>
                  <div class="row_repeat row">
                    <h1>University / College Training</h1>
                    <h3>Technical Workshops</h3>
                    <ul>
                      <li> <a href="">Emerging Technologies</a> </li>
                      <li> <a href="">Software Programming</a> </li>
                      <li> <a href="">Embedded Micro-Controller</a> </li>
                      <li> <a href="">Modelling, Simulation &amp; Digital Signal Processing</a> </li>
                      <li> <a href="">Advance Digital System Design (VLSI)</a> </li>
                      <li> <a href="">Wireless Technologies</a> </li>
                      <li> <a href="">Robotics / Process Automation</a> </li>
                    </ul>
                    <h3>Summer Training Certification Programs</h3>
                    <ul>
                      <li> <a href="">Summer Training Certification Programs</a> </li>
                    </ul>
                    <h3>Placement Programs</h3>
                    <ul>
                      <li> <a href="">Placement Oriented Training Program</a> </li>
                    </ul>
                    <h3>Academic Projects</h3>
                    <ul>
                      <li> <a href="">Academic Projects on Embedded Hardware</a> </li>
                      <li> <a href="">Academic Projects on Software Application</a> </li>
                      <li> <a href="">Academic Projects on MATLAB &amp; DSP</a> </li>
                      <li> <a href="">Academic Projects on VLSI Design &amp; Verification</a> </li>
                    </ul>
                  </div>
                  <div class="row_repeat row">
                    <h1>Weekend / Evening Programs</h1>
                    <ul>
                      <li> <a href="">PG Diploma in Embedded System Design</a> </li>
                      <li> <a href="">Professional Diploma in Embedded Linux &amp; Device Drivers</a> </li>
                      <li> <a href="">Professional Diploma in Digital Signal Processing</a> </li>
                    </ul>
                  </div>
                </div>

                <!--soft skills-->
                <div class="soft_skill">
                    <div class="container">
                      <div class="soft_head">
                        <h2>Soft Skills</h2>
                      </div>
                      <div class="col-md-2 col-sm-4 col-xs-12">
                          <div class="soft_block">
                            <img src="images/soft1.png" class="img-responsive" />
                            <p>Team Building &amp; 
  Leadership Skills</p>
                          </div>
                      </div>
                      <div class="col-md-2 col-sm-4 col-xs-12">
                          <div class="soft_block">
                            <img src="images/soft2.png" class="img-responsive" />
                            <p>Stress 
  Management</p>
                          </div>
                      </div>
                      <div class="col-md-2 col-sm-4 col-xs-12">
                          <div class="soft_block">
                            <img src="images/soft3.png" class="img-responsive" />
                            <p>Campus to
   Corporate Orientation</p>
                          </div>
                      </div>
                      <div class="col-md-2 col-sm-4 col-xs-12">
                          <div class="soft_block">
                            <img src="images/soft4.png" class="img-responsive" />
                            <p>Communication &amp; Presenation skills</p>
                          </div>
                      </div>
                      <div class="col-md-2 col-sm-4 col-xs-12">
                          <div class="soft_block">
                            <img src="images/soft5.png" class="img-responsive" />
                            <p>Problem Solving and Critical Thinking</p>
                          </div>
                      </div>
                       <div class="col-md-2 col-sm-4 col-xs-12">
                          <div class="soft_block">
                            <img src="images/soft6.png" class="img-responsive" />
                            <p>Personality 
  Development</p>
                          </div>
                      </div>
                    </div>
                </div>

              </div>
            </div>
            <div id="topicsid" class="tab-pane fade">
                <div id="coursesid" class="tab-pane fade in active">
                  <div class="topic_list">
                    <div class="container">

                      <div class="row_repeat row">
                        <h2>Programming</h2>
                        <ul>
                          <li>Embedded C Programming &amp; Data structure</li>
                          <li>Program Logic Development</li>
                          <li>Expert C Programming</li>
                          <li>Modern C++</li>
                          <li>SQL Using Oracle</li>
                          <li>C Sharp / .NET / ASP.NET</li>
                          <li>Python / Advance Python</li>
                          <li>Programming in Java</li>
                        </ul>
                      </div>

                      <div class="row_repeat row">
                        <h2>Internet Of Things (IoT)</h2>
                        <ul>
                            <li>Building an IoT Solution – An Overview</li>
                            <li>Data Collection &amp; Aggregation in IoT</li>
                            <li>Data Processing &amp; Control in IoT</li>
                            <li>Connectivity Stacks in IoT – Near Field Connectivity</li>
                            <li>Connectivity Stacks in IoT – IP Broadband backbone</li>
                            <li>Security Challenges in IoT – Device &amp; Data Security</li>
                            <li>Power Management Challenges in IoT</li>
                        </ul>
                      </div>

                      <div class="row_repeat row">
                        <h2>Big Data, Analytics, Software</h2>
                        <ul>
                            <li>Analytics for Beginner</li>
                            <li>Data Science with R</li>
                            <li>Hadoop</li>
                            <li>Machine Learning</li>
                            <li>Agile / Scrum Methodology</li>
                        </ul>
                      </div>

                      <div class="row_repeat row">
                        <h2>Operating system based - Linux & RTOS</h2>
                        <ul>
                            <li>RTOS Fundamentals - Open Source / VxWorks</li>
                            <li>Open CV</li>
                            <li>Embedded Linux Porting on ARM Cortex - A8/A9</li>
                            <li>Configuring, Cross Compiling &amp; Build Linux image</li>
                            <li>Linux Security hardening - SELinux</li>
                            <li>Linux Kernel Internals</li>
                            <li>Linux Booting - Bootloaders, secure boot and Device tree</li>
                        </ul>
                      </div>


                    </div>
                  </div>
                </div>
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
<?php include('include/footer.php');	?>
 <!--scripts-->


<!--header-->
<?php include('include/footer_script.php');	?>
</body>
</html>