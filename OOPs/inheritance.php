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

        public function message() {

          echo "is cherry a fruit or berry?";
        }

      }
      $cherry = new Cherry("Cherry", "red");
      $cherry->message();
      $cherry->intro();


     ?>

  </body>
</html>
