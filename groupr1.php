<?php


if(isset($_SESSION['userid'])){
	echo  $_SESSION['username'] ;
	//echo $_SESSION['userid'];
}
else
{
	echo "";
}
?>


