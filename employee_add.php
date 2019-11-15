
<?php
include 'navbar.php';
 ?>  
  
<div class="container border">
<div class="row">
<div class="col-md-12">
<h3 style="font-size:20px; font-weight:Bold; text-align:center;">INSERSION</h3>
<form method="POST">
<table class="table">
<tr>
<td>
Employee Code
</td>
<td>
<input type="text" class="form-control" name="empcode">
</td>
</tr>
<tr>
<td>
Employee Name
</td>
<td>
<input type="text" class="form-control" name="empname">
</td>
</tr>
<tr>
<td>
Address
</td>
<td>
<textarea name="address" cols="30" rows="3" class="form-control"></textarea>
</td>
</tr>
<tr>
<td>
District
</td>
<td>
<select name="district" class="form-control">
<option value="THIRUVANANDAPURAM">THIRUVANANDAPURAM</option>
<option value="KOLLAM">KOLLAM</option>
<option value="ALAPPUZHA">ALAPPUZHA</option>
<option value="PATHANAMTHITTA">PATHANAMTHITTA</option>
<option value="KOTTAYAM">KOTTAYAM</option>
<option value="IDUKKI">IDUKKI</option>
<option value="ERNAKULAM">ERNAKULAM</option>
<option value="THRISSUR">THRISSUR</option>
<option value="PALAKKAD">PALAKKAD</option>
<option value="MALAPPURAM">MALAPPURAM</option>
<option value="KOZHIKODE">KOZHIKODE</option>
<option value="WAYANAD">WAYANAD</option>
<option value="KANNUR">KANNUR</option>
<option value="KASARGOD">KASARGOD</option>
</select>
</td>
</tr>
<tr>
<td>
Salary
</td>
<td>
<input type="text" class="form-control" name="salary">
</td>
</tr>
<tr>
<td>
Designation
</td>
<td>
<input type="text" class='form-control' name="designation">
</td>
</tr>
<tr>
<td>
Place
</td>
<td>
<input type="text" class="form-control" name="place">
</td>
</tr>
<tr>
<td></td>
<td>
<button type="submit" class="btn btn-success" name="submit">SUBMIT</button>
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

$emp_code=$_POST['empcode'];
$emp_name=$_POST['empname'];
$address=$_POST['address'];
$district=$_POST['district'];
$salary=$_POST['salary'];
$designation=$_POST['designation'];
$place=$_POST['place'];


include 'dbcon.php';

$sql="INSERT INTO `employee_details`(`empcode`, `empname`, `address`, `district`, `salary`, `designation`, `place`) VALUES ($emp_code,'$emp_name','$address','$district',$salary,'$designation','$place')";

$result=$connection->query($sql);

if($result===TRUE){

   echo "<script>alert('Data Inserted')</script>";
}

else
{

    echo "<script>alert('Data Insertion Failed')</script>";  
}

}


?>
