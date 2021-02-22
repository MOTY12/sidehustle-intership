<!doctype html>
<html>
<head>
<title>simple calculator with php</title>
</head>
<form method="POST" action="">
    <label for="">first number</label>
    <input type="number" name="fnumber" required>
    <label for="">second number</label>
    <input type="number" name="snumber" required>
    <label for="">Operator</label>
    <input type="text" name="operator" required>
    <input type="submit" value="calculate" name="submit">
    </form>
    <?php
        if(isset($_POST["submit"])){
            $fnumber=$_POST['fnumber'];
            $snumber=$_POST['snumber'];
            $operator=$_POST['operator'];
            $result= '';
            if($operator == '+'){
                $result= $fnumber + $snumber;
            }elseif($operator == '-'){
                $result= $fnumber - $snumber;
            }elseif ($operator == '*') {
                $result= $fnumber * $snumber;
            }elseif ($operator == '/') {
                $result= $fnumber/$snumber;
            }else{
                echo "there is no operator related ";
            }

            echo "The answer is ". $result;
        }
    ?>  

    </html>