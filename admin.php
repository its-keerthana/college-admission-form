
  
<?php
 

 $user = 'root';
 $password = '';
  

 $database = 'learning';
  

 $servername='localhost';
 $mysqli = new mysqli($servername, $user,
                 $password, $database);
  
 
 if ($mysqli->connect_error) {
     die('Connect Error (' .
     $mysqli->connect_errno . ') '.
     $mysqli->connect_error);
 }
  
 $sql = " SELECT * FROM student";
 $result = $mysqli->query($sql);
 $mysqli->close();
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
  
 <head>
     <meta charset="UTF-8">
     <title>Student Application Details</title>
     
     <style>
       
         table {
             margin: 0 auto;
             font-size: medium;
             box-shadow: 0px 5px 10px  black ;
             border-collapse: collapse;
         }

         th,
         td {
             font-weight: bold;
             border: 2px solid purple;
             padding: 8px;
             text-align: center;
             cursor: pointer;
             background-color: white;
             font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
         }
  
         td {
             font-weight:400;
             background-color: bisque;
         }
        
         h1{
            align-items: center;
            text-align: center;
             color: #204969;
             font-size: 35px;
             font-family: 'Gill Sans', 'Gill Sans MT',
             ' Calibri', 'Trebuchet MS', 'sans-serif';

         }
     </style>
 </head>
  
 <body>
     <section>
        <nav>
         <h1>Admin panel</h1></nav><br>
         
       
         <table>
             <tr>
                 <th>First Name</th>
                 <th>Last name</th>
                 <th>Date of birth</th>
                 <th>Gender</th>
                 <th>12th Std school Name</th>
                 <th>12th Mark</th>
                 <th>10th Std school Name</th>
                 <th>10th Mark</th>
                 <th>Religion</th>
                 <th>Caste</th>
                 <th>Father's name</th>
                 <th> Department</th>
                 <th> Address</th>

             </tr>
             
             <?php
                 
                 while($rows=$result->fetch_assoc())
                 {
             ?>
             <tr>
               
                 <td><?php echo $rows['firstname'];?></td>
                 <td><?php echo $rows['lastname'];?></td>
                 <td><?php echo $rows['dob'];?></td>
                 <td><?php echo $rows['gender'];?></td>
                 <td><?php echo $rows['school12'];?></td>
                 <td><?php echo $rows['mark12'];?></td>
                 <td><?php echo $rows['school10'];?></td>
                 <td><?php echo $rows['mark10'];?></td>
                 <td><?php echo $rows['religion'];?></td>
                 <td><?php echo $rows['caste'];?></td>
                 <td><?php echo $rows['fathername'];?></td>
                 <td><?php echo $rows['dept'];?></td>
                 <td><?php echo $rows['addr'];?></td>
             </tr>
             <?php
                 }
             ?>
         </table>
     </section>
 </body>
  
 </html>
