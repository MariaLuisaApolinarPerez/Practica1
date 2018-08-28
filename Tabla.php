<html>
    <body>

        <h1>Tabla del <?php
           $numero=intval($_POST['numero']);
           echo $numero;
        ?>
        </h1>
        <ul>
            <?php
            for($i=1;$i<=10;$i++){
              if ($i%2==0){ // Es par $i
                echo "<li><span style='color:red'>$numero x $i = ";
                echo $numero*$i;
                echo "</span></li>";                            
              }    //Fin del if
              else{
                echo "<li>$numero x $i = ";
                echo $numero*$i;
                echo "</li>";
              } //Fin del else
            } //Fin del for            
            ?>            
        </ul>

    </body>

</html>