<!DOCTYPE html>
<html>
<head>
  <title>Add Employee</title>
  <link rel="stylesheet" type="text/css" href="empstyle.css">
</head>
<body>
  

    <div class="registaration-form">
      <a href="adminpanel.php" class="back">Go Back</a><br>

  <h2>New Employee</h2>
     <form action="func.php" method="post" onsubmit="return myfunc()">
       <label>Name :</label>
       <input type="text" name="name"><br>
       <label>Salary :</label>
       <input type="text" name="salary"><br>

       <label>Department Id :</label>
       <input type="text" name="deptid"><br>
       <button type="submit" name="emp_submit">Submit</button>
    </form>
  </div>


</body>
</html>
