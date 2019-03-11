<html>
    <head>
        <meta charset="UTF-8">
        <title>LISTA3</title>
    </head>
    <body>
        <?php
        echo  " PARTE 1: <br> " ;
        $numero=7;
        function NumeroPrimo ($numero){
        $count=0;
        for($i=1;$i<=$numero;$i++){
           if($numero % $i==0) {
               $count=$count+1;
           }
        }
           if($count==2){
               echo " Número é Primo ";
           } else {
               echo" Número é composto Composto ";
           }
        }             
       NumeroPrimo ($numero);         
         
       
       
       
        echo  "<br> PARTE 2: <br> " ;
        
        

    function primo($num) {
                $cont=0;  
                
                for ($i=1; $i<=$num; $i++){
                    if ($num%$i==0){
                        $cont++;
                   }
                }
                
                if ($cont == 2){
                    echo "<p> Número $num é Primo</p>";
                } else {
                    echo "<p> Número $num NÃO é Primo</p>";
                }
    }
    
    for ($i=1; $i<=100; $i++){
      primo ($i);  
    }

       ?>
        <ul>
            <?php

             echo  "<br> PARTE 3: <br> " ;

             $color = array(
                 'azul',
                 'verde',
                 'amarelo',
                 'laranja',
                 'rosa',
                 'dourado',
                 'prata',
                 'cinza',
                 'roxo',
                 'marrom'
                 );
                 function Cores ($color){

                     for($i=0;$i<count($color);$i++){
            ?>
            <li>
            <?php
                echo $color[$i];  
            ?>           
            </li>

             <?php
                     }

                 }
                 Cores($color);

             ?>
        </ul>
    </body>
</html>

