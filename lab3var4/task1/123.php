<?php
	//print_r($_POST);
	 $str = $_POST['array'];
	  $arr = explode( ",",$str );
	  for ( $i=0; $i < count($arr); $i++ ){
	    if( $arr[$i] == 0 ){
            unset( $arr[$i] );
	    }
	    else{
	        $arr[$i] = (int)$arr[$i];
	    }
	  }
	  if( count($arr) == 0 ){
	    print_r( 'Немає цілих чисел в масиві' );
	    exit;
	  }
	  if( count($arr) == 1 ){
      	    print_r($arr );
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
	    }
	    $k++;
	  }
	  print_r($finalArr);
?>