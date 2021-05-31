<html>
    <head>

    </head>
    <body>
        <?php

      
    $f=1;
     $hasil=0;
    for ($i=1; $i<=5;$i++) { 
    	$f=$f*$i;
    	$cem=$cem+$f;
    	if ($i==5) {
    		echo "$f".$i."= "."5!";
    		
    	}
    	else{
    		echo $i."*";
    	}
    }
   


         ?>
    </body>
</html>