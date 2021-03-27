<!DOCTYPE html>
<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
                                
                                
                                
                                
       $username = $_POST["username"]; 
       $name = $_POST["name"]; 
       $email = $_POST["email"]; 
       $phone = $_POST["phone"]; 
       $password = $_POST["password"]; 

                if(empty($email) || empty($username) ||empty($name) ||empty($phone) ||empty($password) ){
  ?>
        <script>alert('الرجاء تعبئة جميع البيانات');</script>
        <?php 
    } else
    {

        $query = mysqli_query($conn, "SELECT * FROM service_owner WHERE  email='$email' AND username = '$username'");
                 $rows = mysqli_num_rows($query);
 if($rows == 0){
 $sql = "INSERT INTO `service_owner`(`name`, `username`, `email`, `password`, `phone`)  VALUES ('$name','$username','$email','$password','$phone')";                 
  if ($conn->query($sql) === TRUE) {
  	  ?>
        <script>alert('تم التسجيل بنجاح');</script>	
        <?php   echo"<script> window.location='owner.php'; </script>";
                } else {
        ?>
        
        <?php
                }
            }else{
        ?>
        <script>alert('المستخدم لديه حساب');</script>
        <?php
            }
        }
    
}
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
    <title>انضم لنا</title>
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

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
                    <a class="nav-link page-scroll" href="index.php" style="color: #269B95">الصفحه  الرئيسيه <span class="sr-only">(current)</span></a>
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

    <main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><h3 class="discover">سجّل كمقدم  خدمه</h3></div>
                        <div class="card-body">
                        	 	<form name="my-form"  method="post" action="register.php">

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="name" placeholder="الاسم">
                                    </div>
                                </div>
                                

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" placeholder="البريد الالكتروني">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="username" placeholder="اسم  المستخدم">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" name="phone" class="form-control" placeholder="رقم الهاتف">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <input type="text" id="phone_number" name="password" class="form-control" placeholder="الرقم السري">
                                    </div>
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary discover">
                                        !سجّل
                                        </button>
                                    </div>
                                    <p class="discover sml">أو <a href="login.php" style="color: #77C9C5;">سجل دخولك</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>
    
      <script type="text/javascript">
           function validform() {

        var a = document.forms["my-form"]["full-name"].value;
        var b = document.forms["my-form"]["email-address"].value;
        var c = document.forms["my-form"]["username"].value;
        var d = document.forms["my-form"]["permanent-address"].value;
        var e = document.forms["my-form"]["nid-number"].value;

        if (a==null || a=="")
        {
            alert("Please Enter Your Full Name");
            return false;
        }else if (b==null || b=="")
        {
            alert("Please Enter Your Email Address");
            return false;
        }else if (c==null || c=="")
        {
            alert("Please Enter Your Username");
            return false;
        }else if (d==null || d=="")
        {
            alert("Please Enter Your Permanent Address");
            return false;
        }else if (e==null || e=="")
        {
            alert("Please Enter Your NID Number");
            return false;
        }

    }
      </script>
    
    	
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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