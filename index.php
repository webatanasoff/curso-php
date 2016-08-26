<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   
  </head>
  <body>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
