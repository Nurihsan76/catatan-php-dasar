<?php 

/* pengkondisian pada php persis dengan javascript 
ada beberapa cara :
1. if else
2. if elseif else
3. ternary
4. switch
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian</title>

    <style>
        .warna {
        background-color : grey ;           
        }
        
    </style>
</head>

<body>

<table border = "1" cellspacing = "0" cellpadding = "10">

<?php for ($p = 1; $p <= 5; $p++) : ?>
    <?php if ($p % 2 == 0) : ?>
    <tr class = "warna"> 
    
    <?php elseif ($p % 2 == 1) : ?>
    <tr>
    <?php endif ?>

    <?php for ($o = 1; $o <= 5; $o++) : ?>
    <td> <?= "$p , $o"; ?></td>
    <?php endfor ?>
    </tr>
<?php endfor ?>    

</table>

</body>
</html>