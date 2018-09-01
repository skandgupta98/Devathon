<?php
session_start();
if($_SESSION['name']==NULL)
{
header("location:index.php");
}
else
{
echo "Welcome :-".$_SESSION['name'];
}
?>
</br>
<a href="home.php">Home</a>
<a href="logout.php">logout</a>