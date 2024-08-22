<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
  <title>Employee Record</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body style="background:url('123.jpg') no-repeat; background-size:cover;margin-top: 30px;">
<div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
       <a href="adminpanel.php" class="btn btn-light">Go Back</a>
       Employee Record
     </div>
<div class="card-body"></div>
<table class="table table-hover">
  <thead>
    <tr>
        <th>Employee Id</th>
        <th>Name</td>
        <th>Salary</th>
        <th>Department Id</th>

    </tr>
  </thead>
  <tbody>
    <?php get_employeedetail(); ?>
  </tbody>
</table>



</div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>
