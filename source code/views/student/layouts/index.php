<?php
$page = "layouts";
include(__DIR__ . "/../header.php");
?>

<div>Layouts của student</div>
<?php
if (isset($_SESSION['user'])) echo "", $_SESSION['user'], "";
?>

<?php
include(__DIR__ . "/../footer.php");
?>