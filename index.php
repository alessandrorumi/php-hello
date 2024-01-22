<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
</head>
<body>

  <?php
    $greeting = " Hello, world! ";
    echo $greeting;
    echo "<br>";
    
    $greeting = trim($greeting);
    var_dump($greeting);
    echo "<br>";

    $words = explode(" ", $greeting);
    
    // echo $greeting;
    var_dump($words);
    echo "<br>";

    $underGreeting = str_replace(" ", "_", $greeting);
    var_dump($underGreeting);
    echo "<br>";

    $lng = strlen($greeting);
    var_dump($lng);
    echo "<br>";

    $underIndex = strpos($underGreeting, "_");
    var_dump($underIndex);
    echo "<br>";

    $upperGreetings = ucwords($greeting);
    echo $upperGreetings;
  ?>
  
</body>
</html>