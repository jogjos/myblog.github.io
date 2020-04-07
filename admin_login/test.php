<?php
//Start session
session_start();

//check if admin loged
if(isset($_SESSION['adminlog']) && isset($_SESSION['adminrank'])){
  $admin_data ='<br><br>User: '. $_SESSION['adminlog'] .' / Rank: '. $_SESSION['adminrank'] .'<br><br><a href="admin.php?lgo=logout" title="Log-Out" id="logout">Log-Out</a>';

  //set content according to admin rank
  if($_SESSION['adminrank'] >=9){
    $content ='Content for Admin with Rank 9+';
  }
  else if($_SESSION['adminrank'] >=5){
    $content ='Content for Admin with Rank 5+';
  }
  else if($_SESSION['adminrank'] >=3){
    $content ='Content for Admin with Rank 3+';
  }
  else {
    $content ='Content for logged Admin with rank lower than 3';
  }

  //include admin data in content
  $content .= $admin_data;
}
else {
  $content ='Content for no logged Admin<br><br><a href="admin.php" title="Log-Out" id="login">Login</a>';
}
?><!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Admin Login System - Test Page</title>
<meta name="description" content="Simple Admin Login System with php, without database. Test Page" />
<meta name="author" content="MarPlo" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
body {text-align:center;margin:0 1%; padding:0;}
h1 {
font-size:22px;
margin:10px auto 18px auto;
text-decoration:underline;
}
#content {
margin:18px auto;
}
</style>
</head>
<body>
<h1>Admin Login System - Test Page</h1>
<div id="content">
<?php echo $content; ?>
</div>
<br><br><br><br><br><br><br><br>
<footer id="footer">
<a href="http://coursesweb.net/" title="Courses-Web" id="cwb">CoursesWeb.net</a>
</footer>
</body>
</html>