<?php
    $randomNum = rand( 1, 3);
    print_r('Твій варіант '.$_POST["variant"].'<br>');
    switch( $randomNum ){
        case 1:
            print_r("Варіант комп'ютера Ножиці <br>");
            switch ( $_POST['variant'] ){
                case "Ножиці":
                    print_r( 'Нічия<br>' );
                    break;
                case "Папір":
                     print_r( "Переміг ком'ютер<br>" );
                     break;
                case "Камінь":
                     print_r( 'Твоя перемога<br>' );
                     break;
            }
            break;
        case 2:
            print_r("Варіант комп'ютера Папір <br>");
            switch ( $_POST['variant'] ){
                case "Ножиці":
                    print_r( 'Твоя перемога<br>' );
                    break;
                case "Папір":
                     print_r( 'Нічия<br>' );
                     break;
                case "Камінь":
                     print_r( "Переміг ком'ютер<br>" );
                     break;
            }
            break;
        case 3:
            print_r("Варіант комп'ютера Камінь <br>");
            switch ( $_POST['variant'] ){
                case "Ножиці":
                    print_r( "Переміг ком'ютер<br>" );
                    break;
                case "Папір":
                     print_r( 'Твоя перемога<br>' );
                     break;
                case "Камінь":
                     print_r( 'Нічия<br>' );
                     break;
            }
            break;
    }
    print_r('<form name="game" action="index.html" method="post">
                     <input type="submit" name="back" value="Грати знову">
                     </form>');
?>