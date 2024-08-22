<!DOCTYPE html>
<html>
<head>
  <title>Bill</title>
  <link rel="stylesheet" type="text/css" href="entrystyle.css">
</head>
<body>
    <div class="registaration-form">
      <a href="adminpanel.php" class="back">Go Back</a><br>
<h2>New Bill</h2>

     <form  action="func.php" method="post">
       <label>Patient Id</label>
       <input type="text" name="pid" ><br>
       <label>Medicine :</label>
       <input type="text" name="medicine" ><br>
       <label>medicine price:</label>
       <input type="text" name="mprice" ><br>
       <label>Doctor fee :</label>
       <input type="text" name="fee" ><br>
       <button type="submit" name="bill_submit">submit</button>

     </form>
  </div>


</body>
</html>
