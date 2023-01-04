<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
            sname:<input type="text" name="sname"><br>
            password:<input type="password" name="pass"><br>
            mno:<input type="number" name="mno"><br>
            email:<input type="email" name="email"><br>
            <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>

<?php
  if(isset($_REQUEST['submit']))
  {
    require"mainclass.php";
    $obj = new Demo();
    $r = $obj->insert($_REQUEST['sname'],$_REQUEST['pass'],$_REQUEST['mno'],$_REQUEST['email']);
    if($r == true)
    {
        echo "Record inserted successfully";
    }
    else
    {
        echo "not inserted";
    }
  }
 
?>