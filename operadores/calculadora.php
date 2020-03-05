<?php
   function calcular($calculo){
    global $numero1;
    global $numero2;

    if(!strcmp("Suma",$calculo)){
      echo "El resultado es: " . ($numero1 + $numero2);
    }
    if(!strcmp("Resta",$calculo)){
      echo "El resultado es: " . ($numero1 - $numero2);
    }
    if(!strcmp("Multiplicación",$calculo)){
      echo "El resultado es: " . ($numero1 * $numero2);
    }
    if(!strcmp("División",$calculo)){
      echo "El resultado es: " . ($numero1 / $numero2);
    }
    if(!strcmp("Módulo",$calculo)){
      echo "El resultado es: " . ($numero1 % $numero2);
    }
    if(!strcmp("Incremento",$calculo)){
      $result = $numero1+=1;
      echo "El resultado es: " . ($result);
    }
    if(!strcmp("Decremento",$calculo)){
      $result = $numero1-=1;
      echo "El resultado es: " . ($result);
    }
  }
?>