<?php
session_start();
if(isset($_SESSION['login_user']))
{
  echo " <div>Sunteti logat, " . $_SESSION['login_user'] . "<a href=\"/pogobooks++/controller/logout.php\"><br>Logout</a>"."</div>";  
   
}
else
{
	if(!basename($_SERVER['PHP_SELF'])=="../index.php")
	{
		header("Location:index.php"); 
	}
	else
	{
	echo  "<form method=\"post\" action=\"../pogobooks++/model/login.php\">
 <br>
  <input type=\"text\" name=\"username\" placeholder=\"Name\"/> <br>
  <input type=\"text\" name=\"password\" placeholder=\"Password\"/> 
  <input type=\"submit\" name=\"submit\" value=\"Log In\"/> <br>
  <p id=\"sign\"><a href=\"./view/sign-in.html\">Sign In</a></p> 
 </form> "; 
}

} 