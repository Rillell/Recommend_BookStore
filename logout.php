<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["name"]);

echo("
<script>
    location.href = 'BeforeMain.php';
</script>
");
?>