<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SHOWTIME</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<script type="text/javascript" src="2.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Marck+Script|Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
	<header class="header">
		<div class="logo1">
				<p class="title"><a href="mainpage.php">Showtime</a></p>
			<nav class="right_tokens">
				<ul>
					<div class="dropdown1">
					 	<a href="#" class="dropbtn1">Movies</a>
					    <div class="dropdown-content1">
					    <a href="#">Genres</a>
					    <a href="#">Fan favorites</a>
					    <a href="#">Languages</a>
					  </div>
					</div>
					<div class="dropdown2">
						<a href="#" class="dropbtn2">Web Series</a>
						<div class="dropdown-content2">
						<a href="#">Netflix Originals</a>
					    <a href="#">Amazon Originals</a>
					    <a href="#">Countries</a>
					  </div>
					</div>
					<div class="dropdown3">
					 	<a href="#" class="dropbtn3">News</a>
					    <div class="dropdown-content3">
					    <a href="#">Latest Movie related</a>
					    <a href="#">Fan favorites</a>
					    <a href="#">Wedding Bells</a>
					  </div>
					</div>
				</ul>
			</nav>
			<nav class="bottom-header">
				<ul>
					<div class="bottom">
						<?php
								if(isset($_SESSION['user_name']))
								{
									echo "Logged in!";
								}
						?>
						<div class="login">
							<?php
								if(isset($_SESSION['user_name']))
								{
									echo'<form action="includes/logoutdb.php" method="POST">
									<button type="submit" name="submit">Logout</button>
								</form>';
								}
								else{

									echo '<form action="includes/logindb.php" method="POST">

										<input type="text" name="user_name" placeholder="Enter username">
										<input type="password" name="user_password" placeholder="Enter Password">
										<button type="submit" name="submit">Log-in</button>
									</form>';
								}
							?>

						
						</div>
						<div class="signup"><a href="signup.php">Sign-Up</a></div>	
						<div  class="profile"><a href="#">Profile</a></div>	
					</div>
				</ul>
			</nav>

		<form>
		<input type="text" size="30" onkeyup="showResult(this.value)"placeholder="Search..">
		<div id="livesearch"></div>
		</form>


			<!--<div class="search"><input type="text" placeholder="Search.."></div>-->
			
		</div>		
	</header>

</body>

<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

</html>
