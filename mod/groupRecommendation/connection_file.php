<?php
    // Connection to the database
     $dbc = mysqli_connect('localhost','root','testadmin','elgg');
     if(!$dbc){
     die ("Not Connected :".mysqli_connect_error());	
     }
   ?>
