<?php
require "connect.php";
include('class_phpmailer.php');		
include('class.smtp.php');		  
if(isset($_POST['Submit'])) //echo "<pre>"; print_r($_POST); die; 
{  
  $name                   =      ($_POST['name']);
  $phone                  =     ($_POST['phone']);
  $qualification          =     ($_POST['qualification']);
  $streem_of_engineering  =     ($_POST['streem_of_engineering']);
  $percentage             =              ($_POST['percentage']);
  $collagename            =                   ($_POST['collagename']);
  $email                  =                   ($_POST['email']);
  $State                  =                   isset($_POST['State']);
  $year                  =                   isset($_POST['year']);
  /*$sql = "INSERT INTO `student_users` (`name`,`mobile_no`,`student_email`,`qualification`,`streem_of_engineering`,`agreegate_percent`,`collage_name`)
  VALUES ('".$name."', '".$phone."','".$email."','".$qualification."','".$streem_of_engineering."','".$percentage."','".$collagename."')";
//echo "<pre>"; print_r($sql); die;
if ($conn->query($sql) === TRUE) {
  if($sql <>""):
  $msg =  "Your Form Successfully submitted";
  endif;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/


// Mail Templete Start
$from_address = 'info@linuxkernelfoundation.com';
//print_r($from_address);die;
$mail = new PHPMailer();
					
$mail->IsSMTP(); // set mailer to use SMTP

$mail->Host = 'mail.linuxkernelfoundation.com'; // specify main and backup server

$mail->SMTPAuth = true; // turn on SMTP authentication

$mail->Username = 'noreply@linuxkernelfoundation.com'; // SMTP username

$mail->Password = 'cq_Oa14y1$6$'; // SMTP password

$mail->From = $from_address; //do NOT fake header.

$mail->FromName = $name;

$mail->Port       = 25;  

$mail->AddAddress('ashish.umrao@algosoftech.in'); // Email on which you want to send mail

$mail->AddReplyTo(''); //optional

$mail->IsHTML(true);


$mail->Subject = 'Contact form '.$name;

$body ="<table width=665 border=0 cellpadding=0 cellspacing=0>
<tr bgcolor=#990000 height=30>
<td align=left colspan=4><font color=#FFFFFF><strong>&nbsp;<b><u>CONTACT US FORM</u></b></strong></font></td>
</tr>
<tr height=5></tr>
<tr>
  <td width=665 valign=top>
    <table width=667 border=0 cellpadding=0 cellspacing=0 bgcolor=#CCCCCC height=30>
      <tr height=30>
      <td align=left colspan=3 bgcolor=#666666>&nbsp;<font color=#FFFFFF><strong><u>Contact Information</u></strong></font></td>
      </tr>
      <tr height=10></tr>
      <tr height=30>
        <td width=129 align=right><strong>Contact Person</strong></td>
        <td width=12>&nbsp;:</td>
        <td width=526>&nbsp;&nbsp;$name</td>
      </tr>
     									
      <tr height=30>
        <td width=129 align=right><strong>Mobile</strong></td>
        <td width=12>&nbsp;:</td>
        <td width=526>&nbsp;&nbsp;$phone</td>
      </tr>										

      <tr height=30>
        <td width=129 align=right><strong>Email</strong></td>
        <td width=12>&nbsp;:</td>
        <td width=526>&nbsp;&nbsp;$email</td>
      </tr>
      <tr height=30>
          <td width=129 align=right><strong>Qualification</strong></td>
          <td width=12>&nbsp;:</td>
        <td width=526>&nbsp;&nbsp;$qualification</td>
      </tr>								
      <tr height=30>
          <td width=129 align=right><strong>Streem of Engineering </strong></td>
          <td width=12>&nbsp;:</td>
        <td width=526>&nbsp;&nbsp;$streem_of_engineering</td>
      </tr>
      <tr height=30>
          <td width=129 align=right><strong>Aggregate in %</strong></td>
          <td width=12>&nbsp;:</td>
        <td width=526>&nbsp;&nbsp;$qualification</td>
      </tr>								
      <tr height=30>
          <td width=129 align=right><strong>Year </strong></td>
          <td width=12>&nbsp;:</td>
        <td width=526>&nbsp;&nbsp;$year</td>
      </tr>
      <tr height=30>
          <td width=129 align=right><strong>College Name</strong></td>
          <td width=12>&nbsp;:</td>
        <td width=526>&nbsp;&nbsp;$qualification</td>
      </tr>								
      <tr height=30>
          <td width=129 align=right><strong>Residing State </strong></td>
          <td width=12>&nbsp;:</td>
        <td width=526>&nbsp;&nbsp;$State</td>
      </tr>
      </table>
  </td>
</tr>
</table>";

$mail->Body=$body;
//print_r($mail); die;
if(!$mail->Send())

{

echo $mail->ErrorInfo;

}else{

 header('location: https://linuxkernelfoundation.com/');

}




}
?>
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
<script src="http://localhost/linuxkernelfoundationphp/js/jquery-2.2.4.min.js"></script> 
<script>
   $('head').load("head.html");
 $(window).load(function() {
	 setTimeout(function(){
	       $('.gif_loader_image').css({"opacity":"0", "display":"none"});}, 3000);
       $('.mainwrapper').css("opacity", "1"), 5000;
	});
</script>
<?php include('include/header.php');	?>
<div class="wrapper"> 
    <!--contact area-->
    <section class="cont-area">
      <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="enroll-area">
            <div class="col-md-5 col-sm-5 col-xs-12">
              <div class="enroll-image">
                <img src="images/enroll-pen.png" class="img-responsive" alt="Enroll" />
              </div>
              <div class="enroll-text">
                <h1>Programs Interested In *</h1>
                <p>Package Details</p>
              </div>
              <div class="enroll-checkbox">
                <label class="containerr">July(35000)
                  <input type="radio">
                  <span class="checkmark"></span>
                </label>
                <label class="containerr"> August(25000) Less 10% Off
                  <input type="radio">
                  <span class="checkmark"></span>
                </label>
                <label class="containerr">September(20000)Less 15% Off
                  <input type="radio">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
              <div class="enroll-form">
                <div class="enroll-heading">
                  <h2>student &amp; academic information</h2>
                </div>
				<form action="#" method="POST" name="loginform" id="loginform" onsubmit="return validation()">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <label >Name *</label>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                      <input type="text" name="name" id="name" class="form-control" placeholder="Name" required >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <label >Educational Qualification * </label>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="text" name="qualification" id="qualification" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <label >Stream of Engineering *</label>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="text" name="streem_of_engineering" id="streem_of_engineering" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <label >Aggregate in % * </label>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="text" name="percentage" id="percentage" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <label >Year * </label>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <select name="year">
                          <option>Select year</option>
                          <option  value="2014">2014</option>
                          <option  value="2015">2015</option>
                          <option  value="2016">2016</option>
                          <option  value="2017">2017</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <label >College Name * </label>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="text" name="collagename" id="collagename" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <label >Email * </label>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="email" name="email" id="email" class="form-control" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <label >Phone / Mobile No * </label>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <input type="text" name="phone" id="phone" class="form-control number"  minlength="10" maxlength="12">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <label >Residing State *</label>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <select name="State">
                          <option>Select State</option>
                          <option value="Haryana">Haryana</option>
                          <option value="Delhi">Delhi</option>
                          <option  value="noida">Noida</option>
                          <option  value="kanpur">Kanpur</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                        <label >Captcha *</label>
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <img src="images/captcha.png" class="img-responsive" alt="" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-5 col-sm-5 col-xs-12">
                      </div>
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="enroll-btns">
                          <!-- <button type="submit" class="postt">Pay Now</button> -->
                          <button type="submit" name="Submit" value="submit" class="postt">Pay Now</button>

                          <button type="submit" class="cancel">cancel / clear</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
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