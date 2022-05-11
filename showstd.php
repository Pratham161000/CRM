<?php
include "./template/header.php";                 
?>
<html>   
  <head>   
    <title>showstudentdata</title>      
    <link rel="stylesheet" href="./css/css2.css">
    <link rel="stylesheet" type="text/css" href="./css/css.css"> 
  </head>   
  <body>  
  <div class="navigation">
	<ul>
  <li><a href="./profile.php">Admin <br>Profile</a></li>
    	<li><a href="./addstd.php">Add Student Information</a></li>
    	<li><a href="./showstd.php" class="active">Show Student Data</a></li>
      <li><a href="./email.php">Communication<br>via Gmail</a></li>
      <li><a href="./experiment1.php">Bulk <br> Mail</a></li>                                   
    </ul>
</div> 
  <center>  
    <?php  
           
        require_once "connection.php";   
    
        $showrecord = 10;  
        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $starting = ($page-1) * $showrecord;     
    
        $query = "SELECT * FROM studentinfo LIMIT $starting, $showrecord";     
        $final = mysqli_query ($con, $query);    
    ?>    
  
    <div class="container">   
      <br>   
      <div style="padding-right: 10px; padding-left: 10px; height: 100%">   
        <h1>Student Record</h1>   
        <table style="height: 100%">      
            <tr>
              <th>Select</th>   
              <th>ID</th>
              <th>Filler Name</th>   
              <th>Student Name</th>
              <th>Student Email</th>   
              <th>Gender</th>
              <th>School Name</th>
              <th>Standard</th>
              <th>Diploma/Degree</th>
              <th>City</th>
              <th>Phone Number</th>
            </tr>      
          <tbody>   
    <?php     
            while ($row = mysqli_fetch_array($final)) {        
            ?>     
            <tr>
            <td><?php echo "<input type='checkbox' name='rep[]' value=".$row['stdemail'].">"?></td>       
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["fillername"]; ?></td>     
            <td><?php echo $row["stname"]; ?></td>
            <td><?php echo "<a style='text-decoration: none' target='_blank' href='mailto:".$row['stdemail']."?cc=pratham619buddhadev@gmail.com&bcc=pratham619buddhadev@gmail.com&subject=Marwadi University&body=From ICT Department'>".$row['stdemail']."</a>"; ?></td>
            <td><?php echo $row["stgender"]; ?></td>   
            <td><?php echo $row["stschoolname"]; ?></td>
            <td><?php echo $row["ststandard"]; ?></td>
            <td><?php echo $row["stfortake"]; ?></td>
            <td><?php echo $row["stcity"]; ?></td>
            <td><?php echo "<a style='text-decoration: none' target='_blank' href='https://wa.me/91".$row['stphonenumber']."?text=Message%20From Marwadi%20University'>".$row['stphonenumber']."</a>"; ?></td>
            </tr>     
            <?php     
                };    
            ?>    
             
          </tbody>   
        </table>      
     <div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM studentinfo";     
        $final = mysqli_query($con, $query);     
        $row = mysqli_fetch_row($final);     
        $trecord = $row[0];     
          
    echo "</br>";        
        $tpage = ceil($trecord / $showrecord);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='showstd.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$tpage; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='showstd.php?page=".$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='showstd.php?page=".$i."'>".$i." </a>";     
          }   
        };     
        echo $pagLink;   

        if($page<$tpage){   
            echo "<a href='showstd.php?page=".($page+1)."'>  Next </a>";   
        }   
      ?>    
      </div>        
      <?php
            include "./template/footer.php";                
          ?>
    </div>   
  </div> 
  </body>   
</html>