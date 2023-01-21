<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>The fruit program</h1>
    <?php

      class Fruit
      {
        //member variables
        public $name;
        public $color;

        function set_name($name){
          $this->name = $name;
        }

        function set_color($color){
          $this->color = $color;
        }

        function get_name(){
          return $this->name;

        }

        function get_color(){
          return $this->color;
        }

      }

      //Object creation
      $apple = new Fruit();
      $banana = new Fruit();

      $apple->set_name('Apple');
      $apple->set_color('red');

      $banana->set_name('banana');
      $banana->set_color('yellow');

      echo $apple->get_name();
      echo "<br />";
      echo $apple->get_color();
      echo "<br />";
      echo $banana->get_name();
      echo "<br />";
      echo $banana->get_color();




     ?>

  </body>
</html>
