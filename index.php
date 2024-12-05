<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">

   <?php
    echo"<h1>"."Hello, world!"." "."how are you"."</h1>";
    echo"<h1>"."Hello, world!"." "."how are you"."</h1>";
    ?>


 <?php
name ="roni";
$name ="Rahat";
echo "<h1>". "his name is" ." ".$name. "</h1>";

//local variable scoping
function collingName(){
  $name ="Farid";
  echo "<h1>". "his name is" ." ".$name. "</h1>";
}
collingName();

//global variable scoping
$name ="Farid";

function collingName(){
 global $name;
  echo "<h1>". "his name is" ." ".$name. "</h1>";
}
collingName();

*/
//data Type ex=====
$name = "roni";
echo $name ."<br>";
var_dump($name);

$name = 500;
echo $name ."<br>";
var_dump($name);

$name = true;
echo $name ."<br>";
var_dump($name);

$name = NULL;
echo $name ."<br>";
var_dump($name);


//index arrey system datatype
$deta = array("roni","jon","Roja"."rafatullah");
echo $deta[0]. "<br>";
var_dump($deta);

//associtive arrey-----------

$result = array("roni" => 50,"jon" => 80,"Roja" => 60,"rafatullah" => 38);
echo $result['Roja'] . "<br>";
var_dump($result);



$num1 =5;
$num2 =8;
$total = $num1 + $num2;
echo $total;

$num3 =5;
$num4 =8;
if($num3 == $num4){
  echo "equal";
}else{
  echo "not uqal";
}


$i = 1;

do {
  if ($i ==5 ) break;
  echo $i;
  $i++;
} while ($i < 6);


$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}















 ?>
</div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>