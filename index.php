
<?php include "header.php"; ?>
<div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image:url('Assets/Desktop/main.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-12">
                  <div class="big-tagline clearfix">
                     <h2></h2>
                     <p class="lead"> </p>
                     <a data-scroll href="#contact" class="btn btn-light btn-radius grd1 btn-brd">SCHEDULE A VISIT</a>
                  </div>
               </div>
              
               
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="features" class="section wb">
         <div class="container">
            <div class="section-title row text-center">
               <div class="col-md-8 col-md-offset-2">
                  <small>All Awesome Property Details</small>
               </div>
               <!-- end col -->
            </div>
            <!-- end title -->
            <div class="property-detail row clearfix">
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-coupon effect-1"></i>
               </div>
               <!-- end col -->
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-family-room effect-1"></i>
               </div>
               <!-- end col -->
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-house effect-1"></i>
               </div>
               <!-- end col -->  
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-full-bed effect-1"></i>
               </div>
               <!-- end col -->  
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-swimming-pool effect-1"></i>
               </div>
               <!-- end col -->
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-calendar effect-1"></i>
               </div>
               <!-- end col -->  
            </div>
            <!-- end how-its-work -->
            <hr class="invis">
            <div class="row text-center">
            <center><div class="col-lg-12 col-md-12">
            <a href="" >
               <img src="Assets/Desktop/bath.png" alt="Featured Property" class="img-responsive center-block" style="max-width:100%; height:auto; border-radius:8px;border:2px solid #7B68EE;">
            </a>
         </div>
</center>
             </div>
            <!-- end row -->
         </div>
         <!-- end container -->
         <div class="sep1"></div>
      </div>
      <!-- end section -->
      <div id="agent" class="parallax section db parallax-off" style="background-image:url('uploads/parallax_02.png');">
         <div class="container">
            <div class="section-title row text-center">
               <div class="col-md-8 col-md-offset-2">
                  <h3>CONTACT US</h3>
                <br>
                <br>
                </div>
               <!-- end col -->
               
               <div class="col-md-6 wow slideInRight hidden-xs hidden-sm" >
               <br>
               <br>
               <br>
               <br>
              
              
                  <div id="contact" class="contact_form"style=" border:2px solid #7B68EE;">
                     <h3 style="color:#7B68EE";><b> QUICK APPOINTMENT</b></h3>

                     <form id="contactform1" class="row" action="submit-lead.php" name="contactform" method="post">
                        <fieldset class="row-fluid">
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" >
                              <input type="text" name="name" id="first_name1" class="form-control" placeholder="Full Name"style=" border:1px solid #7B68EE;">
                           </div>
                           
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="email" name="email" id="email1" class="form-control" placeholder="Your Email"style=" border:1px solid #7B68EE;">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="mobile" id="phone1" class="form-control" placeholder="Your Phone"style=" border:1px solid #7B68EE;">
                           </div>

                           
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                              <button type="submit" value="SEND" id="submit1" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get an Appointment</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
               <div class="col-md-6 text-center">
            <img src="Assets/Desktop/formby.png" alt="Agent Side Image" class="img-responsive" style="max-height: 600px; width:700px; margin: auto; border:2px solid #7B68EE;">
         </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
      </div>
      <div id="gallery" class="section wb">
         <div class="sep2"></div>
         <div class="container">
            <div class="section-title row text-center">
               <div class="col-md-8 col-md-offset-2">
                  <h3>Gallery</h3>
               </div>
               <!-- end col -->
            </div>
            <!-- end title -->
            <div class="row justify-content-center">
         <center><div class="col-lg-12 col-md-12">
            <a href="" >
               <img src="Assets/Desktop/flat.png" alt="Featured Property" class="img-responsive center-block" style="max-width:100%; height:auto; border-radius:8px;border:2px solid #7B68EE;">
            </a>
         </div>
</center>
      </div>
            <!-- end portfolio -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      
      <!-- end section -->
      <div id="map" style="width:100%; height:400px;">
      <iframe
  width="100%" height="100%"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps?q=18.6285,73.7378&hl=es;z=15&output=embed"
  allowfullscreen>
</iframe>

</div>

      
         <!-- end container -->
      
      <!-- end section -->
      
<?php include"footer.php"; ?>






<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astoria Royals</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="lead-form-section">
        <form action="submit-lead.php" method="POST">
            <input type="text" name="name" required placeholder="Full Name">
            <input type="email" name="email" required placeholder="Email">
            <input type="tel" name="mobile" required placeholder="Phone Number">
            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html> -->