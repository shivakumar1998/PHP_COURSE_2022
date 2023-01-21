<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      class Fruit {
        public $name;
        public $color;

        function __construct($name, $color){
          $this->name = $name;
          $this->color = $color;
        }

        function getName()
        {
          return $this->name;
        }
        function getColor(){
          return $this->color;
        }
      }

      $apple = new Fruit("Apple", "red");

      echo $apple->getName();
      echo "<br />";
      echo $apple->getColor();


     ?>

  </body>
</html>
