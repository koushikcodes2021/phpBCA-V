<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program #2 LEAP YEAR OR NOT</title>
    <link rel="stylesheet" href="http://localhost/phppracticals/style.css"></head>

</head>
<body>
<form method="post">  
    Enter a year:  
    <input type="number" name="number">  
    <input type="submit" value="Submit">  
</form>
</body>
</html>

<?php   
    if($_POST){  
      function year_check($my_year){
         if ($my_year % 400 == 0)
            print("It is a leap year");
         else if ($my_year % 100 == 0)
            print("It is not a leap year");
         else if ($my_year % 4 == 0)
            print("It is a leap year");
         else
            print("It is not a leap year");
      }
      $my_year = $_POST['number'];
      year_check($my_year);
    }  
?>  