

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

    echo "<form method='POST'><table class='table'> ";
    echo "<tr><th>Employee Code </th> <th>Employee Name </th> <th>Address </th> <th>District </th><th>Salary</th><th>Designation </th><th>Place </th></tr>";

    while($row=$result->fetch_assoc()){

        $emp_code=$row['empcode'];
        $emp_name=$row['empname'];
        $address=$row['address'];
        $district=$row['district'];
        $salary=$row['salary'];
        $designation=$row['designation'];
        $place=$row['place'];

        echo "<tr> <td> $emp_code  </td><td> $emp_name </td> <td>$address</td><td>$district</td><td>$salary</td><td>$designation</td><td>$place</td></tr>";

    }
    echo "</table> </form>";
}
else
{
    echo "<script>alert('Invalid Employee Code')</script>";
}
    
}

?>