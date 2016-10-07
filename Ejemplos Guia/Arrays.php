<html>
  <head>
    <title>Arrays en PHP</title>
  </head>
  <body>
    <p>
      <?php
        $languages = array("HTML/CSS","JavaScript", "PHP", "Python", "Ruby"); //definicion de un array
        //impresion de un array
        foreach($languages as $lang) {
          print "<p>$lang</p>";
        }
        print "======="; //Separacion de elementos (Solo impresion)
        //Eliminar un elemento del array
        unset($languages[3]); //Eliminacion de Python
        
        //impresion del array resultante
        foreach($languages as $lang) {
          print "<p>$lang</p>";
        }
      ?>
    </p>
  </body>
</html>