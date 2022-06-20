<?php
 $link = mysqli_connect("localhost","root","","registration.com");

 if($link)
 {
     echo "connected successfully";
 }
 $name=$_POST['name'];
 $email=$_POST['email'];
 $project=$_POST['project'];
 $message=$_POST['message'];

 $query = "insert into portfolio values('$name','$email','$project','$message')";
 //$del = "DELETE from student where email=''";
 //$updat = "UPDATE student set $name='' where email=''";
 $run = mysqli_query($link,$query);
 
?>