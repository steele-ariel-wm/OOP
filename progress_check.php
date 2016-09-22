<!DOCTYPE html>
<head>
<meta charset="UTF-8">

<title> OOP Progress Check </title>
  <?php spl_autoLoad_register(function($class_name){
    include $class_name . '.php';
  }); ?>
</head>

<body>
  <br>
</body>

<?php
class People{
  public $person1 = "Tina";
  public $person2 = "Bob";
  public $person3 = "Linda";
  public $person4 = "Louise";
  public $person5 = "Gene";

//   function iterateObject(){
//     foreach($this as $key => $value){
//       print "$key => $value \n";
//     }
//   }
// }
}
$people = new People;
foreach($people as $key => $value){
  print "$key => $value \n";
  echo '<br>';
}


$landscape = new photo("Landscape");
echo "One type of Photo: " . $landscape->get_name();

$portrait = new photography("Portrait");
echo "--->" . $portrait->get_name();

echo '<br>';

$effect = new BW();
$effect->name = 'Black and White';
$effect->color = 'White and Black';
//echo $animal->describe();
echo $effect->takePicture();
?>

</html>
