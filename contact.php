<?php

if(isset($_POST['submit'])){
   
   $username = $_POST['user'];
   $email = $_POST['email'];
   $messeges = $_POST['msg'];

  $insertquery = "insert into coronacase( username,email,message,) values('$username','$email',' $messeges')";

  $query= mysqli_query($con,$insertquery);

  if($query){ 
      //echo "sucesses";
     ?>
     <script>
        alert("SUBMITED SUCESSESFUL");
     </script>


     <?php
}else{
  //echo "uncessesful";
      ?>
     <script>
        alert("UNSUCESSESFULL");
     </script>


     <?php

}

}


?>