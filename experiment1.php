<?php
//index.php
$connect = new PDO("mysql:host=localhost;dbname=project", "root", "");
$query = "SELECT * FROM studentinfo ORDER BY id";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
?>
<?php
include "./template/header.php";                 
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Experiment 1</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Bulk Mail</h3>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <tr>
      <th>Student Name</th>
      <th>stdemail</th>
      <th>Select</th>
      <th>Action</th>
     </tr>
     <?php
     $count = 0;
     foreach($result as $row)
     {
      $count++;
      echo '
      <tr>
       <td>'.$row["stname"].'</td>
       <td>'.$row["stdemail"].'</td>
       <td>
        <input type="checkbox" name="single_select" class="single_select" data-stdemail="'.$row["stdemail"].'" data-stname="'.$row["stname"].'" />
       </td>
       <td><button type="button" name="stdemail_button" class="btn btn-info btn-xs stdemail_button" id="'.$count.'" data-stdemail="'.$row["stdemail"].'" data-stname="'.$row["stname"].'" data-action="single">Send Single</button></td>
      </tr>
      ';
     }
     ?>
     <tr>
      <td colspan="3"></td>
      <td><button type="button" name="bulk_stdemail" class="btn btn-info stdemail_button" id="bulk_stdemail" data-action="bulk">Send Bulk</button></td></td>
     </td>
    </table>
   </div>
  </div>
 </body>
</html>
<?php
include "./template/footer.php";                 
?>
<script>
$(document).ready(function(){
 $('.stdemail_button').click(function(){
  $(this).attr('disabled', 'disabled');
  var id = $(this).attr("id");
  var action = $(this).data("action");
  var stdemail_data = [];
  if(action == 'single')
  {
   stdemail_data.push({
    stdemail: $(this).data("stdemail"),
    stname: $(this).data("stname")
   });
  }
  else
  {
   $('.single_select').each(function(){
    if($(this). prop("checked") == true)
    {
     stdemail_data.push({
      stdemail: $(this).data("stdemail"),
      stname: $(this).data('stname')
     });
     
    }
   });
  }
  
  $.ajax({
   url:"send_mail.php",
   method:"POST",
   data:{stdemail_data:stdemail_data},
   beforeSend:function(){
    $('#'+id).html('Sending...');
    $('#'+id).addClass('btn-danger');
   },
   success:function(data){
    if(data = 'ok')
    {
     $('#'+id).text('Success');
     $('#'+id).removeClass('btn-danger');
     $('#'+id).removeClass('btn-info');
     $('#'+id).addClass('btn-success');
     document. write("<td>"+stdemail_data+"</td>");
    }
    else
    {
     $('#'+id).text(data);
    }
    $('#'+id).attr('disabled', false);
   }
   
  });
 });
});
</script>