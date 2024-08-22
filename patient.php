<!DOCTYPE html>
<html>
<head>
  <title>Add Patient</title>
  <link rel="stylesheet" type="text/css" href="patstyle.css">
 </head>
 <body>
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
<h2>New patient</h2>

     <form action="func.php" method="post" onsubmit="return myfun()">
       <label>Name :</label>
       <input type="text" name="name"><br>
       <label>Age :</label>
       <input type="text" name="age" id="age"><br>
       <span id="message" style="color:red;"></span><br>
        <label>Gender :</label>
       <input type="text" name="gender"><br>
       <label>Doctor Id :</label>
       <input type="text" name="docid"><br>
       <label>Admit date :</label>
       <input type="text" name="date"><br>
       <button type="submit" name="pat_submit">Submit</button>

     </form>
  </div>

</body>
</html>
