<?php
include("class/users.php");
$ans=new  users;
$answer=$ans->answer($_POST);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>answer</title>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  
</head>
<body>
	<center>
	<?php
	$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
	$attempt_qus=$answer['right']+$answer['wrong'];
	?>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
  <h2>Your Carrer Counselling result</h2>
  <table class="table table-bordered" style="-webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, -12px -1px 20px 33px rgba(0,0,0,0.14); 
box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, -12px -1px 20px 33px rgba(0,0,0,0.14);">
    <thead>
      <tr>
        <th >Total number of Questions</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted qusetions</td>
        <td><?php echo $attempt_qus;?></td>
      </tr>
      <tr>
        <td>Right answer </td>
        <td class="bg-success"><?php echo $answer['right'];?></td>
      </tr>
      <tr>
        <td>Wrong answer</td>
        <td class="bg-warning"><?php echo  $answer['wrong'];?></td>
      </tr>
	  <tr>
        <td>Empty Answer</td>
        <td><?php echo $answer['no_answer'];?></td>
      </tr>
	  <tr>
        <td>Your result</td>
        <td class="bg-primary"><?php 
		$per=($answer['right']*100)/($total_qus);
		
		echo $per."%";

		
		?></td>
      </tr>
    </tbody>
  </table></div>
  
</div>
	
	
	
	<?php
switch ($per) {
  case $per<=30:
     echo '  <div class="container bg-light">
        <div class="col-md-12 text-center ">
           <div class="col-sm-12"><h3 >Choos The Best Path After FSC</h3></div>
           <div style="border: 7px double rgba(28,110,164,0.71);
border-radius: 40px 40px 40px 40px;-webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 28px 22px 20px -12px rgba(0,0,0,0); 
box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 28px 22px 20px -12px rgba(0,0,0,0);"><img src="result-img/Computer Science.jpg"></div> 
 
        </div>
         <button type="button" class="btn btn-primary">Government Jobs</button>
        <button type="button" class="btn btn-primary">Private Jobs</button>
    </div>';
    break;
  case  $per<=85:
     echo '  <div class="container bg-light">
        <div class="col-md-12 text-center ">
            <div class="col-sm-12"><h3 >Choos The Best Path After FSC</h3></div>
<div style="border: 7px double rgba(28,110,164,0.71);
border-radius: 40px 40px 40px 40px;-webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 28px 22px 20px -12px rgba(0,0,0,0); 
box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 28px 22px 20px -12px rgba(0,0,0,0);"><img src="result-img/Engineering.jpg"></div> 
     
    
        </div>
     <button type="button" class="btn btn-primary">Government Jobs</button>
        <button type="button" class="btn btn-primary">Private Jobs</button>
    </div>';
    break;
  case  $per<=100:
    echo '  <div class="container bg-light">
        <div class="col-md-12 text-center ">
            <div class="col-sm-12"><h3 >Choos The Best Path After FSC</h3></div>
           <div style="border: 7px double rgba(28,110,164,0.71);
border-radius: 40px 40px 40px 40px;-webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 28px 22px 20px -12px rgba(0,0,0,0); 
box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 28px 22px 20px -12px rgba(0,0,0,0);" ><img src="result-img/premecialsss.jpg"></div>
<br> 

        </div>
        <button type="button" class="btn btn-primary">Government Jobs</button>
        <button type="button" class="btn btn-primary">Private Jobs</button>
    </div>';
    break;
  default:
     echo '  <div class="container bg-light">
        <div class="col-md-12 text-center ">
           <h1> please go back</h1>
           <h1> Carrer Counselling was Failed</h1>
           <div style="border: 7px double rgba(28,110,164,0.71);
border-radius: 40px 40px 40px 40px;-webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 28px 22px 20px -12px rgba(0,0,0,0); 
box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 28px 22px 20px -12px rgba(0,0,0,0);" ><img src="result-img/empty.jpg"></div>
<br> 

        </div>
        
    </div>';
}

	?>
<br>

 <a href="http://localhost/carrer/counselling/home.php" class="btn btn-primary btn-success " style="width: 100px;"><span class="glyphicon glyphicon-arrow-left"></span> BACK</a><br>

	</center>
	<br>
  <br>
  <br>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>