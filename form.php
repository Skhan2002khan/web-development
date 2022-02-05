<?php
    // $insert = false;
    // if(isset($_POST['name'])){
      $server = 'localhost';
      $username = "root";
      $password = "";

      $con = mysqli_connect($server, $username, $password);

      if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
      }
      echo"connection success";
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $sql ="INSERT INTO `db`.`info` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";

      if($con->query($sql) == true){
        // echo "successfully inserted";
        $insert = true;
      }
      else{
        echo"error: $sql <br> $con->error";
      }

      $con->close();
    }
    
?>