<?php 
       $host = 'localhost';
       $user = 'root';
       $pass = '';
       $db_name = 'blog_btl';
       
       $conn = new MySQLi($host, $user, $pass, $db_name);
       
       if ($conn->connect_error) {
           die('Database connection error: ' . $conn->connect_error);
       }
        if(isset($_POST['submit'])){

         
          $email=$_POST['email'];
          $message =$_POST['message'];
          $sql= "INSERT into contact( email, message) values ('$email', '$message');";
          
          if( mysqli_query($conn,$sql)){
            header('location: index.php  ');
          }else{
          echo "<script>alert('Sorry an error occured!')</script>";
          echo $sql;
}
        }
        // header('Location: index.php')
        
      ?>