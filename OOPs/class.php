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

      


     ?>

  </body>
</html>
