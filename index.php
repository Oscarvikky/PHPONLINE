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
    echo("<br/>");
    for ($i=0; $i < count($student) ; $i++) { 
        echo("<br/>");
        echo " my number is " . $i . " and my name is " . $student[$i] ;
    }

    echo("<br/>");

  

    // associative arry
    $studentlist = array("name" => "Oscar", "department" => "software", "school" => "Sqi");
    print_r($studentlist);
    echo("<br/>");

    foreach ($studentlist as $key => $value) {
        echo("<br/>");
      echo " The " . $key . " is " . $value;
    };


   



?>