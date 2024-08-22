<!DOCTYPE html>
<html>
<head>
  <title>Delete Employee</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
  <div class="jumbotron" style="background:url('loginpage.jpg') no-repeat;background-size:cover;height:300px;"></div>

<div class="container">
<div class="card">
  <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
    <a href="adminpanel.php" class="btn btn-light">Go Back</a>
Remove Employee
  </div>
  <div class="card-body">
     <form class="form-group" action="func.php" method="post">

       <label>Employee id :</label>
       <input type="text" name="eid" class="form-control"><br>
       <input type="submit" class="btn btn-danger" name="delete" value="Delete Employee">

     </form>
  </div>

</div>
</div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> snippet in your web page.
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
