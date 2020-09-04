 <?php

        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "solid";

        $connection_String = mysqli_connect($host,$user,$pass,$database);

        
          if(!empty($_POST["txtmessage"])){
            $messageSender = $_COOKIE["user_first_name"];
            $newmessage = mysqli_real_escape_string($connection_String, $_POST["txtmessage"]);
            $perfect_table = $_COOKIE["correctTable"];
            
            $query = "INSERT INTO $perfect_table ( Usernames, Messages ) VALUES ('$messageSender','$newmessage')";
            if($run = mysqli_query($connection_String,$query)){
              echo "<embed loop='false' src='Notification.wav' autoplay='true' hidden='true'/>";
              echo "yes";
            };
          };
      
    
    ?>