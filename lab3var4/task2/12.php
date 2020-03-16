<?php
    $helpfile = file_get_contents( 'results.txt' );
    $help = unserialize( $helpfile );
    $answer = file( 'answer.txt' );
    if ( count( $answer ) == 0 ){
        $randomNumber = rand( 1, 100 );
        file_put_contents ( 'answer.txt', $randomNumber );
        $answer = $randomNumber;
    }
    if ( $_POST['variants'] == 'HELP' ){
        //print($help);
        if ( /*count($help) == 0*/ !$help ){
                print('Попередніх результатів з правильною відповіддю немає, спробуйте ще раз');
        }
        else{
            $handle = fopen("results.txt", "r");
            while (!feof($handle)) {
                $buffer = fgets($handle, 4096);
                echo $buffer;
                echo '<br>';
            }
            fclose($handle);
        }
    }
    else{
        $guesses = explode ( ',', $_POST['variants'] );
        if ( count( $guesses ) == 1 && $guesses[0] == $answer[0] ){
            print( 'Ви вгадали!!!' );
            file_put_contents( 'answer.txt','' );
            file_put_contents( 'results.txt','' );
            print('<form name="form" action="index.html">
                                               <input type="submit" name="Enter" value="Грати знову">
                                           </form>');
            exit;
        }
        else{
            $count = 0;
            foreach ( $guesses as $variant ){
                if ( $variant == $answer[0] ){
                    print( 'Yes' );
                    $array = serialize($guesses);
                    $fp = fopen("results.txt", "a+");
                    fputs( $fp, $array.PHP_EOL );
                    print('<form name="form" action="12.php" method="post">
                                   <input type="edit" name="variants" placeholder="Ваші варіанти">
                                   <input type="submit" name="Enter" value="Enter">
                               </form>');
                    fclose( $fp );
                    exit;
                }
            }
            if( $count == 0 ){
                print( 'No' );
            }
        }
    }
print('<form name="form" action="12.php" method="post">
                                   <input type="edit" name="variants" placeholder="Ваші варіанти">
                                   <input type="submit" name="Enter" value="Enter">
                               </form>');
?>