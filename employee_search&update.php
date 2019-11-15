

<?php
include 'navbar.php';
 ?> 
<div class="container border">
<div class="row">
<div class="col-md-12">
<h1 style="text-align:center; font-size:18px;">Employee Search</h1>
<form method="POST">
<table class="table">
<tr>
<td>Employee Code</td>
<td>
<input type="text" class="form-control" name="emp_code">
</td>
</tr>
<tr>
<td></td>
<td><button type="submit" class="btn btn-success" name="submit">SEARCH</button>
</td>
</tr>
</table>
</form>
</div>
</div>
</div>
</body>
</html>

<?php

if(isset($_POST['submit'])){

$empcode=$_POST['emp_code'];

include 'dbcon.php';

$sql="SELECT * FROM `employee_details` WHERE `empcode`='$empcode'";

$result=$connection->query($sql);

if($result->num_rows>0){
    echo "<div class='container border'> <div class='row'> <div class='col-md-12'>";
    echo "<h1 style='text-align:center; font-size:18px;'>Employee Details</h1>";
    echo "<form method='POST'><table class='table'> ";
   

    while($row=$result->fetch_assoc()){

        $emp_code=$row['empcode'];
        $emp_name=$row['empname'];
        $address=$row['address'];
        $district=$row['district'];
        $salary=$row['salary'];
        $designation=$row['designation'];
        $place=$row['place'];

        echo "<tr><td>Employee Code </td><td> <input type='text' class='form-control' name='emp_code' value='$emp_code'></td></tr>";
        echo "<tr><td>Employee Name </td><td> <input type='text' class='form-control' name='emp_name' value='$emp_name'></td></tr>";
        echo "<tr><td>Address </td><td> <input type='text' class='form-control' name='addrs' value='$address'></td></tr>";
        echo "<tr><td>District </td><td> <input type='text' class='form-control' name='dist' value='$district'></td></tr>";
        echo "<tr><td>Salary Code </td><td> <input type='text' class='form-control' name='sal' value='$salary'></td></tr>";
        echo "<tr><td>Designation </td><td> <input type='text' class='form-control' name='des' value='$designation'></td></tr>";
        echo "<tr><td>Place</td><td> <input type='text' class='form-control' name='pla' value='$place'></td></tr>";
        echo "<tr><td></td><td><button type='submit' class='btn btn-success' name='update'>UPDATE</button>  
        <button type='submit' class='btn btn-success' name='delete'>DELETE</button></td></tr>";

    }
    echo "</table> </form>";
    echo "</div> </div> </div>";
}
else
{
    echo "<script>alert('Invalid Employee Code')</script>";
}
    
}

?>

<?php

include 'dbcon.php';

if(isset($_POST['update'])){

$empl_code=$_POST['emp_code'];
$empl_name=$_POST['emp_name'];
$empl_addrs=$_POST['addrs'];
$empl_district=$_POST['dist'];
$empl_salry=$_POST['sal'];
$empl_designation=$_POST['des'];
$empl_place=$_POST['pla'];



$sql="UPDATE `employee_details` SET `empcode`=$empl_code,`empname`='$empl_name',`address`='$empl_addrs',`district`='$empl_district',`salary`=$empl_salry,`designation`='$empl_designation',`place`='$empl_place' WHERE `empcode`=$empl_code;";

$result=$connection->query($sql);

if($result===TRUE){
    
    echo "<script> alert('Data Updated')</script>";
}
else{

    echo "<script> alert('Data Updation Failed') </script>";

}
}


if(isset($_POST['delete'])){

$empname_delete=$_POST['emp_code'];


$sql="DELETE FROM `employee_details` WHERE `empcode`='$empname_delete'";

$result=$connection->query($sql);

if($result===TRUE){

echo "<script>alert('Data Deleted')</script>";

}
else{

    echo "<script>alert('Data Deletion Failed')</script>";
}
    
}


?>

