

<?php

class Wordbook {
    
    /*
     *  class wordbook bere slova z csv souboru list.csv a generuje je pomocí for cyklu
     */

    public function generateWords($wordsnum) {
        /*
         *  pozn. - program nastaven na 1000 slov => index.php
         */
        
        $list = fgetcsv(fopen("list.csv", "r"), 10000, ";");

        for ($i = 0; $i < $wordsnum; $i++) {

            if ($i == $wordsnum - 1) {
                
                echo $list[array_rand($list)];
                
            } else {
                
                echo $list[array_rand($list)] . " ";
            }
        }
        
        echo ".";
    }
        /*
         *  poslední úprava 19.11. //14
         */
}

?>