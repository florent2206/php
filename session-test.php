<?php
session_start();
var_dump($_SESSION);

?>
<form method="post">
    <input type="text" name="username">
</form>
<?php
if(isset($_POST['username'])){
    $_SESSION['user']=$_POST['username'];
    var_dump($_SESSION);
}
