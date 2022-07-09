<?php

 session_start();
require_once('database.php');

$dbobject=new Database();

$uid=$dbobject->CheckSignIn($_POST['UserName'],$_POST['pwd']);
if(isset($_SESSION["User_id"])){
if($uid){
    $_SESSION['User_id']=$uid;
    $ali=$_SESSION['User_id'];
echo"{$ali}";}

}
// echo "{$_SESSION['User_id']}".'ali';
?>
<html>

<body>
    <form action="insertbird.php" method="get">
        <button type="submit"> Insert Bird Data</button>
    </form>
</body>

</html>