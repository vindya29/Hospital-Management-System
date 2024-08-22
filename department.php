<!DOCTYPE html>
<html>
<head>
  <title>Add Department</title>
  <link rel="stylesheet" type="text/css" href="deptstyle.css">
</head>
<body>

  <div class="registaration-form">
    <a href="adminpanel.php" class="back">Go Back</a><br>

<h2>New Department</h2>


     <form action="func.php" method="post">

       <label>Department Name :</label>
       <input type="text" name="deptname"><br>
       <label>Department Head :</label>
       <input type="text" name="depthead"><br>
       <label>Head Id :</label>
       <input type="text" name="headid" class="form-control"><br>
       <button type="submit" name="dep_submit">Submit</button>

     </form>
  </div>

</body>
</html>
