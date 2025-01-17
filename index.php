<?php
   // output command
   // echo, print, primt_r   echo and print display string  while print_r display all, obj array and spring
   // PHP -> PHP HYPERTEXT PREPROCESSOR

   echo("you are welcome");
   echo("<br/>");
   print("hi");
   echo("<br/>");
   print_r("heloooo");
   echo("<br/>");
   echo "<b> Heloo oscar is my name  am displaying bold tag  <b/>";
   echo("<br/>");
   
   //variable 
   $name = "Oscar";
   echo $name;
   echo("<br/>");
   $details = "software developer";
   echo $name . " is a " . $details;
   echo("<br/>");
  
   // array
   $myarry = array();
   $ourarry = [];

   $student = ["Oscar", "Seniorman", "Ayotunde"];
   print_r($student);
   echo("<br/>");
   print_r($student[2]);

   



?>