<html>
  <head>
    <title>Herencia</title>
  </head>
  <body>
    <p>
      <?php
        class Figura {
          public $tieneLados = true;
        }
        
        class Cuadrado extends Figura {
        
        }
        
        $cuadrado = new Cuadrado();
        if (property_exists($cuadrado, "tieneLados") ) {
          echo "¡Tengo lados!";
        }
      ?>
    </p>
  </body>
</html>