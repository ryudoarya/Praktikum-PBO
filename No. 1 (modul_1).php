<!-- R. Yudo Arya Kusuma
20051397013
D4 MI A -->


<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Menentukan Bilangan</h2>
    <h4>a. Positif Genap</h4> 
    <h4>b. Negatif Genap</h4>
    <h4>c. Positif Ganjil</h4>
    <h4>d. Negatif Ganjil</h4>
    <form method="post" action="">
        <input type="text" name="bilangan" placeholder="masukan bilangan"> 
        <input type="submit" name="submit" value="enter">
    </form>
     <br>

    <?php
    if(isset($_POST['submit']))
    {
        $bilangan = $_POST['bilangan'];
            if($bilangan > 0) {
                echo $bilangan . " merupakan bilangan Positif juga ";
            }elseif ($bilangan < 0){
                echo $bilangan . " merupakan bilangan Negatif juga "; 
            }
           
             if ($bilangan % 2 == 0) {
                echo $bilangan . " bilangan Genap";
            } else {
                echo $bilangan . " bilangan Ganjil";
            }
    }
    ?>

</body>
</html>