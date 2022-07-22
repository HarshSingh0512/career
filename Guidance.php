<?php 
  include("counselling/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Guidance</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />




 <link href="style.css" rel="stylesheet" />
</head>
<body>
	<!--header section start -->
	<div class="header_section header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2">
          <div class="logo"><a href="index.html"><img src="images/img-1.png"style="height: 70px; width: 70px; border-radius: 50%;"></a></div>
        </div>
        <div class="col-sm-6">
					<div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a></li>

                               <li class="nav-item active">
                                <a class="nav-link" href="index.html">Career Counseling<span class="sr-only">(current)</span></a> </li>
                               <li class="nav-item">
                                <a class="nav-link" href="about.html">Guidance</a></li>
                               <li class="nav-item">
                                <a class="nav-link" href="test.html">Tests</a></li>
                               
                               <li class="nav-item" href="#">
      	                        <a class="nav-link" href="contact.html">Contact Us</a></li>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
				</div>
			<div class="col-sm-4">
            <ul class="top_button_section">
               <li><a class="login-bt active"  href="http://localhost/carrer/counselling/index.php">Login</a></li>
               <li><a class="login-bt" href="http://localhost/carrer/counselling/index.php">Register</a></li>
               <li class="search"><a href="#"><img src="images/search-icon.png" alt="#" /></a></li>
            </ul>
          </div>
			</div>
		</div>
	</div>
  <!--header section end -->
	<!--about section start -->
    <div class="about_section layout_padding" style="">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="tablet"><img src="images/tablet-img.png"></div>
    			</div>
    			<div class="col-md-6">
    				<div class="about_taital">
    					<div class="about_text">Guidance <span style="color: #c6610f;">...</span></div>
    					<p class="dolor_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
    					<div class="read_more"><a href="#">Read More</a></div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
	<!--about section end -->

<!-- Find program section  start ---->
<div class="container" style="padding-bottom: 100px; "> 
    <div class="row">
      <div class="col-md-10 "style="background-color: #2f3640; border-top-left-radius: 0.5em 1em;
   border-top-right-radius: 0.5em 1em;margin: auto;">
      <h1 style="border-bottom: 1px solid white; color: white; border-radius: 5px,5px,0px,0px;padding-bottom:15px;padding-top: 10px;">Program Finder</h1>
   </div>
 </div>
  <div class="row ">
  
    <div class="col-md-10 d-flex " style="background-color: #2f3640;border-bottom-left-radius: 0.5em 1em;border-bottom-right-radius: 0.5em 1em;padding-bottom: 5rem; padding-top: 10px; margin: auto;">
      
        


     &nbsp;
  <div class="container">
    <div class="col-sm-12 d-flex justify-content-center"  >
      <div class="row">
        <div class="card shadow col-sm-12" style="width:30.5rem;">
          <div class="card-header">Find University</div>
          <div class="card-body">
<form method="post">
        
<div class="col-sm-12 ">
              <select required="" class="form-control" name="course_id" id="course_id">
                <option value="">Select course</option>
                <?php
$q="SELECT * FROM courses";
$stmt = $pdo->prepare($q);
$stmt->execute(); 
while ($row = $stmt->fetch(PDO::FETCH_BOTH))  {
          echo '<option value"'.$row[0].'">'.$row[1].'</option>';
        }
?>                                                                                                             
              </select>

</div>
<br>
<div class="col-sm-12 " >
              <select required="" class="form-control" name="city_id" id="city_id">
                <option value="" >Select city</option>
                <?php
$q="SELECT * FROM cities";
$stmt = $pdo->prepare($q);
$stmt->execute(); 
while ($row = $stmt->fetch(PDO::FETCH_BOTH))  {
          echo '<option value"'.$row[0].'">'.$row[1].'</option>';
        }
?>                                                                                                             
              </select>

<br>
              <button type="submit" class="btn btn-danger">Find University</button>


      </form>
</div>
</div>
</div>
</div>
</div>
     
      </div>
    </div>
  </div>
  <div class="container">
<table class="table table-bordered col-sm-12 " style="width:80%;margin-left: 100px;">
  <thead class="text-white" style="background-color: red;">
    <th>No</th>
    <th>University</th>
    <th>City</th>
    <th>Course</th>
  </thead>
  <tbody>

<?php

if(!empty($_POST['course_id']))
if(!empty($_POST['city_id']))
{
  $course_id=$_POST['course_id'];
  $city_id=$_POST['city_id'];
$q="SELECT * FROM universities where course_id='$course_id' or city_id='$city_id'";
$stmt = $pdo->prepare($q);
$stmt->execute(); 
while ($row = $stmt->fetch(PDO::FETCH_BOTH))  {
          echo "<tr>
              <td>".$row[0]."</td>
              <td>".$row[1]."</td>
              <td>".$row[3]."</td>
              <td>".$row[2]."</td>
          </tr>";
        }
}

?>   
  </tbody>
</table>
</div>
</div>

<!-- Find program section   End ---->
<!----- start job finder in ------------------------->



<div class="container" style="padding-bottom: 100px; "> 
    <div class="row">
      <div class="col-md-10 "style="background-color: #2f3640; border-top-left-radius: 0.5em 1em;
   border-top-right-radius: 0.5em 1em;margin: auto;">
      <h1 style="border-bottom: 1px solid white; color: white; border-radius: 5px,5px,0px,0px;padding-bottom:15px;padding-top: 10px;">Job Finder</h1>
   </div>
 </div>
  <div class="row ">
  
    <div class="col-md-10 d-flex " style="background-color: #2f3640;border-bottom-left-radius: 0.5em 1em;border-bottom-right-radius: 0.5em 1em;padding-bottom: 5rem; padding-top: 10px; margin: auto;">
      
        


     &nbsp;
  <div class="container">
    <div class="col-sm-12 d-flex justify-content-center"  >
      <div class="row">
        <div class="card shadow col-sm-12" style="width:30.5rem;">
          <div class="card-header">Select</div>
          <div class="card-body">
<form method="post">
        
<div class="col-sm-12 ">
              <select required="" class="form-control" name="course_id" id="course_id">
                <option value="">Select course</option>
                <?php
$q="SELECT * FROM courses";
$stmt = $pdo->prepare($q);
$stmt->execute(); 
while ($row = $stmt->fetch(PDO::FETCH_BOTH))  {
          echo '<option value"'.$row[0].'">'.$row[1].'</option>';
        }
?>                                                                                                             
              </select>

</div>
<br>

 

<br>
              <button type="submit" class="btn btn-danger">Finder</button>


      </form>
</div>
</div>
</div>
</div>

</div>
     
      </div>
    </div>
    <div class="container">
<table class="table table-bordered col-sm-12 " style="width:80%; margin-left:100px; ">
  <thead class=" text-white" style="background-color: green;">
    <th>No</th>
    <th>course</th>
    <th>Jobs No 1</th>
    <th>Jobs No 2</th>
    <th>Jobs No 3</th>
    <th>Jobs No 4</th>
  </thead>
  <tbody>

<?php

if(!empty($_POST['course_id']))
{
  $course_id=$_POST['course_id'];
$q="SELECT * FROM jobfinder where course='$course_id' ";
$stmt = $pdo->prepare($q);
$stmt->execute(); 
while ($row = $stmt->fetch(PDO::FETCH_BOTH))  {
          echo "<tr>
              <td>".$row[0]."</td>
              <td>".$row[1]."</td>
              <td>".$row[3]."</td>
              <td>".$row[2]."</td>
              <td>".$row[4]."</td>
              <td>".$row[5]."</td>
          </tr>";
        }
}

?>   
  </tbody>
</table>
</div>
  </div>
<!----- END job finder  ------------------------->




	<!--footer section start -->
	 <div class="footer_section layout_padding">
    <div class="container">
      <div class="row">
          <div class="col-sm-3">

            <div class="footer_contact">Contact Us</div>
          </div>
          <div class="col-sm-3">
            <div class="location_text"><img src="images/map-icon.png"><span style="padding-left: 10px;">Locations</span></div>
          </div>
          <div class="col-sm-3">
            <div class="location_text"><img src="images/call-icon.png"><span style="padding-left: 10px;">Call</span></div>
          </div>
          <div class="col-sm-3">
            <div class="location_text"><img src="images/mail-icon.png"><span style="padding-left: 10px;">Email</span></div>
          </div>
        </div>
        <div class="enput_bt">
          <div class="row">
            <div class="col-md-6">
              <div class="input_main">
                       <div class="container">
                          <form action="/action_page.php">
                            <div class="form-group">
                              <input type="text" class="email-bt text-white" placeholder="Name:Career Counseling"  name="Name" style=" font-size:1rem;"disabled>
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Email: Career Counseling&676@gamil.com" name="Email" style="color: white;font-size:1rem;"disabled>
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="Ph 0345-88888888" name="Email" style="color:white;font-size:1rem;"disabled>
                            </div>
                            <form action="/action_page.php">
                                <div class="form-group">
                                  <textarea class="massage-bt" placeholder="loaction :Qurtuba University of Science and Information Technology  " rows="5" id="comment" name="text" style="color:white;font-size:1rem;"disabled></textarea>
                                </div>
                            </form>
                          </form>
                       </div> 
                       <div class="send_bt_main">
                        <div class="left">
                          <div class="send_bt"><a href="#">Social media</a></div>
                        </div>
                        <div class="right">
                          <div class="social_icon">
                            <ul>
                              <li><a href="#"><img src="images/fb-icon.png"></a></li>
                              <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                              <li><a href="#"><img src="images/in-icon.png"></a></li>
                              <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                            </ul>
                          </div>
                        </div>
                       </div>
                    </div>
            </div>
            <div class="col-md-6">
              <div class="map_section">
                        <div class="row">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2899.392303926599!2d70.89781734008389!3d31.8455757197688!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39266c25cb956565%3A0x9ebf2c7a37620de4!2sQurtuba%20School%20and%20College!5e1!3m2!1sen!2s!4v1630061751484!5m2!1sen!2s" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                   </div>
              <h1 class="newsletter_text">Newsletter</h1>
              <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="ENTER YOUR MAIL" aria-label="Recipient's username" aria-describedby="basic-addon2">
                       <div class="input-group-append">
                       <span class="input-group-text" id="basic-addon2">SUBSCRIBE</span>
                       </div>
                       </div>
            </div>

          </div>
        </div>
        <div class="copyright_section">
          <p class="copyright_text">Carrer Counselling.<a href="#"></p>
        </div>
    </div>
  </div>
	<!--footer section end -->

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
    
      


    </script>
        <!-- google map js -->
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
          
        <!-- end google map js -->
</body>
</html>