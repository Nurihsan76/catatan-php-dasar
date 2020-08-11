<?php

/*struktur kendali 
 pengulangan pada php 
1. for 
2. while
3. do.. while 
4. for each = pengulangan khusus array
hampir sama cara nya dengan pengulangan di javascript
Jangan lupa tambahkan titik koma di belakangnya

contoh :
for ($x = 0; $x < 5; $x++){
    print "Hello World ! <br>";
}

$y = 0;
while ($y < 5){
    echo "Hanif <br>";
$y++;
}

$m = 0;

do {
 echo "Zuhdi <br>";

 $m++;
}while($m < 5)
 */

?>

<!-- html - latihan menggunakan pengulangan -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Latihan</title>
 </head>

 <body>

    <table border = "1" cellspacing = "0" cellpadding = "10">
   
   <?php 
        for ($i = 1; $i <= 3; $i++){
            echo "<tr>";
        for ($x = 1; $x <= 5; $x++){
            echo "<td> $i , $x </td>";
        }
        } 
            echo "</tr>"
        ?>
   
    </table>

 <br><br><br>

    <table border = "1" cellspacing = "0" cellpadding = "10">

        <?php for ($p = 1; $p <= 3; $p++) : ?>
            <tr>
                <?php for ($o = 1; $o <= 5; $o++) : ?>
                <td> <?= "$p , $o"; ?></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>    

    </table>

 </body>
 </html>