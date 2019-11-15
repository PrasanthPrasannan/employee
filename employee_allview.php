

<?php
include './navbar.php';
?>
  



<div class="container">
<div class="row">
<div class="col-md-12"
>
<?php

include 'dbcon.php';

$sql="SELECT `Id`, `empcode`, `empname`, `address`, `district`, `salary`, `designation`, `place` FROM `employee_details`";

$result=$connection->query($sql);

if($result->num_rows>0){

 


  while($row=$result->fetch_assoc()){

    $emp_code=$row['empcode'];
    $emp_name=$row['empname'];
    $address=$row['address'];
    $district=$row['district'];
    $salary=$row['salary'];
    $designation=$row['designation'];
    $place=$row['place'];

echo "<div class='card text-center'>
<div class='card-header'>
$emp_code
</div>
<div class='card-body'>
  <h5 class='card-title'> Employee Name: $emp_name</h5>
  <p class='card-text'>$address.</p>
  <h5 class='card-title'> District: $district</h5>
  <h5 class='card-title'> Salary: $salary</h5>
  <h5 class='card-title'> Place: $place</h5>
  
  <a href='#' class='btn btn-primary'>$designation</a>
</div>
<div class='card-footer text-muted'>

</div>
</div>";
echo "<br>";

  }
}


else{

  echo "Invalid data";
}

?>

</div>
</div>
</div>
</body>
</html>



