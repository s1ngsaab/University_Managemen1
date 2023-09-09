 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Login Page</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="style.css">
     <style type="text/css">
        .button{
          background-color:  #343a40;
          color: white;
          text-align: center;
          width: 15%;
          font-size: 20px;
         padding: 15px 5px 10px 5px;
         border-radius: 100px;
         }
     
 </style>
      <?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"ums");
    ?>
 </head>
 <body>
        <nav>
            <label class="logo">Madan Mohan Malviya University Of Technology 
              <br><h6>मदन मोहन मालवीय प्रौद्योगिकी विश्वविद्यालय, गोरखपुर-273010, उत्तरप्रदेश (UP State Govt. University) | Tele: 0551-227XXX
        </h6></label>
            <ul>
                <li><a class="active" href="#">HOME</a></li>
                <li><a href="admin_login.php">ADMIN</a></li>
            </ul>
        </nav>
   <center>
   	<div class="ums" ><h1>MAC Login Portal</h1>
        <a><strong>Made by: Akash Singh
            <br>2020021019<br>B.Tech(CSE Sec A)</strong></a><br>
            <br>
   	<form action="" method="post">
   		<input type="submit" name="teacher_login" value="Teacher Login" class="button">
   		<input type="submit" name ="student_login" value=" Student Login" class="button">
   	</form>
    </div>
   	<?php
   	    if(isset($_POST['teacher_login'])){
   	    	header("Location:teacher_login.php");
   	    }
   	    if(isset($_POST['student_login'])){
   	    	header("Location:student_login.php");
   	    }
   	    ?>
        </center>

   
 </body>
 </html>