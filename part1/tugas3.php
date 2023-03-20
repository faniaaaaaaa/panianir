<!DOCTYPE html>
<html>
<head>
    <title>Menentukan Bilangan Terbesar</title>
</head>
<body>
<form method="POST" action="">
    Masukkan bilangan 1 : <input type="number" name="bilangan1"><br/>
     <br>
    Masukkan bilangan 2 : <input type="number" name="bilangan2"><br/>
     <br>
    Masukkan bilangan 3 : <input type="number" name="bilangan3"><br/>
     <br>
    Masukkan bilangan 4 : <input type="number" name="bilangan4"><br/>


    <br>
    <input type="submit" name="submit" value="Cek">
    
</form>
<br>

<?php
        $bilangan1="";
        $bilangan2="";
        $bilangan3="";
        $bilangan4="";


        $a=$_POST['bilangan1'];
        $b=$_POST['bilangan2'];
        $c=$_POST['bilangan3'];
        $d=$_POST['bilangan4'];

        
        if(isset($_POST['submit'])) {
           $bilangan1 = $_POST['bilangan1'];
           if ($a > $b && $a > $c && $a > $d) {
               echo $a . " Adalah bilangan terbesar" ;
          } else if ($b > $a && $b > $c && $b > $d) {
               echo $b . " Adalah bilangan terbesar" ;
          } else if ($c > $a && $c > $b && $c > $d) {
               echo $c . " Adalah bilangan terbesar" ;
          } else if ($d > $a && $d > $b && $d > $c) {
               echo $d . " Adalah bilangan terbesar" ;
          }
     }
   ?>
</body>
</html>