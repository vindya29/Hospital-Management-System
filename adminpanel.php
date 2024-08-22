<html>
<head>
  <style>
  *{
    margin: 0;
    padding: 0;
  }
  body{
    background-image: url("admin.jpg");
    background-size: cover;
    margin-left: 150px;
    margin-top: 30px;
  }

  .container ul{
    list-style: none;
  }

  .container ul li{
    background-color: #3348FF;
    width: 200px;
    border: 1px solid white;
    border-radius: 5px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    color: white;
    font-size: 20px;
    float: left;

  }

.container ul li:hover{
  background-color: #85c1e9;
}
.container ul ul{
  display: none;
}
.container ul li:hover >  ul{
  display: block;
	text-decoration: none;
}

  </style>
  <title>Home Page</title>
</head>

<body>
  <div class="container">
    <ul>

      <li>Department
        <ul>
      <li><a href="department.php">Add new department</a></li>
      <li><a href="departmentrecord.php">department detail</a></li>
      </ul>
    </li>
      <li>Employee
        <ul>
          <li><a href="employee.php">new employee</a></li>
          <li><a href="employeerecord.php" >employee details</a></li>
          <li><a href="delete.php">Remove employee</a></li>
        </ul>

      </li>
      <li>doctor
      <ul>
        <li><a href="doctor.php">new doctor</a></li>
        <li><a href="doctorrecord.php">doctor record</a></li>
      </ul>
      </li>
      <li>Patient
      <ul>
        <li><a href="patient.php">new patient</a></li>
        <li><a href="patientrecord.php">patient record</a></li>
      </ul>
      </li>
      <li>Bill
        <ul>
          <li><a href="bill.php">new bill</a></li>
          <li><a href="billrecord.php">bill record</a></li>
        </ul>
      </li>
			<li><a href="welcome.php">Log Out</a></li>

    </ul>


  </div>
</body>


</html>
