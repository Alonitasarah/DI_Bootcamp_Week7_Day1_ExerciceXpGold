<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      class produit
      {
         public $name;
         public $description;
         public $price;
   
         public function __construct($name, $description, $price)
         {
           $this->name = $name;
           $this->description = $description;
           $this->price = $price;
         }
      }
      $prod1 = new produit("iPhone 14","un téléphone performant","5000f");
      echo $prod1->name."\n";
      echo $prod1->description."\n";
      echo $prod1->price."\n\n";
   
      $prod2 = new produit("iphone 14", "plus performant", "10000");
      echo $prod2->name."\n";
      echo $prod2->description."\n";
      echo $prod2->price."\n";
    ?>
</body>
</html>