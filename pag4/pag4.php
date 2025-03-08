<html>
    <head><title>Expresion</title></head>
    <body>

        <h1>A)</h1>
        <img src="/pag4/a.png"/>
        <p><?php 
        #primera expresion
        $x=2;
        $y=4;
        $c=(1/$x)+(($x+$y)/3)+(2*($x/$y));
        echo $c 
        ?></p>

        <h1>B)</h1>
        <img src="/pag4/b.png"/>
        <p><?php 
        #segunda expresion
        $x=3;
        $c=((1/2*$x)+((3+$x)/2)*(2*pow($x,2)))/((2+3)*$x);
        echo $c 
        ?></p>

        <h1>C)</h1>
        <img src="/pag4/c.png"/>
        <p><?php 
        #tercera expresion
        $x=2;
        $c=((sqrt(pow((2*$x),2)+pow(3,2)))/5)+(sqrt(pow($x,2)));
        echo $c 
        ?></p>

        <h1>D)</h1>
        <img src="/pag4/d.png"/>
        <p><?php 
        #cuarta expresion
        $x=2;
        $c=(((1/2)+(1/4)+(1/8))*(pow($x,(1/3))))/((sqrt($x)/2)+((3*pow($x,2))/4));
        echo $c 
        ?></p>

        <h1>E)</h1>
        <img src="/pag4/e.png"/>
        <p><?php 
        #quinta expresion
        $x=4;
        $c=sqrt(((pow($x,2)/2)+(1/sqrt($x)))/(3+(1/2)*(pow($x,3))));
        echo $c 
        ?></p>


    </body>
</html>