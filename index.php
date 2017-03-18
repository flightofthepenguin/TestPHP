<!DOCTYPE html>
<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='style.css'/>
		  <title>Martinator</title>
	  </head>
	  <body>
	     <p>Unter jedem Becher steckt entweder ein MiniaturMartin oder eine MiniaturEva. Sind 5 Martins hintereinander in einer Reihe bringt es das Spiel zum Absturz.</p>
	      <?php
	      $headCount = 0;
	      $flipCount = 0;
	      while ($headCount < 5) {
		        $flip = rand(0,1);
		        $flipCount ++;
		        if ($flip){
			          $headCount ++;
            		echo "<div class=\"coin\">M</div>";
		        }
		    else {
			       $headCount = 0;
			          echo "<div class=\"coin\">E</div>";
		        }
	}
	             echo "<p>Es brauchte {$flipCount} Becher bevor 5 Martins in einer Reihe waren!</p>";
	?>
    </body>
</html>
