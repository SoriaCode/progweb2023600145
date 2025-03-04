<html>
    <head>
        <title>Hola Mundo PHP!</title>
</head>
<body>
    <h1>La secuencia de Fibonacci</h1>
            
        <?php
             $a=1;
             $b=0;
             $c=0;
             echo "$b <br>";
             echo "$a <br>";
            for($i=0; $i<2048; $i++){
                $c = bcadd($a, $b);
                echo "$c <br>";
                $b = $a;
                $a = $c ; 
            }
           ?>       
            

</body>
</html>