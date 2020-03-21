
<?php
	//print_r($_POST);
	$column = $_POST['j'];
	$line = $_POST['i'];
	 $str = $_POST['array'];
	  $startarr = explode( ",",$str );
	  $k = 0;
	  $arr = array();
	  for ( $i=0; $i < count($startarr); $i++ ){
	    if( $startarr[$i] == 0 ){
            continue;
	    }
	    else{
	        $arr[$k] = (int)$startarr[$i];
	        $k++;
	    }
	  }
	  if( count($arr) == 0 ){
	    print_r( 'Немає цілих чисел в масиві' );
	    exit;
	  }
	  if( count($arr) == 1 ){

      	    echo '<table style = " border-collapse: collapse; ">';
      	    echo '<tr>';
      	    echo '<td style = "border: 1px solid grey; padding: 10px; font-size: 40px;">'.$arr[0].'</td>';
      	     echo '</tr>';
      	     echo '</table>';
      	    exit;
      	  }
	  for ( $i = 2; $i <= count($arr); $i++ ){
	    if( count($arr) % $i ==0 ){
	        $kol = $i;
	        break;
	    }
	  }
	  $k=0;
	  for ($i=0; $i < $kol; $i++) {
	    $finalArr[$i] = array();
	    for ($j=0; $j < count($arr) / $kol; $j++) {
	        $finalArr[$i][$j] = $arr[$k];
	        $k++;
	    }

	  }
	  echo '<table style = " border-collapse: collapse; ">';
      	  for ($i=0; $i < $line; $i++) {
      	        echo '<tr>';
            	    for ($j=0; $j < $column; $j++) {
            	        echo '<td style = "border: 1px solid grey; padding: 10px; font-size: 40px;">'.$finalArr[$i][$j].'</td>';
            	        //echo $j;
            	    }
      	        echo '</tr>';
      	  }
      	  echo '</table>';
?>
