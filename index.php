<?php 

// Pertemuan 2 - sintaks PHP

/*standard output = perintah yang digunakan untuk menampilkan sesuatu pada layar 
beberapa perintahnya yaitu :
1. echo, print = digunakan untuk menampilkan apa yang kita tulis
2. echo_r = digunakan untuk menamoukan array pada halaman (digunakan untuk debugging)
3. var_dump = digunakan untuk melihat isi dari variabel (digunakan untuk debugging)

echo "Hello World"; 
print " Hanif az zuhdi";
*/


/* Penulisan sintaks PHP 
1. PHP didalam HTML
2. HTML didalam PHP (tidak disarankan)
*/


/* variabel dan tipe data 
 - variabel ditulis dengan simbol $
*/
$nama = "Hanif Az Zuhdi";


/* Operator 
1. aritamtika 
+ - * / %
*/
$x = 20;
$y = 30;
$hasil = $x + $y;

/* penggabung string dengan menggunakan titik bukan + seperti js */
$nama_depan = "Hanif";
$nama_belakang = "Zuhdi";
echo $nama_depan . " " . $nama_belakang;

/* Assignment (operator penugasan)
Sama seperti js
*/

/* Operator perbandingan 
Sama seperti perbandingan di javascript
*/

/* Identitas 
- === / !==
*/

/*operator logika
- && / || / !
*/

?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    
    <h1> Halo, nama saya <?php echo $nama ?> </h1>
    <br>
    <?php echo "halo kenalkan nama saya $nama" ?>
    <p> hasil penjumlahan aritmatika php <?php echo $hasil ?> </p>

</body>
</html>