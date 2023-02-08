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

      public function __construct($name)
      {
        $this->name = $name;
      }
   }
   $prod1 = new produit("iPhone 14");
   echo $prod1->name."\n";

   $prod2 = new produit("iphone 14 pro");
   echo $prod2->name;
 ?>  
</body>
</html>