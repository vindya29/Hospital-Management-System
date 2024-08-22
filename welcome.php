<!DOCTYPE html>
<html>
<style>
body{
  margin: 0;
  padding: 0;
  font-family: poppins;
}

header{
  overflow: hidden;
  height: 100vh;
}
.vid-bg{
  position: absolute;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}
.nav-area{
  background: rgba(0,0,0,0.7)
  height: 60px;
  position: absolute;
  width:100%;
}
.menu-area{
  float: right;
  list-style: none;
  margin: 20px;
}

.menu-area li{
  display: inline-block;
  margin: 0 5px;
  font-size: 30px;
}

.menu-area li a{
  text-decoration: none;
  color: white;
  padding: 5px;
  letter-spacing: 2px;
}
.menu-area li.active a{
  color: #f5bb00;
}
.menu-area li a:hover{
  color:#f5bb00;
}

.banner-text h2{
  position: absolute;
  top:30%;
  text-align: center;
  left: 35%;
  color:  #f5bb00;
  font-size: 125px;
  margin-left: 0;
}
.banner-text p{
  position: absolute;
  top:65%;
  text-align: center;
  left: 60%;
  color: #5cd65c;
  font-size: 25px;
  margin: 0;
  font-weight: bold;


}

</style>
<head>
  <title>welcome page</title>

</head>
<body>
<header>
  <video src="home.mp4" class="vid-bg" autoplay loop muted></video>
  <div class="nav-area">
    <ul class="menu-area">
      <li class="active"><a href="first.php">Log In</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact us</a></li>
    </ul>
  </div>
  <div class="banner-text">
    <h2>Medicare</h2>
    <p>Caring is our calling.</p>
  </div>



</header>

</body>
</html>
