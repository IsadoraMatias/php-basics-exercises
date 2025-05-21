  <?php

  echo '<strong style="color: green; font-size: 18px;">Ejercicio 1</strong><br>';
  //Define a variable of each type: integer, double, string, and boolean. Print them on screen.

  $age = 5; //integer
  $weight = 2.8; //float
  $name = "Haru"; //string
  $dog = true; //boolean

  echo "<pre>";
  echo $age . "\n";
  echo $weight . "\n";
  echo $name . "\n";
  echo ($dog ?  "true" : "false") . "</pre>";


  //Then create a constant that includes your name and display it in title format per screen.
  echo '<strong style="color: green; font-size: 18px;">Name</strong><br>';
  define("MY_NAME", "isadora matias");
  echo "<pre>" . ucwords(MY_NAME) . "</pre>";

  echo '<strong style="color: green; font-size: 18px;">Ejercicio 2</strong><br>';

  $greetings = "Hello, World!";

  echo "<pre>";
  echo $greetings . "\n";
  "</pre>";

   echo $uppercase = strtoupper($greetings). "\n";
   echo $lenght = strlen($greetings). "\n";
   echo $reverse = strrev($greetings). "\n";
  
  $course = "Aquest és el curs de PHP.";

  echo "<pre>";
  echo $greetings . " " . $course;
  echo "</pre>";

  echo '<strong style="color: green; font-size: 18px;">Ejercicio 3</strong><br>';

  $x = 4;
  $y = 7;

  $n = 1.5;
  $m = 3.4;

  echo "<pre>";
  echo $x . "\n";
  echo $y . "\n";
  echo $n . "\n";
  echo $m . "\n";

  echo ($x + $y) . "\n";
  echo ($n + $m) . "\n";

  echo ($x - $y) . "\n";
  echo ($n - $m) . "\n";

  echo ($x * $y) . "\n";
  echo ($n * $m) . "\n";

  echo ($x % $y) . "\n";
  echo fmod($n,$m) . "\n";

  echo ($x * 2). "\n";
  echo ($y * 2). "\n";

  echo ($n * 2). "\n";
  echo ($m * 2). "\n";

  echo ( $x + $y + $n + $m) . "\n";
  echo ($x * $y * $n * $m) . "\n";
"</pre>" . "\n";

function calc ($num1,$num2,$operator){
  if($operator === "sum"){
    echo $num1 + $num2 ."\n";
  } else if ($operator === "sub"){
      echo $num1 - $num2 ."\n";
    }
    else if ($operator === "mult"){
      echo $num1 * $num2 ."\n";
    }
    else if ($operator === "div"){
      echo $num1 / $num2 ."\n";
    }
    else{
      echo "ERROR"."\n";
    }
  }

echo calc(4,6, "sum");
echo calc(4,6, "sub");
echo calc(4,6, "mult");
echo calc(12,6, "div")."\n";

echo '<strong style="color: green; font-size: 18px;">Ejercicio 4</strong><br>';

?> 