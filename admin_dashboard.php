<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="style.css">
  	<style type="text/css">
  	    body{
          background-image: url(img.jpeg);
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
         	height: 75%;
         	width: 15%;
         	top: 11%;
          right: 1.8%;
         	position: fixed;
          radius: 90px;
     } 
     #right_side{
          height: 75%;
          width: 80%;
          background-color: #1d2e2d;
          position: fixed;
          opacity: .95;
          left: 3%;
         	top: 21%;
         	color: white;
         	border: solid 3px yellow;
          border-radius: 100px;
         }
         .lalwa
         {
          input[type='text'],label {
    padding: 5px;
    font-size: 16px;
    line-height: 16px;
    margin: 0;
    height: 30px;
    color: #fff;
    display: block;
}

         }
         #top-span{
         	top: 15%;
         	width: 80%;
         	left: 17%;
         	position: fixed;
         }
         #colorof{
          color: yellow;
     }
     .button{
          background-color:  #1d2e2d;
          color: yellow;
          text-align: center;
          width: 100%;
          font-size: 20px;
          padding: 15px 20px 20px 20px;
          border-radius: 80px;
         }
         
        
    </style>
    <?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"ums");
    ?>
         

</head>
<body>
      <nav >
            <label class="logo" >Manage Your University
            <h6>Madan Mohan Malviya University Of Technology, Gorakhpur-273010 (U.P.) India</h6>
            </label>
            <ul>
                 <li><a href="login.php">HOME</a></li>
                 <a href="logout.php">LOGOUT</a></li>
               </ul>
               
          </nav>
 
     
     <div id="left_side"><br><br><br>
     	<form action="" method="post">

     		<table>
     			<tr>
     				<td>
     					<input type="submit" name="search_student" value="Search Student" class="button">
     				</td>
     			</tr>
     			<tr>
     				<td>
     					<input type="submit" name="edit_student" value="Edit Student"class="button">
     				</td>
     			</tr>
     			<tr>
     				<td>
     					<input type="submit" name="add_student" value="Add Student"class="button">
     				</td>
     			</tr>
     			<tr>
     				<td>
     					<input type="submit" name="delete_student" value="Delete Student"class="button">
     				</td>
     			</tr>


     		</table>
     	</form>

     </div>
     <div id="right_side"><br><br>
          <div id="demo">
               <?php
               if(isset($_POST['search_student']))
               {
                    ?>
                    <center>
                         
                         <form action="" method="post" >
                              Enter Roll No:
                              <input type="text" name="roll_no" style="background-color:white">
                              <br><br>
                              <input type="submit" name="search_by_roll_no_for_search"value="Search">
                         </form>
               
                    </center>
                    <?php

               }
              



               if(isset($_POST['search_by_roll_no_for_search']))
               {
                 $query = "select * from students where roll_no = '$_POST[roll_no]'";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <center>
                    <table>
                         <tr>
                              <td>
                                   <b>Roll No:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" style="background-color:white" value="<?php echo $row['roll_no'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Name:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" style="background-color:white" value="<?php echo $row['name'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Fathers Name:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" style="background-color:white" value="<?php echo $row['father_name'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Attendance: &nbsp; &nbsp;</b></td>
                                   <td>
                                        <input type="text" style="background-color:white" value="<?php echo $row['attendance'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Marks:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" style="background-color:white" color=white value="<?php echo $row['marks'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Email:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text"  style="background-color:white"  value="<?php echo $row['email'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                    </table>
               </center>
                    <?php
                 }
                    }
                    ?>
                    <?php
               if(isset($_POST['edit_student']))
               {
                    ?>
                    <center>
                         <form action="" method="post">
                              Enter Roll No:
                              <input type="text" name="roll_no">
                              <input type="submit" name="search_by_roll_no_for_edit" value="Edit">
                         </form>
                    </center>
                    <?php

               }



              
                
               


               if(isset($_POST['search_by_roll_no_for_edit']))
               {
                 $query = "select * from students where roll_no = '$_POST[roll_no]'";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="admin_edit_student.php" method="post">
                         <center>
                    <table>
                         <tr>
                              <td>
                                   <b>Roll No:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="roll_no" value="<?php echo $row['roll_no'];?>"  >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Name:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="name" value="<?php echo $row['name'];?>"  >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Fathers Name:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="father_name" value="<?php echo $row['father_name'];?>"  >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Attendance:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="attendance" value="<?php echo $row['attendance'];?>"  >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Marks:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="marks" value="<?php echo $row['marks'];?>" >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Email:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="email" value="<?php echo $row['email'];?>"  >
                                   </td>
                              </td>
                         </tr>
                          
                        <br><br>
                         <tr>
                              <td></td>
                              <td><input type="submit" name="edit" value="Save">
                              </td>
                         </tr>

                    </table>
                    <center>
               </form>
                    <?php
                 }
               }
               ?>
               <?php 
                  if(isset($_POST['add_student']))
                  {
                    ?>
                    <center><h4>Fill the given details:</h4>
                    <form action="add_student.php" method="post">
                         
                         <table>
                              <tr>
                                   <td>Roll No:</td>
                                   <td>
                                        <input type="text" name="roll_no" required>
                                   </td>
                              </tr>
                              <tr>
                                   <td>Name:</td>
                                   <td>
                                        <input type="text" name="name" required>
                                   </td>
                              </tr>
                              <tr>
                                   <td>Fathers name:</td>
                                   <td>
                                        <input type="text" name="father_name" required>
                                   </td>
                              </tr>
                              <tr>
                                   <td>Attendance:</td>
                                   <td>
                                        <input type="text" name="attendance" required>
                                   </td>
                              </tr>
                              <tr>
                                   <td>Marks:</td>
                                   <td>
                                        <input type="text" name="marks" required>
                                   </tr>
                                   <tr>
                                   <td>Email:</td>
                                   <td>
                                        <input type="text" name="email" required>
                                   </td>
                              </tr>
                              <tr>
                                   <td>Password:</td>
                                   <td>
                                        <input type="text" name="password" required>
                                   </td>
                              </tr>
                              
                              <tr>
                                   <td>
                                        <td>
                                             <input type="submit" name="add" value="Add Student">
                                        </td>
                                   </td>
                              </tr>
                         </table>
                    </center>
                         
                    </form>
                  
                  <?php
             }



               ?>
               <?php 
               if(isset($_POST['delete_student'])){
                    ?>
                    <center>
                         <h4>Enter Roll No to delete Student</h4>
                         <form action="delete_student.php" method="post">
                              Roll No:
                              <input type="text" name="roll_no">
                              <input type="submit" name="search_by_roll_no_for_delete" value="Delete Student">



                         </form>
                    </center>
                    <?php
               }





               ?>




          </div></center>
     </div>
</body>
</html>