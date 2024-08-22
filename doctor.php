<!DOCTYPE html>
<html>
<head>
  <title>Add Doctor</title>
  <link rel="stylesheet" type="text/css" href="docstyle.css">
</head>
<body >
  <script>
  function myfun(){
    var a = document.getElementById("age").value;
    if(isNaN(a)){
      document.getElementById("message").innerHTML="Enter numbers only";
      return false;
    }
  }
  </script>

  <div class="registaration-form">
    <a href="adminpanel.php" class="back">Go Back</a><br>

<h2> New Doctor</h2>
     <form action="func.php" method="post" onsubmit="return myfun()">
       <label>Doctor Id :</label>
       <input type="text" name="docid"><br>
       <label>Name :</label>
       <input type="text" name="name"><br>
       <label>Age :</label>
       <input type="text" name="age" id="age"><br>
       <span id="message" style="color:red;"></span><br>
       <label>Gender :</label>
       <input type="text" name="gender"><br>
       <label>Department Id :</label>
       <input type="text" name="deptid"><br>
       <label>Qualification :</label>
       <input type="text" name="qualification"><br>
       <button type="submit" name="doc_submit">Submit</button>
       </form>
  </div>
</body>
</html>
