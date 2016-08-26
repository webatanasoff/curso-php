  
 <?php

    // tabla del 5 con WHILE
    $num = 5;
    $cont = 1;
    while($cont<=10){
      echo $num." x ".$cont." = ".($cont*$num)."<br>";
      $cont++;
    }

    //tabla del 5 con FOR
    for ($i=1; $i<=10; $i++){
      echo $num." x ".$i." = ".($num*$i)."<br>";
    } 

    //ejercicio1
    //1) Un bucle while que cuente desde 50 hasta 40 (fíjate que en este caso es decreciente)
    $num1 = 50;
    while ($num1>=40) {
    echo ($num1)."<br>";
    $num1--;
    }

    //ejercicio 2
    //2) Hacer el ejercicio 1 pero usando. do…while que cuente desde 50 hasta 40 (fíjate que en este caso es decreciente)
    $num2 = 50;
    do {
      echo $num2;
      $num2--;
    } while ( $num2>= 40);

    //ejercicio 3
    //3) Hacer el ejercicio 1 pero usando for que cuente desde 50 hasta 40 (fíjate que en este caso es decreciente)
    $num4= 51;
    for ($i=1; $i<=11 ; $i++) { 
      echo $num4-$i."<br>";
    }

    //ejercicio 4
    //4) Un bucle while que a partir de una variable $contador que toma valores de 1 a 5, muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.
    $contador = 1;
    while ($contador<=5) {
      echo $contador*2,"<br>";
      $contador ++;
    }

    //ejercicio 5
    //5) Hacer el ejercicio anterior con do…while, que a partir de una variable $contador que toma valores de 1 a 5, muestre por pantalla el doble del valor de $contador, es decir, que muestre 2, 4, 6, 8, 10.
    $contador2 = 1;
    do {
        echo $contador2*2,"<br>";
        $contador2++;
    } while ($contador2<=5);

    //ejercicio 6
    // 6) Crear un bucle while para que imprima Una tabla con 5 filas que digan “Este texto es muy interesante”, donde la primera fila sea un <h1> , la segunda <h2>, así hasta la quinta <h5>
    $contador3 =1;
    while ($contador3<=5) {
       echo "<h$contador3> Este texto es muy interesante </h$contador3>";
       $contador3++;
     } 


     //ejercicio de tablas
     <div class="container" >
    <h1>hello friend</h1>
    <div class="col-md-4">
    <table class="table table-bordered">
        <?php

        $cont1=1;
        while($cont1<11){
          echo "<tr>
          <td> Fila $cont1 </td>
          
          
          <td> Fila $cont1 </td>
          </tr>";
          $cont1++;
        }

        ?>     
    </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <table class="table table-bordered">
        <?php

        $cont1=1;
        while($cont1<11){
          echo "<tr>
          <td> Fila $cont1 - Col 0</td>
          <td> Fila $cont1 - Col 1</td>
          <td> Fila $cont1 - Col 2</td>
          
          </tr>";
          $cont1++;
        }

        ?>     
    </table>
    </div>


  </div>


   ?>

	 ?>
