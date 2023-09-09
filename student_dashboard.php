<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="style.css">
  	<style type="text/css">
  	    body{
          /*background-image: url(img.jpg);*/
         }
         #header{
  	    	height: 10%;
  	    	width: 100%;
  	    	top: 2%;
  	    	background-color: black;
  	    	position: fixed;
  	    	color: white;

         }
         #left_side{
         	height: 10%;
         	width: 54%;
         	top: 88%;
          left: 23%;
         	position: fixed;
          padding: 19px!important;
          background-color: #1d2e2d;
          border: solid 3px yellow;
          border-radius: 40px;
          
         } 
         #right_side{
         	height: 55%;
         	width: 80%;
         	background-color: #1d2e2d;
          opacity: .95;
         	position: fixed;
         	left: 10%;
         	top: 20%;
         	color: white;
         	border: solid 3px yellow;
          padding-top: 80px;
          font-size: 20px;
         }
         #top-span{
         	top: 15%;
         	width: 80%;
         	left: 17%;
         	position: fixed;
         }
         #colorof{
          color: white;
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
            <label class="logo">Student's Account Manangement(SAM)<br>
          <h6>Madan Mohan Malviya University Of Technology, Gorakhpur-273010 (U.P.) India</h6></label>

            <ul>
                <li><a href="login.php">HOME</a></li>
         
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </nav><center>
         <?php
           $query = "select * from students where email = '$_SESSION[email]'";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <div id="left_side">
                         
                         <h5><strong>Made by: AKash Singh
            2020021019 B.Tech(CSE Sec A)</strong></h5>
                 
                    </div>

        <div id="right_side">

        <form action="" method="post">
          <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
        <table><tr></tr><tr></tr>
                         <tr>
                              <td>
                                   <b>Roll No:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text"style="background-color:white" value="<?php echo $row['roll_no'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Name:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" style="background-color:white"value="<?php echo $row['name'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Fathers Name:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text"style="background-color:white" value="<?php echo $row['father_name'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Attendance:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text"style="background-color:white" value="<?php echo $row['attendance'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Marks:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text"style="background-color:white" value="<?php echo $row['marks'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Email:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text"style="background-color:white" value="<?php echo $row['email'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                        
                        
                    </table>

               </form>
          </center>
          </div>
          <?php
          }
               ?>
                

               </body>
</html>  