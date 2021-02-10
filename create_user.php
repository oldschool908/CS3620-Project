<?php
require_once('./header.php');
?>

<form method="POST" target="user_insert.php">
Username: <input type="type" name="username"> </br>
First Name: <input type="type" name="firstName"> </br>
Last Name: <input type="type" name="lastName"> </br>
Password: <input type="password" name="password"> </br>
<input type="submit" value="Create User"/>

</form>

<?php
require_once('./footer.php');
?>