<!DOCTYPE html>
<html lang="en">
<?php
include_once('defaults/head.php');
include_once('defaults/menu.php');
global $loggedUser;
?>
<br>
<br>
<br>
<br>
<body>
<main>
<div> WELCOME <?= $loggedUser->first_name?>  <?=$loggedUser->last_name ?></div>
</main>
<?php
include_once ('defaults/footer.php');
?>
</body>
</html>
