<html>
  <head>
    <title>Clases y Métodos</title>
  </head>
  <body>
    <p>
      <?php
        class Persona {
          public $viva = true;
          
          function __construct($nombre) {
              $this->nombre = $nombre;
          }
          
          public function bailar() {
            return "¡Estoy Bailando!";
          }
        }
        
        $yo = new Person("John");
        if (is_a($yo, "Persona")) {
          echo "Soy una persona, ";
        }
        if (property_exists($yo, "nombre")) {
          echo "Tengo un nombre, ";
        }
        if (method_exists($yo, "bailar")) {
          echo "y se como bailar!";
        }
      ?>
    </p>
  </body>
</html>