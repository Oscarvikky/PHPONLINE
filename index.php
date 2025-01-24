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
    
    echo("<br/>");

    $obj = new stdclass;
    $obj->name = "Oscar";
    $obj-> depertment = "software";
    $obj->school ="SQI";

    $studentarry = [];
    array_push($studentarry, $obj);
    print_r($studentarry);


    $mainarray = [];
    $firstArray = array("name" => "Oscar", "department" => "software", "school" => "SQI");

    $secondArray = array("name" => "Onola", "department" => "Data", "school" => "SQI");

    $thirdArray = array("name" => "Oscar", "department" => "UI/UX", "school" => "SQI");

     array_push($mainarray, $firstArray, $secondArray, $thirdArray);

     echo("<br/>");
   foreach ($mainarray as $student) {
    foreach ($student as $key => $value) {
      echo("<br/>");
      echo " the ". $key . " is " . $value;
    }
   }
     session_start();
     

     if (isset($_POST["submit"])) {
      $firstname =$_POST["firstname"];
      $lastname =$_POST["lastname"];
      $email =$_POST["email"];
      $password =$_POST["password"];

      if (empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
        $_SESSION['message'] = "all fields must be filed";
        header('location: form.php');
      }

     }
?>