  
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

        //ejercicio string
         $str = "Federico";
          $cont = 0;
          for($i=0; $i<strlen($str); $i++){
          echo "La letra '$str[$i]'"." esta en la posicion ".$cont."<br>";
          $cont ++;
          }

          //ejercicio
          $nombre = "Garcia, Maria";
          for($i=0; $i<strlen($nombre); $i++){
          echo "$i :".$nombre[$i]."<br>";
          }

          while (strpos($nombre,",",0)) {
            $pos = strpos($nombre,",",0);
            $apellido = substr($nombre,0,$pos); //$pos devuelve cantidad de letras
            $primer_nombre = substr($nombre, $pos+1, strlen($nombre)-$pos);

            echo $apellido;
            echo $primer_nombre;  
            $nombre = $primer_nombre;
            }
            
            // ejercicio word
             $str = 'peter es un nombre en inglés'; 
          echo ucwords($str) ."<br>"; //coloca mayusculas en cada primer palabra
          echo ucfirst($str)."<br>";  // coloca mayuscula en la primer palabra
          echo strtoupper($str)."<br>"; //mayusculas
          echo strtolower( $str)."<br>"; // minusculas
          echo trim( $str)."<br>"; //saca los espacios de los extremos
          echo strlen($str)."<br>"; //cuenta las palabras
          echo strpos($str, "un", 0)."<br>"; //en este caso busca la posicion donde empieza 'un'

          /*$cadena = "Didáctica y divulgación de la programación";

        while (strpos($cadena," ",0)) {
            $pal1 = strpos($cadena,0,9);
            $pal2 = substr($cadena,10,1);
            $pal3 = substr($cadena,12,11);
            $pal4 = substr($cadena,24,2);
            $pal5 = substr($cadena,27,2);
            $pal6 = substr($cadena,30,13);

            }*/

            $cadena1 = "gatos";
            $cadena1[0] = "p";
            echo $cadena1."<br>";
            $cadena1[1] = "e";
            $cadena1[3] = "a";
            $cadena1[4] = "l";
            $cadena1[5] = "o";
            $cadena1[6] = "s";
            echo $cadena1;

            //ejercicio 4 word
            $cadena2 = "Como no sabías disimular me di cuenta enseguida de que para verte como yo quería era necesario empezar por cerrar los ojos.  Rayuela Julio Cortázar";
            $caracteres = strlen($cadena2);
            echo "tiene $caracteres";
            $esp=strpos($cadena2, " ", 0);
            echo $esp;
          

        ?>     
    </table>
    </div>


  </div>


   ?>

	 ?>
