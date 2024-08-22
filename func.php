<?php
$con=mysqli_connect("localhost","root","","hmsd");

if(isset($_POST['login_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from login where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	header("Location:adminpanel.php");
}
else
{
	echo"<script>alert('Errorr login')</script>";
	echo"<script>window.open('first.php','_self')</script>";
}
}
if(isset($_POST['pat_submit']))
{

	$pid=$_POST['pid'];
	$name=$_POST['name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
  $docid=$_POST['docid'];
	$date=$_POST['date'];
$query="insert into patient(pid,name,age,gender,docid,date)values('$pid','$name','$age','$gender','$docid','$date')";
$result=mysqli_query($con,$query);
if($result)
{
	echo"<script>alert('Submitted.')</script>";
	echo"<script>window.open('adminpanel.php','_self')</script>";
}
else {
	echo"<script>alert('enter correct values')</script>";
	echo"<script>window.open('patient.php','_self')</script>";
}
}


if(isset($_POST['dep_submit']))
{

	$deptid=$_POST['deptid'];
	$deptname=$_POST['deptname'];
	$depthead=$_POST['depthead'];
	$headid=$_POST['headid'];

$query="insert into department(deptid,deptname,depthead,headid)values('$deptid','$deptname','$depthead','$headid')";
$result=mysqli_query($con,$query);
if($result)
{
	echo"<script>alert('Submitted.')</script>";
	echo"<script>window.open('adminpanel.php','_self')</script>";
}
else {
	echo"<script>alert('enter correct values')</script>";
	echo"<script>window.open('department.php','_self')</script>";
}
}


if(isset($_POST['emp_submit']))
{

  $eid=$_POST['eid'];
	$name=$_POST['name'];
	$salary=$_POST['salary'];
	$deptid=$_POST['deptid'];


$query="insert into employee(eid,name,salary,deptid) values('$eid','$name','$salary','$deptid')";
$result=mysqli_query($con,$query);
if($result)
{

	echo"<script>alert('Submitted.')</script>";
	echo"<script>window.open('adminpanel.php','_self')</script>";
}
else {
	echo"<script>alert('enter correct values')</script>";
	echo"<script>window.open('employee.php','_self')</script>";
}

}







if(isset($_POST['delete']))
{
	$eid=$_POST['eid'];
  $query = "DELETE FROM `employee` WHERE `employee`.`eid` = $eid ";
	$result = mysqli_query($con,$query);

	if($result)
	{
		echo '<script type="text/javascript"> alert("Data deleted")</script>';
		echo"<script>window.open('adminpanel.php','_self')</script>";
	}
	else {
		echo '<script type="text/javascript"> alert("enter valid id")</script>';
		echo"<script>window.open('delete.php','_self')</script>";
	 }
}












if(isset($_POST['doc_submit']))
{

	$docid=$_POST['docid'];
	$name=$_POST['name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
  $deptid=$_POST['deptid'];
	$qualification=$_POST['qualification'];
$query="insert into doctor(docid,name,age,gender,deptid,qualification)values('$docid','$name','$age','$gender','$deptid','$qualification')";
$result=mysqli_query($con,$query);
if($result)
{
	echo"<script>alert('Submitted.')</script>";
	echo"<script>window.open('adminpanel.php','_self')</script>";
}
else {
	echo"<script>alert('enter correct values')</script>";
	echo"<script>window.open('doctor.php','_self')</script>";
}
}

if(isset($_POST['bill_submit']))
{

	$pid=$_POST['pid'];
	$medicine=$_POST['medicine'];
	$mprice=$_POST['mprice'];
  $fee=$_POST['fee'];
$query="insert into bill(pid,medicine,mprice,fee)values('$pid','$medicine','$mprice','$fee')";
$result=mysqli_query($con,$query);
if($result)
{
	echo"<script>alert('Submitted.')</script>";
	echo"<script>window.open('adminpanel.php','_self')</script>";
}
else {
	echo"<script>alert('enter correct values')</script>";
	echo"<script>window.open('bill.php','_self')</script>";
}
}

function get_patientdetail(){
global $con;
$query="select * from patient";
$result=mysqli_query($con,$query);
while ($row=mysqli_fetch_array($result)) {
	$pid=$row['pid'];
	$name=$row['name'];
	$age=$row['age'];
	$gender=$row['gender'];
	$docid=$row['docid'];
	$date=$row['date'];
	echo "<tr>
				<td>$pid</td>
				<td>$name</td>
				<td>$age</td>
				<td>$gender</td>
				<td>$docid</td>
				<td>$date</td>
				</tr>";
    }

}



function get_departmentdetail(){
global $con;
$query="select * from department";
$result=mysqli_query($con,$query);
while ($row=mysqli_fetch_array($result)) {
	$deptid=$row['deptid'];
  $deptname=$row['deptname'];
  $depthead=$row['depthead'];
  $headid=$row['headid'];
	echo "<tr>
				<td>$deptid</td>
				<td>$deptname</td>
				<td>$depthead</td>
				<td>$headid</td>
				</tr>";
    }
}


function get_employeedetail(){
global $con;
$query="select * from employee";
$result=mysqli_query($con,$query);
while ($row=mysqli_fetch_array($result)) {
	$eid=$row['eid'];
	$name=$row['name'];
	$salary=$row['salary'];
	$deptid=$row['deptid'];
	echo "<tr>
				<td>$eid</td>
				<td>$name</td>
				<td>$salary</td>
				<td>$deptid</td>
				</tr>";
    }
}


function get_doctordetail(){
global $con;
$query="select * from doctor";
$result=mysqli_query($con,$query);
while ($row=mysqli_fetch_array($result)) {
	$docid=$row['docid'];
	$name=$row['name'];
	$age=$row['age'];
	$gender=$row['gender'];
  $deptid=$row['deptid'];
	$qualification=$row['qualification'];
	echo "<tr>
				<td>$docid</td>
				<td>$name</td>
				<td>$age</td>
				<td>$gender</td>
				<td>$deptid</td>
				<td>$qualification</td>
				</tr>";
    }
}

function get_billdetail(){
global $con;
$query="CALL `amount`();";
$result=mysqli_query($con,$query);
while ($row=mysqli_fetch_array($result)) {
	$pid=$row['pid'];
	$medicine=$row['medicine'];
	$mprice=$row['mprice'];
  $fee=$row['fee'];
	$price=$row['total_amount'];
	echo "<tr>
				<td>$pid</td>
				<td>$medicine</td>
				<td>$mprice</td>
				<td>$fee</td>
				<td>$price</td>
				</tr>";
    }
}






?>
