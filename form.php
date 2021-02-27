<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">First Name</label>
    <input type="text" name="fname" id="" required>;
    <label for="">Middle Name</label>
    <input type="text" name="mname" id="" required>;
    <label for="">email</label>
    <input type="email" name="email" id="" required>;
    <label for="">description</label>
    <input type="text" name="description" id="" required>;
    <input type="submit" value="Submit">
    </form>
<?php
if(isset($_POST['submit'])){
 $fname=$_POST['fname'];
 $mname=$_POST['mname'];
 $email=$_POST['email'];
 $description=$_POST['description'];

 echo 'what is your name' .  $fname;
 echo "your middle name is" . $mname;
 echo 'email' .$email;
 echo 'description: ' . $description;
}
?>
</body>
</html>
