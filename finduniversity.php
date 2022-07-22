<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php 
	include("counselling/db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Universities</title>
</head>
<body>
	<div class="container">
		<div class="col-sm-12">
			<div class="row">
				<div class="card shadow">
					<div class="card-header">Find University</div>
					<div class="card-body">
<form method="post">
        
<div class="col-sm-6">
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
<div class="col-sm-6">
              <select required="" class="form-control" name="city_id" id="city_id">
                <option value="">Select course</option>
                <?php
$q="SELECT * FROM cities";
$stmt = $pdo->prepare($q);
$stmt->execute(); 
while ($row = $stmt->fetch(PDO::FETCH_BOTH))  {
          echo '<option value"'.$row[0].'">'.$row[1].'</option>';
        }
?>                                                                                                             
              </select>

              <button type="submit">Find University</button>


      </form>
</div>
</div>
</div>
</div>
</div>
<table class="table table-bordered">
	<thead class="bg-dark text-white">
		<th>No</th>
		<th>Name</th>
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
</body>
</html>