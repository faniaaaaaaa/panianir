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
    <input type="submit" name="submit" value="Cek">
    
</form>
<br>

<?php
        $bilangan1="";
        $bilangan2="";
        $a=$_POST['bilangan1'];
        $b=$_POST['bilangan2'];
         if(isset($_POST['submit'])) {
            $bilangan1 = $_POST['bilangan1'];
            if($a > $b){
                echo $a . " merupakan bilangan terbesar";

            } else{
                echo $b . " merupakan bilangan terbesar";

            }
                }
    ?>
</body>
</html>