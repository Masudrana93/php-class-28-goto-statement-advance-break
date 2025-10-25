<h1> Goto Statement / Advance Break </h1>


<!-- /*=====================================
         Goto Statement / Advance Break
========================================*/ -->


<!-- Jokhon akta nested loop / (outer and inner loop) cholte thake, tokhon jodi amader break newar proyojon hoy / somporno loop theke beriye jete chai, tokhon amra Goto Statement / Advance Break use kori. -->


<?php
   for ( $outer_list = 1; $outer_list <= 3; $outer_list++ ) {

         echo "List $outer_list<br>";

         for ($inner_list = 1; $inner_list <=2; $inner_list++){
            echo "---Inner list $inner_list<br>";

            if ( $outer_list == 2 && $inner_list == 1 ) {
                break; 
            }
         }
   }

// Note: amra jodi oporer if structure [   if ( $outer_list == 2 && $inner_list == 1 ) { break; }   ] ta  use kori, tokhon ata condition onojaye 'outer loop' ($outer_list) 2 bar cholar por and inner loop ($inner_list) 1 bar cholar por ata next outer loop (3 bar loop) a chole jabe and condition fulfill na howa porjonto cholte thakbe. tar mane holo akhane ata inner loop k ditio bar er mathai shodo akbar run/show korbe but somporno loop theke beriye jabena. jodio main inner loop condition onojae 2 bar cholar kotha bola ache. atai holo break er kaj.

echo "<br>";
echo "<br>";

?>



<?php
 
//Advance break:

   for ( $outer_list = 1; $outer_list <= 3; $outer_list++ ) {

         echo "List $outer_list<br>";

         for ($inner_list = 1; $inner_list <=2; $inner_list++){
            echo "---Inner list $inner_list<br>";

            if ( $outer_list == 2 && $inner_list == 1 ) {
                break 2; 
            } 
         }
   }
 echo "End";

   // amra jokhon kono loop chola kale shomporno vabe oi loop theke beriye jete chai, tokhon advance break use korbo (opor er example er moto if condition diye). 

   // akhane ' break 2; ' use kora hoyeche, er mane holo ata outer loop theke beriye jabe. 
   // akhane if condition er oporer loop ta k 1 and tar oporer loop ta 2 hishebe count kora hoyeche. tai 2 ' break 2; ' likha hoyeche.

   // jokhon onekgolo Nested loop akshate thake and er majkhan theke beriye ashar proyojon hoy, tokhon ata beshi kaje lage.
?>


<?php
 
// goto:

   for ( $outer_list = 1; $outer_list <= 3; $outer_list++ ) {

         echo "List $outer_list<br>";

         for ($inner_list = 1; $inner_list <=2; $inner_list++){
            echo "---Inner list $inner_list<br>";

            if ( $outer_list == 2 && $inner_list == 1 ) {
                goto out; 
            } 
         }
   }

   out:   // ami loop theke jekhane beriye jete chai, shekhane akta word/name with colone (:) [ example-  out:   ]  likhte hobe . Then ' goto ' erpor shordo ae word/name ta likhte hobe. tahole ata advance loop er moto loop theke beriye jabe.
 echo "End";

?>
 




