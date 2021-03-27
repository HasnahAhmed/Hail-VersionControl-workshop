<!DOCTYPE html>
<?php
include 'connection.php';

 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Create a stylish landing page for your business startup and get leads for the offered services with this HTML landing page template.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>منشور جديد</title>
    <meta charset="UTF-8">
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    
    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Evolo</a> -->
         <img src="images/logo.png" class="logo-nav">
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
               
                  <li class="nav-item">
                    <a class="nav-link page-scroll" href="" style="color: #269B95">الصفحه  الرئيسيه <span class="sr-only">(current)</span></a>
                </li>
                 
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x facebook"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack" >
                    <a href="#your-link">
                        <i class="fas fa-circle fa-stack-2x twitter" ></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {


     // $type=$_POST['service-type'];
      $title=$_POST['adj'];
      $describe=$_POST['descript'];
      $details=$_POST['details'];

       $msql = "INSERT INTO services (  title_service , describe  , details )  VALUES ('$title','$describe','$details')";

       if (mysqli_query($conn, $msql)) {
      
echo"<script>alert('successfully registered ');</script>";
echo"<script>window.location='admin.php';</script>";
} else {
   
echo "Error: " . $msql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



}

   ?>
 

            <div class="contact-form">
                                                            <form id = "form1" name="form1" method="post" >

                <div class="form-group">

                  <label class="control-label col-sm-2 discover" style="float: right;">:نوع الخدمه</label>
                  <div class="col-sm-10">          
 <select class="form-control" placeholder="  Your type"   name="service-type" dir="rtl" >
                  <option  value="" required disabled selected  style="float: right;" >اختر الخدمة من فضلك </option>
            <option value="1" style="float: right;" >
                               قاعات الأفراح
                            </option>
                        
                            <option value="zz" >
                             الحفلات
            
                        </option>
                  <option value="3" >
                             خدمات الضيافة
            
                        </option> 
                        <option value="4" >
                             الفرق الموسيقسة
            
                        </option>
                         <option value="5" >
                           فرق المنظمين
            
                        </option>
                 </select>                  </div>
                </div>
                 <div class="form-group">
                  <label class="control-label col-sm-2 discover" required style="float: right;" name="adj" >:عنوان الخدمه</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" align="right">
                  </div>
                </div>
                <div class="form-group">
                                      <label class="control-label col-sm-2 discover" required style="float: right;" name="descript">:وصف الخدمة</label>


                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2 discover"  required style="float: right;" name="details" >:تفاصيل  الخدمة</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="5"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2 discover" required  style="float: right;">:ارفع الصور</label>
                  <div class="col-sm-10">          
                      <input type="file" id="img" name="img" accept="image/*" style="float: right;">
                  </div>
                </div>
                <div class="form-group" style="margin-top: 70px">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default discover" style="background-color:#77C9C5" value="add">انشر</button>
                  </div>
              </div>

                </div>
            </form>
            </div>
            

    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>