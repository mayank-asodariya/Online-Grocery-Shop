<?php
require 'db_connect.php';
session_start();
session_unset();
session_destroy();
?>
<form action="logout.php" method="post">
<button type="submit" name="btn">Home</button>
</form>
<?php
if(isset($_POST['btn']))
{
    $q = "UPDATE `pro` SET `inc`='1' WHERE 1";
    $qu = "UPDATE `pro` SET `qu`='0' WHERE 1";
    mysqli_query($conn,$q);
    mysqli_query($conn,$qu);
    echo header("location:one.php");
}
?>