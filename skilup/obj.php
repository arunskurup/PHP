<html>
    <title>Object</title>

    <body>

     <h1>The Fruit Program</h1>

      <?php
       
       class Fruit {

       public  $name;
       public  $color;
       
          function set_name($name){
            $this->name =$name;
          }
          function get_name(){
            return $this->name;
          }

     }
     $apple = new Fruit();
     $banana = new Fruit();

     $apple->set_name('apple');
     $banana->set_name("banana");

     echo $apple->get_name();
     echo "<br>" ;
     echo $banana->get_name();


       ?>
    </body>
</html>