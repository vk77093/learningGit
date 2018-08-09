<?php
session_start();

echo $_SESSION["MyName"];

echo $_SESSION["username2"];

?>
<input type="text" name="name2" value="<?php echo $_SESSION['username2']; ?>">
