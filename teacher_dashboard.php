 <!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <title>Teacher Dashboard</title>
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
          top: 10%;
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
         	height: 65%;
         	width: 80%;
         	background-color: #1d2e2d;
          opacity: .95;
         	position: fixed;
         	left: 10%;
         	top: 15%;
         	color: white;
         	border: solid 3px yellow;
          padding-top: 20px;
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
            <label class="logo">Teacher's Account Manangement(TAM)
               <h6>Madan Mohan Malviya University Of Technology, Gorakhpur-273010 (U.P.) India</h6>
            </label>
            <ul>
                <li><a href="login.php">HOME</a></li>
               <!--  <li id="colorof">Email: <?php echo $_SESSION['email'];?></li> -->
                <li><a href="logout.php">LOGOUT</a></li>
            </ul>
        </nav><center>


        <div id="left_side">
                         
                         <h5><strong>Made by: AKash Singh
            2020021019 B.Tech(CSE Sec A)</strong></h5>
                 
                    </div>


 
<div id="right_side">

     <b>&nbsp;&nbsp;</b>
<center>
                         <form action="" method="post">
                              Enter Student's Roll No:
                              <input type="text" name="roll_no">
                              <input type="submit" name="search_by_roll_no_for_edit" value="EDIT">
                         </form>
                    </center>
                    <?php

               
               if(isset($_POST['search_by_roll_no_for_edit']))
               {
                 $query = "select * from students where roll_no = '$_POST[roll_no]'";
                 $query_run = mysqli_query($connection,$query);
                 while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="teacher_edit.php" method="post">
                    <table>
                         <tr>
                              <td>
                                   <b>Roll No:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="roll_no" value="<?php echo $row['roll_no'];?> "  >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Name:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="name" value="<?php echo $row['name'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                              <td>
                                   <b>Fathers Name:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="father_name" value="<?php echo $row['father_name'];?>"disabled  >
                                   </td>
                              </td>
                         </tr>
                         <tr> <td>
                                   <b>Attendance:&nbsp;&nbsp;</b></td>
                                   <td>
                                        <input type="text" name="attendance" value="<?php echo $row['attendance'];?>"  >
                                   </td>
                              </td></tr>
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
                                        <input type="text" name="email" value="<?php echo $row['email'];?>" disabled >
                                   </td>
                              </td>
                         </tr>
                         <tr>
                             
                         </tr><tr><td>
                              <td></td>
                         </td></tr>
                         
                         <br><br>
                         <tr>
                              <td></td>
                              <td><input type="submit" name="edit" value="Submit">
                              </td>
                         </tr>

                    </table>
               </form>
                <?php
                 }
               }
               ?>
          </center>
     </div>
     </body>
     </html>