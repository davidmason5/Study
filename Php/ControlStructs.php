<?php
//If Statement
if ($age > 18)
{
    echo "Welcome";
}


//If - Else

$x = 10;
$y = 20;

if ($x >= $y) {
    echo $x;
} else { 
    echo $y;
}
//Outputs "20"

if (age == 18){
    echo "Happy 18th Birthday";
} elseif (age <18){
    echo "You are not 18 yet";
} else {
    echo "Hope you enjoyed your 18th birthday";
}

//The while loop
//The while loop executes a block of code as long as the specified condition is true.
$i =1;
while ($i <= 15) {
    echo $i;
    $i++;
 }

 //The do...while Loop
//The do...while loop will always execute the block of code once, 
//check the condition, and repeat the loop as long as the specified condition is true.

$i = 1;
do {  echo "Hello"; }
while($i < 0);
//Will still run once

//For Loop
for ($a = 0; $a<6; $a++){
    echo "Value of a : ". $a . "<br />";
}

//Value of a : 0    goes down a line upto 5

$items = array("one", "two", "three");

foreach ($items as $item){
   echo $item ."<br />";
}

//Switch
$today = 'Tue';

switch ($today) {
    case "Mon":
        echo "Today is Monday.";
        break;
    case "Tue":
        echo "Today is Tuesday.";
        break;
    case "Wed":
        echo "Today is Wednesday.";
        break;
    case "Thu":
        echo "Today is Thursday.";
        break;
    case "Fri":
         echo "Today is Friday.";
         break;
    case "Sat":
         echo "Today is Saturday.";
         break;
    case "Sun":
         echo "Today is Sunday.";
         break;
    default:
         echo "Invalid day.";
}

//outputs Today is Tuesday

//break
for ($i=0;$i<=50;$i++)  {

    echo $i;
    if ($i==5) {
    break;
    }
  }

  //Continue
  for ($i=0; $i<=15;$i++) {

    if ($i==10 || $i == 14) {
  
  continue;
  }
    echo $i."<br />";
  } 
  //outputs all numbers except for those between 10 and 14

 

//Include 
?>
<html>
  <body>

  <?php include 'header.php'; ?>

  <p>Use require when the file is required 
    for the application to run.
    Use include when the file is not required. 
    The application should continue,
    even when the file is not found.</p>
  </body>
</html>

