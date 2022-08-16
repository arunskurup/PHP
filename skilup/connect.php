<?php
if($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['submit'])){
    $conn = mysqli_connect('localhost','root','','php')or die("Connection Failed".mysql_connect_error());
   if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['blood'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $blood = $_POST['blood'];

      //Sql Query
       $sql ="INSERT INTO `test` (`id`, `name`, `email`, `phone`, `bgroup`) VALUES (NULL,'$name','$email','$phone','$blood')";
   

      $mysqli = new mysqli("localhost","root","","php");

      // Check connection
      if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }
      
      // Perform query
      if ($result = $mysqli -> query($sql)) {
         if ($result) {
             echo"Entry Successfull";
         }else{
             echo"Error Occured";
             }
        }
      
      $mysqli -> close();


               
   }
}
?>