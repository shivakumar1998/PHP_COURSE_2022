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

        //constructor creation
        function __construct($name, $color){
          $this->name = $name;
          $this->color = $color;
        }

        //destructor creation
        function __destruct() {
          echo "The fruit is {$this->name} and the color is {$this->color}.";

        }
      }

      $apple = new Fruit("Apple", "red");


     ?>

  </body>
</html>
