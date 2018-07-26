<!DOCTYPE html>
<html lang=fr>
<head>
  <meta charset="utf-8" />
  <title>Exercice 3</title>
</head>
<body>
  <p>
    <?php
    $magnitude = 5;
    echo ($magnitude == 1)? 'Micro-séisme impossible à ressentir.' : '';
    ?>
  </p>
  <p>
    <?php
    echo ($magnitude == 2)? 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.' : '';
    ?>
  </p>
  <p>
    <?php
    echo ($magnitude == 3)? 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.' : '';
    ?>
  </p>
  <p>
    <?php
    echo ($magnitude == 4)? 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.' : '';
    ?>
  </p>
  <p>
    <?php
    echo ($magnitude == 5)? 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.' : '';
    ?>
  </p>
  <p>
    <?php
    echo ($magnitude == 6)? 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.' : '';
    ?>
  </p>
  <p>
    <?php
    echo ($magnitude == 7)? 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.' : '';
    ?>
  </p>
  <p>
    <?php
    echo ($magnitude == 8)? 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.' : '';
    ?>
  </p>
  <p>
    <?php
    echo ($magnitude == 9)? 'Séisme capable de tout détruire sur une très vaste zone.' : '';
    ?>
  </p>
</body>
</html>
