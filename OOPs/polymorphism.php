<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    class Fruit{
      public $name;
      public $color;

      public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
      }

      //from parent class only public methods derived into the child class
      public function intro() {

        echo "a {$this->name} is a fruit of color {$this->color}.";

      }

    }

    class Cherry extends Fruit{

      public $weight;
      public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
      }

      public function intro() {

        echo "A {$this->name} is a fruit of color {$this->color} and the weight of fruit is  {$this->weight} grams.";

      }

    }

    $cherry = new Cherry("cherry", "red", 100);
    $cherry->intro();



     ?>

  </body>
</html>
