<script type="text/javascript">
  $(document).ready(function(){
    $("#sendMail").click(function(){
      
      var email = [];
      
      $(".email:checked").each(function(){
        email.push($(this).val());
      });

      if (email.length > 0) {
          $("#emailMsg").html('<div class="alert alert-primary">Please wait...!</div>');
          $.ajax({
            url : "send_mail.php",
            type : "POST",
            cache:false,
            data : {email:email},
            success:function(response){
              if(response == true) {
                $("#emailMsg").html(response);
              }else{
                $("#emailMsg").html();
              }
            }
          });
      }else{
        $("#emailMsg").html('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button> Plase Select at least one checkbox </div>');
      }
    })
  });
</script>